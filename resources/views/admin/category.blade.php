@extends('layouts.admin')

@section('title', 'Categories')

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="text-left">Category list</h2>
                    <div class="card">
                        <div class="col-sm-6 pl-0">
                                <a class="btn btn-space btn-secondary" href="{{route('admin_category_add')}}">Add category</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Parent</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->parent_id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>Edit</td>
                                        <td><a href="{{route('admin_category_delete',['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure?')">Delete</a></td>
                                    </tr>
                                    </tbody>
                                    @endforeach
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Parent</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
