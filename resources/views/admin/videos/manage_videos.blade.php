@extends('layouts.admin')

@section('content')
		<div id="jf-dashboardbanner" class="jf-dashboardbanner">
			<h1>Videos</h1>
			<ol class="jf-breadcrumb">
				<li><a href="javascript:void(0);">Dashboard</a></li>
				<li><a href="javascript:void(0);">Videos</a></li>
			</ol>
		</div>
		<main id="jf-main" class="jf-main jf-haslayout">
			<div class="jf-dbsectionspace jf-haslayout">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<div class="jf-dashboardbox jf-myappliedjobs">
							<div class="jf-dashboardboxtitle jf-dashboardboxtitlevtwo">
								<div class="jf-title">
									<h2>Videos</h2>
									<span>Your Latest Posted Videos</span>
								</div>
								<form class="jf-formtheme jf-questsearch" action="{{ route('videos.search') }}">
									<fieldset>
										<div class="form-group jf-inputwithicon">
											<i class="lnr lnr-magnifier"></i>
											<input type="text" name="s" class="form-control" placeholder="Search Here">
										</div>
										<a class="jf-btnsearch" href="javascript:void(0)"><i class="lnr lnr-magnifier"></i></a>
									</fieldset>
								</form>
							</div>
							<div class="jf-dashbboardcontent jf-myjobsapplications">
								<ul>
									<div style="padding: 30px 20px;">
										@if(session()->has('message'))
											<div class="alert alert-{{session('class')}}">{{session("message")}}</div>
										@endif
									</div>
									
									@forelse($videos as $video)
									<li>
										<div class="jf-featurejob">
											<figure class="jf-companyimg">
												<img src="{{ asset('assets/images/play-button.png') }}" alt="image description">
											</figure>
											<div class="jf-companycontent">
												<div class="jf-companyname">
													<h3><a href="javascript:void(0);">{{$video->title}}</a></h3>
													<span>{{str_limit($video->description, 40) }}</span>
												</div>
											</div>
										</div>
										<ul class="jf-btnjobalerts jf-btnjobalertsvtwo">
											<li class="jf-btnnewwindow"><a href="{{ route('video.detail',['id'=>$video->id]) }}"><i class="ti-new-window"></i></a></li>
											<li class="jf-btneditjob"><a href="{{ route('videos.edit',['id'=>$video->id]) }}"><i class="ti-pencil"></i></a></li>
											<li class="jf-btndell"><a onclick="return confirm('Are you sure?')" href="{{ route('videos.delete',['id'=>$video->id]) }}"><i class="ti-trash"></i></a></li>
										</ul>
										<ul class="jf-jobmatadata">
											<li>
												<i class="ti-calendar"></i>
												<div class="jf-matacontent">
													<span>Posted On</span>
													<time datetime="2019-12-12">{{ \Carbon\Carbon::parse($video->created_at)->format('M d, Y') }}</time>
												</div>
											</li>
											<li>
												<i class="ti-bell"></i>
												<div class="jf-matacontent">
													<span>Video Status</span>
													@if($video->status == "pending")
													<a class="jf-btnjobtag jf-internship" href="javascript:void(0);">{{$video->status}}</a>
													@elseif($video->status == "publish")
													<a class="jf-btnjobtag jf-parttimejob" href="javascript:void(0);">{{$video->status}}</a>
													@else
													<a class="jf-btnjobtag jf-projectbasejob" href="javascript:void(0);">{{$video->status}}</a>
													@endif
												</div>
											</li>
										</ul>
									</li>
									@empty
									<div class="text-center" style="padding-top:100px;padding-bottom:100px;">
										<img src="{{ asset('assets/images/no-record.png')}}" alt="image description">
										<p>No Data Found</p>
									</div>	
									@endforelse	
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="jf-pagination">
				@if(isset($_GET['s']))
					{{ $videos->appends(['s' => $_GET['s'] ])->links() }}
				@else
					{{ $videos->links() }}
				@endif
			</nav>
		</main>
@endsection