<?php

namespace App\Jobs;

use App\Events\GotBattleMove;
use App\Models\BattleMove;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MakeBattleMove implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public BattleMove $battle_move)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        GotBattleMove::dispatch([
            'id' => $this->battle_move->id,
            'battle_id' => $this->battle_move->battle_id,
            'country_id' => $this->battle_move->country_id,
        ]);
    }
}
