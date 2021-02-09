@extends('layouts.home')

@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp

@section('title', $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)
@section('footerjs')
    <!-- //footer -->
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

    <script src="{{asset('assets')}}/js/jquery-2.2.3.min.js"></script>
    <!-- skills -->

    <script src="{{asset('assets')}}/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager:true,
                nav:false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- js -->

    <!-- Starts-Number-Scroller-Animation-JavaScript -->
    <script src="{{asset('assets')}}/js/waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/counterup.min.js"></script>
    <script>
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 20,
                time: 1000
            });
        });
    </script>

    <!-- //Starts-Number-Scroller-Animation-JavaScript -->
    <!-- search-jQuery -->

    <script src="{{asset('assets')}}/js/simplePlayer.js"></script>
    <script>
        $("document").ready(function() {
            $("#video").simplePlayer();
        });
    </script>

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('assets')}}/js/move-top.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!--swipebox -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/swipebox.css">
    <script src="{{asset('assets')}}/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!--//swipebox Ends -->
    <!-- //js -->
    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems:2
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.flexisel.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //here ends scrolling icon -->
@endsection
@section('content')
    @include('home._slider')
    <!-- /schedule-grids -->
    <div class="top-agile-wthree-grids">
        <div class="col-md-4 schedule-agile ">

            <div class="col-xs-2 about-grid2-left">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="col-xs-10 about-grid2-right">
                <h4>2460 49980 88</h4>
                <p>6692 Jasmin Street, NY 44060</p>
            </div>
            <div class="clearfix"></div>


        </div>
        <div class="col-md-4 schedule-agile ">
            <div class="col-xs-2 about-grid2-left">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div class="col-xs-10 ">
                <form action="{{route('gettedavi')}}" method="post">
                    @csrf
                    @livewire('search')
                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                </form>
                @livewireScripts
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="col-md-4 schedule-agile ">
            <div class="col-xs-2 about-grid2-left">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
            <div class="col-xs-10 about-grid2-right">
                <h4>Open Hours</h4>
                <p>Mon – Sat: 10 am – 7 pm, Sun :10am - 1pm </p>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //schedule-grids -->
@endsection
