<!DOCTYPE html>
<html lang="en">
<head>
  <title>Neotech | Home</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">


  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}" />
  @yield('css')

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
  
  @include("layouts.frontend.mobilesidenav")
  
  <!-- end mobile sidenav -->


  <main class="main oh" id="main">

    <!-- Navigation -->
    
    @include("layouts.frontend.navbar")
    
    <!-- end navigation -->
    
    <div class="main-container" id="main-container">  

      <!-- Content -->

      @yield('content')
      
      <!-- end content -->

      <!-- Latest Videos -->
      <section class="section-wrap pt-40">
        <div class="container">

          <h3 class="section-title">Latest Videos</h3>

          <div class="video-playlist">

            <div class="video-playlist__content thumb-container">
              <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Ro6r15wzp2o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  class="video-playlist__content-video"></iframe>
              </div>
            </div>

            <div class="video-playlist__list">
              <a href="https://www.youtube.com/embed/6wlvYh0h63k" class="video-playlist__list-item video-playlist__list-item--active">
                <div class="video-playlist__list-item-thumb thumb-container">
                  <img src="https://i.ytimg.com/vi_webp/6wlvYh0h63k/sddefault.webp" class="video-playlist__list-item-img lazyload" alt="">
                </div>
                <div class="video-playlist__list-item-description">
                  <h4 class="video-playlist__list-item-title">Rainbow Six Siege E3 2014 Gameplay World Premiere [US]</h4>
                </div>
              </a>
              <a href="https://www.youtube.com/embed/LLCrzJdF8Z4" class="video-playlist__list-item">
                <div class="video-playlist__list-item-thumb thumb-container">
                  <img src="https://i.ytimg.com/vi_webp/wJxNhJ8fjFk/sddefault.webp" class="video-playlist__list-item-img lazyload" alt="">
                </div>
                <div class="video-playlist__list-item-description">
                  <h4 class="video-playlist__list-item-title">NieR: Automata – "Death is Your Beginning" Launch Trailer | PS4</h4>
                </div>
              </a>
              <a href="https://www.youtube.com/embed/hfjazBN0DwA" class="video-playlist__list-item">
                <div class="video-playlist__list-item-thumb thumb-container">
                  <img src="https://i.ytimg.com/vi_webp/hfjazBN0DwA/sddefault.webp" class="video-playlist__list-item-img lazyload" alt="">
                </div>
                <div class="video-playlist__list-item-description">
                  <h4 class="video-playlist__list-item-title">PUBG - Vikendi Snow Map Gameplay Trailer</h4>
                </div>
              </a>
              <a href="https://www.youtube.com/embed/s_SJZSAtLBA" class="video-playlist__list-item">
                <div class="video-playlist__list-item-thumb thumb-container">
                  <img src="https://i.ytimg.com/vi/s_SJZSAtLBA/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAgEshakgrN4q3fSRCGdZKUWG-tdw" class="video-playlist__list-item-img lazyload" alt="">
                </div>
                <div class="video-playlist__list-item-description">
                  <h4 class="video-playlist__list-item-title">Assassin's Creed Odyssey: E3 2018 Official World Premiere Trailer | Ubisoft [NA]</h4>
                </div>
              </a>
            </div>

          </div>        
        </div>
      </section>

      <!-- Ad Banner 728 -->
      <div class="text-center pb-60">
        <a href="#">
          <img src="{{ asset('assets/frontend/img/blog/placeholder_728.jpg')}}" alt="">
        </a>
      </div> 

      <!-- Footer -->

      @include("layouts.frontend.footer")
     
      <!-- end footer -->

    </div> <!-- end main container -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/frontend.js')}}"></script> {{-- JSON DATA FRONTEND JS --}}
  <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/easing.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/owl-carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/twitterFetcher_min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/modernizr.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/scripts.js')}}"></script>
  @yield('js')
  @stack('scripts')


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