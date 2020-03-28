@extends('layouts.admin')

@section('content')    
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Saved Items</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Saved Items</a></li>
        </ol>
    </div>
    <main id="jf-main" class="jf-main jf-haslayout">
        <div class="jf-dbsectionspace jf-haslayout">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="jf-dashboardbox jf-myfavortejobs">
                        <div class="jf-dashboardboxtitle">
                            <h2>Saved Items</h2>
                            <span>Your Saved Items</span>
                        </div>
                        <div class="jf-dashbboardcontent">
                            @forelse($saved as $save)
                            <div class="jf-featurejob">
                                <figure class="jf-companyimg">
                                    <img src="{{ asset('assets/images/image-default.png') }}" alt="image description">
                                </figure>
                                <div class="jf-companycontent">
                                    <div class="jf-companyhead">
                                        <a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">{{$save->articles->category}}</a>
                                        <div class="jf-rightarea">
                                            <a class="jf-tagfeature jf-tagfeatured" href="javascript:void(0);">Saved</a>
                                            <a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="jf-companyname">
                                        <h3><a href="javascript:void(0);">{{$save->articles->title}}</a></h3>
                                        <span>{{str_limit($save->articles->description,40)}}</span>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <div class="text-center" style="padding-top:100px;padding-bottom:100px;">
                                    <img src="{{ asset('assets/images/no-record.png')}}" alt="image description">
                                    <p>No Data Found</p>
                                </div>	
                            @endforelse	
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="jf-pagination">
            {{ $saved->links() }}
        </nav>
    </main>
@endsection