@extends('layouts.home')

@section('title', 'Take an appointment')

@section('content')
    <div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Take an appointment</li>
            </ul>
        </div>
        <div class="about" id="about">
            <div class="container">
                <h3 class="w3l_head">Take a new appointment</h3>
                <div class="w3l-grids-about">
                    <div class="col-md-5 w3ls-ab-right">
                        <div class="agile-about-right-img">
                            <form action="{{route('randevual')}}" method="post">
                                @csrf
                                <p>Doktor tercih </p>
                                <input type="text" name="Tercih" required=""/>
                                <p>Time</p>
                                <input type="text" name="time" placeholder="" required=""/>
                                <p>Date </p>
                                <input type="text" name="date"  required=""/>
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
