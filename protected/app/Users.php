<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
	protected $table = 'Users';
	protected $fillable = ['username','email','password','firstname','lastname'];
	
	protected $hidden = [
        'password',
    ];
}
