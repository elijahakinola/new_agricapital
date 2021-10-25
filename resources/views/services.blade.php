@extends('layouts.frontend')

<!-- Start Breadcrumb -->
@section('banner')
    @includeIf('layouts.breadcrumb', ['title' => 'Services', 'subtitle' => 'Services'])
@endsection
<!-- End Breadcrumb -->

@section('page-content')
<!--site-main start-->
<div class="site-main">


<!--services-section-->
<section class="ttm-row services-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>OUR SERVICES</h3>
                        <h2 class="title">Our Services</h2>
                    </div>
                    <div class="title-desc">
                        <p>How We Are Useful To You</p>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <!-- row -->
        <div class="row mb_15">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!--featured-imagebox-->
                <div class="featured-imagebox featured-imagebox-services style1">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/services/services-01-585x760.jpg" alt="image">
                    </div><!-- featured-thumbnail end-->
                    <div class="featured-content">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon-prawn-1"></i>
                            </div>
                        </div>
                        <div class="featured-title">
                            <h3><a href="prawn-feeds.html">FARMERS MEDICAL PROGRAMME</a></h3>
                        </div>
                        <div class="featured-desc">
                            <p>We assist farmers on medical bills by partnering with the farmer's medical center for effective management of the farmer's health.</p>
                        </div>
                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="prawn-feeds.html">view More<i class="fa fa-angle-right"></i></a>
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!--featured-imagebox-->
                <div class="featured-imagebox featured-imagebox-services style1">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/services/services-02-585x760.jpg" alt="image">
                    </div><!-- featured-thumbnail end-->
                    <div class="featured-content">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon-koi-fish"></i>
                            </div>
                        </div>
                        <div class="featured-title">
                            <h3><a href="flowerhorn-fish.html">Flowerhorn Fish</a></h3>
                        </div>
                        <div class="featured-desc">
                            <p>It is considered one of the most profitable in export value in the fish farming industry and always helpful.</p>
                        </div>
                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="flowerhorn-fish.html">view More<i class="fa fa-angle-right"></i></a>
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!--featured-imagebox-->
                <div class="featured-imagebox featured-imagebox-services style1">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/services/services-03-585x760.jpg" alt="image">
                    </div><!-- featured-thumbnail end-->
                    <div class="featured-content">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon-pier"></i>
                            </div>
                        </div>
                        <div class="featured-title">
                            <h3><a href="hatchery-supply.html">Hatchery Supply</a></h3>
                        </div>
                        <div class="featured-desc">
                            <p>Hatchery includes fish graders, shipping supplies to spawning & handling a many container world wide.</p>
                        </div>
                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="hatchery-supply.html">view More<i class="fa fa-angle-right"></i></a>
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!--featured-imagebox-->
                <div class="featured-imagebox featured-imagebox-services style1">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/services/services-04-585x760.jpg" alt="image">
                    </div><!-- featured-thumbnail end-->
                    <div class="featured-content">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon-lake-2"></i>
                            </div>
                        </div>
                        <div class="featured-title">
                            <h3><a href="aquatic-plants.html">Aquatic Plants</a></h3>
                        </div>
                        <div class="featured-desc">
                            <p>The submerged and emergent vegetation are relatively easy to distinguish aquarium for the best feed. </p>
                        </div>
                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="aquatic-plants.html">view More<i class="fa fa-angle-right"></i></a>
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!--featured-imagebox-->
                <div class="featured-imagebox featured-imagebox-services style1">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/services/services-05-585x760.jpg" alt="image">
                    </div><!-- featured-thumbnail end-->
                    <div class="featured-content">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon-pond-1"></i>
                            </div>
                        </div>
                        <div class="featured-title">
                            <h3><a href="green-care.html">Green Care</a></h3>
                        </div>
                        <div class="featured-desc">
                            <p>The farming aspect of the aqua farming implies an intervention enhance production.</p>
                        </div>
                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="green-care.html">view More<i class="fa fa-angle-right"></i></a>
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!--featured-imagebox-->
                <div class="featured-imagebox featured-imagebox-services style1">
                    <!-- featured-thumbnail -->
                    <div class="featured-thumbnail">
                        <img class="img-fluid" src="images/services/services-06-585x760.jpg" alt="image">
                    </div><!-- featured-thumbnail end-->
                    <div class="featured-content">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon-pond-1"></i>
                            </div>
                        </div>
                        <div class="featured-title">
                            <h3><a href="water-changes.html">Water Changes</a></h3>
                        </div>
                        <div class="featured-desc">
                            <p>Hatchery includes fish graders, shipping supplies to spawning & handling container.</p>
                        </div>
                        <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="water-changes.html">view More<i class="fa fa-angle-right"></i></a>
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
        </div>
        <!-- row end -->
    </div>
</section>
<!--services-section end-->


<!-- client-section -->
<div class="ttm-row client-section ttm-bgcolor-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- slick_slider -->
                <div class="slick_slider padding_bottom20" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}},{"breakpoint":575,"settings":{"slidesToShow": 2}},{"breakpoint":380,"settings":{"slidesToShow": 1}}]}'>
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip">
                            <div class="ttm-client-logo-tooltip-inner">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="images/client/client-01.png" alt="image">
                                </div>
                                <div class="client-thumbnail_hover">
                                    <img class="img-fluid" src="images/client/client-01.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip">
                            <div class="ttm-client-logo-tooltip-inner">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="images/client/client-02.png" alt="image">
                                </div>
                                <div class="client-thumbnail_hover">
                                    <img class="img-fluid" src="images/client/client-02.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip">
                            <div class="ttm-client-logo-tooltip-inner">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="images/client/client-03.png" alt="image">
                                </div>
                                <div class="client-thumbnail_hover">
                                    <img class="img-fluid" src="images/client/client-03.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip">
                            <div class="ttm-client-logo-tooltip-inner">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="images/client/client-04.png" alt="image">
                                </div>
                                <div class="client-thumbnail_hover">
                                    <img class="img-fluid" src="images/client/client-04.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip">
                            <div class="ttm-client-logo-tooltip-inner">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="images/client/client-05.png" alt="image">
                                </div>
                                <div class="client-thumbnail_hover">
                                    <img class="img-fluid" src="images/client/client-05.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip">
                            <div class="ttm-client-logo-tooltip-inner">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="images/client/client-03.png" alt="image">
                                </div>
                                <div class="client-thumbnail_hover">
                                    <img class="img-fluid" src="images/client/client-03.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-client end -->  
            </div>
        </div>
    </div>
</div>
<!-- client-section end -->


</div><!--site-main end-->
@endsection