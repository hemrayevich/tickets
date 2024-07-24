<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\ShowtimeController;

Route::get('', function () {
    return view('welcome');
});

Route::resource('movies', 'MovieController');
Route::resource('cinemas', 'CinemaController');
Route::resource('showtimes', 'ShowtimeController');
Route::resource('tickets', 'TicketController');
Route::resource('users', 'UserController');
Route::resource('ticket-orders', 'TicketOrderController');
Route::resource('roles', 'RoleController');



Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::resource('movies', MovieController::class);
    Route::resource('showtimes', ShowtimeController::class);
    Route::resource('tickets', TicketController::class);
});
