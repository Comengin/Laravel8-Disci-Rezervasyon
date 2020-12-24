@extends('layouts.home')

@section('title', 'Dental Pro')

@section('keywords')
    Dental Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design
@endsection
@section('content')
    @include('home._home')
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
