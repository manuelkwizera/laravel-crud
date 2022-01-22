<?php

use Illuminate\Support\Facades\Route;

Route::resource('student','App\Http\Controllers\StudentController');

Route::get('/', function () {
    return view('welcome');
});
