<?php

namespace App\Http\Controllers;

use App\posts;
use App\categories;
use App\post_category;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class PostBeritaController extends Controller
{
    //
	public function getView(){
		$post = posts::orderBy('id', 'desc')->where('user_id',Auth::user()->id)->paginate(5);
		return view('admin.post.view')->with(compact('post'));
	}

	public function getCreate(){
		$cat = categories::all();
		return view('admin.post.create')->with(compact('cat'));
	}

	public function getPost(PostRequest $request){
		$post 				= new posts;
		$post->name 		= $request->nama;
		$post->description 	= $request->deskripsi;
		$post->content 		= $request->content;
		$post->status 		= $request->status;
		$post->user_id		= Auth::user()->id;
		$post->images 		= "";
		$post->save();

		$arrcat = $request->categories;
		foreach($arrcat as $key=>$n){
			$postCat 				= new post_category;
			$postCat->category_id	= $arrcat[$key];
			$postCat->post_id 		= $post->id;
			$postCat->save();	
		}
		

		return redirect()->action('PostBeritaController@getView')->with('flash_message','Data berhasil di simpan');
	}

	public function getEdit($id){
		$post 		= posts::find($id);
		if($post->user_id == Auth::user()->id){
			$category 	= categories::all();	
			foreach($category as $cats){
				$postCat[] 	= post_category::where('post_id',$id)->where('category_id',$cats->id)->get();
			}
			
			if(empty($post)){
				abort(404);
			}
			return view('admin.post.edit')->with(compact('post'))->with(compact('postCat'))->with(compact('category'));
		}else{
			return view('errors.block');
		}
	}

	public function PostEdit($id, PostRequest $request){
		$post 				= posts::find($id);
		if($post->user_id == Auth::user()->id){
		$post->name 		= $request->nama;
		$post->description 	= $request->deskripsi;
		$post->content 		= $request->content;
		$post->status 		= $request->status;
		$post->user_id		= Auth::user()->id;
		$post->images 		= "";
		$post->save();
		
		$arrcat = $request->categories;
		$pcate = post_category::where('post_id',$id)->get();
			if(count($arrcat) == count($pcate)){
				//jika kondisi yang di hapus sama dengan jumlah yang semula makan hanya update saja
				foreach($pcate as $key=>$pc){
					
					$pc->category_id		= $arrcat[$key];
					$pc->post_id 			= $id;
					$pc->save();	
				}	
			}else{
				// jika kondisi hapus dengan jumlah dibawah atau diatas jumlah kategori semula, maka akan dilakukan penghapusan semua yang kemudian di insert kembali
				post_category::where('post_id',$id)->delete();	
				foreach($arrcat as $key=>$n){
					$postCat 				= new post_category;
					$postCat->category_id	= $arrcat[$key];
					$postCat->post_id 		= $id;
					$postCat->save();	
				}
			}
		return redirect()->action('PostBeritaController@getView')->with('flash_message','Data berhasil di perbaharui');	
		
		}else{
			return view('errors.block');
		}
	}

	public function getDelete($id){
		$find = posts::find($id);	
		if(empty($find)){
			abort(404);
		}else{
			$del = posts::destroy($id);
			$cat = post_category::where('post_id',$id)->delete();
			return response()->json($del);
		}
	}

	public function getDeleteAny($id){
		$ids = explode(",", $id);
		$del = posts::whereIn('id', $ids)->delete();
		$del = post_category::whereIn('post_id', $ids)->delete(); 
		return response()->json($del);
	}

	public function getActiveAll($id){
		$ids = explode(",", $id);
		$update = posts::whereIn('id', $ids)->update(['status' => 1]); 
		return response()->json($update);	
	}

	public function getDeactiveAll($id){
		$ids = explode(",", $id);
		$update = posts::whereIn('id', $ids)->update(['status' => 0]); 
		return response()->json($update);	
	}
}
