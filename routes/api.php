<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Api\UserController;
use  App\Http\Controllers\Api\EmergencyContactsController;


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
    return $request->user();
});


Route::controller(UserController::class)->group(function() {
    Route::get('/users','index');
    Route::post('/user','store');
    Route::get('/user/{id}','show');
    Route::put('/user/{id}','update');
    Route::delete('/user/{id}', 'destroy');
    Route::post('/login','login');
});


Route::controller(EmergencyContactsController::class)->group(function() {
    Route::get('/contacts','index');
    Route::post('/contact','store');
    Route::get('/contact/{id}','show');
    Route::put('/contact/{id}','update');
    Route::delete('/contact/{id}', 'destroy');
});
