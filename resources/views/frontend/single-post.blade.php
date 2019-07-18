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
                    <h5>Tag :
                        @foreach ($artikel->tag as $data)
                            <a href="/posts-tag/{{ $data->slug }}">{{ $data->nama_tag }}</a>
                        @endforeach
                    </h5>
                </div> 
                <!-- end tags -->

              </div> <!-- end entry article -->
            </div>
          </article> <!-- end standard post -->



          <!-- Comments -->
          
          <div id="disqus_thread"></div>
          
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

        </aside> <!-- end sidebar -->
  
      </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
  <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = 'http://localhost:8000/blog/{{ $artikel->slug }}', 'http://iqranafsaka01.herokuapp.com/posts/{{ $artikel->slug }}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{ $artikel->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://aboutfan.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>             
@endsection