<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\YoloControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/yolo-connected',[YoloControler::class, 'privateView'])->name('yolo-connected');;
});


Route::get('/yolo',[YoloControler::class, 'publicView']);



require __DIR__.'/auth.php';
