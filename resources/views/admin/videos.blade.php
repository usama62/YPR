@extends('layouts.admin')

@section('content')
		<!--************************************
				Dashboard Inner Banner Start
		*************************************-->
		<div id="jf-dashboardbanner" class="jf-dashboardbanner">
			<h1>Videos</h1>
			<ol class="jf-breadcrumb">
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li><a href="javascript:void(0);">Videos</a></li>
			</ol>
		</div>
		<!--************************************
				Dashboard Inner Banner End
        *************************************-->
        <!--************************************
				Main Start
		*************************************-->
		<main id="jf-main" class="jf-main jf-haslayout">
            
			<!--************************************
					Jobs Alerts Start
			*************************************-->
			<div class="jf-dbsectionspace jf-haslayout">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<div class="jf-dashboardbox jf-myappliedjobs">
							<div class="jf-dashboardboxtitle jf-dashboardboxtitlevtwo">
								<div class="jf-title">
									<h2>Videos</h2>
									<span>Your Latest Posted Videos</span>
								</div>
								<form class="jf-formtheme jf-questsearch">
									<fieldset>
										<div class="form-group jf-inputwithicon">
											<i class="lnr lnr-magnifier"></i>
											<input type="text" name="jobtitle" class="form-control" placeholder="Search Here">
										</div>
										<a class="jf-btnsearch" href="javascript:void(0)"><i class="lnr lnr-magnifier"></i></a>
									</fieldset>
								</form>
							</div>
							<div class="jf-dashbboardcontent jf-myjobsapplications">
								<ul>
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="{{ asset('assets/images/play-button.png') }}" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Demo Medical Video</a></h3>
													<span>Lorem ipsum is placeholder text commonly used in the graphic</span>
												</div>
											</div>
										</div>
										<ul class="jf-btnjobalerts jf-btnjobalertsvtwo">
											<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
											<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
											<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
										</ul>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Posted On</span>
													<time datetime="2019-12-12">Jun 27, 2019</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Video Status</span>
													<time datetime="2019-12-12"><a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Pending</a></time>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="{{ asset('assets/images/play-button.png') }}" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Demo Medical Video</a></h3>
													<span>Lorem ipsum is placeholder text commonly used in the graphic</span>
												</div>
											</div>
										</div>
										<ul class="jf-btnjobalerts jf-btnjobalertsvtwo">
											<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
											<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
											<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
										</ul>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Posted On</span>
													<time datetime="2019-12-12">Jun 27, 2019</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Video Status</span>
													<time datetime="2019-12-12"><a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Pending</a></time>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="{{ asset('assets/images/play-button.png') }}" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Demo Medical Video</a></h3>
													<span>Lorem ipsum is placeholder text commonly used in the graphic</span>
												</div>
											</div>
										</div>
										<ul class="jf-btnjobalerts jf-btnjobalertsvtwo">
											<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
											<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
											<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
										</ul>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Posted On</span>
													<time datetime="2019-12-12">Jun 27, 2019</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Video Status</span>
													<time datetime="2019-12-12"><a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Pending</a></time>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="{{ asset('assets/images/play-button.png') }}" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Demo Medical Video</a></h3>
													<span>Lorem ipsum is placeholder text commonly used in the graphic</span>
												</div>
											</div>
										</div>
										<ul class="jf-btnjobalerts jf-btnjobalertsvtwo">
											<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
											<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
											<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
										</ul>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Posted On</span>
													<time datetime="2019-12-12">Jun 27, 2019</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Video Status</span>
													<time datetime="2019-12-12"><a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Pending</a></time>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="{{ asset('assets/images/play-button.png') }}" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Demo Medical Video</a></h3>
													<span>Lorem ipsum is placeholder text commonly used in the graphic</span>
												</div>
											</div>
										</div>
										<ul class="jf-btnjobalerts jf-btnjobalertsvtwo">
											<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
											<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
											<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
										</ul>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Posted On</span>
													<time datetime="2019-12-12">Jun 27, 2019</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Video Status</span>
													<time datetime="2019-12-12"><a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Pending</a></time>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Jobs Alerts Start End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
@endsection