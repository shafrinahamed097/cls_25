<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;

Route::get("/",[HomeController::class,'HomePage']);
