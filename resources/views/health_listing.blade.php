@extends('layouts.ypr')

@section('content')
    <!--************************************
				breadcrumbarea start
    *************************************-->
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Health</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <main id="jf-main" class="jf-main jf-haslayout">
        <div class="jf-sectionspace jf-haslayout">
            <div class="jf-haslayout">
                <div class="container">
                    <div class="row">
                        <div id="jf-threecolumns">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="jf-candidatessearchsvtwo">
                                    @forelse($values as $value)
                                    <div class="jf-candidatessearcgrid jf-verticaltop">
                                        <div class="jf-candidatessearch">
                                            <figure class="jf-candidatescover">)
                                                <img src="{{ asset($value->image) }}" alt="img-description">	
                                            </figure>
                                            <figure>
                                                <img src="{{ asset('assets/images/successstory/grid/img-01.png') }}" alt="image description">
                                            </figure>
                                            <div class="jf-employerdetails">
                                                <a href="{{ route('article.detail',['id'=>$value->id]) }}"><h3>{{$value->title}}</h3></a>
                                                <h4><span>{{ str_limit($value->description, 40) }}</span></h4>
                                                <h4>
                                                    <span>Posted On</span>
                                                    <span>{{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y') }}</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <div class="text-center" style="padding-top:100px;padding-bottom:100px;">
                                            <img src="{{ asset('assets/images/no-record.png')}}" alt="image description">
                                            <p>No Data Found</p>
                                        </div>	
                                    @endforelse
                                    <nav class="jf-pagination">
                                        {{ $values->links() }}
                                    </nav>
                                </div>
                            </div>
                            <!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 float-left">
                                <aside id="jf-sidebarvtwo" class="jf-sidebar jf-sidebarvtwo">
                                    <div class="jf-widget jf-myrecentrearches">
                                        <div class="jf-widgettitle">
                                            <h3>My Recent Searches</h3>
                                        </div>
                                        <ul class="jf-recentsearches">
                                            <li><a href="javascript:void(0);">php developer</a></li>
                                            <li><a href="javascript:void(0);">sale associate</a></li>
                                            <li><a href="javascript:void(0);">Graphic Designer</a></li>
                                            <li><a href="javascript:void(0);">Graphic Designer</a></li>
                                            <li><a href="javascript:void(0);">Graphic Designer</a></li>
                                            <li><a href="javascript:void(0);" class="jf-clearsearches"><span class="lnr lnr-cross"></span>Clear Searches</a></li>
                                        </ul>
                                    </div>
                                    <div class="jf-widget jf-employerweek">
                                        <div class="jf-widgettitle">
                                            <h3>Employer Of The Week</h3>
                                        </div>
                                        <div class="jf-angrycreative">
                                            <span class="fab fa-angrycreative"></span>
                                        </div>
                                        <div class="jf-employerdetails">
                                            <h3>Angry Creative Bears</h3>
                                            <h4><span>Member Since: Jun 27, 2010</span><span><i class="lnr lnr-eye"></i>1,744,588 views</span></h4>
                                            <ul class="jf-employerjobs">
                                                <li><a href="javascript:void(0);">Open Jobs</a></li>
                                                <li><a href="javascript:void(0);">Reviews</a></li>
                                                <li><a href="javascript:void(0);">Q &amp; A</a></li>
                                            </ul>
                                            <a href="javascript:void(0);" class="jf-btn">View Full Profile</a>
                                        </div>
                                    </div>
                                    <div class="jf-adds jf-jobsearchadd">
                                        <a href="javascript:void(0);" title="">
                                            <figure>	
                                                <img src="images/adds-02.jpg" alt="img description">
                                            </figure>
                                        </a>
                                        <span>Advertisement  540px X 80px</span>
                                    </div>
                                </aside>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
                    Blog Grid End
            *************************************-->
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
@endsection