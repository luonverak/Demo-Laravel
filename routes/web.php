<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/view', [HomeController::class, 'viewData']);
Route::get('/add', [HomeController::class, 'homePage']);
Route::post('/add', [HomeController::class, 'addData']);
Route::get('/delete/{id}', [HomeController::class, 'getID']);
Route::post('/delete/submit', [HomeController::class, 'submitDelete']);
Route::get('/update/{id}', [HomeController::class, 'getIDUpdata']);
Route::post('/update/submit', [HomeController::class, 'updateData']);