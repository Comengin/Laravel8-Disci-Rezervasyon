@extends('layouts.home')

@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp

@section('title','Сontact -' . $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)

@section('content')
    <div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Сontact</li>
            </ul>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="aside-title">Iletisim Bilgileri</h3>
                        {!! $setting->contact !!}
                    </div>

                    <div class="col-md-4">
                        <h3 class="aside-title">Iletisim Formu</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
