@extends('layouts.ypr')

@section('content')
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="index-2.html">Search</a></li>
                        <li>Search Results</li>
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
                        <div id="jf-threecolumns">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="jf-candidatessearchsvtwo">
                                    @forelse($values as $value)
                                    <div class="jf-candidatessearcgrid jf-verticaltop">
                                        <div class="jf-candidatessearch">
                                            <figure class="jf-candidatescover">
                                                @if($value->image != null)
                                                    <img src="{{ asset($value->image) }}" alt="img-description">
												@else
												    <img src="{{ asset('assets/images/image-default.png') }}" alt="image description">
												@endif	
                                            </figure>
                                            <figure>
                                                <img src="{{ asset('assets/images/successstory/grid/img-01.png') }}" alt="image description">
                                            </figure>
                                            <div class="jf-employerdetails">
                                                <h3>{{$value->title}}</h3>
                                                <h4><span>{{ str_limit($value->description, 40) }}</span></h4>
                                                <h4>
                                                    <span>Posted On</span>
                                                    <span>{{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y') }}</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <div class="text-center">
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
                </div>
            </div>
        </div>
    </main>
@endsection