<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
'alamat'=>'Jln. Jenderal Sudirman No 1 Muara Bulian Perkantoran Kantor Bupati Kab. Batang Hari Kode Pos: 36613',
'telepon'=>'0743 21282 Fax: 0743 21282 / 0821 7932 8999',
'email'=>'ppidbatangharikab@gmail.com/ ppid@batangarikab.go.id',
'twitter'=>'',
'facebook'=>'diskominfo_bth@yahoo.com'
        ];
    }
}
