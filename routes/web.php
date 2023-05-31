<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

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

Route::post('/create', [ClientController::class, 'store'])->name('store');
Route::get('/create', [ClientController::class, 'index'])->name('index');
Route::get('/inicio', [ClientController::class, 'start'])->name('start');

Route::get('/', function () {
    return view('welcome');
});
