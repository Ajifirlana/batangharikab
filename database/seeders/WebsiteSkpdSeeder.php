<?php

namespace Database\Seeders;

use App\Models\WebsiteSkpd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteSkpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebsiteSkpd::create(['foto' => 'ppid.jpg',
        'link' => 'https://ppid.batangharikab.go.id/']);
    }
}
