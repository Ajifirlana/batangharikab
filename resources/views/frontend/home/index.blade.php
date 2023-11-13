@extends('frontend.layouts.app')
@section('content')

            <!--Test section-->
            <section id="test" class="test bg-grey roomy-60 fix">
                <div class="container">
                    <div class="row">                        
                        <div class="main_test fix">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="head_title text-center fix">
                                    <h2 class="text-uppercase">Selamat Datang di Kab. Batanghari</h2>
                                    <h5>
Bumi Serentak Bak Regam</h5>
                                </div>
                            </div>
                              
                            <div class="col-md-6">
                                <div class="test_item fix">

                                    <div align="center">
                                    <img src="{{ asset('logo/20210227-1BUPATI.jpeg')}}" alt="" />
                                        <h5>MUHAMMAD FADHIL ARIEF</h5>
                                        <h6>Bupati</h6>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="test_item fix sm-m-top-30">
                
                                   <div align="center">
                                    <img  src="{{ asset('logo/wakil-bupati.jpeg')}}" alt="" />
                                        <h5>H. BAKHTIAR</h5>
                                        <h6>Wakil Bupati</h6>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section><!-- End off test section -->

     
            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_text">
                                        <h3><i class="fa fa-arrow-circle-right"></i>Profil SKPD</h3>
                                   

                                        @include("frontend.layouts.profilskpd")                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                   
                                    <div class="f_item_text">
                                        <h3><i class="fa fa-arrow-circle-right"></i>BERITA DAERAH</h3>
                                        <div class="card"> 
                                        <div class="profil-skpd">
                                        <ul>
                                        @foreach($berita_terbaru as $berita)
                                        <?php
                                        $url = URL::to("baca/".$berita->id."/".str_replace(' ','-',$berita->judul)."/".$berita->tanggal);
                                        ?>
                                       <li><i class="fa fa-arrow-circle-right"></i><a href="{{$url}}"><h6>{{$berita->judul}}</h6></a></li>  
                                        @endforeach
                                        </ul>      <div class="business_btn">
                                        <a href="https://bootstrapthemes.co" class="btn btn-default m-top-20">Read More</a>
                                    </div>
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

            <section id="action" class="action bg-primary roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="maine_action">
                            
            @include("frontend.layouts.video_kegiatan")
                            
                        </div>
                    </div>
                </div>
            </section>

@endsection