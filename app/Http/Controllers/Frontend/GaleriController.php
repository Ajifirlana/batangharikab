<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class GaleriController extends Controller
{
    
    public function galeri_foto(){
        $galeri_foto =  DB::table('galeri')->orderBy('id','desc')->paginate(8);
 
        return view('frontend.galeri.galeri_foto',array(
        "galeri_foto"=>$galeri_foto));
    }
}
