<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('subjects', [SubjectController::class, 'index'])->name('subjects');
Route::get('subjects/{subject}', [SubjectController::class, 'show'])->name('subjects.show');

Route::get('materials', [MaterialController::class, 'index'])->name('materials');
Route::get('materials/{material}', [MaterialController::class, 'show'])->name('materials.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
