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
                    Satelite cost tens of millions or even hundreds of millions of dollars to build
                  </h1>
                  
                  <ul class="single-post__entry-meta entry__meta">
                    <li>
                      <div class="entry-author">
                        <a href="#" class="entry-author__url">
                          <img src="{{ asset('assets/frontend/img/blog/author.png')}}" class="entry-author__img" alt="">
                          <span>by</span>
                          <span class="entry-author__name">Ross Green</span>
                        </a>
                      </div>
                    </li>
                    <li class="entry__meta-date">
                      21 October, 2017
                    </li>
                    <li>
                      <span>in</span>
                      <a href="categories.html" class="entry__meta-category">devices</a>
                    </li>
                  </ul>
                </div>

                <div class="entry__img-holder">
                  <figure>
                    <img src="{{ asset('assets/frontend/img/blog/single_post_featured_img.jpg')}}" alt="" class="entry__img">
                    <figcaption>A photo collection samples</figcaption>
                  </figure>
                </div>

                <div class="entry__article-holder">

                  <!-- Share -->
                  <div class="entry__share">
                    <div class="entry__share-inner">
                      <div class="socials">
                        <a href="#" class="social-facebook entry__share-social" aria-label="facebook"><i class="ui-facebook"></i></a>
                        <a href="#" class="social-twitter entry__share-social" aria-label="twitter"><i class="ui-twitter"></i></a>
                        <a href="#" class="social-google-plus entry__share-social" aria-label="google+"><i class="ui-google"></i></a>
                        <a href="#" class="social-instagram entry__share-social" aria-label="instagram"><i class="ui-instagram"></i></a>
                      </div>
                    </div>                    
                  </div> <!-- share -->

                  <div class="entry__article">
                    <p>Namira is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa. Fusce ante magna, iaculis ut purus ut. <a href="#">Morbi consequat purus</a> ac ultricies commodo. Integer aliquam ante a mauris gravida, vitae bibendum neque pharetra. Nulla rhoncus orci varius purus lobortis euismod. Fusce tincidunt dictum est et rhoncus. <strong>Vivamus hendrerit</strong> congue nisi, et nisl tincida vestibulum elit tincidunt eu. Vivamus ac pharetra orci, in feugiat massa. Proin congue mauris pretium, ultricies tortor in, aliquam urna. Vivamus mi tortor, finibus a interdum ac, ultricies in elit.</p>

                    <figure>
                      <img src="{{ asset('assets/frontend/img/blog/single_post_img.jpg')}}" alt="">
                      <figcaption>A photo collection samples</figcaption>
                    </figure>

                    <p>Music can help you get into a “flow state” -- losing yourself in the task at hand. Even repetitive tasks or mundane assignments seem more bearable, or even fun, when your favorite tunes are in your ears. Plus, your eyes won’t be so prone to checking the time. <a href="#">Check out these</a> and more reasons to bring your music to work in this Zing Instruments infographic below. A great piece of music is an instant mood lifter. Plenty of scientific evidence backs this up - we`re happier bunnies when listening to music.</p>

                    <blockquote><p>“Build A BIGGER Business award, a competition that recognizes businesses.”</p></blockquote>

                    <p>Nulla rhoncus orci varius purus lobortis euismod. Fusce tincidunt dictum est et rhoncus. Vivamus hendrerit congue nisi, et nisl tincida vestibulum elit tincidunt eu. Vivamus ac pharetra orci, in feugiat massa. Proin congue mauris pretium, ultricies tortor in, aliquam urna. Vivamus mi tortor, finibus a interdum ac, ultricies in elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere hendrerit ex eu scelerisque.</p>

                    <h2>Grow Your Website's Traffic</h2>
                    
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion are quickened, charged. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion.</p>

                    <!-- tags -->
                    <div class="entry__tags">
                      Tags: <a href="#" rel="tag">mobile</a><a href="#" rel="tag">gadgets</a><a href="#" rel="tag">satelite</a>
                    </div> <!-- end tags -->

                  </div> <!-- end entry article -->
                </div>

                <!-- Newsletter -->
                <div class="newsletter-wide widget widget_mc4wp_form_widget">
                  <div class="newsletter-wide__text">
                    <h4 class="widget-title">Subscribe for Neotech news and receive daily updates</h4>
                  </div>

                  <div class="newsletter-wide__form">
                    <form class="mc4wp-form" method="post">
                      <div class="mc4wp-form-fields">
                        <i class="mc4wp-form-icon ui-email"></i>
                        <input type="email" name="EMAIL" placeholder="Your email" required="">
                        <input type="submit" class="btn btn-md btn-color" value="Subscribe">
                      </div>
                    </form>
                  </div>
                </div>

                <!-- Related Posts -->
                <div class="related-posts">
                  <h5 class="related-posts__title">You might like</h5>
                  <div class="row row-20">
                    <div class="col-md-4">
                      <article class="related-posts__entry entry">
                        <a href="single-post.html">
                          <div class="thumb-container">
                            <img src="{{ asset('assets/frontend/img/blog/grid_post_img_3.jpg')}}" data-src="{{ asset('assets/frontend/img/blog/grid_post_img_3.jpg')}}" alt="" class="entry__img lazyload">
                          </div>
                        </a>
                        <div class="related-posts__text-holder">   
                          <h2 class="related-posts__entry-title">
                            <a href="single-post.html">VR and playable on a console makes it a great option to PC related VR headsets</a>
                          </h2>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-4">
                      <article class="related-posts__entry entry">
                        <a href="single-post.html">
                          <div class="thumb-container">
                            <img src="{{ asset('assets/frontend/img/blog/grid_post_img_4.jpg')}}" data-src="{{ asset('assets/frontend/img/blog/grid_post_img_4.jpg')}}" alt="" class="entry__img lazyload">
                          </div>
                        </a>
                        <div class="related-posts__text-holder">   
                          <h2 class="related-posts__entry-title">
                            <a href="single-post.html">NASA is best known for building rockets and spacecraft</a>
                          </h2>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-4">
                      <article class="related-posts__entry entry">
                        <a href="single-post.html">
                          <div class="thumb-container">
                            <img src="{{ asset('assets/frontend/img/blog/grid_post_img_5.jpg')}}" data-src="{{ asset('assets/frontend/img/blog/grid_post_img_5.jpg')}}" alt="" class="entry__img lazyload">
                          </div>
                        </a>
                        <div class="related-posts__text-holder">   
                          <h2 class="related-posts__entry-title">
                            <a href="single-post.html">Digital cameras are always changing, adding new features</a>
                          </h2>
                        </div>
                      </article>
                    </div>
                  </div>
                </div> <!-- end related posts -->                

              </article> <!-- end standard post -->



              <!-- Comments -->
              <div class="entry-comments mt-30">
                <h5 class="entry-comments__title">3 comments</h5>

                <ul class="comment-list">
                  <li class="comment">  
                    <div class="comment-body">
                      <div class="comment-avatar">
                        <img alt="" src="{{ asset('assets/frontend/img/blog/comment_1.png')}}">
                      </div>
                      <div class="comment-text">
                        <h6 class="comment-author">Joeby Ragpa</h6>
                        <div class="comment-metadata">
                          <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                        </div>                      
                        <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                        <a href="#" class="comment-reply">Reply</a>
                      </div>
                    </div>

                    <ul class="children">
                      <li class="comment">
                        <div class="comment-body">
                          <div class="comment-avatar">
                            <img alt="" src="{{ asset('assets/frontend/img/blog/comment_2.png')}}">
                          </div>
                          <div class="comment-text">
                            <h6 class="comment-author">Alexander Samokhin</h6>
                            <div class="comment-metadata">
                              <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>  
                            </div>                      
                            <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                            <a href="#" class="comment-reply">Reply</a>
                          </div>
                        </div>
                      </li> <!-- end reply comment -->
                    </ul>

                  </li> <!-- end 1-2 comment -->

                  <li>
                    <div class="comment-body">
                      <div class="comment-avatar">
                        <img alt="" src="{{ asset('assets/frontend/img/blog/comment_3.png')}}">
                      </div>
                      <div class="comment-text">
                        <h6 class="comment-author">Chris Root</h6>
                        <div class="comment-metadata">
                          <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>  
                        </div>                      
                        <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                        <a href="#" class="comment-reply">Reply</a>
                      </div>
                    </div>
                  </li> <!-- end 3 comment -->

                </ul>         
              </div> <!-- end comments -->


              <!-- Comment Form -->
              <div id="respond" class="comment-respond">
                <h5 class="comment-respond__title">Post a comment</h5>
                <p class="comment-respond__subtitle">Your email address will not be published. Required fields are marked*</p>
                <form id="form" class="comment-form" method="post" action="#">
                  <p class="comment-form-comment">
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" rows="5" required="required"></textarea>
                  </p>

                  <div class="row row-20">
                    <div class="col-lg-4">
                      <label for="name">Name*</label>
                      <input name="name" id="name" type="text">
                    </div>
                    <div class="col-lg-4">
                      <label for="email">Email*</label>
                      <input name="email" id="email" type="email">
                    </div>
                    <div class="col-lg-4">
                      <label for="email">Website</label>
                      <input name="website" id="website" type="text">
                    </div>
                  </div>

                  <p class="comment-form-submit">
                    <input type="submit" class="btn btn-lg btn-color btn-button" value="Post Comment" id="submit-message">
                  </p>
                  
                </form>
              </div> <!-- end comment form -->

            </div> <!-- end col -->
            
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
      
          </div> <!-- end row -->
        </div> <!-- end container -->
      </section>

@endsection