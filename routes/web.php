<?php

use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vehiculecreate');
});
Route::get('/afficherV',  [VehiculeController::class, 'index'])->name('afficherV');

Route::post('/creationVehicule', [VehiculeController::class, 'createVehicule']);