<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Volorg extends Authenticatable
{
    use Notifiable;
    
    protected $guard = 'volorg';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function currentvolunteer()
    {
        return $this->hasMany('App\Model\CurrentVolunteer');
    }


    public function volunteer()
    {
        return $this->hasMany('App\Volunteer');
    }
}
