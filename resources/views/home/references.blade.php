@extends('layouts.home')

@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp

@section('title','References -' . $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)

@section('content')
    <div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">References</li>
            </ul>
        </div>
        <div class="section">
            <div class="container">
                {!! $setting->references !!}
            </div>
        </div>
    </div>
@endsection
