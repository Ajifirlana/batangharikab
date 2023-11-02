<?php
  $setting = DB::table('setting')->first();
  ?>
  
@include("frontend.head")
    
@section("pagetitle",".:: Situs Pemerintah Kabupaten Batanghari | Bumi Serentak Bak Regam ::.")


<div class="culmn">
            <!--Home page style-->

            @include("frontend.menu")
            <!--Home Sections-->

            <section id="home" class="home">
            <div class="overlay"></div>
                
            </section> <!--End off Home Sections-->



            <!--Featured Section-->
            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_text">
                                        <h3><i class="fa fa-arrow-circle-right"></i>Profil SKPD</h3>
                                   
<div class="card">
    <div class="profil-skpd">
    <p>
        <ul>
            <li class="dropdown"><h6><i class="fa fa-quote-left"></i>
                                   Sekretariat</h6>
            <div class="dropdown-content">
                 <ul>
                    <li><a target="_blank" href="https://setda.batangharikab.go.id/">SEKRETARIAT DAERAH</a>
                </li><li><a target="_blank" href="http://dprd.batangharikab.go.id/">SEKRETARIAT DPRD</a></li>
            </ul>
            </div> 
            </li>
            <li class='dropdown'><h6><i class="fa fa-quote-left"></i>
                                   Dinas</h6>
            <div class="dropdown-content">
            <ul>
                <li><a target="_blank" href="http://dpdk.batangharikab.go.id/">DINAS PERPUSTAKAAN DAN KEARSIPAN</a></li>
                <li><a target="_blank" href="http://bkbpp.batangharikab.go.id/">DINAS PENGENDALIAN PENDUDUK, KELUARGA BERENCANA, PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK</a></li><li><a target="_blank" href="https://disnakertrans.batangharikab.go.id/">DINAS TENAGA KERJA DAN TRANSMIGRASI</a></li><li><a target="_blank" href="http://diskominfo.batangharikab.go.id/">DINAS KOMUNIKASI DAN INFORMATIKA</a></li><li><a target="_blank" href="http://disbunnak.batangharikab.go.id/">DINAS PERKEBUNAN DAN PETERNAKAN</a></li><li><a target="_blank" href="http://dishub.batangharikab.go.id/">DINAS PERHUBUNGAN</a></li><li><a target="_blank" href="http://dinsos.batangharikab.go.id/">DINAS SOSIAL</a></li><li><a target="_blank" href="http://dpmd.batangharikab.go.id/">DINAS PEMBERDAYAAN MASYARAKAT DAN DESA</a></li><li><a target="_blank" href="http://disdukcapil.batangharikab.go.id/">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</a></li><li><a target="_blank" href="http://damkar.batangharikab.go.id/">DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN</a></li><li><a target="_blank" href="https://pdk.batangharikab.go.id/">DINAS PENDIDIKAN DAN KEBUDAYAAN</a></li><li><a target="_blank" href="http://perkim.batangharikab.go.id/">DINAS PERUMAHAN DAN KAWASAN PEMUKIMAN</a></li><li><a target="_blank" href="http://dinkes.batangharikab.go.id/">DINAS KESEHATAN</a></li><li><a target="_blank" href="http://pupr.batangharikab.go.id/">DINAS  PEKERJAAN UMUM DAN PENATAAN RUANG</a></li><li><a target="_blank" href="http://dpmptsp.batangharikab.go.id/">DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU</a></li><li><a target="_blank" href="http://dispora.batangharikab.go.id/">DINAS PEMUDA DAN OLAHRAGA</a></li><li><a target="_blank" href="http://dinaslh.batangharikab.go.id/">DINAS LINGKUNGAN HIDUP</a></li><li><a target="_blank" href="http://diskankp.batangharikab.go.id/">DINAS PERIKANAN DAN KETAHANAN PANGAN</a></li><li><a target="_blank" href="http://dtph.batangharikab.go.id/">DINAS TANAMAN PANGAN DAN HORTIKULTURA</a></li><li><a target="_blank" href="http://diskoperindag.batangharikab.go.id/">DINAS KOPERASI PERINDUSTRIAN DAN PERDAGANGAN</a></li>
            </ul>
            </div> 
            </li>
            <li class='dropdown'><h6><i class="fa fa-quote-left"></i>
                                   Badan</h6>
            <div class="dropdown-content">
             <ul>
                <li><a target="_blank" href="http://satpolpp.batangharikab.go.id/">SATUAN POLISI PAMONG PRAJA</a></li><li><a target="_blank" href="http://bpbd.batangharikab.go.id/">BADAN PENANGGULANGAN BENCANA DAERAH</a></li><li><a target="_blank" href="http://bkpsdmd.batangharikab.go.id/">BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH</a></li><li><a target="_blank" href="http://bappeda.batangharikab.go.id/">BADAN PERENCANAAN PEMBANGUNAN DAERAH</a></li><li><a target="_blank" href="http://bakeuda.batangharikab.go.id/">BADAN KEUANGAN DAERAH</a></li><li><a target="_blank" href="http://balitbangda.batangharikab.go.id/">BADAN PENELITIAN DAN PENGEMBANGAN DAERAH</a></li><li><a target="_blank" href="http://inspektorat.batangharikab.go.id/">INSPEKTORAT DAERAH</a></li></ul>
                </div> 
           </li>
            
            <li class='dropdown'><h6><i class="fa fa-quote-left"></i>
                                   Kantor</h6>
            <div class="dropdown-content">
           <ul><li><a target="_blank" href="http://kesbangpol.batangharikab.go.id/">KESATUAN BANGSA DAN POLITIK KABUPATEN BATANG HARI</a></li><li><a target="_blank" href="http://rsudhamba.batangharikab.go.id/">RUMAH SAKIT UMUM DAERAH HAMBA</a>
           </div> 
           </li>
    </ul>
             
</li>
        </ul>
            </p>
           <p> <img class="logo-portal" src="logo/lakip.png" alt="Avatar" style="width:100%"></p>
           <p><img class="logo-portal"  src="logo/lakip-skpd.jpg" alt="Avatar" style="width:100%"></p>
           <p><img class="logo-portal" src="logo/portal-app.png" alt="Avatar" style="width:100%"></p>
                  
</div>
</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                   
                                    <div class="f_item_text">
                                        <h3><i class="fa fa-arrow-circle-right"></i>BERITA DAERAH</h3>
                                        <div class="card">
                                        <div class="profil-skpd">
                                        @foreach($berita_terbaru as $berita)
                                        <?php
              $url = URL::to("baca/".$berita->id."/".str_replace(' ','-',$berita->judul)."/".$berita->tanggal);
            ?>
                                        <a href="{{$url}}"><h6>{{$berita->judul}}</h6></a>  
                                        <hr>   
                                        @endforeach
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                   
                                    <div class="f_item_text">
                                    <h3><i class="fa fa-arrow-circle-right"></i>Website SKPD</h3> 
                                    <div class="card">
            <div class="profil-skpd">
            <p><img class="logo-portal" src="logo/ppid.jpg" alt="Avatar" style="width:100%"></p>
                    
            </div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->

            <!--Call to  action section-->
            <section id="action" class="action bg-primary roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="maine_action">
                            
            @include("frontend.video_kegiatan")
                            
            @include("frontend.jadwal_event")
                            
                        </div>
                    </div>
                </div>
            </section>

            @include("frontend.footer")
