<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdditionController;
use App\Http\Controllers\MultiplicationController;


use App\Http\Controllers\PageController;

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
    return view('layouts.app');
});



Route::get('/addition', [AdditionController::class, 'index'])->name('addition');
Route::post('/additionSimple', [AdditionController::class, 'additionSimple'])->name('additionSimple');


Route::get('/multiplication', [MultiplicationController::class, 'index'])->name('multiplication');
Route::post('/multiplication', [MultiplicationController::class, 'multiplication'])->name('multiplication');

Route::get('/page3', [PageController::class, 'page3'])->name('page3');

