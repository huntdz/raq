<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function getLayanan(){
    	return view('layanan.view_layanan');
    }

    public function getGallery(){
    	return view('gallery.view_gallery');
    }

    public function getInvestasi(){
    	return view('Investasi.view_investasi');
    }
}
