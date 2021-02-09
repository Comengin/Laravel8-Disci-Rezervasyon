@extends('layouts.home')

@section('title', $search ."Services List")

@section('content')
    <div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Services List</li>
            </ul>
        </div>
        <div class="why-choose-agile">
            <div class="container">
                @foreach($datalist as $rs)
                <h3 class="w3l_head">Our Services</h3>
                <p class="w3ls_head_para">{{$rs->title}}</p>
                <p>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}}</p>
                    <div class="why-choose-agile-grids-top">
                        <div class="col-md-4">
                            <img src="{{Storage::url($rs->image)}}" alt=" " class="img-responsive" />
                            <h1><b>Price: {{$rs->price}}Tl</b></h1>
                        </div>
                        <div class="col-md-8">
                            <h2>{{$rs->description}}</h2>
                        </div>
                        <hr>
                        <a href="{{route('tedavi',['id'=>$data->id])}}" class="btn-primary" style="font-size: 18px; background-color: white; color: #0b2e13">For more detail click here.</a>
                    </div>
                @endforeach
                <div class="clearfix"> </div>

            </div>
        </div>
    </div>
    <!-- //choose-us -->

    <!-- //services -->
    </div>
@endsection
