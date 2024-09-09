<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;


Route::middleware("auth")->group(function(){
    Route::resource("activities", ActivityController::class);
    //Route::get("/activities", [ActivityController::class, 'store'])->name('activities.store');

});


require __DIR__.'/auth.php';
