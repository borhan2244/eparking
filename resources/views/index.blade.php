<!DOCTYPE html>
<!-- saved from url=(0046) -->
<html lang="en" class="wide smoothscroll wow-animation desktop landscape rd-navbar-static-linked"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Site Title -->
  <title>eParking</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!-- Stylesheets -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="{{asset('frontend/css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/style.css')}}">

  <!--[if lt IE 10]>
  <script src="js/html5shiv.min.js"></script>
  <![endif]-->
<style data-olark="true" type="text/css">.olark-key,#hbl_code,#olark-data{display: none !important;}</style><style data-olark="true" type="text/css">@media print {#habla_beta_container_do_not_rely_on_div_classes_or_names {display: none !important}}</style><link data-olark="true" rel="stylesheet" href="./theme.css" type="text/css"></head>
<body><div id="olark" style="display: none;"><olark><iframe frameborder="0" id="olark-loader" src="./saved_resource.html"></iframe></olark></div>
<!-- The Main Wrapper -->
<div class="page">

  <!--For older internet explorer-->
  <div class="old-ie" style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
    <a href="http://windows.microsoft.com/en-US/">
      <img src="{{asset('frontend/warning_bar_0000_us.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
    </a>
  </div>
  <!--END block for older internet explorer-->

  <!--========================================================
                            HEADER
  =========================================================-->
  <header class="page-header">
    <!-- RD Navbar -->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-static" data-rd-navbar-lg="rd-navbar-static">
        <div class="rd-navbar-inner">
          <!-- RD Navbar Panel -->
          <div class="rd-navbar-panel">

            <!-- RD Navbar Toggle -->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar"><span></span></button>
            <!-- END RD Navbar Toggle -->

            <!-- RD Navbar Brand -->
            <div class="rd-navbar-brand">
              <a href="#">
                <img src="{{asset('frontend/eparking.png')}}" width="50%">
              </a>
            </div>
            <!-- END RD Navbar Brand -->
          </div>
          <!-- END RD Navbar Panel -->

          <div class="rd-navbar-nav-wrap">
            <!-- RD Navbar Nav -->
            <ul class="rd-navbar-nav">
              <li class="active rd-navbar--has-megamenu rd-navbar-submenu">
                <a href="#">Home</a>
                <!-- RD Navbar Megamenu -->
                <ul class="rd-navbar-megamenu">
                 
                </ul>
                <!-- END RD Navbar Megamenu -->
              <span class="rd-navbar-submenu-toggle"></span></li>
              <li class="rd-navbar--has-dropdown rd-navbar-submenu">
                <a href="#">About</a>

                <!-- RD Navbar Dropdown -->
               
                <!-- END RD Navbar Dropdown -->
              <span class="rd-navbar-submenu-toggle"></span></li>
              <li>
                <a href="#">Services</a>
              </li>
              
              
              <li>
                <a href="{{ route('login') }}">Login</a>
              </li>
              <li>
                <a href="{{ route('register') }}">Sign Up</a>
              </li>
              <li>
                <a href="#">Download App</a>
              </li>   

            </ul>
            <!-- END RD Navbar Nav -->
          </div>
        </div>
      </nav><nav class="rd-navbar rd-navbar--is-clone rd-navbar-static" data-rd-navbar-lg="rd-navbar-static">
        <div class="rd-navbar-inner">
          <!-- RD Navbar Panel -->
          <div class="rd-navbar-panel">

            <!-- RD Navbar Toggle -->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar"><span></span></button>
            <!-- END RD Navbar Toggle -->

            <!-- RD Navbar Brand -->
            <div class="rd-navbar-brand">
              <a href="#">
                <img src ="{{asset('frontend/eparking.png')}}" width="50%">
              </a>
            </div>
            <!-- END RD Navbar Brand -->
          </div>
          <!-- END RD Navbar Panel -->

          <div class="rd-navbar-nav-wrap">
            <!-- RD Navbar Nav -->
            <ul class="rd-navbar-nav">
              <li class="active rd-navbar--has-megamenu rd-navbar-submenu">
                <a href="#">Home</a>
                <!-- RD Navbar Megamenu -->
                
                <!-- END RD Navbar Megamenu -->
              <span class="rd-navbar-submenu-toggle"></span></li>
              <li class="rd-navbar--has-dropdown rd-navbar-submenu">
                <a href="#">About</a>

                <!-- RD Navbar Dropdown -->
               
                <!-- END RD Navbar Dropdown -->
              <span class="rd-navbar-submenu-toggle"></span></li>
              <li>
                <a href="#">Services</a>
              </li>
             
              <li>
                <a href="{{ route('login') }}">Login</a>
              </li>
              <li>
                <a href="{{ route('register') }}">Sign Up</a>
              </li>
              <li>
                <a href="#">Download App</a>
              </li>  
            </ul>
            <!-- END RD Navbar Nav -->
          </div>
        </div>
      </nav>
    </div>
    <!-- END RD Navbar -->
    <section class="page-header__body block-wrap block-wrap-right block-wrap-right-variant-1">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="text-primary">
              <span class="heading-4">Let your car stay with</span>
              <span>our secure </span>
              <span class="heading-3">parking</span>
            </h2>
          </div>

          <div class="col-sm-preffix-4 col-sm-8 col-lg-preffix-8 col-lg-4">
            <div class="inset-1 bg-primary bg-wrap bg-wrap-sm-smaller bg-wrap-md-stretch-left bg-wrap-md-right bg-wrap-lg-left-auto">
              <p>Welcome to the leading company delivering services that combine quality,
                reliability and compliance! We provide businesses of all sizes with a comprehensive set of solutions
                that
                meet their needs.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="block-wrap__body">
        <img src="{{asset('frontend/page-1_img01.jpg')}}" alt="">
      </div>
      <!-- decoration items -->
      <div class="decoration-item decoration-item-variant-1 decoration-item-position-1"></div>
      <div class="decoration-item decoration-item-variant-2 decoration-item-position-2"></div>
      <!-- END decoration items -->
    </section>

  </header>
  <!--========================================================
                            CONTENT
  =========================================================-->
  <main class="page-content">
    <!-- We provide superior parking service -->
    <section>
      <div class="container">
        <div class="row relative">
          <div class="col-sm-preffix-2 col-sm-10">
            <div class="well-sm">
              <h3>
                <span>We provide superior</span>
                <span class="heading-4">parking service</span>
              </h3>
            </div>
          </div>
          <div class="decoration-block decoration-block-variant-1"></div>
        </div>
        <div class="row">
          <div class="col-sm-preffix-4 col-sm-8">
            <div class="inset-2 bg-primary bg-wrap bg-wrap-sm-smaller bg-wrap-md-stretch-left top-level">
              <p>
                We can  quickly and professionally fulfill all of your parking requirements.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END We provide superior parking service -->

    <!-- Impress your guests! -->
    <section class="shift-up-1 block-wrap block-wrap-right">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="well-xs">
              <h3>
                <span class="divider"></span>
                <span>Impress</span>
                <span class="heading-4">your guests!</span>
              </h3>

              <p class="inset-3">Please feel free to contact us to discuss the various services we provide, and how we
                can put those
                services to use for you.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="block-wrap__body">
        <img src="{{asset('frontend/page-1_img02.jpg')}}" alt="" width="1008" height="621">
      </div>
      <!-- decoration item -->
      <div class="decoration-item decoration-item-variant-3 decoration-item-position-3"></div>
      <!-- END decoration item -->
    </section>
    <!-- END Impress your guests! -->

    <!-- Private Parties & Weddings -->
    <section class="block-wrap block-wrap-left">
      <div class="well-xl well-xl--inset-1">
        <div class="container">
          <div class="row">
            <div class="col-sm-preffix-6 col-sm-6 col-md-preffix-4 col-md-8">
              <div class="inset-4 bg-wrap bg-wrap-wide bg-primary-variant-1">
                <h4>
                  <span>Private Parties<br>&amp; Weddings</span>
                  <span class="divider text-primary"></span>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block-wrap__body">
        <img src="{{asset('frontend/page-1_img03.jpg')}}" alt="" width="1038" height="525">
      </div>
    </section>
    <!-- END Private Parties & Weddings -->

    <!-- High Profile Corporate Events -->
    <section class="block-wrap block-wrap-right">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="well-xl">
              <h4>
                <span>High Profile<br>Corporate Events</span>
                <span class="divider text-primary"></span>
              </h4>
            </div>
          </div>
        </div>
      </div>

      <div class="block-wrap__body">
        <img src="{{asset('frontend/page-1_img04.jpg')}}" alt="" width="1008" height="525">
      </div>
    </section>
    <!-- END High Profile Corporate Events -->

    <!-- Hospitals, Charity Events & Birthdays  -->
    <section class="block-wrap block-wrap-left">
      <div class="well-xl well-xl--inset-1">
        <div class="container">
          <div class="row">
            <div class="col-sm-preffix-6 col-sm-6 col-md-preffix-4 col-md-8">
              <div class="inset-4 bg-wrap bg-wrap-wide bg-primary">
                <h4>
                  <span>Hospitals, Charity<br class="hidden visible-md-block"> Events &amp; Birthdays</span>
                  <span class="divider"></span>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="block-wrap__body">
        <img src="{{asset('frontend/page-1_img05.jpg')}}" alt="" width="1038" height="525">
      </div>
      <!-- decoration item -->
      <div class="decoration-item decoration-item-variant-4 decoration-item-position-4"></div>
      <!-- END decoration item -->
    </section>
    <!-- END Hospitals, Charity Events & Birthdays  -->

    <!-- Testimonials -->
    <section class="well-lg bg-primary-variant-1 block-wrap block-wrap-right">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h3>
              <span class="divider"></span>
              <span>Testimonials</span>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel owl-theme owl-loaded" data-sm-items="2" data-md-items="3" data-autoplay="false" data-dots="true" data-sm-margin="75" data-md-margin="25" data-nav="false" style="">
              

              

              
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1195px, 0px, 0px); transition: 0s; width: 3585px;"><div class="owl-item cloned" style="width: 373.333px; margin-right: 25px;"><blockquote class="quote">
                <p><q>Thanks a lot for the quick response. I was really impressed, your solution is excellent!! Your
                  competence is justified!!</q></p>

                <p><cite><a href="#">XXX</a></cite></p>
              </blockquote></div><div class="owl-item cloned" style="width: 373.333px; margin-right: 25px;"><blockquote class="quote">
                <p><q>Hi, guys! You’ve solved my problem in no time! Your efficient services and customer care are
                  second to none! I am very happy! I will surely share my experience with my friends!</q></p>

                <p><cite><a href="#">Tom</a></cite></p>
              </blockquote></div><div class="owl-item cloned" style="width: 373.333px; margin-right: 25px;"><blockquote class="quote">
                <p><q>Great organization!! Your prompt answer became a pleasant surprise for me. You’ve rendered an
                  invaluable service! Thank you very much!</q></p>

                <p><cite><a href="#">Eva</a></cite></p>
              </blockquote></div><div class="owl-item active" style="width: 373.333px; margin-right: 25px;"><blockquote class="quote">
                <p><q>Thanks a lot for the quick response. I was really impressed, your solution is excellent!! Your
                  competence is justified!!</q></p>

                <p><cite><a href="#">Mr. Abul Hasheem</a></cite></p>
              </blockquote></div><div class="owl-item active" style="width: 373.333px; margin-right: 25px;"><blockquote class="quote">
                <p><q>Hi, guys! You’ve solved my problem in no time! Your efficient services and customer care are
                  second to none! I am very happy! I will surely share my experience with my friends!</q></p>

                <p><cite><a href="#">Tom</a></cite></p>
              </blockquote></div><div class="owl-item active" style="width: 373.333px; margin-right: 25px;"><blockquote class="quote">
                <p><q>Great organization!! Your prompt answer became a pleasant surprise for me. You’ve rendered an
                  invaluable service! Thank you very much!</q></p>

                <p><cite><a href="#">Eva</a></cite></p>
              </blockquote></div><div class="owl-item cloned active" style="width: 373.333px; margin-right: 25px;"><blockquote class="quote">
                <p><q>Thanks a lot for the quick response. I was really impressed, your solution is excellent!! Your
                  competence is justified!!</q></p>

                <p><cite><a href="#">Adam</a></cite></p>
              </blockquote></div><div class="owl-item cloned" style="width: 373.333px; margin-right: 25px;"><blockquote class="quote">
                <p><q>Hi, guys! You’ve solved my problem in no time! Your efficient services and customer care are
                  second to none! I am very happy! I will surely share my experience with my friends!</q></p>

                <p><cite><a href="#">Tom</a></cite></p>
              </blockquote></div><div class="owl-item cloned" style="width: 373.333px; margin-right: 25px;"><blockquote class="quote">
                <p><q>Great organization!! Your prompt answer became a pleasant surprise for me. You’ve rendered an
                  invaluable service! Thank you very much!</q></p>

                <p><cite><a href="#">Eva</a></cite></p>
              </blockquote></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"></div><div class="owl-next" style="display: none;"></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div></div></div></div>
          </div>
        </div>
      </div>
      <div class="block-wrap__body block-wrap__body-empty hidden visible-sm-block">
        <div class="bg-contrast"></div>
      </div>
    </section>
    <!-- END Testimonials -->
  </main>
  <!--========================================================
                            FOOTER
  ==========================================================-->
  <footer class="page-footer">
    <div class="block-wrap block-wrap-right">
      <div class="container">
        <div class="row relative">
          <div class="col-sm-6">
            <div class="page-footer__body">
              <!-- RD Navbar Brand -->
              <div class="rd-navbar-brand">
                <a href="#">
                  <img src="{{asset('frontend/eparking.png')}}" width="50%">
                </a>
              </div>
              <!-- END RD Navbar Brand -->

              <dl class="contact-info">
                <dt>Tel</dt>
                <dd><a href="#">+88XXXXXXXX</a></dd>
              </dl>

              <address>Dhaka, Bangladesh</address>
            </div>
          </div>
        </div>
        <!-- decoration item -->
        <div class="decoration-item decoration-item-variant-5 decoration-item-position-5"></div>
        <!-- END decoration item -->
      </div>

      <div class="block-wrap__body">
        <img src="{{asset('frontend/page-1_img06.jpg')}}" alt="" width="1008" height="621">
      </div>
    </div>

    <div class="bg-primary block-wrap block-wrap-right">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p class="copyright">
              © <span id="copyright-year">2018</span>. <a href="#">Privacy Policy</a>
              <!-- {%FOOTER_LINK} -->
            </p>
          </div>
        </div>
      </div>
      <div class="block-wrap__body block-wrap__body-empty hidden visible-sm-block">
        <div class="bg-contrast"></div>
      </div>
    </div>
  </footer>
