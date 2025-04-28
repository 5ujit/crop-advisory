<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CropController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\PestAlertController;
use App\Http\Controllers\CropSuggestionController;

Route::get('/', function () {
    return view('home');
});

Route::resource('crops', CropController::class); // RESTful resource route for CRUD operations
Route::get('/weather', [WeatherController::class, 'index'])->name('weather.index');
Route::get('/pest-alerts', [PestAlertController::class, 'index'])->name('pest-alerts.index');
// Route to display the initial form (using GET)
Route::get('/crop-suggestions', [CropSuggestionController::class, 'index'])->name('crop-suggestions.index');

// Route to handle the POST request for fetching suggestions
Route::post('/crop-suggestions', [CropSuggestionController::class, 'getSuggestions'])->name('crop-suggestions.getSuggestions');

// Admin route to store crop suggestion + image
Route::post('/crop-suggestions/store', [CropSuggestionController::class, 'store'])->name('crop-suggestions.store');

Route::get('/pest-alerts/filter', [PestAlertController::class, 'filter'])->name('pestalerts.filter');
