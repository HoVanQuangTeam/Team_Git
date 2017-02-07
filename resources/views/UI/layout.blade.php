
<!DOCTYPE HTML>
<html ng-app="minmax">
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{!! asset('public/ui/css/style.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! asset('public/ui/css/slider.css')!!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! asset('public/ui/css/menu.css')!!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! asset('public/bootstrap/css/bootstrap.css')!!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! asset('public/bootstrap/css/bootstrap.min.css')!!}" rel="stylesheet" type="text/css" media="all"/>


    <link href="{{URL::asset('public/ui/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>




    <link href="{{URL::asset('public/ui/css/easy-responsive-tabs.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{URL::asset('public/ui/css/global.css')}}">

    <script type="text/javascript" src="{!! asset('public/ui/js/jquery-1.7.2.min.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('public/ui/js/move-top.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('public/ui/js/easing.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('public/ui/js/startstop-slider.js')!!}"></script>

    <script src="{{URL::asset('public/libs/angular/angular.min.js')}}"></script>
    <script src="{{URL::asset('public/libs/angular-auto-validate/dist/jcs-auto-validate.min.js')}}"></script>
    <script src="{{URL::asset('public/libs/ladda/dist/ladda.jquery.min.js')}}"></script>
    <script src="{{URL::asset('public/libs/ladda/dist/ladda.min.js')}}"></script>
    <script src="{{URL::asset('public/libs/ladda/dist/spin.min.js')}}"></script>
    <script src="{{URL::asset('public/libs/angular/angular-route.min.js')}}"></script>
    {{--<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js')}}"></script>--}}
    <script type="text/javascript" src="{!!asset('public/libs/agl.js')  !!}"></script>
    <script  src="{!! asset('public/ui/js/easyResponsiveTabs.js') !!}" type="text/javascript"></script>
    <script  src="{!! asset('public/ui/js/slides.min.jquery.js') !!}"></script>

    <script>
        $(function(){
            $('#products').slides({
                preload: true,
                preloadImage: 'img/loading.gif',
                effect: 'slide, fade',
                crossfade: true,
                slideSpeed: 350,
                fadeSpeed: 500,
                generateNextPrev: true,
                generatePagination: false
            });
        });
    </script>
</head>
<body>
<div class="wrap">
    <div class="header">
        <div class="headertop_desc">
            <div class="call">
                <p><span>Need help?</span> call us <span class="number">0972793680</span></p>
            </div>
            <div class="account_desc">
                @if(!Auth::guard('khachhangs')->check())
                <ul>
                    <li><a href="{{url('/dk')}}">Register</a></li>
                    <li><a href="{{url('/Login')}}">Login</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">My Account</a></li>
                </ul>
                @else
                    <ul>
                        {{--<li><a href="#">Register</a></li>--}}
                        {{--<li><a href="#">Login</a></li>--}}
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Checkout</a></li>
                        <ul>
                            <?php
                                $kh = DB::table('khachhangs')->find(Auth::guard('khachhangs')->id());
                            ?>
                            <li><?php echo $kh->ten_kh; ?></li>
                            <li><a href="#">My Account</a></li>
                            <li>
                                <a href="{{ url('/logout')  }}">Logout </a>
                            </li>
                        </ul>
                    </ul>
                    @endif
            </div>
            <div class="clear"></div>
        </div>
        <div class="header_top">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
            </div>
            <div class="cart">
                <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> <a href="{!! asset('gio-hang') !!}"> $<?php echo Cart::total(); ?></a>
                    <ul class="dropdown">
                        <a href="{!! asset('gio-hang') !!}"></a>
                        {{--<li>you have no items in your Shopping cart</li>--}}
                    </ul></div></p>
            </div>
            <script type="text/javascript">
                function DropDown(el) {
                    this.dd = el;
                    this.initEvents();
                }
                DropDown.prototype = {
                    initEvents : function() {
                        var obj = this;

                        obj.dd.on('click', function(event){
                            $(this).toggleClass('active');
                            event.stopPropagation();
                        });
                    }
                }

                $(function() {

                    var dd = new DropDown( $('#dd') );

                    $(document).click(function() {
                        // all dropdowns
                        $('.wrapper-dropdown-2').removeClass('active');
                    });

                });

            </script>
            <div class="clear"></div>
        </div>
        <div class="header_bottom">
            <div class="menu">
                <ul>
                    <li class="active"><a href="{!! asset('Trangchu') !!}">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="delivery.html">Delivery</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="search_box">
                <form>
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                </form>
            </div>
            <div class="clear"></div>
        </div>

    </div>
    <div class="main" id="reload">
      @yield('content')

    </div>
</div>
<div class="footer">
    <div class="wrap">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>Information</h4>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Customer Service</a></li>
                    <li><a href="#">Advanced Search</a></li>
                    <li><a href="delivery.html">Orders and Returns</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Why buy from us</h4>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Customer Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="contact.html">Site Map</a></li>
                    <li><a href="#">Search Terms</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>My account</h4>
                <ul>
                    <li><a href="contact.html">Sign In</a></li>
                    <li><a href="index.html">View Cart</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="contact.html">Help</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Contact</h4>
                <ul>
                    <li><span>+91-123-456789</span></li>
                    <li><span>+00-123-000000</span></li>
                </ul>
                <div class="social-icons">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
                        <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
                        <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
                        <li><a href="#" target="_blank"> <img src="images/dribbble.png" alt="" /></a></li>
                        <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right">
        <p>Company Name © All rights Reseverd | Design by  VInh</a> </p>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
<script  src="{!! asset('public/js/MyScrip.js') !!}"></script>
</html>

