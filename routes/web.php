<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\EventsController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dbconn', function() {
    return view('dbconn');
});
Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/events', [EventsController::class, 'showEvents'])->name('events');


