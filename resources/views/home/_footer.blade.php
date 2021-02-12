@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- footer -->
<div class="footer-bottom">
    <div class="container">
        <div class="w3agile_footer_grids">
            <div class="col-md-4 w3agile_footer_grid">
                <h3>About Us</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
            </div>

            <div class="col-md-4 w3agile_footer_grid">
                {{$setting->company}}<br>
                {{$setting->address}}<br>
                <strong>Phone :</strong>{{$setting->phone}}<br>
                <strong>fax :</strong>{{$setting->fax}}<br>
                <strong>Email :</strong>{{$setting->email}}<br>
            </div>
            <div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">

                <h3>Navigation</h3>
                <ul>
                @guest
                    <li><i class="fa fa-long-arrow-right"></i><a href="/login">Login</a></li>
                @endguest
                @auth
                    <li><i class="fa fa-long-arrow-right"></i><a href="{{route('myprofile')}}">My Account</a></li>
                    <li><i class="fa fa-long-arrow-right"></i><a href="{{route('myreview')}}">My Reviews</a></li>
                @endauth
                    <li><i class="fa fa-long-arrow-right"></i><a href="{{route('faq')}}">Faq</a></li>
                @auth
                    <li><i class="fa fa-long-arrow-right"></i><a href="{{route('logout')}}">Logout</a></li>
                @endauth

                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="copy-right-social">
    <div class="container">
        <div class="copy-right">
            <p>&copy; 2020 Dental Pro. All rights reserved | {{$setting->company}}</p>
        </div>
        <div class="bottom-socila-icons">
            <ul class="top-links two">
                @if ($setting->facebook != null)<li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                @if ($setting->twitter != null)<li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                @if ($setting->instagram != null)<li><a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>@endif
                @if ($setting->youtube != null)<li><a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li>@endif
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
