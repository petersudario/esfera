<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return redirect(route('users.index'));
    });

    Route::resource('users', UserController::class);

    Route::get('/users/{user}/delete', [UserController::class, 'confirmDestroy'])->name('user.confirm.delete');
});
