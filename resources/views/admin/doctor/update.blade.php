@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Doctor</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Update Doctor</a></li>
        </ol>
    </div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbtwocolumns jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9">
					<div class="jf-dbsectionspace jf-haslayout">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Update Doctor</h2>
								<span>Edit Details</span>
							</div>
							<div class="jf-dashbboardcontent">
								<form method="POST" action="{{ route('doctor.update',$doctors->id) }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform">
									@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="name" class="form-control" value="{{$doctors->name}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="email" name="email" class="form-control" value="{{$doctors->email}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="speciality" class="form-control" value="{{$doctors->speciality}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="experience" class="form-control" value="{{$doctors->experience}}">
										</div>
                                        <div class="form-group jf-inputwithicon">
											<textarea type="text" name="description" class="form-control" placeholder="Description">{{$doctors->description}}</textarea>
										</div>
										<fieldset class="jf-dragdropimg">
											<div class="jf-inputtyfile">
												<label for="jf-uploadimg">
													<div>
														<img id="profile-img-tag" src="{{ $doctors->profile_image }}" style="height:150px" alt="">
													</div>
													<span>Upload doctors Profile image Here <a href="javascript:void(0);">Browse</a></span>
													<em>Maximum upload file size: 500 KB Maximum image size: 300px X 300px</em>
													<input type="file" name="doctors_logo" id="jf-uploadimg">
												</label>
											</div>
                                            <input type="hidden" name="hiddenimage" value="{{ $doctors->profile_image }}">
										</fieldset>
										<div class="form-group jf-inputwithicon jf-textarea">
											<button type="submit" class="jf-btn jf-active btn-primary">{{ __('Save') }}</button>
										</div>
									</fieldset>
								</form>									
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