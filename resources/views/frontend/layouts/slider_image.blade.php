<section id="product" class="business bg-grey roomy-40">
                <div class="container">
                    <div class="main_product roomy-80">
               
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                            <div class="col-md-12">
                                <div class="business_slid">
                                    <div class="business_items text-center">
                                      
                                    @foreach($image_slider as $row)
                                    <div class="business_img">
                                                <img src="{{ url('frontend/assets/images/'.$row->foto) }}" alt="" />
                                      </div>
                                      
                                      @endforeach
                                
                                    </div>
                                </div>
                            </div>
                            

                            </div>

                
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Product section -->
