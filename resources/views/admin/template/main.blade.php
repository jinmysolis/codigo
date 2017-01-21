<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.iamabdus.com/kidz/1.1/index-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Jan 2017 14:30:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')vistante</title>
  
  <!-- PLUGINS CSS STYLE -->
       <link rel="stylesheet" href="{{asset('chosen/chosen.css')}}">
       <link rel="stylesheet" href="{{asset('tema/tema.css')}}">
       <link rel="stylesheet" href="{{asset('dist/ui/trumbowyg.css')}}">
       <link rel="stylesheet" href="{{asset('plugins/jquery-ui/jquery-ui.css')}}">
       <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
       <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
       <link rel="stylesheet" href="{{asset('plugins/rs-plugin/css/settings.css')}}">
       <link rel="stylesheet" href="{{asset('plugins/selectbox/select_option1.css')}}">
       <link rel="stylesheet" href="{{asset('plugins/owl-carousel/owl.carousel.css')}}">
       <link rel="stylesheet" href="{{asset('plugins/isotope/jquery.fancybox.css')}}">
       <link rel="stylesheet" href="{{asset('plugins/isotope/isotope.css')}}">
 
  
  <!-- GOOGLE FONT -->
  <link href='../../../fonts.googleapis.com/css13b7.css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link href='../../../fonts.googleapis.com/cssd168.css?family=Dosis:400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('options/animate.css')}}">
  <link rel="stylesheet" href="{{asset('options/optionswitch.css')}}">
  <link rel="stylesheet" href="{{asset('css/colors/default.css')}}">
  
 
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('img/favicon.png')}}">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">
  <!--=== option Switcher ===-->
  <i class="option-switcher-btn fa fa-gear hidden-xs"></i>
  <div class="option-switcher animated">
    <div class="option-swticher-header">
      <div class="option-switcher-heading">Laravel 5.0</div>            
      <div class="theme-close"><i class="fa fa-close"></i></div>
    </div>
    <div class="option-swticher-body">
      <!-- Theme Colors -->
      <ul class="list-unstyled color-options">
        <li class="theme-default theme-active" data-color="default"></li>
        <li class="theme-color1" data-color="color-option1"></li>
        <li class="theme-color2" data-color="color-option2"></li>
        <li class="theme-color3 last" data-color="color-option3"></li>
      </ul>
      <!-- Layout Styles -->
      <div class="row no-col-space layoutStyle">
        <div class="col-xs-6">
          <a href="javascript:void(0);" class="btn-u  btn-block active-switcher-btn wide-layout-btn">Wide</a>                
        </div>
        <div class="col-xs-6">
          <a href="javascript:void(0);" class="btn-u btn-block boxed-layout-btn">Boxed</a>
        </div>                
      </div>
      <!-- Background pattern -->
      <div class="bg-patern">
        <h3>Background pattern</h3>
        <ul class="list-unstyled">
          <li class="pattern-default pattern-active"></li>
          <li class="pattern1"></li>
          <li class="pattern2"></li>
          <li class="pattern3 last"></li>
          <li class="pattern4"></li>
          <li class="pattern5"></li>
          <li class="pattern6"></li>
          <li class="pattern7 last"></li>
        </ul>
      </div> 
      <!-- Header Styles -->
      <div class="row no-col-space headerStyle">
        <div class="col-xs-6">
          <a href="javascript:void(0);" class="btn-u btn-block active-switcher-btn fixed-header">Fixed header</a>
        </div>
        <div class="col-xs-6">
          <a href="javascript:void(0);" class="btn-u btn-block static-header">Static header</a>
        </div>
      </div>              
    </div>
  </div>
  <!--/option-switcher-->

  <div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header-wrapper">
      <!-- COLOR BAR -->
      <div class="container-fluid color-bar top-fixed clearfix">
        <div class="row">
          <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
          <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
        </div>
      </div>

      <!-- TOP INFO BAR -->
      <div class="top-info-bar bg-color-7 hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <ul class="list-inline topList">
                <li><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i> <a href="mailto:solisjinmy@gmail.com">solisjinmy@gmail.com</a></li>
                <li><i class="fa fa-phone bg-color-2" aria-hidden="true"></i> 04165812002</li>
       
              </ul>
            </div>
            <div class="col-sm-5">
              <ul class="list-inline functionList">
              
                
                <li><i class="fa fa-unlock-alt bg-color-5" aria-hidden="true"></i> <a href='#loginModal' data-toggle="modal" >Entrar</a><span>o</span><a href='#createAccount' data-toggle="modal">Registarse</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- NAVBAR -->
      <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-v2.html"><img src="img/logo-toys.png" alt="Kidz Store"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active dropdown singleDrop color-1">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-home bg-color-1" aria-hidden="true"></i> <span>Inicio</span>
                </a>
                
              </li>
              <li class="dropdown singleDrop color-3">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul bg-color-3" aria-hidden="true"></i> <span>Articulos</span></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="about_us.html">About</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Team<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="teachers.html">Teachers</a></li>
                      <li><a href="teachers-details.html">Teacher Details</a></li>
                    </ul>
                  </li>
                  <li><a href="testimonial.html">Testimonial</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Events <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="all-events.html">All Events</a></li>
                      <li><a href="single-event-left-sidebar.html">Single Event Left Sidebar</a></li>
                      <li><a href="single-event-right-sidebar.html">Single Event Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li><a href="photo-gallery.html">Photo Gallery</a></li>
                  <li><a href="pricing-table.html">Pricing Table</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service-details.html">Services Details</a></li>
                  <li><a href="search-result.html">Search Results</a></li>
                  <li><a href="contact-us.html">Contact Us</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="sign-up-or-login.html">Sign Up / Login</a></li>
                  <li><a href="404.html">Error 404</a></li>
                  <li><a href="coming-soon.html">Coming Soon</a></li>
                </ul>
              </li>
              <li class=" dropdown megaDropMenu color-2">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">
                  <i class="fa fa-file-text-o bg-color-2" aria-hidden="true"></i> 
                  <span>Courses</span>
                </a>
                <ul class="row dropdown-menu">
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Courses Grid</li>
                      <li><a href="course-grid-full.html">Courses Grid Fullwidth</a></li>
                      <li><a href="course-grid-left-sidebar.html">Courses Grid Left Sidebar</a></li>
                      <li><a href="course-grid-right-sidebar.html">Courses Grid Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Courses List</li>
                      <li><a href="course-list-fullwidth.html">Courses List Fullwidth</a></li>
                      <li><a href="course-list-left-sidebar.html">Courses List left Sidebar</a></li>
                      <li><a href="course-list-right-sidebar.html">Courses List Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Single Course</li>
                      <li><a href="course-single.html">Single Course Fullwidth</a></li>
                      <li><a href="course-single-left-sidebar.html">Single Course left Sidebar</a></li>
                      <li><a href="course-single-right-sidebar.html">Single Course Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Checkout</li>
                      <li><a href="checkout-step-1.html">Personal Info</a></li>
                      <li><a href="checkout-step-2.html">Payment Info</a></li>
                      <li><a href="checkout-step-3.html">Confirmation</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-4">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-pencil-square-o bg-color-4" aria-hidden="true"></i> 
                  <span>Store</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown">Products<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="product.html">Products Fullwidth</a></li>
                      <li><a href="product-left-sidebar.html">Products Left Sidebar</a></li>
                      <li><a href="product-right-sidebar.html">Products Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li><a href="single-product.html">Single Product</a></li>
                  <li><a href="category.html">Product Categories</a></li>
                  <li><a href="cart-page.html">Cart</a></li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Checkout<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="checkout-step-1.html">Personal Info</a></li>
                      <li><a href="checkout-step-2.html">Payment Info</a></li>
                      <li><a href="checkout-step-3.html">Confirmation</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-5">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-calendar bg-color-5" aria-hidden="true"></i> 
                  <span>Blog</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-grid.html">Blog Grid Fullwidth</a></li>
                      <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                      <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog List<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-list.html">Blog List Fullwidth</a></li>
                      <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                      <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Blog<i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="single-blog.html">Single Blog Fullwidth</a></li>
                      <li><a href="single-blog-left-sidebar.html">Single Blog Left Sidebar</a></li>
                      <li><a href="single-blog-right-sidebar.html">Single Blog Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-6">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gg bg-color-6" aria-hidden="true"></i> <span>Components</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="accordion-toggles.html">Accordions &amp; Toggles</a></li>
                  <li><a href="tabs-dropdown.html">Tabs &amp; Dropdowns</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="cart-dropdown">
            <a href="#" class="bg-color-6 shop-cart">
              <i class="fa fa-shopping-basket " aria-hidden="true"></i>
              <span class="badge bg-color-1">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><i class="fa fa-shopping-basket " aria-hidden="true"></i>3 items in your cart</li>
              <li>
                <a href="single-product.html">
                  <div class="media">
                    <div class="media-left">
                      <img src="img/home/cart/cart-img.png" alt="cart-Image">
                    </div>
                    <div class="media-body">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span class="color-1">$50</span>
                      </div>
                      <span class="amount">Qnt: 1</span>
                    </div>
                  </div>
                </a>
                <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
              </li>
              <li>
                <a href="single-product.html">
                  <div class="media">
                    <div class="media-left">
                      <img src="img/home/cart/cart-img.png" alt="cart-Image">
                    </div>
                    <div class="media-body">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span class="color-1">$50</span>
                      </div>
                      <span class="amount">Qnt: 1</span>
                    </div>
                  </div>
                </a>
                <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
              </li>
              <li>
                <a href="single-product.html">
                  <div class="media">
                    <div class="media-left">
                      <img src="img/home/cart/cart-img.png" alt="cart-Image">
                    </div>
                    <div class="media-body">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span class="color-1">$50</span>
                      </div>
                      <span class="amount">Qnt: 1</span>
                    </div>
                  </div>
                </a>
                <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
              </li>
              <li>
                <span class="cart-total">Subtotal</span>
                <span class="cart-price">$150</span>
                <div class="cart-button">
                  <button type="button" class="btn btn-primary" onclick="location.href='checkout-step-1.html';">Checkout</button>
                  <button type="button" class="btn btn-primary" onclick="location.href='cart-page.html';">View Cart</button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
