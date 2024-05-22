<?php

use App\Http\Controllers\HabitsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RemindersController;

//empezar en la pagina de login de jetstream si no esta autenticado
Route::get('/', function () {
    return redirect('/login');
});

//storage de imagenes
Route::get('/storage/icons/{filename}', function ($filename)
{
    $path = storage_path('app/public/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
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
