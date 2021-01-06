@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Editing Product</h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Edit product</div>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin_product_update',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Parent</label>
                                            <select class="form-control" name="category_id">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>{{$rs->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input id="inputText3" type="text" value="{{$data->title}}" class="form-control" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Keywords</label>
                                            <input id="inputText3" type="text" value="{{$data->keywords}}" class="form-control" name="keywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Description</label>
                                            <input id="inputText3" type="text" value="{{$data->description}}" class="form-control" name="description">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Detail</label>
                                            <input id="inputText3" type="text" value="{{$data->detail}}" class="form-control" name="detail">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Price</label>
                                            <input id="inputText3" value="{{$data->price}}" type="number" class="form-control" name="price">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Update Product</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
