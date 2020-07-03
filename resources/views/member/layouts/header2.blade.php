<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobPress HTML template</title>

    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="{{asset('static/zp/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Ionicons -->
    <link href="{{asset('static/zp/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{asset('static/zp/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('static/zp/css/owl.theme.default.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('static/zp/css/animate.min.css')}}" rel="stylesheet">
    <!--Magnific Popup -->
    <link href="{{asset('static/zp/css/magnific-popup.css')}}" rel="stylesheet">
    <!--Tagsinput CSS -->
    <link href="{{asset('static/zp/css/tagsinput.css')}}" rel="stylesheet">
    <!-- Style.css -->
    <link href="{{asset('static/zp/css/style.css')}}" rel="stylesheet">

</head>
<body>

<!-- Header -->
<header class="header">
    <div class="container clearfix">
        <div class="header-inner flex space-between items-center">
            <div class="left">
                <div class="logo"><a href="index.html"><img src="static/zp/images/logo.png" alt="JobPress" class="img-responsive"></a></div>
            </div> <!-- end .left -->
            <div class="right flex space-between no-column items-center">
                <div class="navigation">
                    <nav class="main-nav">
                        <ul class="list-unstyled">
                            <li class="active"><a href="">首页</a></li>
                            <li><a href="about_us">关于我们</a></li>
                            <li><a href="about.html">担保免赔付招聘</a></li>
                            <li><a href="about.html">普通招聘</a></li>
                            <li><a href="about.html">骗子公告栏</a></li>
                            {{--                            <li class="menu-item-has-children">--}}
                            {{--                                <a href="candidates-listing.html">Candidates</a>--}}
                            {{--                                <ul>--}}
                            {{--                                    <li><a href="candidates-listing.html">Browse Candidates</a></li>--}}
                            {{--                                    <li><a href="companies-listing.html">Browse Companies</a></li>--}}
                            {{--                                    <li><a href="jobs-listing.html">Jobs Listing</a></li>--}}
                            {{--                                    <li><a href="job-details.html">Job Details</a></li>--}}
                            {{--                                    <li><a href="categories.html">Job Categories</a></li>--}}
                            {{--                                    <li><a href="post-resume-form.html">Post a Resume</a></li>--}}
                            {{--                                    <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="menu-item-has-children">--}}
                            {{--                                <a href="companies-listing.html">Companies</a>--}}
                            {{--                                <ul>--}}
                            {{--                                    <li><a href="companies-listing.html">Browse Companies</a></li>--}}
                            {{--                                    <li><a href="post-job-form.html">Post a job</a></li>--}}
                            {{--                                    <li><a href="employer-dashboard.html">Employer Dashboard</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="menu-item-has-children">--}}
                            {{--                                <a href="blog-standard.html">Blog</a>--}}
                            {{--                                <ul>--}}
                            {{--                                    <li><a href="blog-standard.html">Blog Standard</a></li>--}}
                            {{--                                    <li><a href="blog-grid-full-width.html">Blog Grid Full Width</a></li>--}}
                            {{--                                    <li><a href="blog-masonry-full-width.html">Blog Masonry Full Width</a></li>--}}
                            {{--                                    <li><a href="blog-list.html">Blog List</a></li>--}}
                            {{--                                    <li><a href="blog-single-fullwidth-image.html">Blog Single Image</a></li>--}}
                            {{--                                    <li><a href="blog-single-fullwidth-video.html">Blog Single Video</a></li>--}}
                            {{--                                    <li><a href="blog-single-with-sidebar.html">Blog Single Sidebar</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="menu-item-has-children">--}}
                            {{--                                <a href="#0">Pages</a>--}}
                            {{--                                <ul>--}}
                            {{--                                    <li><a href="help.html">Help Tabs</a></li>--}}
                            {{--                                    <li><a href="contact-us-full-width.html">Contact Us</a></li>--}}
                            {{--                                    <li><a href="pricing-plans.html">Pricing plans</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                        </ul>
                    </nav> <!-- end .main-nav -->
                    <a href class="responsive-menu-open"><i class="ion-navicon"></i></a>
                </div> <!-- end .navigation -->
                @if(isset($admin))
                    <div class="button-group-merged flex no-column">
                        <a href="logout" class="button">退出</a>
                        <a href="#" class="button">{{$admin->login_name}}</a>
                    </div>
                @else
                    <div class="button-group-merged flex no-column">
                        <a href="registered" class="button">注册</a>
                        <a href="login" class="button">登陆</a>
                    </div> <!-- end .button-group-merged -->
                @endif
            </div> <!-- end .right -->
        </div> <!-- end .header-inner -->
    </div> <!-- end .container -->
</header>
<!-- end .header -->

<!-- Responsive Menu -->
<div class="responsive-menu">
    <a href class="responsive-menu-close"><i class="ion-android-close"></i></a>
    <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->

@yield('content')
@yield('footer')


<!-- Scripts -->
<!-- jQuery -->
<script src="{{asset('static/zp/js/jquery-3.1.1.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('static/zp/js/bootstrap.min.js')}}"></script>
<!-- google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
<!-- Owl Carousel -->
<script src="{{asset('static/zp/js/owl.carousel.min.js')}}"></script>
<!-- Wow.js -->
<script src="{{asset('static/zp/js/wow.min.js')}}"></script>
<!-- Typehead.js -->
<script src="{{asset('static/zp/js/typehead.js')}}"></script>
<!-- Tagsinput.js -->
<script src="{{asset('static/zp/js/tagsinput.js')}}"></script>
<!-- Bootstrap Select -->
<script src="{{asset('static/zp/js/bootstrap-select.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('static/zp/js/jquery.waypoints.min.js')}}"></script>
<!-- CountTo -->
<script src="{{asset('static/zp/js/jquery.countTo.js')}}"></script>
<!-- Isotope -->
<script src="{{asset('static/zp/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('static/zp/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- Magnific-Popup -->
<script src="{{asset('static/zp/js/jquery.magnific-popup.js')}}"></script>
<!-- Scripts.js -->
<script src="{{asset('static/zp/js/scripts.js')}}"></script>

@yield('script')

</body>
</html>
