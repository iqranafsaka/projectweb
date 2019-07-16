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
  <header class="sidenav" id="sidenav">
    <!-- Search -->
    <div class="sidenav__search-mobile">
      <form method="get" class="sidenav__search-mobile-form">
        <input type="search" class="sidenav__search-mobile-input" placeholder="Search..." aria-label="Search input">
        <button type="submit" class="sidenav__search-mobile-submit" aria-label="Submit search">
          <i class="ui-search"></i>
        </button>
      </form>
    </div>

    <nav>
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="index.html" class="sidenav__menu-link">Home</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="index.html" class="sidenav__menu-link">Home Demo 1</a></li>
            <li><a href="index-2.html" class="sidenav__menu-link">Home Demo 2</a></li>
            <li><a href="index-3.html" class="sidenav__menu-link">Home Demo 3</a></li>
          </ul>
        </li>
      
        <li>
          <a href="#" class="sidenav__menu-link">Posts</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="single-post.html" class="sidenav__menu-link">Gallery Post</a></li>
            <li><a href="single-post.html" class="sidenav__menu-link">Video Post</a></li>
            <li><a href="single-post.html" class="sidenav__menu-link">Audio Post</a></li>
            <li><a href="single-post.html" class="sidenav__menu-link">Quote Post</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Pages</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="about.html" class="sidenav__menu-link">About</a></li>
            <li><a href="contact.html" class="sidenav__menu-link">Contact</a></li>
            <li><a href="404.html" class="sidenav__menu-link">404</a></li>
          </ul>
        </li>
        
        <li>
          <a href="#" class="sidenav__menu-link">Features</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="lazyload.html" class="sidenav__menu-link">Lazyload</a></li>
            <li><a href="shortcodes.html" class="sidenav__menu-link">Shortcodes</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Purchase</a>
        </li>
      </ul>
    </nav>

    <div class="socials sidenav__socials "> 
      <a class="social-facebook" href="#" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social-twitter" href="#" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      <a class="social-youtube" href="#" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a>
    </div>
  </header> <!-- end mobile sidenav -->


  <main class="main oh" id="main">

    <!-- Navigation -->
    <header class="nav">

      <div class="nav__holder nav--sticky">
        <div class="container relative">

          <div class="flex-parent">

            <!-- Mobile Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open mobile menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> <!-- end mobile menu button -->

            <!-- Logo -->
            <a href="index.html" class="logo">
              <img class="logo__img" src="{{asset('assets/frontend/img/logo_light.png')}}" srcset="{{asset('assets/frontend/img/logo_light.png')}} 1x, {{asset('assets/frontend/img/logo_light@2x.png')}} 2x" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">

                <li class="nav__dropdown active">
                  <a href="index.html">Home</a>
                  <ul class="nav__dropdown-menu">
                    <li>
                      <a href="index.html">Home Demo 1</a>
                    </li>
                    <li>
                      <a href="index-2.html">Home Demo 2</a>
                    </li>
                    <li>
                      <a href="index-3.html">Home Demo 3</a>
                    </li>
                  </ul>
                </li>

                <li class="nav__dropdown">
                  <a href="categories.html">Posts</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="single-post.html">Gallery Post</a></li>
                    <li><a href="single-post.html">Video Post</a></li>
                    <li><a href="single-post.html">Audio Post</a></li>
                    <li><a href="single-post.html">Quote Post</a></li>
                  </ul>
                </li>

                <li class="nav__dropdown">
                  <a href="catalog.html">Pages</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="categories.html">Categories</a></li>
                    <li><a href="about.html">About</a></li>                    
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="404.html">404</a></li>
                  </ul>
                </li>

                <li class="nav__dropdown">
                  <a href="catalog.html">Features</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="lazyload.html">Lazy Load</a></li>
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                  </ul>
                </li>

                <li>
                  <a href="#">Purchase</a>
                </li>


              </ul> <!-- end menu -->
            </nav> <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right nav--align-right d-none d-lg-flex">

              <!-- Socials -->
              <div class="nav__right-item socials socials--nobase nav__socials "> 
                <a class="social-facebook" href="#" target="_blank">
                  <i class="ui-facebook"></i>
                </a>
                <a class="social-twitter" href="#" target="_blank">
                  <i class="ui-twitter"></i>
                </a>
                <a class="social-youtube" href="#" target="_blank">
                  <i class="ui-youtube"></i>
                </a>
              </div>

              <div class="nav__right-item">
                <a href="" class="nav__subscribe" data-toggle="modal" data-target="#subscribe-modal">Subscribe</a>
              </div>

              <!-- Search -->
              <div class="nav__right-item nav__search">
                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                  <i class="ui-search nav__search-trigger-icon"></i>
                </a>
                <div class="nav__search-box" id="nav__search-box">
                  <form class="nav__search-form">
                    <input type="text" placeholder="Search an article" class="nav__search-input">
                    <button type="submit" class="nav__search-button btn btn-md btn-color btn-button">
                      <i class="ui-search nav__search-icon"></i>
                    </button>
                  </form>
                </div>
                
              </div>

            </div> <!-- end nav right -->  
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->
    
    <div class="main-container" id="main-container">  

      <!-- Content -->
      <section class="section-wrap pb-30">
        <div class="container">
          <div class="row">
              
            <!-- Posts -->
            <div class="col-md-8 blog__content mb-30">
              <h1 class="page-title">Page not found</h1>
              <p class="mb-20">Sorry the page you were looking for cannot be found. Try searching for the best match or browse the links below:</p>
              <form class="search-form">
                <input type="text" placeholder="Search an article" class="search-form__input">
                <button type="submit" class="search-form__button btn btn-md btn-color btn-button">
                  <i class="ui-search search-form__icon"></i>
                </button>
              </form>


              <div class="row mt-30">

                <div class="col-md-6">
                  <article class="entry">                
                    <div class="entry__img-holder">
                      <a href="single-post.html">
                        <div class="thumb-container">
                          <img data-src="{{asset('assets/frontend/img/blog/grid_post_img_1.jpg')}}" src="{{asset('assets/frontend/img/blog/grid_post_img_1.jpg')}}" class="entry__img lazyload" alt="" />
                        </div>
                      </a>
                    </div>

                    <div class="entry__body">
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
                </div>

                <div class="col-md-6">
                  <article class="entry">                
                    <div class="entry__img-holder">
                      <a href="single-post.html">
                        <div class="thumb-container">
                          <img data-src="{{asset('assets/frontend/img/blog/grid_post_img_2.jpg')}}" src="{{asset('assets/frontend/img/blog/grid_post_img_2.jpg')}}" class="entry__img lazyload" alt="" />
                        </div>
                      </a>
                    </div>

                    <div class="entry__body">
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
                </div>

                <div class="col-md-6">
                  <article class="entry">                
                    <div class="entry__img-holder">
                      <a href="single-post.html">
                        <div class="thumb-container">
                          <img data-src="{{asset('assets/frontend/img/blog/grid_post_img_3.jpg')}}" src="{{asset('assets/frontend/img/blog/grid_post_img_3.jpg')}}" class="entry__img lazyload" alt="" />
                        </div>
                      </a>
                    </div>

                    <div class="entry__body">
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
                </div>

                <div class="col-md-6">
                  <article class="entry">                
                    <div class="entry__img-holder">
                      <a href="single-post.html">
                        <div class="thumb-container">
                          <img data-src="{{asset('assets/frontend/img/blog/grid_post_img_4.jpg')}}" src="{{asset('assets/frontend/img/blog/grid_post_img_4.jpg')}}" class="entry__img lazyload" alt="" />
                        </div>
                      </a>
                    </div>

                    <div class="entry__body">
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
                </div>
              </div>
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
                            <img data-src="{{asset('assets/frontend/img/blog/popular_post_1.jpg')}}" src="{{asset('assets/frontend/img/blog/popular_post_1.jpg')}}" alt="" class="lazyload">
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
                            <img data-src="{{asset('assets/frontend/img/blog/popular_post_2.jpg')}}" src="{{asset('assets/frontend/img/blog/popular_post_2.jpg')}}" alt="" class="lazyload">
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
                            <img data-src="{{asset('assets/frontend/img/blog/popular_post_3.jpg')}}" src="{{asset('assets/frontend/img/blog/popular_post_3.jpg')}}" alt="" class="lazyload">
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
                            <img data-src="{{asset('assets/frontend/img/blog/popular_post_4.jpg')}}" src="{{asset('assets/frontend/img/blog/popular_post_4.jpg')}}" alt="" class="lazyload">
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
                            <img data-src="{{asset('assets/frontend/img/blog/popular_post_5.jpg')}}" src="{{asset('assets/frontend/img/blog/popular_post_5.jpg')}}" alt="" class="lazyload">
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
                  <img src="{{asset('assets/frontend/img/blog/placeholder_300.jpg')}}" alt="">
                </a>
              </div> <!-- end widget banner -->

            </aside> <!-- end sidebar -->

          </div>
        </div>
      </section> <!-- end content -->

      <!-- Footer -->
      <footer class="footer">
        <div class="container">
          <div class="footer__widgets">
            <div class="row">

              <div class="col-lg-3 col-md-6">
                <div class="widget">
                  <img src="{{asset('assets/frontend/img/logo_light.png')}}" srcset="{{asset('assets/frontend/img/logo_light.png')}} 1x, {{asset('assets/frontend/img/logo_light@2x.png')}} 2x" class="logo__img" alt="">
                  <p class="mt-20">We bring you the best Premium WordPress Themes.</p>

                  <div class="socials mt-20">
                    <a href="#" class="social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                    <a href="#" class="social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                    <a href="#" class="social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                    <a href="#" class="social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <h4 class="widget-title white">twitter feed</h4>
                <div class="tweets-container">
                  <div id="tweets"></div>                  
                </div>
              </div>
              

              <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                  <h4 class="widget-title white">Useful Links</h4>
                  <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Wordpress Themes</a></li>
                    <li><a href="#">Advertise</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="widget widget__newsletter">
                  <h4 class="widget-title white">subscribe to deothemes</h4>
                  <p>Join our Newsletter</p>

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
          </div>    
        </div> <!-- end container -->

        <div class="footer__bottom">
          <div class="container text-center">
            <span class="copyright">
              &copy; 2017 Neotech | Magazine WordPress theme. Made by <a href="http://deothemes.com">DeoThemes</a>
            </span>
          </div>
        </div> <!-- end bottom footer -->
      </footer> <!-- end footer -->

    </div> <!-- end main container -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
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