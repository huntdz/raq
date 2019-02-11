<?php

namespace App\Http\Controllers;

Use Redirect;
Use App\post;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Input;

class latihan extends Controller
{
	 public function testingcontroller(){
	 	$ambildata = "coba coba";
	 	return view('components.card')->with(compact('ambildata'));
	 }
    public function memanggilfilelahitan(){
		    $getposts = post::all();
			
			return view('latihan')
			->with(compact('getposts'));
	}
	
	public function postdatas(){
		return Redirect::to('/latihan');
		
	}
	
	public function postdata(){
		$posting = new post;
		$posting->judul = input::get('judul');
		$posting->pesan = input::get('pesan');
		$posting->save();
		return Redirect::to('/latihan');
		
	}
	
	public function editlatihan($id){
		$ambildata = post::find($id);
		return view('edit.view')->with(compact('ambildata'));
	}
	
	public function GetPesan(){
		return view('newmessage');
	}
}
