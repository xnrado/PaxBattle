<?php

namespace App\Http\Controllers;

use App\Models\Battle;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BattleOverviewController extends Controller
{
    public function show($id): View
    {
        return view('battles.show', [
            'battle' => Battle::query()->findOrFail($id)
        ]);
    }
}
