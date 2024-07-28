<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/info', function () {
    return view('info');
})->name('info');


Auth::routes();
Route::get('/{username}', [App\Http\Controllers\MainController::class, 'index'])->name('landing');
Route::get('/{username}/member/area', [App\Http\Controllers\MainController::class, 'member'])->name('member');
