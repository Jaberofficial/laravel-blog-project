<?php

use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/",[HomePageController::class,"index"]); 
Route::get("/about-me",[HomePageController::class,"aboutMe"]);
Route::get("/contact-me",[HomePageController::class,"contactMe"]);
Route::get("/blog-details",[HomePageController::class,"blogDetails"]);
