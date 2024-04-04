<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //   function to show all booking
     public function all_booking(){
         return view('formBooking.allBooking');
     }
    //   function to show edit booking
    public function edit_book(){
        return view('formBooking.editBooking');
    }
}
