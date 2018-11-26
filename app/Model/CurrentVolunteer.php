<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CurrentVolunteer extends Model
{
    //
    protected $fillable = ['firstname','lastName','homeAddress','cellNumber','homeNumber',
        'emailAddress', 'hoursWorked','comments'
    ];

    //This basically tells the system that a single post belongs to a user

    public function volorg(){
        return $this->belongsTo('App\Volorg');
    }
}
