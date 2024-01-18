<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Infografis extends Model
{
    use HasFactory;
    //  use AutoUUID;
     protected $table = 'infografis';
     protected $guarded = ['id'];

     protected $casts = [
        'created_at'     => 'date:d-m-Y H:m:s',
        'updated_at'     => 'date:d-m-Y H:m:s',
        'tanggal' => 'date:d M Y',
       
        
    ];

    public function setTanggalAttribute($value)
    {
       $this->attributes['tanggal'] =  Carbon::parse($value)->translatedFormat('Y-m-d');
    }
 
 
   
 
  
 
    public function getTanggalAttribute($value)
     {
         return Carbon::parse( $this->attributes['tanggal'])->format('d M Y');
     }
}
