<?php

use App\Http\Controllers\Web\MessageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('pages.home');

Route::prefix('messages')->group(function () {
    Route::get('/create', [MessageController::class, 'create'])->name('messages.create');
    Route::get('/thanks', [MessageController::class, 'thanks'])->name('messages.thanks');
    Route::post('/', [MessageController::class, 'store'])->name('messages.store');
});