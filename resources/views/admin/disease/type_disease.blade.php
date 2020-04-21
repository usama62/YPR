@extends('layouts.admin')

@section('content')
<div id="jf-dashboardbanner" class="jf-dashboardbanner">
    <h1>Disease Types</h1>
    <ol class="jf-breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="javascript:void(0);">Disease Type</a></li>
    </ol>
</div>
<main id="jf-main" class="jf-main jf-haslayout">
    <div class="jf-dbsectionspace jf-haslayout">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="jf-dbsectionspace jf-haslayout">
                    <div class="jf-updatall" style="padding:10px;height: 70px;">
                        <form method="POST" action="{{ route('type_disease.store') }}">
                            @csrf
                            <div class="form-group jf-inputwithicon" style="width:89%">
                                <input type="text" name="type_disease" class="form-control" placeholder="Add New">
                            </div>
                            <div class="jf-btnarea">
                                <button type="submit" class="jf-btn" href="javascript:void(0);">Add New</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div style="padding:0px;margin-top: 100px;">
                    @if(session()->has('message'))
                        <div class="alert alert-{{session('class')}}">{{session("message")}}</div>
                    @endif
                </div>
                <div class="jf-dashboardbox">
                    <div class="jf-dashboardboxtitle jf-dashboardboxtitlevtwo">
                        <div class="jf-title">
                            <h2>Disease Type</h2>
                            <span>Add Disease Types</span>
                        </div>
                        <form class="jf-formtheme jf-questsearch" action="{{ route('disease_type.search') }}">
                            <fieldset>
                                <div class="form-group jf-inputwithicon">
                                    <i class="lnr lnr-magnifier"></i>
                                    <input type="text" name="s" class="form-control" placeholder="Search Here">
                                </div>
                                <button type="submit" class="jf-btn jf-active btn-primary"><i class="lnr lnr-magnifier"></i></button>
                            </fieldset>
                        </form>
                    </div>
                    <table id="table" class="table jf-invoicestable bt">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($type_diseases as $type_disease)
                            <tr>
                                <td>{{ $type_disease->id}}</td>
                                <td>{{ $type_disease->name}}</td>
                                <td>{{ \Carbon\Carbon::parse($type_disease->created_at)->format('M d, Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($type_disease->updated_at)->format('M d, Y') }}</td>
                                <td>
                                    <ul class="jf-btnjobalerts">
                                    <li class="jf-btndell"><a onclick="return confirm('Are you sure?')" href="{{ route('type_disease.delete',['id'=>$type_disease->id]) }}"><i class="ti-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>	
                            @empty
                                <div class="text-center" style="padding-top:100px;padding-bottom:100px;">
                                    <img src="{{ asset('assets/images/no-record.png')}}" alt="image description">
                                    <p>No Data Found</p>
                                </div>	
                            @endforelse												
                        </tbody>
                    </table>								
                    <div class="jf-invoivepagination">
                        <nav class="jf-pagination">
                            <ul>
                                @if(isset($_GET['s']))
                                {{ $type_diseases->appends(['s' => $_GET['s'] ])->links() }}
                                @else
                                {{ $type_diseases->links() }}
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection