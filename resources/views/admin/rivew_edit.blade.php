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
                 <h3 class="text-center">Review Detail</h3>
                 <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                         <div class="section-block" id="basicform">Edit review</div>
                         @include('home.message')
                         <div class="card">
                             <div class="card-body">
                                 <form action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                     @csrf
                                     <table class="table table-striped table-bordered first">
                                         <tr rowspan="8" align="center" valign="center">
                                             @if($rs->profile_photo_path)
                                                 <img src="{{Storage::url($data->profile_photo_path)}}" height="300" style="border-right-radius: 10px"alt="">
                                             @endif
                                         </tr>
                                         <tr>
                                             <th>Id</th><td>{{$data->id}}</td>
                                         </tr>
                                         <tr>
                                             <th>Name and Surname</th><td>{{$data->name}}</td>
                                         </tr>
                                         <tr>
                                             <th>Tedavi</th><td>{{$data->tedavi->title}}</td>
                                         </tr>
                                         <tr>
                                             <th>Subject</th><td>{{$data->subject}}</td>
                                         </tr>
                                         <tr>
                                             <th>Review</th><td>{{$data->review}}</td>
                                         </tr>
                                         <tr>
                                             <th>Rate</th><td>{{$data->rate}}</td>
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
                                                     <option>True</option>
                                                     <option>False</option>
                                                 </select>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td>
                                                <button class="btn btn-primary" type="submit">Update Review</button>
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
