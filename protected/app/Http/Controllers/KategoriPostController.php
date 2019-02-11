<?php

namespace App\Http\Controllers;

use App\categories;
use App\Http\Requests\KategoriRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriPostController extends Controller
{
    //
	
	public function getView(){

		$cats = categories::orderBy('id', 'desc')->paginate(5);

		return view('admin.kategori.view')->with(compact('cats'));
	}
	public function getCreate(){
		return view('admin.kategori.create');
	}

	public function postCreate(KategoriRequest $request){

        $cat 				= new categories;
        $cat->name 			= $request->nama;
        $cat->description 	= $request->deskripsi; 
        $cat->status 		= $request->status;
        $cat->user_id 		= Auth::user()->id;
        $cat->is_default	= '0';
        $cat->save(); 
		return redirect()->action('KategoriPostController@getView')->with('flash_message','Data berhasil di simpan');
	}

	public function getEdit($id){
		$edit = categories::find($id);
		if(empty($edit)){
			abort(404);
		}
		return view('admin.kategori.edit')->with(compact('edit'));
	}

	public function getPost($id, KategoriRequest $request){
		$edit 				= categories::find($id);	
		$edit->name 		= $request->nama;
		$edit->description 	= $request->deskripsi;
		$edit->status 		= $request->status; 
		$edit->user_id 		= Auth::user()->id;
		$edit->save();
		return redirect()->action('KategoriPostController@getView')->with('flash_message','Data berhasil di perbaharui');
	}

	public function getDelete($id){
		$find = categories::find($id);	
		if(empty($find)){
			abort(404);
		}else{
			$del = categories::destroy($id);
			return response()->json($del);
		}
	}

	public function getDeleteAny($id){
		$ids = explode(",", $id);
		$del = categories::whereIn('id', $ids)->delete(); 
		return response()->json($del);
	}

	public function getActiveAll($id){
		$ids = explode(",", $id);
		$update = categories::whereIn('id', $ids)->update(['status' => 1]); 
		return response()->json($update);	
	}

	public function getDeactiveAll($id){
		$ids = explode(",", $id);
		$update = categories::whereIn('id', $ids)->update(['status' => 0]); 
		return response()->json($update);	
	}
}
