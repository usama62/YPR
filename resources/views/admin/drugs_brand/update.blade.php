@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Drugs Brand</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Drugs Brand</a></li>
        </ol>
    </div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbtwocolumns jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9">
					<div class="jf-dbsectionspace jf-haslayout">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Drugs Brand</h2>
								<span>Update Details</span>
							</div>
							<div class="jf-dashbboardcontent">
								<form method="POST" action="{{ route('drugs_brand.update',$posts->id) }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform" >
								@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="name" class="form-control" value="{{$posts->name}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="drugscategories" name="categories" class="tokenfield" placeholder="Enter Drugs categories" />
											<input type="hidden" id="drugs_hidden" value="{{$posts->category}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="drugs2" name="related_drugs" class="tokenfield" placeholder="Enter Related drugs"/>
											<input type="hidden" id="related_drugs_hidden" value="{{$posts->related_drugs}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="slug" class="form-control" value="{{$posts->slug}}"/>
										</div>
										<div class="form-group tags-input">
												
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="drugs_company" name="drugs_company" class="tokenfield" placeholder="Enter drug comapny"/>
											<input type="hidden" id="drugs_company_hidden" value="{{$posts->drugs_company}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="number" name="price" class="form-control" value="{{$posts->drug_price}}">
										</div>
										@if(Auth::user()->role == 1)
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="status" required>
													<option>Status</option>
													@foreach($status as $key=>$value)
														<option value="{{$key}}" @if($posts->status == $key) selected @endif>{{$value}}</option>
													@endforeach
												</select>
											</span>
										</div>
										@endif
										<div class="form-group jf-inputwithicon">
											<input type="text" name="barcode" class="form-control" value="{{$posts->barcode}}">
										</div>
										<div class="form-group jf-signedcheck" style="width:50%">
											<span class="jf-checkbox">
												<input type="checkbox" id="jf-postjob1" name="signed"  @if($posts->hide_publisher == 1) checked @endif>
												<label for="jf-postjob1">
													<span>Hide Publisher Data</span>
												</label>
											</span>
										</div>
										<div class="form-group jf-signedcheck" style="width:50%">
											<span class="jf-checkbox">
												<input type="checkbox" id="jf-postjob" name="ads"  @if($posts->ads == 1) checked @endif>
												<label for="jf-postjob">
													<span>Advertise?</span>
												</label>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<button type="button" class="jf-btn jf-active btn-primary" data-toggle="modal" data-target="#myModal">Add Drugs Brand type</button>
											<input type="hidden" id="datatosave" name="drug_brand_type">
											<div id="show_brand_type"></div>
										</div>
										<div class="form-group jf-inputwithicon" style="margin-top: 15px;">
											<textarea type="text" name="description" class="form-control">{{$posts->description}}</textarea>
										</div>
										<fieldset class="jf-dragdropimg">
											<div class="jf-inputtyfile">
												<label for="jf-uploadimg">
													<div>
														<img id="profile-img-tag" src="{{ $posts->image }}" style="height:150px" alt="">
													</div>
													<span>Drag Files Here or <a href="javascript:void(0);">Browse</a></span>
													<em>Maximum upload file size: 500 KB Maximum image size: 300px X 300px</em>
													<input type="file" name="image" id="jf-uploadimg">
												</label>
											</div>
										</fieldset>
										<input type="hidden" name="hiddenimage" value="{{ $posts->image }}">
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

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content" style="margin-top: 140px;">
				<div class="modal-header">
				<h4 class="modal-title">Add New Drug Brand Type</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<input type="text" id="new_drug_brand_type" style="width:100%">
				</div>
				<div class="modal-footer">
				<button type="button" id="add_btn" class="jf-btn jf-active btn-primary" data-dismiss="modal">ADD</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
	<script>
		$("#add_btn").click(function(){
			var brands = [];
			var val = $('#new_drug_brand_type').val();
			if(val != ""){
				$("#show_brand_type").append(" <div class='newbrand'>"+ val +"<button type='button' class='close'>&times;</button></div>");
				$('#new_drug_brand_type').val("");
			}
			brands.push(val);
			console.log(brands);
			$("#datatosave").val(brands.join());
		});
	</script>
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