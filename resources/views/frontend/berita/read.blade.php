@extends('frontend.layouts.app')
@section('content')

 <!--Featured Section-->
 <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-4">
                                  <h3><i class="fa fa-arrow-circle-right"></i>Profil SKPD</h3>
    
                                        @include("frontend.layouts.profilskpd")                                   
                                </div>
                           
                            <div class="col-md-8">
                                <div class="features_item sm-m-top-30">
                                   
                                    <div class="f_item_text">
                                    <h3></i>{{$berita->judul}}</h3> 
                                    <ul class="post-meta">
                        <li><i class="fa fa-calendar"></i> Posted On: {{$berita->tanggal}}<i class="fa fa-eye"></i> Dilihat: {{$berita->dibaca}} Kali</li>
                      
                      </ul> 
                        <img width="100%" src = "{{asset('berita/'.$berita->gambar)}}" class="img-responsive">
                           <div class = "caption">{{$berita->title_gambar}}</div>
                  
                           <?php echo $berita->isi;?>
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