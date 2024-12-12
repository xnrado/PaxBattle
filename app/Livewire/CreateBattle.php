<?php

namespace App\Livewire;

use App\Livewire\Forms\BattleForm;
use App\Models\Battle;
use App\Models\BattleCountryUser;
use App\Models\Country;
use App\Models\Province;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateBattle extends Component
{
    //// Variables
    #[Validate('required', message: 'Nazwa bitwy jest wymagana.')]
    #[Validate('min:5')]
    public $name = '';

    public $description = '';

    #[Validate('required')]
    public $province_id = 1; // This has to be predefined, otherwise weird things happen with lazy loading

    #[Validate('required')]
    public $x_size = null;
    // These should be predefined as well in the future
    #[Validate('required')]
    public $y_size = null;

    public $active = array();
    #[Computed]
    public function provinces(): Collection
    {
        return Province::query()->get();

    }

    //// Listeners
    protected $listeners = ['activeUpdated', 'battleSave'];
    public function activeUpdated($active)
    {
        $this->active = $active;
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

        // Insert Battle
        $battle = new Battle([
            'name' => $this->name,
            'description' => $this->description,
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
            if ($faction_id == 0) { // If equal to 0, then non-aligned
                $faction_id = null;
            }
            foreach ($faction['countries'] as $country_id => $country) {
                // Country
                BattleCountryUser::create([
                    'user_id' => $country['user_id'],
                    'country_id' => $country_id,
                    'battle_id' => $battle->id,
                    'faction_id' => $faction_id,
                    'is_active' => $country['active'],
                ]);
                foreach ($country['armies'] as $army_id => $army) {

                    foreach ($army['units'] as $unit_id => $unit) {

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
