@extends('layouts.home')

@section('title', $data->title ."Services List")
@section('description'){{$data->description}}@endsection
@section('keywords', $data->keywords)

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
                <h3 class="w3ls_head_para">{{$rs->title}}</h3>
                <h4>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}}</h4>
                    <div class="why-choose-agile-grids-top">
                        <div class="col-md-4">
                            <img src="{{Storage::url($rs->image)}}" alt=" " class="img-responsive" />
                            <h1><b>Price: {{$rs->price}}Tl</b></h1>
                        </div>

                        <div class="col-md-7 w3ls-agile-left">
                            <p>{{$rs->description}}</p>
                            <a href="{{route('tedavi',['id'=>$rs->id])}}" data-toggle="modal" data-target="#myModal1" class="read">Read More</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
                    <div>
                        <p class="text-uppercase"><b>Send us your review</b></p>
                        @livewire('review',['id'=>$data->id])
                    @livewireScripts
                    </div>
            </div>
        </div>
    </div>
    <!-- //choose-us -->

    <!-- //services -->
    </div>
@endsection
