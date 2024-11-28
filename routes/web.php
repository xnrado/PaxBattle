<?php

use App\Http\Controllers\ImageViewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BattleController;
use App\Models\Province;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->middleware(RedirectIfAuthenticated::class);

Route::get('/dev', function () {
    return view('login-dev');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $provinces = Province::all();
        return view('dashboard', ['provinces' => $provinces]);
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::get('/battles', function () {
        return view('battles.index');
    })->name('battles.index');
    Route::get('/battles/create', function () {
        return view('battles.create');
    })->name('battles.create');
    Route::post('/battles', [BattleController::class, 'store'])->name('battles.store');

    Route::get('/countries', function () {
        return view('countries.index');
    })->name('countries.index');

    Route::get('/images/{img}', [ImageViewController::class, 'img'])->name('images');


});
Route::get('/battles/{slug}', [BattleController::class, 'show'])->name('battles.show');
Route::get('/battles/{slug}/map', [BattleController::class, 'map'])->name('battles.map');
Route::get('/battles/{slug}/armies', [BattleController::class, 'armies'])->name('battles.armies');
Route::get('/battles/{slug}/actions', [BattleController::class, 'actions'])->name('battles.actions');
Route::get('/battles/{slug}/options', [BattleController::class, 'options'])->name('battles.options');
Route::get('/battles/{slug}/moves', [BattleController::class, 'moves'])->name('battles.moves');
Route::post('/battles/{slug}/move', [BattleController::class, 'move'])->name('battles.move');


//Route::get('/battles', function () {
//    return view('battles.index');
//})->middleware(['auth'])->name('battles.index');
//
//Route::get('/battles/create', function () {
//    return view('battles.create');
//})->middleware(['auth'])->name('battles.create');
//
//Route::get('/battles/{id}', [BattleOverviewController::class, 'show'])->name('battles.show');
//
//Route::get('/images/{img}', [ImageViewController::class, 'img'])->name('images');


//$url = route('profile');
