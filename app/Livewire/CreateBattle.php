<?php

namespace App\Livewire;

use App\Livewire\Forms\BattleForm;
use App\Models\Battle;
use App\Models\Country;
use App\Models\Province;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateBattle extends Component
{
    protected $listeners = ['countriesActiveUpdated', 'armiesActiveUpdated', 'unitsActiveUpdated'];

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

    public $countriesActive = array();
    public $armiesActive = array();
    public $unitsActive = array();

    #[Computed]
    public function provinces(): Collection
    {
        return Province::all();
    }


    public $battle;

    public function countriesActiveUpdated($countriesActive)
    {
        $this->countriesActive = $countriesActive;
    }
    public function armiesActiveUpdated($armiesActive)
    {
        $this->armiesActive = $armiesActive;
    }
    public function unitsActiveUpdated($unitsActive)
    {
        $this->unitsActive = $unitsActive;
    }


    public function save()
    {
        $this->validate();
        $this->dispatch('callSendOnSave');

        $province_id = $this->province_id;
//        $countries = Country::whereHas('armies', function ($query) use ($province_id) {
//        $query->where('province_id', $province_id);
//        })
//            ->with(['user',
//                'armies' => function ($query) use ($province_id) {
//                    $query->where('province_id', $province_id)
//                        ->with([
//                            'units.unit_template',
//                        ]);
//                },
//            ])
//            ->get();

        $battle = new Battle([
            'name' => $this->name,
            'description' => $this->description,
            'province_id' => $this->province_id,
            'x_size' => $this->x_size,
            'y_size' => $this->y_size,
        ]);
        $battle->save();

//        $pivots = [];
//        foreach ($countries as $country) {
//            $pivots[$country->id] = ['user_id' => $country->user->id, 'is_active' => 1];
//            $battle->country()->attach($country, ['user_id' => $country->user->id, 'is_active' => 1]);
//        }
//        $battle->country()->attach($pivots);
//        $battle->save();


        session()->flash('status', 'Pomyślnie utworzono bitwę.');

        return $this->redirect(route('battles.index'));
    }

    public function render()
    {
        return view('livewire.create-battle');
    }
}
