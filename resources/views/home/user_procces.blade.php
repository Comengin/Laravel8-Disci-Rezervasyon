@extends('layouts.home')

@section('title', 'User Procces')

@section('content')
    <div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">User Procces</li>
            </ul>
        </div>
        <div class="section">
            <div class="container">
                <div class="col-md-2" id="aside">
                    @include('home.usermenu')
                </div>
                <div class="col-md-7 w3ls-agile-left">
                    <h2> Get your free consultation </h2>
                    <h4>Book An Appointment</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit.Lorem ipsum dolor sit amet.Nam aliquam pretium feugiat. Duis sem est, viverra eu interdum ac, suscipit nec mauris. Suspendisse commodo tempor sagittis,Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit.Lorem ipsum dolor sit amet.Nam aliquam pretium feugiat</p>

                    <a href="{{route('user_randevu')}}" data-toggle="modal" data-target="#myModal1" class="read">Get an appointment</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
