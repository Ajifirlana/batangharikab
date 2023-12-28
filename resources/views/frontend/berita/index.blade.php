@extends('frontend.layouts.app')
@section('content')

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Berita</h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    
                    @foreach($berita as $row)  
                    <?php
                                        $url = URL::to("baca/".$row->id."/".str_replace(' ','-',$row->judul)."/".$row->tanggal);
                                        ?>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                    <img src="{{asset('frontend/assets/images/blog/news-1-1.jpg')}}" alt="">
                                </div>
                                <div class="news-one__date">
                                    <p>20 Aug</p>
                                </div>
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title"><a href="<?= $url ?>">{{$row->judul}}</a></h3>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $berita->links() }}

                    <!--News One Single End-->
                    
                 
                    <!--News One Single End-->
                </div>
            </div>
        </section>
       
            @endsection