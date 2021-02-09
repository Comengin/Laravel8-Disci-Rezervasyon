<!-- header -->
@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="w3_navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <div class="logo">
                    <h1><a class="navbar-brand" href="{{route('home')}}"><span class="one">D</span>ental Pro</a></h1>
                </div>
            </div>
            <div class="pull-right">
                <!--account-->
                @auth
                    <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true"></div>
                    <strong class="text-uppercase">{{Auth::user()->name}} |<a href="{{route('logout')}}">Logout</a></strong>

                @endauth
                @guest
                    <a href="/login" class="text-uppercase">Login</a>
                @endguest
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-5" id="link-effect-5">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('aboutus')}}">About</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('contact')}}">Сontact</a></li>
                        <li>@include('home._category')</li>
                    </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- //header -->
