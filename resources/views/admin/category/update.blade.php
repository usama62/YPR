@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Categories</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Create Categories</a></li>
        </ol>
    </div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbtwocolumns jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9">
					<div class="jf-dbsectionspace jf-haslayout">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Categories</h2>
								<span>Add Details</span>
							</div>
							<div class="jf-dashbboardcontent">
							@if(session()->has('message'))
								<div class="alert alert-{{session('class')}}">{{session("message")}}</div>
							@endif
								<form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform" >
								@csrf
									<fieldset>
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="parent">
													<option value="">Category Type</option>
													@foreach($categories as $cat)
													<option value="{{$cat->id}}" @if($cat->id == $category->parent_id) selected @endif>{{$cat->name}}</option>
													@endforeach
												</select>
											</span>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="name" class="form-control" value="{{$category->name}}" required>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="slug" class="form-control" value="{{$category->slug}}" required/>
										</div>
										@if(Auth::user()->role == 1)
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="access_level" required>
													<option>Access Level</option>
													<option value="admin" @if($category->access_level == "admin") selected @endif>Admin</option>
													<option value="public" @if($category->id == "public") selected @endif>Public</option>
												</select>
											</span>
										</div>
										@endif
										<div class="form-group tags-input" data-name="tags_input">
												
										</div>	
                                        <div class="form-group jf-inputwithicon">
											<textarea type="text" name="description" class="form-control">{{$category->description}}</textarea>
										</div>
										<fieldset class="jf-dragdropimg">
											<div class="jf-inputtyfile">
												<label for="jf-uploadimg">
													<div>
														<img id="profile-img-tag" src="{{ $category->image }}" style="height:150px" alt="">
													</div>
													<span>Upload Company logo Here <a href="javascript:void(0);">Browse</a></span>
													<em>Maximum upload file size: 500 KB Maximum image size: 300px X 300px</em>
													<input type="file" name="image" id="jf-uploadimg">
												</label>
											</div>
                                            <input type="hidden" name="hiddenimage" value="{{$category->image}}">
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