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
								<form method="POST" action="{{ route('health.update',$posts->id) }}" enctype="multipart/form-data" class="jf-formtheme jf-postajobform" >
								@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="title" class="form-control" value="{{$posts->title}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" id="healthcategories" name="categories" class="tokenfield" placeholder="Enter categories"/>
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="slug" class="form-control" value="{{$posts->slug}}"/>
										</div>
										<div class="form-group tags-input">
												
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
                                        <ul>
                                            @forelse($categories as $category)
                                                <li style="list-style-type:none;">
                                                    <input type="checkbox" id="jf-salesexecutive" name="category[]" value="{{$category->title}}" <?php category_separator($posts->categories,$category->title); ?>>
                                                    <label for="jf-salesexecutive" style="display: inline;">
                                                        <span>{{$category->title}}</span>
                                                    </label>
                                                </li>
                                            @empty
                                                <p>No categories under Health</p>
                                            @endforelse
                                        </ul>                                       	
										<!-- <a href="javascript:void(0);" class="jf-viewmore">View More</a> -->
									</div>
								</div>
							</div>
                            </form>	
                            @php
                                function category_separator($current_category,$all_category){
                                    $var = explode(",",$current_category);
                                    for($i=0;$i<count($var);$i++){
                                        if($var[$i]==$all_category){
                                            echo 'checked';
                                        }
                                    }
                                }
                            @endphp
						</aside>
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