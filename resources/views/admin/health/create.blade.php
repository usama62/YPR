@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Health</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Health</a></li>
        </ol>
    </div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbtwocolumns jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9">
					<div class="jf-dbsectionspace jf-haslayout">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Health</h2>
								<span>Add Details</span>
							</div>
							<div class="jf-dashbboardcontent">
								<form method="POST" action="{{ route('health.store') }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform" >
								@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="title" class="form-control" placeholder="Title" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="healthcategories" name="categories" class="tokenfield" placeholder="Enter categories"/>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="slug" class="form-control" placeholder="Enter Title Alias" required/>
										</div>
										<div class="form-group tags-input">
												
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="literal_group" name="literal_group" class="tokenfield" placeholder="Enter Literal Group" >
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="diseasecategories" name="related_diseases" class="tokenfield" placeholder="Enter related diseases" >
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="health_code" class="form-control" placeholder="Enter health code" required/>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="competent_company" class="form-control" placeholder="Enter competent company" required/>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="type_health" name="type_health" class="tokenfield" placeholder="Enter type of health">
										</div>
										
										@if(Auth::user()->role == 1)
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="status" required>
													<option>Status</option>
													@foreach($status as $key=>$value)
														<option value="{{$key}}">{{$value}}</option>
													@endforeach
												</select>
											</span>
										</div>
										@endif
										<div class="form-group jf-signedcheck">
											<span class="jf-checkbox">
												<input type="checkbox" id="jf-postjob" name="signed">
												<label for="jf-postjob">
													<span>Hide Publisher Data</span>
												</label>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<textarea type="text" name="description" class="form-control" placeholder="Description"></textarea>
										</div>
										<fieldset class="jf-dragdropimg">
											<div class="jf-inputtyfile">
												<label for="jf-uploadimg">
													<div>
														<img id="profile-img-tag" src="" style="height:150px" alt="">
													</div>
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