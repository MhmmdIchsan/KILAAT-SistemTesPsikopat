<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaikoController;

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

Route::get('/', [SaikoController::class, 'index'])->name('saiko.index');
Route::get('/create', [SaikoController::class, 'create'])->name('main');
Route::post('/store', [SaikoController::class, 'store'])->name('saiko.store');
Route::get('/result', [SaikoController::class, 'result'])->name('saiko.result');