@extends('layouts.home')

@section('title', 'Review Panel')

@section('content')
    <div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Review</li>
            </ul>
        </div>

        <div class="section">

            <div class="container">
                <div class="row">
                    <div class="col-md-2" id="aside">
                        @include('home.usermenu')
                    </div>
                    <div class="col-xs-10">
                        <div>
                            <h1>Review Panel</h1>
                            <table  id="datatable" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tedavi türü</th>
                                    <th>Subject</th>
                                    <th>Revıew</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @include('home.message')
                                @foreach($datalist as $rs)
                                    <tr class="gradeX">
                                        <td>{{$rs->id}}</td>
                                        <td>
                                            <a href="{{route('tedavi',['id'=>$rs->tedavi->id])}}" target="_blank">
                                                {{$rs->tedavi->title}}
                                            </a>
                                        </td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td>
                                            <a href="{{ route("user_review_delete",['id'=>$rs->id]) }}" onclick="return confirm('Are You Sure To Delete?')" class="btn btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
