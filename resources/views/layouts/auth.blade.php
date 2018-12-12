<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Seelim" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

	<script>
		 window.loggedIn = {{\Auth::guest()?'false':'true'}};
	</script>
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=IM+Fell+Double+Pica" rel="stylesheet">

	<link rel="stylesheet" href="/assets/theme/style.css" type="text/css" />

	<!-- One Page Module Specific Stylesheet -->
	<link rel="stylesheet" href="/assets/theme/one-page/onepage.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="/assets/theme/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="/assets/theme/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/assets/theme/one-page/css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="/assets/theme/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/assets/theme/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="/assets/theme/one-page/css/fonts.css" type="text/css" />

    <link rel="stylesheet" href="/assets/theme/css/responsive.css" type="text/css" />
    
    {!! HTML::style('assets/css/app.css') !!}
    {!! HTML::style('assets/css/fontawesome-all.min.css') !!}
	<link rel="stylesheet" href="/assets/theme/custom.css" type="text/css" />


	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<style>
		#header-wrap{
			border: 0 !important;
		}
	</style>
	<!-- Document Title
    ============================================= -->
    
    <title>@yield('page-title') {{ settings('app_name') }}</title>

</head>

<body class="stretched" >

@if(Auth::guest())
<div id="loginModal" class="modal fade popup" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-body block divcenter">
		        <a class="close" data-dismiss="modal" style="right: 0px; top:0; position: absolute; color:#fff; z-index: 9">&times;</a>

		@include('register')
		@include('login')

      </div>

    </div>

  </div>
</div>
@endif
	<div class="body-overlay"></div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->

		<header id="header" class="@if(Request::path() != "/" && Request::path() != 'login') sticky-header not-dark @endif full-header transparent-header border-full-header dark static-s" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo	
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="/assets/img/logo.png"><img src="/assets/img/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="/assets/img/logo.png"><img src="/assets/img/logo.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					@include('partials.nav')

				</div>

			</div>

		</header><!-- #header end -->

		@yield('content')
		<!-- Slider
		============================================= -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder">

			<div class="container center">
				<div class="footer-widgets-wrap">

					<div class="row divcenter clearfix" style="text-align: left;">

						<div class="col-lg-4">

							<div class="widget clearfix" >
								<img src="/assets/img/logo.png" alt="" class="img-responsive" style="margin-top:-55px; display:block">
								
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum, ratone					
								</div>


						</div>

						<div class="col-lg-4">

							<div class="widget subscribe-widget clearfix" data-loader="button">
								<h4>Support</h4>

								<div class="widget-subscribe-form-result"></div>
								<ul>
									<li><a href="#">Help Center</a></li>
									<li><a href="#">Get Started</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget clearfix">
								<h4>About Us</h4>

								<p class="lead">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</p>

								<div class="center topmargin-sm">
									<a href="#" class="social-icon inline-block noborder si-small si-facebook" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-twitter" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-github" title="Github">
										<i class="icon-github"></i>
										<i class="icon-github"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-pinterest" title="Pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>

			<div id="copyrights">
				<div class="container center clearfix">
					Copyright TeamVolver {{date('Y')}} | All Rights Reserved
				</div>
			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	<!-- External JavaScripts
		

	============================================= -->
	<script src="/assets/theme/js/jquery.js"></script>
	<script src="/assets/theme/js/plugins.js"></script>

	<script src="/assets/js/app.js"></script>
	<!-- Google Map JavaScripts
	============================================= -->
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script src="/assets/theme/js/jquery.gmap.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="/assets/theme/js/functions.js"></script>

<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/modules/tilemap.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/offline-exporting.js"></script>



@yield('scripts')



	<script>

		jQuery(window).on( 'load', function(){
		// alert('dsf');
			$('.node:first-child').click();
		});

	</script>


</body>
</html>