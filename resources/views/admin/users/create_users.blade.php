@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Users</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Create Users</a></li>
        </ol>
    </div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbtwocolumns jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9">
					<div class="jf-dbsectionspace jf-haslayout">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Create Users</h2>
								<span>Add User Details</span>
							</div>
							<div class="jf-dashbboardcontent">
								<form method="POST" action="{{ route('store.user') }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform">
									@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="name" class="form-control" placeholder="Name">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="email" name="email" class="form-control" placeholder="Email">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="phone" class="form-control" placeholder="Phone">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="age" class="form-control" placeholder="Age">
										</div>
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="gender">
													<option>Gender</option>
													<option>Male</option>
													<option>Female</option>
												</select>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="disease" class="form-control" placeholder="Disease">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="pills" class="form-control" placeholder="Pills">
										</div>
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="role">
													<option>Role</option>
													<option>Admin</option>
													<option>User</option>
												</select>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="address" placeholder=" Address" class="form-control">
										</div>
										<fieldset class="jf-dragdropimg">
											<div class="jf-inputtyfile">
												<label for="jf-uploadimg">
													<div>
														<img id="profile-img-tag" src="" style="height:150px" alt="">
													</div>
													<span>Upload profile picture Here <a href="javascript:void(0);">Browse</a></span>
													<em>Maximum upload file size: 500 KB Maximum image size: 300px X 300px</em>
													<input type="file" name="profile_image" id="jf-uploadimg">
												</label>
											</div>
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