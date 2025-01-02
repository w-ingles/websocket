<?php

use Illuminate\Support\Facades\Route;
use App\Events\testingEvent;

Route::get('/', function () {
    return view('welcome');
});


Route::get('teste', function () {
    event(new testingEvent);

    return "algo";
});

