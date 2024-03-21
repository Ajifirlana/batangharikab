<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggaran extends Model
{
<<<<<<< HEAD
    use  HasFactory ;
    protected $table = 'anggaran';
    protected $guarded = [];
   

    protected $casts = [
        'created_at'     => 'date:d-m-Y H:m:s',
        'updated_at'     => 'date:d-m-Y H:m:s',
       
    ];
=======
    use HasFactory;
>>>>>>> 16bc57bf61dc10c19790b8c1f10e44154a973c88
}
