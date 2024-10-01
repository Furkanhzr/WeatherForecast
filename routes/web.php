<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
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
    return view('index');
})->name('index');

Route::post('/find-place', [WeatherController::class, 'find_place'])->name('find-place');
Route::get('/current', [WeatherController::class, 'current'])->name('current');
Route::get('/daily', [WeatherController::class, 'daily'])->name('daily');

