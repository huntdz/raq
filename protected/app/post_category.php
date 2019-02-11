<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_category extends Model
{
    //
    protected $table 		= 'post_category';
    protected $fillable 	= ['category_id','post_id']; 
}
