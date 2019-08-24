<!DOCTYPE html>
<html lang="en">
<head>
  <title>Neotech | Home</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link src="https://fonts.googleapis.com/css?family=Poppins:400,600,700%7CRoboto:400,400i,700" rel='stylesheet'>

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
        
      <!-- Ad Banner 728 -->
      <div class="text-center">
        <a href="#">
          <img src="{{ asset('assets/frontend/img/blog/placeholder_728.jpg')}}" alt="">
        </a>
      </div>    

      <section class="section-wrap pb-0">
            <div class="container">
              <div class="row">
    
                <!-- Posts -->
                <div class="col-md-8 blog__content mb-30">
    
                  <h3 class="section-title">Latest Posts</h3>
    
                  <article class="entry post-list">                
                    <div class="entry__img-holder post-list__img-holder">
                      <a href="single-post.html">
                        <div class="thumb-container">
                          <img data-src="{{ asset('assets/frontend/img/blog/list_post_img_1.jpg')}}" src="{{ asset('assets/frontend/img/blog/list_post_img_1.jpg')}}" class="entry__img lazyload" alt="" />
                        </div>
                      </a>
                    </div>
    
                    <div class="entry__body post-list__body">
                      <div class="entry__header">
                        <a href="categories.html" class="entry__meta-category">devices</a>
                        <h2 class="entry__title">
                          <a href="single-post.html">Satelite cost tens of millions or even hundreds of millions of dollars to build</a>
                        </h2>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            21 October, 2017
                          </li>
                          <li class="entry__meta-author">
                            by <a href="#">DeoThemes</a>
                          </li>
                        </ul>
                      </div>
                      <div class="entry__excerpt">
                        <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
                      </div>
                    </div>
                  </article>
    
                  <article class="entry post-list">                
                    <div class="entry__img-holder post-list__img-holder thumb-container">
                      <a href="single-post.html">
                        <img data-src="{{ asset('assets/frontend/img/blog/list_post_img_2.jpg')}}" src="{{ asset('assets/frontend/img/blog/list_post_img_2.jpg')}}" class="entry__img lazyload" alt="" />
                      </a>
                    </div>
    
                    <div class="entry__body post-list__body">
                      <div class="entry__header">
                        <a href="categories.html" class="entry__meta-category">tesla cars</a>
                        <h2 class="entry__title">
                          <a href="single-post.html">Advance Uber’s mission of bringing safe, reliable transportation to everyone</a>
                        </h2>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            21 October, 2017
                          </li>
                          <li class="entry__meta-author">
                            by <a href="#">DeoThemes</a>
                          </li>
                        </ul>
                      </div>
                      <div class="entry__excerpt">
                        <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
                      </div>
                    </div>
                  </article>
    
                  <article class="entry post-list">                
                    <div class="entry__img-holder post-list__img-holder thumb-container">
                      <a href="single-post.html">
                        <img data-src="{{ asset('assets/frontend/img/blog/list_post_img_3.jpg')}}" src="{{ asset('assets/frontend/img/blog/list_post_img_3.jpg')}}" class="entry__img lazyload" alt="" />
                      </a>
                    </div>
    
                    <div class="entry__body post-list__body">
                      <div class="entry__header">
                        <a href="categories.html" class="entry__meta-category">robotics</a>
                        <h2 class="entry__title">
                          <a href="single-post.html">VR and playable on a console makes it a great option to PC related VR headsets</a>
                        </h2>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            21 October, 2017
                          </li>
                          <li class="entry__meta-author">
                            by <a href="#">DeoThemes</a>
                          </li>
                        </ul>
                      </div>
                      <div class="entry__excerpt">
                        <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
                      </div>
                    </div>
                  </article>
    
                  <article class="entry post-list">                
                    <div class="entry__img-holder post-list__img-holder thumb-container">
                      <a href="single-post.html">
                        <img data-src="{{ asset('assets/frontend/img/blog/list_post_img_4.jpg')}}" src="{{ asset('assets/frontend/img/blog/list_post_img_4.jpg')}}" class="entry__img lazyload" alt="" />
                      </a>
                    </div>
    
                    <div class="entry__body post-list__body">
                      <div class="entry__header">
                        <a href="categories.html" class="entry__meta-category">aircraft</a>
                        <h2 class="entry__title">
                          <a href="single-post.html">NASA is best known for building rockets and spacecraft</a>
                        </h2>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            21 October, 2017
                          </li>
                          <li class="entry__meta-author">
                            by <a href="#">DeoThemes</a>
                          </li>
                        </ul>
                      </div>
                      <div class="entry__excerpt">
                        <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
                      </div>
                    </div>
                  </article>
    
                  <article class="entry post-list">                
                    <div class="entry__img-holder post-list__img-holder thumb-container">
                      <a href="single-post.html">
                        <img data-src="{{ asset('assets/frontend/img/blog/list_post_img_5.jpg')}}" src="{{ asset('assets/frontend/img/blog/list_post_img_5.jpg')}}" class="entry__img lazyload" alt="" />
                      </a>
                    </div>
    
                    <div class="entry__body post-list__body">
                      <div class="entry__header">
                        <a href="categories.html" class="entry__meta-category">Devices</a>
                        <h2 class="entry__title">
                          <a href="single-post.html">Digital cameras are always changing, adding new features</a>
                        </h2>
                        <ul class="entry__meta">
                          <li class="entry__meta-date">
                            21 October, 2017
                          </li>
                          <li class="entry__meta-author">
                            by <a href="#">DeoThemes</a>
                          </li>
                        </ul>
                      </div>
                      <div class="entry__excerpt">
                        <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
                      </div>
                    </div>
                  </article>
    
                </div> <!-- end posts -->
    
                <!-- Sidebar -->
                <aside class="col-md-4 sidebar sidebar--right">
                  
                  <!-- Widget Popular Posts -->
                  <div class="widget widget-popular-posts">
                    <h4 class="widget-title sidebar__widget-title">Popular Posts</h4>
                    <ul class="widget-popular-posts__list">
                      <li>
                        <article class="clearfix">
                          <div class="widget-popular-posts__img-holder">
                            <span class="widget-popular-posts__number">1</span>
                            <div class="thumb-container">
                              <a href="single-post.html">
                                <img data-src="{{ asset('assets/frontend/img/blog/popular_post_1.jpg')}}" src="{{ asset('assets/frontend/img/blog/popular_post_1.jpg')}}" alt="" class="lazyload">
                              </a>
                            </div>
                          </div>
                          <div class="widget-popular-posts__entry">
                            <h3 class="widget-popular-posts__entry-title">
                              <a href="single-post.html">How to get better Apple Watch battery life</a>
                            </h3>
                          </div>                      
                        </article>
                      </li>
                      <li>
                        <article class="clearfix">
                          <div class="widget-popular-posts__img-holder">
                            <span class="widget-popular-posts__number">2</span>
                            <div class="thumb-container">
                              <a href="single-post.html">
                                <img data-src="{{ asset('assets/frontend/img/blog/popular_post_2.jpg')}}" src="{{ asset('assets/frontend/img/blog/popular_post_2.jpg')}}" alt="" class="lazyload">
                              </a>
                            </div>
                          </div>
                          <div class="widget-popular-posts__entry">
                            <h3 class="widget-popular-posts__entry-title">
                              <a href="single-post.html">8 Hidden Costs of Starting and Running a Business</a>
                            </h3>
                          </div>                      
                        </article>
                      </li>
                      <li>
                        <article class="clearfix">
                          <div class="widget-popular-posts__img-holder">
                            <span class="widget-popular-posts__number">3</span>
                            <div class="thumb-container">
                              <a href="single-post.html">
                                <img data-src="{{ asset('assets/frontend/img/blog/popular_post_3.jpg')}}" src="{{ asset('assets/frontend/img/blog/popular_post_3.jpg')}}" alt="" class="lazyload">
                              </a>
                            </div>
                          </div>
                          <div class="widget-popular-posts__entry">
                            <h3 class="widget-popular-posts__entry-title">
                              <a href="single-post.html">The iPhone of Drones Is Being Built by This Teenager</a>
                            </h3>
                          </div>                      
                        </article>
                      </li>
                      <li>
                        <article class="clearfix">
                          <div class="widget-popular-posts__img-holder">
                            <span class="widget-popular-posts__number">4</span>
                            <div class="thumb-container">
                              <a href="single-post.html">
                                <img data-src="{{ asset('assets/frontend/img/blog/popular_post_4.jpg')}}" src="{{ asset('assets/frontend/img/blog/popular_post_4.jpg')}}" alt="" class="lazyload">
                              </a>
                            </div>
                          </div>
                          <div class="widget-popular-posts__entry">
                            <h3 class="widget-popular-posts__entry-title">
                              <a href="single-post.html">Check Out This Video of Apple's New Futuristic Campus, Shot by a Drone</a>
                            </h3>
                          </div>                      
                        </article>
                      </li>
                      <li>
                        <article class="clearfix">
                          <div class="widget-popular-posts__img-holder">
                            <span class="widget-popular-posts__number">5</span>
                            <div class="thumb-container">
                              <a href="single-post.html">
                                <img data-src="{{ asset('assets/frontend/img/blog/popular_post_5.jpg')}}" src="{{ asset('assets/frontend/img/blog/popular_post_5.jpg')}}" alt="" class="lazyload">
                              </a>
                            </div>
                          </div>
                          <div class="widget-popular-posts__entry">
                            <h3 class="widget-popular-posts__entry-title">
                              <a href="single-post.html">The New Media Moguls of Southeast Asia</a>
                            </h3>
                          </div>                      
                        </article>
                      </li>
                    </ul>
                  </div> <!-- end widget popular posts -->
    
                  <!-- Widget Newsletter -->
                  <div class="widget widget_mc4wp_form_widget">
                    <h4 class="widget-title">Subscribe for Neotech news and receive daily updates</h4>
                    <form id="mc4wp-form-1" class="mc4wp-form" method="post">
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
                  </div> <!-- end widget newsletter -->
    
                  <!-- Widget socials -->
                  <div class="widget widget-socials">
                    <h4 class="widget-title">Keep up with Neotech</h4>
                    <ul class="socials">
                      <li>
                        <a class="social-facebook" href="#" title="facebook" target="_blank">
                          <i class="ui-facebook"></i>
                          <span class="socials__text">Facebook</span>
                        </a>
                      </li>
                      <li>
                        <a class="social-twitter" href="#" title="twitter" target="_blank">
                          <i class="ui-twitter"></i>
                          <span class="socials__text">Twitter</span>
                        </a>
                      </li>
                      <li>
                        <a class="social-google-plus" href="#" title="google" target="_blank">
                          <i class="ui-google"></i>
                          <span class="socials__text">Google+</span>
                        </a>
                      </li>
                      <li>
                        <a class="social-instagram" href="#" title="instagram" target="_blank">
                          <i class="ui-instagram"></i>
                          <span class="socials__text">Instagram</span>
                        </a>
                      </li>
                    </ul>
                  </div> <!-- end widget socials -->
    
                  <!-- Widget Banner -->
                  <div class="widget widget_media_image">
                    <a href="#">
                      <img src="{{ asset('assets/frontend/img/blog/placeholder_300.jpg')}}" alt="">
                    </a>
                  </div> <!-- end widget banner -->
    
                </aside> <!-- end sidebar -->
          
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
  <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/easing.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/owl-carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/twitterFetcher_min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/modernizr.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/scripts.js')}}"></script>
  @yield('js')


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