@extends('layouts.admin')

@section('title', 'Edit Setting')
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
                    <h3 class="text-center">Editing Setting</h3>
                    <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- card navigaion  -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header pills-regular">
                                        <ul class="nav nav-pills card-header-pills" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="card-pills-general" data-toggle="tab" href="#card-pill-general" role="tab" aria-controls="card-1" aria-selected="true">General</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="card-pills-smtp" data-toggle="tab" href="#card-pill-smtp" role="tab" aria-controls="card-2" aria-selected="false">Smtp Email</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="card-pills-social" data-toggle="tab" href="#card-pill-social" role="tab" aria-controls="card-3" aria-selected="false">Social Media</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="card-pills-about" data-toggle="tab" href="#card-pill-about" role="tab" aria-controls="card-4" aria-selected="false">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="card-pills-contact" data-toggle="tab" href="#card-pill-contact" role="tab" aria-controls="card-5" aria-selected="false">Contact Page</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="card-pills-references" data-toggle="tab" href="#card-pill-references" role="tab" aria-controls="card-6" aria-selected="false">References</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent2">
                                            <div class="tab-pane fade show active" id="card-pill-general" role="tabpanel" aria-labelledby="card-tab-general">
                                                <input id="id" type="hidden" value="{{$data->id}}" class="form-control" name="id">
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
                                                    <label for="inputText3" class="col-form-label">Company</label>
                                                    <input id="inputText3" type="text" value="{{$data->company}}" class="form-control" name="company">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Address</label>
                                                    <input id="inputText3" type="text" value="{{$data->address}}" class="form-control" name="address">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Phone</label>
                                                    <input id="inputText3" type="text" value="{{$data->phone}}" class="form-control" name="phone">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Fax</label>
                                                    <input id="inputText3" type="text" value="{{$data->fax}}" class="form-control" name="fax">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Email</label>
                                                    <input id="inputText3" type="email" value="{{$data->email}}" class="form-control" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status">
                                                        <option selected="selected">{{$data->status}}</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="card-pill-smtp" role="tabpanel" aria-labelledby="card-tab-2">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Smtp Server</label>
                                                    <input id="inputText3" type="text" value="{{$data->smtpserver}}" class="form-control" name="smtpserver">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Smtp Email</label>
                                                    <input id="inputText3" type="text" value="{{$data->smtpemail}}" class="form-control" name="smtpemail">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Smtppassword</label>
                                                    <input id="inputText3" type="text" value="{{$data->smtppassword}}" class="form-control" name="smtppassword">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Smtpport</label>
                                                    <input id="inputText3" type="text" value="{{$data->smtpport}}" class="form-control" name="smtpport">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="card-pill-social" role="tabpanel" aria-labelledby="card-tab-3">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Facebook</label>
                                                    <input id="inputText3" type="facebook" value="{{$data->facebook}}" class="form-control" name="facebook">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Instagram</label>
                                                    <input id="inputText3" type="instagram" value="{{$data->instagram}}" class="form-control" name="instagram">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Twitter</label>
                                                    <input id="inputText3" type="twitter" value="{{$data->twitter}}" class="form-control" name="twitter">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">YouTube</label>
                                                    <input id="inputText3" type="youtube" value="{{$data->youtube}}" class="form-control" name="youtube">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="card-pill-about" role="tabpanel" aria-labelledby="card-tab-3">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">About Us</label>
                                                    <textarea id="aboutus" class="form-control" name="aboutus">{{$data->aboutus}}</textarea>
                                                    <script>
                                                        $('#aboutus').summernote({tabsize: 2, height: 100});
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="card-pill-contact" role="tabpanel" aria-labelledby="card-tab-3">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Contact</label>
                                                    <textarea id="contact" class="form-control" name="contact">{{$data->contact}}</textarea>
                                                    <script>
                                                        $('#contact').summernote({tabsize: 2, height: 100});
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="card-pill-references" role="tabpanel" aria-labelledby="card-tab-3">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">References</label>
                                                    <textarea id="references" class="form-control" name="references">{{$data->references}}</textarea>
                                                    <script>
                                                        $('#references').summernote({tabsize: 2, height: 100});
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Update Setting</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end card navigaion  -->
                    </form>
                </div>
            </div>
        </div>
@endsection
