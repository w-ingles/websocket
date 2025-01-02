<?php

use Illuminate\Support\Facades\Route;
use App\Events\testingEvent;

Route::get('/', function () {
    return view('welcome');
});


Route::get('teste', function () {
    try {
        $message = 'nova mensagem'; // Altere a mensagem aqui
        event(new testingEvent($message));

        return response()->json(['message' => $message], 200);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});

