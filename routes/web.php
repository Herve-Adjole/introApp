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
    return view('main');
});

use App\Http\Controllers\PageController;

Route::get('/page1', [PageController::class, 'page1'])->name('page1');
Route::get('/page2', [PageController::class, 'page2'])->name('page2');
Route::get('/page3', [PageController::class, 'page3'])->name('page3');

