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
                        <div class="agile-about-right-img">
                            @include('home.message')
                            <form action="{{route('sendmessage')}}" method="post">
                                @csrf
                                <p>User Name </p>
                                <input type="text" name="name"/>
                                <p>Phone number</p>
                                <input type="text" name="phone"/>
                                <p>User Email </p>
                                <input type="text" name="email"/>
                                <p>Subject</p>
                                <input type="text" name="subject"/>
                                <p>Your message</p>
                                <textarea name="message" rows="2" cols="34"></textarea>
                                <input type="submit" value="Send Message">
                            </form>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