<!--      mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
    </header>

    <!-- BANNER -->
    <section class="bannercontainer bannercontainerV2">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>

            <li data-transition="fade" data-slotamount="5" data-masterspeed="300" data-title="kidz_slide_1">
              <img src="img/home/sliderV2/slider-bg1.png"  alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="repeat">
              <div class="slider-caption container">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption rs-caption-1 sft"
                  data-hoffset="0"
                  data-x="right"
                  data-y="170"
                  data-speed="1200"
                  data-start="1600"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  style="z-index: 5;">
                  Get Kidz For Your <span>Store</span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-x="right"
                  data-y="245"
                  data-speed="1800"
                  data-start="2000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  Kidz Template has all the features need to run an ecommerce website.
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-x="right"
                  data-y="355"
                  data-speed="2000"
                  data-start="3000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  <a href="#" class="btn btn-primary">purchase</a>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme sfb stt " 
                  data-x="-50" 
                  data-y="130" 
                  data-speed="500"
                  data-easing="Power1.easeIn"
                  data-endeasing="Power1.easeInOut"
                  data-endspeed="200"
                  style="z-index: 2;">
                  <img src="img/home/sliderV2/caption-img1.png" alt="caption" width="658" height="309"> 
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-resizeme sft stt" 
                  data-x="270" 
                  data-y="44" 
                  data-speed="1000"
                  data-easing="Power1.easeIn"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption2.png" alt="caption" width="53" height="54"> 
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme sfr str" 
                  data-x="420" 
                  data-y="190" 
                  data-speed="1200"
                  data-easing="Power1.easeIn"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption3.png" alt="caption" width="62" height="54"> 
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme sfl stl" 
                  data-x="90" 
                  data-y="190" 
                  data-speed="1200"
                  data-easing="Power1.easeIn"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption7.png" alt="caption" width="63" height="73"> 
                </div>

                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme sfl stl" 
                  data-x="90" 
                  data-y="390" 
                  data-speed="1200"
                  data-easing="Power0.easeInOut (linear)"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption6.png" alt="caption" width="51" height="59"> 
                </div>

                <!-- LAYER NR. 9 -->
                <div class="tp-caption tp-resizeme sfr str" 
                  data-x="420" 
                  data-y="390" 
                  data-speed="1200"
                  data-easing="Power0.easeInOut (linear)"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption4.png" alt="caption" width="56" height="56"> 
                </div>

                <!-- LAYER NR. 10 -->
                <div class="tp-caption tp-resizeme sfb stb" 
                  data-x="270" 
                  data-y="460" 
                  data-speed="1500"
                  data-easing="Power1.easeIn"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption5.png" alt="caption" width="75" height="62"> 
                </div>

              </div>
            </li>

            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="kidz_slide_2">
              <img src="img/home/sliderV2/slider-bg1.png"  alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="repeat">
              <div class="slider-caption container">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption rs-caption-1 sft"
                  data-hoffset="0"
                  data-y="170"
                  data-speed="1200"
                  data-start="1600"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  style="z-index: 5;">
                  Get Kidz For Your <span>Store</span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="245"
                  data-speed="1800"
                  data-start="2000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  Kidz Template has all the features need to run an ecommerce website.
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="355"
                  data-speed="2000"
                  data-start="3000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  <a href="#" class="btn btn-primary">purchase</a>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme sft stt " 
                  data-x="right" 
                  data-hoffset="-100"
                  data-y="100" 
                  data-speed="500"
                  data-easing="Power1.easeIn"
                  data-endeasing="Power1.easeInOut"
                  data-endspeed="200"
                  style="z-index: 2;">
                  <img src="img/home/sliderV2/caption-img2.png" alt="caption" width="405" height="417"> 
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-resizeme start" 
                  data-x="170" 
                  data-y="34" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption8.png" alt="caption" width="71" height="82"> 
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme sfl stl" 
                  data-x="left"
                  data-hoffset="-90" 
                  data-y="100" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption6.png" alt="caption" width="51" height="59"> 
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme start" 
                  data-x="left"
                  data-hoffset="-70" 
                  data-y="bottom"
                  data-voffset="-170" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption9.png" alt="caption" width="77" height="50"> 
                </div>

                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme start" 
                  data-x="center" 
                  data-y="center"
                  data-voffset="100" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption12.png" alt="caption" width="66" height="55"> 
                </div>

                <!-- LAYER NR. 9 -->
                <div class="tp-caption tp-resizeme sfr str" 
                  data-x="right" 
                  data-hoffset="-270" 
                  data-y="34" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption13.png" alt="caption" width="65" height="65"> 
                </div>

                <!-- LAYER NR. 10 -->
                <div class="tp-caption tp-resizeme sfr str" 
                  data-x="right"
                  data-hoffset="-70"  
                  data-y="100" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption10.png" alt="caption" width="73" height="56"> 
                </div>

                <!-- LAYER NR. 11 -->
                <div class="tp-caption tp-resizeme sfb stb" 
                  data-x="right"
                  data-hoffset="-70"  
                  data-y="bottom"
                  data-voffset="-170" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption11.png" alt="caption" width="61" height="67"> 
                </div>

              </div>
            </li>

            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"  data-title="kidz_slide_3">
              <img src="img/home/sliderV2/slider-bg1.png"  alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="repeat">
              <div class="slider-caption container">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption rs-caption-1 sft"
                  data-hoffset="0"
                  data-y="170"
                  data-speed="1200"
                  data-start="1600"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  style="z-index: 5;">
                  Get Kidz For Your <span>Store</span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="245"
                  data-speed="1800"
                  data-start="2000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  Kidz Template has all the features need to run an ecommerce website.
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="355"
                  data-speed="2000"
                  data-start="3000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  <a href="#" class="btn btn-primary">purchase</a>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme sfr" 
                  data-x="right"
                  data-hoffset="50" 
                  data-y="50" 
                  data-speed="500"
                  data-easing="Power1.easeIn"
                  data-endeasing="Power1.easeInOut"
                  data-endspeed="200"
                  style="z-index: 2;">
                  <img src="img/home/sliderV2/caption-img3.png" alt="caption" width="731" height="634"> 
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-resizeme sfb stb" 
                  data-x="left" 
                  data-y="0" 
                  data-speed="1000"
                  data-easing="Power1.easeIn"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/pattern-dark.png" alt="caption" width="1640" height="527"> 
                </div>
              </div>
            </li>

            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"  data-title="kidz_slide_4">
              <img src="img/home/sliderV2/slider-bg1.png"  alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="repeat">
              <div class="slider-caption container">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption rs-caption-1 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="170"
                  data-speed="1200"
                  data-start="1600"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  style="z-index: 5;">
                  Get Kidz For Your <span>Store</span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption rs-caption-2 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="245"
                  data-speed="1800"
                  data-start="2000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  Kidz Template has all the features need to run an ecommerce website.
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption rs-caption-3 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="355"
                  data-speed="2000"
                  data-start="3000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  <a href="#" class="btn btn-primary">purchase</a>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme sfl stl" 
                  data-x="left"
                  data-hoffset="-70" 
                  data-y="100" 
                  data-speed="500"
                  data-easing="Power1.easeIn"
                  data-endeasing="Power1.easeInOut"
                  data-endspeed="200"
                  style="z-index: 2;">
                  <img src="img/home/sliderV2/caption-img5.png" alt="caption" width="580" height="491"> 
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-resizeme sfr str" 
                  data-x="right" 
                  data-hoffset="100" 
                  data-y="100" 
                  data-speed="500"
                  data-easing="Power1.easeIn"
                  data-endeasing="Power1.easeInOut"
                  data-endspeed="300"
                  style="z-index: 2;">
                  <img src="img/home/sliderV2/caption-img4.png" alt="caption" width="567" height="564"> 
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme start" 
                  data-x="170" 
                  data-y="34" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption8.png" alt="caption" width="71" height="82"> 
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme sfl stl" 
                  data-x="left"
                  data-hoffset="-90" 
                  data-y="100" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption6.png" alt="caption" width="51" height="59"> 
                </div>

                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme sfr str" 
                  data-x="right" 
                  data-hoffset="-270" 
                  data-y="34" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption13.png" alt="caption" width="65" height="65"> 
                </div>

                <!-- LAYER NR. 9 -->
                <div class="tp-caption tp-resizeme sfr str" 
                  data-x="right"
                  data-hoffset="-70"  
                  data-y="100" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption10.png" alt="caption" width="73" height="56"> 
                </div>

                <!-- LAYER NR. 10 -->
                <div class="tp-caption tp-resizeme start" 
                  data-x="center"
                  data-hoffset="-180" 
                  data-y="center"
                  data-voffset="50" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption9.png" alt="caption" width="77" height="50"> 
                </div>

                <!-- LAYER NR. 11 -->
                <div class="tp-caption tp-resizeme start" 
                  data-x="center" 
                  data-y="center"
                  data-voffset="100" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption12.png" alt="caption" width="66" height="55"> 
                </div>

                <!-- LAYER NR. 12 -->
                <div class="tp-caption tp-resizeme sfb stb" 
                  data-x="center"
                  data-hoffset="180"  
                  data-y="center"
                  data-voffset="50" 
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption11.png" alt="caption" width="61" height="67"> 
                </div>

              </div>
            </li>

          </ul>
        </div>
      </div>
    </section>

    <!-- BANNER BOTTOM -->
    <section class="banner-bottom hidden-xs">
      <div class="container">
        <div class="banner-bottom-inner">
          <div class="row">
            <div class="col-sm-4">
              <div class="colContent">
                <img src="img/home/banner-bottom/bottom-img1.jpg" alt="image" class="img-responsive">
                <div class="colContent-info text-left">
                  <h3 class="bg-color-6">Save 50%</h3>
                  <p>We are offering 50% discount on every order during December</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="colContent">
                <img src="img/home/banner-bottom/bottom-img2.jpg" alt="image" class="img-responsive">
                 <div class="colContent-info text-center">
                  <h3 class="bg-color-2">24/7 Support</h3>
                  <p>We are offering 50% discount on every order during December</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="colContent">
                <img src="img/home/banner-bottom/bottom-img3.jpg" alt="image" class="img-responsive">
                 <div class="colContent-info text-right">
                  <h3 class="bg-color-5">Toys &amp; Games</h3>
                  <p>We are offering 50% discount on every order during December</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- PRODUCT SECTION -->
    <section class="mainContent full-width clearfix productSection">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Popular Products</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-md-3 col-xs-6">
            <div class="box bg-color-1">
              <div class="box-img border-color-1 text-center">
                <a href="single-product.html">
                  <img src="img/home/product/product-img1.jpg" alt="image" class="img-responsive">
                </a>
                <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
              </div>
              <div class="box-info">
                <h4>Barbie Racing Car</h4>
                <div class="price">
                  <span>$50</span>
                </div>
                <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="box bg-color-2">
              <div class="box-img border-color-2 text-center">
                <a href="single-product.html">
                  <img src="img/home/product/product-img2.jpg" alt="image" class="img-responsive">
                </a>
                <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
              </div>
              <div class="box-info">
                <h4>Barbie Racing Car</h4>
                <div class="price">
                  <span>$50</span>
                  <span><del>$60</del></span>
                </div>
                <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="box bg-color-6">
              <div class="box-img border-color-6 text-center">
                <a href="single-product.html">
                  <img src="img/home/product/product-img3.jpg" alt="image" class="img-responsive">
                </a>
                <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
              </div>
              <div class="box-info">
                <h4>Barbie Racing Car</h4>
                <div class="price">
                  <span>$50</span>
                </div>
                <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="box bg-color-4">
              <div class="box-img border-color-4 text-center">
                <a href="single-product.html">
                  <img src="img/home/product/product-img4.jpg" alt="image" class="img-responsive">
                </a>
                <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
              </div>
              <div class="box-info">
                <h4>Barbie Racing Car</h4>
                <div class="price">
                  <span>$50</span>
                  <span><del>$60</del></span>
                </div>
                <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
         <section>
               @include('flash::message')
                @yield('content')

            </section>

    
    <!-- PROMOTION SECTION-->
    <section class="promotionWrapper" style="background-image: url(img/home/promotion-2.jpg);">
      <div class="container">
        <div class="promotionInfo">
          <h2>Need More Information?</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod </p>
          <a href="contact-us.html" class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a>
        </div>
      </div>
    </section>

    <!-- PRODUCT SECTION -->
    <section class="mainContent full-width clearfix productSection">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Recent Products</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>
        
        <div class="tabCommon">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#menu1">New Arrivals</a></li>
            <li><a data-toggle="tab" href="#menu2">Popular</a></li>
            <li><a data-toggle="tab" href="#menu3">Sale</a></li>
          </ul>

          <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
              <div class="row">
                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-1">
                    <div class="box-img border-color-1 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img5.jpg" alt="image" class="img-responsive">
                      </a>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-2">
                    <div class="box-img border-color-2 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img6.jpg" alt="image" class="img-responsive">
                      </a>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                        <span><del>$60</del></span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-6">
                    <div class="box-img border-color-6 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img7.jpg" alt="image" class="img-responsive">
                      </a>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-4">
                    <div class="box-img border-color-4 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img8.jpg" alt="image" class="img-responsive">
                      </a>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                        <span><del>$60</del></span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="menu2" class="tab-pane fade">
              <div class="row">
                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-1">
                    <div class="box-img border-color-1 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img1.jpg" alt="image" class="img-responsive">
                      </a>
                      <span class="sticker-round bg-color-1">Popular</span>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-2">
                    <div class="box-img border-color-2 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img2.jpg" alt="image" class="img-responsive">
                      </a>
                      <span class="sticker-round bg-color-2">Popular</span>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-6">
                    <div class="box-img border-color-6 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img3.jpg" alt="image" class="img-responsive">
                      </a>
                      <span class="sticker-round bg-color-6">Popular</span>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-4">
                    <div class="box-img border-color-4 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img4.jpg" alt="image" class="img-responsive">
                      </a>
                      <span class="sticker-round bg-color-4">Popular</span>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                        <span><del>$60</del></span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="menu3" class="tab-pane fade">
              <div class="row">
                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-6">
                    <div class="box-img border-color-6 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img8.jpg" alt="image" class="img-responsive">
                      </a>
                      <span class="sticker-round bg-color-6">Sale</span>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-4">
                    <div class="box-img border-color-4 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img6.jpg" alt="image" class="img-responsive">
                      </a>
                      <span class="sticker-round bg-color-4">Sale</span>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-3">
                    <div class="box-img border-color-3 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img7.jpg" alt="image" class="img-responsive">
                      </a>
                      <span class="sticker-round bg-color-3">Sale</span>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                        <span><del>$60</del></span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-xs-6">
                  <div class="box bg-color-4">
                    <div class="box-img border-color-4 text-center">
                      <a href="single-product.html">
                        <img src="img/home/product/product-img5.jpg" alt="image" class="img-responsive">
                      </a>
                      <span class="sticker-round bg-color-4">Sale</span>
                      <a data-toggle="modal" href=".html" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
                    </div>
                    <div class="box-info">
                      <h4>Barbie Racing Car</h4>
                      <div class="price">
                        <span>$50</span>
                      </div>
                      <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
      </div>
    </section>

    <!-- FEATURE SECTION -->
    <section class="mainContent full-width clearfix featureSection">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Our Features</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-1">
                <i class="fa fa-history bg-color-1" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-1">Fast Delivery</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-2">
                <i class="fa fa-support bg-color-2" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-2">24/7 Support</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-3">
                <i class="fa fa-key bg-color-3" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-3">Save Money</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-4">
                <i class="fa fa-truck bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-4">Easy Transport</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-5">
                <i class="fa fa-gift bg-color-5" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-5">Gift Cards</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-6">
                <i class="fa fa-undo bg-color-6" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-6">Quick Return</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- COLOR SECTION -->
    <section class="colorSection full-width clearfix bg-color-6 commentSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel commentSlider">
              <div class="slide">
                <div class="commentContent text-center">
                  <i class="fa fa-comments-o" aria-hidden="true"></i>
                  <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat Duis aute irure dolor nulla pariatur.</h2>
                  <h3>Amanda Smith</h3>
                  <p>Sarah’s Father</p>
                </div>
              </div>
              <div class="slide">
                <div class="commentContent text-center">
                  <i class="fa fa-comments-o" aria-hidden="true"></i>
                  <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat Duis aute irure dolor nulla pariatur.</h2>
                  <h3>Amanda Smith</h3>
                  <p>Sarah’s Father</p>
                </div>
              </div>
              <div class="slide">
                <div class="commentContent text-center">
                  <i class="fa fa-comments-o" aria-hidden="true"></i>
                  <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat Duis aute irure dolor nulla pariatur.</h2>
                  <h3>Amanda Smith</h3>
                  <p>Sarah’s Father</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHITE SECTION -->
    <section class="whiteSection full-width clearfix newsSection" id="latestNews">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Latest News</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>
          
        <div class="row">
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="single-event-left-sidebar.html"><img src="img/home/news/news-1.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-1">10 <br>July</div>
              <div class="caption border-color-1">
                <h3><a href="single-event-left-sidebar.html" class="color-1">The standard chunk of Lorem.</a></h3>
                <ul class="list-inline">
                  <li><a href="single-event-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
                  <li><a href="single-event-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
                </ul>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi cal Latin literature. </p>
                <ul class="list-inline btn-yellow">
                  <li><a href="single-event-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="single-event-left-sidebar.html"><img src="img/home/news/news-2.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-2">10 <br>July</div>
              <div class="caption border-color-2">
                <h3><a href="single-event-left-sidebar.html" class="color-2">Vestibulum congue massa vitae.</a></h3>
                <ul class="list-inline">
                  <li><a href="single-event-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
                  <li><a href="single-event-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
                </ul>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi cal Latin literature. </p>
                <ul class="list-inline btn-green">
                  <li><a href="single-event-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="single-event-left-sidebar.html"><img src="img/home/news/news-3.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-3">10 <br>July</div>
              <div class="caption border-color-3">
                <h3><a href="single-event-left-sidebar.html" class="color-3">Curabitur ac nulla sodales risus.</a></h3>
                <ul class="list-inline">
                  <li><a href="single-event-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>Jone Doe</a></li>
                  <li><a href="single-event-left-sidebar.html"><i class="fa fa-comments-o" aria-hidden="true"></i>4 Comments</a></li>
                </ul>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi cal Latin literature. </p>
                <ul class="list-inline btn-red">
                  <li><a href="single-event-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="btnArea">
          <a href="all-events.html" class="btn btn-primary">View more</a>
        </div>
          
      </div>
    </section>

    <!-- BRAND SECTION -->
    <section class="brandSection clearfix">
      <div class="container">
        <div class="owl-carousel partnersLogoSlider">
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/brand/partner-01.png" alt="partner-img">
            </div>
          </div>  
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/brand/partner-02.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/brand/partner-03.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/brand/partner-04.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/brand/partner-05.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/brand/partner-01.png" alt="partner-img">
            </div>
          </div>  
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/brand/partner-02.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/brand/partner-03.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/brand/partner-04.png" alt="partner-img">
            </div>
          </div>
          <div class="slide">
            <div class="partnersLogo clearfix">
              <img src="img/home/brand/partner-05.png" alt="partner-img">
            </div>
          </div>
        </div>              
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-2">
      <!-- COLOR BAR -->
      <div class="container-fluid color-bar clearfix">
        <div class="row">
          <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
          <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
        </div>
      </div>
      <!-- FOOTER INFO AREA -->
      <div class="footerInfoArea full-width clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <a href="index.html"><img src="img/logov2.png"></a>
              </div>
              <div class="footerInfo">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia.Lorem ipsum dolor sit amet.</p>
                <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4 class="color-1">Useful Links</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled footerList">
                  <li>
                    <a href="index-v1.html">
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz School
                    </a>
                  </li>
                  <li>
                    <a href="about_us.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>About Kidz School
                    </a>
                  </li>
                  <li>
                    <a href="index-v2.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz Store
                    </a>
                  </li>
                  <li>
                    <a href="index-v3.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>Kidz Daycare
                    </a>
                  </li>
                  <li>
                    <a href="photo-gallery.html">
                      <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                      Photo Gallery
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4 class="color-2">Recent Post</h4>
              </div>
              <div class="footerInfo">
                <ul class="list-unstyled postLink">
                  <li>
                    <div class="media">
                      <a class="media-left" href="single-blog.html">
                        <img class="media-object img-rounded border-color-1" src="img/footer/footer-img-1.png" alt="Image">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="single-blog.html">A Clean Website Gives More Experience To The Visitors</a></h5>
                        <p>July 7 - 2016</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <a class="media-left" href="single-blog-left-sidebar.html">
                        <img class="media-object img-rounded border-color-2" src="img/footer/footer-img-2.png" alt="Image">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="single-blog-left-sidebar.html">A Clean Website Gives More Experience To The Visitors</a></h5>
                        <p>July 7 - 2016</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <a class="media-left" href="single-blog-left-sidebar.html">
                        <img class="media-object img-rounded border-color-4" src="img/footer/footer-img-3.png" alt="Image">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="single-blog-left-sidebar.html">A Clean Website Gives More Experience To The Visitors</a></h5>
                        <p>July 7 - 2016</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerTitle">
                <h4 class="color-3">Mailing List</h4>
              </div>
              <div class="footerInfo">
                <p>Sign up for our mailing list to get latest updates and offers.</p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Email address" aria-describedby="basic-addon21">
                  <button type="submit" class="input-group-addon" id="basic-addon21"><i class="fa fa-check" aria-hidden="true"></i></button>
                </div>
              </div>
              <div class="footerTitle">
                <h4 class="color-5">Payment Method</h4>
              </div>
              <ul class="list-inline">
                <li><img src="img/footer/card1.png"></li>
                <li><img src="img/footer/card2.png"></li>
                <li><img src="img/footer/card3.png"></li>
                <li><img src="img/footer/card4.png"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- COPY RIGHT -->
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-sm-push-7 col-xs-12">
              <ul class="list-inline">
                <li><a href="#" class="bg-color-1"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-2"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-3"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-4"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#" class="bg-color-5"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="col-sm-7 col-sm-pull-5 col-xs-12">
              <div class="copyRightText">
                <p>© 2016 Copyright Kidz School Bootstrap Template by <a href="https://www.iamabdus.com/">Abdus</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <div class="scrolling">
    <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>

  <!-- LOGIN MODAL -->
  <div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">Login</h3>
          </div>
          <div class="panel-body">
            <form action="#" method="POST" role="form">
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="User name">
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group formField">
                <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Log in">
              </div>
              <div class="form-group formField">
                <p class="help-block"><a href="#">Forgot password?</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CREATE ACCOUNT MODAL -->
  <div class="modal fade customModal" id="createAccount" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">Create  an account</h3>
          </div>
          <div class="panel-body">
            <form action="#" method="POST" role="form">
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="User name">
              </div>
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" placeholder="Re-Password">
              </div>
              <div class="form-group formField">
                <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Register">
              </div>
              <div class="form-group formField">
                <p class="help-block">Allready have an account? <a href="#">Log in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- PORDUCT QUICK VIEW MODAL -->
  <div class="modal fade quick-view" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-6 col-sm-7 col-xs-12">
              <div class="product-gallery text-center">
                <img src="img/single-product/preview01.jpg" alt="Product" class="img-responsive">
              </div>
            </div>

            <div class="col-md-6 col-sm-5 col-xs-12">
              <div class="product-info">
                <h1 class="product-title">Barbie Racing Car</h1>
                <div class="price">
                  <span>$50</span>
                  <span><del>$60</del></span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                <div class="add-cart">
                  <div class="count-input">
                    <input class="quantity btn-primary" type="text" value="1">
                    <a class="incr-btn incr-up" data-action="decrease" href="#"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                    <a class="incr-btn incr-down" data-action="increase" href="#"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                  </div>
                  <a href="cart-page.html" class="add-to-cart btn btn-primary">Add to Cart</a>
                </div>

              </div>
            </div>
              
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
 
  
 
  
 
 
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="{{asset('plugins/jquery-ui/jquery-ui.js')}}"></script>
   <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
   <script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
   <script src="{{asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}"></script>
   <script src="{{asset('plugins/owl-carousel/owl.carousel.js')}}"></script>
   <script src="{{asset('../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js')}}"></script>
   <script src="{{asset('plugins/counter-up/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('plugins/velocity/velocity.min.js')}}"></script>
   <script src="{{asset('plugins/smoothscroll/SmoothScroll.js')}}"></script>
   <script src="{{asset('plugins/isotope/isotope.min.js')}}"></script>
   <script src="{{asset('plugins/isotope/jquery.fancybox.pack.js')}}"></script>
   <script src="{{asset('plugins/isotope/isotope-triger.js')}}"></script>
   <script src="{{asset('plugins/countdown/jquery.syotimer.js')}}"></script>
   <script src="{{asset('plugins/velocity/velocity.min.js')}}"></script>
   <script src="{{asset('plugins/smoothscroll/SmoothScroll.js')}}"></script>
   <script src="{{asset('options/optionswitcher.js')}}"></script>
   <script src="{{asset('js/custom.js')}}"></script>
   <script src="{{asset('chosen/chosen.jquery.js')}}"></script>
   <script src="{{asset('dist/trumbowyg.js')}}"></script>
   
   
   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
   
      @yield('js')  
</body>


<!-- Mirrored from themes.iamabdus.com/kidz/1.1/index-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Jan 2017 14:33:49 GMT -->
</html>