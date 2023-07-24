<?php

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('subjects', [SubjectController::class, 'store'])->name('subjects.store');
Route::put('subjects', [SubjectController::class, 'update'])->name('subjects.update'); 
Route::delete('subjects', [SubjectController::class, 'delete'])->name('subjects.delete');

Route::post('materials', [MaterialController::class, 'store'])->name('materials.store');
Route::put('materials', [MaterialController::class, 'update'])->name('materials.update'); 
Route::delete('materials', [MaterialController::class, 'delete'])->name('materials.delete');
