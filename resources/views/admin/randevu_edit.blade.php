<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="@yield('description')" />
<meta name="keywords" content="@yield('keywords')" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('assets')}}/css/swipebox.css">
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="text-center">Randevu Detail</h3>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        @include('home.message')
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin_randevu_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <table class="table table-striped table-bordered first">
                                        <tr>
                                            <th>Id</th><td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>User</th><td>{{$data->user->name}}</td>
                                        </tr>

                                        <tr>
                                            <th>Ip</th><td>{{$data->ip}}</td>
                                        </tr>
                                        <tr>
                                            <th>Created Date</th><td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated Date</th><td>{{$data->updated_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                <select name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>Accepted</option>
                                                    <option>Cenceled</option>
                                                    <option>Completed</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Admin note: </td>
                                            <td><textarea name="note" rows="3" cols="30">{{$data->note}}</textarea></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <button class="btn btn-primary" type="submit">Update Randevu</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
