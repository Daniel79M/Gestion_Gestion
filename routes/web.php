<?php

use App\Http\Controllers\VehiculeController;
use App\Models\Vehicule;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $vehicule = Vehicule::all();
    return view('Vehicules.index',[
        'vehicule' => $vehicule
    ]);
})->name('index');

Route::get('/afficherV',  [VehiculeController::class, 'create'])->name('afficherV');

Route::post('/creationVehicule', [VehiculeController::class, 'createVehicule']);
Route::patch('/update/{id}', [VehiculeController::class, 'update'])->name('updateVehicule');
Route::get('/edit/{id}', [VehiculeController::class, 'editVehicule'])->name('editVehicule');
Route::post('/delete/{id}', [VehiculeController::class, 'destroy'])->name('deleteVehicule');