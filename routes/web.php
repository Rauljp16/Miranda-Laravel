<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;



Route::middleware("auth")->group(function(){
    Route::resource("activities", ActivityController::class);
    Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('activities.edit');
    Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');
    
});

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/rooms', [RoomsController::class, 'index']);

Route::get('/offers', function(){
    return view('offers');
});

Route::get('/roomDetails', function(){
    return view('rooms.roomDetails');
});

Route::get('/contact', function(){
    return view('contact');
});





//Route::get('/roomDetail/{id}', [RoomsController::class, 'show']);


require __DIR__.'/auth.php';
