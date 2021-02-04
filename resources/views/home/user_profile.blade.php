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
        <div class="section">
            <div class="container">
                User profil page
            </div>
        </div>
    </div>
@endsection
