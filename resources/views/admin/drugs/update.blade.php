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
								<form method="POST" action="{{ route('drugs.update',$posts->id) }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform" >
								@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="title" class="form-control" value="{{$posts->title}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="drugscategories" name="categories" class="tokenfield" placeholder="Enter categories"/>
											<input type="hidden" id="drugs_hidden" value="{{$posts->categories}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="slug" class="form-control" value="{{$posts->slug}}"/>
										</div>
										<div class="form-group tags-input">
												
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="literal_group" name="literal_group" class="tokenfield" placeholder="Enter Literal Group"/>
											<input type="hidden" id="literal_hidden" value="{{$posts->literal_group}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="types_drugs" name="types_drugs" class="tokenfield" placeholder="Enter Types of drugs"/>
											<input type="hidden" id="types_drug_hidden" value="{{$posts->types_drugs}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="drugs_company" required>
													<option>Company</option>
													<option @if($posts->drugs_company == 'Company1') selected @endif >Company1</option>
													<option @if($posts->drugs_company == 'Company2') selected @endif >Company2</option>
													<option @if($posts->drugs_company == 'Company3') selected @endif >Company3</option>
													<option @if($posts->drugs_company == 'Company4') selected @endif >Company4</option>
													<option @if($posts->drugs_company == 'Company5') selected @endif >Company5</option>
												</select>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="number" name="drugs_price" class="form-control" value="{{$posts->drugs_price}}">
										</div>
										@if(Auth::user()->role == 1)
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="status" required>
													<option value="">Status</option>
													@foreach($status as $key=>$value)
														<option value="{{$key}}" @if($posts->status == $key) selected @endif >{{$value}}</option>
													@endforeach
												</select>
											</span>
										</div>
										@endif
										<div class="form-group jf-inputwithicon">
											<input type="text" name="drugs_barcode" class="form-control" value="{{$posts->drugs_barcode}}">
										</div>
										<div class="form-group jf-signedcheck">
											<span class="jf-checkbox">
												<input type="checkbox" id="jf-postjob" name="signed" @if($posts->hide_publisher == 1) checked @endif>
												<label for="jf-postjob">
													<span>Hide Publisher Data</span>
												</label>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<textarea type="text" name="description" class="form-control">{{$posts->description}}</textarea>
										</div>
										<fieldset class="jf-dragdropimg">
											<div class="jf-inputtyfile">
												<label for="jf-uploadimg">
													<div>
														<img id="profile-img-tag" src="{{$posts->image}}" style="height:150px" alt="">
													</div>
													<span>Drag Files Here or <a href="javascript:void(0);">Browse</a></span>
													<em>Maximum upload file size: 500 KB Maximum image size: 300px X 300px</em>
													<input type="file" name="uploadimg" id="jf-uploadimg">
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