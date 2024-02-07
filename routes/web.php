<?php

use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::redirect('/', '/users');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store']) ->name('users.store');

Route::controller(PhoneController::class)->group(function(){
    Route::get('phones', 'index')->name ('phones.index');
    Route::get('phones/create', 'create')->name('phones.create');
    Route::post('phones', 'store')->name('phones.store');
    Route::get('phones/{phone}/edit', 'edit')->name('phones.edit');
    Route::get('phones/{phone}', 'show')->name('phones.show');
    Route::put('phones/{phone}/update', 'update')->name('phones.update');
    Route::delete('phones/{phone}', 'destroy')->name('phones.destroy');
});