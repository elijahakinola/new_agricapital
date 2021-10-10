@extends('layouts.frontend')

<!-- Start Breadcrumb -->
@section('banner')
    @includeIf('layouts.breadcrumb', ['title' => 'Gallery', 'subtitle' => 'Gallery'])
@endsection
<!-- End Breadcrumb -->

@section('page-content')
  
<!--site-main start-->
<div class="site-main">


<!--grid-section-->
    <div class="ttm-row grid-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/portfolio/portfolio-01-770x770.jpg" alt="image">
                            </div><!-- featured-thumbnail end-->
                            <div class="ttm-media-link">
                                <a class="ttm_prettyphoto ttm_image" title="Cage System" data-rel="prettyPhoto" href="images/portfolio/portfolio-01-1200x800.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="portfolio-single.html" class="ttm_link"><i class="fa fa-plus"></i></a>
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="portfolio-single.html">Cage System</a></h3>
                                <div class="category">Catfish, Feeding</div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/portfolio/portfolio-02-770x770.jpg" alt="image">
                            </div><!-- featured-thumbnail end-->
                            <div class="ttm-media-link">
                                <a class="ttm_prettyphoto ttm_image" title="Prawn Lack" data-rel="prettyPhoto" href="images/portfolio/portfolio-02-1200x800.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="portfolio-single.html" class="ttm_link"><i class="fa fa-plus"></i></a>
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="portfolio-single.html">Prawn Lack</a></h3>
                                <div class="category">Angling, Storage</div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <!-- featured-thumbnail -->
                        <div class="ttm-portfolio-format-video">
                            <iframe src="https://www.youtube.com/embed/vwCIoVICDY4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="portfolio-single.html">Fish Storage</a></h3>
                                <div class="category">Feeding, Storage</div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/portfolio/portfolio-04-770x770.jpg" alt="image">
                            </div><!-- featured-thumbnail end-->
                            <div class="ttm-media-link">
                                <a class="ttm_prettyphoto ttm_image" title="Catfish Pound" data-rel="prettyPhoto" href="images/portfolio/portfolio-04-1200x800.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="portfolio-single.html" class="ttm_link"><i class="fa fa-plus"></i></a>
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="portfolio-single.html">Catfish Pound</a></h3>
                                <div class="category">Angling, Catfish</div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/portfolio/portfolio-05-770x770.jpg" alt="image">
                            </div><!-- featured-thumbnail end-->
                            <div class="ttm-media-link">
                                <a class="ttm_prettyphoto ttm_image" title="Shrimp Lack" data-rel="prettyPhoto" href="images/portfolio/portfolio-05-1200x800.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="portfolio-single.html" class="ttm_link"><i class="fa fa-plus"></i></a>
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="portfolio-single.html">Shrimp Lack</a></h3>
                                <div class="category">Catfish, Feeding, Storage</div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <!-- ttm-box-view-overlay -->
                        <div class="ttm-box-view-overlay">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/portfolio/portfolio-06-770x770.jpg" alt="image">
                            </div><!-- featured-thumbnail end-->
                            <div class="ttm-media-link">
                                <a class="ttm_prettyphoto ttm_image" title="Blue Crabs" data-rel="prettyPhoto" href="images/portfolio/portfolio-06-1200x800.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="portfolio-single.html" class="ttm_link"><i class="fa fa-plus"></i></a>
                            </div>
                        </div><!-- ttm-box-view-overlay end-->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="portfolio-single.html">Blue Crabs</a></h3>
                                <div class="category">Angling, Catfish, Storage</div>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>                                            
            </div><!-- row end -->
        </div>
    </div>
    <!--grid-section end-->


    <section class="ttm-row ttm-bgcolor-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>BEST AQUA FARM</h3>
                            <h2 class="title">Start Improving Your Business Today</h2>
                        </div>
                        <div class="title-desc">
                            <p>We bring over 35 years of public practice experience to our clients. Our firm is a family business and we are proud to have five family members working with us. Reliable services targeted to clients</p>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-center margin_top10">
                        <div class="d-sm-flex ttm-vertical_sep text-center">
                            <div class="col">
                                <h5 class="mb-0 p-20 padding_top15 padding_bottom15 res-575-p-0">+ 1 002-123-4567</h5>
                            </div>
                            <div class="col">
                                <h5 class="ttm-textcolor-skincolor mb-0 p-20 padding_top15 padding_bottom15">
                                    <a href="mailto:info@example.com">info@example.com</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div><!--site-main end-->

@endsection