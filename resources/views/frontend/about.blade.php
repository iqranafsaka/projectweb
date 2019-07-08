<!DOCTYPE html>
<html lang="en">
<head>
  <title>Neotech | About</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Poppins:400,600,700%7CRoboto:400,400i,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('assets/frontend/img/favicon.ico')}}">
  <link rel="apple-touch-icon" href="{{ asset('assets/frontend/img/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/frontend/img/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/frontend/img/apple-touch-icon-114x114.png')}}">

  <!-- Lazyload -->
  <script type="text/javascript" src="{{ asset('assets/frontend/js/lazysizes.min.js')}}"></script>

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

  <!-- Subscribe Modal -->
  <div class="modal fade" id="subscribe-modal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="subscribeModalLabel">Subscribe for Newsletter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="mc4wp-form" method="post">
            <div class="mc4wp-form-fields">
              <p>
                <i class="mc4wp-form-icon ui-email"></i>
                <input type="email" name="EMAIL" placeholder="Your email" required="">
              </p>
              <p>
                <input type="submit" class="btn btn-md btn-color" value="Subscribe">
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- end subscribe modal -->
  

  <!-- Mobile Sidenav -->    
  
  @include('layouts.frontend.mobilesidenav')
  
  <!-- end mobile sidenav -->


  <main class="main oh" id="main">

    <!-- Navigation -->
    
    @include('layouts.frontend.navbar')
    
    <!-- end navigation -->

    <div class="main-container" id="main-container">

      <!-- Contact -->
      <section class="section-wrap pt-40 pb-40">
        <div class="container">

          <h1 class="page-title">About</h1>
          <img data-src="{{ asset('assets/frontend/img/blog/about_page_title.jpg')}}" src="{{ asset('assets/frontend/img/blog/about_page_title.jpg')}}" alt="" class="lazyload contact__img">
          
          <div class="row justify-content-md-center">
            <div class="col-lg-8">
              <div class="entry__article">
                <p>We are optimists who love to work together and Creating an awesome clothes store with this Theme is easy than you can imagine. Just a handful of products, including the goal-setting SELF Journal, which he initially launched on Kickstarter.</p>
                <p>Phasellus varius turpis quis quam vulputate, sed ultricies ex gravida. Suspendisse leo ipsum, porttitor sed ullamcorper id, pretium vel urna. Donec sit amet mauris leo. Sed nibh odio, lacinia eu condimentum eu, accumsan id elit. Sed porttitor pretium ipsum, et lacinia quam faucibus fringilla. Vivamus a augue maximus, gravida ante eget, pulvinar est.</p>

                <blockquote><p>“Build A BIGGER Business award, a competition that recognizes businesses.”</p></blockquote>

                <p>Phasellus varius turpis quis quam vulputate, sed ultricies ex gravida. Suspendisse leo ipsum, porttitor sed ullamcorper id, pretium vel urna. Donec sit amet mauris leo. Sed nibh odio, lacinia eu condimentum eu, accumsan id elit. Sed porttitor pretium ipsum, et lacinia quam faucibus fringilla. Vivamus a augue maximus, gravida ante eget, pulvinar est.</p>
                <p>Because of their hustle, for two years in a row, Best Self Co has received Shopify’s. To give side hustlers a helping hand, Brouwer will share more of the hard work and planning that went into this ecommerce success.</p>
              </div>             

            </div>
          </div>          

        </div>
      </section> <!-- end contact -->

      <!-- Footer -->
      
      @include('layouts.frontend.footer')
      
      <!-- end footer -->

    </div> <!-- end main container -->

    <div id="back-to-top">
      <a href="#top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->

  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/easing.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/owl-carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/twitterFetcher_min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/modernizr.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/scripts.js')}}"></script>


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