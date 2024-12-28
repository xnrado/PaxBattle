<?php

use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "api" middleware group.
|
*/

Route::get('/api/users', UserController::class)->name('api.users');
