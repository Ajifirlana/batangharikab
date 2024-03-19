@extends('frontend.layouts.app')
@section('content')
<section class="news-details">
            <div class="container">
            <div class="section-title text-center">
                    <h2 class="section-title__title">Akuntabilitas Batanghari</h2>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            
                            <div class="news-details__content">
                                
                                <div class="comment-one">
                                @foreach($anggaran as $row)    
                                <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="{{ asset('assets/images/blog/comment-1-1.jpg')}}" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h3>{{$row->judul}}</h3>
                                            <p>{{$row->link_download}}</p>
                                            <a href="#" class="thm-btn comment-one__btn">{{$row->judul}}</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            @endsection