<?php

namespace App\Livewire;

use App\Models\BattleCountryUser;
use App\Models\Country;
use App\Models\Province;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Computed;

class BattleArmiesList extends Component
{
    //// Variables
    public $province_id;

    #[Validate([
        'active.factions.*.countries.*.user_id' => [
            'min:1'
        ],

    ], message: [
        'active.factions.*.countries.*.user_id.min' => 'Żadne państwo nie może być bez gracza. :attribute',
    ]
    )]
    public $active = array('factions' => [0 => []]);
    #[Computed]
    public function countries()
    {
        $province_id = $this->province_id;
        return Country::whereHas('armies', function ($query) use ($province_id) {
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
    }
    #[Computed]
    public function users(): Collection
    {
        return User::all();
    }

    //// Listeners
    protected $listeners = ['preValidate', 'armyValidate'];
    public function preValidate()
    {
        $this->validate();
    }
    public function armyValidate()
    {
        $this->dispatch('activeUpdated', $this->active);
        $this->validate();
        $this->dispatch('battleSave');
    }

    //// Functions
    public function mount($province_id): void
    {
        $this->province_id = $province_id;

        // active[0] is for non-aligned, other keys are faction id's
        foreach ($this->countries as $country) {
            $this->active['factions'][0]['countries'][$country->id] = [
                'active' => true,
                'user_id' => $country->user ? "{$country->user->id}" : null,
                'armies' => [],
            ];
            foreach ($country->armies as $army) {
                $this->active['factions'][0]['countries'][$country->id]['armies'][$army->id] = [
                    'active' => true,
                    'units' => [],
                ];
                foreach ($army->units as $unit) {
                    $this->active['factions'][0]['countries'][$country->id]['armies'][$army->id]['units'][$unit->id] = [
                        'active' => true,
                    ];
                }
            }
        }

        //array:1 [▼
        //  "factions" => array:1 [▼
        //    0 => array:1 [▼
        //      "countries" => array:2 [▼
        //        1 => array:3 [▶]
        //        2 => array:3 [▼
        //          "active" => true
        //          "user_id" => "751909872890675291"
        //          "armies" => array:3 [▼
        //            3 => array:2 [▶]
        //            4 => array:2 [▶]
        //            5 => array:2 [▼
        //              "active" => true
        //              "units" => array:3 [▼
        //                10 => array:1 [▶]
        //                11 => array:1 [▶]
        //                12 => array:1 [▼
        //                  "active" => true
        //                ]
        //              ]
        //            ]
        //          ]
        //        ]
        //      ]
        //    ]
        //  ]
        //]

        $this->dispatch('activeUpdated', $this->active);
    }

//    public function updatedActive($value)
//    {
//        $this->dispatch('activeUpdated', $this->active);
//    }



    public function placeholder(): string
    {
//        \React\Promise\Timer\sleep(1);
        return <<<'HTML'
        <div class="block">
            <!-- Loading spinner... -->
            <svg class="m-auto" width="160" height="160" stroke="#d8dee9" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_V8m1{transform-origin:center;animation:spinner_zKoa 2s linear infinite}.spinner_V8m1 circle{stroke-linecap:round;animation:spinner_YpZS 1.5s ease-in-out infinite}@keyframes spinner_zKoa{100%{transform:rotate(360deg)}}@keyframes spinner_YpZS{0%{stroke-dasharray:0 150;stroke-dashoffset:0}47.5%{stroke-dasharray:42 150;stroke-dashoffset:-16}95%,100%{stroke-dasharray:42 150;stroke-dashoffset:-59}}</style><g class="spinner_V8m1"><circle cx="12" cy="12" r="9.5" fill="none" stroke-width="3"></circle></g></svg>
        </div>
        HTML;
    }

    public function render(): View
    {
        return view('livewire.battle-armies-list');
    }
}
