@extends('layouts.admin')

@section('content')
	<div id="jf-dashboardbanner" class="jf-dashboardbanner">
		<h1>Doctors</h1>
		<ol class="jf-breadcrumb">
			<li><a href="javascript:void(0);">Dashboard</a></li>
			<li><a href="javascript:void(0);">Doctors</a></li>
		</ol>
	</div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbsectionspace jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="jf-dashboardbox jf-myappliedjobs">
						<div class="jf-dashboardboxtitle jf-dashboardboxtitlevtwo">
							<div class="jf-title">
								<h2>Doctors</h2>
								<span>Details</span>
							</div>
						</div>
						<div class="jf-dashbboardcontent jf-myjobsapplications">
							<ul>
								<div style="padding: 30px 20px;">
									@if(session()->has('message'))
										<div class="alert alert-{{session('class')}}">{{session("message")}}</div>
									@endif
								</div>
								@forelse($doctors as $doctor)
								<li>
									<div class="jf-featurejob">
										<figure class="jf-companyimg">
											@if($doctor->profile_image != null)
												<img src="{{ asset($doctor->profile_image)}}" alt="image description">
											@else
											<img src="{{ asset('assets/images/default-user-profile-image.png')}}" alt="image description">
											@endif
										</figure>
										<div class="jf-companycontent">
											<div class="jf-companyname">
												<h3><a href="javascript:void(0);">{{ $doctor->name}}</a></h3>
												<span>{{ $doctor->email}}</span>
											</div>
										</div>
									</div>
									<ul class="jf-btnjobalerts jf-btnjobalertsvtwo">
									<!-- <li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li> -->
										<li class="jf-btneditjob"><a href="{{ route('doctor.edit',['id'=>$doctor->id]) }}"><i class="ti-pencil"></i></a></li>
										<li class="jf-btndell"><a href="{{ route('doctor.delete',['id'=>$doctor->id]) }}"><i class="ti-trash"></i></a></li>
									</ul>
									<ul class="jf-jobmatadata">
										<li>
											<i class="ti-calendar"></i>
											<div class="jf-matacontent">
												<span>Created On</span>
												<time datetime="2019-12-12">{{ \Carbon\Carbon::parse($doctor->created_at)->format('M d, Y') }}</time>
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
			{{ $doctors->links() }}
		</nav>
	</main>
@endsection