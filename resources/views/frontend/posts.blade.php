<!DOCTYPE html>
<html lang="en">
<head>
  <title>Neotech | Categories</title>

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

      <!-- Content -->
      <section class="section-wrap pb-30">
        <div class="container">
          <div class="row">
              
            <!-- Posts -->
            <div class="col-md-8 blog__content mb-30">
              <h1 class="page-title">Posts</h1>

              <div class="row mt-30">
                @foreach ($artikel as $data)
                  <div class="col-md-6 ">
                      <article class="entry">                
                          <div class="entry__img-holder">
                          <a href="/posts/{{$data->slug}}">
                              <div class="thumb-container">
                              <img src="{{ asset('assets/img/artikel/' . $data->foto . '') }}" class="entry__img lazyload" style="height:200px" alt="" />
                          </div>
                          </a>
                      </div>
      
                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="/posts-kategori/{{$data->kategori->slug}}" class="entry__meta-category">{{$data->kategori->nama_kategori}}</a>
                          <h2 class="entry__title">
                            <a href="/posts/{{$data->slug}}">{{$data->judul}}</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              {{$data->created_at->format('D M Y')}}
                            </li>
                            <li class="entry__meta-author">
                              by {{$data->user->name}}
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>{!! str_limit($data->konten, 300) !!}</p>
                        </div>
                      </div>
                    </article>
                  </div>
                @endforeach
              </div>
              {{ $artikel->links() }}
            </div> <!-- end posts -->

            <!-- Sidebar -->
            <aside class="col-md-4 sidebar sidebar--right">
              
              <!-- Widget Popular Posts -->
              <div class="widget widget-popular-posts">
                <h4 class="widget-title sidebar__widget-title">Popular Posts</h4>
                  <ul class="widget-popular-posts__list popular-data">
                      {{-- ISI DARI popular-data --}}
                  </ul>
            </div>
            <!-- end widget popular posts -->

          <!-- kategori -->
          <div class="entry__tags">
              <h5>Kategori :
                  @foreach ($kategori as $data)
                      <a href="/posts-kategori/{{ $data->slug }}">{{ $data->nama_kategori }}</a>
                  @endforeach
              </h5>
          </div> 
          <!-- end kategori -->

          <!-- tags -->
            <div class="entry__tags">
              <h5>Tag :
                  @foreach ($tag as $data)
                      <a href="/posts-tag/{{ $data->slug }}">{{ $data->nama_tag }}</a>
                  @endforeach
              </h5>
          </div> 
          <!-- end tags -->

          <!-- Widget socials -->
          <div class="widget widget-socials">
            <h4 class="widget-title">Keep up with Neotech</h4>
            <ul class="socials social">
              {{-- isi dari AJAX SOCIAL --}}
            </ul>
          </div> 
          <!-- end widget socials -->

              <!-- Widget Banner -->
              <div class="widget widget_media_image">
                <a href="#">
                  <img src="{{ asset('assets/frontend/img/blog/placeholder_300.jpg')}}" alt="">
                </a>
              </div> <!-- end widget banner -->

            </aside> <!-- end sidebar -->

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
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/frontend.js')}}"></script> {{-- JSON DATA FRONTEND JS --}}
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