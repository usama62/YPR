@extends('layouts.admin')

@section('content')
	<div id="jf-dashboardbanner" class="jf-dashboardbanner">
		<h1>Users</h1>
		<ol class="jf-breadcrumb">
			<li><a href="javascript:void(0);">Dashboard</a></li>
			<li><a href="javascript:void(0);">Users</a></li>
		</ol>
	</div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbsectionspace jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="jf-dashboardbox jf-myappliedjobs">
						<div class="jf-dashboardboxtitle jf-dashboardboxtitlevtwo">
							<div class="jf-title">
								<h2>Users</h2>
								<span>Registered Users</span>
							</div>
						</div>
						<div class="jf-dashbboardcontent jf-myjobsapplications">
							<ul>
								<div style="padding: 30px 20px;">
									@if(session()->has('message'))
										<div class="alert alert-{{session('class')}}">{{session("message")}}</div>
									@endif
								</div>
								@forelse($users as $user)
								<li>
									<div class="jf-featurejob">
										<figure class="jf-companyimg">
											@if($user->profile_image != null)
												<img src="{{ asset($user->profile_image)}}" alt="image description">
											@else
											<img src="{{ asset('assets/images/default-user-profile-image.png')}}" alt="image description">
											@endif
										</figure>
										<div class="jf-companycontent">
											<div class="jf-companyhead">
												@if($user->role == 2)
												<a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Customer</a>
												@else
												<a class="jf-btnjobtag jf-parttimejob" href="javascript:void(0);">Admin</a>
												@endif
											</div>
											<div class="jf-companyname">
												<h3><a href="javascript:void(0);">{{ $user->name}}</a></h3>
												<span>{{ $user->email}}</span>
											</div>
										</div>
									</div>
									<ul class="jf-btnjobalerts jf-btnjobalertsvtwo">
									<!-- <li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li> -->
										<li class="jf-btneditjob"><a href="{{ route('user.edit',['id'=>$user->id]) }}"><i class="ti-pencil"></i></a></li>
										<li class="jf-btndell"><a href="{{ route('user.delete',['id'=>$user->id]) }}"><i class="ti-trash"></i></a></li>
									</ul>
									<ul class="jf-jobmatadata">
										<li>
											<i class="ti-calendar"></i>
											<div class="jf-matacontent">
												<span>Registered At</span>
												<time datetime="2019-12-12">{{ \Carbon\Carbon::parse($user->date)->format('M d, Y') }}</time>
											</div>
										</li>
										<li>
											<i class="ti-bell"></i>
											<div class="jf-matacontent">
												<span>Application Status</span>
												<time datetime="2019-12-12">Active</time>
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
			{{ $users->links() }}
		</nav>
	</main>
@endsection