@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Article</h1>
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
								<h2>Articles</h2>
								<span>Add Details</span>
							</div>
							<div class="jf-dashbboardcontent">
							@if(session()->has('message'))
								<div class="alert alert-{{session('class')}}">{{session("message")}}</div>
							@endif
								<form method="POST" action="{{ route('article.store') }}" class="jf-formtheme jf-postajobform" >
								@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="title" class="form-control" placeholder="Title">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="description" class="form-control" placeholder="Description">
										</div>
                                        <div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="category">
													<option value="">Category</option>
                                                    @foreach($category as $cat)
													<option value="{{$cat->title}}">{{$cat->title}}</option>
                                                    @endforeach
												</select>
											</span>
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