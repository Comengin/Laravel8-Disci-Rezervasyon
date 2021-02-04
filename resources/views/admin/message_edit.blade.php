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
                 <h3 class="text-center">Message Detail</h3>
                 <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                         <div class="section-block" id="basicform">Edit tedavi</div>
                         @include('home.message')
                         <div class="card">
                             <div class="card-body">
                                 <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                     @csrf
                                     <table class="table table-striped table-bordered first">
                                         <tr>
                                             <th>Id</th><td>{{$data->id}}</td>
                                         </tr>
                                         <tr>
                                             <th>Name and Surname</th><td>{{$data->name}}</td>
                                         </tr>
                                         <tr>
                                             <th>Email</th><td>{{$data->email}}</td>
                                         </tr>
                                         <tr>
                                             <th>Phone</th><td>{{$data->phone}}</td>
                                         </tr>
                                         <tr>
                                             <th>Subject</th><td>{{$data->subject}}</td>
                                         </tr>
                                         <tr>
                                             <th>Message</th><td>{{$data->message}}</td>
                                         </tr>
                                         <tr>
                                             <th>Admin Note</th>
                                             <td>
                                                <textarea id="note" name="note">{{$data->note}}</textarea>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td>
                                                <button class="btn btn-primary" type="submit">Update Tedavi</button>
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
