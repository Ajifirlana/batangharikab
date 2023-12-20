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
                                    <h3></i>{{$judul}}</h3> 
                                    <h6><i class="fa fa-calendar"></i> Posted On: {{$created_at}}</h6>
                                   
                                    <h5><?php echo $isi?></h5>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-4">
                            <h3><i class="fa fa-arrow-circle-right"></i>Website SKPD</h3> 
                            

                                    <div class="business_slid">
                                    <div class="slid_shap bg-grey"></div>
                                    <div class="business_items text-center">

                                    <div class="business_item">
                                            <div class="business_img">
                                                <a href="#"><img src="{{asset('logo/lakip.png')}}" alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('logo/lakip-skpd.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('logo/portal-app.png')}}" alt="" />
                                            </div>
                                        </div>


                                    <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('logo/ppid.jpg')}}" alt="" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('logo/dukcapil.jpg')}}" alt="" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('logo/bkd.jpg')}}" alt="" style="width:100%"/>
                                            </div>
                                        </div>
                                        
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('logo/lakip.png')}}" alt="" style="width:100%"/>
                                            </div>
                                        </div>
                                        
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('logo/lakip-skpd.jpg')}}" alt="" style="width:100%"/>
                                            </div>
                                        </div>
                                        
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{asset('logo/portal-app.png')}}" alt="" style="width:100%"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
            
                    <!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->
            
                  
            @endsection