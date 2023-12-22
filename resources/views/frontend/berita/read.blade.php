@extends('frontend.layouts.app')
@section('content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>

            <div class="container">
                <div class="page-header__inner">
                    <h2>News Details</h2>
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
                                <img src="{{asset('assets/images/blog/news-details-img-1.jpg')}}" alt="">
                                <div class="news-details__date">
                                    <p>20 Aug</p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href="news-details.html"><i class="fas fa-user-circle"></i> by Admin</a>
                                    </li>
                                    <li><a href="news-details.html"><i class="fas fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-details__title">{{$berita->judul}}</h3>
                                <p class="news-details__text-1">
                                <?php echo $berita->isi;?>
                                </p>
                
                                <div class="news-details__bottom">
                                    <p class="news-details__tags">
                                        <span>Tags</span>
                                        <a href="#">Development</a>
                                        <a href="#">Build</a>
                                    </p>
                                    <div class="news-details__social-list">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="news-details__pagenation-box">
                                    <ul class="list-unstyled news-details__pagenation">
                                        <li>How much a website cost to build</li>
                                        <li>We love design the latest trendy websites</li>
                                    </ul>
                                </div>
                                <div class="comment-one">
                                    <h3 class="comment-one__title">2 comments</h3>
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="{{asset('assets/images/blog/comment-1-1.jpg')}}" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>Kevin Martin</h3>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting simply fee text aunchanged. It was popularised in
                                                the sheets containing lorem ipsum is simply free text.</p>
                                            <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a>
                                        </div>
                                    </div>
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="{{asset('assets/images/blog/comment-1-2.jpg')}}" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>Sarah Albert</h3>
                                            <p>It has survived not only five centuries, but also the leap into
                                                electronic typesetting simply fee text aunchanged. It was popularised in
                                                the sheets containing lorem ipsum is simply free text.</p>
                                            <a href="news-details.html" class="thm-btn comment-one__btn">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <h3 class="comment-form__title">Leave a comment</h3>
                                    <form action="assets/inc/sendemail.php"
                                        class="comment-one__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Your Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="email" placeholder="Email Address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write Message"></textarea>
                                                </div>
                                                <div class="comment-form__btn-box">
                                                    <button type="submit" class="thm-btn comment-form__btn">Submit
                                                        comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                
                                @foreach($berita_terbaru as $berita)    
                                <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{asset('assets/images/blog/lp-1-1.jpg')}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>by Admin</span>
                                                <a href="news-details.html">{{$berita->judul}}</a>
                                            </h3>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="news-details.html">Industrial<span class="icon-right-arrow"></span></a>
                                    </li>
                                    <li class="active"><a href="news-details.html">Construction<span
                                                class="icon-right-arrow"></span></a></li>
                                    <li><a href="news-details.html">Renovation<span class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="news-details.html">Rebuilding<span class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="news-details.html">Factroy Business<span
                                                class="icon-right-arrow"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">Development</a>
                                    <a href="#">Build</a>
                                    <a href="#">Factory</a>
                                    <a href="#">Industry</a>
                                    <a href="#">Renovation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Details End-->

                  
            @endsection