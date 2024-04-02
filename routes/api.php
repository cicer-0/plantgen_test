<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\EnclosureController;
use App\Http\Controllers\CaretakerController;
use App\Http\Controllers\Caretaker_AnimalController;
use App\Http\Controllers\ActivityController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

Route::resource('/Animal', AnimalController::class);
Route::resource('/Species', SpeciesController::class);
Route::resource('/Enclosure', EnclosureController::class);
Route::resource('/Caretaker', CaretakerController::class);
Route::resource('/Caretaker_Animal', Caretaker_AnimalController::class);
Route::resource('/Activity', ActivityController::class);
    return $request->user();
});
