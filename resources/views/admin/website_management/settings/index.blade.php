@extends('layouts.admin')

@section('content')
<main id="jf-main" class="jf-main jf-haslayout">
    <div class="jf-dbsectionspace jf-haslayout">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jf-dashboardbox jf-myfollowingcompanies">
                    <div class="jf-dashboardboxtitle">
                        <h2>Settings</h2>
                    </div>
                    <div class="jf-dashbboardcontent jf-followingcompanies jf-followingcompaniesvtwo">
                        <ul class="jf-filterbalenav nav navbar-nav">
                            <li class="nav-item">
                                <a class="active" id="home-tab" data-toggle="tab" href="#about"><i class="ti-layers-alt"></i>Logo Settings</a>
                            </li>
                            <li class="nav-item">
                                <a id="profile-tab" data-toggle="tab" href="#openjobs"><i class="ti-pin-alt"></i>Following</a>
                            </li>
                            <li class="nav-item">
                                <a id="messages-tab" data-toggle="tab" href="#gallery"><i class="ti-na"></i>Not Following</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="jf-jobcompaniescontent jf-haslayout tab-pane active fade show" id="about">
                                <div style="padding: 30px 20px;">
                                    @if(session()->has('message'))
                                        <div class="alert alert-{{session('class')}}">{{session("message")}}</div>
                                    @endif
                                </div>
                                <div class="jf-featurejob">
                                    <div class="row">
                                        <h4 style="padding: 30px;">LOGO</h4>
                                    </div>
                                    <div>
                                        <form method="POST" action="{{ route('logo.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <fieldset class="jf-dragdropimg">
                                                <div class="jf-inputtyfile">
                                                    <label for="jf-uploadimg">
                                                        <div>
                                                            <img id="profile-img-tag" src="{{ $logo->setting_value}}" style="height:150px" alt="">
                                                        </div>
                                                        <span>Drag Files Here or <a href="javascript:void(0);">Browse</a></span>
                                                        <em>Maximum upload file size: 500 KB Maximum image size: 300px X 300px</em>
                                                        <input type="file" name="uploadimg" id="jf-uploadimg">
                                                    </label>
                                                </div>
                                            </fieldset>
                                            <input type="hidden" name="hiddenimage" value="{{ $logo->setting_value}}">
                                            <div class="form-group jf-inputwithicon jf-textarea">
                                                <button type="submit" class="jf-btn jf-active btn-primary">{{ __('Save') }}</button>
                                            </div>
                                        </form>
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
                                        <span class="jf-followuser jf-followinguser"><a href="javascript:void(0);"> following</a></span>
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
                                        <span class="jf-followuser"><a href="javascript:void(0);">follow</a></span>
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
</main>
        <script>
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$('#profile-img-tag').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
			}
			$("#jf-uploadimg").change(function(){
				readURL(this);
		});
    </script>
@endsection