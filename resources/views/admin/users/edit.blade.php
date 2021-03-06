@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Users</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Edit Users</a></li>
        </ol>
    </div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbtwocolumns jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9">
					<div class="jf-dbsectionspace jf-haslayout">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Edit Users</h2>
								<span>Add User Details</span>
								@if($user->status == 0)
								<a href="{{ route('user.deactivate',$user->id) }}" class="jf-btn jf-active btn-primary" style="float:right;margin-top: -20px;">Deactivate User</a>
								@else
								<a href="{{ route('user.activate',$user->id) }}" class="jf-btn jf-active btn-primary" style="float:right;margin-top: -20px;">Activate User</a>
								@endif
							</div>
							<div class="jf-dashbboardcontent">
								<form method="POST" action="{{ route('user.update',$user->id) }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform">
									@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="name" class="form-control" value="{{$user->name}}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="last_name" class="form-control" value="{{$user->last_name}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="email" name="email" class="form-control" value="{{$user->email}}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="password" name="password" minlength="8" class="form-control" value="{{$user->password}}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="date" name="dob" class="form-control" value="{{$user->dob}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="phone" class="form-control" value="{{$user->phone}}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="age" class="form-control" value="{{$user->age}}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="gender">
													<option>Gender</option>
													<option value="male" @if($user->gender == 'male') selected @endif >Male</option>
													<option value="female" @if($user->gender == 'female') selected @endif>Female</option>
												</select>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="disease" class="form-control" value="{{$user->disease}}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="pills" class="form-control" value="{{$user->pills}}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="role">
													<option value="">Role</option>
													<option value="1" @if($user->role == 1) selected @endif >Admin</option>
													<option value="0" @if($user->role != 1) selected @endif>User</option>
												</select>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="address" class="form-control" value="{{$user->address}}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="interest">
													<option>Specify Interest</option>
													<option value="drug" @if($user->interest == 'drug') selected @endif>Drug</option>
													<option value="disease" @if($user->interest == 'disease') selected @endif>Disease</option>
													<option value="health" @if($user->interest == 'health') selected @endif>Health</option>
												</select>
											</span>
										</div>
										<div class="form-group jf-signedcheck">
											<span class="jf-checkbox">
												<input type="checkbox" id="jf-postjob" name="alert"  @if($user->alert == 1) checked @endif>
												<label for="jf-postjob">
													<span>Receive alerts?</span>
												</label>
											</span>
										</div>
										<fieldset class="jf-dragdropimg">
											<div class="jf-inputtyfile">
												<label for="jf-uploadimg">
													<div>
														<img id="profile-img-tag" src="{{$user->profile_image}}" style="height:150px" alt="">
													</div>
													<span>Upload profile picture Here <a href="javascript:void(0);">Browse</a></span>
													<em>Maximum upload file size: 500 KB Maximum image size: 300px X 300px</em>
													<input type="file" name="profile_image" id="jf-uploadimg">
													<input type="hidden" name="profile_image_hidden" id="jf-uploadimg" value="{{$user->profile_image}}">
												</label>
											</div>
										</fieldset>
										<div class="form-group jf-signedcheck">
											<span class="jf-checkbox">
												<input type="checkbox" id="jf-postjob1" name="agree_terms">
												<label for="jf-postjob1">
													<span>confirm the commitment to the site's policy?</span>
												</label>
											</span>
										</div>
										<div class="form-group jf-inputwithicon jf-textarea">
											<button type="submit" id="user-btn" class="jf-btn jf-active btn-primary">{{ __('Save') }}</button>
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