@extends('layouts.admin')

@section('title', 'Products')

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="text-left">Product list</h2>
                    <div class="card">
                        <div class="col-sm-6 pl-0">
                                <a class="btn btn-space btn-secondary" href="{{route('admin_product_add')}}">Add product</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->category_id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->price}}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                            @endif

                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin_product_edit',['id' => $rs->id])}}">Edit</a></td>
                                        <td><a href="{{route('admin_product_delete',['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure?')">Delete</a></td>
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
