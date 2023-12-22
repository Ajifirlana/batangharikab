@extends('frontend.layouts.app')
@section('content')
<!--                   
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
                                    <img src="{{ asset('frontend/logo/20210227-1BUPATI.jpeg')}}" alt="" />
                                        <h5>MUHAMMAD FADHIL ARIEF</h5>
                                        <h6>Bupati</h6>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="test_item fix sm-m-top-30">
                
                                   <div align="center">
                                    <img  src="{{ asset('frontend/logo/wakil-bupati.jpeg')}}" alt="" />
                                        <h5>H. BAKHTIAR</h5>
                                        <h6>Wakil Bupati</h6>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- / A set of walkthrough screens in HTML/CSS/JS. A personal experiment with layering images, CSS3 transitions, & flexbox. -->


            <section id="features" class="business bg-grey roomy-40">
                <div class="container">

                    <div class="row">
                        <div class="main_features fix roomy-70">
                           
                            <div class="col-md-6">
                                   
                                        <h3><i class="fa fa-arrow-circle-right"></i>BERITA DAERAH</h3>
                                        <div class="card"> 
                                        <div class="profil-skpd">

  @foreach($berita_terbaru as $berita)
                                        <?php
                                        $url = URL::to("baca/".$berita->id."/".str_replace(' ','-',$berita->judul)."/".$berita->tanggal);
                                        ?>

                                        <div class="details media-body align-self-center">
    <div class="date" itemprop="datePublished"><i class="fa fa-calendar"></i> {{ $berita->tanggal}}
    </div>
</div>
                                        <a href="{{$url}}">
                                            <h5>{{$berita->judul}}</h5>
                                            
                                        </a>

                                        @endforeach
                                        <div align="center">
                                        <a href="{{url('berita')}}" class="btn btn-default m-top-10">Selengkapnya</a>
                                    </div>
                                        </div>     
                                    
                                        </div>
                                </div>
                            <div class="col-md-6">
                                  <h3><i class="fa fa-arrow-circle-right"></i>Website SKPD</h3> 
      
                                    <div class="card">
                                 <div class="profil-skpd">

                                    <div class="business_slid">
                                    <div class="slid_shap bg-grey"></div>
                                    <div class="business_items text-center">

                                    <div class="business_item">
                                            <div class="business_img">
                                                <a href="#"><img src="{{asset('frontend/logo/lakip.png')}}" alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('frontend/logo/lakip-skpd.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('frontend/logo/portal-app.png')}}" alt="" />
                                            </div>
                                        </div>


                                    <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('frontend/logo/ppid.jpg')}}" alt="" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('frontend/logo/dukcapil.jpg')}}" alt="" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('frontend/logo/bkd.jpg')}}" alt="" style="width:100%"/>
                                            </div>
                                        </div>
                                        
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('frontend/logo/lakip.png')}}" alt="" style="width:100%"/>
                                            </div>
                                        </div>
                                        
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('frontend/logo/lakip-skpd.jpg')}}" alt="" style="width:100%"/>
                                            </div>
                                        </div>
                                        
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('frontend/logo/portal-app.png')}}" alt="" style="width:100%"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

            </div>
        </div>
                                    </div>
                                                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->

 @include("frontend.layouts.galeri")

            @include("frontend.layouts.video_kegiatan")
                            
            @include("frontend.layouts.youtube")
                            
           
@endsection