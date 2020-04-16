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
								<form method="POST" action="{{ route('drugs.store') }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform" >
								@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="title" class="form-control" placeholder="Title">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="drugscategories" name="categories" class="tokenfield" placeholder="Enter Drugs categories" />
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="slug" class="form-control" placeholder="Enter Title Alias"/>
										</div>
										<div class="form-group tags-input">
												
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="literal_group" name="literal_group" class="tokenfield" placeholder="Enter Literal Group" >
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="types_drugs" name="types_drugs" class="tokenfield" placeholder="Enter type of drug"/>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="drugs_company" name="drugs_company" class="tokenfield" placeholder="Enter drug comapny"/>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="number" name="drugs_price" class="form-control" placeholder="Enter Price">
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
										<div class="form-group jf-inputwithicon">
											<input type="text" name="drugs_barcode" class="form-control" placeholder="Enter Barcode">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="drug_consumption" id="drug_consumption" class="tokenfield" placeholder="Enter Drug Consumption">
										</div>
										<div class="form-group jf-inputwithicon">
											<button type="button" class="jf-btn jf-active btn-primary" data-toggle="modal" data-target="#myModal">Add New Drug Consumption</button>
										</div>
										<div style="padding: 30px 20px;">
                                    @if(session()->has('message'))
                                        <div class="alert alert-{{session('class')}}">{{session("message")}}</div>
                                    @endif
                                </div>
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
			<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content" style="margin-top: 140px;">
				<div class="modal-header">
				<h4 class="modal-title">Add New Drug Consumption</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<form method="POST" action="{{ route('drug.consumption') }}">
					<div class="modal-body">
						<input type="text" name="new_drug_consumption" style="width:100%">
					</div>
					<div class="modal-footer">
					<button type="submit" id="add_drug_consumption" class="jf-btn jf-active btn-primary" data-dismiss="modal">ADD</button>
				</form>
				
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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