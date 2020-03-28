@extends('layouts.admin')

@section('content')
<main id="jf-main" class="jf-main jf-haslayout">
			<!--************************************
					Chart Statistics Start
			*************************************-->
			<div class="jf-dbsectionspace jf-haslayout">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						@if(session()->has('message'))
							<div class="alert alert-{{session('class')}}">{{session("message")}}</div>
						@endif 
						<div class="jf-dashboardbox jf-basicformholder">
							<div class="jf-dashboardboxtitle">
								<h2>Profile</h2>
								<span>Update Your Details</span>
							</div>
							
							<div class="jf-dashbboardcontent jf-basicinfo">
								<form method="POST" action="{{ route('profile.update',Auth::user()->id) }}" class="jf-formtheme jf-formbasicinfo">
                                    @csrf
									<fieldset>
                                        <div class="form-group jf-inputwithicon">
											<input type="text" name="name" class="form-control" placeholder="Name" value="{{ auth::user()->name }}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="phone" class="form-control" placeholder="phone" value="{{ auth::user()->phone }}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="email" name="email" class="form-control" placeholder="email" value="{{ auth::user()->email }}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="age" class="form-control jf-unstyled" placeholder="Age" value="{{ auth::user()->age }}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="gender" class="form-control jf-unstyled" placeholder="Gender" value="{{ auth::user()->gender }}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="disease" class="form-control jf-unstyled" placeholder="Disease if any" value="{{ auth::user()->disease }}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="pills" class="form-control jf-unstyled" placeholder="Names of Pills taking if any" value="{{ auth::user()->pills }}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="address" class="form-control" placeholder="Address" value="{{ auth::user()->address }}">
										</div>
										
											<div class="jf-inputtyfile">
												<label for="jf-uploadimg">
													<div>
														<img id="profile-img-tag" src="{{ auth::user()->profile_image }}" style="height:150px" alt="">
													</div>
													<span>Drag Files Here or <a href="javascript:void(0);">Browse</a></span>
													<em>Maximum upload file size: 500 KB Maximum image size: 300px X 300px</em>
													<input type="file" name="uploadimg" id="jf-uploadimg">
												</label>
											</div>
										
										<input type="hidden" name="hiddenimage" value="{{ auth::user()->profile_image }}">
										<div class="form-group jf-btnsarea">
                                            <button type="submit" class="jf-btn jf-active btn-primary">{{ __('Save & Update') }}</button>
                                        </div>
									</fieldset>
								</form>
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