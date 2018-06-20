<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Seelim" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />

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
    
    <title>@yield('page-title') - {{ settings('app_name') }}</title>

</head>

<body class="stretched">

<div class="modal-on-load" data-target="#myModal1"></div>

<!-- Modal -->
<div class="modal1 mfp-hide popup" id="myModal1" style="max-width: 900px; margin:auto">
	<div class="block divcenter" >
		<div class="row">
			<div class="col-md-8 signup-tabs">

				<div class="tabs clearfix" id="tabs">
				
					<ul class="tab-nav clearfix">
						<li>
							<a href="#tab-1">Igniter</a>
						</li>
						<li>
							<a href="#tab-3">Member</a>
						</li>
					</ul>
				
					<div class="tab-container">
				
						<div class="tab-content clearfix" id="tab-1">
							<div class="col-md-12" style="text-align: center">
								<h4>
									Find Your Dream Team</h4>
								<p>Lrorem ipsum donor fminet </p>
							</div>
							<div class="row">
								<div class="col-md-12" style="padding: 30px;padding-left:50px; padding-right: 50px; ">
									<form action="">
										<div class="form-group">
											<label for="fullname">Full Name</label>
											<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Full Name">
										</div>
										<div class="form-group">
											<label for="fullname">Email</label>
											<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Example: someone@example.com">
										</div>
										<div class="form-group">
											<label for="fullname">Password</label>
											<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Atleast 6 digits">
										</div>
										<div class="form-group">
											<label for="fullname">Where you live</label>
											<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Example: New York, US">
										</div>
										<button class="button button-circle primary">Sign up</button>
										<div style="float: right;text-align: right">
											<span class="italic">Already a Member?</span> <br>
											<u><a  href="#">LOGIN</a></u>
											
										</div>
									</form>
								</div>
							</div>
                        </div>
						<div class="tab-content clearfix" id="tab-3">
							<div class="col-md-12" style="text-align: center">
								<h4>
									Find Your Dream Team</h4>
								<p>Lrorem ipsum donor fminet </p>
							</div>
							<div class="row">
								<div class="col-md-12" style="padding: 30px;padding-left:50px; padding-right: 50px; ">
									<form action="">
										<div class="form-group">
											<label for="fullname">Full Name</label>
											<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter Full Name">
										</div>
										<div class="form-group">
											<label for="fullname">Email</label>
											<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Example: someone@example.com">
										</div>
										<div class="form-group">
											<label for="fullname">Password</label>
											<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Atleast 6 digits">
										</div>
										<div class="form-group">
											<label for="fullname">Where you live</label>
											<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Example: New York, US">
										</div>
										<button class="button button-circle primary">Sign up</button>
										<div style="float: right;text-align: right">
											<span class="italic">Already a Member?</span> <br>
											<u><a  href="#">LOGIN</a></u>
											
										</div>
									</form>
								</div>
							</div>
                        </div>                        
					</div>
				
				</div>

			</div>
			<div class="col-md-4 description">
				<h2 style="margin-top: 30px;">Why Us</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias libero magnam dolores ipsam odio iure, error explicabo quasi eos, aspernatur alias odit inventore voluptas consectetur consequatur ut nobis dolorum optio.</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias libero magnam dolores ipsam odio iure, error explicabo quasi eos, aspernatur alias odit inventore voluptas consectetur consequatur ut nobis dolorum optio.</p>
				<h2 style="  margin-top: -20px; margin-bottom: 30px;">Join Us Now !</h2>
			</div>
		</div>
		
	</div>
