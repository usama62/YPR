@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Photos</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Upload Photos</a></li>
        </ol>
    </div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbtwocolumns jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9">
					<div class="jf-dbsectionspace jf-haslayout">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Upload Photo</h2>
								<span>Add Photos</span>
							</div>
							<div class="jf-dashbboardcontent">
								<form method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform" >
								@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="title" class="form-control" placeholder="Title" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="status" required>
													<option>Status</option>
													<option>Pending</option>
													<option>Publish</option>
													<option>Draft</option>
												</select>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<textarea type="text" name="description" class="form-control" placeholder="Description" rows="2" required></textarea>
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
			</div>
		</div>
	</main>
@endsection