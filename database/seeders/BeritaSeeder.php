<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Berita::create([ 'judul' => 'Bupati Sampaikan LKPJ dan LKPD TA 2016 Pada Paripurna DPRD',
        'isi' => 'MUARABULIAN,DISKOMINFO
        Rapat Paripurna DPRD Kabupaten Batanghari dalam rangka pembahasan Laporan Keterangan Pertanggung Jawaban Bupati dan Laporan Keuangan Pemerintah Daerah Kabupaten Batanghari Tahun 2016 berlangsung Sukses. Rapat Paripurna yang dihadiri langsung oleh Bupati Batanghari,Ir.H.Syahirsyah,Sy beserta Wakil Bupati Batanghari Hj.Sofia Joesoef berlangsung di ruang Rapat Gedung DPRD Kabupaten Batanghari. Acara yang dilaksanakan pada Selasa (11/04) pagi tadi juga dihadiri Plt.Sekda Batanghari,Seluruh Kepala OPD, Forkompinda dan seluruh anggota Dewan dan para tamu undangan lainnya.(omy/kim)</p>',
        'tanggal' => '2017-04-11',
        'gambar' => '1493040115.jpg',
        'dibaca' => 1032,
        'tittle_gambar' => 'Bupati dan Wakil Bupati Bersama Pimpinan DPRD Kabupaten Batang Hari']);
    }
}
