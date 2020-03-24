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
									<h2>Edit User</h2>
                                    <span>Edit User Details</span>
                                    <div class="profile_image">
                                        @if($user->profile_image != null)
                                            <img src="{{ asset($user->profile_image)}}" alt="image description">
                                        @else
                                            <img src="{{ asset('assets/images/default-user-profile-image.png')}}" alt="image description">
                                        @endif
                                    </div>
								</div>
								<div class="jf-dashbboardcontent">
									<form method="POST" action="{{ route('user.update',$user->id) }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform">
										@csrf
										<fieldset>	
											<div class="form-group jf-inputwithicon">
												<input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                                            </div>
                                            <div class="form-group jf-inputwithicon">
												<input type="email" name="email" class="form-control" value="{{$user->email}}" required>
                                            </div>
                                            <div class="form-group jf-inputwithicon">
												<input type="password" name="password" class="form-control" value="{{$user->password}}" required>
                                            </div>
                                            <div class="form-group jf-inputwithicon">
												<input type="text" name="phone" class="form-control" value="{{$user->phone}}" required>
                                            </div>
                                            <div class="form-group jf-inputwithicon">
												<input type="text" name="age" class="form-control" value="{{$user->age}}" required>
                                            </div>
                                            <div class="form-group jf-inputwithicon">
												<span class="jf-select">
													<select name="gender" required>
														<option>Gender</option>
														<option value="male" @if($user->gender == 'male') selected @endif >Male</option>
														<option value="female" @if($user->gender == 'female') selected @endif >Female</option>
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
													<select name="role" required>
														<option value="">Role</option>
														<option value="1" @if($user->role == 1) selected @endif >Admin</option>
														<option value="0" @if($user->role == 0) selected @endif >User</option>
													</select>
												</span>
                                            </div>
											<div class="form-group jf-inputwithicon jf-textarea">
												<textarea type="text" name="address" value="{{$user->name}}" style="height:150px"  required></textarea>
											</div>
											<fieldset class="jf-dragdropimg">
												<div class="jf-inputtyfile">
													<label for="jf-uploadimg">
														<i class="ti-layers-alt"></i>
														<span>Update profile picture Here <a href="javascript:void(0);">Browse</a></span>
														<em>Maximum upload file size: 500 KB Maximum image size: 300px X 300px</em>
														<input type="file" name="profile_image" id="jf-uploadimg">
														<input type="hidden" name="profile_image_hidden" id="jf-uploadimg" value="{{$user->profile_image}}">
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
@endsection