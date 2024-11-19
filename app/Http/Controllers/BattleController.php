<?php

namespace App\Http\Controllers;

use App\Jobs\MakeBattleMove;
use App\Models\Battle;
use App\Models\BattleMove;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BattleController extends Controller
{
    public function show($slug): View
    {
        return view('battles.show', [
            'battle' => Battle::query()->where('slug', $slug)->firstOrFail(),
        ]);
    }

    public function moves(): JsonResponse
    {
        $battle_moves = BattleMove::with('battle', 'user')->get()->append('time');

        return response()->json($battle_moves);
    }

    public function move(Request $request, $slug): JsonResponse
    {
        // get battle_id from slug
        $battle_move = BattleMove::create([
            'battle_id' => 1,
            'country_id' => 1,
            'text' => $request['text'],
        ]);
        MakeBattleMove::dispatch($battle_move)
        ;
        return response()->json([
            'success' => true,
            'message' => 'Battle mov created and job dispatched successfully.',
        ]);
    }
}