</div>
<!-- begin olark code -->

<!-- Core Scripts -->
<script src="{{asset('frontend/core.min.js.download')}}"></script><iframe data-olark="true" aria-hidden="true" style="width: 0px; height: 0px; position: absolute; left: 0px; bottom: 0px; border: none;" src="./saved_resource(1).html"></iframe>
<!-- Additional Functionality Scripts -->
<script src="{{asset('frontend/script.js.download')}}"></script>
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
<style rel="stylesheet" type="text/css" data-reactid=".0.1">#olark-wrapper #olark-container .olark-button {
  background-color: #5ba0d0 !important;
  color: #ffffff !important;
}
#olark-wrapper #olark-container .olark-button:hover {
  background-color: #4993ca !important;
}
#olark-wrapper #olark-container .olark-theme-bg {
  background-color: #5ba0d0 !important;
}
#olark-wrapper #olark-container .olark-theme-text {
  color: #ffffff !important;
}
#olark-wrapper .olark-launch-button {
  background-color: #5ba0d0 !important;
}
#olark-wrapper .olark-launch-button svg path {
  fill: #ffffff !important;
}
#olark-wrapper .olark-launch-button .olark-button-text {
  color: #ffffff !important;
}
#olark-wrapper .olark-top-bar {
  background-color: #5ba0d0 !important;
  color: #ffffff !important;
  border-color: #4993ca !important;
}
#olark-wrapper .olark-top-bar-text {
  color: #ffffff !important;
}
#olark-wrapper .olark-top-bar-arrow {
  fill: #ffffff !important;
}
#olark-wrapper .olark-end-chat-button {
  color: #ffffff !important;
  background-color: rgba(56, 135, 194, 0.5) !important;
}
#olark-wrapper .olark-end-chat-button:hover {
  background-color: #3887c2 !important;
}
#olark-wrapper #olark-container .olark-visitor-message:not(.olark-message-trans-bg) {
  background-color: rgba(91, 160, 208, 0.25) !important;
}
#olark-wrapper #olark-container .olark-form-send-button {
  background-color: #5ba0d0 !important;
  color: #ffffff !important;
}
#olark-wrapper #olark-container .olark-feedback-form-button {
  background-color: #5ba0d0 !important;
  color: #ffffff !important;
}
#olark-wrapper #olark-container .olark-restart-button {
  background-color: #5ba0d0 !important;
  color: #ffffff !important;
}
#olark-wrapper #olark-container .olark-branding-panel .olark-branding-cancel-button {
  background-color: #5ba0d0 !important;
  border: none !important;
  color: #ffffff !important;
}
#olark-wrapper #olark-container .olark-branding-panel .olark-branding-go-button {
  border: none !important;
  background: rgba(91, 160, 208, 0.35) !important;
}
#olark-wrapper #olark-container .olark-send-transcript-container .olark-send-transcript-form.olark-inline-form-valid .olark-form-input-container {
  border-color: #5ba0d0 !important;
}
#olark-wrapper #olark-container .olark-send-transcript-container .olark-send-transcript-form.olark-inline-form-valid .olark-send-icon {
  fill: #5ba0d0 !important;
}
#olark-wrapper #olark-container .olark-visitor-message:not(.olark-message-has-border) {
  border: none !important;
}
#olark-wrapper .olark-end-chat-flag {
  fill: #5ba0d0 !important;
}
#olark-wrapper #olark-container .olark-form-confirmation-icon .olark-launch-button-icon {
  fill: #5ba0d0 !important;
}
#olark-wrapper #olark-container .olark-form-input:focus {
  border-color: #5ba0d0 !important;
}
#olark-wrapper #olark-container .olark-form-message-input:focus {
  border-color: #5ba0d0 !important;
}
