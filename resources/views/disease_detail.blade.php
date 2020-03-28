@extends('layouts.ypr')

@section('content')
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Drug Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <main id="jf-main" class="jf-main jf-haslayout">
        <div class="jf-sectionspace jf-haslayout">
            <div class="container">
                <div class="row">
                    <div id="jf-twocolumns" class="jf-twocolumns">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 pull-right">
                            <div id="jf-content" class="jf-content jf-blogdetail">
                                <div class="jf-innersectionhead">
                                    <div class="jf-title">
                                        <h2>{{ $posts->title}}</h2>
                                    </div>
                                </div>
                                <ul class="jf-postarticlemetavtwo">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="lnr lnr-calendar-full"></i>
                                            <span>{{ \Carbon\Carbon::parse($posts->created_at)->format('M d, Y') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="lnr lnr-user"></i>
                                            <span>{{$posts->abc->name}}</span>
                                        </a>
                                    </li>
                                </ul>
                                <figure class="">
                                    <img src="{{ asset($posts->image) }}" alt="image description">
                                </figure>
                                <div class="jf-description">
                                    <?= html_entity_decode($posts->description)?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 float-left">
                            <aside id="jf-sidebar" class="jf-sidebar">
                                <div class="jf-widget jf-widgettags">
                                    <div class="jf-widgettitle">
                                        <h3>Categories</h3>
                                    </div>
                                    <div class="jf-tag">
                                        <?php
                                        $var = explode(',',$posts->categories);
                                        
                                        for($i=0;$i<count($var);$i++){?>
                                            <a href="javascript:void(0);"> <?=  $var[$i]; ?> </a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection