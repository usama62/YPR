@extends('layouts.admin')

@section('content')
    <!--************************************
            Dashboard Inner Banner Start
    *************************************-->
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Users</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Create Users</a></li>
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
											<div class="form-group jf-inputwithicon jf-textarea">
												<textarea type="text" name="address" placeholder=" Address" style="height:150px"></textarea>
											</div>
											<fieldset class="jf-dragdropimg">
												<div class="jf-inputtyfile">
													<label for="jf-uploadimg">
														<i class="ti-layers-alt"></i>
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
						<!-- <div class="jf-dbsectionspace jf-haslayout">
							<div class="jf-dashboardbox">
								<div class="jf-dashboardboxtitle">
									<h2>Job Details</h2>
									<span>Add Job Details</span>
								</div>
								<div class="jf-dashbboardcontent">
									<form class="jf-formtheme jf-formjobpost">
										<fieldset>
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<span class="jf-select">
													<select>
														<option> Salary Range</option>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
													</select>
												</span>
											</div>
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<span class="jf-select">
													<select>
														<option>  Industry</option>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
													</select>
												</span>
											</div>												
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<span class="jf-select">
													<select>
														<option>Functional Area</option>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
													</select>
												</span>
											</div>												
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<span class="jf-select">
													<select>
														<option>  Total Positions</option>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
													</select>
												</span>
											</div>												
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<span class="jf-select">
													<select>
														<option>Job Shift</option>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
													</select>
												</span>
											</div>												
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<span class="jf-select">
													<select>
														<option>Job Type</option>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
													</select>
												</span>
											</div>												
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<input type="text" name="company" class="form-control" placeholder="Job Location">
											</div>											
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<span class="jf-select">
													<select>
														<option> Gender</option>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
													</select>
												</span>
											</div>												
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<span class="jf-select">
													<select>
														<option>Minimum Education</option>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
													</select>
												</span>
											</div>												
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<span class="jf-select">
													<select>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
													</select>
												</span>
											</div>
											<div class="form-group jf-inputwithicon">
												<i class="lnr lnr-star"></i>
												<span class="jf-select">
													<select>
														<option>Experience</option>
														<option>Career Level</option>
														<option>Career Level</option>
														<option>Career Level</option>
													</select>
												</span>
											</div>													
											<div class="form-group jf-inputwithicon jf-inputwithdate">
												<i class="lnr lnr-star"></i>
												<input type="text" name="company" class="form-control" placeholder="Apply Before">
											</div>			
										</fieldset>
									</form>
								</div>
							</div>
						</div> -->
						<!-- <div class="jf-dbsectionspace jf-haslayout">
							<div class="jf-dashboardbox ">
								<div class="jf-dashboardboxtitle">
									<h2>Job Requirments</h2>
									<span>Add Job Requirments</span>
								</div>
								<div class="jf-dashbboardcontent">
									<form class="jf-formtheme jf-formrequirepost">
										<fieldset>
											<div class="form-group jf-inputwithicon jf-textarea">
												<i class="lnr lnr-bubble"></i>
												<textarea placeholder="Type All Job Requirment Heres"></textarea>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
						</div> -->
						<!-- <div class="jf-dbsectionspace jf-haslayout">
							<div class="jf-dashboardbox ">
								<div class="jf-dashboardboxtitle">
									<h2>Job Rewards and Benefits</h2>
									<span>Add Your Rewards &amp; Benefits</span>
								</div>
								<div class="jf-dashbboardcontent jf-postjobrewards  mCustomScrollbar _mCS_2">
									<div class="jf-jobskill">
										<div class="jf-jobskilltitle">
											<h3>Communication</h3>
										</div>
										<ul class="jf-btnjobalerts">
											<li class="jf-btnfollowon"><a href="javascript:void(0);"><i class="ti-power-off"></i></a></li>
											<li class="jf-btndell delete-btn"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
										</ul>
									</div>
									<div class="jf-jobskill">
										<div class="jf-jobskilltitle">
											<h3>Health Insurance</h3>
										</div>
										<ul class="jf-btnjobalerts">
											<li class="jf-btnfollowon"><a href="javascript:void(0);"><i class="ti-power-off"></i></a></li>
											<li class="jf-btndell delete-btn"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
										</ul>
									</div>									
									<div class="jf-jobskill">
										<div class="jf-jobskilltitle">
											<h3>Incentive Bonus</h3>
										</div>
										<ul class="jf-btnjobalerts">
											<li class="jf-btnfollowon"><a href="javascript:void(0);"><i class="ti-power-off"></i></a></li>
											<li class="jf-btndell delete-btn"><a href="javascript:void(0);"><i class="ti-trash"></i></a></li>
										</ul>
									</div>								
								</div>
								<div class="jf-addbenefitsfields">
									<form class="jf-formtheme jf-postajobform">
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<i class="lnr lnr-star"></i>
											<span class="jf-select">
												<select>
													<option> Add Rewards &amp; Benefits</option>
													<option>Career Level</option>
													<option>Career Level</option>
													<option>Career Level</option>
												</select>
											</span>
										</div>
										<div class="jf-postjobfieldbtn">
											<a href="javascript:void(0);" class="jf-btn">Add</a>
										</div>
									</fieldset>
								</form>
								</div>
							</div>
						</div>						 -->
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