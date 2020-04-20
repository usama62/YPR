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
                            <div style="padding: 30px 20px;">
                                @if(session()->has('message'))
                                    <div class="alert alert-{{session('class')}}">{{session("message")}}</div>
                                @endif
                            </div>
                            @forelse($saved as $saved_item)
                            <div class="jf-featurejob">
                                <figure class="jf-companyimg">
                                    @if($saved_item->posts->image != null)
                                    <img src="{{ asset($saved_item->posts->image) }}" alt="image description">
                                    @else
                                    <img src="{{ asset('assets/images/image-default.png') }}" alt="image description">
                                    @endif
                                </figure>
                                <div class="jf-companycontent">
                                    <div class="jf-companyname" style="width:75%">
                                        <h3><a href="javascript:void(0);">{{$saved_item->posts->title}}</a></h3>
                                        <span>{{$saved_item->posts->categories }}</span>
                                    </div>
                                    <div style="float:right">
                                        @if($saved_item->posts->post_type == "Health")
                                            <a class="jf-btn" href="{{ route('health.detail',['id'=>$saved_item->posts->id]) }}">Details</a>
                                        @elseif($saved_item->posts->post_type == "Disease")
                                            <a class="jf-btn" href="{{ route('disease.detail',['id'=>$saved_item->posts->id]) }}">Details</a>
                                        @else
                                            <a class="jf-btn" href="{{ route('drugs.detail',['id'=>$saved_item->posts->id]) }}">Details</a>
                                        @endif
                                            <a class="jf-btn" href="{{ route('saved.delete',['id'=>$saved_item->id]) }}">Remove</a>
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