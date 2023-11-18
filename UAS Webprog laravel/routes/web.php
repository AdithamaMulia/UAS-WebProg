<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;


route::get('/', function() {
    return view('index');
});

route::get('/course', function() {
    return view('course');
});



