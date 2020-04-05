@extends('layouts.ypr')

@section('content')
	<div class="jf-breadcrumbarea">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ol class="jf-breadcrumb">
						<li><a href="index-2.html">Home</a></li>
						<li>Blog Details</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<main id="jf-main" class="jf-main jf-haslayout">
	<div class="jf-haslayout jf-sectionspace">
		<div class="container">
			<div class="row">
				<div id="jf-twocolumns" class="jf-twocolumns">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 float-left">
						<div class="jf-jobapplycenter jf-jobapplycentervfour">
							<figure class="jf-companyimg">
								@if($details->image != null)
                                    <img src="{{ asset($details->image) }}" alt="image description" style="height:72px">
                                @else
                                    <img src="{{ asset('assets/images/successstory/grid/img-01.png') }}" alt="image description">
                                @endif
							</figure>
							<div class="jf-companycontent">
								<div class="jf-jobapplydetails">
									<div class="jf-companyhead">
										<a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time Jobs</a>
										<a class="jf-tagfeature" href="javascript:void(0);">feature</a>
									</div>
									<div class="jf-companyname">
										<h3><a href="javascript:void(0);">{{$details->name}}</a></h3>
										<ul class="jf-postarticlemetavthree">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="lnr lnr-calendar-full"></i>
                                                    <span>Posted on {{ \Carbon\Carbon::parse($details->created_at)->format('M d, Y') }}</span>
                                                </a>
                                            </li>
                                        </ul>
									</div>
								</div>
								<!-- <div class="jf-jobapplybtnlike">
                                    <div class="jf-likebtnbox">
                                        @if(count($saved) != 0)
                                        <a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                        @endif
                                    </div>
                                    <ul class="jf-socialiconssimple">
                                        <li class="jf-sharejob"><span>Share</span></li>
                                        <li class="jf-facebook"><a href="http://www.facebook.com/sharer.php?u=http://www.mywebsite.com"><i class="fa fa-facebook-f"></i></a></li>
                                        <li class="jf-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                        <li class="jf-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div> -->
							</div>
						</div>
						<div class="jf-adds jf-addmargin">
							<a href="javascript:void(0);" title="">
								<figure>	
									<img src="{{ asset('assets/images/adds-03.jpg') }}" alt="img description">
								</figure>
							</a>
							<span>Advertisement  540px X 80px</span>
						</div>
						<div class="jf-jobdetails">
							<div class="jf-jobdetaildescription">
								<div class="jf-title">
									<h2>Description</h2>
								</div>
								<div class="jf-jobdescription">
								<?= html_entity_decode($details->description)?>
								</div>
							</div>
						</div>
						<div class="jf-similarjobs">
							<div class="jf-sectionhead">
								<h2>Similar Jobs</h2>
								<a class="jf-btnviewall" href="javascript:void(0);">View All</a>
							</div>
							<div class="jf-featuredjobs">
								<div class="jf-featurejobholder">
								@foreach($recents as $recent)
								<div class="jf-featurejobholder">
									<div class="jf-featurejob">
										<figure class="jf-companyimg">
											@if($recent->image != null)
												<img src="{{ asset($recent->image) }}" alt="image description" style="height: 45px;">
											@else
												<img src="{{ asset('assets/images/image-default.png') }}" style="height:45px" alt="image description">
											@endif
										</figure>
										<div class="jf-companycontent">
											<div class="jf-companyname">
												<h3><a href="{{ route('disease.detail',['id'=>$recent->id]) }}">{{str_limit($recent->title,20)}}</a></h3>
												<span>Posted On: {{\Carbon\Carbon::parse($recent->created_at)->format('M d, Y') }}</span>
											</div>
										</div>
									</div>
								</div>
								@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 float-left">
						<aside id="jf-sidebar" class="jf-sidebar jf-sidebarvtwo">
							<div class="jf-widget jf-myrecentrearches">
								<div class="jf-widgettitle">
									<h3>Categories</h3>
								</div>
								<ul class="jf-recentsearches">
                                <?php 
                                    $arr = (explode(",",$details->category ));
                                    for($i=0;$i<count($arr);$i++){?>
                                    <li>
                                        <a href="javascript:void(0);">
                                        <?php echo $arr[$i];?>
                                        </a>
                                    </li>
                                <?php
                                    }
                                ?>
                                </ul>
							</div>
							@if($details->hide_publisher== 0)
							<div class="jf-widget jf-employerweek">
                                <div class="jf-widgettitle">
                                    <h3>Author</h3>
                                </div>
                                <div class="jf-angrycreative">
                                    <img src="{{ asset($details->abc->profile_image)}}" alt="img description">
                                </div>
                                <div class="jf-employerdetails">
                                    <h3>{{$details->abc->name}}</h3>
                                    <h4><span>Member Since: {{ \Carbon\Carbon::parse($details->abc->created_at)->format('M d, Y') }}</span>
                                    </h4>
                                </div>
                            </div>
							@endif
							<div class="jf-adds jf-jobsearchadd">
								<a href="javascript:void(0);" title="">
									<figure>	
										<img src="{{ asset('assets/images/adds-02.jpg')}}" alt="img description">
									</figure>
								</a>
								<span>Advertisement  540px X 80px</span>
							</div>
						</aside>
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