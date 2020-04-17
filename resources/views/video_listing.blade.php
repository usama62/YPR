@extends('layouts.ypr')

@section('content')
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Blog Listing</li>
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
                                            <form class="jf-formtheme" action="{{ route('video_front.search') }}">
                                                <fieldset>
                                                    <div class="form-group jf-inputwithicon">
                                                        <i class="lnr lnr-search"></i>
                                                        <input type="search" name="s" class="form-control" placeholder="Search...">
                                                    </div>
                                                    <button style="width:100%" type="submit" class="jf-btn">Search</button>
                                                </fieldset>
                                            </form>
                                        </div>
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
                                        <h2>Videos Listing</h2>
                                    </div>
                                </div>
                                <div class="jf-featuredjobs jf-featuredjobsvtwo jf-featuredjobsvthree">
                                    @forelse($data as $value)
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <figure class="jf-newsimg custom_thumbnail">
                                                <span class="jf-posttag"><i class="fas fa-ellipsis-v"></i></span>
                                                <div class="wt-project video_url" data-video="{{$value->video_link}}" style="width: 100%;"></div>
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
                                                    <h3 style="padding-left: 20px;margin-top: -27px;"><a href="{{ route('video.detail',['id'=>$value->id]) }}">{{$value->title}}</a></h3>
                                                </div>
                                                <div class="jf-description">
                                                    <?=substr(html_entity_decode($value->description),0,50)?>
                                                </div>
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
    <script>
        var videoUrl = $('.video_url').data('video');  
        if(videoUrl!=""){
            var videoId = getId(videoUrl);
            $('.video_url').html('<iframe width="560" height="315" src="//www.youtube.com/embed/' + videoId + '" frameborder="0" allowfullscreen></iframe>');
        }
        function getId(url = "video") {
            var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
            var match = url.match(regExp);

            if (match && match[2].length == 11) {
                return match[2];
            } else {
                return 'error';
            }
        }
    </script> 
@endsection