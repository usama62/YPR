@extends('layouts.ypr')

@section('content')
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="{{  url('/home') }}">Home</a></li>
                        <li>Health Listing</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <main id="jf-main" class="jf-main jf-haslayout">
            <div class="jf-haslayout">
                <div class="container">
                    <div class="row">
                        <div id="jf-threecolumns" class="jf-threecolumns">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 float-left">
                                <aside id="jf-sidebar" class="jf-sidebar jf-sidebarcol">
                                    <div class="jf-widget jf-widgetsearch jf-widgetjobalert">
                                        <div class="jf-widgettitle">
                                            <h3>Search</h3>
                                        </div>
                                        <div class="jf-widgetcontent">
                                            <form class="jf-formtheme">
                                                <fieldset>
                                                    <div class="form-group jf-inputwithicon">
                                                        <i class="lnr lnr-search"></i>
                                                        <input type="search" name="search" class="form-control" placeholder="Search...">
                                                    </div>
                                                    <button style="width:100%" type="submit" class="jf-btn">Search</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="jf-narrowsearchcollapse" class="jf-themecollapse jf-narrowsearchcollapse">
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Health Types</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutive" name="bycondition" value="Sales Executive">
                                                    <label for="jf-salesexecutive">
                                                        <span>Fitness</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-graphicdesigner" name="bycondition" value="Graphic Designer" checked="">
                                                    <label for="jf-graphicdesigner">
                                                        <span>Sports</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-Jobssearch">
                                            <div class="jf-Jobssearchbtn">
                                                <a href="javascript:void(0);" class="jf-btn jf-active">Search Jobs Now</a>
                                                <a href="javascript:void(0);" class="jf-btnreset">Reset Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-6 float-left">
                                <div class="jf-innersectionhead">
                                    <div class="jf-title">
                                        <h2>Health Listing</h2>
                                    </div>
                                </div>
                                <div class="jf-featuredjobs jf-featuredjobsvtwo jf-featuredjobsvthree">
                                    @forelse($saved_items as $value)
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <figure class="jf-companyimg">
                                            @if($saved_items->abc->profile_image != null)
                                            <img src="{{ asset($saved_items->image) }}" alt="image description" style="height:72px">
                                            @else
                                            <img src="{{ asset('assets/images/successstory/grid/img-01.png') }}" alt="image description">
                                            @endif
                                            </figure>
                                            <div class="jf-companycontent">
                                                <div class="jf-companyhead">
                                                    <div class="jf-rightarea">
                                                        @guest
                                                        <span>
                                                            
                                                        </span>
                                                        @else
                                                        <span style="float:right">
                                                            @php
                                                                $saved_item= App\Saved::where(['user_id' => Auth::user()->id, 'post_id' =>$value->id])->get();
                                                            @endphp
                                                            @if(count($saved_item) > 0)
                                                            <i id="wish_list_icon_{{$saved_items->id}}" class="fa fa-heart-o filled" ></i>
                                                            @else
                                                            <i id="wish_list_icon_{{$saved_items->id}}" class="fa fa-heart-o"></i>
                                                            @endif
                                                            <span><a id="wish_list_text_{{$saved_items->id}}" data-item="{{$saved_items->id}}" class="wish_list" style="cursor:pointer">@if(count($saved_item) > 0)Saved @else Click to Save @endif</a></span>
                                                        </span>
                                                        @endguest
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="javascript:void(0);">{{$saved_items->title}}</a></h3>
                                                </div>
                                                <div class="jf-description">
                                                    <p>{{$saved_items->categories}}</p>
                                                </div>
                                                <!-- <a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time</a> -->
                                            </div>
                                        </div>
                                        <ul class="jf-professionalinfo">
                                            <li style="width:100%;padding-left:45px"><i class="lnr lnr-calendar-full"></i><span>Posted on: {{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y') }}</span></li>
                                        </ul>
                                    </div>
                                    @empty
                                        <div class="text-center" style="padding-top:100px;padding-bottom:100px;">
                                            <img src="{{ asset('assets/images/no-record.png')}}" alt="image description">
                                            <p>No Data Found</p>
                                        </div>	
                                    @endforelse
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 float-left">
                                <aside id="jf-sidebarvtwo" class="jf-sidebar jf-sidebarvtwo">
                                    <div class="jf-widget jf-myrecentrearches">
                                        <div class="jf-widgettitle">
                                            <h3>My Recent Searches</h3>
                                        </div>
                                        <ul class="jf-recentsearches">
                                            <!-- <li><a href="javascript:void(0);">php developer</a></li>
                                            <li><a href="javascript:void(0);" class="jf-clearsearches"><span class="lnr lnr-cross"></span>Clear Searches</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="jf-adds jf-jobsearchadd">
                                        <a href="javascript:void(0);" title="">
                                            <figure>	
                                                <img src="{{ asset('assets/images/adds-02.jpg') }}" alt="img description">
                                            </figure>
                                        </a>
                                        <span>Advertisement  540px X 80px</span>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <nav class="jf-pagination">
        {{ $saved_items->links() }}
    </nav>
@endsection