<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FormController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Admin\FormsLivewire;

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

 

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', [FormController::class, 'index']);

    // Route::get('/dashboard', [FormController::class, 'createForm'])->name('create-form');
    // Route::get('/gen-form', [FormController::class, 'form'])->name('gen-form');




    Route::get('/', FormsLivewire::class)->name('gen-form');
});
