@extends('layouts.frontend.single-blog')
@section('content')
<section class="section-wrap pt-60 pb-20">
    <div class="container">
      <div class="row">
        
        <!-- post content -->
        <div class="col-md-8 blog__content mb-30">

          <!-- standard post -->
          <article class="entry">
            <div class="single-post__entry-header  entry__header">
              <h1 class="single-post__entry-title">
                {{ $artikel->judul }}
              </h1>
              
              <ul class="single-post__entry-meta entry__meta">
                <li>
                  <div class="entry-author">
                    <a href="#" class="entry-author__url">
                      <img src="#" class="entry-author__img" alt="">
                        <span>by</span>
                        <span class="entry-author__name">{{ $artikel->user->name }}</span>
                    </a>
                  </div>
                </li>
                <li class="entry__meta-date">
                  {{ $artikel->created_at->format('D M Y') }}
                </li>
              </ul>
            </div>

            <div class="entry__img-holder">
              <figure>
                <img src="{{ url('assets/img/artikel/' . $artikel->foto) }}" alt="" class="entry__img">
                {{-- <figcaption>A photo collection samples</figcaption> --}}
              </figure>
            </div>

            <div class="entry__article-holder">
              <div class="entry__article">
                    <p>{!! $artikel->konten !!}</p>
                <!-- tags -->
                <div class="entry__tags">
                  Tags: <a href="#" rel="tag">mobile</a><a href="#" rel="tag">gadgets</a><a href="#" rel="tag">satelite</a>
                </div> <!-- end tags -->

              </div> <!-- end entry article -->
            </div>
          </article> <!-- end standard post -->



          <!-- Comments -->
          
          
          <!-- end comments -->


          <!-- Comment Form -->
          
          
          <!-- end comment form -->

        </div> <!-- end col -->
        
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
              <img src="img/blog/placeholder_300.jpg" alt="">
            </a>
          </div> <!-- end widget banner -->

        </aside> <!-- end sidebar -->
  
      </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
@endsection