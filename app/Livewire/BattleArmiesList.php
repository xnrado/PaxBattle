<?php

namespace App\Livewire;

use App\Models\Country;
use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Computed;

class BattleArmiesList extends Component
{
    protected $listeners = ['callSendOnSave'];

    public $test;
    public $province_id;
    public $countriesActive = array();
    public $armiesActive = array();
    public $unitsActive = array();
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
    public function users()
    {
        return User::all();
    }

    public function callSendOnSave()
    {
        $this->sendOnSave();
    }

    public function mount($province_id): void
    {
        $this->province_id = $province_id;

        foreach ($this->countries as $country) {
            $this->countriesActive[$country->id] = true;
            foreach ($country->armies as $army) {
                $this->armiesActive[$army->id] = true;
                foreach ($army->units as $unit) {
                    $this->unitsActive[$unit->id] = true;
                }
            }
        }
        $this->dispatch('countriesActiveUpdated', $this->countriesActive);
        $this->dispatch('armiesActiveUpdated', $this->armiesActive);
        $this->dispatch('unitsActiveUpdated', $this->unitsActive);
    }

    public function updatedCountriesActive($value)
    {
        $this->dispatch('countriesActiveUpdated', $this->countriesActive);
    }

    public function updatedArmiesActive($value)
    {
        $this->dispatch('armiesActiveUpdated', $this->armiesActive);
        $this->skipRender();
    }

    public function updatedUnitsActive($value)
    {
        $this->dispatch('unitsActiveUpdated', $this->unitsActive);
        $this->skipRender();
    }

    public function sendOnSave()
    {
        $this->dispatch('countriesActiveUpdated', $this->countriesActive);
        $this->dispatch('armiesActiveUpdated', $this->armiesActive);
        $this->dispatch('unitsActiveUpdated', $this->unitsActive);
        $this->skipRender();
    }

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
