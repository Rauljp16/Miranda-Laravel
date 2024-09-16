<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;



Route::middleware("auth")->group(function(){
    Route::resource("activities", ActivityController::class);
    Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('activities.edit');
    Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');

});

Route::get('/', [RoomsController::class, 'home']);

Route::get('/about', function(){
    return view('about');
});

Route::get('/rooms', [RoomsController::class, 'index']);

Route::get('/offers', [RoomsController::class, 'offers']);

Route::get('/roomDetails/{id}', [RoomsController::class, 'show'])->name('roomDetails');

Route::get('/contact', function(){
    return view('contact');
});




require __DIR__.'/auth.php';
