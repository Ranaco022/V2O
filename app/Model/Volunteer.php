<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Volunteer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'volorg';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = ['firstName', 'lastName', 'homeAddress', 'cellNumber',
                            'homeNumber', 'idNumber', 'examNumber', 'emailAddress', 'password', 'interest1',
                            'interest2', 'interest3', 'interest4', 'interest5'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
