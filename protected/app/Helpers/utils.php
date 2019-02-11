<?php
namespace App\Helpers;

class utils{
	 public static function str_media($value, $limit = 15, $end = '...'){
        return \Illuminate\Support\Str::limit($value, $limit, $end);
    }

    public static function is_megabyte($value){
    	if($value<=1000000){
    		$unit = round($value/1000,2);
    		return $unit.' KB';
    	}else{
    		$unit = round($value/1000000,2);
    		return $unit.' MB';
    	}
    }

    public static function makeDirectory($path, $mode = 0777, $recursive = false, $force = false){
	    if ($force){
	        return @mkdir($path, $mode, $recursive);
	    }else{
	        return mkdir($path, $mode, $recursive);
	    }
	}
}