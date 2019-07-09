<nav class="top-toolbar navbar navbar-desktop flex-nowrap">
    <!-- START LEFT DROPDOWN MENUS -->
    <ul class="navbar-nav nav-left">
        <li class="nav-item nav-text dropdown dropdown-menu-md">
            <a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span>
                    Dropdown
                </span>
                <i class="la la-angle-down menu-arrow-down"></i>
            </a>
            <div class="dropdown-menu menu-icons dropdown-menu-left">
                <div class="form-group form-filter">
                    <input type="text" placeholder="Filter location..." class="form-control filter-input" data-search-trigger="open">
                    <i data-q-action="clear-filter" class="icon dripicons-cross clear-filter"></i>
                    <ul class="list-reset filter-list" data-scroll="minimal-dark">
                        <li><a class="dropdown-item" href="{{url('tag')}}">Tag</a></li>
                        <li><a class="dropdown-item" href="{{url('kategori')}}">Kategori</a></li>
                        <li> <a class="dropdown-item" href="#">Artikel</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <!-- START MEGA MENU -->
        
        {{-- DELETED --}}

        <!-- END MEGA MENU -->
    </ul>
    <!-- END LEFT DROPDOWN MENUS -->
    <!-- START RIGHT TOOLBAR ICON MENUS -->
    <ul class="navbar-nav nav-right">
        <li class="nav-item dropdown">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('assets/backend/assets/img/avatars/1.jpg')}}" class="w-35 rounded-circle" alt="Albert Einstein">
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                <div class="dropdown-header pb-3">
                    <div class="media d-user">
                        <img class="align-self-center mr-3 w-40 rounded-circle" src="{{ asset('assets/backend/assets/img/avatars/1.jpg')}}" alt="Albert Einstein">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">Albert Einstein</h5>
                            <span>support@authenticgoods.co</span>
                        </div>
                    </div>
                </div>
                <a class="dropdown-item" href="apps.messages.html"><i class="icon dripicons-mail"></i> Message <span class="badge badge-accent rounded-circle w-15 h-15 p-0 font-size-10">4</span></a>
            <a class="dropdown-item" href="pages.profile.html"><i class="icon dripicons-user"></i> Profile</a>
                <a class="dropdown-item" href="pages.my-account.html"><i class="icon dripicons-gear"></i> Account Settings </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="icon dripicons-lock"></i> Lock Account</a>
                <a class="dropdown-item" href="auth.sign-in.html"><i class="icon dripicons-lock-open"></i> Sign Out</a>
            </div>
        </li>
    </ul>
    <!-- END RIGHT TOOLBAR ICON MENUS -->
    <!--START TOP TOOLBAR SEARCH -->
    <form role="search" action="http://www.authenticgoods.co/themes/quantum-pro/demos/demo1/pages.search.html" class="navbar-form">
        <div class="form-group">
            <input type="text" placeholder="Search and press enter..." class="form-control navbar-search" autocomplete="off">
            <i data-q-action="close-site-search" class="icon dripicons-cross close-search"></i>
        </div>
        <button type="submit" class="d-none">Submit</button>
    </form>
    <!--END TOP TOOLBAR SEARCH -->
</nav>