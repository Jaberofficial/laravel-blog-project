<?php

use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/",[HomePageController::class,"index"]); 
Route::get("/about-me",[HomePageController::class,"aboutMe"]);