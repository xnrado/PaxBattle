<?php

namespace App\Livewire;

use App\Livewire\Forms\BattleForm;
use App\Models\Battle;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateBattle extends Component
{
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

    public $battle;

//    public function updated($province_id, $value)
//    public function updatedProvinceId($value)
//    {
//        \React\Promise\Timer\sleep(2);
//        $this->battle = Battle::with('user', 'country', 'side')->where('id', '=', $value)->first();
//    }

    public function save()
    {
        $this->validate();

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
