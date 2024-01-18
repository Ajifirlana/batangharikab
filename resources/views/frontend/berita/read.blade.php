@extends('frontend.layouts.app')
@section('content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{asset('frontend/gambar-berita/'.$berita->gambar)}})">
            </div>

            <div class="container">
                <div class="page-header__inner">
                    <h2>{{$berita->judul}}</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>/</span></li>
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="{{asset('frontend/gambar-berita/'.$berita->gambar)}}" alt="">
                                <div class="news-details__date">
                                    <p>{{$berita->created_at}}</p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href="news-details.html"><i class="fas fa-user-circle"></i> by Admin</a>
                                    </li>
                                </ul>
                                <h3 class="news-details__title">{{$berita->judul}}</h3>
                                <p class="news-details__text-1">
                                <?php echo $berita->isi;?>
                                </p>
                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                
                                @foreach($berita_terbaru as $berita)  
                                <?php
                                        $url = URL::to("baca/".$berita->id."/".str_replace(' ','-',$berita->judul)."/".$berita->tanggal);
                                        ?>  
                                <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{asset('frontend/assets/images/blog/lp-1-1.jpg')}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>by Admin</span>
                                                <a href="<?= $url?>">{{$berita->judul}}</a>
                                            </h3>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Details End-->

                  
            @endsection