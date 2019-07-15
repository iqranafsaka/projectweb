<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 02:21:35 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>QuantumPro | Dashboard</title>
	<!-- ================== GOOGLE FONTS ==================-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<!-- ======================= GLOBAL VENDOR STYLES ========================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/vendor/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/metismenu/dist/metisMenu.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/switchery-npm/index.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
	<!-- ======================= LINE AWESOME ICONS ===========================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/icons/line-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/icons/simple-line-icons.css')}}">
	<!-- ======================= DRIP ICONS ===================================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/icons/dripicons.min.css')}}">
	<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/icons/material-design-iconic-font.min.css')}}">
	<!-- ======================= PAGE VENDOR STYLES ===========================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
	<!-- ======================= GLOBAL COMMON STYLES ============================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/common/main.bundle.css')}}">
	<!-- ======================= LAYOUT TYPE ===========================-->
	<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/layouts/vertical/core/main.css')}}">
	<!-- ======================= MENU TYPE ===========================-->
		<link rel="stylesheet" href="{{ asset('assets/backend/assets/css/layouts/vertical/menu-type/default.css')}}">
	<!-- ======================= THEME COLOR STYLES ===========================-->
    <link rel="stylesheet" href="{{ asset('assets/backend/assets/css/layouts/vertical/themes/theme-a.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/stylecustom.css')}}">
    @yield('css')
