<?php

namespace App\Livewire;

use Livewire\Component;

class BattlesList extends Component
{
    public $battles

    public function mount()
    {
        $this->battles = Transaction::
    }

    public function render()
    {
        return view('livewire.battles-list');
    }
}
