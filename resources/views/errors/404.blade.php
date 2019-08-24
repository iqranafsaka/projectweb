<!DOCTYPE html>
<html lang="en">
<head>
  <title>Neotech | 404</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Poppins:400,600,700%7CRoboto:400,400i,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/frontend/css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{asset('assets/frontend/img/favicon.ico')}}">
  <link rel="apple-touch-icon" href="{{asset('assets/frontend/img/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/frontend/img/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/frontend/img/apple-touch-icon-114x114.png')}}">

  <!-- Lazyload -->
  <script type="text/javascript" src="{{asset('assets/frontend/js/lazysizes.min.js')}}"></script>

</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>


  <!-- Mobile Sidenav -->    
  
  @include('layouts.frontend.mobilesidenav')
  
  <!-- end mobile sidenav -->


  <main class="main oh" id="main">

    <!-- Navigation -->
    
    @include('layouts.frontend.navbar')
    
    <!-- end navigation -->
    
    <div class="main-container" id="main-container">  

      <!-- Content -->
      <section class="section-wrap pb-30">
        <div class="container">
          <div class="row">
              
            <!-- Posts -->
            <div class="col-md-8 blog__content mb-30">
              <h1 class="page-title">Page not found</h1>
              <p class="mb-20">Sorry the page you were looking for cannot be found. Try searching for the best match or browse the links below:</p>
            </div> 
            <!-- end posts -->

            <!-- Sidebar -->
            <aside class="col-md-4 sidebar sidebar--right">
                    
                    <!-- Widget socials -->
                    <div class="widget widget-socials">
                      <h4 class="widget-title">Social Media's</h4>
                      <ul class="socials social">
                        {{-- isi dari AJAX SOCIAL --}}
                      </ul>
                    </div> 
                    <!-- end widget socials -->

                    <!-- Widget Banner -->
                    <div class="widget widget_media_image">
                        <a href="#">
                        <img src="img/blog/placeholder_300.jpg" alt="">
                        </a>
                    </div> <!-- end widget banner -->

                </aside> 
                <!-- end sidebar -->

          </div>
        </div>
      </section> <!-- end content -->

      <!-- Footer -->
      
      @include('layouts.frontend.footer')
      
      <!-- end footer -->

    </div> <!-- end main container -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/frontend.js')}}"></script> {{-- JSON DATA FRONTEND JS --}}
  <script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/js/easing.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/js/owl-carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/js/twitterFetcher_min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/js/modernizr.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/js/scripts.js')}}"></script>


  <script type="text/javascript">
    // Twitter Feed
      var config1 = {
      "id": '594366594521804800',
      "domId": 'tweets',
      "showUser": false,
      "showInteraction": false,
      "showPermalinks": false,
      "showTime": false,
      "maxTweets": 2,
      "enableLinks": true
    };

    twitterFetcher.fetch(config1);                    
  </script>

</body>
</html>