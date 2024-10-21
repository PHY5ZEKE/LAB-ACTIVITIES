<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ReservationController::class,'index']);
Route::post('/reserve',[ReservationController::class,'reserve']);


