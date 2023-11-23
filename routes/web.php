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

// Route::get('/', [SaikoController::class, 'index']);
// Route::get('/saiko/create', [SaikoController::class, 'create']);
// Route::post('/saiko/store', [SaikoController::class, 'store']);


Route::get('/', [SaikoController::class, 'index'])->name('saiko.index');
Route::get('/create', [SaikoController::class, 'create'])->name('main');
Route::post('/store', [SaikoController::class, 'store'])->name('saiko.store');
Route::get('/result', [SaikoController::class, 'result'])->name('saiko.result');


// Route::resource('/', SaikoController::class);

// // Route::resource('/saiko', SaikoController::class);

// Route::get('/result', function (){
//     return view('result');
// });

// Route::post('/submit_answer', function () {
//     $answers = [
//         'q1' => int(request()->get('q1') ?: 0),
//         'q2' => int(request()->get('q2') ?: 0),
//         'q3' => int(request()->get('q3') ?: 0),
//         'q4' => int(request()->get('q4') ?: 0),
//         'q5' => int(request()->get('q5') ?: 0),
//         'q6' => int(request()->get('q6') ?: 0),
//         'q7' => int(request()->get('q7') ?: 0),
//         'q8' => int(request()->get('q8') ?: 0),
//         'q9' => int(request()->get('q9') ?: 0),
//         'q10' => int(request()->get('q10') ?: 0),
//         'q11' => int(request()->get('q11') ?: 0),
//         'q12' => int(request()->get('q12') ?: 0),
//         'q13' => int(request()->get('q13') ?: 0),
//         'q14' => int(request()->get('q14') ?: 0),
//         'q15' => int(request()->get('q15') ?: 0),
//         'q16' => int(request()->get('q16') ?: 0),
//         'q17' => int(request()->get('q17') ?: 0),
//         'q18' => int(request()->get('q18') ?: 0),
//         'q19' => int(request()->get('q19') ?: 0),
//         'q20' => int(request()->get('q20') ?: 0),
//     ];

//     $total = collect($answers)->sum();

//     // Simpan jawaban ke database
//     // ...

//     // Kembalikan respons
//     return redirect()->to('/results');
// });