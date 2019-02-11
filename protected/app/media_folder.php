<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class media_folder extends Model
{
    //
     protected $table 		= 'media_folder';
     protected $fillable 	= ['folder_name','user_id'];
}
