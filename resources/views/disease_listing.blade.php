@extends('layouts.ypr')

@section('content')
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Disease</li>
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
                    @forelse($values as $value)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4" style="margin-top: 20px;">
                            <div class="jf-candidatessearchsvtwo">
                                <div class="jf-candidatessearcgrid jf-verticaltop" style="width:100% !important">
                                    <div class="jf-candidatessearch">
                                        <figure class="jf-candidatescover" style="height:250px">
                                            <img src="{{ asset($value->image) }}" alt="img-description">	
                                        </figure>
                                        <figure >
                                        @if($value->abc->profile_image != null)
                                        <img src="{{ asset($value->abc->profile_image) }}" alt="image description" style="height:72px">
                                        @else
                                        <img src="{{ asset('assets/images/successstory/grid/img-01.png') }}" alt="image description">
                                        @endif
                                        </figure>
                                        <div class="jf-employerdetails">
                                            <a href="{{ route('health.detail',['id'=>$value->id]) }}"><h3>{{$value->title}}</h3></a>
                                            <h4><span>Author: {{ $value->abc->name }}</span></h4>
                                            <span>
                                                <span>Posted On</span>
                                                <span>{{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y') }}</span>
                                            </span>
                                            @guest
                                            <span style="float:right">
                                                
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
            </div>
        </div>
    </main>
@endsection