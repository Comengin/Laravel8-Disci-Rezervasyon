@auth
<div class="aside">
    <h3 class="aside-title">User panel</h3>
    <ul class="list-links">
        <li><a href="{{route('myprofile')}}">My Profile</a></li>
        <li><a href="{{route('myreview')}}">My Reviews</a></li>
        @php
            $userRoles = Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('user'))
            <li><a href="{{route('user_procces')}}">My Procces</a></li>
        @endif
        <li><a href="">My Messages</a></li>
        @if($userRoles->contains('admin'))
            <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
        @endif
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
</div>
@endauth
