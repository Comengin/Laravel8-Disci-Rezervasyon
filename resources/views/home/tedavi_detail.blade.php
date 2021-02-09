@extends('layouts.home')

@section('title', $data->title)
@section('description'){{$data->description}}@endsection
@section('keywords', $data->keywords)

@section('content')
    <div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Tedavi detail</li>
            </ul>
        </div>
        <div class="section">
            <div class="container">
                <!--gallery-->
                <!-- work -->
                <div class="work" id="gallery">
                    <h3 class="w3l_head">Gallery</h3>
                    <p class="w3ls_head_para">View Our Works</p>
                        <div class="work-grids">
                            @foreach($datalist as $rs)
                            <div class="work-grid">
                                <a href="{{Storage::url($rs->image)}}" class="b-link-stripe b-animate-go swipebox"  title="">
                                    <img src="{{Storage::url($rs->image)}}" alt=" " class="img-responsive" />
                                    <div class="b-wrapper">
                                        <h4 class="b-animate b-from-left    b-delay03 ">
                                            <p>Dental Pro</p>
                                        </h4>
                                    </div>
                                </a>
                                <p>{{$data->title}}</p>
                            </div>
                            @endforeach
                            <h1>Price: {{$data->price}}</h1>
                        </div>
                    <div class="clearfix"> </div>
                <!-- //work -->
                </div>
                <div>
                    <p>Description</p>
                    {!! $data->detail !!}
                </div>
            </div>
        </div>
    </div>
@endsection
