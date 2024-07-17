<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;

Route::get("/home1",[HomeController::class,'HomePage1']);
Route::get("/home2",[HomeController::class,'HomePage2']);
