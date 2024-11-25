<?php


use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;


Route::get('/weather', [WeatherController::class, 'getWeather']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personal', function () {
    return view('personal');
})->name('personalpage');

Route::view('/talaan', 'contacts');


Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::post('/books', [BookController::class, 'store']);
Route::put('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);
Route::get('/token', function () {
    return csrf_token();
});