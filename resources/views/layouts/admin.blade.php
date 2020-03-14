<!doctype html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Job Forest</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/normalize.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/fontawesome/fontawesome-all.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/prettyPhoto.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/chartist.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/chosen.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/color.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/transitions.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/dbresponsive.css')}}">
	<script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body class="jf-userlogin">
	<div class="preloader-outer">
		<div class='loader'></div>
	</div>
	<div id="jf-wrapper" class="jf-wrapper">
		<header id="jf-dashboardheader" class="jf-dashboardheader jf-haslayout">
			<div class="jf-rightarea">
				<ul class="jf-langnotification">
					<!-- <li>
						<a id="jf-languagesbutton" href="" class="jf-languagesbutton">
							<span>Eng</span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="jf-languagedropdown">
							<li>
								<a href="">
									<span>en</span>
								</a>
							</li>
							<li>
								<a href="">
									<span>fr</span>
								</a>
							</li>
							<li>
								<a href="">
									<span>ar</span>
								</a>
							</li>
						</ul>
					</li> -->
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
				<div class="jf-userlogedin">
					<figure class="jf-userimg">
						<img src="{{ asset('assets/images/usrer-img-01.jpg') }}" alt="image description">
					</figure>
					<div class="jf-username">
						<h3>Margorie Wayman</h3>
						<span>Sr. Creative Designer</span>
					</div>
					<nav class="jf-usernav">
						<ul>
							<li><a href="{{ url('/profile') }}"><i class="ti-briefcase"></i><span>My Profile</span></a></li>						
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									<i class="ti-shift-right"></i>
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- <form class="jf-formtheme jf-formsearch">
				<fieldset>
					<div class="form-group jf-inputwithicon">
						<i class="lnr lnr-magnifier"></i>
						<input type="text" name="jobtitle" class="form-control" placeholder="Job Title, Skills or Company">
					</div>
					<div class="form-group jf-inputwithicon">
						<i class="lnr lnr-map-marker"></i>
						<span class="jf-select">
							<select data-placeholder="All" name="locations">
								<option value="">Location</option>
								<option value="aberdeen">Aberdeen</option>
								<option value="aldershot">Aldershot</option>
								<option value="altrincham">Altrincham</option>
								<option value="aylesbury">Aylesbury</option>
								<option value="bamber">Bamber</option>
								<option value="bangor">Bangor</option>
								<option value="batley">Batley</option>
								<option value="bebingto">Bebingto</option>
								<option value="bedford">Bedford</option>
								<option value="birmingham">Birmingham</option>
								<option value="blackpool">Blackpool</option>
								<option value="brentwood">Brentwood</option>
								<option value="bristol">Bristol</option>
								<option value="cardiff">Cardiff</option>
								<option value="carlisle">Carlisle</option>
								<option value="crawley">Crawley</option>
								<option value="darlington">Darlington</option>
								<option value="eastleigh">Eastleigh</option>
								<option value="edinburg">Edinburg</option>
								<option value="esher">Esher</option>
								<option value="glasgow-sco">Glasgow SCO</option>
								<option value="guildford">Guildford</option>
								<option value="halesowen">Halesowen</option>
								<option value="halifax">Halifax</option>
								<option value="hamilton">Hamilton</option>
								<option value="leeds">Leeds</option>
								<option value="leicester">Leicester</option>
								<option value="liverpool">Liverpool</option>
								<option value="london">London</option>
								<option value="louisville">Louisville</option>
								<option value="manchester">Manchester</option>
								<option value="sheffield">Sheffield</option>
							</select>
						</span>
					</div>
					<div class="form-group jf-inputwithicon">
						<i class="lnr lnr-layers"></i>
						<span class="jf-select">
							<select data-placeholder="All" name="findjobs">
								<option value="">Find Jobs</option>
								<option value="Find Jobs">Find Jobs</option>
								<option value="Find Jobs">Find Jobs</option>
								<option value="Find Jobs">Find Jobs</option>
								<option value="Find Jobs">Find Jobs</option>
								<option value="Find Jobs">Find Jobs</option>
								<option value="Find Jobs">Find Jobs</option>
								<option value="Find Jobs">Find Jobs</option>
							</select>
						</span>
					</div>
					<a class="jf-btnsearch" href="javascript:void(0)"><i class="lnr lnr-magnifier"></i></a>
				</fieldset>
			</form> -->
			<!-- <div class="jf-filtertype">
				<a class="jf-advancedlink" href="javascript:void(0)"><i class="lnr lnr-magnifier"></i></a>
				<form id="jf-formsearchbar" class="jf-formtheme jf-formsearch">
					<fieldset>
						<div class="form-group jf-inputwithicon">
							<i class="lnr lnr-magnifier"></i>
							<input type="text" name="jobtitle" class="form-control" placeholder="Job Title, Skills or Company">
						</div>
						<div class="form-group jf-inputwithicon">
							<i class="lnr lnr-map-marker"></i>
							<span class="jf-select">
								<select data-placeholder="All" name="locations">
									<option value="">Location</option>
									<option value="aberdeen">Aberdeen</option>
									<option value="aldershot">Aldershot</option>
									<option value="altrincham">Altrincham</option>
									<option value="aylesbury">Aylesbury</option>
									<option value="bamber">Bamber</option>
									<option value="bangor">Bangor</option>
									<option value="batley">Batley</option>
									<option value="bebingto">Bebingto</option>
									<option value="bedford">Bedford</option>
									<option value="birmingham">Birmingham</option>
									<option value="blackpool">Blackpool</option>
									<option value="brentwood">Brentwood</option>
									<option value="bristol">Bristol</option>
									<option value="cardiff">Cardiff</option>
									<option value="carlisle">Carlisle</option>
									<option value="crawley">Crawley</option>
									<option value="darlington">Darlington</option>
									<option value="eastleigh">Eastleigh</option>
									<option value="edinburg">Edinburg</option>
									<option value="esher">Esher</option>
									<option value="glasgow-sco">Glasgow SCO</option>
									<option value="guildford">Guildford</option>
									<option value="halesowen">Halesowen</option>
									<option value="halifax">Halifax</option>
									<option value="hamilton">Hamilton</option>
									<option value="leeds">Leeds</option>
									<option value="leicester">Leicester</option>
									<option value="liverpool">Liverpool</option>
									<option value="london">London</option>
									<option value="louisville">Louisville</option>
									<option value="manchester">Manchester</option>
									<option value="sheffield">Sheffield</option>
								</select>
							</span>
						</div>
						<div class="form-group jf-inputwithicon">
							<i class="lnr lnr-layers"></i>
							<span class="jf-select">
								<select data-placeholder="All" name="findjobs">
									<option value="">Find Jobs</option>
									<option value="Find Jobs">Find Jobs</option>
									<option value="Find Jobs">Find Jobs</option>
									<option value="Find Jobs">Find Jobs</option>
									<option value="Find Jobs">Find Jobs</option>
									<option value="Find Jobs">Find Jobs</option>
									<option value="Find Jobs">Find Jobs</option>
									<option value="Find Jobs">Find Jobs</option>
								</select>
							</span>
						</div>
						<div class="form-group jf-formbtnarea">
							<a class="jf-btnsearch" href="javascript:void(0)"><i class="lnr lnr-magnifier"></i></a>
							<a id="jf-closebar" class="jf-closebar" href="javascript:void(0)"><i class="lnr lnr-cross"></i></a>
						</div>
					</fieldset>
				</form>
			</div> -->
			<div id="jf-sidebarwrapper" class="jf-sidebarwrapper">
				<a id="jf-btnmenutoggle" href="" class="jf-btnmenutoggle"><i class="lnr lnr-menu"></i></a>
				<div class="jf-verticalscrollbar">
					<div class="jf-logoarea">
						<a class="jf-logoicon" href=""><img src="{{ asset('assets/images/logo-icon.png')}}" alt="imagedescription" class="mCS_img_loaded"></a>
						<strong class="jf-logo"><a href=""><img src="{{ asset('assets/images/logow.png')}}" alt="image description" class="mCS_img_loaded"></a></strong>
					</div>
					<nav id="jf-dashboardnav" class="jf-dashboardnav">
						<ul>
							<li class="jf-active jf-insightesnoti jf-notificationicon current-menu-item">
								<a href="dashboard.html">
									<i class="ti-user"></i>
									<span> Users</span>
								</a>
							</li>
							<li class="jf-profilenoti jf-notificationicon">
								<a href="">
									<i class="ti-image"></i>
									<span>Photos</span>
								</a>
							</li>
							<li class="jf-myresumenoti jf-notificationicon">
								<a href="">
									<i class="ti-video-camera"></i>
									<span>Videos</span>
								</a>
							</li>						
						</ul>
					</nav>
					<div id="weather"></div>
				</div>
				<a href="{{ route('logout') }}"
					class="jf-btnlogout"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					<i class="ti-power-off"></i>
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		
        @yield('content')
		<footer id="jf-footer" class="jf-footer jf-haslayout">
			<nav class="jf-addnav">
				<ul>
					<li><a href="">Listing Policy</a></li>
					<li><a href="">Terms of Use</a></li>
					<li><a href="">Privacy Policy</a></li>
				</ul>
			</nav>
			<p class="jf-copyrights">Copyright © 2019 <span>Job Forest.</span> All Rights Reserved.</p>
		</footer>
		
	</div>
	
	<script src="{{ asset('assets/js/vendor/jquery-3.3.1.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.basictable.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sortable.js') }}"></script>
	<script src="{{ asset('assets/js/countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.collapse.js') }}"></script>
	<script src="{{ asset('assets/js/circle-progress.js') }}"></script>
	<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
	<script src="{{ asset('assets/js/scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.js') }}"></script>
	<script src="{{ asset('assets/js/prettyPhoto.js') }}"></script>
	<script src="{{ asset('assets/js/chartist.js') }}"></script>
	<script src="{{ asset('assets/js/appear.js') }}"></script>
	<script src="{{ asset('assets/js/gmap3.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script>
		new Chartist.Line('#jf-viewchart', {
			labels: ['Week 01', 'Week 02', 'Week 03', 'Week 04', 'Week 05'],
			series: [
				[0, 100, 200, 300, 400, 500, 600, 700],
				]
			}, {
			fullWidth: true,
			chartPadding: {
			right: 40
			}
		});
	</script>
</body>

</html>