@extends('layouts.admin')

@section('title', 'Admin Procces List')

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="text-left">Admin Procces</h2>
                    <div class="card">
                        @include('home.message')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User</th>
                                        <th>Name of doctor</th>
                                        <th>Date of an appointment</th>
                                        <th>Time of an appointment</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Note</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->user->name}}</td>
                                        <td>{{$rs->hekim}}</td>
                                        <td>{{$rs->date}}</td>
                                        <td>{{$rs->time}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->note}}</td>
                                        <td>
                                            <a href="{{route('admin_randevu_show',['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=800')">
                                                <img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>

                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
