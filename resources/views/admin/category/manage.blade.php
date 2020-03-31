@extends('layouts.admin')

@section('content')
    <div id="jf-dashboardbanner" class="jf-dashboardbanner">
        <h1>Categories</h1>
        <ol class="jf-breadcrumb">
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li><a href="javascript:void(0);">Manage Categories</a></li>
        </ol>
    </div>
    <main id="jf-main" class="jf-main jf-haslayout">
        <div class="jf-dbsectionspace jf-haslayout">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="jf-dashboardbox jf-myappliedjobs">
                        <div class="jf-dashboardboxtitle jf-dashboardboxtitlevtwo">
                            <div class="jf-title">
                                <h2>Manage Categories</h2>
                            </div>
                            <!-- <form class="jf-formtheme jf-questsearch">
                                <fieldset>
                                    <div class="form-group jf-inputwithicon">
                                        <i class="lnr lnr-magnifier"></i>
                                        <input type="text" name="jobtitle" class="form-control" placeholder="Search Here">
                                    </div>
                                    <a class="jf-btnsearch" href="javascript:void(0)"><i class="lnr lnr-magnifier"></i></a>
                                </fieldset>
                            </form> -->
                        </div>
                        <div class="jf-dashbboardcontent jf-myjobsapplications">
                            <ul>
                                <div style="padding: 30px 20px;">
                                    @if(session()->has('message'))
                                        <div class="alert alert-{{session('class')}}">{{session("message")}}</div>
                                    @endif
                                </div>
                                @forelse($category as $cat)
                                <li>
                                    <div class="jf-featurejob">
                                        <div class="jf-companycontent jf-companycontentvtwo">
                                            <div class="jf-companyname">
                                                <h3>{{$cat->title}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jf-featurejob" style="width:35%">
                                        <div class="jf-companycontent jf-companycontentvtwo">
                                            <div class="jf-companyname">
                                                <h5>Category Type</h5>
                                                @if($cat->parent_id == null)
                                                <span>Base</span>
                                                @else
                                                <span>{{$cat->parent->title}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="jf-btnjobalerts jf-btnjobalertsvthree" style="padding: 50px 25px;">
                                    <li class="jf-btneditjob"><a href="{{ route('category.edit',['id'=>$cat->id]) }}"><i class="ti-pencil"></i></a></li>
                                        <li class="jf-btndell"><a href="{{ route('category.delete',['id'=>$cat->id]) }}"><i class="ti-trash"></i></a></li>
                                    </ul>
                                </li>
                                @empty
                                    <div class="text-center" style="padding-top:100px;padding-bottom:100px;">
                                        <img src="{{ asset('assets/images/no-record.png')}}" alt="image description">
                                        <p>No Data Found</p>
                                    </div>	
                                @endforelse	
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="jf-pagination">
            {{ $category->links() }}
        </nav>
    </main>
@endsection