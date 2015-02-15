<!DOCTYPE HTML>
<html>
<head>
    <title>Mesuma</title>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('css/slider.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/nav.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300:700' rel='stylesheet' type='text/css'>
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.openCarousel.js')}}" type="text/javascript"></script>
    <!--wow-->

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="{{('wow/engine1/style.css')}}" />
    <script type="text/javascript" src="{{('engine1/jquery.js')}}"></script>
    <!-- End WOWSlider.com HEAD section -->
    <!------->
    <script>
        $( function() {
            $( '#cbp-fwslider' ).cbpFWSlider();

        } );
    </script>
    <!---- animated-css ---->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>

    <script>
        $(function() {
            var button = $('#loginButton');
            var box = $('#loginBox');
            var form = $('#loginForm');
            button.removeAttr('href');
            button.mouseup(function(login) {
                box.toggle();
                button.toggleClass('active');
            });
            form.mouseup(function() {
                return false;
            });
            $(this).mouseup(function(login) {
                if(!($(login.target).parent('#loginButton').length > 0)) {
                    button.removeClass('active');
                    box.hide();
                }
            });
        });
    </script>
    <!----font-Awesome----->
    <link rel="stylesheet" href="{{asset('fonts/css/font-awesome.min.css')}}">
    <!----font-Awesome----->
    <style>
        .drop a{
            background: url(../images/menu-arrow.png) no-repeat 97% 48%;
        }

    </style>
    <!---strat-date-piker---->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#datepicker,#datepicker1" ).datepicker();
        });
    </script>
    <!---/End-date-piker---->
</head>
<body>

<!-- Header -->
<div class="header">
    <div class="header_top">
        <div class="container">
            <div class="headertop_nav">
                <ul>
                    <li><a href="{{URL::route('contact')}}">Contact</a> /</li>
                    <li><a href="#">Sitemap</a> /</li>
                    <li><a href="#l">Feedback</a> /</li>
                    <li><a href="#">Locations</a></li>
                </ul>
            </div>
            <div class="header-top-right">
                <div class="login_box">
                    <div id="loginContainer">
                        <a id="loginButton" class="active"><span class="active"><i class="search-icon"></i>Search</span></a>
                        <div id="loginBox">
                            <form id="loginForm">
                                <div class="search_box">
                                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                                    <input type="submit" value="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="header_bottom">
    <div class="container">
        <div class="logo">
            <img src="{{asset('images/loogo3.png')}}" >
            <!--<h1><a href="index.html">Mesuma<span>Hotel</span></a></h1>-->
        </div>
        <div class="navigation">
            <div>
                <label class="mobile_menu" for="mobile_menu">
                    <span>Menu</span>
                </label>
                <input id="mobile_menu" type="checkbox">
                <ul class="nav">
                    <li><a href="{{URL::to('/')}}"><font color="#f94b4b">Home</font></a></li>
                    <li class="dropdown"><a href="#">Accomodation</a>
                        <ul class="dropdown2">
                            <li><a href="{{URL::route('suite')}}">Suite</a></li>
                            <li><a href="{{URL::route('double')}}">Double Deluxe</a></li>
                            <li><a href="{{URL::route('twin')}}">Twin Bed Room</a></li>
                            <li><a href="{{URL::route('deluxe')}}">Deluxe</a></li>

                        </ul>
                    </li>
                    <li><a href="{{URL::route('about')}}">About Us</a></li>
                    <li class="dropdown"><a href="#">Our Facilities</a>
                        <ul class="dropdown2">
                            <li><a href="{{URL::route('conference')}}">Conference Hall</a></li>
                            <li><a href="{{URL::route('functional')}}">Function Hall</a></li>
                        </ul>
                    </li>
                    <li><a href="{{URL::route('booking')}}">Booking</a></li>
                    <li></li>
                    <li><a href="{{URL::route('gallery')}}">Photo Gallery</a>
                    </li>
                    <li><a id="hover" href="{{URL::route('contact')}}" >Contact us </a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
    @yield('content')
<div class="footer">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-md-4 footer_grid">
                    <h4>Receive our Newsletter</h4>
                    <p>Please subscribe here with your email address to receive news and updates from Mesuma Hotel</p>
                    <div class="search">
                        <form>
                            <input type="text" value="">
                            <input type="submit" value="">
                        </form>
                    </div>
                </div>
                <div class="col-md-4 footer_grid">
                    <h4>Follow Us:</h4>
                    <div class="footer-list">
                        <!--
                         <ul>
                            <li class="list_top"><i class="fa fa-twitter twt"></i>
                            <p>Lorem ipsum <span class="yellow"><a href="#">consectetuer</a></span>vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatu</li></p>
                            <li><i class="fa fa-twitter twt"></i>
                            <p>Lorem ipsum <span class="yellow"><a href="#">consectetuer</a></span>vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatu</li></p>
                         </ul>-->
                        <ul class="socials">
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-4 footer_grid">
                    <h4>Our Address</h4>
                    <div class="company_address">
                        <p>Mesuma Touch Ltd.</p>
                        <p>Kijitonyama Kisiwani </p>
                        <p>P. O. Box 33156 </p>
                        <p>Dar Es Salaam Tanzania</p>
                        <p>+255 713 669470, </p>
                        <p>+255 712 950008, </p>
                        <p>+255 732 972974, </p>
                        <p>mesuma@live.com, www.mesuma.com</p>

                        <!--<p>Fax: (000) 000 00 00 0</p>-->

                    </div>
                    <!-- <ul class="socials">
                       <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                       <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     </ul>-->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="copy_right">
                <p>&copy; 2014 All Rights Reserved Mesuma Touch LTD   </p>
                <p>created by Rena2c & Sam</p>
            </div>
            <div class="footer_nav">
                <!--<ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>-->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>

</body>
</html>
