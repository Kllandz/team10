<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
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
Route::get('/',function(){
        return redirect('players');
});
Route::get('players',[PlayersController::class, 'index'])->name('players.index');
Route::get('players/{id}', [PlayersController::class, 'show'])->where('id', '[0-9]+')->name('players.show');
Route::get('players/{id}/edit', [PlayersController::class, 'edit'])->where('id', '[0-9]+')->name('players.edit');
Route::delete('players/delete/{id}', [PlayersController::class, 'destroy'])->where('id', '[0-9]+')->name('players.destroy');

Route::get('teams',[TeamsController::class, 'index'])->name('teams.index');
Route::get('teams/{id}', [TeamsController::class, 'show'])->where('id', '[0-9]+')->name('teams.show');
Route::get('teams/{id}/edit', [TeamsController::class, 'edit'])->where('id', '[0-9]+')->name('teams.edit');
Route::delete('teams/delete/{id}', [TeamsController::class, 'destroy'])->where('id', '[0-9]+')->name('teams.destroy');
