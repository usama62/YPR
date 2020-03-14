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
									<!-- <fieldset class="jf-searchoptions">
										<div class="form-group">
											<div class="jf-radio jf-findjobs jf-search-type" data-class="js-job">
												<input type="radio" name="searchoptions" id="jf-findjobs" checked>
												<label for="jf-findjobs">Health</label>
											</div>
											<div class="jf-radio jf-employers jf-search-type" data-class="js-employer">
												<input type="radio" name="searchoptions" id="jf-employers">
												<label for="jf-employers">Disease</label>
											</div>
											<div class="jf-radio jf-candidates jf-search-type" data-class="js-candidate">
												<input type="radio" name="searchoptions" id="jf-candidates">
												<label for="jf-candidates">Drug</label>
											</div>
										</div>
									</fieldset> -->
									<fieldset class="jf-searcharea">
										<div class="jf-searchholder">
											<div class="form-group jf-inputwithicon">
												<input type="search" name="search" style="width:95%" class="form-control" placeholder="Search...">
											</div>
										</div>
										<div class="jf-searchholder">
											<span class="jf-select">
												<select data-placeholder="All" class="chosen-select locations" name="catagory">
													<option value="">Select catagory</option>
													<option value="Health">Health</option>
													<option value="Disease">Disease</option>
													<option value="Drug">Drug</option>
												</select>
											</span>
										</div>
										<div class="jf-searchbtn">
											<a href="javascript:void(0)" class="jf-btn"><i class="lnr lnr-magnifier"></i></a>
										</div>
									</fieldset>
								</form>
								<div class="jf-btnsjobstags">
									<span>Lorem ipsum is placeholder text commonly used in the graphic.</span>
									<ul class="jf-btnjobtags">
										<li><a class="jf-btnjobtag jf-fulltimejob" href="">Lorem ipsum</a></li>
										<li><a class="jf-btnjobtag jf-internship" href="">Lorem ipsum</a></li>
										<li><a class="jf-btnjobtag jf-parttimejob" href="">Lorem ipsum</a></li>
										<li><a class="jf-btnjobtag jf-projectbasejob" href="">Lorem ipsum</a></li>
										<li><a class="jf-btnjobtag jf-homebasejob" href="">Lorem ipsum</a></li>
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
												<h3><a href="javascript:void(0);">Dr. Lorem Ipsum</a></h3>
												<span>Senior surgeon</span>
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
												<h3><a href="javascript:void(0);">Dr. Lorem Ipsum</a></h3>
												<span>Paediatrician</span>
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
												<h3><a href="javascript:void(0);">Dr. Lorem Ipsum</a></h3>
												<span>Dentist</span>
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
												<h3><a href="javascript:void(0);">Dr. Lorem Ipsum</a></h3>
												<span>general physician</span>
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
											<span>Lorem Ipsum</span>
											<span>XYZ Company LTD</span>
										</div>
										<div class="jf-description">
											<blockquote>
												<q>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have<span>scrambled parts of Cicero's De Finibus Bonorum et Malorum</span> for use in a type specimen book... </q>
											</blockquote>
										</div>
									</div>
									<div class="item jf-employstory">
										<figure class="jf-empoyimg">
											<img src="{{ asset('assets/images/testimonials/img-02.jpg')}}" alt="image descrion">
										</figure>
										<div class="jf-empoyerinfo">
											<h3>Margorie Wayman</h3>
											<span>Lorem Ipsum</span>
											<span>XYZ Company LTD</span>
										</div>
										<div class="jf-description">
											<blockquote>
											<q>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have<span>scrambled parts of Cicero's De Finibus Bonorum et Malorum</span> for use in a type specimen book... </q>
											</blockquote>
										</div>
									</div>
									<div class="item jf-employstory">
										<figure class="jf-empoyimg">
											<img src="{{ asset('assets/images/testimonials/img-03.jpg')}}" alt="image descrion">
										</figure>
										<div class="jf-empoyerinfo">
											<h3>Margorie Wayman</h3>
											<span>Lorem ipsum</span>
											<span>XYZ Company LTD</span>
										</div>
										<div class="jf-description">
											<blockquote>
											<q>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have<span>scrambled parts of Cicero's De Finibus Bonorum et Malorum</span> for use in a type specimen book... </q>
											</blockquote>
										</div>
									</div>
									<div class="item jf-employstory">
										<figure class="jf-empoyimg">
											<img src="{{ asset('assets/images/testimonials/img-04.jpg')}}" alt="image descrion">
										</figure>
										<div class="jf-empoyerinfo">
											<h3>Margorie Wayman</h3>
											<span>Lorem Ipsum</span>
											<span>XYZ Company LTD</span>
										</div>
										<div class="jf-description">
											<blockquote>
												<q>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have<span>scrambled parts of Cicero's De Finibus Bonorum et Malorum</span> for use in a type specimen book... </q>
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
								<!-- <div class="jf-sharestory">
									<figure>
										<img src="{{ asset('assets/images/icon-img.png') }}" alt="img-description">
									</figure>
									<div class="jf-sharestorycontent">
										<h3>Want To Share Your Success Story?</h3>
										<a href="javascript:void(0);">Click Here to Make Your Story</a>
									</div>
								</div> -->
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
			<!-- <section class="jf-sectionspace jf-haslayout">
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
			</section> -->
			<!--************************************
					Blogs News Article End
			*************************************-->
		</main>
		<!--************************************
				Main End
        *************************************-->
        @endsection