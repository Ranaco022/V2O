<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VolunteerProfile extends Model
{
    //
    protected $fillable = [
        'homeAddress','cellNumber','homeNumber','examNumber','skills1','skills2','skills3','interest1','interest2'
    ];

    protected $table = "volunteer_profiles";

    public function volunteer()
    {
        return  $this->belongsTo('App\Volunteer');
    }
}

