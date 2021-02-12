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
                    <h2>My Procces</h2>
                        <table  id="datatable" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name of doctor</th>
                                <th>Date of an appointment</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Note</th>
                                <th>State</th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.message')
                            @foreach($datalist as $rs)
                                <tr class="gradeX">
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->hekim}}</td>
                                    <td>{{$rs->date}}</td>
                                    <td>{{$rs->time}}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->note}}</td>
                                    <td>
                                        <a href="{{ route("user_randevu_delete",['id'=>$rs->id]) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger btn-mini">Iptal et</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
