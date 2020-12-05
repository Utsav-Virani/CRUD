<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

/*
Web Routes
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('projects', ProjectController::class);

// Route::resource('projects', 'ProjectController');

