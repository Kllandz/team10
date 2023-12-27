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
// 顯示所有選手資料
Route::get('players',[PlayersController::class, 'index'])->name('players.index');
// 選定位置查詢選手
Route::get('players/postition', [PlayersController::class, 'postition'])->name('players.postition');
// 顯示男選手資料
Route::get('players/male',[PlayersController::class, 'male'])->name('players.male');
// 顯示女選手資料
Route::get('players/female',[PlayersController::class, 'female'])->name('players.female');
// 顯示單一選手資料
Route::get('players/{id}', [PlayersController::class, 'show'])->where('id', '[0-9]+')->name('players.show');
// 修改單一選手資料
Route::get('players/{id}/edit', [PlayersController::class, 'edit'])->where('id', '[0-9]+')->name('players.edit');
// 刪除單一選手資料
Route::delete('players/delete/{id}', [PlayersController::class, 'destroy'])->where('id', '[0-9]+')->name('players.destroy');
// 新增選手表單
Route::get('players/create', [PlayersController::class, 'create'])->name('players.create');
// 修改選手表單
Route::get('players/{id}/edit', [PlayersController::class, 'edit'])->where('id', '[0-9]+')->name('players.edit');
// 修改選手資料
Route::patch('players/update/{id}', [PlayersController::class, 'update'])->where('id', '[0-9]+')->name('players.update');
// 儲存新選手資料
Route::post('players/store', [PlayersController::class, 'store'])->where('id', '[0-9]+')->name('players.store');

Route::get('teams',[TeamsController::class, 'index'])->name('teams.index');
Route::get('teams/{id}', [TeamsController::class, 'show'])->where('id', '[0-9]+')->name('teams.show');
Route::get('teams/{id}/edit', [TeamsController::class, 'edit'])->where('id', '[0-9]+')->name('teams.edit');
// 刪除單一戰隊及旗下選手資料
Route::delete('teams/delete/{id}', [TeamsController::class, 'destroy'])->where('id', '[0-9]+')->name('teams.destroy');
// 新增戰隊表單
Route::get('teams/create', [TeamsController::class, 'create'])->name('teams.create');
// 修改戰隊表單
Route::get('teams/{id}/edit', [TeamsController::class, 'edit'])->where('id', '[0-9]+')->name('teams.edit');
// 修改戰隊資料
Route::patch('teams/update/{id}', [TeamsController::class, 'update'])->where('id', '[0-9]+')->name('teams.update');
// 儲存新戰隊資料
Route::post('teams/store', [TeamsController::class, 'store'])->name('teams.store');

// 顯示賽區第一
Route::get('teams/rank1', [TeamsController::class, 'rank1'])->name('teams.rank1');
// 顯示賽區第二
Route::get('teams/rank2', [TeamsController::class, 'rank2'])->name('teams.rank2');
// 顯示賽區第三
Route::get('teams/rank3', [TeamsController::class, 'rank3'])->name('teams.rank3');
// 顯示賽區第四
Route::get('teams/rank4', [TeamsController::class, 'rank4'])->name('teams.rank4');