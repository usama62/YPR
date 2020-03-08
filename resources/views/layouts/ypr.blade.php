<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Yemeny Pharmaceutical Reference</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/fontawesome/fontawesome-all.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/prettyPhoto.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/chartist.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/transitions.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>
<body class="jf-home jf-userlogin">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Preloader Start
	*************************************-->
	<div class="preloader-outer">
		<div class='loader'></div>
	</div>
	<!--************************************
			Preloader End
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="jf-wrapper" class="jf-wrapper">
	
	
		<!--************************************
				Header Start
		*************************************-->
		<header id="jf-header" class="jf-header jf-haslayout">
			<div class="jf-topbar">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="jf-langnotification">
								<li>
									<a id="jf-languagesbutton" href="" class="jf-languagesbutton">
										<span>Join Now</span>
										<i class="fa fa-angle-down"></i>
									</a>
								</li>
								<li>
									<a class="jf-notification" href="">
										<span class="jf-notificationtag">04</span>
										<i class="lnr lnr-earth"></i>
									</a>
									<ul class="jf-dropdownmenu">
										<li><p>Consectetur adipisicing elit, sed domod tempor incididunt <em>- June 27, 2019</em></p></li>
										<li><p>Consectetur adipisicing elit, sed domod tempor incididunt</p></li>
										<li><p>Consectetur adipisicing elit, sed domod tempor incididunt</p></li>
										<li><p>Consectetur adipisicing elit, sed domod tempor incididunt</p></li>
										<li><p>Consectetur adipisicing elit, sed domod tempor incididunt</p></li>
										<li><p>Consectetur adipisicing elit, sed domod tempor incididunt</p></li>
									</ul>
								</li>
							</ul>
							<div class="jf-userloginreg">
							
								<div class="jf-signinarea">
									<ul class="jf-loginreg">
										<li><a href="">login</a></li>
										<li><a href="">Signup</a></li>
									</ul>
									<figure class="jf-userimg">
										<img src="{{ asset('assets/images/usrer-img.jpg') }}" alt="image description">
									</figure>
								</div>
								
								<div class="jf-userlogedin">
									<figure class="jf-userimg">
										<img src="{{ asset('assets/images/usrer-img-01.jpg') }}" alt="image description">
									</figure>
									@if (Auth::guest())
									<div class="jf-username">
										<h3></h3>
										<span>Sr. Specialist</span>
									</div>
									@else
									<div class="jf-username">
										<h3>{{ auth::user()->name }}</h3>
										<span>Sr. Specialist</span>
									</div>
									@endif
									<nav class="jf-usernav">
										<ul>
											<li><a href="dashboard-myprofile.html"><i class="ti-briefcase"></i><span>My Profile</span></a></li>
											<li><a class="dropdown-item" href="{{ route('logout') }}"
												onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
												<i class="ti-shift-right"></i><span>Logout</span></a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
												</form>
										</li>
										</ul>
									</nav>
								</div>
								
								
								
							</div>
							<ul class="jf-btnappdowld">
								<li><a href=""><img src="{{ asset('assets/images/android-img.png') }}" alt="image description"></a></li>
								<li><a href=""><img src="{{ asset('assets/images/apple-img.png') }}" alt="image description"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="jf-navigationlogoarea">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="jf-logo"><a href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}" alt="company logo here"></a></strong>
							<div class="jf-rightarea">
								<nav id="jf-nav" class="jf-nav navbar-expand-lg navbar-toggleable-sm">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
										<i class="lnr lnr-menu"></i>
									</button>
									<div class="collapse navbar-collapse jf-navigation" id="navbarNav">
										<ul>
										
											<li class="menu-item-has-children page_item_has_children">
												<a href="">Our Story<em>Text Here</em>
												</a>
											</li>
											
											<li class="menu-item-has-children page_item_has_children">
												<a href="">For Doctors<em>Text Here</em>
												</a>
											</li>
											
																						<li class="menu-item-has-children page_item_has_children">
												<a href="">For Patients<em>Text Here</em>
												</a>
											</li>
											
																						<li class="menu-item-has-children page_item_has_children">
												<a href="">Common F.A.Q<em>Text Here</em>
												</a>
											</li>

										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
            @yield('content')
        <!--************************************
				Footer Start
		*************************************-->
		<footer id="jf-footer" class="jf-footer jf-haslayout">
			<div class="jf-footerbottom">
				<a class="jf-btnscrolltop" href=""><i class="fa fa-angle-double-up"></i></a>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p class="jf-copyrights">Copyright © 2020 <span>Yemeny Pharmaceutical Reference.</span> All Rights Reserved.</p>
							<nav class="jf-addnav">
								<ul>
									<li><a href="">Privacy Policy</a></li>
									<li><a href="">Report User</a></li>
									<li><a href="">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="{{ asset('assets/js/vendor/jquery-3.3.1.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/jquery-library.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/circle-progress.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.basictable.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sortable.js') }}"></script>
	<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
	<script src="{{ asset('assets/js/scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.js') }}"></script>
	<script src="{{ asset('assets/js/prettyPhoto.js') }}"></script>
	<script src="{{ asset('assets/js/chartist.js') }}"></script>
	<script src="{{ asset('assets/js/appear.js') }}"></script>
	<script src="{{ asset('assets/js/gmap3.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from amentotech.com/htmls/jobforest/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 21:48:06 GMT -->
</html>