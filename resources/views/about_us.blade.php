@extends('layouts.frontend')

<!-- Start Breadcrumb -->
@section('banner')
    @includeIf('layouts.breadcrumb', ['title' => 'About Us', 'subtitle' => 'About Us'])
@endsection
<!-- End Breadcrumb -->

@section('page-content')
<!--site-main start-->
<div class="site-main">


<section class="ttm-row about-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="padding_right50 res-991-padding_right0 res-991-margin_bottom50">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>ABOUT US</h3>
                            <h2 class="title">Welcome To AgriCapital</h2>
                        </div>
                        <div class="title-desc">
                            <p>AgriCapital Ventures Limited is committed to connecting global resources to opportunities outside its locality and confinement.</p>
                            <p>We are a trusted partner to farmers while also helping agriprenuers in the entire agricultural value chain with needed solutions and advisory support.</p>
                        </div>
                    </div><!-- section title end -->
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark  margin_top15" href="/contact">contact us</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="ttm-bgcolor-grey p-15">
                    <div class="ttm-tabs ttm-tab-style-02" data-effect="fadeIn">
                        <ul class="tabs text-center clearfix">
                            <li class="tab"><a href="#">Mission</a></li>
                            <li class="tab active"><a href="#">Vision</a></li>
                            <li class="tab"><a href="#">Core Values</a></li>
                        </ul>
                        <div class="content-tab">
                            <!-- content-inner -->
                            <div class="content-inner">
                                <div class="padding_bottom15">
                                    <p class="clearfix text-center" style="font-weight: 900;">Our Mission: PITCROFE</p>
                                </div>
                                <p class="clearfix"><b>P</b> - is providing high yield inputs</p>
                                <p class="clearfix"><b>I</b> - is improving farmers welfare</p>
                                <p class="clearfix"><b>T</b> - is training on GAP for improved yield</p>
                                <p class="clearfix"><b>CRO</b> - is crop Diversification</p>
                                <p class="clearfix"><b>F</b> - is financing the entire Agricultural value chain</p>
                                <p class="clearfix"><b>E</b> - is efficient and Effective use of Agricultural resources for global economic development</p>
                            </div><!-- content-inner end-->
                            <!-- content-inner -->
                            <div class="content-inner active">                                        
                                <div class="padding_bottom15">
                                    <p class="clearfix">Connecting Agricultural resources to opportunities in the entire Agricultural value chain.</p>
                                </div>
                            </div><!-- content-inner end-->
                            <!-- content-inner -->
                            <div class="content-inner">
                                <div class="padding_bottom15">
                                    <p class="clearfix text-center" style="font-weight: 900;">Our Core Values: 3RIS</p>
                                </div>
                                <p class="clearfix">Resilient</p>
                                <p class="clearfix">Respect</p>
                                <p class="clearfix">Responsibility</p>
                                <p class="clearfix">Integrity</p>
                                <p class="clearfix">Servant Leadership</p>
                            </div><!-- content-inner end-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>


