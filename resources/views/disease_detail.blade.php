@extends('layouts.ypr')

@section('content')
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="{{  url('/home') }}">Home</a></li>
                        <li>Disease Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <main id="jf-main" class="jf-main jf-haslayout">
    <div class="jf-haslayout jf-sectionspace">
        <div class="container">
            <div class="row">
                <div id="jf-twocolumns" class="jf-twocolumns">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 float-left">
                        <div class="jf-jobapplycenter jf-jobapplycentervfour">
                            <figure class="jf-companyimg">
                                @if($posts->image != null)
                                    <img src="{{ asset($posts->image) }}" alt="image description" style="height:72px">
                                @else
                                    <img src="{{ asset('assets/images/successstory/grid/img-01.png') }}" alt="image description">
                                @endif
                            </figure>
                            <div class="jf-companycontent">
                                <div class="jf-jobapplydetails">
                                    <div class="jf-companyhead">
                                    </div>
                                    <div class="jf-companyname">
                                        <h3><a href="javascript:void(0);">{{$posts->title}}</a></h3>
                                        
                                        <ul class="jf-postarticlemetavthree">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="lnr lnr-calendar-full"></i>
                                                    <span>Posted on {{ \Carbon\Carbon::parse($posts->created_at)->format('M d, Y') }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jf-jobapplybtnlike">
                                    <div class="jf-likebtnbox">
                                        @if(count($saved) != 0)
                                        <a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                        @endif
                                    </div>
                                    <ul class="jf-socialiconssimple">
                                        <li class="jf-sharejob"><span>Share</span></li>
                                        <li class="jf-facebook"><a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"><i class="fa fa-facebook-f"></i></a></li>
                                        <li class="jf-twitter"><a href="https://twitter.com/intent/tweet?url={{url()->current()}}"><i class="fab fa-twitter"></i></a></li>
                                        <li class="jf-linkedin"><a href="https://plus.google.com/up/?continue=https://plus.google.com/share?url={{url()->current()}}"><i class="fab fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="jf-jobdetails" id="print">
                            <div class="jf-jobdetaildescription">
                                <div class="jf-title">
                                    <h2>Disease Description</h2>
                                </div>
                                <div class="jf-jobdescription">
                                    <?= html_entity_decode($posts->description)?>
                                </div>
                            </div>
                            <div class="jf-jobbenefits">
                                <div class="jf-title">
                                    <h2>Related Tags</h2>
                                </div>
                                <div class="jf-tagvtwo jf-withicon">
                                <?php 
                                    $arr = (explode(",",$posts->tags ));
                                    for($i=0;$i<count($arr);$i++){?>
                                    <a href="javascript:void(0);"><?php echo $arr[$i];?></a>
                                <?php
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                        <button onclick="myfunction()" class="jf-btn jf-active btn-primary" style="width: 200px;float: right;margin-top: 20px;">Print</button>
                        
                        <div class="jf-similarjobs" style="padding-top:50px">
                            <div class="jf-sectionhead">
                                <h2>Related Diseases</h2>
                            </div>
                            <div class="jf-featuredjobs">
                            @foreach($recents as $recent)
							<div class="jf-featurejobholder">
								<div class="jf-featurejob">
									<figure class="jf-companyimg">
										@if($recent->image != null)
											<img src="{{ asset($recent->image) }}" alt="image description" style="height: 45px;">
										@else
											<img src="{{ asset('assets/images/image-default.png') }}" style="height:45px" alt="image description">
										@endif
									</figure>
									<div class="jf-companycontent">
										<div class="jf-companyname">
											<h3><a href="{{ route('disease.detail',['id'=>$recent->id]) }}">{{str_limit($recent->title,20)}}</a></h3>
											<span>Posted On: {{\Carbon\Carbon::parse($recent->created_at)->format('M d, Y') }}</span>
										</div>
									</div>
								</div>
							</div>
							@endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 float-left">
                        <aside id="jf-sidebar" class="jf-sidebar jf-sidebarvtwo">
                            <div class="jf-widget jf-myrecentrearches">
                                <div class="jf-widgettitle">
                                    <h3>Categories</h3>
                                </div>
                                <ul class="jf-recentsearches">
                                <?php 
                                    $arr = (explode(",",$posts->categories ));
                                    for($i=0;$i<count($arr);$i++){?>
                                    <li>
                                        <a href="javascript:void(0);">
                                        <?php echo $arr[$i];?>
                                        </a>
                                    </li>
                                <?php
                                    }
                                ?>
                                </ul>
                            </div>
                            @if($posts->related_drugs != null)
                            <div class="jf-widget jf-myrecentrearches">
                                <div class="jf-widgettitle">
                                    <h3>Related Drugs</h3>
                                </div>
                                <ul class="jf-recentsearches">
                                <?php 
                                    $arr = (explode(",",$posts->related_drugs ));
                                    for($i=0;$i<count($arr);$i++){?>
                                    <li>
                                        <a href="javascript:void(0);">
                                        <?php echo $arr[$i];?>
                                        </a>
                                    </li>
                                <?php
                                    }
                                ?>
                                </ul>
                            </div>
                            @endif
                            @if($posts->prohibited_drugs != null)
                            <div class="jf-widget jf-myrecentrearches">
                                <div class="jf-widgettitle">
                                    <h3>Prohibited Drugs</h3>
                                </div>
                                <ul class="jf-recentsearches">
                                <?php 
                                    $arr = (explode(",",$posts->prohibited_drugs ));
                                    for($i=0;$i<count($arr);$i++){?>
                                    <li>
                                        <a href="javascript:void(0);">
                                        <?php echo $arr[$i];?>
                                        </a>
                                    </li>
                                <?php
                                    }
                                ?>
                                </ul>
                            </div>
                            @endif
                            @if($posts->specialized_docs != null)
                            <div class="jf-widget jf-myrecentrearches">
                                <div class="jf-widgettitle">
                                    <h3>Specialized Doctors</h3>
                                </div>
                                <ul class="jf-recentsearches">
                                    <div class="jf-tagvtwo jf-withicon">
                                    <?php 
                                        $arr = (explode(",",$posts->specialized_docs ));
                                        for($i=0;$i<count($arr);$i++){?>
                                        <a href="javascript:void(0);"><?php echo $arr[$i];?></a>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </ul>
                            </div>
                            @endif
                            @if($posts->hide_publisher== 0)
                            <div class="jf-widget jf-employerweek">
                                <div class="jf-widgettitle">
                                    <h3>Author</h3>
                                </div>
                                <div class="jf-angrycreative">
                                    <img src="{{ asset($posts->abc->profile_image)}}" alt="img description">
                                </div>
                                <div class="jf-employerdetails">
                                    <h3>{{$posts->abc->name}}</h3>
                                    <h4><span>Member Since: {{ \Carbon\Carbon::parse($posts->abc->created_at)->format('M d, Y') }}</span>
                                    </h4>
                                </div>
                            </div>
                            @endif
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
    </main>
@endsection