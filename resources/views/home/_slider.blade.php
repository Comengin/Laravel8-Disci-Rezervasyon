<!--home-->
<!-- banner -->
<div class="main" id="home">
	<div class="banner">
        <!--Slider-->
        <div class="container">
            <div class="callbacks_container">
                <ul class="rslides" id="slider3">
                    @foreach($slider as $rs)
                        <div class="slider-info">
                            <img src="{{Storage::url($rs->image)}}" style="height: 150px" alt="">
                            <h1>{{$rs->title}}</h1>
                            <p>{{$rs->price}}</p>
                            <a href="{{route('tedavi',['id'=>$rs->id, 'price'=>$rs->price])}}" class="btn-primary">Get appointment now</a>
                        </div>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
                <br>
		    </div>
                <ul class="top-links">
                    @if ($setting->facebook != null)<li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                    @if ($setting->twitter != null)<li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                    @if ($setting->instagram != null)<li><a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>@endif
                    @if ($setting->youtube != null)<li><a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li>@endif
                </ul>
	    </div>
	</div>
</div>