<section class="ttm-row ttm-bgcolor-grey bg-layer-equal-height margin_top100 res-991-margin_top0 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row mt_180 res-991-margin_top0">
                    <div class="col-lg-6">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white padding_right20 margin_left20 padding_top1 h-100">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- col-bgimage-eight -->
                                <div class="col-bg-img-eight ttm-col-bgimage-yes ttm-bg mt_20 ml_20 padding_top120 padding_bottom120 h-100">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                    <div class="layer-content h-100">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <div class="ttm-play-icon-btn">
                                                <div class="ttm-play-icon-animation">
                                                    <a href="https://www.youtube.com/watch?v=vwCIoVICDY4" target="_self" class="ttm_prettyphoto">
                                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                                            <i class="fa fa-play"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- col-img-bg-img-eight end-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="padding_top100 margin_top100 res-991-margin_top60 padding_left30 res-991-p-0">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h3>ABOUT US</h3>
                                    <h2 class="title">AgriCapital The Company You Can Trust</h2>
                                </div>
                                <div class="title-desc">
                                    <p>AgriCapital Ventures Limited is committed to connecting global resources to opportunities outside its locality and confinement and also We are committed to fulfilling our mission of farmers earning wages with 
                                        access to decent houses, medcare and education for their kids. We started 3 years ago with maize production after which partnership extended to other farmers in different location across the South West State of Nigeria with the production of spices staple foods. Our mission is to provide high yield inputs and caring for farmer's welfare and providing agricultural support for them. Our drive is connecting resources to opportunities. 
                                        We are a trusted partner to farmers in production process as well as aggregator between the farmers and the off-takers. We are located at No. 3, Moremi Street, Off Aare Avenue, New Bodija, Ibadan, Oyo State.</p>
                                </div>
                            </div><!-- section title end -->
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark  margin_top15" href="about-us-2.html">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--team-section-->
<section class="ttm-row team-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>OUR EXPERTS</h3>
                        <h2 class="title">Having Expert Fishermen</h2>
                    </div>
                    <div class="title-desc">
                        <p>Our core firm’s pillar is having a great team that  dedicated & experts!  Who evolves for the best work!</p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <!-- row -->
        <div class="mb_15 row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":991,"settings":{"slidesToShow": 2}}, {"breakpoint":600,"settings":{"slidesToShow": 1}}]}'>
            <div class="col-lg-4">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team style2">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/team-member/team-img01.jpg" alt="image">
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5><a href="team-details.html">Amanda Brown</a></h5>
                        </div>
                        <p class="team-position">Finance Head</p>
                        <div class="featured-iconbox ttm-media-link">
                            <div class="media-block">
                                <a href="#" class="media-btn"><i class="ti ti-plus"></i></a>
                                <ul class="social-icons">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team style2">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/team-member/team-img02.jpg" alt="image">
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5><a href="team-details.html">Jennifer Garcia</a></h5>
                        </div>
                        <p class="team-position">Fishman</p>
                        <div class="featured-iconbox ttm-media-link">
                            <div class="media-block">
                                <a href="#" class="media-btn"><i class="ti ti-plus"></i></a>
                                <ul class="social-icons">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team style2">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/team-member/team-img03.jpg" alt="image">
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5><a href="team-details.html">Elena Neyer</a></h5>
                        </div>
                        <p class="team-position">Marketing Head</p>
                        <div class="featured-iconbox ttm-media-link">
                            <div class="media-block">
                                <a href="#" class="media-btn"><i class="ti ti-plus"></i></a>
                                <ul class="social-icons">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team style2">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/team-member/team-img04.jpg" alt="image">
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5><a href="team-details.html">Andrew Bert</a></h5>
                        </div>
                        <p class="team-position">Fishman</p>
                        <div class="featured-iconbox ttm-media-link">
                            <div class="media-block">
                                <a href="#" class="media-btn"><i class="ti ti-plus"></i></a>
                                <ul class="social-icons">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team style2">
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/team-member/team-img05.jpg" alt="image">
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5><a href="team-details.html">Michael Harper</a></h5>
                        </div>
                        <p class="team-position">CEO Of Founder</p>
                        <div class="featured-iconbox ttm-media-link">
                            <div class="media-block">
                                <a href="#" class="media-btn"><i class="ti ti-plus"></i></a>
                                <ul class="social-icons">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
        </div>
    </div>
</section>
<!--team-section end-->


<!--padding_bottom_zero-section -->
<section class="ttm-row padding_bottom_zero-section bg-img5 margin_bottom100 res-991-margin_bottom0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto">
                <!-- col-img-bg-img-two -->
                <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-two ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor p-30 mb_100 res-991-margin_bottom70 border-rad_6">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                        <div class="ttm-col-wrapper-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <div class="slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
                            <!-- testimonials -->
                            <div class="testimonials ttm-testimonial-box-view-style1">
                                <div class="testimonial-content">
                                    <blockquote class="testimonial-text">Aqovo has done a great job taking on a challenging pond/pump system and making the very best of it. With innovative ideas to use nature rather than chemicals, they have made complaint calls.</blockquote>
                                    <div class="testimonial-bottom">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-fluid" src="images/testimonial/01.jpg" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h3>Alex Sam Martin</h3>
                                            <label>Main Director</label>
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- testimonials end -->
                            <!-- testimonials -->
                            <div class="testimonials ttm-testimonial-box-view-style1"> 
                                <div class="testimonial-content">
                                    <blockquote class="testimonial-text">Mosquito larva is under control, algae is under control, and most of all, the budget is under control. Thank you and we look forward to a continued relationship with Aqovo!  Thank you, Aqovo!</blockquote>
                                    <div class="testimonial-bottom">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-fluid" src="images/testimonial/02.jpg" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h3>Braylin Rosie</h3>
                                            <label>CEO Of Founder</label>
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- testimonials end -->
                            <!-- testimonials -->
                            <div class="testimonials ttm-testimonial-box-view-style1"> 
                                <div class="testimonial-content">
                                    <blockquote class="testimonial-text">Aqovo has been taking care of all aspects of our pond care for quite a few years, from the stocking and health of fish, to the maintenance and upkeep of the pond water and plants. Recommending!</blockquote>
                                    <div class="testimonial-bottom">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-fluid" src="images/testimonial/03.jpg" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h3>Victor Williamson</h3>
                                            <label>Main Experts</label>
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- testimonials end -->
                        </div>
                        <div class="p-15 res-991-p-0">
                            <div class="ttm-horizontal_sep width-100 margin_top15 res-991-margin_top30 margin_bottom35 res-991-margin_bottom20"></div>
                            <div class="d-sm-flex align-items-start">
                                <div class="margin_right30">
                                    <img src="images/star.png" alt="rating">
                                </div>
                                <span><strong class="ttm-textcolor-white"><u>99.9% Customer Satisfaction</u></strong> based on 750+ reviews & 200 Objective Resource</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--padding_bottom_zero-section end -->


