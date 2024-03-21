<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Anggaran;
use App\Models\Berita;
use Illuminate\Http\Request;

class AkuntabilitasBatanghariController extends Controller
{
    public function index(){
        $anggaran =  Anggaran::orderBy('created_at','desc')->paginate(8);
        $berita_terbaru =  Berita::orderBy('created_at','desc')->offset(0)->limit(5)->get();
        return view('frontend.akuntabilitas-batanghari.index',array(
            "anggaran"=>$anggaran,
            "berita_terbaru"=>$berita_terbaru));
      }
}
