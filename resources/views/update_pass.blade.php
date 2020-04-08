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
								<h2>Change Passowrd</h2>
								<span>Update Your Details</span>
							</div>
							
							<div class="jf-dashbboardcontent jf-basicinfo">
                            @if(session()->has('message'))
                                <div class="alert alert-{{session('class')}}">{{session("message")}}</div>
                            @endif 
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
								<form method="POST" action="{{ route('pass.update',Auth::user()->id) }}" class="jf-formtheme jf-formbasicinfo">
                                    @csrf
									<fieldset>
										<div class="form-group jf-inputwithicon" style="width:100%">
											<input type="password" name="old_password" class="form-control" placeholder="Enter Old Password" required>
										</div>
                                        <div class="form-group jf-inputwithicon" style="width:100%">
											<input type="password" name="password" class="form-control" placeholder="Enter New Password" required>
										</div>
                                        <div class="form-group jf-inputwithicon" style="width:100%">
											<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password" required>
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
		</main>
	
@endsection