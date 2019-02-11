<?php

namespace App\Http\Controllers;

use App\media_files;
use App\media_folder;
use App\settings;
use Illuminate\Http\Request;
use App\Helpers\utils;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    //
    public function getView(){
    	return view('admin.media.view');
    }

    public function getAjaxAll($newValue){
    	
    	if($newValue){
    		if($newValue=="all"){
    			$media = media_files::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->get();
    		}else{
    			$media = media_files::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->where('mime_type',$newValue)->get();
    		}
    		/*End Media variable*/
    		
    		if(count($media)>0){
	    		foreach($media as $mf){

	    			$listmedia[] = array('name'=>utils::str_media($mf->name),'mime_type'=>$mf->mime_type,'size'=>$mf->size,'url'=>$mf->url,'created_at'=>\Carbon\Carbon::parse($mf->created_at)->format('M d Y'),'path'=>asset('')); 
	    		}
    		return response()->json($listmedia);
	    	}else{
	    		$listmedia =count($media);
	    		return response()->json($listmedia);
	    	}
    	}else{
    		return response()->json("404");
    	}
    }

    public function getUploadPost(Request $request){
    	if ( $request->hasFile('image')){
    		$image = $request->file('image');
    		$extension = $image->getClientOriginalExtension();
	        $spaceremove = str_replace(' ','-',$image->getClientOriginalName());
    		$filename = time().'-'.$spaceremove;
    		$mime = stristr($image->getClientMimeType(),"/",true);  
    		$allow = settings::where('keyz','allow_extention')->first();
    		$allowsize = settings::where('keyz','is_limit_upload')->first();
    		$allowextension = explode(",", $allow->value);

    		if(in_array(strtolower($extension),$allowextension)){
    			if( $image->getClientSize() > $allowsize->value){
    				return response()->json(['validates'=>'error','messages'=>'File size are '.utils::is_megabyte($image->getClientSize()).' ,file must be under '.utils::is_megabyte($allowsize->value)]);
    			}else{
    				$checkfolder = media_folder::where('user_id',Auth::user()->id)->first();
    				if(count($checkfolder)==0){
    					$destination = time().'-'.Auth::user()->username;
    					$path = 'images/upload/'.$destination;
    					utils::makeDirectory($path, $mode = 0777, true, true);
    					$SaveFolder 				= new media_folder;
    					$SaveFolder->folder_name 	= $path;
    					$SaveFolder->user_id		= Auth::user()->id;
    					$SaveFolder->save(); 
    				}else{
    					$path = $checkfolder->folder_name;
    				}
    				$uploadSuccess = $image->move($path,$filename);

    				$SaveFile 						= new media_files;
    				$SaveFile->user_id				= Auth::user()->id;
    				$SaveFile->name 				= $filename;
    				if($mime =="image"){
    					$SaveFile->mime_type  		= "images";		
    				}else if($mime =="video"){
    					$SaveFile->mime_type  		= "video";
    				}else{
    					$SaveFile->mime_type  		= "document";
    				}
    				$SaveFile->size 				= $image->getClientSize();
    				$SaveFile->url 					= $path.'/'.$filename;
    				$SaveFile->save();

    				
    				$getAllMedia 	= media_files::where('user_id',Auth::user()->id)->orderBy('id', 'desc')->get();

    				foreach($getAllMedia as $mf){ 
    				$listmedia[] = array('name'=>utils::str_media($mf->name),'mime_type'=>$mf->mime_type,'size'=>$mf->size,'url'=>$mf->url,'created_at'=>\Carbon\Carbon::parse($mf->created_at)->format('M d Y'),'path'=>asset('')); 

    				}

    				return response()->json(array_merge(['validates'=>'success','messages'=>'File size are '.$path,'AllData'=>$listmedia]));
    			}
    		}else{	
	        	return response()->json(['validates'=>'error','messages'=>'Files must be '.$allow->value]);
	        	
	        }

    	}
    }
}
