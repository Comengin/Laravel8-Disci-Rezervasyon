@extends('layouts.home')

@section('title', 'Frequently Asked Question')

@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
@endsection
@section('content')
    <div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Frequently Asked Question</li>
            </ul>
        </div>
        <div class="section">
            <div class="container">
                <div id="accordion">
                    @foreach($datalist as $rs)
                        <h3>{{$rs->question}}</h3>
                        <div>
                            <p>{!!$rs->answer!!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
