<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\YoloControler;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/yolo-connected',[YoloControler::class, 'privateView'])->name('yolo-connected');;
});


Route::get('/yolo',[YoloControler::class, 'publicView']);
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');



require __DIR__.'/auth.php';
