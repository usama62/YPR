<!doctype html>

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		function myfunction(){
			var prtContent = document.getElementById("print");
			var WinPrint = window.open('', '', 'left=0,top=0,width=1000,height=900');
			WinPrint.document.write(prtContent.innerHTML);
			WinPrint.document.close();
			WinPrint.focus();
			WinPrint.print();
			WinPrint.close();
		}
	</script>
</head>
<body class="jf-home jf-userlogin">
	<div class="preloader-outer">
		<div class='loader'></div>
	</div>
	<div id="jf-wrapper" class="jf-wrapper">
		<header id="jf-header" class="jf-header jf-haslayout">
			<div class="jf-topbar">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="jf-langnotification">
								<li>
									<a id="jf-languagesbutton" href="javascript:void(0);" class="jf-languagesbutton">
										<span>Eng</span>
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="jf-languagedropdown">
										<li>
											<a href="javascript:void(0);">
												<span>en</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<span>fr</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<span>ar</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="jf-notification" href="javascript:void(0);">
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
								@guest
								<div class="jf-signinarea">
									<ul class="jf-loginreg">
										<li><a href="{{url('login')}}">login</a></li>
										<li><a href="{{url('register')}}">Signup</a></li>
									</ul>
									<figure class="jf-userimg">
										<img src="{{ asset('assets/images/usrer-img.jpg')}}" alt="image description">
									</figure>
								</div>
								@else
								<div class="jf-userlogedin">
									<figure class="jf-userimg">
										@if(auth::user()->profile_image == null)
											<img src="{{ asset('assets/images/usrer-img-01.jpg') }}" alt="image description">
										@else
											<img src="{{ asset(auth::user()->profile_image) }}" alt="image description">
										@endif
									</figure>
									<div class="jf-username">
										<h3>{{ auth::user()->name }}</h3>
										<span>Sr. Creative Designer</span>
									</div>
									<nav class="jf-usernav">
										<ul>
											<li><a href="{{ url('/profile') }}"><i class="ti-briefcase"></i><span>My Profile</span></a></li>
											<li><a href="{{ url('/update-password') }}"><i class="ti-key"></i><span>Change Password</span></a></li>	
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
								@endguest
							</div>
							<ul class="jf-btnappdowld">
								<li><a href="javascript:void(0);"><img src="{{ asset('assets/images/android-img.png') }}" alt="image description"></a></li>
								<li><a href="javascript:void(0);"><img src="{{ asset('assets/images/apple-img.png') }}" alt="image description"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="jf-navigationlogoarea">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<?php 
								$logo = \App\Settings::where(['setting_name' => 'logo_settings'])->first();
							?>
							<strong class="jf-logo"><a href=""><img src="{{ $logo->setting_value }}" alt="company logo here"></a></strong>
							<div class="jf-rightarea">
								<nav id="jf-nav" class="jf-nav navbar-expand-lg navbar-toggleable-sm">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
										<i class="lnr lnr-menu"></i>
									</button>
									<div class="collapse navbar-collapse jf-navigation" id="navbarNav">
										<ul>
											<li class="menu-item-has-children page_item_has_children">
												<a href="{{  url('/home') }}">Home</a>
											</li>
											<li class="menu-item-has-children page_item_has_children">
												<a href="{{  url('/health-listing') }}">Health Topics</a>
											</li>
											<li class="menu-item-has-children page_item_has_children">
												<a href="{{  url('/disease-listing') }}">Disease</a>
											</li>
											<li class="menu-item-has-children page_item_has_children">
												<a href="{{  url('/drugs-listing') }}">Drugs & Supplements</a>
											</li>
											<li class="menu-item-has-children page_item_has_children">
												<a href="{{  url('/videos-listing') }}">Videos </a>
											</li>
											
											<!-- <li class="menu-item-has-children page_item_has_children">
												<a href="{{  url('/saved') }}">Saved</a>
											</li> -->
										
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
            @yield('content')
        
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
		
	</div>
	<script>
	$(".abcd-btn").click(function(){
		var a = $(this).data("alphabet");

		$.ajax({ 
                url: "{{ route('getdata') }}",
                data: {char : a},
                type: 'post',
                success: function(response)
                {
					console.log(response)
				}
			});
		console.log(a);
	});
	</script>
	<script>   
        $(".wish_list").click(function(){
            var item_id = $(this).data('item');
            var _token = $("input[name=_token]").val();
            console.log(item_id);
            $.ajax({ 
                url: "{{ route('saved') }}",
                data: {item_id : item_id, _token : _token},
                type: 'post',
                success: function(response)
                {
                    console.log(response);
                    if(response > 0){
                        $('#wish_list_icon_'+response).removeClass('lnr lnr-heart');
                        $('#wish_list_icon_'+response).addClass('fa fa-heart-o filled');
                        $('#wish_list_text_'+response).text('saved');
                    }
                }
            });
        });    
   </script>
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

</html>