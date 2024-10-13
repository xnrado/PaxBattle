<?php

namespace App\Livewire;

use Livewire\Component;
//use App\Models\

class BattlesList extends Component
{
    public $battles;

    public function mount()
    {
        //$this->battles =
    }

    public function render()
    {
        return view('livewire.battles-list');
    }
}
