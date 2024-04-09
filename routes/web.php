<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use Inertia\Inertia;
use App\Models\Project; 

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'webProjects'=> Project::where('type', 'web')->get(),
        'mobileProjects'=>Project::where('type', 'mobile')->get()
    ]);
});
Route::get('/test', function(){
    return Inertia::render('Test'); 
});
Route::post('/contact', [ProjectController::class,'email']); 
Route::resource('/projects', ProjectController::class); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
