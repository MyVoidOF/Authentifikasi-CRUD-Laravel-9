<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    return view('welcome');
});

Route::get('/',[MahasiswaController::class, 'index'])->name('read')->middleware('auth');

Route::get('create',[MahasiswaController::class, 'create'])->name('create')->middleware('auth');

Route::post('insert',[MahasiswaController::class, 'insert'])->name('insert')->middleware('auth');

Route::get('edit/{nim}',[MahasiswaController::class, 'edit'])->name('edit')->middleware('auth');

Route::post('update/{nim}',[MahasiswaController::class, 'update'])->name('update')->middleware('auth');

Route::get('delete/{nim}',[MahasiswaController::class, 'delete'])->name('delete')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
