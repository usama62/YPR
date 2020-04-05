@extends('layouts.ypr')

@section('content')
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Blogs</li>
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
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="jf-candidatessearchsvtwo">
                                <div class="jf-candidatessearcgrid jf-verticaltop" style="width:100% !important">
                                    <div class="jf-candidatessearch">
                                        <figure class="jf-candidatescover">
                                            <img src="{{ asset($value->image) }}" alt="img-description" style="height:250px">	
                                        </figure>
                                        <figure>
                                        @if($value->abc->profile_image != null)
                                        <img src="{{ asset($value->abc->profile_image) }}" alt="image description">
                                        @else
                                        <img src="{{ asset('assets/images/successstory/grid/img-01.png') }}" alt="image description">
                                        @endif
                                        </figure>
                                        <div class="jf-employerdetails">
                                            <a href="{{ route('article.detail',['id'=>$value->id]) }}"><h3>{{$value->name}}</h3></a>
                                            <h4><span>Author: {{ $value->abc->name }}</span></h4>
                                            <h4>
                                                <span>Posted On</span>
                                                <span>{{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y') }}</span>
                                            </h4>
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