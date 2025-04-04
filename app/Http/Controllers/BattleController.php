<?php

namespace App\Http\Controllers;

use App\Jobs\MakeBattleMove;
use App\Models\Battle;
use App\Models\BattleMove;
use Illuminate\Database\Events\StatementPrepared;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class BattleController extends Controller
{
    public function index(): View
    {
        return view('battles.index');
    }
    public function image($slug): BinaryFileResponse
    {
        $battle = Battle::query()->where('slug', $slug)->first(['image']);

        if (Storage::disk('local')->missing($battle->image)) {
            abort(404);
        }

        return Storage::disk('local')->;
    }
    public function create(): View
    {
        return view('battles.create');
    }
    public function show($slug): View
    {
        return view('battles.show', [
            'battle' => Battle::query()->where('slug', $slug)->firstOrFail(),
        ]);
    }
    public function map($slug): View
    {
        return view('battles.map', [
            'battle' => Battle::query()->where('slug', $slug)->firstOrFail(),
        ]);
    }
    public function armies($slug): View
    {
        return view('battles.armies', [
            'battle' => Battle::query()->where('slug', $slug)->firstOrFail(),
        ]);
    }
    public function actions($slug): View
    {
        return view('battles.actions', [
            'battle' => Battle::query()->where('slug', $slug)->firstOrFail(),
        ]);
    }
    public function options($slug): View
    {
        return view('battles.options', [
            'battle' => Battle::query()->where('slug', $slug)->firstOrFail(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img/battles', 'public');
        } else {
            $imagePath = null;
        }

        Battle::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('battles.create')->with('success', 'Battle created!');
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
