<?php

namespace App\Livewire;

use App\Models\Battle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\View\View;

class BattlesList extends Component
{
    public $battles;

    public function mount(): void
    {
        $this->battles = Battle::with('user', 'country')->whereRelation('user', 'id', '=', Auth::id())->get();

    }

    public function placeholder(): string
    {
        return <<<'HTML'
        <div class="flex justify-center bg-nord-0 text-nord-6 overflow-hidden shadow-sm sm:rounded-lg w-48 h-48">
                    <!-- Loading spinner... -->
                    <svg class="m-auto" width="160" height="160" stroke="#d8dee9" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_V8m1{transform-origin:center;animation:spinner_zKoa 2s linear infinite}.spinner_V8m1 circle{stroke-linecap:round;animation:spinner_YpZS 1.5s ease-in-out infinite}@keyframes spinner_zKoa{100%{transform:rotate(360deg)}}@keyframes spinner_YpZS{0%{stroke-dasharray:0 150;stroke-dashoffset:0}47.5%{stroke-dasharray:42 150;stroke-dashoffset:-16}95%,100%{stroke-dasharray:42 150;stroke-dashoffset:-59}}</style><g class="spinner_V8m1"><circle cx="12" cy="12" r="9.5" fill="none" stroke-width="3"></circle></g></svg>
        </div>
        HTML;
    }

    public function render(): View
    {
        return view('livewire.battles-list');
    }
}
