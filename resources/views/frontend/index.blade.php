@extends('layouts.frontend')
@section('content')

<!-- Hero Slider -->
      <section class="hero">
        <div id="owl-hero" class="owl-carousel owl-theme">
          
          @foreach ($artikel as $data)
            <div class="hero__slide">
                    <article class="hero__slide-entry entry">
                      <div class="thumb-bg-holder" style="background-image: url({{asset('assets/img/artikel/' . $data->foto)}})">
                        <a href="{{url( 'posts/' . $data->slug )}}" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                      </div>
                      
                      <div class="thumb-text-holder">
                        <a href="categories.html" class="entry__meta-category entry__meta-category--label">{{$data->kategori->nama_kategori}}</a>   
                            <h2 class="thumb-entry-title">
                        <a href="{{url( 'posts/' . $data->slug )}}">{{$data->judul}}</a>
                        </h2>
                      </div>
                  </article>          
              </div>
          @endforeach
        </div> 
        <!-- end owl -->
      </section> 
      <!-- end hero slider -->

      <!-- Ad Banner 728 -->
      <div class="text-center">
        <a href="#">
          <img src="{{ asset('assets/frontend/img/blog/placeholder_728.jpg')}}" alt="">
        </a>
      </div>  

    <section class="section-wrap pb-0">
            <div class="container">
            <div class="row">
                
            <!-- Content -->
            <section class="section-wrap pb-0">
                <div class="container">
                <div class="row">

                <!-- Posts -->
                <div class="col-md-8 blog__content mb-30">
                    <h3 class="section-title">Latest Posts</h3>
                    <article class="entry post-list latest-data">                
                        {{-- ISI DARI post-data --}}
                    </article>
                </div> 
                <!-- end posts -->

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
            </section> 
            <!-- end content -->
        
            </div>
        </div>
    </section>

@endsection