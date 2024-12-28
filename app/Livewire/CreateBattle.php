<?php

namespace App\Livewire;

use App\Models\Battle;
use App\Models\BattleArmy;
use App\Models\BattleCountryUser;
use App\Models\BattleUnit;
use App\Models\Country;
use App\Models\Province;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBattle extends Component
{
    use WithFileUploads;

    //// Variables
    // Simple
    #[Validate('required', message: 'Nazwa bitwy jest wymagana.')]
    #[Validate('min:5', message: 'Nazwa bitwy musi mieć przynajmniej 5 znaków.')]
    public $name = '';

    #[Validate('nullable')]
    public $description = '';

    #[Validate('max:10240')]
    public $image;

    #[Validate('required')]
    public $province_id = 1; // This has to be predefined, otherwise weird things happen with lazy loading

    #[Validate('required')]
    #[Validate('numeric')]
    #[Validate('min:10')]
    public $x_size = 10;

    #[Validate('required')]
    #[Validate('numeric')]
    #[Validate('min:10')]
    public $y_size = 10;

    // Listenable
    public $active = array();

    // Computed
    #[Computed]
    public function provinces(): Collection
    {
        return Province::query()->get();

    }

    //// Listeners
    protected $listeners = ['activeUpdated', 'imageUpdated', 'battleSave'];
    public function activeUpdated($active)
    {
        $this->active = $active;
    }
    public function imageUpdated($image)
    {
        $this->image = $image;
    }
    public function battleSave()
    {
        $this->save();
    }

    //// Functions
    public function submit()
    {
        $this->dispatch('preValidate');
        $this->validate();
        $this->dispatch('armyValidate');
    }

    public function save()
    {
        $image_path = null;
        if ($this->image) {
            $image_path = $this->image->store('img/battles', 'public');
        }

        // Insert Battle
        $battle = new Battle([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $image_path,
            'province_id' => $this->province_id,
            'x_size' => $this->x_size,
            'y_size' => $this->y_size,
        ]);
        $battle->save();

        // Get countries to insert them into battle tables
        $province_id = $this->province_id;
        $countries = Country::whereHas('armies', function ($query) use ($province_id) {
            $query->where('province_id', $province_id);
        })
            ->with(['user',
                'armies' => function ($query) use ($province_id) {
                    $query->where('province_id', $province_id)
                        ->with([
                            'units.unit_template',
                        ]);
                },
            ])
            ->get();

        foreach ($this->active['factions'] as $faction_id => $faction) {
            foreach ($faction['countries'] as $battle_country_id => $battle_country) { // $country_id = ['active', 'user_id', 'armies']
                // Add Factions and Countries
                BattleCountryUser::create([
                    'user_id' => $battle_country['user_id'],
                    'country_id' => $battle_country_id,
                    'battle_id' => $battle->id,
                    'faction_id' => $faction_id == '' ? null : $faction_id,
                    'is_active' => $battle_country['active'],
                ]);
                foreach ($battle_country['armies'] as $battle_army_id => $battle_army) { // $army_id = ['active', 'units']
                    // Add Armies
                    $army = $countries->find($battle_country_id)->armies->find($battle_army_id); // $army = ['id', 'country_id', 'province_id', 'name']
                    BattleArmy::create([
                        'id' => $battle_army_id,
                        'country_id' => $battle_country_id,
                        'battle_id' => $battle->id,
                        'name' => $army->name,
                        'is_active' => $battle_army['active'],
                    ]);
                    foreach ($battle_army['units'] as $battle_unit_id => $battle_unit) { // $unit_id = ['active']
                        $unit = $army->units->find($battle_unit_id); // $unit = ['id', 'unit_template_id', 'origin_id', 'army_id', 'name', 'left_movement', 'is_visible', 'manpower', 'is_conscripted']
                        BattleUnit::create([
                            'id' => $battle_unit_id,
                            'unit_template_id' => $unit->unit_template_id,
                            'origin_id' => $unit->origin_id,
                            'battle_id' => $battle->id,
                            'battle_army_id' => $battle_army_id,
                            'name' => $unit->name,
                            'left_movement' => $unit->left_movement,
                            'is_visible' => $unit->is_visible,
                            'manpower' => $unit->manpower,
                            'is_conscripted' => $unit->is_conscripted,
                            'is_active' => $battle_unit['active'],
                        ]);
                    }
                }
            }
        }


        session()->flash('status', 'Pomyślnie utworzono bitwę.');

        return $this->redirect(route('battles.index'));
    }

    public function render()
    {
        return view('livewire.create-battle');
    }
}
