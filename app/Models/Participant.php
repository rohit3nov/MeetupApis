<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';

    protected $fillable = [
        'name', 'age','dob','profession','locality','guests','address'
    ];

    protected $hidden = [
        'id', 'created_at','updated_at'
    ];

}