</head>
<body>
	<!-- START APP WRAPPER -->
	<div id="app">
		<!-- START MENU SIDEBAR WRAPPER -->
        
        {{-- SCREW THIS I DELETED SIDEBAR --}}

		<!-- END MENU SIDEBAR WRAPPER -->
		<div class="content-wrapper">
			<!-- START LOGO WRAPPER -->
			<nav class="top-toolbar navbar navbar-mobile navbar-tablet">
				<ul class="navbar-nav nav-left">
					<li class="nav-item">
						<a href="javascript:void(0)" data-toggle-state="aside-left-open">
							<i class="icon dripicons-align-left"></i>
						</a>
					</li>
				</ul>
				<ul class="navbar-nav nav-center site-logo">
					<li>
						<a href="index-2.html">
							<div class="logo_mobile">
								<svg id="logo_mobile" width="27" height="27" viewBox="0 0 54.03 56.55">
									<defs>
										<linearGradient id="logo_background_mobile_color">
										<stop class="stop1" offset="0%"/>
										<stop class="stop2" offset="50%"/>
										<stop class="stop3" offset="100%"/>
									</linearGradient>
									</defs>
									<path id="logo_path_mobile" class="cls-2" d="M90.32,0c14.2-.28,22.78,7.91,26.56,18.24a39.17,39.17,0,0,1,1,4.17l.13,1.5A15.25,15.25,0,0,1,118.1,29v.72l-.51,3.13a30.47,30.47,0,0,1-3.33,8,15.29,15.29,0,0,1-2.5,3.52l.06.07c.57.88,1.43,1.58,2,2.41,1.1,1.49,2.36,2.81,3.46,4.3.41.55,1,1,1.41,1.56.68.92,1.16,1.89.32,3.06-.08.12-.08.24-.19.33a2.39,2.39,0,0,1-2.62.07,4.09,4.09,0,0,1-.7-.91c-.63-.85-1.41-1.61-2-2.48-1-1.42-2.33-2.67-3.39-4.1a16.77,16.77,0,0,1-1.15-1.37c-.11,0-.06,0-.13.07-.41.14-.65.55-1,.78-.72.54-1.49,1.08-2.24,1.56A29.5,29.5,0,0,1,97.81,53c-.83.24-1.6.18-2.5.39a16.68,16.68,0,0,1-3.65.26H90.58L88,53.36A36.87,36.87,0,0,1,82.71,52a27.15,27.15,0,0,1-15.1-14.66c-.47-1.1-.7-2.17-1.09-3.39-1-3-1.45-8.86-.51-12.38a29,29,0,0,1,2.56-7.36c3.56-6,7.41-9.77,14.08-12.57a34.92,34.92,0,0,1,4.8-1.3Zm.13,4.1c-.45.27-1.66.11-2.24.26a32.65,32.65,0,0,0-4.74,1.37A23,23,0,0,0,71,18.7,24,24,0,0,0,71.13,35c2.78,6.66,7.2,11.06,14.21,13.42,1.16.39,2.52.59,3.84.91l1.47.07a7.08,7.08,0,0,0,2.43,0H94c.89-.21,1.9-.28,2.75-.46V48.8A7.6,7.6,0,0,1,95.19,47c-.78-1-1.83-1.92-2.62-3s-1.86-1.84-2.62-2.87c-2-2.7-4.45-5.1-6.66-7.62-.57-.66-1.14-1.32-1.66-2-.22-.29-.59-.51-.77-.85a2.26,2.26,0,0,1,.58-2.61,2.39,2.39,0,0,1,2.24-.2,4.7,4.7,0,0,1,1.22,1.3l.51.46c.5.68,1,1.32,1.6,2,2.07,2.37,4.38,4.62,6.27,7.17.94,1.26,2.19,2.3,3.14,3.58l1,1c.82,1.1,1.8,2,2.62,3.13.26.35.65.6.9,1A23.06,23.06,0,0,0,105,45c.37-.27,1-.51,1.15-1h-.06c-.18-.51-.73-.83-1-1.24-.74-1-1.64-1.88-2.37-2.87-1.8-2.44-3.89-4.6-5.7-7-.61-.82-1.44-1.52-2-2.34-.85-1.16-3.82-3.73-1.54-5.41a2.27,2.27,0,0,1,1.86-.26c.9.37,2.33,2.43,2.94,3.26s1.27,1.31,1.79,2c1.44,1.95,3.11,3.66,4.54,5.6.41.55,1,1,1.41,1.56.66.89,1.46,1.66,2.11,2.54.29.39.61,1.06,1.09,1.24.54-1,1.34-1.84,1.92-2.8a25.69,25.69,0,0,0,2.5-6.32c1.27-4.51.32-10.37-1.15-13.81A22.48,22.48,0,0,0,100.75,5.94a35.12,35.12,0,0,0-6.08-1.69A20.59,20.59,0,0,0,90.45,4.11Z" transform="translate(-65.5)" fill="url(#logo_background_mobile_color)"/>
								</svg>
							</div>
							<span class="brand-text">QuantumPro</span>
						</a>
					</li>
				</ul>
				<ul class="navbar-nav nav-right">
					<li class="nav-item">
						<a href="javascript:void(0)" data-toggle-state="mobile-topbar-toggle">
							<i class="icon dripicons-dots-3 rotate-90"></i>
						</a>
					</li>
				</ul>
			</nav>
			<!-- END LOGO WRAPPER -->
			<!-- START TOP TOOLBAR WRAPPER -->
            
            @include('layouts.backend.navbar')

			<!-- END TOP TOOLBAR WRAPPER -->
			<div class="content">
				<!--START PAGE HEADER -->
				<header class="page-header">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h1>Dashboard</h1>
						</div>
						<ul class="actions top-right">
							<li class="dropdown">
								<a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
									<i class="la la-ellipsis-h"></i>
								</a>
								<div class="dropdown-menu dropdown-icon-menu dropdown-menu-right">
									<div class="dropdown-header">
										Quick Actions
									</div>
									<a href="#" class="dropdown-item">
										<i class="icon dripicons-clockwise"></i> Refresh
									</a>
									<a href="#" class="dropdown-item">
										<i class="icon dripicons-gear"></i> Manage Widgets
									</a>
									<a href="#" class="dropdown-item">
										<i class="icon dripicons-cloud-download"></i> Export
									</a>
									<a href="#" class="dropdown-item">
										<i class="icon dripicons-help"></i> Support
									</a>
								</div>
							</li>
						</ul>
					</div>
				</header>
				<!--END PAGE HEADER -->
                <!--START PAGE CONTENT -->
                
                @yield('content')

                <!--END PAGE CONTENT -->
            </div>
            <!-- SIDEBAR QUICK PANNEL WRAPPER -->
            
            <!-- END SIDEBAR QUICK PANNEL WRAPPER -->
        </div>
    </div>
    <!-- END CONTENT WRAPPER -->
        <!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
        <script src="{{ asset('assets/backend/assets/vendor/modernizr/modernizr.custom.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('js/kategori.js')}}"></script> {{-- JSON DATA KATEGORI --}}
		<script type="text/javascript" src="{{ asset('js/artikel.js')}}"></script> {{-- JSON DATA Artikel --}}
		<script type="text/javascript" src="{{ asset('js/tag.js')}}"></script> {{-- JSON DATA TAG --}}
        <script src="{{ asset('assets/backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/js-storage/js.storage.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/js-cookie/src/js.cookie.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/pace/pace.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/metismenu/dist/metisMenu.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/switchery-npm/index.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
        <script src="{{ asset('assets/backend/assets/vendor/countup.js/dist/countUp.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/chart.js/dist/Chart.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/flot/jquery.flot.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/flot/jquery.flot.time.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/flot.curvedlines/curvedLines.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <!-- ================== GLOBAL APP SCRIPTS ==================-->
        <script src="{{ asset('assets/backend/assets/js/global/app.js')}}"></script>
        <!-- ================== PAGE LEVEL SCRIPTS ==================-->
        <script src="{{ asset('assets/backend/assets/js/components/countUp-init.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/cards/counter-group.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/cards/recent-transactions.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/cards/monthly-budget.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/cards/users-chart.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/cards/bounce-rate-chart.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/cards/session-duration-chart.js')}}"></script>
        <script> (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-46627904-1', 'authenticgoods.co');
    ga('send', 'pageview');
    </script>
	@yield('js')
	@stack('scripts')
    </body>
    
<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 02:27:43 GMT -->
</html>
