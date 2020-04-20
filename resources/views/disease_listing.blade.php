@extends('layouts.ypr')

@section('content')
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="{{  url('/home') }}">Home</a></li>
                        <li>Disease Listing</li>
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
                                            <form class="jf-formtheme" action="{{ route('disease_front.search') }}">
                                                <fieldset>
                                                    <div class="form-group jf-inputwithicon">
                                                        <i class="lnr lnr-search"></i>
                                                        <input type="search" name="s" class="form-control" placeholder="Search...">
                                                    </div>
                                                    <button style="width:100%" type="submit" class="jf-btn">Search</button>
                                                </fieldset>
                                      
                                        </div>
                                    </div>
                                    <div id="jf-narrowsearchcollapse" class="jf-themecollapse jf-narrowsearchcollapse">
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Disease Types</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                @foreach($type_diseases as $cat)
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutive{{$cat->id}}" name="bycondition[]">
                                                    <label for="jf-salesexecutive{{$cat->id}}">
                                                        <span>{{$cat->name}}</span>
                                                    </label>
                                                </span>
                                                @endforeach
                                                <!-- <a href="javascript:void(0);" class="jf-viewmore">View More</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="jf-narrowsearchcollapse" class="jf-themecollapse jf-narrowsearchcollapse" style="margin-top:40px">
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Literal Order</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup" style="height:150px;overflow-y:scroll">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivea" name="literal[]" value="A">
                                                    <label for="jf-salesexecutivea">
                                                        <span>A</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutiveb" name="literal[]" value="B">
                                                    <label for="jf-salesexecutiveb">
                                                        <span>B</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivec" name="literal[]" value="C">
                                                    <label for="jf-salesexecutivec">
                                                        <span>C</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutived" name="literal[]" value="D">
                                                    <label for="jf-salesexecutived">
                                                        <span>D</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivee" name="literal[]" value="E">
                                                    <label for="jf-salesexecutivee">
                                                        <span>E</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivef" name="literal[]" value="F">
                                                    <label for="jf-salesexecutivef">
                                                        <span>F</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutiveg" name="literal[]" value="G">
                                                    <label for="jf-salesexecutiveg">
                                                        <span>G</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutiveh" name="literal[]" value="H">
                                                    <label for="jf-salesexecutiveh">
                                                        <span>H</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivei" name="literal[]" value="I">
                                                    <label for="jf-salesexecutivei">
                                                        <span>I</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivej" name="literal[]" value="J">
                                                    <label for="jf-salesexecutivej">
                                                        <span>J</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivek" name="literal[]" value="K">
                                                    <label for="jf-salesexecutivek">
                                                        <span>K</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivel" name="literal[]" value="L">
                                                    <label for="jf-salesexecutivel">
                                                        <span>L</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivem" name="literal[]" value="M">
                                                    <label for="jf-salesexecutivem">
                                                        <span>M</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutiven" name="literal[]" value="N">
                                                    <label for="jf-salesexecutiven">
                                                        <span>N</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutiveo" name="literal[]" value="O">
                                                    <label for="jf-salesexecutiveo">
                                                        <span>O</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivep" name="literal[]" value="P">
                                                    <label for="jf-salesexecutivep">
                                                        <span>P</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutiveq" name="literal[]" value="Q">
                                                    <label for="jf-salesexecutiveq">
                                                        <span>Q</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutiver" name="literal[]" value="R">
                                                    <label for="jf-salesexecutiver">
                                                        <span>R</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutives" name="literal[]" value="S">
                                                    <label for="jf-salesexecutives">
                                                        <span>S</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivet" name="literal[]" value="T">
                                                    <label for="jf-salesexecutivet">
                                                        <span>T</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutiveu" name="literal[]" value="U">
                                                    <label for="jf-salesexecutiveu">
                                                        <span>U</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivev" name="literal[]" value="V">
                                                    <label for="jf-salesexecutivev">
                                                        <span>V</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivew" name="literal[]" value="W">
                                                    <label for="jf-salesexecutivew">
                                                        <span>W</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivex" name="literal[]" value="X">
                                                    <label for="jf-salesexecutivex">
                                                        <span>X</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivey" name="literal[]" value="Y">
                                                    <label for="jf-salesexecutivey">
                                                        <span>Y</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutivez" name="literal[]" value="Z">
                                                    <label for="jf-salesexecutivez">
                                                        <span>Z</span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-6 float-left">
                                <div class="jf-adds jf-addsvtwo">
                                    <a href="javascript:void(0);" title="">
                                        <figure>	
                                            <img src="{{ asset('assets/images/adds-03.jpg') }}" alt="img description">
                                        </figure>
                                    </a>
                                    <span>Advertisement  540px X 80px</span>
                                </div>
                                <div class="jf-innersectionhead">
                                    <div class="jf-title">
                                        <h2>Disease Listing</h2>
                                    </div>
                                </div>
                                <div class="jf-featuredjobs jf-featuredjobsvtwo jf-featuredjobsvthree">
                                    @forelse($data as $value)
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <figure class="jf-companyimg">
                                            @if($value->abc->profile_image != null)
                                            <img src="{{ asset($value->image) }}" alt="image description" style="height:72px">
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
                                                            <i id="wish_list_icon_{{$value->id}}" class="fa fa-heart-o filled" ></i>
                                                            @else
                                                            <i id="wish_list_icon_{{$value->id}}" class="fa fa-heart-o"></i>
                                                            @endif
                                                            <span><a id="wish_list_text_{{$value->id}}" data-item="{{$value->id}}" class="wish_list" style="cursor:pointer">@if(count($saved_item) > 0)Saved @else Click to Save @endif</a></span>
                                                        </span>
                                                        @endguest
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="{{ route('disease.detail',['id'=>$value->id]) }}">{{$value->title}}</a></h3>
                                                </div>
                                                <div class="jf-description">
                                                    <p>{{$value->categories}}</p>
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
        @if(isset($_GET['s']))
        {{ $data->appends(['s' => $_GET['s'] ])->links() }}
        @else
        {{ $data->links() }}
        @endif
    </nav>
@endsection