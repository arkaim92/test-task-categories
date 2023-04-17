<?php

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
Route::group(['middleware' => 'language'], function () {
    Route::get('/categories/{language:code}', [\App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');

    Route::post('/categories/{language:code}', [\App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');
});

