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
                        <li><a href="#">Home</a></li>
                        <li class="jf-active">Videos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            breadcrumbarea End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="jf-main" class="jf-main jf-haslayout">
    <!--************************************
            Blog Grid Start
    *************************************-->
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
                                    <!-- <div class="jf-views">
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="fa fa-th-large"></i></a></li>
                                            <li class="jf-active"><a href="javascript:void(0);"><i class="lnr lnr-menu"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="jf-sortby">
                                        <span>Sort by:</span>
                                        <div class="jf-select">
                                            <select>
                                                <option value="Most Recent">Most Recent</option>
                                                <option value="Most Recent">Most Recent2</option>
                                                <option value="Most Recent">Most Recent3</option>
                                            </select>
                                        </div>
                                        <div class="jf-select">
                                            <select>
                                                <option value="Most Recent">30 Per Page</option>
                                                <option value="Most Recent">10 Per Page</option>
                                                <option value="Most Recent">20 Per Page</option>
                                                <option value="Most Recent">40 Per Page</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="jf-posts jf-postsgrid">
                                    <div class="row">
                                        @forelse($videos as $video)
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                                            <article class="jf-newsarticle">
                                                <figure class="jf-newsimg">
                                                    <span class="jf-posttag"><i class="fas fa-ellipsis-v"></i></span>
                                                    <div class="wt-project video_url" data-video="{{$video->video_link}}" style="width: 100%;"></div>
                                                    <!-- <img src="{{ asset('assets/images/bloggrid/img-01.jpg') }}" alt="image description"> -->
                                                </figure>
                                                <div class="jf-postauthorname">
                                                    <!-- <figure class="jf-postauthorpic">
                                                        <img src="{{ asset('assets/images/bloggrid/author-img-01.jpg') }}" alt="image description">
                                                    </figure> -->
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
                        <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                            <aside id="jf-sidebar" class="jf-sidebar">
                                <div class="jf-widget jf-widgetsearch">
                                    <div class="jf-widgettitle">
                                        <h3>Start Search Here</h3>
                                    </div>
                                    <div class="jf-widgetcontent">
                                        <form class="jf-formtheme">
                                            <fieldset>
                                                <div class="form-group jf-inputwithicon">
                                                    <i class="lnr lnr-magnifier"></i>
                                                    <input type="search" name="search" class="form-control" placeholder="Search Here">
                                                </div>
                                                <button class="jf-btn" type="button">Search Now</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="jf-widget jf-categories">
                                    <div class="jf-widgettitle">
                                        <h3>Categories</h3>
                                    </div>
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
                                <div class="jf-widget jf-archives">
                                    <div class="jf-widgettitle">
                                        <h3>Archives</h3>
                                    </div>
                                    <div class="jf-checkboxgroup">
                                        <span class="jf-checkbox">
                                            <input type="checkbox" id="jf-april" name="bycondition" value="April 2019">
                                            <label for="jf-april">
                                                <span>April 2019</span>
                                            </label>
                                        </span>
                                        <span class="jf-checkbox">
                                            <input type="checkbox" id="jf-march" name="bycondition" value="March 2019"  checked="">
                                            <label for="jf-march">
                                                <span>March 2019</span>
                                            </label>
                                        </span>
                                        <span class="jf-checkbox">
                                            <input type="checkbox" id="jf-february" name="bycondition" value="February 2019">
                                            <label for="jf-february">
                                                <span>February 2019</span>
                                            </label>
                                        </span>
                                        <span class="jf-checkbox">
                                            <input type="checkbox" id="jf-january" name="bycondition" value="January 2019">
                                            <label for="jf-january">
                                                <span>January 2019</span>
                                            </label>
                                        </span>
                                        <span class="jf-checkbox">
                                            <input type="checkbox" id="jf-april2019" name="bycondition" value="April 2019">
                                            <label for="jf-april2019">
                                                <span>April 2019</span>
                                            </label>
                                        </span>
                                        <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                    </div>
                                </div>
                                <div class="jf-widget jf-meta">
                                    <div class="jf-widgettitle">
                                        <h3>Meta</h3>
                                    </div>
                                    <div class="jf-checkboxgroup">
                                        <span class="jf-checkbox">
                                            <input type="checkbox" id="jf-login" name="bycondition" value="Log in">
                                            <label for="jf-login">
                                                <span>Log in</span>
                                            </label>
                                        </span>
                                        <span class="jf-checkbox">
                                            <input type="checkbox" id="jf-entriesrss" name="bycondition" value="Entries RSS"  checked="">
                                            <label for="jf-entriesrss">
                                                <span>Entries RSS</span>
                                            </label>
                                        </span>
                                        <span class="jf-checkbox">
                                            <input type="checkbox" id="jf-commentsrss" name="bycondition" value="Comments RSS">
                                            <label for="jf-commentsrss">
                                                <span>Comments RSS</span>
                                            </label>
                                        </span>
                                        <span class="jf-checkbox">
                                            <input type="checkbox" id="jf-wordpress" name="bycondition" value="WordPress.org">
                                            <label for="jf-wordpress">
                                                <span>WordPress.org</span>
                                            </label>
                                        </span>
                                        <span class="jf-checkbox">
                                            <input type="checkbox" id="jf-tabtitle" name="bycondition" value="Tab Title 05">
                                            <label for="jf-tabtitle">
                                                <span>Tab Title 05</span>
                                            </label>
                                        </span>
                                        <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                    </div>
                                </div>
                                <div class="jf-widget jf-recentposts">
                                    <div class="jf-widgettitle">
                                        <h3>Recent Posts</h3>
                                    </div>
                                    <div class="jf-recentpost">
                                        <div class="jf-recentpostdetails">
                                            <figure class="jf-recentpostimg">
                                                <img src="{{ asset('assets/images/thumbnail/img-03.jpg') }}" alt="image description">
                                            </figure>
                                            <div class="jf-recentpostcontent">
                                                <h3>Don’t Fade Out In Crowed</h3>
                                                <span><i class="lnr lnr-calendar-full"></i> Jun 27, 2019</span>
                                            </div>
                                        </div>
                                        <div class="jf-recentpostdetails">
                                            <figure class="jf-recentpostimg">
                                                <img src="{{ asset('assets/images/thumbnail/img-04.jpg') }}" alt="image description">
                                            </figure>
                                            <div class="jf-recentpostcontent">
                                                <h3>Don’t Fade Out In Crowed</h3>
                                                <span><i class="lnr lnr-calendar-full"></i> Jun 27, 2019</span>
                                            </div>
                                        </div>
                                        <div class="jf-recentpostdetails">
                                            <figure class="jf-recentpostimg">
                                                <img src="{{ asset('assets/images/thumbnail/img-05.jpg') }}" alt="image description">
                                            </figure>
                                            <div class="jf-recentpostcontent">
                                                <h3>Don’t Fade Out In Crowed</h3>
                                                <span><i class="lnr lnr-calendar-full"></i> Jun 27, 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jf-widget jf-widgettags">
                                    <div class="jf-widgettitle">
                                        <h3>Tags</h3>
                                    </div>
                                    <div class="jf-tag">
                                        <a href="javascript:void(0);">Sales</a>
                                        <a href="javascript:void(0);">Tyre</a>
                                        <a href="javascript:void(0);">DIY</a>
                                        <a href="javascript:void(0);">Medical</a>
                                        <a href="javascript:void(0);">Transport</a>
                                    </div>
                                </div> 
                            </aside>
                        </div> -->
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
    <script>   
        $(".wish_list").click(function(){
            var item_id = $(this).data('item');
            var _token = $("input[name=_token]").val();
            console.log(item_id);
            $.ajax({ 
                url: "{{ route('saved') }}",
                data: {item_id : item_id, _token : _token},
                type: 'post',
                success: function(response)
                {
                    console.log(response);
                    if(response > 0){
                        $('#wish_list_icon_'+response).removeClass('lnr lnr-heart');
                        $('#wish_list_icon_'+response).addClass('fa fa-heart-o');
                        $('#wish_list_text_'+response).text('saved');
                    }
                }
            });
        });    
   </script>
@endsection