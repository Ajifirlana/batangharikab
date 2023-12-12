<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'id'=>1,
            'alamat'=>'Jln. Jenderal Sudirman No 1 Muara Bulian Perkantoran Kantor Bupati Kab. Batang Hari Kode Pos: 36613',
            'telepon'=>'0743 21282 Fax: 0743 21282 / 0821 7932 8999',
            'email'=>'ppidbatangharikab@gmail.com/ ppid@batangarikab.go.id',
            'twitter'=>'',
            'facebook'=>'diskominfo_bth@yahoo.com',
        'created_at'=>'2023-12-12 11:24:38',        
        'updated_at'=>'2023-12-12 11:24:38']);
    }
}
