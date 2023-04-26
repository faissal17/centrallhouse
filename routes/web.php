<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\TableBookingController;

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

Route::resource('room', RoomController::class);
Route::get('editroom/{id}', [RoomController::class,'edit']);
Route::get('booking/{id}', [bookingController::class,'show']);
Route::post('booking/make', [bookingController::class,'store'])->name('booking.make');


// end Room Crud Routes



// begin of tables Routes


Route::get('/tables', [TableController::class, 'index'])->name('tables')->middleware('auth');
Route::resource('table',TableController::class);
Route::get('edittable/{id}', [TableController::class,'edit']);
Route::post('table/make', [TableBookingController::class,'store'])->name('table.make');



// end of tables Routes

// begin of tour routes

Route::get('/tour',[TourController::class,'index'])->name('tours')->middleware('auth');
// end of tour routes





Route::get('/', function () {
    return view('welcome');
});


// routes to direct me to diffrent pages

Route::get('createroom', function () {
    return view('roomscrud.createroom');
});
Route::get('createtour', function () {
    return view('tourcrud.createtour');
});


Route::get('createtable', function(){
    return view('tablescrud.createtable');
});


Route::get('/AdminBoard', function () {
return view('AdminBoard');
});


// end of routes that direct me to diffrent pages


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [RoomController::class, 'index'])->name('dashboard')->middleware('auth');
});

