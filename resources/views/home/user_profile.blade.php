@extends('layouts.home')

@section('title', 'User Profile')

@section('content')

    <div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">User Profile</li>
            </ul>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-2" id="aside">
                    @include('home.usermenu')
                </div>
                <div class="col-md-10" id="main">
                    @include('profile.show')
                </div>
            </div>
        </div>
    </div>
@endsection
