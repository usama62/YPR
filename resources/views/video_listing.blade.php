@extends('layouts.ypr')

@section('content')
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="jf-active">Videos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <main id="jf-main" class="jf-main jf-haslayout">
        <div class="jf-sectionspace">
            <div class="container">
                <div class="row">
                    <div id="jf-twocolumns" class="jf-twocolumns">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right">
                            <div id="jf-content" class="jf-content">
                                <div class="jf-innersectionhead">
                                    <div class="jf-title">
                                        <h2>Latest Videos</h2>
                                        <span>Stay Updated With Our Latest Videos</span>
                                    </div>
                                </div>
                                <div class="jf-sortandview">
                                    <div class="jf-widget jf-widgetsearch">
                                        <div class="jf-widgettitle">
                                            <h3>Start Search Here</h3>
                                        </div>
                                        <div class="jf-widgetcontent">
                                            <form class="jf-formtheme">
                                                <fieldset>
                                                    <div class="form-group jf-inputwithicon" style="width: 80%";>
                                                        <i class="lnr lnr-magnifier"></i>
                                                        <input type="search" name="search" class="form-control" placeholder="Search Here">
                                                    </div>
                                                    <button class="jf-btn" type="button" style="padding: 5px 42px;margin-left:5px;">Search Now</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="jf-posts jf-postsgrid">
                                    <div class="row">
                                        @forelse($videos as $video)
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                                            <article class="jf-newsarticle">
                                                <figure class="jf-newsimg">
                                                    <span class="jf-posttag"><i class="fas fa-ellipsis-v"></i></span>
                                                    <div class="wt-project video_url" data-video="{{$video->video_link}}" style="width: 100%;"></div>
                                                </figure>
                                                <div class="jf-postauthorname">
                                                    <div class="jf-articlecontent">
                                                        <div class="jf-articletitle">
                                                            <h3><a href="{{ route('video.detail',['id'=>$video->id]) }}">{{$video->title}}</a></h3>
                                                        </div>
                                                        <span>{{str_limit($video->description, 40) }}</span>
                                                    </div>
                                                </div>
                                                <ul class="jf-postarticlemeta">
                                                    <li>
                                                        <i class="lnr lnr-calendar-full"></i>
                                                        <span>{{ \Carbon\Carbon::parse($video->created_at)->format('M d, Y') }}</span>
                                                    </li>
                                                    <li>
                                                        <i id="wish_list_icon_{{$video->id}}" class="lnr lnr-heart"></i>
                                                        <span><a id="wish_list_text_{{$video->id}}" data-item="{{$video->id}}" class="wish_list">Click to Save</a></span>
                                                    </li>
                                                </ul>
                                            </article>
                                        </div>
                                        @empty
                                            <div class="text-center" style="padding-top:100px;padding-bottom:100px;">
                                                <img src="{{ asset('assets/images/no-record.png')}}" alt="image description">
                                                <p>No Data Found</p>
                                            </div>	
                                        @endforelse
                                    </div>
                                </div>
                                <nav class="jf-pagination">
                                    {{ $videos->links() }}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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