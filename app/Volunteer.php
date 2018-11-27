<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Volunteer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'volunteer';

    protected $fillable = [
        'firstName','lastName','email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function volunteerprofile()
    {
        return $this->hasOne('App\Model\VolunteerProfile');
    }

}
