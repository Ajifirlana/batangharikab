<?php

namespace Database\Seeders;

use App\Models\VideoKegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        VideoKegiatan::create(['judul' => 'tablig akbar 4',
        'link' => 'url',
        'foto'=>'tablig_akbar4.jpg']);
    }
}
