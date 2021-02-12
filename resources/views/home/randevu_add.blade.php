@extends('layouts.home')

@section('title', 'Take an appointment')

@section('content')
    @php
    $dctr=\App\Http\Controllers\UserController::getdoctor();
    @endphp
    <div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Take an appointment</li>
            </ul>
        </div>
        <div class="about" id="about">
            <div class="container">
                <div class="col-md-2" id="aside">
                    @include('home.usermenu')
                </div>
                <div class="w3l-grids-about">
                    <div class="col-md-8 w3ls-ab-right">
                        <h2>Book a new appointment</h2>
                        <div class="agile-about-right-img">
                            <form action="{{route('user_randevu_store')}}" method="post" class="clearfix">
                                @csrf
                                <p>Hekim sec</p>
                                <select name="doctor">
                                    @foreach($dctr as $rs)
                                            <option value="{{$rs->name}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                                <p>Time</p>
                                <input type="time" name="time" placeholder="" required=""/>
                                <p>Date </p>
                                <input type="date" name="date"  required=""/>
                                <p>Note </p>
                                <textarea name="Message" placeholder="Your Message..." required=""></textarea>
                                <input type="submit" value="Book An Appointment">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
