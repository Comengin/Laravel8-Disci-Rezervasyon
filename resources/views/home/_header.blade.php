<!-- header -->

<div class="w3_navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <h1><a class="navbar-brand" href="index.html"><span class="one">D</span>ental Pro</a></h1>
                </div>
            </div>
            <div class="pull-right">
                <!--account-->
                @auth
                    <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true"></div>
                    <strong class="text-uppercase">{{Auth::user()->name}}|<a href="{{route('logout')}}">Logout</a></strong>

                @endauth
                @guest
                    <a href="/login" class="text-uppercase">Login</a>
                @endguest
                <!--<ul class="custom-menu">
                    <li><a href="#"><i class="fa fa-user-o"></i>My Account</a></li>
                    <li><a href="#"><i class="fa fa-user-o"></i>My Wishlist</a></li>
                    <li><a href="#"><i class="fa fa-user-o"></i>Compare</a></li>
                    <li><a href="#"><i class="fa fa-user-o"></i>Ckeckout</a></li>

                </ul>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-5" id="link-effect-5">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('aboutus')}}">About</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('dentists')}}">Dentists</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('faq')}}">Faq</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- //header -->
