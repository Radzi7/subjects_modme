<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('subjects', [SubjectController::class, 'index'])->name('subjects');
Route::get('subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
Route::post('subjects', [SubjectController::class, 'store'])->name('subjects.store');
Route::get('subjects/{subject}', [SubjectController::class, 'show'])->name('subjects.show');
Route::get('subjects/{subject}/edit', [SubjectController::class, 'edit'])->name('subjects.edit');
Route::put('subjects/{subject}', [SubjectController::class, 'update'])->name('subjects.update');
Route::delete('subjects/{subject}', [SubjectController::class, 'delete'])->name('subjects.delete');