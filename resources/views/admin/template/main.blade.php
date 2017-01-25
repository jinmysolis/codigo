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
  
     
      <!-- Header Styles -->
                 
    </div>
  </div>
  <!--/option-switcher-->

  <div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header-wrapper">
      <!-- COLOR BAR -->
     

      <!-- TOP INFO BAR -->
      @include('admin.template.partials.nav')
      
<!--      mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
    </header>

    <!-- BANNER -->
   
    <!-- BANNER BOTTOM -->
    
    <br><br><br><br><br><br>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
    
         <section>
               @include('flash::message')
                @yield('content')

         </section>

    </div></div></div>

 

    
    <!-- COLOR SECTION -->
    <section class="colorSection full-width clearfix bg-color-6 commentSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel commentSlider">
              <div class="slide">
                <div class="commentContent text-center">
                  <i class="fa fa-comments-o" aria-hidden="true"></i>
                  <h2>Laravel propone en el desarrollo usar 'Routes with Closures', en lugar de un MVC tradicional con el objetivo de hacer el código más claro. Aun así permite el uso de MVC tradicional.10.</h2>
                  <h3>Laravel</h3>
                  <p>5.0</p>
                </div>
              </div>
              <div class="slide">
                <div class="commentContent text-center">
                  <i class="fa fa-comments-o" aria-hidden="true"></i>
                  <h2>Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5. Su filosofía es desarrollar código PHP de forma elegante y simple, evitando el "código espagueti".</h2>
                  <h3>Laravel</h3>
                  <p>5.0</p>
                </div>
              </div>
              <div class="slide">
                <div class="commentContent text-center">
                  <i class="fa fa-comments-o" aria-hidden="true"></i>
                  <h2>Laravel tiene como objetivo ser un framework que permita el uso de una sintaxis elegante y expresiva para crear código de forma sencilla y permitiendo multitud de funcionalidades. Intenta aprovechar lo mejor de otros frameworks y aprovechar las características de las últimas versiones de PHP</h2>
                  <h3>Laravel</h3>
                  <p>5.0</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <!-- BRAND SECTION -->
   

    <!-- FOOTER -->
    <footer class="footer-2">
      
      
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
                <p>© 2016 Jinmy Rodolfo Solis Valdez <a href="#">Autor</a>.</p>
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

  

  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
  
   
   
      @yield('js')  
</body>


<!-- Mirrored from themes.iamabdus.com/kidz/1.1/index-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Jan 2017 14:33:49 GMT -->
</html>