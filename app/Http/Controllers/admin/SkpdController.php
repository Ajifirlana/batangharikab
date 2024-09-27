<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Utils\ApiResponse;
use App\Models\WebsiteSkpd;
use Illuminate\Http\Request;
use App\Services\FileUploadService;
use Spatie\ResponseCache\Facades\ResponseCache;

class SkpdController extends Controller
{
   protected $fileUploadService;
   public function __construct(FileUploadService $fileUploadService)
   {
      $this->middleware('auth');
      $this->middleware('permission:read skpd|edit skpd|delete skpd', ['only' => ['index','show']]);
      $this->middleware('permission:create skpd', ['only' => ['create','store']]);
      $this->middleware('permission:update skpd', ['only' => ['edit','update']]);
      $this->middleware('permission:delete skpd', ['only' => ['destroy']]);
      $this->fileUploadService = $fileUploadService;
   }

    use ApiResponse;

    public function index()
    {
       // abort_if(Gate::denies('kelola mobil'), 403);
       $x['title']    = 'Data SKPD';
       $data = WebsiteSkpd::all();
 
       if (request()->ajax()) {
          return  datatables()->of($data)
             ->addIndexColumn()
             ->addColumn('action', function ($data) {
                return view('app.skpd.action', compact('data'));
             })
             ->rawColumns(['action'])
             ->make(true);
       }
       return view('app.skpd.index', $x, compact(['data']));
    }


public function store (Request $request){

      try {

       //  $imageName = time().'.'.$request->file->extension(); 
       $file = $request->file('file');
       $foto = $file ? $this->fileUploadService->uploadFile($file) : null;
       
       // Prepare data for update or create
       $data = [
           'judul'      => $request->judul,
           'link'       => $request->link,
           'opd'        => $request->opd,
           'keterangan' => $request->ket,
       ];
       
       if ($foto) {
           $data['foto'] = $foto;
       }
       
       // Update or create the WebsiteSkpd entry
       WebsiteSkpd::updateOrCreate(['id' => $request->id_skpd], $data);
       
       // Return success message
       $message = $request->id_skpd ? 'Berhasil Mengubah Data' : 'Berhasil Menginput Data';
       return $this->success($message);
       
      
 

    } catch (\Throwable $th) {
      return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
    }


}


   //  public function store(Request $request)
   //  {
   //     try {
   //        if($request->file('file')==null){
   //          WebsiteSkpd::updateOrCreate(
   //              ['id'              => $request->id_skpd],
   //              [
   //                 'judul'         => $request->judul,
   //                 'link'          => $request->link,
   //                 'opd'           => $request->opd,
   //                 'keterangan'    => $request->ket,
 
   //              ]
   //           );
    
   //           if ($request->id_skpd)  return $this->success('Berhasil Mengubah Data');
   //           else return $this->success('Berhasil Menginput Data');
 
   //        }

   //        $image_path = $request->file('file')->getPathname();
   //        $nama_gambar = time() . '_' . $request->file('file')->getClientOriginalName();
   //        $image_mime = $request->file('file')->getmimeType();
   //        $image_org  = $request->file('file')->getClientOriginalName();
   //        $url ="https://api-storage.batangharikab.go.id/submit-upload";
   //        $publicKey="eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2OTg5Njg1OTcsImlzcyI6IiouYmF0YW5naGFyaWthYi5nby5pZCIsImp0aSI6IjA4Y2YzMWNmLTdmZWUtNGE3ZS1hN2NjLWMxNDAyYWQ2NjNkOCIsInN1YiI6ImIwMTAwZGU3LTkwYmUtNGM2NC05ZmM3LWFjZjZlOTdiOTUxYyJ9.U7QiUQXHGqKnBG3aKRd1tmrhvKoTMJZO9-63KTMNEs8QDOMPVCiGNu7r4GCqHq-EJRo6vsvOtryisXI52HfckA";
   //        $client = new \GuzzleHttp\Client();
   //        $response = $client->request("POST",$url,[
   //          "headers"   => ["Authorization" => "Bearer {$publicKey}"],
   //          "multipart" => [
   //                 [
   //                 'name'     => 'file',
   //                 'filename' => $nama_gambar,
   //                 'Mime-Type'=> $image_mime,
   //                 'contents' => fopen( $image_path, 'r' ),
   //                 ],
   //            ]
 
   //        ]);
   //        $response=   $response->getBody();
   //        $responsdata = json_decode($response,true);
   //        $url=$responsdata['data']['url'];
   //        WebsiteSkpd::updateOrCreate(
   //           ['id'               => $request->id_skpd],
   //           [
   //              'judul'      => $request->keterangan,
   //              'foto'            => $url,
   //              'opd'           => $request->opd,
   //              'keterangan'    => $request->ket,
 
            
   //           ]
   //        );
 
   //        if ($request->id_skpd)  return $this->success('Berhasil Mengubah Data');
   //        else return $this->success('Berhasil Menginput Data');
   //     } catch (\Throwable $th) {
   //       return $this->error('Gagal, Terjadi Kesalahan' . $th->getMessage(), 400);
   //     }
   //  }


    public function edit($id)
    {

    //  dd($id);
      $skpd = WebsiteSkpd::where('id', $id)->first();
 
       return $this->success('Data SKPD', $skpd);
    }
    public function destroy(WebsiteSkpd $WebsiteSkpd,Request $request)
    {
       try {

          $id=$request->id;
          $record = WebsiteSkpd::find($id);
          $record->delete();
          return redirect()->back()->with('success', 'Berhasil Hapus Data', 200);
       } catch (\Throwable $th) {
          return redirect()->back()->with('error', 'Gagal Hapus Data', 400);
       }
    }
}
