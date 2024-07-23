<?php

use App\Http\Controllers\FirstController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [FirstController::class, 'index']);

Route::get('/perkalian/{angka}', [FirstController::class, 'perkalian']);

Route::get('/tambah', [FirstController::class, 'tambah']);

Route::get('/create', [FirstController::class, 'create'])->name('create');
Route::post('/insert', [FirstController::class, 'insert'])->name('insert');

Route::get('/show', [FirstController::class, 'show'])->name('show');
