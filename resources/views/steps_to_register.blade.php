@extends('layouts.frontend')

<!-- Start Breadcrumb -->
@section('banner')
    @includeIf('layouts.breadcrumb', ['title' => 'Steps to Register', 'subtitle' => 'Steps to Register'])
@endsection
<!-- End Breadcrumb -->

@section('page-content')

<!-- Application Process section -->

<div class="padding pt-xs-40">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-lg-12">
                <div class="heading-box pb-30">
                    <h2><span>Our</span> Application Process</h2>
                    <span class="b-line l-left"></span>
                </div>
            </div>
            </div>
        <div class="row mt-60">
            <div class="col-md-6 col-lg-6">
                <div class="about-block gray-bg   padding-40 clearfix">
                    <div class="client-avtar">
                        <img src="assets/images/process/user_1.png" class="img-responsive" alt="Responsive image">
                    </div>
                    <div class="text-box">
                        <div class="text-content">
                            <p>
                                </p><div class="impotent_point">
                                    <ul>
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
                            <p></p>
                        </div>
                        <div class="box-title">
                            <h4 class="member_say">STEP ONE: REGISTRATION</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="about-block dark-gray-bg  padding-40 clearfix">
                    <div class="client-avtar left-pos">
                        <img src="assets/images/process/user_2.png" class="img-responsive" alt="Responsive image">
                    </div>
                    <div class="text-box">
                        <div class="text-content">
                            <p>
                                <br>
                                This process will be completed by or support<br>
                                team with every communicated detials provided <br>by the 
                                farmer.
                            </p>
                        </div>
                        <div class="box-title">
                            <h4 class="member_say">STEP TWO: ACCOUNT OPENING</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-80">
            <div class="col-md-6 col-lg-6">
                <div class="about-block dark-gray-bg   padding-40 clearfix">
                    <div class="client-avtar">
                        <img src="assets/images/process/user_3.png" class="img-responsive" alt="Responsive image">
                    </div>
                    <div class="text-box">
                        <div class="text-content">
                            <p>
                                This process is conducted to gain an impression of 
                                the state of the farmland for a proposed transaction with the farmers.
                            </p>
                        </div>
                        <div class="box-title">
                            <h4 class="member_say">STEP THREE: SITE VISITATION</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="about-block gray-bg  padding-40 clearfix">
                    <div class="client-avtar left-pos">
                        <img src="assets/images/process/user_4.png" class="img-responsive" alt="Responsive image">
                    </div>
                    <div class="text-box">
                        <div class="text-content">
                            <p>
                                AgriCapital will provide farmers with available quality seeds and various organic and inorganic treatments.
                            </p>
                        </div>
                        <div class="box-title">
                            <h4 class="member_say">STEP FOUR: FARM INPUT</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-80">
            <div class="col-md-6 col-lg-6">
                <div class="about-block gray-bg   padding-40 clearfix">
                    <div class="client-avtar">
                        <img src="assets/images/process/user_5.png" class="img-responsive" alt="Responsive image">
                    </div>
                    <div class="text-box">
                        <div class="text-content">
                            <p>
                                Process of becoming our partner is completed once all service requirements accessed by AgriCapital team are met.
                            </p>
                        </div>
                        <div class="box-title">
                            <h4 class="member_say">STEP FIVE:
                                ENLISTMENT PROCESS / CONFIRMATION</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Application Process section end -->


@endsection