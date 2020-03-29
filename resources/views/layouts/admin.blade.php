<!doctype html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Yemeny Pharmaceutical Reference</title>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  	tinymce.init({
		selector:'textarea',
		branding: false,
		menubar:false,
		// statusbar: false,
	});
	  </script>
</head>
<body class="jf-userlogin">
	<div class="preloader-outer">
		<div class='loader'></div>
	</div>
	<div id="jf-wrapper" class="jf-wrapper">
		<header id="jf-dashboardheader" class="jf-dashboardheader jf-haslayout">
			<div class="jf-rightarea">
				<ul class="jf-langnotification">
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
						@if(auth::user()->profile_image != null)
							<img src="{{ asset(auth::user()->profile_image)}}" alt="image description">
						@else
							<img src="{{ asset('assets/images/default-user-profile-image.png')}}" alt="image description">
						@endif
					</figure>
					<div class="jf-username">
						<h3>{{ auth::user()->name }}</h3>
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
			<div id="jf-sidebarwrapper" class="jf-sidebarwrapper">
				<a id="jf-btnmenutoggle" href="" class="jf-btnmenutoggle"><i class="lnr lnr-menu"></i></a>
				<div class="jf-verticalscrollbar">
					<div class="jf-logoarea">
						<a class="jf-logoicon" href=""><img src="{{ asset('assets/images/logo-icon.png')}}" alt="imagedescription" class="mCS_img_loaded"></a>
						<strong class="jf-logo"><a href=""><img src="{{ asset('assets/images/logo.png')}}" alt="image description" class="mCS_img_loaded"></a></strong>
					</div>
					<nav id="jf-dashboardnav" class="jf-dashboardnav">
						<ul>
							@if(Auth::User()->role == 1)
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="ti-user"></i><span>Users</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create-users') }}"><span>Create User</span></a></li>
									<li><a href="{{ url('/manage-users ') }}"><span>Manage Users</span></a></li>
								</ul>
							</li>
							@endif
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="ti-plus"></i><span>Drugs</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create/drugs') }}"><span>Create</span></a></li>
									<li><a href="{{ url('/drugs') }}"><span>Manage</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="ti-pulse"></i><span>Health</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create/health') }}"><span>Create</span></a></li>
									<li><a href="{{ url('/health') }}"><span>Manage</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="ti-widget"></i><span>Disease</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create/disease') }}"><span>Create</span></a></li>
									<li><a href="{{ url('/disease') }}"><span>Manage</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="ti-image"></i><span>Photos</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/upload-photos') }}"><span>Upload Photos</span></a></li>
									<li><a href="{{ url('/photos') }}"><span>Manage Photos</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="ti-video-camera"></i><span>Videos</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/upload-videos') }}"><span>Upload Videos</span></a></li>
									<li><a href="{{ url('/videos') }}"><span>Manage Videos</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="ti-layout-grid2"></i><span>Categories</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create-category') }}"><span>Create Categories</span></a></li>
									<li><a href="{{ url('/category') }}"><span>Manage Categories</span></a></li>
								</ul>
							</li>
							<li class="jf-packagesnoti jf-notificationicon menu-item-has-children page_item_has_children"><span class="jf-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								<a href="#"><i class="ti-notepad"></i><span>Blogs</span></a>
								<ul class="sub-menu children">
									<li><a href="{{ url('/create-blog') }}"><span>Create Blog</span></a></li>
									<li><a href="{{ url('/blogs') }}"><span>Manage Blogs</span></a></li>
								</ul>
							</li>
							<li class="jf-myresumenoti jf-notificationicon">
								<a href="{{ url('/saved-posts') }}">
									<i class="ti-save"></i>
									<span>Saved Items</span>
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
                        $('#wish_list_icon_'+response).addClass('fa fa-heart-o');
                        $('#wish_list_text_'+response).text('saved');
                    }
                }
            });
        });    
   </script>
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