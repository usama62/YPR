@extends('layouts.ypr')

@section('content')
    <!--************************************
				breadcrumbarea start
		*************************************-->
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
									<!-- <li>
										<a href="javascript:void(0);">
											<i class="lnr lnr-user"></i>
											<span>Willis Wainright</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i class="lnr lnr-tag"></i>
											<span>Lifestyle &amp; DIY</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i class="lnr lnr-bug"></i>
											<span>Report Post</span>
										</a>
									</li> -->
								</ul>
								<div class="jf-blogdetailsshort">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
											<div class="jf-blogdetail">
												<figure class="jf-blogdetailimg" style="float: none;">
                                                <div class="wt-project video_url" data-video="{{$video->video_link}}" style="width: 100%;"></div>
													<!-- <img src="images/bloggrid/img-18.jpg" alt="image description"> -->
												</figure>
												<div class="jf-blogdetailcontent">
													<div class="jf-description" style="margin-top:50px">
														<p>{{$video->description}}</p>
													</div>
													<!-- <div class="jf-readblog">
														<a href="javascript:void(0);" class="jf-btn jf-active">Read Full Blog</a>
														<ul class="jf-socialiconssimple">
															<li class="jf-sharejob"><span>Share this job</span></li>
															<li class="jf-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
															<li class="jf-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
															<li class="jf-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
															<li class="jf-clone"><a href="javascript:void(0);"><i class="far fa-clone"></i></a></li>
														</ul>
													</div> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 float-left">
							<aside id="jf-sidebar" class="jf-sidebar">
								<div class="jf-widget jf-widgetsearch">
									<div class="jf-widgettitle">
										<h3>Start Search Here</h3>
									</div>
									<div class="jf-widgetcontent">
										<form class="jf-formtheme">
											<fieldset>
												<div class="form-group jf-inputwithicon">
													<i class="lnr lnr-magnifier"></i>
													<input type="search" name="search" class="form-control" placeholder="Search Here">
												</div>
												<button class="jf-btn" type="submit">Search Now</button>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="jf-widget jf-categories">
									<div class="jf-widgettitle">
										<h3>Categories</h3>
									</div>
									<div class="jf-checkboxgroup">
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-salesexecutive" name="bycondition" value="Sales Executive">
											<label for="jf-salesexecutive">
												<span>Sales Executive</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-graphicdesigner" name="bycondition" value="Graphic Designer" checked="">
											<label for="jf-graphicdesigner">
												<span>Graphic Designer</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-marketingexecutive" name="bycondition" value="Marketing Executive">
											<label for="jf-marketingexecutive">
												<span>Marketing Executive</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-accountant" name="bycondition" value="Accountant">
											<label for="jf-accountant">
												<span>Accountant</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-salesmarketingexecutive" name="bycondition" value="Sales / Marketing Executive">
											<label for="jf-salesmarketingexecutive">
												<span>Sales / Marketing Executive</span>
											</label>
										</span>
										<a href="javascript:void(0);" class="jf-viewmore">View More</a>
									</div>
								</div>
								<div class="jf-widget jf-archives">
									<div class="jf-widgettitle">
										<h3>Archives</h3>
									</div>
									<div class="jf-checkboxgroup">
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-april" name="bycondition" value="April 2019">
											<label for="jf-april">
												<span>April 2019</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-march" name="bycondition" value="March 2019"  checked="">
											<label for="jf-march">
												<span>March 2019</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-february" name="bycondition" value="February 2019">
											<label for="jf-february">
												<span>February 2019</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-january" name="bycondition" value="January 2019">
											<label for="jf-january">
												<span>January 2019</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-april2019" name="bycondition" value="April 2019">
											<label for="jf-april2019">
												<span>April 2019</span>
											</label>
										</span>
										<a href="javascript:void(0);" class="jf-viewmore">View More</a>
									</div>
								</div>
								<div class="jf-widget jf-meta">
									<div class="jf-widgettitle">
										<h3>Meta</h3>
									</div>
									<div class="jf-checkboxgroup">
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-login" name="bycondition" value="Log in">
											<label for="jf-login">
												<span>Log in</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-entriesrss" name="bycondition" value="Entries RSS"  checked="">
											<label for="jf-entriesrss">
												<span>Entries RSS</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-commentsrss" name="bycondition" value="Comments RSS">
											<label for="jf-commentsrss">
												<span>Comments RSS</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-wordpress" name="bycondition" value="WordPress.org">
											<label for="jf-wordpress">
												<span>WordPress.org</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-tabtitle" name="bycondition" value="Tab Title 05">
											<label for="jf-tabtitle">
												<span>Tab Title 05</span>
											</label>
										</span>
										<a href="javascript:void(0);" class="jf-viewmore">View More</a>
									</div>
								</div>
								<div class="jf-widget jf-recentposts">
									<div class="jf-widgettitle">
										<h3>Recent Posts</h3>
									</div>
									<div class="jf-recentpost">
										<div class="jf-recentpostdetails">
											<figure class="jf-recentpostimg">
												<img src="images/thumbnail/img-03.jpg" alt="image description">
											</figure>
											<div class="jf-recentpostcontent">
												<h3>Don’t Fade Out In Crowed</h3>
												<span><i class="lnr lnr-calendar-full"></i> Jun 27, 2019</span>
											</div>
										</div>
										<div class="jf-recentpostdetails">
											<figure class="jf-recentpostimg">
												<img src="images/thumbnail/img-04.jpg" alt="image description">
											</figure>
											<div class="jf-recentpostcontent">
												<h3>Don’t Fade Out In Crowed</h3>
												<span><i class="lnr lnr-calendar-full"></i> Jun 27, 2019</span>
											</div>
										</div>
										<div class="jf-recentpostdetails">
											<figure class="jf-recentpostimg">
												<img src="images/thumbnail/img-05.jpg" alt="image description">
											</figure>
											<div class="jf-recentpostcontent">
												<h3>Don’t Fade Out In Crowed</h3>
												<span><i class="lnr lnr-calendar-full"></i> Jun 27, 2019</span>
											</div>
										</div>
									</div>
								</div>
								<div class="jf-widget jf-widgettags">
									<div class="jf-widgettitle">
										<h3>Tags</h3>
									</div>
									<div class="jf-tag">
										<a href="javascript:void(0);">Sales</a>
										<a href="javascript:void(0);">Tyre</a>
										<a href="javascript:void(0);">DIY</a>
										<a href="javascript:void(0);">Medical</a>
										<a href="javascript:void(0);">Transport</a>
									</div>
								</div>
							</aside>
						</div> -->
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