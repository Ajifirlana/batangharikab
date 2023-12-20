<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
class MenuController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:read menu|edit slider|delete menu', ['only' => ['index','show']]);
       $this->middleware('permission:create menu', ['only' => ['create','store']]);
       $this->middleware('permission:edit menu', ['only' => ['edit','update']]);
       $this->middleware('permission:delete menu', ['only' => ['destroy']]);
    }


    
    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data Menu';
       $x['type']    =  DB::table('type_menu')->get();
       $x['tree']    =  DB::table('menu')->where('type','tree')->get();
       $x['role']    =  DB::table('roles')->get();
       $data = Menu::all();
     // dd( DB::table('menu')->where('type','tree')->get());

       
       if (request()->ajax()) {
          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
                return view('app.menu.action', compact('data'));
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.menu.index', $x, compact(['data']));
    }
    public function store(Request $request)
   {
      try {
         

         if($request->type=="tree"){
           
        
         }else{
           
           
         }

         if($request->type=="tree"){
              if($request->jns=="Sudah Ada"){
               $type="menu";
               $id_menu_induk =$request->tree;
               $jsonString = Menu::where('id', $request->tree)->value('active');
               $new_value = "admin/".$request->url;
              // $array = json_decode($jsonString);
               $jsonString[] = $new_value;

               Menu::where('id', $request->tree)->update(['active'=> $jsonString ]);
              } else{ 
               $type=$request->type;
               $id_menu_induk = 0;
              }
               
         }else{
            $type=$request->type;
            $id_menu_induk = 0;
         }
          
         
          $string = implode(', ', $request->role);
          $role = "[". $string."]";
          $active = '["admin/'.$request->url.'"]';
          $active = json_decode($active);
           $url = url("admin/".$request->url);
         
      
      
         Menu::updateOrCreate(
            ['id'           => $request->id_menu],
            [
               'id_menu_induk'   =>  $id_menu_induk,
               'type'            => $type,
               'title'           => $request->judul,
               'url'             => $url,
               'icon'            => $request->icon,
               'active'            => $active,
               'id_permission'   => $role,
               
            ]
         );

         if ($request->id)  return $this->success('Berhasil Mengubah Data');
         else return $this->success('Berhasil Menginput Data');
      } catch (\Throwable $th) {
        return $this->error('Gagal, Terjadi Kesalahan' . $th, 400);
      }
   }

   
   public function edit(Menu $menu)
   {
      return $this->success('Data Menu', $menu);
   }

   
   public function destroy(Menu $menu)
   {
      try {
         $menu->delete();
         return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
      } catch (\Throwable $th) {
         return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
      }
   }


    
}
