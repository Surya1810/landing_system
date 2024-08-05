<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/info', function () {
    return view('info');
})->name('info');

Route::get('/status', function () {
    return view('admin');
})->name('admin');


Auth::routes();
Route::get('/{username}', [MainController::class, 'index'])->name('landing');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/{username}/memberarea', [MainController::class, 'member'])->name('member');

    Route::post('/status/update', [MainController::class, 'status'])->name('status.update');

    // Profile Section
    Route::put('/profile/update/{id}', [MainController::class, 'update'])->name('profile.update');
    Route::put('/profile/sosmed/{id}', [MainController::class, 'sosmed'])->name('profile.sosmed');
    Route::put('/profile/avatar/{id}', [MainController::class, 'avatar'])->name('profile.avatar');
    Route::put('/profile/password/{id}', [MainController::class, 'password'])->name('profile.password');
    Route::delete('/profile/delete/{id}', [MainController::class, 'destroy'])->name('profile.destroy');
});
