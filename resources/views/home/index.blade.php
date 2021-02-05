@extends('layouts.home')

@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp

@section('title', $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)

@section('content')
    @include('home._slider')
    <!-- /schedule-grids -->
    <div class="top-agile-wthree-grids">
        <div class="col-md-4 schedule-agile ">

            <div class="col-xs-2 about-grid2-left">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="col-xs-10 about-grid2-right">
                <h4>2460 49980 88</h4>
                <p>6692 Jasmin Street, NY 44060</p>
            </div>
            <div class="clearfix"></div>


        </div>
        <div class="col-md-4 schedule-agile ">
            <div class="col-xs-2 about-grid2-left">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div class="col-xs-10 about-grid2-right">
                <form action="#" method="post">
                    <input type="search" placeholder="Search..." name="Search..." required="">
                    <input type="submit" value="">
                </form>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="col-md-4 schedule-agile ">
            <div class="col-xs-2 about-grid2-left">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
            <div class="col-xs-10 about-grid2-right">
                <h4>Open Hours</h4>
                <p>Mon – Sat: 10 am – 7 pm, Sun :10am - 1pm </p>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //schedule-grids -->
@endsection
