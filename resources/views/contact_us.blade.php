@extends('layouts.frontend')

<!-- Start Breadcrumb -->
@section('banner')
    @includeIf('layouts.breadcrumb', ['title' => 'Contact Us', 'subtitle' => 'Contact Us'])
@endsection
<!-- End Breadcrumb -->

@section('page-content')
<!--site-main start-->
 <div class="site-main">

<!-- conatct-section -->
<section class="ttm-row conatct-section ttm-bgcolor-grey clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>get in touch!</h3>
                        <h2 class="title">Have A Questions Drop Us Line?</h2>
                    </div>
                    <div class="title-desc">
                        <p>We take great pride in everything that we do, complete control over products allows us to ensure customers receive best service.</p>
                    </div>
                </div><!-- section-title end -->
            </div>
        </div>
        <!-- row end -->
        <div class="row">
            <div class="col-lg-8">
                <div class="ttm-bgcolor-white p-40 padding_top35 border-rad_5 margin_top15">
                    <form class="request_qoute_form wrap-form clearfix" method="post" action="/contactUS">
                        @csrf
                        <!-- IF MAIL SENT SUCCESSFULLY -->
                        @includeIf('layouts.error_template')
                        <!-- END IF MAIL SENT SUCCESSFULLY -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="email" type="text" value="" placeholder="Your Email*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="phone_number" type="text" value="" placeholder="Phone Number*" required="required"></span>
                            </div>
                            <div class="col-lg-12">
                                <span class="text-input"><textarea name="message" rows="5" placeholder="Message" required="required"></textarea></span>
                            </div>
                            <div class="col-lg-12">
                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor w-100 margin_top5" type="submit">Send now!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ttm-bgcolor-white p-30 border-rad_5 margin_top15">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content margin_top0 margin_bottom25">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                <i class="flaticon-email"></i>
                            </div>
                        </div>
                        <div class="featured-content pt-2">
                            <div class="featured-title">
                                <h3 class="margin_bottom0 fs-20">Let’s Call or Email</h3>
                            </div>
                            <div class="featured-desc">{{config ('app.email')}}<br>{{config ('app.telephone2')}}, {{config ('app.telephone3')}}</div>
                        </div>
                    </div><!-- featured-icon-box end-->
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content margin_bottom25">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                <i class="flaticon-address"></i>
                            </div>
                        </div>
                        <div class="featured-content pt-2">
                            <div class="featured-title">
                                <h3 class="margin_bottom0 fs-20">We Reached Here</h3>
                            </div>
                            <div class="featured-desc">{{config ('app.address2')}}</div>
                        </div>
                    </div><!-- featured-icon-box end-->
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content margin_bottom10">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                <i class="themifyicon ti-themify-favicon"></i>
                            </div>
                        </div>
                        <div class="featured-content pt-2">
                            <div class="featured-title">
                                <h3 class="margin_bottom0 fs-20">We Reached Here</h3>
                            </div>
                            <div class="featured-desc">{{config ('app.address3')}}</div>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- conatct-section end -->


<!--- conatact-section -->
<section class="ttm-row conatact-section mb_20 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row ttm-boxes-spacing-30px">
            <div class="col-lg-4 ttm-box-col-wrapper">
                <div class="ttm_contact_widget_wrapper ttm-bgcolor-skincolor border-rad_5 ttm-textcolor-white">
                    <ul>
                        <li><h6>Address 1</h6><span>{{config ('app.address1')}}</span></li>
                        <li><h6>Address 2</h6><span>{{config ('app.address2')}}</span></li>
                        <li><h6>Address 3</h6><span>{{config ('app.address3')}}</span></li>
                    </ul>
                    <a class="ttm-btn btn-inline ttm-btn-size-sm ttm-btn-color-white" href="/contact"><u>Get A Directions!</u></a>
                </div>
            </div>
            <div class="col-lg-8 ttm-box-col-wrapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.401204050855!2d3.909330764269461!3d7.420772964141601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039ed8b0c412637%3A0x16fdb1a3f22fbffa!2sAgriCapital%20Ventures%20Limited!5e0!3m2!1sen!2sng!4v1600254829229!5m2!1sen!2sng"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                    aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div><!-- row end -->                
    </div>
</section>
<!-- conatact-section end -->


</div><!--site-main end-->
@endsection