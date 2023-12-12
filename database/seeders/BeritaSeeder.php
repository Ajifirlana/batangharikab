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
        
        $data= [
            [
            'judul' => 'Bupati Sampaikan LKPJ dan LKPD TA 2016 Pada Paripurna DPRD',
            'isi' => 'MUARABULIAN,DISKOMINFO
            Rapat Paripurna DPRD Kabupaten Batanghari dalam rangka pembahasan Laporan Keterangan Pertanggung Jawaban Bupati dan Laporan Keuangan Pemerintah Daerah Kabupaten Batanghari Tahun 2016 berlangsung Sukses. Rapat Paripurna yang dihadiri langsung oleh Bupati Batanghari,Ir.H.Syahirsyah,Sy beserta Wakil Bupati Batanghari Hj.Sofia Joesoef berlangsung di ruang Rapat Gedung DPRD Kabupaten Batanghari. Acara yang dilaksanakan pada Selasa (11/04) pagi tadi juga dihadiri Plt.Sekda Batanghari,Seluruh Kepala OPD, Forkompinda dan seluruh anggota Dewan dan para tamu undangan lainnya.(omy/kim)</p>',
            'tanggal' => '2017-04-11',
            'gambar' => '1493040115.jpg',
            'dibaca' => 1032,
            'tittle_gambar' => 'Bupati dan Wakil Bupati Bersama Pimpinan DPRD Kabupaten Batang Hari',
            ],
            [
                'judul' => 'Plt Sekretaris Daerah Buka Forum OPD Kabupaten Batang Hari Tahun 2017',
                'isi' => '<p><span dir="rtl">DISKOMINFO, Plt.Sekda Batanghari,H.Bakhtiar,SP pada Tanggal 09 Maret 2017 secara resmi membuka acara Forum Organisasi Perangkat Daerah Kabupaten Batanghari Tahun 2017. Acara yang dilaksanakan di Ruang Aula Bappeda Batanghari ini dihadiri Para Asisten Setda, Kepala OPD,seluruh Kepala SKPD se-Kabupaten Batanghari,seluruh Camat se-Kabupaten Batanghari, Delegasi Kecamatan, Tenaga Ahli Pemberdayaan Masyarakat dan&nbsp;Para tamu undangan.</span></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Acara Forum Organisasi Perangkat Daerah ini bertemakan &quot;Dengan Forum Organisasi Perangkat Daerah Kabupaten Batanghari Tahun 2017 kita Mewujudkan Konsistensi dan Sinkronisasi Perencanaan Pembangunan Kabupaten Batanghari dalam Rangka Mewujudkan Bangun Sumber Daya Manusia untuk menggerakkan Ekonomi Kerakyatan yang ditinjau dengan Infrastruktur.</p>\r\n\r\n<p>Bupati Batanghari yang diwakili Plt.Sekda Batanghari,dalam sambutannya menyampaikan Kepada seluruh Kepala OPD Kabupaten Batanghari untuk memperhatikan kegiatan prioritas Hasil Musrenbang Kecamatan yang diselaraskan dengan Renstra dan Rancangan Renja OPD dengan menggunakan data dan informasi yang lengkap dan akurat serta rencana tata ruang wilayah kabupaten Batanghari,sehingga tercapai sasaran yang ditetapkan sebagaimana tertuang dalam Visi dan Misi RPJMD Kabupaten Batanghari Tahun 2016-2021.</p>',
                'tanggal' => '2017-03-13',
                'gambar' => '1493040346.jpg',
                'dibaca' => 843,
                'tittle_gambar' => 'PLT. Sekreatis Daerah Membuka Forum OPD Tahun 2017',
                ],
        ];
        foreach($data as $berita){
            Berita::create($berita);
        }
    }
}
