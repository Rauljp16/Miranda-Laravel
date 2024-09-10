<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;


Route::middleware("auth")->group(function(){
    Route::resource("activities", ActivityController::class);
    Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('activities.edit');
    Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');

});


require __DIR__.'/auth.php';
