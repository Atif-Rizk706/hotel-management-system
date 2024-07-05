<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getName()) {
            case 'save_booking': //  your actual route name
                return [
                    'name'          =>  'required|string|max:225',
                    'email_id'      =>  'required|string|max:225',
                    'phone_number'  =>  'required|string|max:225',
                    'photo'         =>  'required',
                    'message'       =>  'required|string|max:225',
                    'depature_date' =>  'required|string|max:225',
                    'arrival_date'  =>  'required|string|max:225',
                    'time'          =>  'required|string|max:225',
                    'date'          =>  'required|string|max:225',
                    'total_member'  =>  'required|string|max:225',
                    'room_type'     =>  'required|string|max:225',





                ];
            case 'form2.submit': //  your actual route name
                return [
                    'other_field1' => 'required|numeric',
                    'other_field2' => 'required|string',
                    // Define rules for form 2 fields
                ];
            // Add more cases for other forms as needed
            default:
                return [];
        }

    }
}
