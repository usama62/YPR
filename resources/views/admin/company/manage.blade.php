@extends('layouts.admin')

@section('content')
	<div id="jf-dashboardbanner" class="jf-dashboardbanner">
		<h1>Companies</h1>
		<ol class="jf-breadcrumb">
			<li><a href="javascript:void(0);">Dashboard</a></li>
			<li><a href="javascript:void(0);">Companies</a></li>
		</ol>
	</div>
	<main id="jf-main" class="jf-main jf-haslayout">
		<div class="jf-dbsectionspace jf-haslayout">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="jf-dashboardbox jf-myappliedjobs">
						<div class="jf-dashboardboxtitle jf-dashboardboxtitlevtwo">
							<div class="jf-title">
								<h2>Companies</h2>
								<span>Companies</span>
							</div>
							<form class="jf-formtheme jf-questsearch" action="{{ route('company.search') }}">
                                <fieldset>
                                    <div class="form-group jf-inputwithicon">
                                        <i class="lnr lnr-magnifier"></i>
                                        <input type="text" name="s" class="form-control" placeholder="Search Here">
                                    </div>
                                    <button type="submit" class="jf-btn jf-active btn-primary"><i class="lnr lnr-magnifier"></i></button>
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
								@forelse($companies as $company)
								<li>
									<div class="jf-featurejob">
										<figure class="jf-companyimg">
											@if($company->logo != null)
												<img src="{{ asset($company->logo)}}" alt="image description">
											@else
											<img src="{{ asset('assets/images/default-user-profile-image.png')}}" alt="image description">
											@endif
										</figure>
										<div class="jf-companycontent">
											<div class="jf-companyname">
												<h3><a href="javascript:void(0);">{{ $company->name}}</a></h3>
												<span></span>
											</div>
										</div>
									</div>
									<ul class="jf-btnjobalerts jf-btnjobalertsvtwo">
									<!-- <li class="jf-btnnewwindow"><a href="javascript:void(0);"><i class="ti-new-window"></i></a></li> -->
										<li class="jf-btneditjob"><a href="{{ route('company.edit',['id'=>$company->id]) }}"><i class="ti-pencil"></i></a></li>
										<li class="jf-btndell"><a onclick="return confirm('Are you sure?')" href="{{ route('company.delete',['id'=>$company->id]) }}"><i class="ti-trash"></i></a></li>
									</ul>
									<ul class="jf-jobmatadata">
										<li>
											<i class="ti-calendar"></i>
											<div class="jf-matacontent">
												<span>Registered On</span>
												<time datetime="2019-12-12">{{ \Carbon\Carbon::parse($company->date)->format('M d, Y') }}</time>
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
			{{ $companies->links() }}
		</nav>
	</main>
@endsection