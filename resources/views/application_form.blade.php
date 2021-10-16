@extends('layouts.frontend')

<!-- Start Breadcrumb -->
@section('banner')
    @includeIf('layouts.breadcrumb', ['title' => 'Application Form', 'subtitle' => 'Application Form'])
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
            <div class="col-lg-12">
                <div class="ttm-bgcolor-white p-40 padding_top35 border-rad_5 margin_top15">
                    <form id="request_qoute_form" class="request_qoute_form wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                        <div class="row">
                        <div class="col-lg-12">
                        <h4>PERSONAL INFORMATION</h4>
                        <hr>
                        </div>
                   <div class="col-md-6">
                    <label>Title: <span>*</span></label>
                  <select class="form-control" name="title" required="">
                    <option> -- Please Select Title -- </option>
                    <option value="Mr."> Mr. </option>
                    <option value="Mrs."> Mrs </option>
                    <option value="Miss"> Miss </option>
                    </select>    
                    </div>
                      
                            <div class="col-md-6">
                                <span class="text-input"><input name="name" type="text" value="" placeholder="SurName*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="name" type="text" value="" placeholder="First Name*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="name" type="text" value="" placeholder="Other Name*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <label>Sex:</span></span></label>
                                <select class="test-input" name="sex" require="">
                                    <option>--Please Select Title--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="DOB" type="date" value="" placeholder="Date of Birth*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="address" type="email" value="" placeholder="Your Email*" required="required"></span>
                            </div>
                            
                            <div class="col-md-12">
                                <span class="text-input"><input name="address" type="text" value="" placeholder="Home Address*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="address" type="text" value="" placeholder="Farm Address*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="LGA" type="text" value="" placeholder="Local Government Area*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="town/city" type="text" value="" placeholder="Town/City*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="state" type="text" value="" placeholder="State*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                            <label>Are you interested in the Agric Capital Contract Farming Initiative?: <span>*</label> 
                                <select class="form-input" name="farming_initiative" required="required">
                                    <option> -- Select -- </option>
                                    <option value="Yes"> Yes </option>
                                    <option value="No"> No </option>
                                </select>   
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="Size" type="text" value="" placeholder="What is your available size of land?:*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="crops" type="text" value="" placeholder="What are your preferred contract crops?:*" required="required"></span>
                            </div>
                           
                            <div class="col-md-12">
                            <hr>
                            <h4> NEXT OF KIN DETAILS </h4>
                            <hr>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="name" type="text" value="" placeholder="Full Name*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="address" type="email" value="" placeholder="Email Address*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="Occupation" type="text" value="" placeholder="Occupation*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="Relationship" type="text" value="" placeholder="Relationship*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                            <input type="checkbox" name="contract_agreement" required="">
                            <b>I fully understand the Agri Capital Contract Farming Initiative and hereby wish to express my willingness
                                to be a part of the programme.</b>
                            </div>
                            
                            <div class="col-lg-12">
                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor w-100 margin_top5" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- conatct-section end -->


</div><!--site-main end-->
@endsection