@extends('frontend.layouts.app')
@section('content')

            <section id="features" class="features">
                <div class="container">

                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-4">
                                  <h3><i class="fa fa-arrow-circle-right"></i>Profil SKPD</h3>
    
                                        @include("frontend.layouts.profilskpd")                                   
                                </div>
                            <div class="col-md-4">
                                   
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
                                        <a href="https://bootstrapthemes.co" class="btn btn-default m-top-10">Selengkapnya</a>
                                    </div>
                                        </div>     
                                    
                                        </div>
                                </div>
                            <div class="col-md-4">
                                  <h3><i class="fa fa-arrow-circle-right"></i>Website SKPD</h3> 
                                    <div class="card">
            <div class="profil-skpd">
            <p><img class="logo-portal" src="logo/ppid.jpg" alt="Avatar" style="width:100%"></p>
                    
            </div></div>
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