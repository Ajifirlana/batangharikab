@extends('frontend.layouts.app')
@section('content')

<section id="action" class="business bg-grey roomy-40">
</section>
 <!--Featured Section-->
 <section id="features"  class="business bg-grey roomy-40">
                <div class="container">
                    <div class="row">
                           
                            <div class="col-md-8">
                           
                            <div class="features_item sm-m-top-30">
                                   
                                    <div class="f_item_text">
                                    <h3></i>{{$berita->judul}}</h3> 
                                    <h6><i class="fa fa-calendar"></i> Posted On: {{$berita->tanggal}}<i class="fa fa-eye"></i> Dilihat: {{$berita->dibaca}} Kali
</h6>
                                 <!-- <img width="100%" src = "{{asset('berita/'.$berita->gambar)}}" class="img-responsive">     -->
                                    <div class = "caption">{{$berita->title_gambar}}</div>
                                    
                                    <h5><?php echo $berita->isi;?></h5>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                  <h3><i class="fa fa-arrow-circle-right"></i>Berita</h3>
                            <div class="card-video">
                                  @foreach($berita_terbaru as $berita)
                                        <?php
                                        $url = URL::to("baca/".$berita->id."/".str_replace(' ','-',$berita->judul)."/".$berita->tanggal);
                                        ?>

<h5><i class="fa fa-calendar"></i> {{ $berita->tanggal}}</h5>
                                        
                                                                            <a href="{{$url}}">
                                            <h5>{{$berita->judul}}</h5>
                                            
                                        </a>

                                        @endforeach                        
                                </div>
                                </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->
            
                  
            @endsection