<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Anggaran;
use Illuminate\Http\Request;

class AkuntabilitasBatanghariController extends Controller
{
    public function index(){
        $anggaran =  Anggaran::orderBy('created_at','desc')->paginate(8);
        return view('frontend.akuntabilitas-batanghari.index',array(
            "anggaran"=>$anggaran));
      }
}
