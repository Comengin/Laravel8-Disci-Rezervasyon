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
                 <h3 class="text-center">User Role Detail</h3>
                 <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                         <div class="section-block" id="basicform">User Roles</div>
                         @include('home.message')
                         <div class="card">
                             <div class="card-body">
                                     <table class="table table-striped table-bordered first">
                                         <tr>
                                             <th>Id</th><td>{{$data->id}}</td>
                                         </tr>
                                         <tr>
                                             <th>Name and Surname</th><td>{{$data->name}}</td>
                                         </tr>
                                         <tr>
                                             <th>Roles</th>
                                             <td>
                                                 <table>
                                                     @foreach($data->roles as $row)
                                                         <tr>
                                                             <td>{{$row->name}}</td>
                                                             <td>
                                                                 <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/trash.png" height="25"></a>
                                                             </td>
                                                         </tr>
                                                     @endforeach
                                                 </table>
                                             </td>
                                         </tr>
                                         <tr>
                                             <th>Add Roles</th>
                                             <td>
                                                 <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                     @csrf
                                                     <select name="roleid">
                                                         @foreach($datalist as $rs)
                                                             <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                         @endforeach
                                                     </select>
                                                     <button type="submit" class="btn-primary">Add Role</button>
                                                 </form>
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
