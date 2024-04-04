<?php

use Illuminate\Support\Facades\Route;

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
        return view('auth.login');
    });
    Route::group(['middleware:auth'],function(){
        Route::get('/home',function (){
            return view('home');
        });


    });


    Auth::routes();

         //.......................... Home ...............//
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

        //.......................... booking ...............//
    Route::get('form/all-booking', [App\Http\Controllers\BookingController::class, 'all_booking'])->middleware('auth')->name('all_booking');
    Route::get('form/booking/edit-book', [App\Http\Controllers\BookingController::class, 'edit_book'])->middleware('auth')->name('edit_book');
