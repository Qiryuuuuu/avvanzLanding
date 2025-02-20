<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

Route::get("/", [HomepageController::class,"splash"])->name("splash");
Route::get("/home", [HomepageController::class,"home"])->name("home");


//Login routes
Route::get("/screenGlobal", [HomepageController::class,"screenGlobal"])->name("screenGlobal");
Route::get("/cdGlobal", [HomepageController::class,"cdGlobal"])->name("cdGlobal");
Route::get("/learnGlobal", [HomepageController::class,"learnGlobal"])->name("learnGlobal");


//Tag routes
Route::get("/about", [HomepageController::class,"about"])->name("about");
Route::get("/screen", [HomepageController::class,"screen"])->name("screen");
Route::get("/develop", [HomepageController::class,"develop"])->name("develop");
Route::get("/resources", [HomepageController::class,"resources"])->name("resources");
Route::get("/contact", [HomepageController::class,"contact"])->name("contact");
Route::get("/global", [HomepageController::class,"global"])->name("global");
