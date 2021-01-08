<html>
<head>
    <title>Image Gallety</title>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('assets')}}/admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Product: {{$data->title}}</h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Add Image</div>
                            <div class="card">
                                <div class="card-body">

                                    <form action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input id="inputText3" type="text" class="form-control" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Image</label>
                                            <input id="inputText3" type="file" name="image" class="form-control">
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Add Image</button>
                                        </div>
                                    </form>
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($images as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->title}}</td>
                                                <td>
                                                    @if ($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                                    @endif

                                                </td>
                                                <td><a href="{{route('admin_image_delete',['id' => $rs->id, 'product_id'=>$data->id])}}" onclick="return confirm('Delete! Are you sure?')">
                                                        <img src="{{asset('assets/admin/images')}}/trash.png" height="25"></a></td>
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
        </div>
</body>
</html>
