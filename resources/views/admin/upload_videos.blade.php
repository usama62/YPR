@extends('layouts.admin')

@section('content')
    <!--************************************
            Dashboard Inner Banner Start
    *************************************-->
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Videos</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Upload Videos</a></li>
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
									<h2>Upload Videos</h2>
									<span>Add Videos</span>
								</div>
								<div class="jf-dashbboardcontent">
									<form class="jf-formtheme jf-postajobform">
										<fieldset>	
											<div class="form-group jf-inputwithicon">
												<input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="form-group jf-inputwithicon">
												<span class="jf-select">
													<select name="status">
														<option>Status</option>
														<option>Pending</option>
														<option>Publish</option>
														<option>Draft</option>
													</select>
												</span>
                                            </div>
                                            <div class="form-group jf-inputwithicon">
												<input type="text" name="link" class="form-control" placeholder="Video Link">
                                            </div>
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
			<!--************************************
					Jobs Alerts Start End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
@endsection