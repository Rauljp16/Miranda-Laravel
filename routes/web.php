<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;



Route::middleware("auth")->group(function(){
    Route::resource("activities", ActivityController::class);
    // Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('activities.edit');
    // Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');

});

Route::get('/', [RoomsController::class, 'home'])->name('home');

Route::get('/about', function(){
    return view('about');
});

Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms');

Route::get('/roomDetails/{id}', [RoomsController::class, 'show'])->name('roomDetails');

Route::get('/roomsAvailable', [RoomsController::class, 'availability'])->name('rooms.roomsAvailable');

Route::post('/roomDetails/booking', [RoomsController::class, 'storeBooking'])->name('room.storeBooking');

Route::get('/offers', [RoomsController::class, 'offers']);

Route::get('/contact', function(){
    return view('contact');
});

Route::post('/contact', [MessageController::class, 'store'])->name('messages.store');



require __DIR__.'/auth.php';