</div>

	<div class="body-overlay"></div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header border-full-header dark static-sticky" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">

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
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							<li><a href="#" data-href="#wrapper"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about"><div>Team Igniter</div></a></li>
							<li><a href="#" data-href="#section-works"><div>Team member</div></a></li>
							<li><a href="#" data-href="#section-services"><div>Projects</div></a></li>
							<li><a href="#" data-href="#section-blog"><div>Services</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>About Us</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax full-screen force-full-screen" style="background: #000">

			<div class="slider-parallax-inner">

				<div class="full-screen force-full-screen dark section nopadding nomargin noborder ohidden" style="background-image: url('/assets/theme/one-page/images/page/banner.jpg'); background-size: cover; background-position: center center; opacity: 1">

					<div class="container center">
						<div class="vertical-middle">
							<div class="emphasis-title">
								<div class="hexagon-container" style="color:#ffc107">
									<div style="max-width:400px; border-bottom:2px solid #ffc107; margin: 0 auto; "></div>
									<h1 style="color:#ffc107; letter-spacing: 5px">T E A M V O L V E R</h1>
									<p style="font-size: 20px; letter-spacing: 5px">A PLATFORM FOR CREATING TEAMS THAT DEVELOPE PROJECTS</p>
								</div>

								{{-- hexagon --}}
								@include('hexagon')
								{{-- hexagon --}}
								
							</div>
							<a href="#" class="button button-border button-light button-circle " data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">How It Works</a>
						</div>
					</div>

					<div class="video-wrap">
						<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
					</div>

					<a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="65" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

				</div>

			</div>

		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">

				<div id="section-about" class="center page-section">

					<div class="container clearfix">

						<div class="row">

							<div class="col-md-6" style="text-align: left">
						<h2>TEAMVOLVER IS A PLATFORM...</h2>
								
						<p>FOR CREATING TEAMS THAT DEVELOPE PROJECTS</p>

						<P>
						If you have any idea for a new project or want to be a member of an existing one, please sign in for free and start your journey.
						</P>
						
						<p class="bottommargin" style="font-size: 16px;">
							<a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="more-link">Learn more
								<i class="icon-angle-right"></i>
							</a>
						</p>
							</div>

							<div class="col-md-6" style="text-align: left">
								<h4>Simple Signup</h4>
								<blockquote>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quod aperiam tempore, quos laboriosam, veniam velit consequatur voluptate quam explicabo ad blanditiis tempora exercitationem delectus itaque perferendis impedit dolorum voluptates!</p>

								</blockquote>
							
								<h4>Simple Signup</h4>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quod aperiam tempore, quos laboriosam, veniam velit consequatur voluptate quam explicabo ad blanditiis tempora exercitationem delectus itaque perferendis impedit dolorum voluptates!</p>
							
								<div class="clear"></div>
							</div>
						</div>

					<div class="clear"></div>



                    </div>
                    
                         {{-- section # how it works --}}
        <div class="container-fluid" id="howWeWork">
            <div class="background-image"></div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">

						<div style="left:calc(100% + 30px); top:-25px; font-size:12px; line-height:15px;">
							<h2>1</h2>
							<h3>POST YOUR PROJECT</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quibusdam minima esse accusantium distinctio quidem 
							</p>
						 </div>

						<div style=" top:180px; left:-10px; font-size:12px; line-height:15px; text-align:right">
							<h2>2</h2>
							<h3>POST YOUR PROJECT</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quibusdam minima esse accusantium distinctio quidem 
							</p>
						 </div>
						<div style="left:-100px; top:-15px; font-size:12px; line-height:15px;">START <br> AS IGNTER </div>
                        <i style="left:-10px; top:-10px; border:0; height:20px; width:20px; line-height:20px; font-size:9px; background:#ffc107;color:#fff" class="fa fa-play"></i>
                        <i style="right:-20px;  top:-20px" class="fa fa-file"></i>
       
                    </div>
                    <div class="col-md-2">
						
                        <i style="left:-20px; bottom:-20px; color:red;" class="fa fa-search"></i>
                        <div>

                        </div>
                    </div>
					<div class="col-md-2">

						<div style=" top:25px; left:25px; font-size:12px; line-height:15px;">
							<h2>03</h2>
							<h3>POST YOUR PROJECT</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quibusdam minima esse accusantium distinctio quidem 
							</p>
						 </div>

						<i style="left:-20px;  top:-20px; color:blue" class="fa fa-users"></i>
					</div>
					<div class="col-md-2"><i style="left:-20px; bottom:-20px; color:purple" class="fa fa-sitemap"></i>
					


						<div style=" bottom:0; left:35px; font-size:12px; line-height:15px;">
							<h2>4</h2>
							<h3>POST YOUR PROJECT</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quibusdam minima esse accusantium distinctio quidem 
							</p>
						 </div>

					</div>
					<div class="col-md-2"><i style="left:-25px; top:40px; color:lightgreen" class="fa fa-binoculars"></i>
					<div style="background:lightgreen; height:20px; width:20px !important; position: absolute;
    border-radius: 50%;
    left: -12px;
    top: -11px; border-radius:50%;"></div>

						<div style=" top:45px; left:35px; font-size:12px; line-height:15px;">
							<h2>05</h2>
							<h3>POST YOUR PROJECT</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quibusdam minima esse accusantium distinctio quidem 
							</p>
						 </div>

					</div>
				</div>  
				
                <div class="row" style="margin-top:140px">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">

						<div style="left:calc(100% + 30px); top:-25px; font-size:12px; line-height:15px;">
							<h2>01</h2>
							<h3>POST YOUR PROJECT</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quibusdam minima esse accusantium distinctio quidem 
							</p>
						 </div>

						<div style=" top:180px; left:-10px; font-size:12px; line-height:15px; text-align:right">
							<h2>02</h2>
							<h3>POST YOUR PROJECT</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quibusdam minima esse accusantium distinctio quidem 
							</p>
						 </div>
						<div style="left:-100px; top:-15px; font-size:12px; line-height:15px;">START <br> AS IGNTER </div>
                        <i style="left:-10px; top:-10px; border:0; height:20px; width:20px; line-height:20px; font-size:9px; background:#ffc107;color:#fff" class="fa fa-play"></i>
                        <i style="right:-20px;  top:-20px" class="fa fa-file"></i>
       
                    </div>
                    <div class="col-md-2">
						
                        <i style="left:-20px; bottom:-20px; color:red;" class="fa fa-search"></i>
                        <div>

                        </div>
                    </div>
					<div class="col-md-2">

						<div style=" top:25px; left:25px; font-size:12px; line-height:15px;">
							<h2>03</h2>
							<h3>POST YOUR PROJECT</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quibusdam minima esse accusantium distinctio quidem 
							</p>
						 </div>

						<i style="left:-20px;  top:-20px; color:blue" class="fa fa-users"></i>
					</div>
					<div class="col-md-2"><i style="left:-20px; bottom:-20px; color:purple" class="fa fa-sitemap"></i>
					


						<div style=" bottom:0; left:35px; font-size:12px; line-height:15px;">
							<h2>04</h2>
							<h3>POST YOUR PROJECT</h3>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quibusdam minima esse accusantium distinctio quidem 
							</p>
						 </div>
		<div style="background:lightgreen; height:20px; width:20px !important; position: absolute;
    border-radius: 50%;
    right: -12px;
    bottom: -11px; border-radius:50%;"></div>
					</div>
					
				</div>  


            </div>
{{-- section # how it works --}}

{{-- section our services --}}
<section style="background:#fff"> 

	<div class="container"  style="background:#fff">
		<div class="row" style="background:#fff; margin-top:60px;">
			<div class="col-md-12" >
				<h4>OUR SERVICES</h4>
				
				<div class="tabs tabs-bb clearfix" id="tab-9">
					
					<ul class="tab-nav clearfix">
						<li><a href="#tabs-33">LEGAL COUNSELLING</a></li>
						<li><a href="#tabs-34">LEGAL COUNSELLING</a></li>
						<li><a href="#tabs-35">INVESTORS PLATFORM</a></li>
						<li class="hidden-phone"><a href="#tabs-36">ORGANIZATIONAL DEVELOPEMENT</a></li>
					</ul>
					
					<div class="tab-container">
						
						<div class="tab-content clearfix" id="tabs-33">
							<div class="row">

							<div class="col-md-4">
							<img src="/assets/theme/one-page/images/page/banner.jpg" alt="" class="img-responsive" >
							</div>
							<div class="col-md-8" style="text-align:left">

							<h1>01</h1>
							<h3>Your Guide towards  Organizational Developement</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ad fuga facere eos voluptate. Eos ipsum quae dicta id, aliquam fugiat dolor debitis omnis. Aliquid nam autem vel laboriosam assumenda?</p>
							<button class="btn btn-primary">GET IN TOUCH</button>
							</div>
							</div>
						</div>
						<div class="tab-content clearfix" id="tabs-34">
							Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.
						</div>
						<div class="tab-content clearfix" id="tabs-35">
							<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
							Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.
						</div>
						<div class="tab-content clearfix" id="tabs-36">
							Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.
						</div>
						
					</div>
					
				</div>
				
				<div class="line"></div>
				
			</div>
		</div>
	</div>
	
</section>
	{{-- section our services --}}
	
				</div>

		

			</div>



		</section><!-- #content end -->



		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder">

			<div class="container center">
				<div class="footer-widgets-wrap">

					<div class="row divcenter clearfix" style="text-align: left;">

						<div class="col-lg-4">

							<div class="widget clearfix" >
								<img src="/assets/img/logo.png" alt="" class="img-responsive">
									<div class="clearfix" style="height: 20px;"></div>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum, ratione officiis. Nihil explicabo pariatur, sunt sint rerum quibusdam repudiandae dolores totam, adipisci ipsam, eaque neque accusamus ab omnis ducimus.
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget subscribe-widget clearfix" data-loader="button">
								<h4>Subscribe</h4>

								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="../include/subscribe.php" role="form" method="post" class="nobottommargin">
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control form-control-lg not-dark required email" placeholder="Your Email Address">
									<button class="button button-border button-circle button-light topmargin-sm" type="submit">Subscribe Now</button>
								</form>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget clearfix">
								<h4>Contact</h4>

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

<script>
	Highcharts.chart('canvas', {
			chart: {
				type: 'tilemap',
				marginTop: 15,
				height: '65%',
				backgroundColor: 'rgba(0, 0, 0, 0.0)'
			},

			subtitle: {
				text: 'Hover over tiles for details'
			},

			colors: [
				'#fed',
				'#ffddc0',
				'#ecb',
				'#dba',
				'#c99',
				'#b88',
				'#aa7577',
				'#9f6a66'
			],

			xAxis: {
				visible: false
			},

			yAxis: {
				visible: false
			},

			legend: {
				enabled: false
			},

			tooltip: {
				headerFormat: '',
				backgroundColor: 'rgba(247,247,247,0.95)',
				pointFormat: '<span style="color: {point.color}">●</span>' +
					'<span style="font-size: 13px; font-weight: bold"> {point.name}' +
					'</span><br>{point.desc}',
				style: {
					width: 150
				},
				padding: 10,
				hideDelay: 1000000
			},

			plotOptions: {
				series: {
					keys: ['x', 'y', 'name', 'desc'],
					tileShape: 'hexagon',
					dataLabels: {
						enabled: false,
						format: '{point.name}',
						color: '#000000',
						style: {
							textOutline: false
						}
					}
				}
			},

			series: [{
				name: 'Main idea',
				pointPadding: 0,
				data: [
					[5, 3, 'Main idea',
						'The main idea tile outlines the overall theme of the idea map.']
				],
				color: '#7eb'
			}, {
				name: 'Steps',
				colorByPoint: true, // Pick new color for each point from colors array
				data: [
					[4, 3, 'Step 2',
						'Describe where to move next in a short term time perspective.'],
					[5, 4, 'Step 3',
						'This can be a larger milestone, after the initial steps have been taken.'],
					[6, 3, 'Step 4',
						'Evaluate progress and readjust the course of the project.'],
					[6, 2, 'Step 6',
						'Second evaluation and readjustment step. Implement final changes.'],
					[5, 2, 'Step 7',
						'Testing and final verification step.'],
					[4, 2, 'Step 8',
						'Iterate after final testing and finalize implementation of the idea.']
				]
			}]
		}, function (chart) {
			chart.tooltip.refresh(chart.series[0].points[0]); // Show tooltip of the first point on load
		});

</script>

	<script>

		jQuery(window).on( 'load', function(){
		// alert('dsf');
			$('.node:first-child').click();
		});

	</script>


</body>
</html>