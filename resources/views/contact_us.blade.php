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
                    <form id="request_qoute_form" class="request_qoute_form wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="address" type="text" value="" placeholder="Your Email*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="subject" type="text" value="" placeholder="Subject*" required="required"></span>
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
                            <div class="featured-desc">example@evenex.com<br>+1800 123 456 7890</div>
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
                            <div class="featured-desc">45 Mikraham Street, New York 47895</div>
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
                                <h3 class="margin_bottom0 fs-20">Chat on Online</h3>
                            </div>
                            <div class="featured-desc">name@skype.com</div>
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
                        <li><h6>Venue</h6><span>James D.Mraff Nok Mall</span></li>
                        <li><h6>Address 1</h6><span>1356 Broadway, New York NY 10018, Australia</span></li>
                        <li><h6>Address 2</h6><span>1356 Broadway, New York NY 10018, Australia</span></li>
                    </ul>
                    <a class="ttm-btn btn-inline ttm-btn-size-sm ttm-btn-color-white" href="contact-us.html"><u>Get A Directions!</u></a>
                </div>
            </div>
            <div class="col-lg-8 ttm-box-col-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051" width="740" height="405"></iframe>
            </div>
            <div class="col-md-6 col-sm-6 ttm-box-col-wrapper">
                <div class="ttm_single_image-wrapper border-rad_5">
                    <img class="img-fluid" src="images/single-img-09.jpg" height="330" width="570" alt="single-09">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 ttm-box-col-wrapper">
                <div class="ttm_single_image-wrapper border-rad_5">
                    <img class="img-fluid" src="images/single-img-10.jpg" height="330" width="570" alt="single-10">
                </div>
            </div>
        </div><!-- row end -->                
    </div>
</section>
<!-- conatact-section end -->


</div><!--site-main end-->
@endsection