@extends('layouts.ypr')

@section('content')
		<div class="jf-breadcrumbarea">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="jf-breadcrumb">
							<li><a href="#">Home</a></li>
							<li>Videos</li><li>{{$video->title}}</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-sectionspace">
			<div class="container">
				<div class="row">
					<div id="jf-twocolumns" class="jf-twocolumns">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right">
							<div id="jf-content" class="jf-content jf-blogdetailshort">
								<div class="jf-innersectionhead">
									<div class="jf-title">
										<h2>{{$video->title}}</h2>
									</div>
								</div>
								<ul class="jf-postarticlemetavtwo">
									<li>
										<a href="javascript:void(0);">
											<i class="lnr lnr-calendar-full"></i>
											<span>{{ \Carbon\Carbon::parse($video->created_at)->format('M d, Y') }}</span>
										</a>
									</li>
								</ul>
								<div class="jf-blogdetailsshort">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
											<div class="jf-blogdetail">
												<figure class="jf-blogdetailimg" style="float: none;">
                                                <div class="wt-project video_url" data-video="{{$video->video_link}}" style="width: 100%;"></div>
												</figure>
												<div class="jf-blogdetailcontent">
													<div class="jf-description" style="margin-top:50px">
														<p>{{$video->description}}</p>
													</div>
												</div>
											</div>
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