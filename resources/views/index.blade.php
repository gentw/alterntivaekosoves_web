<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="alrayan1">
<head>
    <title>Alternativa e Kosoves</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Politika - Political html template</title>
     <!-- favicon -->
     <link rel=icon href=assets/img/favicon.png sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="{{url('/css/theme/animate.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{url('/css/theme/bootstrap.min.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{url('/css/theme/magnific-popup.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{url('/css/theme/slick.css')}}" />
    <link rel="stylesheet" href="{{url('/css/theme/slick-theme.css')}}" />
    <!-- nice select -->
    <link rel="stylesheet" href="{{url('/css/theme/nice-select.css')}}">
    <!-- animated css -->
    <link rel="stylesheet" href="{{url('/css/theme/animated-slider.css')}}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{url('/css/theme/owl.carousel.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{url('/css/theme/font-awesome.min.css')}}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{url('/css/theme/flaticon.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{url('/css/theme/style.css')}}">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{url('/css/theme/responsive.css')}}">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular-sanitize.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script  src="{{url('js/base.min.js')}}"></script>
    <script src="{{url('v4 bootstrap/bootstrap/bootstrap.min.js')}}"></script>
    <script  src="{{url('js/app.js')}}"></script>


    
    @yield('title_and_meta')
</head>
<body ng-controller="HeaderCtrl">

<!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <!-- preloader area end -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="/" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!--sidebar menu start-->
    <div class="sidebar-menu" id="sidebar-menu">
        <button class="sidebar-menu-close"><i class="flaticon-close"></i></button>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <img src="{{url('')}}/img/manjakos/<%includes.global.one[0]['footer-info']['collections']['logo']%>" alt="logo"/>
            </div>
            <div class="sidemenu-text">
                <p><%includes.global.one[0]['footer-info']['collections']['description']['en']%></p>
            </div>
            <div class="sidebar-contact">
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fa fa-map-marker"></i><%includes.global.one[0]['footer-info']['collections']['location']['en']%></li>
                    <li><i class="fa fa-envelope"></i><%includes.global.one[0]['footer-info']['collections']['email']['en']%></li>
                    <li><i class="fa fa-phone"></i><%includes.global.one[0]['footer-info']['collections']['phone_no']['en']%></li>
                </ul>
            </div>
            <div class="sidebar-subscribe">
                <input type="text" placeholder="Email">
                <button><i class="fa fa-long-arrow-right"></i></button>
            </div>
            <div class="social-link">
                <ul>
                    <li><a href="<%includes.global.one[0]['socials']['collections']['fb']['en']%>"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="<%includes.global.one[0]['socials']['collections']['insta']['en']%>"><i class="fa fa-instagram"></i></a></li>
                <li><a href="<%includes.global.one[0]['socials']['collections']['twitter']['en']%>"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--sidebar menu end-->



<div class="politix-navbar">
    @include('navbar.navbar')
</div>



<div>
    @yield('content')
</div>
@include('includes.footer')
    

<!-- jquery -->
    <script src="{{url('js/theme/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- popper -->
    <script src="{{url('js/theme/vendor/popper.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{url('js/theme/vendor/bootstrap.min.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{url('js/theme/vendor/jquery.magnific-popup.js')}}"></script>
    <!-- wow -->
    <script src="{{url('js/theme/vendor/wow.min.js')}}"></script>
    <!-- animated slider -->
    <script src="{{url('js/theme/vendor/animated-slider.js')}}"></script>
    <!-- nice select -->
    <script src="{{url('js/theme/vendor/nice-select.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{url('js/theme/vendor/owl.carousel.min.js')}}"></script>
    <!-- Slick -->
    <script src="{{url('js/theme/vendor/slick.min.js')}}"></script>
    <!-- Slick Animation -->
    <script src="{{url('js/theme/vendor/slick-animation.js')}}"></script>
    <!-- waypoint -->
    <script src="{{url('js/theme/vendor/waypoints.min.js')}}"></script>
    <!-- imageloaded -->
    <script src="{{url('js/theme/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <!-- swiper -->
    <script src="{{url('js/theme/vendor/swiper.min.js')}}"></script>
    <!-- isotope -->
    <script src="{{url('js/theme/vendor/isotope.pkgd.min.js')}}"></script>

    <script src="{{url('js/theme/vendor/jquery.classyloader.js')}}"></script>

    <!-- main js -->
    <script src="{{url('js/theme/script.js')}}"></script>
    <script src="{{url('js/theme/main.js')}}"></script>

</body>

</html>