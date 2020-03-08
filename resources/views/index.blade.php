@extends('layouts.ypr')

@section('content')
        
        <!--************************************
				Home Slider Start
		*************************************-->
		<div class="jf-sliderholder">
			<div class="jf-slidercontentholder">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
							<div class="jf-slidercontent jf-slidercontentvthree">
								<h1>Explore Tons of Healthcare Options</h1>
								<div class="jf-description">
									<p></p>
								</div>
								<form class="jf-formtheme jf-formbannersearch">
									<fieldset class="jf-searchoptions">
										<div class="form-group">
											<div class="jf-radio jf-findjobs jf-search-type" data-class="js-job">
												<input type="radio" name="searchoptions" id="jf-findjobs" checked>
												<label for="jf-findjobs">Find Jobs</label>
											</div>
											<div class="jf-radio jf-employers jf-search-type" data-class="js-employer">
												<input type="radio" name="searchoptions" id="jf-employers">
												<label for="jf-employers">Find Employers</label>
											</div>
											<div class="jf-radio jf-candidates jf-search-type" data-class="js-candidate">
												<input type="radio" name="searchoptions" id="jf-candidates">
												<label for="jf-candidates">Find Candidates</label>
											</div>
										</div>
									</fieldset>
									<fieldset class="jf-searcharea">
										<div class="jf-searchholder">
											<label><em class="lnr lnr-apartment"></em><span>Job Title, Skills or Company</span></label>
											<div class="form-group jf-inputwithicon">
												<input type="search" name="search" class="form-control" placeholder="Senior creative design">
											</div>
										</div>
										<div class="jf-searchholder">
											<label><em class="lnr lnr-apartment"></em><span>Job Title, Skills or Company</span></label>
											<span class="jf-select">
												<select data-placeholder="All" class="chosen-select locations" name="locations">
													<option value="">Location</option>
													<option value="aberdeen">Aberdeen</option>
													<option value="aldershot">Aldershot</option>
													<option value="altrincham">Altrincham</option>
													<option value="aylesbury">Aylesbury</option>
													<option value="bamber">Bamber</option>
													<option value="bangor">Bangor</option>
													<option value="batley">Batley</option>
													<option value="bebingto">Bebingto</option>
													<option value="bedford">Bedford</option>
													<option value="birmingham">Birmingham</option>
													<option value="blackpool">Blackpool</option>
													<option value="brentwood">Brentwood</option>
													<option value="bristol">Bristol</option>
													<option value="cardiff">Cardiff</option>
													<option value="carlisle">Carlisle</option>
													<option value="crawley">Crawley</option>
													<option value="darlington">Darlington</option>
													<option value="eastleigh">Eastleigh</option>
													<option value="edinburg">Edinburg</option>
													<option value="esher">Esher</option>
													<option value="glasgow-sco">Glasgow SCO</option>
													<option value="guildford">Guildford</option>
													<option value="halesowen">Halesowen</option>
													<option value="halifax">Halifax</option>
													<option value="hamilton">Hamilton</option>
													<option value="leeds">Leeds</option>
													<option value="leicester">Leicester</option>
													<option value="liverpool">Liverpool</option>
													<option value="london">London</option>
													<option value="louisville">Louisville</option>
													<option value="manchester">Manchester</option>
													<option value="sheffield">Sheffield</option>
												</select>
											</span>
										</div>
										<div class="jf-searchbtn">
											<a href="javascript:void(0)" class="jf-btn"><i class="lnr lnr-magnifier"></i></a>
										</div>
									</fieldset>
								</form>
								<div class="jf-btnsjobstags">
									<span>Aeullamco labois niisie ut aliquip exea commodo consequat auteirure.</span>
									<ul class="jf-btnjobtags">
										<li><a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time Jobs</a></li>
										<li><a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Internship</a></li>
										<li><a class="jf-btnjobtag jf-parttimejob" href="javascript:void(0);">Part Time Jobs</a></li>
										<li><a class="jf-btnjobtag jf-projectbasejob" href="javascript:void(0);">Project Base Jobs</a></li>
										<li><a class="jf-btnjobtag jf-homebasejob" href="javascript:void(0);">Home Base Jobs</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="jf-homeslidervone" class="jf-homeslidervone jf-homeslidervthree jf-homesliderone owl-carousel">
				<figure class="jf-sliderimg item">
					<img src="{{ asset('assets/images/slider/img-01.jpg') }}" alt="image description">
				</figure>
				<figure class="jf-sliderimg item">
					<img src="{{ asset('assets/images/slider/img-02.jpg')}}" alt="image description">
				</figure>
				<figure class="jf-sliderimg item">
					<img src="{{ asset('assets/images/slider/img-03.jpg')}}" alt="image description">
				</figure>
				<figure class="jf-sliderimg item">
					<img src="{{ asset('assets/images/slider/img-04.jpg')}}" alt="image description">
				</figure>
				<figure class="jf-sliderimg item">
					<img src="{{ asset('assets/images/slider/img-05.jpg')}}" alt="image description">
				</figure>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="jf-main" class="jf-main jf-haslayout">
			<!--************************************
					Top Companies Start
			*************************************-->
			<section class="jf-haslayout jf-sectionspace">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<div class="jf-sectionhead">
								<h2>Top Companies</h2>
								<a class="jf-btnviewall" href="javascript:void(0);">View All</a>
							</div>
						</div>
						<div class="jf-topcompaniesholder">
							<div class="col-12 col-sm-12 col-md-10 push-md-1 col-lg-10 push-lg-1 float-left">
								<div id="jf-topcompaniesslider" class="jf-topcompaniesslider jf-topcompanies owl-carousel">
									<figure class="jf-topcompany item">
										<a class="jf-bglight" href="javascript:void(0)">
											<img src="{{ asset('assets/images/topcompanies/img-01.png')}}" alt="image description">
										</a>
									</figure>
									<figure class="jf-topcompany item">
										<a href="javascript:void(0)">
											<img src="{{ asset('assets/images/topcompanies/img-02.png')}}" alt="image description">
										</a>
									</figure>
									<figure class="jf-topcompany item">
										<a class="jf-bglight" href="javascript:void(0)">
											<img src="{{ asset('assets/images/topcompanies/img-03.png')}}" alt="image description">
										</a>
									</figure>
									<figure class="jf-topcompany item">
										<a href="javascript:void(0)">
											<img src="{{ asset('assets/images/topcompanies/img-04.png')}}" alt="image description">
										</a>
									</figure>
									<figure class="jf-topcompany item">
										<a class="jf-bglight" href="javascript:void(0)">
											<img src="{{ asset('assets/images/topcompanies/img-05.png')}}" alt="image description">
										</a>
									</figure>
									<figure class="jf-topcompany item">
										<a href="javascript:void(0)">
											<img src="{{ asset('assets/images/topcompanies/img-06.png')}}" alt="image description">
										</a>
									</figure>
									<figure class="jf-topcompany item">
										<a class="jf-bglight" href="javascript:void(0)">
											<img src="{{ asset('assets/images/topcompanies/img-01.png')}}" alt="image description">
										</a>
									</figure>
									<figure class="jf-topcompany item">
										<a href="javascript:void(0)">
											<img src="{{ asset('assets/images/topcompanies/img-02.png')}}" alt="image description">
										</a>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Top Companies End
			*************************************-->
			<!--************************************
					Featured Jobs Start
			*************************************-->
			<section class="jf-haslayout jf-sectionspace jf-bglight">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<div class="jf-sectionhead">
								<h2>Featured Jobs</h2>
								<a class="jf-btnviewall" href="javascript:void(0);">View All</a>
							</div>
						</div>
						<div class="jf-featuredjobs">
							<div class="jf-featurejobholder">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="{{ asset('assets/images/topcompanies/img-01.png') }}" alt="image description">
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
							</div>
							<div class="jf-featurejobholder">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="{{ asset('assets/images/topcompanies/img-02.png') }}" alt="image description">
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
							</div>
							<div class="jf-featurejobholder">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="{{ asset('assets/images/topcompanies/img-03.png') }}" alt="image description">
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
							<div class="jf-featurejobholder">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="{{ asset('assets/images/topcompanies/img-04.png') }}" alt="image description">
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
							</div>
							<div class="jf-featurejobholder">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="{{ asset('assets/images/topcompanies/img-05.png') }}" alt="image description">
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
							</div>
							<div class="jf-featurejobholder">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="{{ asset('assets/images/topcompanies/img-06.png') }}" alt="image description">
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
							<div class="jf-featurejobholder">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="{{ asset('assets/images/topcompanies/img-01.png') }}" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-homebasejob" href="javascript:void(0);">Home Base</a>
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
							</div>
							<div class="jf-featurejobholder">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="{{ asset('assets/images/topcompanies/img-03.png') }}" alt="image description">
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
							</div>
							<div class="jf-featurejobholder">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										<img src="{{ asset('assets/images/topcompanies/img-04.png') }}" alt="image description">
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyhead">
											<a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time</a>
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
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Featured Jobs End
			*************************************-->
			<!--************************************
					Our Professionals Start
			*************************************-->
			<section class="jf-haslayout jf-sectionspace">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<div class="jf-sectionhead">
								<h2>Our Top Professionals</h2>
								<a class="jf-btnviewall" href="javascript:void(0);">View All</a>
							</div>
						</div>
						<div class="jf-ourprofessionals">
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
								<div class="jf-ourprofessional">
									<div class="jf-professionaldetail">
										<figure class="jf-professionalimg">
											<img src="{{ asset('assets/images/team/img-01.jpg') }}" alt="image description">
										</figure>
										<div class="jf-professionalcontent">
											<div class="jf-professionalname">
												<h3><a href="javascript:void(0);">Graphic Designer Explainer</a></h3>
												<span>Angry Creative Bears</span>
											</div>
											<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
											<a class="jf-btn" href="javascript:void(0);">View Full Profile</a>
										</div>
									</div>
									<ul class="jf-professionalinfo">
										<li><i class="lnr lnr-briefcase"></i><span>Exp: 07 years</span></li>
										<li><i class="lnr lnr-location"></i><span>Chicago, USA</span></li>
										<li><i class="lnr lnr-tag"></i><span><a href="javascript:void(0);">Business &amp; Finance</a></span></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
								<div class="jf-ourprofessional">
									<div class="jf-professionaldetail">
										<figure class="jf-professionalimg">
											<img src="{{ asset('assets/images/team/img-02.jpg') }}" alt="image description">
										</figure>
										<div class="jf-professionalcontent">
											<div class="jf-professionalname">
												<h3><a href="javascript:void(0);">Sr. Graphic / Ui Designer</a></h3>
												<span>Aviato Group of Company</span>
											</div>
											<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
											<a class="jf-btn" href="javascript:void(0);">View Full Profile</a>
										</div>
									</div>
									<ul class="jf-professionalinfo">
										<li><i class="lnr lnr-briefcase"></i><span>Exp: 07 years</span></li>
										<li><i class="lnr lnr-location"></i><span>Chicago, USA</span></li>
										<li><i class="lnr lnr-tag"></i><span><a href="javascript:void(0);">Business &amp; Finance</a></span></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
								<div class="jf-ourprofessional">
									<div class="jf-professionaldetail">
										<figure class="jf-professionalimg">
											<img src="{{ asset('assets/images/team/img-03.jpg') }}" alt="image description">
										</figure>
										<div class="jf-professionalcontent">
											<div class="jf-professionalname">
												<h3><a href="javascript:void(0);">Photographer &amp; Graphic Designer</a></h3>
												<span>Fast Run Cargo &amp; Movers</span>
											</div>
											<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
											<a class="jf-btn" href="javascript:void(0);">View Full Profile</a>
										</div>
									</div>
									<ul class="jf-professionalinfo">
										<li><i class="lnr lnr-briefcase"></i><span>Exp: 07 years</span></li>
										<li><i class="lnr lnr-location"></i><span>Chicago, USA</span></li>
										<li><i class="lnr lnr-tag"></i><span><a href="javascript:void(0);">Business &amp; Finance</a></span></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
								<div class="jf-ourprofessional">
									<div class="jf-professionaldetail">
										<figure class="jf-professionalimg">
											<img src="{{ asset('assets/images/team/img-04.jpg')}}" alt="image description">
										</figure>
										<div class="jf-professionalcontent">
											<div class="jf-professionalname">
												<h3><a href="javascript:void(0);">Senior Web/graphic Designer</a></h3>
												<span>Sass Perfume &amp; Clothes</span>
											</div>
											<span class="jf-totalviews"><i class="lnr lnr-eye"></i><em>1,744,588 views</em></span>
											<a class="jf-btn" href="javascript:void(0);">View Full Profile</a>
										</div>
									</div>
									<ul class="jf-professionalinfo">
										<li><i class="lnr lnr-briefcase"></i><span>Exp: 07 years</span></li>
										<li><i class="lnr lnr-location"></i><span>Chicago, USA</span></li>
										<li><i class="lnr lnr-tag"></i><span><a href="javascript:void(0);">Business &amp; Finance</a></span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Our Professionals End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="jf-sectionspace jf-haslayout jf-bglight">
				<div class="container">
					<div class="row justify-content-lg-center">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-push-1">
							<div class="jf-customerfeedbacks">
								<div id="jf-feebbackslider" class="jf-feebbackslider owl-carousel">
									<div class="item jf-employstory">
										<figure class="jf-empoyimg">
											<img src="{{ asset('assets/images/testimonials/img-01.jpg')}}" alt="image descrion">
										</figure>
										<div class="jf-empoyerinfo">
											<h3>Margorie Wayman</h3>
											<span>Territory Sales Manager</span>
											<span>XYZ Company LTD</span>
										</div>
										<div class="jf-description">
											<blockquote>
												<q>Consectetur adipisicing <span>elito eiusmod lokie apore isniate</span> incididunt etoeream magnaie aiequa enimic ad minim venam... </q>
											</blockquote>
										</div>
									</div>
									<div class="item jf-employstory">
										<figure class="jf-empoyimg">
											<img src="{{ asset('assets/images/testimonials/img-02.jpg')}}" alt="image descrion">
										</figure>
										<div class="jf-empoyerinfo">
											<h3>Margorie Wayman</h3>
											<span>Territory Sales Manager</span>
											<span>XYZ Company LTD</span>
										</div>
										<div class="jf-description">
											<blockquote>
												<q>Consectetur adipisicing <span>elito eiusmod lokie apore isniate</span> incididunt etoeream magnaie aiequa enimic ad minim venam... </q>
											</blockquote>
										</div>
									</div>
									<div class="item jf-employstory">
										<figure class="jf-empoyimg">
											<img src="{{ asset('assets/images/testimonials/img-03.jpg')}}" alt="image descrion">
										</figure>
										<div class="jf-empoyerinfo">
											<h3>Margorie Wayman</h3>
											<span>Territory Sales Manager</span>
											<span>XYZ Company LTD</span>
										</div>
										<div class="jf-description">
											<blockquote>
												<q>Consectetur adipisicing <span>elito eiusmod lokie apore isniate</span> incididunt etoeream magnaie aiequa enimic ad minim venam... </q>
											</blockquote>
										</div>
									</div>
									<div class="item jf-employstory">
										<figure class="jf-empoyimg">
											<img src="{{ asset('assets/images/testimonials/img-04.jpg')}}" alt="image descrion">
										</figure>
										<div class="jf-empoyerinfo">
											<h3>Margorie Wayman</h3>
											<span>Territory Sales Manager</span>
											<span>XYZ Company LTD</span>
										</div>
										<div class="jf-description">
											<blockquote>
												<q>Consectetur adipisicing <span>elito eiusmod lokie apore isniate</span> incididunt etoeream magnaie aiequa enimic ad minim venam... </q>
											</blockquote>
										</div>
									</div>
								</div>
								<div id="jf-authorpicslider" class="jf-authorpicslider jf-authorpicslider owl-carousel">
									<div class="item"><figure><img src="{{ asset('assets/images/testimonials/img-01.jpg') }}" alt="image description"></figure></div>
									<div class="item"><figure><img src="{{ asset('assets/images/testimonials/img-02.jpg') }}" alt="image description"></figure></div>
									<div class="item"><figure><img src="{{ asset('assets/images/testimonials/img-03.jpg') }}" alt="image description"></figure></div>
									<div class="item"><figure><img src="{{ asset('assets/images/testimonials/img-01.jpg') }}" alt="image description"></figure></div>
								</div>
								<div class="jf-sharestory">
									<figure>
										<img src="{{ asset('assets/images/icon-img.png') }}" alt="img-description">
									</figure>
									<div class="jf-sharestorycontent">
										<h3>Want To Share Your Success Story?</h3>
										<a href="javascript:void(0);">Click Here to Make Your Story</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
				Blogs News Article Start
			*************************************-->
			<section class="jf-sectionspace jf-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<div class="jf-sectionhead">
								<h2>Latest Blogs &amp; News</h2>
								<a class="jf-btnviewall" href="javascript:void(0);">View All</a>
							</div>
						</div>
						<div class="jf-posts jf-blognews">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 float-left">
								<article class="jf-newsarticle">
									<figure class="jf-newsimg">
										<span class="jf-posttag"><i class="fas fa-ellipsis-v"></i></span>
										<img src="{{ asset('assets/images/blognews/img-01.jpg') }}" alt="image description">
									</figure>
									<div class="jf-postauthorname">
										<figure class="jf-postauthorpic">
											<img src="{{ asset('assets/images/blognews/author-img-01.jpg') }}" alt="image description">
										</figure>
										<div class="jf-articlecontent">
											<div class="jf-articletitle">
												<h3><a href="javascript:void(0);">Don’t Fade Out In Crowed</a></h3>
											</div>
											<span class="jf-authorname"><a href="javascript:void(0);">Willis Wainright</a></span>
										</div>
									</div>
									<ul class="jf-postarticlemeta">
										<li>
											<i class="lnr lnr-calendar-full"></i>
											<span>Jun 27, 2019</span>
										</li>
										<li>
											<a href="javascript:void(0);"><i class="lnr lnr-tag"></i><span>Lifestyle &amp; DIY</span></a>
										</li>
									</ul>
								</article>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 float-left">
								<article class="jf-newsarticle">
									<figure class="jf-newsimg">
										<span class="jf-posttag"><i class="fas fa-ellipsis-v"></i></span>
										<img src="{{ asset('assets/images/blognews/img-02.jpg')}}" alt="image description">
									</figure>
									<div class="jf-postauthorname">
										<figure class="jf-postauthorpic">
											<img src="{{ asset('assets/images/blognews/author-img-02.jpg')}}" alt="image description">
										</figure>
										<div class="jf-articlecontent">
											<div class="jf-articletitle">
												<h3><a href="javascript:void(0);">Always Take A Professional</a></h3>
											</div>
											<span class="jf-authorname"><a href="javascript:void(0);">Emil Occhipinti</a></span>
										</div>
									</div>
									<ul class="jf-postarticlemeta">
										<li>
											<i class="lnr lnr-calendar-full"></i>
											<span>Apr 23, 2019</span>
										</li>
										<li>
											<a href="javascript:void(0);"><i class="lnr lnr-tag"></i><span>Lifestyle &amp; DIY</span></a>
										</li>
									</ul>
								</article>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 float-left">
								<article class="jf-newsarticle">
									<figure class="jf-newsimg">
										<span class="jf-posttag"><i class="fas fa-ellipsis-v"></i></span>
										<img src="{{ asset('assets/images/blognews/img-03.jpg')}}" alt="image description">
									</figure>
									<div class="jf-postauthorname">
										<figure class="jf-postauthorpic">
											<img src="{{ asset('assets/images/blognews/author-img-03.jpg')}}" alt="image description">
										</figure>
										<div class="jf-articlecontent">
											<div class="jf-articletitle">
												<h3><a href="javascript:void(0);">Unemployment Rate Statistics</a></h3>
											</div>
											<span class="jf-authorname"><a href="javascript:void(0);">Abraham Osornio</a></span>
										</div>
									</div>
									<ul class="jf-postarticlemeta">
										<li>
											<i class="lnr lnr-calendar-full"></i>
											<span>Jun 27, 2019</span>
										</li>
										<li>
											<a href="javascript:void(0);"><i class="lnr lnr-tag"></i><span>Lifestyle &amp; DIY</span></a>
										</li>
									</ul>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Blogs News Article End
			*************************************-->
		</main>
		<!--************************************
				Main End
        *************************************-->
        @endsection