<?php

use App\Http\Controllers\PlayersController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamsController;

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

Route::get('/', [TeamsController::class, 'index']);
Route::get('/show/{team}', [TeamsController::class, 'show']);
Route::get('players/{player}', [PlayersController::class, 'show']);