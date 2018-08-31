<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password','provider','provider_id', 'is_admin'
=======
        'name', 'email', 'password','provider','provider_id', 'is_admin', 'user_type'
>>>>>>> fee2db1f8d82c5090212e7647fa103a9d5ae2e08
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD
	
	public function isAdmin()
	{
		return $this->is_admin;
	}
=======

    public function isAdmin(){
        return $this->is_admin;
    }
>>>>>>> fee2db1f8d82c5090212e7647fa103a9d5ae2e08
}