<!--blog-section-->
<section class="ttm-row blog-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>LATEST NEWS</h3>
                        <h2 class="title">An Aqua Farming Updates</h2>
                    </div>
                    <div class="title-desc">
                        <p>Let’s get knowledge & expand marine & aqua farming skills. We have some research work and news!</p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style2">
                    <div class="featured-imagebox-post-inner">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/blog/blog-01-620x460.jpg" alt="blog-img">
                        </div>
                        <div class="featured-content">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                <div class="entry-date"><span>29</span>Jun 2021</div>
                            </div><!-- ttm-box-post-date end -->
                            <div class="post-meta">
                                <span class="ttm-meta-line category">Marketing, Unquoted</span>
                                <span class="ttm-meta-line byline">John Dave</span>
                            </div>
                            <div class="featured-title">
                                <h3><a href="blog-single.html">5 Best Tips When Buying a Fishing Pole</a></h3>
                            </div>
                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="blog-single.html">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style2">
                    <div class="featured-imagebox-post-inner">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/blog/blog-02-620x460.jpg" alt="blog-img">
                        </div>
                        <div class="featured-content">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                <div class="entry-date"><span>29</span>Jun 2021</div>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line category">Marketing, Unquoted</span>
                                <span class="ttm-meta-line byline">John Dave</span>
                            </div><!-- post-meta end -->
                            <div class="featured-title">
                                <h3><a href="blog-single.html">Now to Keep Your Fishing Tackle Best</a></h3>
                            </div>
                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="blog-single.html">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style2">
                    <div class="featured-imagebox-post-inner">
                        <div class="featured-thumbnail ttm-post-format-video">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/vwCIoVICDY4" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypte  d-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                        </div>
                        <div class="featured-content">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                <div class="entry-date"><span>29</span>Jun 2021</div>
                            </div><!-- ttm-box-post-date end -->
                            <div class="post-meta">
                                <span class="ttm-meta-line category">Aquarium, Unquoted</span>
                                <span class="ttm-meta-line byline">John Dave</span>
                            </div><!-- post-meta end -->
                            <div class="featured-title">
                                <h3><a href="blog-single.html">Adding Flare To Your Soft Plastic Baits</a></h3>
                            </div>
                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="blog-single.html">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style2">
                    <div class="featured-imagebox-post-inner">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/blog/blog-04-620x460.jpg" alt="blog-img">
                        </div>
                        <div class="featured-content">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                <div class="entry-date"><span>29</span>Jun 2021</div>
                            </div><!-- ttm-box-post-date end -->
                            <div class="post-meta">
                                <span class="ttm-meta-line category">Prawn, Unquoted</span>
                                <span class="ttm-meta-line byline">John Dave</span>
                            </div><!-- post-meta end -->
                            <div class="featured-title">
                                <h3><a href="blog-single.html">Delicate Crab & Prawn Meat Soft Taste</a></h3>
                            </div>
                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="blog-single.html">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style2">
                    <div class="featured-imagebox-post-inner">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="images/blog/blog-05-620x460.jpg" alt="blog-img">
                        </div>
                        <div class="featured-content">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                <div class="entry-date"><span>29</span>Jun 2021</div>
                            </div><!-- ttm-box-post-date end -->
                            <div class="post-meta">
                                <span class="ttm-meta-line category">Angelfish, Unquoted</span>
                                <span class="ttm-meta-line byline">John Dave</span>
                            </div><!-- post-meta end -->
                            <div class="featured-title">
                                <h3><a href="blog-single.html">10 Reasons Why Boat Trips Are Good</a></h3>
                            </div>
                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="blog-single.html">Read More<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end -->
            </div>
        </div>
    </div>
</section>
<!--blog-section end-->


</div><!--site-main end-->
@endsection