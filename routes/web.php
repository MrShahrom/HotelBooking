<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BronController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource("/room", RoomController::class);
Route::resource("/client", ClientController::class);
Route::resource('/brons', BronController::class);

Route::any('/', [BronController::class, 'index']);
// Route::get('/brons/create', [BronController::class, 'create'])->name('bron.create');
// Route::get('/bron/create', function () {
//     return view('brons.test');
// })->name('bron.create');

Route::post('/brons', [BronController::class, 'store'])->name('brons.store');
Route::get('/brons/create', [BronController::class, 'create'])->name('brons.create');
