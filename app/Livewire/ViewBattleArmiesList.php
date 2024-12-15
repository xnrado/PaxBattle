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

class ViewBattleArmiesList extends Component
{
    //// Variables
    public $editable = false;

    public $battle_id;

    #[Validate([
        'active.factions.*.countries.*.user_id' => [
            'min:1'
        ],

    ], message: [
        'active.factions.*.countries.*.user_id.min' => 'Żadne państwo nie może być bez gracza.',
    ]
    )]
    public $active = array('factions' => [null => []]);
    #[Computed]
    public function countries_factions()
    {
        $battle_id = $this->battle_id;

        // Get Info
        $countries = Country::whereHas('battles', function ($query) use ($battle_id) {
            $query->where('id', $battle_id);
        })
            ->with(['user',
                'battle_country_user' => function ($query) use ($battle_id) {
                $query->where('battle_id', $battle_id);
                },
                'faction' => function ($query) use ($battle_id) {
                    $query->where('battle_id', $battle_id);
                },
                'battle_armies' => function ($query) use ($battle_id) {
                    $query->where('battle_id', $battle_id)
                        ->with([
                            'battle_units' => function ($query) use ($battle_id) {
                            $query->where('battle_id', $battle_id)
                                ->with([
                                    'unit_template'
                                ]);
                            }
                        ]);
                },
            ])
            ->get();

        // Rename relations
        $countries->each(function ($country) {
            $country->setRelation('armies', $country->getRelation('battle_armies'));

            $country->armies->each(function ($army) {
                $army->setRelation('units', $army->getRelation('battle_units'))->makeHidden('battle_units');
            });

            $country->unsetRelation('battle_armies');
        });

        $rcountries = new Collection;
        $factions = new Collection;
        foreach ($countries as $country) {
            if ($country->faction && !$factions->contains($country->faction)) {
                $factions->push($country->faction->setRelation('countries' , new Collection));
//                dd($factions);
            }
            if ($country->faction) {
                $factionId = $country->faction->id;
                $key = $factions->search(function ($faction) use ($factionId) {
                    return $faction->id === $factionId;
                });
                $factions[$key]->countries->push($country);
            } else {
                $rcountries->push($country);
            }
        }
//        dd($rcountries, $factions);
        return [$rcountries, $factions];
    }
    #[Computed]
    public function countries(): Collection
    {
        return $this->countries_factions[0];
    }
    #[Computed]
    public function factions(): Collection
    {
        return $this->countries_factions[1];
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
    public function mount($battle_id): void
    {
        $this->battle_id = $battle_id;

        // active[factions][null] is for non-aligned, other keys are faction id's
        foreach ($this->countries as $country) {
            $this->active['factions'][null]['countries'][$country->id] = [
                'active' => $country->battle_country_user->is_active == 1,
                'user_id' => $country->user ? "{$country->user->id}" : null,
                'armies' => [],
            ];
            foreach ($country->armies as $army) {
                $this->active['factions'][null]['countries'][$country->id]['armies'][$army->id] = [
                    'active' => $army->is_active == 1,
                    'units' => [],
                ];
                foreach ($army->units as $unit) {
                    $this->active['factions'][null]['countries'][$country->id]['armies'][$army->id]['units'][$unit->id] = [
                        'active' => $unit->is_active == 1,
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
//        dd($this->active);
        //active.factions..countries.1.armies.2.units.4.active
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
