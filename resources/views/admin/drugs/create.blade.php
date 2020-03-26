@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Drugs</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Drugs</a></li>
        </ol>
    </div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbtwocolumns jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9">
					<div class="jf-dbsectionspace jf-haslayout">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Drugs</h2>
								<span>Add Details</span>
							</div>
							<div class="jf-dashbboardcontent">
								<form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform" >
								@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="title" class="form-control" placeholder="Title">
										</div>
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="status" required>
													<option>Status</option>
													<option>Public</option>
													<option>Pending</option>
													<option>Draft</option>
												</select>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<textarea type="text" name="description" class="form-control" placeholder="Description"></textarea>
										</div>
										<fieldset class="jf-dragdropimg">
											<div class="jf-inputtyfile">
												<label for="jf-uploadimg">
													<i class="ti-layers-alt"></i>
													<span>Drag Files Here or <a href="javascript:void(0);">Browse</a></span>
													<em>Maximum upload file size: 500 KB Maximum image size: 300px X 300px</em>
													<input type="file" name="uploadimg" id="jf-uploadimg">
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
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 float-left">
					<div class="jf-dbsectionspace jf-haslayout">
						<aside id="jf-sidebar" class="jf-sidebar jf-sidebarcol">
							<div id="jf-narrowsearchcollapse" class="jf-themecollapse jf-narrowsearchcollapse">
								<div class="jf-widget jf-themecollapsetitle open" data-collapse-summary="" aria-expanded="true"><a href="#">
									<div class="jf-widgettitle">
										<h3>Select Categories</h3>
										<span class="fa fa-chevron-right"></span>
									</div>
								</a></div>
								<div class="jf-widget jf-themecollapsecontent" aria-hidden="false" style="display: block;">
									<div class="jf-checkboxgroup">
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-salesexecutive" name="bycondition" value="Sales Executive">
											<label for="jf-salesexecutive">
												<span>Flu</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-graphicdesigner" name="bycondition" value="Graphic Designer" checked="">
											<label for="jf-graphicdesigner">
												<span>Flu</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-marketingexecutive" name="bycondition" value="Marketing Executive">
											<label for="jf-marketingexecutive">
												<span>Flu</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-accountant" name="bycondition" value="Accountant">
											<label for="jf-accountant">
												<span>Flu</span>
											</label>
										</span>
										<span class="jf-checkbox">
											<input type="checkbox" id="jf-salesmarketingexecutive" name="bycondition" value="Sales / Marketing Executive">
											<label for="jf-salesmarketingexecutive">
												<span>Flu</span>
											</label>
										</span>
										<a href="javascript:void(0);" class="jf-viewmore">View More</a>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection