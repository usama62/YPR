@extends('layouts.admin')

@section('content')

<!--************************************
				Dashboard Inner Banner Start
		*************************************-->
		<div id="jf-dashboardbanner" class="jf-dashboardbanner">
			<h1>Insights</h1>
			<ol class="jf-breadcrumb">
				<li><a href="dashboard.html">Dashboard</a></li>
				<li><a href="javascript:void(0);">Insights</a></li>
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
					Alert Boxes Start
			*************************************-->
			<div class="jf-dbsectionspace jf-haslayout jf-alertsexamples">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
						<div class="jf-alert jf-alertsuccess alert-dismissible fade show" role="alert">
							<button type="button" class="jf-closedb" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="ti-close"></i></span>
							</button>
							<i class="ti-cup"></i>
							<div class="jf-description">
								<p>Consectetur adipisicing elit sedo eiusmod temor incididunt.</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
						<div class="jf-alert jf-alertinfo" role="alert">
							<button type="button" class="jf-closedb" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="ti-close"></i></span>
							</button>
							<i class="ti-comment-alt"></i>
							<div class="jf-description">
								<p>Consectetur adipisicing elit sedo eiusmod temor incididunt.</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
						<div class="jf-alert jf-alertwarning" role="alert">
							<button type="button" class="jf-closedb" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="ti-close"></i></span>
							</button>
							<i class="ti-help-alt"></i>
							<div class="jf-description">
								<p>Consectetur adipisicing elit sedo eiusmod temor incididunt.</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
						<div class="jf-alert jf-alertdanger" role="alert">
							<button type="button" class="jf-closedb" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="ti-close"></i></span>
							</button>
							<i class="ti-alert"></i>
							<div class="jf-description">
								<p>Consectetur adipisicing elit sedo eiusmod temor incididunt.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Alert Boxes End
			*************************************-->
			<!--************************************
					Chart Statistics Start
			*************************************-->
			<div class="jf-dbsectionspace jf-haslayout">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-8">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<div class="jf-onesidetitle">
									<h2>Who Viewed Your Profile</h2>
									<span>Employers who have viewd your resume</span>
								</div>
								<ul class="jf-chartmonth">
									<li class="jf-active"><a href="javascript:void(0);">March</a></li>
									<li><a href="javascript:void(0);">February</a></li>
									<li><a href="javascript:void(0);">January</a></li>
								</ul>
							</div>
							<div class="jf-dashbboardcontent">
								<div id="jf-viewchart" class="jf-viewchart"></div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-4">
						<div class="jf-statistics">
							<div class="jf-statistic jf-jobmatch jf-dashboardbox">
								<div id="jf-circleone" class="jf-circle"><i class="ti-layers-alt"></i></div>
								<div class="jf-statisticscontent">
									<h3>35,040</h3>
									<span>Job Match Your Resume</span>
								</div>
							</div>
							<div class="jf-statistic jf-packageexpiry jf-dashboardbox">
								<div id="jf-circletwo" class="jf-circle"><i class="ti-wand"></i></div>
								<div class="jf-statisticscontent">
									<h3>44 Days Remaining</h3>
									<span>Package Expiry Date</span>
								</div>
							</div>
							<div class="jf-statistic jf-careerboosting jf-dashboardbox">
								<div id="jf-circlethree" class="jf-circle"><i class="ti-key"></i></div>
								<div class="jf-statisticscontent">
									<h3>Career Boosting Tips</h3>
									<div id="jf-boostingslider" class="jf-boostingslider owl-carousel">
										<div class="item">
											<div class="jf-description">
												<p><span>#02:</span>Consectetur adipisicing elitism dotem eiusmod temor pikunste <a href="javascript:void(0);">Upload Photo</a></p>
											</div>
										</div>
										<div class="item">
											<div class="jf-description">
												<p><span>#02:</span>Consectetur adipisicing elitism dotem eiusmod temor pikunste <a href="javascript:void(0);">Upload Photo</a></p>
											</div>
										</div>
										<div class="item">
											<div class="jf-description">
												<p><span>#02:</span>Consectetur adipisicing elitism dotem eiusmod temor pikunste <a href="javascript:void(0);">Upload Photo</a></p>
											</div>
										</div>
										<div class="item">
											<div class="jf-description">
												<p><span>#02:</span>Consectetur adipisicing elitism dotem eiusmod temor pikunste <a href="javascript:void(0);">Upload Photo</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Chart Statistics End
			*************************************-->
			<!--************************************
					My Jobs Companies Start
			*************************************-->
			<div class="jf-dbsectionspace jf-haslayout jf-jobscompanieshold">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>My Job Applications</h2>
								<span>Latest Applied Jobs</span>
								<a class="jf-btnview" href="javascript:void(0);"><span>View All</span><i class="ti-arrow-right"></i></a>
							</div>
							<div class="jf-dashbboardcontent jf-myjobsapplications">
								<ul>
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-04.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyhead">
													<a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Internship</a>
												</div>
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Angry Creative Bears, Chicago</span>
												</div>
											</div>
										</div>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Applied By</span>
													<time datetime="2019-12-12">Jun 27, 2019</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Application Status</span>
													<time datetime="2019-12-12">Viewed</time>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-02.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyhead">
													<a class="jf-btnjobtag jf-parttimejob" href="javascript:void(0);">Part Time</a>
													<div class="jf-rightarea">
														<a class="jf-tagfeature" href="javascript:void(0);">feature</a>
														<a class="jf-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Angry Creative Bears, Chicago</span>
												</div>
											</div>
										</div>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Applied By</span>
													<time datetime="2019-12-12">Jun 27, 2019</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Application Status</span>
													<time datetime="2019-12-12">Viewed</time>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-03.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyhead">
													<a class="jf-btnjobtag jf-homebasejob" href="javascript:void(0);">Home Base</a>
													<div class="jf-rightarea">
														<a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">feature</a>
														<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Angry Creative Bears, Chicago</span>
												</div>
											</div>
										</div>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Applied By</span>
													<time datetime="2019-12-12">Jun 27, 2019</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Application Status</span>
													<time datetime="2019-12-12">Viewed</time>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-06.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyhead">
													<a class="jf-btnjobtag jf-homebasejob" href="javascript:void(0);">Home Base</a>
													<div class="jf-rightarea">
														<a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">feature</a>
														<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Angry Creative Bears, Chicago</span>
												</div>
											</div>
										</div>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Applied By</span>
													<time datetime="2019-12-12">Jun 27, 2019</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Application Status</span>
													<time datetime="2019-12-12">Viewed</time>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-04.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyhead">
													<a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Internship</a>
													<div class="jf-rightarea">
														<a class="jf-tagfeature" href="javascript:void(0);">feature</a>
														<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Angry Creative Bears, Chicago</span>
												</div>
											</div>
										</div>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Applied By</span>
													<time datetime="2019-12-12">Jun 27, 2019</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Application Status</span>
													<time datetime="2019-12-12">Viewed</time>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Companies to Follow</h2>
								<span>Latest Companies</span>
								<a class="jf-btnview" href="javascript:void(0);"><span>View All</span><i class="ti-arrow-right"></i></a>
							</div>
							<div class="jf-dashbboardcontent jf-followingcompanies">
								<ul class="jf-filterbalenav nav navbar-nav">
									<li class="nav-item">
										<a class="active" id="home-tab" data-toggle="tab" href="#about"><i class="ti-layers-alt"></i>Show All</a>
									</li>
									<li class="nav-item">
										<a id="profile-tab" data-toggle="tab" href="#openjobs"><i class="ti-pin-alt"></i>Following</a>
									</li>
									<li class="nav-item">
										<a id="messages-tab" data-toggle="tab" href="#gallery"><i class="ti-na"></i>Not Following</a>
									</li>
								</ul>
								<div class="tab-content jf-masnoryholder jf-verticalscrollbar">
									<div class="jf-jobcompaniescontent jf-haslayout tab-pane active fade show" id="about">
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-01.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser"><a href="javascript:void(0);">follow</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-02.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser jf-followinguser"><a href="javascript:void(0);">following</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-03.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser"><a href="javascript:void(0);">follow</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-04.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser"><a href="javascript:void(0);">follow</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-05.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser jf-followinguser"><a href="javascript:void(0);">following</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-06.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser jf-followinguser"><a href="javascript:void(0);">following</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-01.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser"><a href="javascript:void(0);">follow</a></span>
											</div>
										</div>
									</div>
									<div class="jf-jobcompaniescontent jf-haslayout tab-pane fade" id="openjobs">
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-06.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser jf-followinguser"><a href="javascript:void(0);">following</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-01.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser jf-followinguser"><a href="javascript:void(0);">following</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-02.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser jf-followinguser"><a href="javascript:void(0);">following</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-03.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser jf-followinguser"><a href="javascript:void(0);">following</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-04.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser jf-followinguser"><a href="javascript:void(0);">following</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-05.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser jf-followinguser"><a href="javascript:void(0);">following</a></span>
											</div>
										</div>
									</div>
									<div class="jf-jobcompaniescontent jf-haslayout tab-pane fade" id="gallery">
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-02.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser"><a class="javascript:void(0);"> follow</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-03.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser"><a href="javascript:void(0);">follow</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-04.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser"><a href="javascript:void(0);">follow</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-05.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser"><a href="javascript:void(0);">follow</a></span>
											</div>
										</div>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="images/topcompanies/img-06.png" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
													<span>Member Since: Jun 27, 2010</span>
													<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
												</div>
												<span class="jf-followuser"><a href="javascript:void(0);">follow</a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					My Jobs Companies End
			*************************************-->
			<!--************************************
					Jobs Alerts Start
			*************************************-->
			<div class="jf-dbsectionspace jf-haslayout jf-jobholder">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Favourite Jobs</h2>
								<span>Your Saved Jobs</span>
								<a class="jf-btnview" href="javascript:void(0);"><span>View All</span><i class="ti-arrow-right"></i></a>
							</div>
							<div class="jf-dashbboardcontent jf-favoritejobs jf-verticalscrollbar">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-01.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-02.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-parttimejob" href="javascript:void(0);">Part Time</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-03.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-homebasejob" href="javascript:void(0);">Home Base</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-04.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Internship</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-05.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-projectbasejob" href="javascript:void(0);">Project Base</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-06.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-homebasejob" href="javascript:void(0);">Home Base</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-01.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-02.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-parttimejob" href="javascript:void(0);">Part Time</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-03.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-homebasejob" href="javascript:void(0);">Home Base</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-04.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Internship</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-05.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-projectbasejob" href="javascript:void(0);">Project Base</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="images/topcompanies/img-06.png" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-homebasejob" href="javascript:void(0);">Home Base</a>
											<div class="jf-rightarea">
												<a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">feature</a>
												<a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
											</div>
										</div>
										<div class="jf-companyname">
											<h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
											<span>Angry Creative Bears, Chicago</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>My Job Alerts</h2>
								<span>Get Job Notifications</span>
								<a class="jf-btnview" href="javascript:void(0);"><span>Create Alert</span></a>
							</div>
							<div class="jf-dashbboardcontent jf-jobalerts jf-verticalscrollbar">
								<div class="jf-jobalert">
									<div class="jf-jobtitle">
										<h3>Graphic Designer</h3>
										<span class="jf-countryname"><i class="ti-location-pin"></i>Washington D.C</span>
									</div>
									<ul class="jf-btnjobalerts">
										<li class="jf-btnfollowon"><a href="javascript:void(0);"><i class="ti-power-off"></i></a></li>
										<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
										<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
										<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
									</ul>
								</div>
								<div class="jf-jobalert">
									<div class="jf-jobtitle">
										<h3>Graphic Designer</h3>
										<span class="jf-countryname"><i class="ti-location-pin"></i>Washington D.C</span>
									</div>
									<ul class="jf-btnjobalerts">
										<li class="jf-btnfollowon"><a href="javascript:void(0);"><i class="ti-power-off"></i></a></li>
										<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
										<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
										<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
									</ul>
								</div>
								<div class="jf-jobalert">
									<div class="jf-jobtitle">
										<h3>Graphic Designer</h3>
										<span class="jf-countryname"><i class="ti-location-pin"></i>Washington D.C</span>
									</div>
									<ul class="jf-btnjobalerts">
										<li class="jf-btnfollowon"><a href="javascript:void(0);"><i class="ti-power-off"></i></a></li>
										<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
										<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
										<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
									</ul>
								</div>
								<div class="jf-jobalert">
									<div class="jf-jobtitle">
										<h3>Graphic Designer</h3>
										<span class="jf-countryname"><i class="ti-location-pin"></i>Washington D.C</span>
									</div>
									<ul class="jf-btnjobalerts">
										<li class="jf-btnfollowon"><a href="javascript:void(0);"><i class="ti-power-off"></i></a></li>
										<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
										<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
										<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Cv Manager</h2>
								<span>Quick Way To Manage</span>
								<a class="jf-btnview" href="javascript:void(0);"><span>Upload CV</span></a>
							</div>
							<div class="jf-dashbboardcontent jf-mycvmanager jf-verticalscrollbar">
								<div class="jf-mycvs jf-defaultcv">
									<div class="jf-cvcontent">
										<figure class="jf-cvimage">
											<img src="images/cv-img/img-01.jpg" alt="image description">
										</figure>
										<div class="jf-cvname">
											<h3>My Latest Resume</h3>
											<span>Jun 27, 2019</span>
										</div>
										<a class="jf-btnmakedefault" href="javascript:void(0);"><i class="fa fa-check"></i><span> Default CV</span></a>
									</div>
									<ul class="jf-btnjobalerts">
										<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
										<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
										<li class="jf-btnlock"><a href="javascript:void(0);"><i class="ti-unlock"></i></a></li>
										<li class="jf-btndownload"><a href="javascript:void(0);"><i class="ti-download"></i></a></li>
										<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
									</ul>
								</div>
								<div class="jf-mycvs jf-defaultcv">
									<div class="jf-cvcontent">
										<figure class="jf-cvimage">
											<img src="images/cv-img/img-02.jpg" alt="image description">
										</figure>
										<div class="jf-cvname">
											<h3>My Latest Resume</h3>
											<span>Jun 27, 2019</span>
										</div>
									</div>
									<ul class="jf-btnjobalerts">
										<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
										<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
										<li class="jf-btnlock"><a href="javascript:void(0);"><i class="ti-lock"></i></a></li>
										<li class="jf-btndownload"><a href="javascript:void(0);"><i class="ti-download"></i></a></li>
										<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
									</ul>
								</div>
								<div class="jf-mycvs jf-defaultcv">
									<div class="jf-cvcontent">
										<figure class="jf-cvimage">
											<img src="images/cv-img/img-01.jpg" alt="image description">
										</figure>
										<div class="jf-cvname">
											<h3>My Latest Resume</h3>
											<span>Jun 27, 2019</span>
										</div>
									</div>
									<ul class="jf-btnjobalerts">
										<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
										<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
										<li class="jf-btnlock"><a href="javascript:void(0);"><i class="ti-unlock"></i></a></li>
										<li class="jf-btndownload"><a href="javascript:void(0);"><i class="ti-download"></i></a></li>
										<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
									</ul>
								</div>
								<div class="jf-mycvs jf-defaultcv">
									<div class="jf-cvcontent">
										<figure class="jf-cvimage">
											<img src="images/cv-img/img-02.jpg" alt="image description">
										</figure>
										<div class="jf-cvname">
											<h3>My Latest Resume</h3>
											<span>Jun 27, 2019</span>
										</div>
									</div>
									<ul class="jf-btnjobalerts">
										<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
										<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
										<li class="jf-btnlock"><a href="javascript:void(0);"><i class="ti-lock"></i></a></li>
										<li class="jf-btndownload"><a href="javascript:void(0);"><i class="ti-download"></i></a></li>
										<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
									</ul>
								</div>
								<div class="jf-mycvs jf-defaultcv">
									<div class="jf-cvcontent">
										<figure class="jf-cvimage">
											<img src="images/cv-img/img-01.jpg" alt="image description">
										</figure>
										<div class="jf-cvname">
											<h3>My Latest Resume</h3>
											<span>Jun 27, 2019</span>
										</div>
									</div>
									<ul class="jf-btnjobalerts">
										<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
										<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
										<li class="jf-btnlock"><a href="javascript:void(0);"><i class="ti-unlock"></i></a></li>
										<li class="jf-btndownload"><a href="javascript:void(0);"><i class="ti-download"></i></a></li>
										<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
									</ul>
								</div>
								<div class="jf-mycvs jf-defaultcv">
									<div class="jf-cvcontent">
										<figure class="jf-cvimage">
											<img src="images/cv-img/img-02.jpg" alt="image description">
										</figure>
										<div class="jf-cvname">
											<h3>My Latest Resume</h3>
											<span>Jun 27, 2019</span>
										</div>
									</div>
									<ul class="jf-btnjobalerts">
										<li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li>
										<li class="jf-btneditjob"><a href="javascript:void(0);"><i class="ti-pencil"></i></a></li>
										<li class="jf-btnlock"><a href="javascript:void(0);"><i class="ti-unlock"></i></a></li>
										<li class="jf-btndownload"><a href="javascript:void(0);"><i class="ti-download"></i></a></li>
										<li class="jf-btndell"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>My Success Story</h2>
								<span>Share Your Success Storye</span>
							</div>
							<div class="jf-dashbboardcontent jf-mysuccessstory">
								<form class="jf-formtheme jf-formsuccessstory">
									<fieldset class="jf-hidephoto">
										<span class="jf-checkbox">
											<input type="checkbox" name="hidephoto" id="hidephoto">
											<label for="hidephoto">Hide My Photo From Success Story</label>
										</span>
									</fieldset>
									<fieldset class="jf-textarea">
										<div class="form-group jf-inputwithicon">
											<i class="lnr lnr-bubble"></i>
											<textarea placeholder="Your Success Story"></textarea>
										</div>
										<div class="form-group jf-btns">
											<a class="jf-btn" href="javascript:void(0);">Publish Now</a>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</main>
		@endsection