<?php

use App\Http\Controllers\HabitsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RemindersController;

//empezar en la pagina de login de jetstream si no esta autenticado
Route::get('/', function () {
    return redirect('/login');
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
