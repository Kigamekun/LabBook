<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\bookingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [bookingController::class,'index'])->name('dashboard');
Route::get('detail/{id}', [bookingController::class,'detail'])->name('detail');
Route::get('booking/{id}/{tgl}', [bookingController::class,'booking'])->name('booking');
Route::post('bookingPost/', [bookingController::class,'bookingPost'])->name('bookingPost');
Route::get('seeBook/{id}/{tgl}', [bookingController::class,'seeBook'])->name('seeBook');