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
								<?= html_entity_decode($details->description)?>
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