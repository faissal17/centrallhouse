<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Room Crud Routes

Route::resource('room', RoomController::class)->excepte('delete');

// end Room Crud Routes


Route::get('/', function () {
    return view('welcome');
});


// routes to direct me to diffrent pages

Route::get('createroom', function () {
    return view('roomscrud.createroom');
});
Route::get('editroom/{id}', [RoomController::class,'edit']);



// end of routes that direct me to diffrent pages



// routes in the navbar

Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/tables', function () {
    return view('tables');
})->name('tables');

// end of routes in the navbar


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [RoomController::class, 'index'])->name('dashboard');
});
