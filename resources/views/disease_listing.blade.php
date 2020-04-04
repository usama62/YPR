@extends('layouts.ypr')

@section('content')
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
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
                                                <h3>Job Title</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutive" name="bycondition" value="Sales Executive">
                                                    <label for="jf-salesexecutive">
                                                        <span>Sales Executive</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-graphicdesigner" name="bycondition" value="Graphic Designer" checked="">
                                                    <label for="jf-graphicdesigner">
                                                        <span>Graphic Designer</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-marketingexecutive" name="bycondition" value="Marketing Executive">
                                                    <label for="jf-marketingexecutive">
                                                        <span>Marketing Executive</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-accountant" name="bycondition" value="Accountant">
                                                    <label for="jf-accountant">
                                                        <span>Accountant</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesmarketingexecutive" name="bycondition" value="Sales / Marketing Executive">
                                                    <label for="jf-salesmarketingexecutive">
                                                        <span>Sales / Marketing Executive</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>City</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-armagh" name="bycondition" value="Armagh">
                                                    <label for="jf-armagh">
                                                        <span>Armagh</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-bangor" name="bycondition" value="bangor" checked="">
                                                    <label for="jf-bangor">
                                                        <span>Bangor</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-bath" name="bycondition" value="Bath">
                                                    <label for="jf-bath">
                                                        <span>Bath</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-belfast" name="bycondition" value="belfast">
                                                    <label for="jf-belfast">
                                                        <span>Belfast</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-cambridge" name="bycondition" value="cambridge">
                                                    <label for="jf-cambridge">
                                                        <span>Cambridge</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Experience</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-fresh" name="bycondition" value="fresh">
                                                    <label for="jf-fresh">
                                                        <span>Fresh</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-lessthan" name="bycondition" value="lessthan" checked="">
                                                    <label for="jf-lessthan">
                                                        <span>Less than 1 Year</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-1year" name="bycondition" value="1year">
                                                    <label for="jf-1year">
                                                        <span>1 Year</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-2years" name="bycondition" value="2years">
                                                    <label for="jf-2years">
                                                        <span>2 Years</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-3years" name="bycondition" value="3years">
                                                    <label for="jf-3years">
                                                        <span>3 Years</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Job Type</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-fulltimepermanent" name="bycondition" value="fulltimepermanent">
                                                    <label for="jf-fulltimepermanent">
                                                        <span>Full Time/Permanent</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-internship" name="bycondition" value="internship" checked="">
                                                    <label for="jf-internship">
                                                        <span>Internship</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-contract" name="bycondition" value="contract">
                                                    <label for="jf-contract">
                                                        <span>Contract</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-parttime" name="bycondition" value="parttime">
                                                    <label for="jf-parttime">
                                                        <span>Part Time</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-freelance" name="bycondition" value="freelance">
                                                    <label for="jf-freelance">
                                                        <span>Freelance</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Skills</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-communicationskills" name="bycondition" value="communicationskills">
                                                    <label for="jf-communicationskills">
                                                        <span>Communication Skills</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-englishfluency" name="bycondition" value="englishfluency" checked="">
                                                    <label for="jf-englishfluency">
                                                        <span>English Fluency</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-php" name="bycondition" value="php">
                                                    <label for="jf-php">
                                                        <span>PHP</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-adobephotoshop" name="bycondition" value="adobephotoshop">
                                                    <label for="jf-adobephotoshop">
                                                        <span>Adobe Photoshop</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-Javascript" name="bycondition" value="Javascript">
                                                    <label for="jf-Javascript">
                                                        <span>JavaScript</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Career Level</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-entrylevel" name="bycondition" value="entrylevel" checked="">
                                                    <label for="jf-entrylevel">
                                                        <span>Entry Level</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-internstudent" name="bycondition" value="internstudent">
                                                    <label for="jf-internstudent">
                                                        <span>Intern/Student</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-departmenthead" name="bycondition" value="Department Head">
                                                    <label for="jf-departmenthead">
                                                        <span>Department Head</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-experiencedprofessional" name="bycondition" value="Experienced Professional">
                                                    <label for="jf-experiencedprofessional">
                                                        <span>Experienced Professional</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-countryhead" name="bycondition" value="GM / CEO / Country Head">
                                                    <label for="jf-countryhead">
                                                        <span>GM / CEO / Country Head</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Industry</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-informationtechnology" name="bycondition" value="informationtechnology" checked="">
                                                    <label for="jf-informationtechnology">
                                                        <span>Information Technology</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-services" name="bycondition" value="services">
                                                    <label for="jf-services">
                                                        <span>Services</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-educationtraining" name="bycondition" value="educationtraining">
                                                    <label for="jf-educationtraining">
                                                        <span>Education/Training</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-manufacturing" name="bycondition" value="Manufacturing">
                                                    <label for="jf-manufacturing">
                                                        <span>Manufacturing</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-callcenter" name="bycondition" value="callcenter">
                                                    <label for="jf-callcenter">
                                                        <span>Call Center</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Gender</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Functional Area</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-businessdevelopment" name="bycondition" value="businessdevelopment" checked="">
                                                    <label for="jf-businessdevelopment">
                                                        <span>Business Development</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-accountsfinance" name="bycondition" value="accountsfinance">
                                                    <label for="jf-accountsfinance">
                                                        <span>Accounts, Finance</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-marketing" name="bycondition" value="marketing">
                                                    <label for="jf-marketing">
                                                        <span>Marketing</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-creativedesign" name="bycondition" value="creativedesign">
                                                    <label for="jf-creativedesign">
                                                        <span>Creative Design</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-telemarketing" name="bycondition" value="telemarketing">
                                                    <label for="jf-telemarketing">
                                                        <span>Telemarketing</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Featured Company</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-angrycreativebears" name="bycondition" value="angrycreativebears" checked="">
                                                    <label for="jf-angrycreativebears">
                                                        <span>Angry Creative Bears</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-aviatogroup" name="bycondition" value="aviatogroup">
                                                    <label for="jf-aviatogroup">
                                                        <span>Aviato Group of Company</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-emberspa" name="bycondition" value="emberspa">
                                                    <label for="jf-emberspa">
                                                        <span>Ember Spa &amp; Saloon</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-fastruncargo" name="bycondition" value="fastruncargo">
                                                    <label for="jf-fastruncargo">
                                                        <span>Fast Run Cargo &amp; Movers</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-vavofoceans" name="bycondition" value="vavofoceans">
                                                    <label for="jf-vavofoceans">
                                                        <span>VAV of Oceans</span>
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
                                        <h2>Disease Listing</h2>
                                    </div>
                                </div>
                                <div class="jf-featuredjobs jf-featuredjobsvtwo jf-featuredjobsvthree">
                                    @forelse($values as $value)
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
                                                    <h3><a href="javascript:void(0);">{{$value->title}}</a></h3>
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
                                    <nav class="jf-pagination">
                                        {{ $values->links() }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 float-left">
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
                                    <!-- <div class="jf-widget jf-employerweek">
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
                                    </div> -->
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
@endsection