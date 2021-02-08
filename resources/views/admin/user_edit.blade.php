@extends('layouts.admin')

@section('title', 'Edit User')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection
@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Editing User</h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Edit user</div>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Name</label>
                                            <input type="text" value="{{$data->name}}" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Email</label>
                                            <input type="text" value="{{$data->email}}" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Phone</label>
                                            <input type="text" value="{{$data->phone}}" class="form-control" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Address</label>
                                            <input type="text" value="{{$data->address}}" class="form-control" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Image</label>
                                            <input type="file" name="image" class="form-control">
                                            @if ($data->profile_photo_path)
                                                <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 15px" alt="">
                                            @endif
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Update</button>
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
