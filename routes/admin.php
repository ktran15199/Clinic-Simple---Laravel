<?php

use Illuminate\Support\Facades\Route;

Route::get('dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');
Route::get('/booking/confirm/{id}', 'BookingController@confirm')->name('booking.confirm');
Route::get('/booking/cancel/{id}', 'BookingController@cancel')->name('booking.cancel');
Route::resources([
    'dashboard' => Dashboard::class,
    'posts' => PostController::class,
    'users' => UserController::class,
    'media' => MediaController::class,
    'booking' => BookingController::class
]);
