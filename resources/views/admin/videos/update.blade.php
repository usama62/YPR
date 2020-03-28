@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Photos</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Update Photos</a></li>
        </ol>
    </div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbtwocolumns jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-9">
					<div class="jf-dbsectionspace jf-haslayout">
						<div class="jf-dashboardbox">
							<div class="jf-dashboardboxtitle">
								<h2>Update Video</h2>
								<span>Add Details</span>
							</div>
							<div class="jf-dashbboardcontent">
							@if(session()->has('message'))
								<div class="alert alert-{{session('class')}}">{{session("message")}}</div>
							@endif
								<form method="POST" action="{{ route('videos.update',$video->id) }}" class="jf-formtheme jf-postajobform" >
								@csrf
									<fieldset>	
										<div class="form-group jf-inputwithicon">
											<input type="text" name="title" class="form-control" value="{{$video->title}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<input type="text" name="description" class="form-control" value="{{$video->description}}">
										</div>
										<div class="form-group jf-inputwithicon">
											<span class="jf-select">
												<select name="status">
													<option value="">Status</option>
													<option value="pending" @if($video->status == 'pending') selected @endif >pending</option>
													<option value="publish" @if($video->status == 'publish') selected @endif >publish</option>
													<option value="draft" @if($video->status == 'draft') selected @endif >draft</option>
												</select>
											</span>
										</div>
                                        <div class="form-group jf-inputwithicon">
											<input type="text" name="video_link" class="form-control" value="{{$video->video_link}}">
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
	</main>
@endsection