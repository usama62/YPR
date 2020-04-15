@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Pages</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Pages</a></li>
        </ol>
    </div>
    <main id="jf-main" class="jf-main jf-haslayout">
        <div class="jf-dbsectionspace jf-haslayout">
            <div class="row">
                <div style="padding: 30px 15px;">
                    <a href="{{ url('/create/page') }}" class="jf-btn jf-active btn-primary">Add New<a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="jf-dashboardbox jf-myappliedjobs">
                        <div class="jf-dashboardboxtitle jf-dashboardboxtitlevtwo">
                            <div class="jf-title">
                                <h2>All Pages</h2>
                            </div>
                            <form class="jf-formtheme jf-questsearch" action="{{ route('page.search') }}">
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

                                @forelse($pages as $post)
                                <li>
                                    <div class="jf-featurejob">
                                        
                                        <div class="jf-companycontent">
                                            <div class="jf-companyname">
                                                <h3><a href="javascript:void(0);">{{ $post->name }}</a></h3>
                                                <span>{{ $post->category }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="jf-btnjobalerts jf-btnjobalertsvtwo">
                                    
                                        <li class="jf-btnnewwindow"><a href="{{ route('page.show',['id'=>$post->slug]) }}" target="_blank"><i class="ti-new-window"></i></a></li>
                                        <li class="jf-btneditjob"><a href="{{ route('page.edit',['id'=>$post->id]) }}"><i class="ti-pencil"></i></a></li>
                                        <li class="jf-btndell"><a href="{{ route('page.delete',['id'=>$post->id]) }}"><i class="ti-trash"></i></a></li>
                                    </ul>
                                    <ul class="jf-jobmatadata">
                                        <li>
                                            <i class="ti-calendar"></i>
                                            <div class="jf-matacontent">
                                                <span>Posted On</span>
                                                <time datetime="2019-12-12">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</time>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="ti-bell"></i>
                                            <div class="jf-matacontent">
                                                    <span>Status</span>
													@if($post->status == "pending")
													    <a class="jf-btnjobtag jf-internship" href="javascript:void(0);">{{$post->status}}</a>
													@elseif($post->status == "publish")
													    <a class="jf-btnjobtag jf-parttimejob" href="javascript:void(0);">{{$post->status}}</a>
													@else
													    <a class="jf-btnjobtag jf-projectbasejob" href="javascript:void(0);">{{$post->status}}</a>
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
        {{ $pages->appends(['s' => $_GET['s'] ])->links() }}
        @else
        {{ $pages->links() }}
        @endif
        </nav>
    </main>
@endsection