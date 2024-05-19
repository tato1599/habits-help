<?php

use App\Http\Controllers\HabitsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RemindersController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //cuando este en dashboard, se redirige a habits
    Route::get('/dashboard', function () {
        return redirect('/habits');
    })->name('dashboard');
    Route::resource('habits', HabitsController::class);
    Route::post('/reminders', [RemindersController::class, 'store'])->name('reminders.store');
});
