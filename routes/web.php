<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\ChauffeurController;

Route::get('/',[VehiculeController::class,'showVehicule']);

Route::get('/vehicule',[VehiculeController::class,'index']);
Route::get('/liste-vehicule',[VehiculeController::class,'liste'])->name('liste');
Route::post('/storevehicules',[VehiculeController::class,'store'])->name('enregistrerVehicule');
Route::get('/update-vehicule/{id}',[VehiculeController::class,'updatevehicule']);
Route::post('/updatestorevehicule',[VehiculeController::class,'updatestorevehicule']);
Route::get('/delete-candidat/{id}',[VehiculeController::class,'deletevehicule']);


Route::get('/chauffeur',[ChauffeurController::class,'index']);
Route::get('/liste-chauffeur',[ChauffeurController::class,'liste'])->name('liste1');
Route::post('/storechauffeurs',[ChauffeurController::class,'store'])->name('enregistrerChauffeur');
Route::get('/update-chauffeur/{id}',[ChauffeurController::class,'updatechauffeur']);
Route::post('/updatestorechauffeur',[ChauffeurController::class,'updatestorechauffeur']);
Route::get('/delete-chauffeur/{id}',[ChauffeurController::class,'deletechauffeur']);

Route::get('/client',[ClientController::class,'index']);
Route::get('/liste-client',[ClientController::class,'liste'])->name('liste3');
Route::post('/storeclients',[ClientController::class,'store'])->name('enregistrerClient');
Route::get('/update-client/{id}',[ClientController::class,'updateclient']);
Route::post('/updatestoreclient',[ClientController::class,'updatestoreclient']);
Route::get('/delete-client/{id}',[ClientController::class,'deleteclient']);

Route::get('/payement',[ClientController::class,'index2']);