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
</head>

<body class="jf-home jf-loginuser">
	<div class="preloader-outer">
		<div class='loader'></div>
	</div>
	<div id="jf-wrapper" class="jf-wrapper jf-haslayout">
		<main id="jf-main" class="jf-main jf-haslayout">
			<div class="jf-signincontent">
				<div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-6 col-lg-push-3">
                            <div class="jf-logoareavtwo">
                                <strong class="jf-logo"><a href="index-2.html"><img src="http://localhost:8000/assets/images/signin.png" alt="image description"></a></strong>
                            </div>
                            <div class="jf-logindetails">
                                <div class="jf-titlelogin">
                                    <h2>Reset Password</h2>
                                </div>
                                <form method="POST" action="{{ route('password.update') }}" class="jf-formtheme jf-formlogin">
                                    @csrf
                                   	<fieldset>
                                        <div class="form-group jf-inputwithicon">
                                            <input type="hidden" name="token" value="{{ $token }}">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group jf-inputwithicon">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group jf-inputwithicon">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group jf-btnsarea">
                                            <button type="submit" class="jf-btn jf-active btn-primary" style="width:100%">{{ __('Reset Password') }}</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
		</main>
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
