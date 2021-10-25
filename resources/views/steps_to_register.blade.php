@extends('layouts.frontend')

<!-- Start Breadcrumb -->
@section('banner')
    @includeIf('layouts.breadcrumb', ['title' => 'Steps to Register', 'subtitle' => 'Steps to Register'])
@endsection
<!-- End Breadcrumb -->

@section('page-content')

<!--padding_top_zero-section-->
<section class="ttm-row padding_top_zero-section ttm-bgcolor-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="padding_top90 res-991-padding_top40 mt_5 mb_5">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box icon-align-top-content style5">
                                <div class="featured-icon">
                                    <div class="ttm-num"><span class="number ttm-textcolor-darkgrey">STEP ONE</span></div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>REGISTRATION</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <ul style="list-style: none;">
                                            <li>
                                                <i class="ion-chevron-right"></i> Fill the application form.
                                            </li>
                                            <li>
                                                <i class="ion-chevron-right"></i> Attend our training sessions
                                            </li>
                                            <li>
                                                <i class="ion-chevron-right"></i> Available crops for cultivation will be provided.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box icon-align-top-content style5">
                                <div class="featured-icon">
                                    <div class="ttm-num"><span class="number ttm-textcolor-darkgrey">STEP TWO</span></div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>ACCOUNT OPENING</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>
                                        This process will be completed by or support 
                                        team with every communicated detials provided by the 
                                        farmer.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box icon-align-top-content style5">
                                <div class="featured-icon">
                                    <div class="ttm-num"><span class="number ttm-textcolor-darkgrey">STEP THREE</span></div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>SITE VISITATION</h3>
                                    </div>
                                    <div class="featured-desc">
                                    <p>This process is conducted to gain an impression of 
                                        the state of the farmland for a proposed transaction with the farmers.</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box icon-align-top-content style5">
                                <div class="featured-icon">
                                    <div class="ttm-num"><span class="number ttm-textcolor-darkgrey">STEP FOUR</span></div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>FARM INPUT</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>AgriCapital will provide farmers with available quality seeds and various organic and inorganic treatments.</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box icon-align-top-content style5">
                                <div class="featured-icon">
                                    <div class="ttm-num"><span class="number ttm-textcolor-darkgrey">STEP FIVE</span></div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>ENLISTMENT PROCESS / CONFIRMATION</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Process of becoming our partner is completed once all service requirements accessed by AgriCapital team are met.</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--padding_top_zero-section end-->
@endsection