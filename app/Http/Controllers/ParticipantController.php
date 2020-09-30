<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Http\Controllers\Requests\ParticipantRequest;

class ParticipantController extends Controller
{

    public function __construct(){

    }

    public function index(){

        $participants = Participant::all();

        if( count($participants) === 0 ){
            return response()->json(array(
                'status'        => 'failure',
                'description'   => 'No participants found'
            ));
        }

        return response()->json(array(
            'status' => 'success',
            'data'   => $participants
        ));
    }

    public function create(ParticipantRequest $request){

        $participant = new Participant;
        $participant->name = $request->params['name'];
        $participant->age = $request->params['age'];
        $participant->dob = $request->params['dob'];
        $participant->profession = $request->params['profession'];
        $participant->locality = $request->params['locality'];
        $participant->guests = $request->params['guests'];
        $participant->address = $request->params['address'];
        $participant->save();

        return response()->json(array(
            'status'        => 'success',
            'description'   => 'We have received your response successfully'
        ));
    }

    public function update(ParticipantRequest $request, $id){

        $participant = Participant::find($id);

        if( $participant->count() === 0 ){
            return response()->json(array(
                'status'        => 'failure',
                'description'   => 'No such participant found'
            ));
        }

        $participant->name = $request->params['name'];
        $participant->age = $request->params['age'];
        $participant->dob = $request->params['dob'];
        $participant->profession = $request->params['profession'];
        $participant->locality = $request->params['locality'];
        $participant->guests = $request->params['guests'];
        $participant->address = $request->params['address'];

        $participant->save();

        return response()->json(array(
            'status'        => 'success',
            'description'   => 'We have updated your response successfully'
        ));
    }

}