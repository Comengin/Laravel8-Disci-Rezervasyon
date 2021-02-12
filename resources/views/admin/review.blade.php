@extends('layouts.admin')

@section('title', 'Review Panel')

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="text-left">Review Panel</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Tedavi türü</th>
                                        <th>Subject</th>
                                        <th>Review</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @include('home.message')
                                    @foreach($datalist as $rs)
                                        <tr class="gradeX">
                                            <td>{{$rs->id}}</td>
                                            <td><a href="{{route('admin_user_show',['id'=>$rs->user->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700 ')">
                                                    {{$rs->user->name}}</a>
                                            </td>
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
                                            <td><a href="{{route('admin_review_update',['id' => $rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                            <td><a href="{{route('admin_review_delete',['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/trash.png" height="25"></a></td>
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
