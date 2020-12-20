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
                <h3>Contact Info</h3>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="contactto:info@example.com">info@example.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                </ul>
            </div>
            <div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
                <h3>Navigation</h3>
                <ul>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a class="scroll" href="#about">About</a></li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a class="scroll" href="#gallery">Gallery</a></li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a class="scroll" href="#team">Dentists</a></li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a class="scroll" href="#contact">contact</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="copy-right-social">
    <div class="container">
        <div class="copy-right">
            <p>&copy; 2017 Dental Pro. All rights reserved</p>
        </div>
        <div class="bottom-socila-icons">
            <ul class="top-links two">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
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
