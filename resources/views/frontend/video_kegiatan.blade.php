
<div class="col-md-3">
<div class="widget_latst_item m-top-30">
                                <h3>VIDEO KEGIATAN PEMERINTAH KAB. BATANG HARI</h3>
                                   
                                </div><!-- End off widget item -->
                                </div>
<div class="col-md-4">
@foreach($video_kegiatan as $row)                                  
                                  <div class="widget_latst_item m-top-30">
                                        <div class="item_icon">
                        <img src="{{ asset('frontend/assets/images/ltst-img-1.jpg')}}" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                        
                                        <div class="f_item_text">    
                                        <a href="{{$row->link}}"><p>{{$row->judul}}</p></a>
                                            <a href="">21<sup>th</sup> July 2016</a>
                                        </div></div>
                                    </div>
                                   @endforeach
                                </div><!-- End off widget item -->
