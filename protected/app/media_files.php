<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class media_files extends Model
{
    //
     protected $table 		= 'media_files';
     protected $fillable 	= ['user_id','name','mime_type','size','url'];
}
