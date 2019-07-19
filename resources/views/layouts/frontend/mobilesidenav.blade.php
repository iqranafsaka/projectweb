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
          <a href="/" class="sidenav__menu-link">Home</a>
        </li>

        <li>
          <a href="/community" class="sidenav__menu-link">Community</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="/indexcomu" class="sidenav__menu-link">Home</a></li>
            <li><a href="/discussion" class="sidenav__menu-link">Discussion</a></li>
          </ul>
        </li>
      
        <li>
          <a href="/posts" class="sidenav__menu-link">Posts</a>
        </li>
        
        <li>
          <a href="/about" class="sidenav__menu-link">About Us</a>
        </li>
      </ul>
    </nav>

    <div class="socials sidenav__socials "> 
      <a class="social-facebook" href="https://web.facebook.com/nonocheese" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social-twitter" href="https://twitter.com/Hairoken" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      {{-- <a class="social-youtube" href="#" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a> --}}
    </div>
  </header> <!-- end mobile sidenav -->
