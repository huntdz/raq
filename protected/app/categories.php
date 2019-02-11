<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    protected $table = 'categories';
	protected $fillable = ['name','description','status','user_id','is_default'];
}
