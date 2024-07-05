<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyFormRequest;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //  all booking
     public function all_booking(){
         return view('formBooking.allBooking');
     }
    //   edit booking
    public function edit_booking(){
        return view('formBooking.editBooking');
    }
    //   add booking
    public function add_booking(){
        return view('formBooking.addBooking');
    }
    //   save booking
    public function save_booking(MyFormRequest $request){

        $validatedData = $request->validated();
         dd($validatedData);

    }
}
