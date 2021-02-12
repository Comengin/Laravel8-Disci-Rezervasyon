<!-- sidebar -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_users')}}" ><i class=" fas fa-users"></i>Users</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('admin_category')}}" ><i class="fa fa-fw fa-user-circle"></i>Category<span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_tedavi')}}" > <i class="fas fa-align-justify"></i>Tedavi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_message')}}"><i class="far fa-comment-alt"></i>Contact Message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_setting')}}"><i class="fas fa-cog mr-2"></i>Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_faq')}}"><i class="far fa-comment"></i>Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_review')}}" ><i class="fa fa-fw fa-rocket"></i>Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Randevus</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin_randevu')}}">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin_randevu_list',['status'=>'accepted'])}}">Accepted appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin_randevu_list',['status'=>'cenceled'])}}">Cenceled appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin_randevu_list',['status'=>'completed'])}}">Completed appointment</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- end sidebar -->
