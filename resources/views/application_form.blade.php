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
                        <h3>application!</h3>
                        <h2 class="title">Application Form</h2>
                    </div>
                </div><!-- section-title end -->
            </div>
        </div>
        <!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ttm-bgcolor-white p-40 padding_top35 border-rad_5 margin_top15">
                    <form id="request_qoute_form" class="request_qoute_form wrap-form clearfix" method="post" action="applicationFORM">
                        @csrf
                        <!-- IF MAIL SENT SUCCESSFULLY -->
                        @includeIf('layouts.error_template')
                        <!-- END IF MAIL SENT SUCCESSFULLY -->
                        <div class="row">
                        <div class="col-lg-12">
                        <h4>PERSONAL INFORMATION</h4>
                        <hr>
                        </div>
                            <div class="col-md-6 mt-1">
                                <select class="test-input selectBox" name="title" required>
                                <option> -- Please Select Title -- </option>
                                    <option value="Mr."> Mr. </option>
                                    <option value="Mrs."> Mrs </option>
                                    <option value="Miss"> Miss </option>
                                </select>    
                            </div>
                      
                            <div class="col-md-6">
                                <span class="text-input"><input name="surname" type="text" placeholder="Sur Name*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="first_name" type="text" placeholder="First Name*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="other_name" type="text" placeholder="Other Name*" required="required"></span>
                            </div>
                            <div class="col-md-6 mt-2">
                                <select class="test-input" name="sex" required>
                                    <option>-- Please Select Gender --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="date_of_birth" type="date" placeholder="Date of Birth*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="phone_number" type="text" placeholder="Phone Number*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="email" type="email" placeholder="Your Email*" required="required"></span>
                            </div>
                            
                            <div class="col-md-12">
                                <span class="text-input"><input name="home_address" type="text" placeholder="Home Address*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="farm_address" type="text" placeholder="Farm Address*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="lga" type="text" placeholder="Local Government Area*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="town_city" type="text"placeholder="Town/City*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="state" type="text" placeholder="State*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                            <label>Are you interested in the Agric Capital Contract Farming Initiative?: <span>*</label> 
                                <select class="form-input mb-4" name="farming_initiative" required="required">
                                    <option> -- Select -- </option>
                                    <option value="Yes"> Yes </option>
                                    <option value="No"> No </option>
                                </select>   
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="land_size" type="text" placeholder="What is your available size of land?:*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="contract_crops" type="text" placeholder="What are your preferred contract crops?:*" required="required"></span>
                            </div>
                           
                            <div class="col-md-12">
                            <hr>
                            <h4> NEXT OF KIN DETAILS </h4>
                            <hr>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="kin_full_name" type="text" placeholder="Kin Full Name*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="kin_email" type="email" placeholder="Kin Email Address*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="kin_phone_number" type="text" placeholder="Kin Phone Number*" required="required"></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-input"><input name="kin_occupation" type="text" placeholder="Kin Occupation*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="kin_relationship" type="text" placeholder="Kin Relationship*" required="required"></span>
                            </div>
                            <div class="col-md-12">
                            <input type="checkbox" name="contract_agreement" required>
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