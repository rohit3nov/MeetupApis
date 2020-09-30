<?php

namespace App\Http\Controllers\Requests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class ParticipantRequest extends Controller
{
   public function __construct(Request $request){

        $this->validate($request,$this->rules(),$this->messages());
        parent::__construct($request);
        return $request;

   }


    private function rules(){

        return [
            'name'          => 'required',
            'age'           => 'required',
            'dob'           => 'required|date_format:Y-m-d',
            'profession'    => 'required|in:employed,student',
            'locality'      => 'required',
            'guests'        => 'required|numeric|max:2|min:0',
            'address'       => 'required|string',
        ];

    }
    private function messages(){

        return [
            'name.required'         => 'Name of the participant is required',
            'age.required'          =>  'Age of the participant is required',
            'dob.required'          =>  'Date of Birth is missing',
            'dob.date_format'       =>  'Please provide the dob in \'Y-m-d\' format',
            'profession.required'   =>  'Only values \'employed\' or \'student\' are allowed in profession field',
            'profession.in'         =>  'Only values \'employed\' or \'student\' are allowed in profession field',
            'locality.required'     =>  'Locality is mandatory',
            'guests.required'       =>  'Guest count required',
            'guests.numeric'        =>  'provide count of how many guests you will bring along',
            'guests.min'            =>  'Invalid value for guest count. Please put 0 if there is none',
            'guests.max'            =>  'You can bring along maximum 2 guests',
            'address.required'      =>  'Adress is compulsory',
        ];

    }

    protected function formatValidationErrors(Validator $validator)
    {
        return $validator->errors()->first();
    }

    protected function buildFailedValidationResponse(Request $request,$error)
    {
        return response()->json(array(
            'status'        => 'failure',
            'description'   => $error
        ));
    }

}