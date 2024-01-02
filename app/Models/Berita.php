<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
class Berita extends Model
{
    use  HasFactory ;
    protected $table = 'beritas';
    protected $guarded = [];

    protected $casts = [
        'created_at'     => 'date:d-m-Y H:m:s',
        'updated_at'     => 'date:d-m-Y H:m:s',
        'tanggal' => 'date:d-m-Y',
    ];
    

    public function setTanggalAttribute($value)
   {
      $this->attributes['tanggal'] =  Carbon::parse($value)->translatedFormat('Y-m-d');
   }
}
