<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model{
	
	protected $table = 'posts';
	protected $fillable = ['name','description','content','status','user_id','images','views'];
	
	
	
}