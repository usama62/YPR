@extends('layouts.admin')

@section('content')
<main id="jf-main" class="jf-main jf-haslayout">
			<!--************************************
					Chart Statistics Start
			*************************************-->
			<div class="jf-dbsectionspace jf-haslayout">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="jf-dashboardbox jf-basicformholder">
							<div class="jf-dashboardboxtitle">
								<h2>Basic Information</h2>
								<span>Add Your Details</span>
							</div>
							<div class="jf-dashbboardcontent jf-basicinfo">
								<form class="jf-formtheme jf-formbasicinfo">
                                    @csrf
									<fieldset>
                                        <div class="form-group jf-inputwithicon">
											<input type="text" name="name" class="form-control" placeholder="Name" value="{{ auth::user()->name }}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="phone" class="form-control" placeholder="{{ auth::user()->phone }}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="email" name="email" class="form-control" placeholder="{{ auth::user()->email }}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="age" class="form-control jf-unstyled" placeholder="Age" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="gender" class="form-control jf-unstyled" placeholder="Gender" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="disease" class="form-control jf-unstyled" placeholder="Disease if any">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="pills" class="form-control jf-unstyled" placeholder="Names of Pills taking if any">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="address" class="form-control" placeholder="Address">
										</div>
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
			<!--************************************
					Chart Statistics End
			*************************************-->
		</main>
@endsection