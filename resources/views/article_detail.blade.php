@extends('layouts.ypr')

@section('content')
<div class="jf-breadcrumbarea">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<ol class="jf-breadcrumb">
					<li><a href="#">Home</a></li>
					<li>Article Details</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<main id="jf-main" class="jf-main jf-haslayout">
	<div class="jf-sectionspace jf-haslayout">
		<div class="container">
			<div class="row">
				<div id="jf-twocolumns" class="jf-twocolumns">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right">
						<div id="jf-content" class="jf-content jf-blogdetail">
							<div class="jf-innersectionhead">
								<div class="jf-title">
									<h2>{{$details->title}}</h2>
								</div>
							</div>
							<ul class="jf-postarticlemetavtwo">
								<li>
									<a href="javascript:void(0);">
										<i class="lnr lnr-calendar-full"></i>
										<span>{{ \Carbon\Carbon::parse($details->created_at)->format('M d, Y') }}</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="lnr lnr-user"></i>
										<span>{{$details->abc->name}}</span>
									</a>
								</li>
							</ul>
							<figure class="jf-blogdetailimgvtwo">
								<img src="{{ asset($details->image) }}" alt="image description">
							</figure>
							<div class="jf-description">
								<p>{{$details->description}}</p>
								<blockquote class="jf-blockquotevone">
									<span><i class="lnr lnr-bookmark"></i></span>
									<q>” Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</q>
								</blockquote>
								<p>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiate nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
								<div class="jf-video">
									<figure><div class="video_url" data-video="{{$details->video_link}}" style="width: 100%;"></div></figure>
								</div>
								<!-- <figure class="jf-blogdetailimgvtwo">
									<figcaption><span>As per current survey perspiciatis unde omnis iste natus error sit voluptatem.</span></figcaption>
								</figure> -->
								<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
								<ul>
									<li><span>Nemo enim ipsam voluptatem quia</span></li>
									<li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
									<li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>
									<li><span>qui dolorem ipsum quia dolor sit amet</span></li>
								</ul>
								<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								<blockquote class="jf-blockquotevtwo">
									<q>” Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</q>
								</blockquote>
								<figure class="jf-blogdetailimgvtwo jf-alignleft">
									<img src="{{ asset('assets/images/blogdetail/img-05.jpg') }}" alt="image description">
									<figcaption><span>As per current survey perspiciatis unde</span></figcaption>
								</figure>
								<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officiaerunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaqueisa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta suntcabo Nemo enim ipsam voluptatem quia voluptas.</p>
								<ul class="jf-blogliststyle">
									<li><span>Nemo enim ipsam voluptatem quia</span></li>
									<li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
									<li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>
									<li><span>qui dolorem ipsum quia dolor sit amet</span></li>
								</ul>
								<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nenti Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, cteturisci velit, sed quia non numquam eius modi.</p>
								<p class="jf-clear">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
								<figure class="jf-blogdetailimgvtwo jf-alignright">
									<img src="{{ asset('assets/images/blogdetail/img-06.jpg') }}" alt="image description">
									<figcaption><span>As per current survey perspiciatis unde</span></figcaption>
								</figure>
								<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officiaerunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaqueisa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta suntcabo Nemo enim ipsam voluptatem quia voluptas.</p>
								<ul class="jf-blogliststyle">
									<li><span>Nemo enim ipsam voluptatem quia</span></li>
									<li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
									<li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>
									<li><span>qui dolorem ipsum quia dolor sit amet</span></li>
								</ul>
								<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nenti Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, cteturisci velit, sed quia non numquam eius modi.</p>
								<p class="jf-clear">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
								<div class="jf-video">
									<figure><a data-rel="prettyPhoto[video]" href="https://www.youtube.com/watch?v=J37W6DjqT3Q"><img src="{{ asset('assets/images/blogdetail/img-07.jpg') }}" alt="image description"></a></figure>
								</div>
								<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
								<ul>
									<li><span>Nemo enim ipsam voluptatem quia</span></li>
									<li><span>Adipisci velit, sed quia non numquam eius modi tempora</span></li>
									<li><span>Eaque ipsa quae ab illo inventore veritatis et quasi architecto</span></li>
									<li><span>qui dolorem ipsum quia dolor sit amet</span></li>
								</ul>
								<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							</div>
						</div>
						<div class="jf-author">
							<div class="jf-authordetails">
								<figure>
									<a href="javascript:void(0);"><img src="images/author/img-01.jpg" alt="image description"></a>
								</figure>
								<div class="jf-authorcontent">
									<div class="jf-authorhead">
										<div class="jf-boxleft">
											<h3><a href="javascript:void(0);">Antwan Bosserman</a></h3>
											<span>Author Since: Jun 27, 2016</span>
										</div>
										<div class="jf-boxright">
											<ul class="jf-socialiconssimple">
												<li class="jf-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
												<li class="jf-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
												<li class="jf-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
												<li class="jf-googleplus"><a href="javascript:void(0);"><i class="fab fa-google"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="jf-description">
										<p>Excepteur sint occaecat cupidatat non proident, sunt inlpa officia deserunt molliteu anim idestrume Sed utaiciatis unde omnis iste natus error sitame voluptatem accusntium dolorem aque laudaiumin totam rem aiam eaque ipsa quae abillointore veritatis et quasi architecto eibeatae vitae dicta suntise explicabo nemo enim ipsam voluptatem quia voluptas.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<script>
        var videoUrl = $('.video_url').data('video');  
        if(videoUrl!=""){
            var videoId = getId(videoUrl);
            $('.video_url').html('<iframe width="560" height="315" src="//www.youtube.com/embed/' + videoId + '" frameborder="0" allowfullscreen></iframe>');
        }
        function getId(url = "video") {
            var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
            var match = url.match(regExp);

            if (match && match[2].length == 11) {
                return match[2];
            } else {
                return 'error';
            }
        }
    </script>
@endsection