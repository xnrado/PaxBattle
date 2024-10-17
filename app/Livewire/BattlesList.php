<?php

namespace App\Livewire;

use App\Models\Battle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Province;

class BattlesList extends Component
{
    public $battles;

    public function mount()
    {
        \React\Promise\Timer\sleep(1);
        $this->battles = Battle::with('player', 'country')->where('player_id', '=', Auth::id());
        dd($this->battles);
//        $this->battles = [
//            [
//                'battle_id' => 1,
//                'battle_title' => 'Bitwa Kizgadzka',
//                'battle_image' => 'nord.webp',
//                'battle_countries' => [
//                    [
//                        'country_image' => 'karbadia.png',
//                        'country_name' => 'Karbadia',
//                        'country_color' => '#2A6B11',
//                        'text_color' => getContrastColor('#2A6B11')
//                    ],
//                    [
//                        'country_image' => 'neuord.png',
//                        'country_name' => 'Neuord Drakonis',
//                        'country_color' => '#7F1B10',
//                        'text_color' => getContrastColor('#7F1B10')
//                    ]
//                ]
//            ],
//            [
//                'battle_id' => 2,
//                'battle_title' => 'Bitwa Nordycka',
//                'battle_image' => 'pagan.webp',
//                'battle_countries' => [
//                    [
//                        'country_image' => 'karbadia.png',
//                        'country_name' => 'Karbadia',
//                        'country_color' => '#2A6B11',
//                        'text_color' => getContrastColor('#2A6B11')
//                    ],
//                    [
//                        'country_image' => 'neuord.png',
//                        'country_name' => 'Neuord Drakonis',
//                        'country_color' => '#7F1B10',
//                        'text_color' => getContrastColor('#7F1B10')
//                    ]
//
//                ]
//            ],
//            [
//                'battle_id' => 3,
//                'battle_title' => 'Bitwa Słowiańska',
//                'battle_image' => 'viking.webp',
//                'battle_countries' => [
//                    [
//                        'country_image' => 'karbadia.png',
//                        'country_name' => 'Karbadia',
//                        'country_color' => '#2A6B11',
//                        'text_color' => getContrastColor('#2A6B11')
//                    ],
//                    [
//                        'country_image' => 'neuord.png',
//                        'country_name' => 'Neuord Drakonis',
//                        'country_color' => '#7F1B10',
//                        'text_color' => getContrastColor('#7F1B10')
//                    ],
//                    [
//                        'country_image' => 'sylvania.webp',
//                        'country_name' => 'Nieumarli',
//                        'country_color' => '#AEDAED',
//                        'text_color' => getContrastColor('#AEDAED')
//                    ]
//
//                ]
//            ]
//        ];
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div class="block">
            <!-- Loading spinner... -->
            <svg class="m-auto" width="160" height="160" stroke="#d8dee9" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_V8m1{transform-origin:center;animation:spinner_zKoa 2s linear infinite}.spinner_V8m1 circle{stroke-linecap:round;animation:spinner_YpZS 1.5s ease-in-out infinite}@keyframes spinner_zKoa{100%{transform:rotate(360deg)}}@keyframes spinner_YpZS{0%{stroke-dasharray:0 150;stroke-dashoffset:0}47.5%{stroke-dasharray:42 150;stroke-dashoffset:-16}95%,100%{stroke-dasharray:42 150;stroke-dashoffset:-59}}</style><g class="spinner_V8m1"><circle cx="12" cy="12" r="9.5" fill="none" stroke-width="3"></circle></g></svg>
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.battles-list');
    }
}
