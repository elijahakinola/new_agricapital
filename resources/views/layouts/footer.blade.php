<!--footer start-->
<footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
      <div class="second-footer">
          <div class="container">
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                      <div class="widget widget_text clearfix">
                          <div class="footer-logo">
                              <img id="footer-logo-img" class="img-fluid auto_size" height="46" width="170" src="images/footer-logo.svg" alt="image">
                          </div>
                          <div class="textwidget widget-text">
                              <p>{{ config ('app.short_description')}}</p>
                              <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="/contact">Contact Us Today <i class="fa fa-chevron-right"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 widget-area">
                      <div class="widget widget_nav_menu clearfix">
                          <h3 class="widget-title">Links</h3>
                          <ul id="menu-footer-quick-links" class="menu">
                              <li><a href="/about_us">About Us</a></li>
                              <li><a href="/contact">Contact Us</a></li>
                              <li><a href="/services">Services</a></li>
                              <li><a href="/steps_to_register">Steps To Register</a></li>
                              <li><a href="/application_form">Application Form</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 widget-area">
                      <div class="widget widget_img_gellary clearfix">
                          <h3 class="widget-title">Our Gallery</h3>
                          <ul>
                              <li><a href="images/portfolio/portfolio-02-1200x800.jpg" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                  <img class="img-fluid" src="images/portfolio/portfolio-02-150x150.jpg" alt=""></a>
                              </li>
                              <li><a href="images/blog/blog-02-1200x800.jpg" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                  <img class="img-fluid" src="images/blog/blog-02-150x150.jpg" alt=""></a>
                              </li>
                              <li><a href="images/blog/blog-01-1200x800.jpg" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                  <img class="img-fluid" src="images/blog/blog-01-150x150.jpg" alt=""></a>
                              </li>
                              <li><a href="images/portfolio/portfolio-01-1200x800.jpg" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                  <img class="img-fluid" src="images/portfolio/portfolio-01-150x150.jpg" alt=""></a>
                              </li>
                              <li><a href="images/services/services-05-1200x800.jpg" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                  <img class="img-fluid" src="images/services/services-05-150x150.jpg" alt=""></a>
                              </li>
                              <li><a href="images/portfolio/portfolio-03-1200x800.jpg"  rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                  <img class="img-fluid" src="images/portfolio/portfolio-03-150x150.jpg" alt=""></a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                      <div class="widget widget_cta clearfix">
                          <h3 class="widget-title">Quick Contacts</h3>
                          <p>If you have any questions or need help</p>
                          <div class="d-flex">
                              <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs margin_right15 margin_bottom15 ">
                                  <i class="flaticon flaticon-call"></i>
                              </div>
                              <h4><p>{{ config ('app.telephone')}}</p></h4>
                          </div>
                          <p>{{ config ('app.address1')}}</p>
                          <p>{{ config ('app.address3')}}</p>
                          <div class="d-inline-table align-items-center justify-content-between">
                              <a class="ttm-btn btn-inline ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor margin_right40 margin_bottom5" href="/contact">Get direction <i class="fa fa-chevron-right"></i></a>
                              <div class="social-icons d-inline-block margin_top10 margin_bottom10">
                                  <ul class="social-icons list-inline">
                                      <li><a class="tooltip-top" href="{{ config ('app.facebook')}}" rel="noopener" aria-label="facebook" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a class="tooltip-top" href="{{ config ('app.twitter')}}" rel="noopener" aria-label="twitter" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a></li>
                                      <li><a class="tooltip-top" href="{{ config ('app.instagram')}}" rel="noopener" aria-label="instagram" data-tooltip="Instagram"><i class="fa fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="bottom-footer-text copyright">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="d-md-flex justify-content-between">
                          <span class="cpy-text">Copyright © {{ date('Y') }} <a href="/" class="ttm-textcolor-skincolor font-weight-500">{{config ('app.name')}} </a> All rights reserved.</span>
                          <ul class="footer-nav-menu">
                              <li><a href="/about_us">About Us</a></li>
                              <li><a href="/services">Services</a></li>
                              <li><a href="/contact">Contact US</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--footer end-->