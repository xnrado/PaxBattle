<?php

namespace App\Livewire;

use App\Livewire\Forms\BattleForm;
use App\Models\Battle;
use App\Models\Country;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateBattle extends Component
{
    protected $listeners = ['armiesActiveUpdated', 'unitsActiveUpdated'];

    #[Validate('required', message: 'Nazwa bitwy jest wymagana.')]
    #[Validate('min:5')]
    public $name = '';


    public $description = '';

    #[Validate('required')]
    public $province_id = null;

    #[Validate('required')]
    public $x_size = null;

    #[Validate('required')]
    public $y_size = null;

    public $countriesActive = array();
    public $armiesActive = array();
    public $unitsActive = array();


    public $battle;

    public function countriesActiveUpdated($countriesActive)
    {
        $this->countriesActive = $countriesActive;
        $this->skipRender();
    }
    public function armiesActiveUpdated($armiesActive)
    {
        $this->armiesActive = $armiesActive;
        $this->skipRender();
    }
    public function unitsActiveUpdated($unitsActive)
    {
        $this->unitsActive = $unitsActive;
        $this->skipRender();
    }


    public function save()
    {
        $this->validate();

        $province_id = $this->province_id;
        $countries = Country::whereHas('armies', function ($query) use ($province_id) {
        $query->where('province_id', $province_id);
        })
            ->with([
                'armies' => function ($query) use ($province_id) {
                    $query->where('province_id', $province_id)
                        ->with([
                            'units.unitTemplate',
                        ]);
                },
            ])
            ->get();

        $battle = new Battle();
        $battle->name = $this->name;
        $battle->description = $this->description;
        $battle->province_id = $this->province_id;
        $battle->x_size = $this->x_size;
        $battle->y_size = $this->y_size;
        $battle->save();

        session()->flash('status', 'Pomyślnie utworzono bitwę.');

        return $this->redirect(route('battles.index'));
    }

    public function render()
    {
        return view('livewire.create-battle');
    }
}
