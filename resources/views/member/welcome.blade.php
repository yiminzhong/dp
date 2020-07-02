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
                            <li class="active"><a href="index.html">首页</a></li>
                            <li><a href="about.html">关于我们</a></li>
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
                @if($admin)
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
</header> <!-- end .header -->

<!-- Responsive Menu -->
<div class="responsive-menu">
    <a href class="responsive-menu-close"><i class="ion-android-close"></i></a>
    <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->


<!-- Hero Section -->
<div class="section hero-section transparent" style="background-image: url(&#x27;static/zp/images/background01.jpg&#x27;);">
    <div class="inner">
        <div class="container">
            <div class="job-search-form">
                <h2>这里有<span>100,000<sup>+</sup></span>的工作在等你</h2>
{{--                <form class="form-inline flex">--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="form-group-inner">--}}
{{--                            <input type="text" class="form-control" id="input-field-1" placeholder="job title / Keywords / company name">--}}
{{--                            <i class="ion-ios-briefcase-outline"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" class="form-control" id="input-field-2" placeholder="city / province / zip code">--}}
{{--                        <i class="ion-ios-location-outline"></i>--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>--}}
{{--                </form>--}}
                <div class="keywords flex">
                    <h4 class="self-center">这里需要:</h4>
                    <a href="#0" class="button item-center">推广</a>
                    <a href="#0" class="button item-center">it</a>
{{--                    <a href="#0" class="button item-center"></a>--}}
                </div> <!-- end .keywords -->
            </div> <!-- end .job-search-form -->
        </div>
        <!-- end .container -->
        <div class="features-bar">
            <div class="container">
                <div class="features-bar-inner flex space-between">
                    <div class="features-box self-center">
                        <h3>Leading the industry</h3>
                        <a href="about.html">关于我们<i class="ion-ios-arrow-thin-right"></i></a>
                    </div> <!-- end .feature-box -->
                    <div class="features-box-icon flex no-wrap">
                        <img src="static/zp/images/feature-icon01.png" alt="cup-icon" class="img-responsive self-center">
                        <div class="content self-center">
                            <h3>High average salary</h3>
                            <a href="#0">更多<i class="ion-ios-arrow-thin-right"></i></a>
                        </div> <!-- end .content -->
                    </div> <!-- end .feature-box-icon -->
                    <div class="features-box-icon flex no-wrap">
                        <img src="static/zp/images/feature-icon02.png" alt="cup-icon" class="img-responsive self-center">
                        <div class="content self-center">
                            <h3>2,500,000+ candidates</h3>
                            <a href="#0">防骗社区<i class="ion-ios-arrow-thin-right"></i></a>
                        </div> <!-- end .content -->
                    </div> <!-- end .feature-box-icon -->
                    <div class="user-profile-icon self-center">
                        <img src="static/zp/images/profile-icon01.png" alt="profile-icon" class="img-responsive self-center">
                    </div> <!-- end .profile-icon -->
                </div> <!-- end .features-bar-inner -->
            </div> <!-- end .container -->
        </div> <!-- end .features-bar -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Featured Jobs Section -->
<div class="section featured-jobs-section">
    <div class="inner">
        <div class="container">
            <div class="section-top-content flex items-center">
                <h1>Featured Jobs</h1>
                <a href="#0">View all jobs<i class="ion-ios-arrow-thin-right"></i></a>
            </div> <!-- end .section-top-content -->
            <div class="jobs-table">
                <div class="table-header">
                    <div class="table-cells flex">
                        <div class="job-title-cell"><h6>Job title / Company name</h6></div>
                        <div class="job-type-cell"><h6>Type</h6></div>
                        <div class="location-cell"><h6>Location</h6></div>
                        <div class="expired-date-cell"><h6>Expired Date</h6></div>
                        <div class="salary-cell"><h6>Salary</h6></div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-header -->

                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="static/zp/images/company-logo01.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Web Designer needed</a></h4>
                                <p class="small">Quick studio</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div> <!-- end .job-type-cell -->
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div> <!-- end .location-cell -->
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired Date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div> <!-- end .expire-date-cell -->
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div> <!-- end .salray-cell -->
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->

                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="static/zp/images/company-logo02.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">We're hiring a fullstack developer</a></h4>
                                <p class="small">Archive inc.</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button part-time">Part time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->

                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="static/zp/images/company-logo03.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Looking for a project leader</a></h4>
                                <p class="small">Comply agency</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired Date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->

                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="static/zp/images/company-logo04.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Front-end developer needed</a></h4>
                                <p class="small">Folder cooperation</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button freelancer">freelancer</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->

                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="static/zp/images/company-logo05.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Software Engineer</a></h4>
                                <p class="small">Bookcover publisher</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->

                <div class="table-footer flex space-between items-center">
                    <h6>Showing<span>1-5</span>of 23 jobs</h6>
                    <div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
                        <a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
                        <ul class="list-unstyled flex no-column items-center">
                            <li><a href="#0">1</a></li>
                            <li><a href="#0">2</a></li>
                            <li><a href="#0">3</a></li>
                            <li><a href="#0">4</a></li>
                            <li><a href="#0">5</a></li>
                        </ul>
                        <a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
                    </div> <!-- end .jobpress-custom-pager -->
                </div>
            </div> <!-- end .jobs-table -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Category Section -->
<div class="section category-section solid-blue-bg">
    <div class="inner">
        <div class="container">
            <h1 class="light">Browse Categories</h1>
            <div class="category-grid">
                <div class="category-row flex no-wrap space-between items-center">
                    <div class="item">
                        <img src="static/zp/images/category-icon01.png" alt="category-icon" class="img-responsive">
                        <h4>Finance</h4>
                        <p class="light">4286 Jobs</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="static/zp/images/category-icon02.png" alt="category-icon" class="img-responsive">
                        <h4>Construction</h4>
                        <p class="light">452 Jobs</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="static/zp/images/category-icon03.png" alt="category-icon" class="img-responsive">
                        <h4>Logistics</h4>
                        <p class="light">1867 Jobs</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="static/zp/images/category-icon04.png" alt="category-icon" class="img-responsive">
                        <h4>Art/Design</h4>
                        <p class="light">3094 jobs</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="static/zp/images/category-icon05.png" alt="category-icon" class="img-responsive">
                        <h4>Sales/Marketing</h4>
                        <p class="light">2955 jobs</p>
                    </div> <!-- end .item -->
                </div> <!-- end .category-row -->

                <div class="category-row flex no-wrap space-between items-center">
                    <div class="item">
                        <img src="static/zp/images/category-icon06.png" alt="category-icon" class="img-responsive">
                        <h4>Science</h4>
                        <p class="light">470 Jobs</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="static/zp/images/category-icon07.png" alt="category-icon" class="img-responsive">
                        <h4>Technologies</h4>
                        <p class="light">4536 Jobs</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="static/zp/images/category-icon08.png" alt="category-icon" class="img-responsive">
                        <h4>Healthcare</h4>
                        <p class="light">2619 Jobs</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="static/zp/images/category-icon09.png" alt="category-icon" class="img-responsive">
                        <h4>Education/Training</h4>
                        <p class="light">1132 jobs</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="static/zp/images/category-icon10.png" alt="category-icon" class="img-responsive">
                        <h4>Food Services</h4>
                        <p class="light">757 jobs</p>
                    </div> <!-- end .item -->
                </div> <!-- end .category-row -->
            </div>	<!-- end .category-grid -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
    <div class="background-text">
        <h1>Categories</h1>
    </div> <!-- end .background-text -->
</div> <!-- end .section -->

<!-- Latest Jobs Section -->
<div class="section Latest-jobs-section">
    <div class="inner">
        <div class="container">
            <div class="section-top-content flex items-center">
                <h1>Latest Jobs</h1>
                <a href="#0">View all jobs<i class="ion-ios-arrow-thin-right"></i></a>
            </div> <!-- end .section-top-content -->
            <div class="jobs-table">
                <div class="table-header">
                    <div class="table-cells flex">
                        <div class="job-title-cell"><h6>Job title / Company name</h6></div>
                        <div class="job-type-cell"><h6>Type</h6></div>
                        <div class="location-cell"><h6>Location</h6></div>
                        <div class="expired-date-cell"><h6>Expired Date</h6></div>
                        <div class="salary-cell"><h6>Salary</h6></div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-header -->
                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="static/zp/images/company-logo06.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Web Designer needed</a></h4>
                                <p class="small">Whale creative</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->
                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="static/zp/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">We're hiring a fullstack developer</a></h4>
                                <p class="small">Banana inc.</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button part-time">Part time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->
                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="static/zp/images/company-logo08.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Looking for a project leader</a></h4>
                                <p class="small">Elephant studio</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->
                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="static/zp/images/company-logo09.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Front-end developer needed</a></h4>
                                <p class="small">Med-Equal</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button freelancer">freelancer</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->
                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="static/zp/images/company-logo10.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Software Engineer</a></h4>
                                <p class="small">organicoo</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->
                <div class="table-footer flex space-between items-center">
                    <h6>Showing<span>1-5</span>of 23 jobs</h6>
                    <div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
                        <a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
                        <ul class="list-unstyled flex no-column items-center">
                            <li><a href="#0">1</a></li>
                            <li><a href="#0">2</a></li>
                            <li><a href="#0">3</a></li>
                            <li><a href="#0">4</a></li>
                            <li><a href="#0">5</a></li>
                        </ul>
                        <a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
                    </div> <!-- end .jobpress-custom-pager -->
                </div>
            </div> <!-- end .jobs-table -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<div class="section cta-section parallax text-center" style="background-image: url(&#x27;static/zp/images/background02.jpg&#x27;);">
    <div class="inner">
        <div class="container">
            <h2>Looking for a job</h2>
            <p class="large light">Join thousand of emplyers and earn what you deserve</p>
            <div class="cta-button">
                <a href="post-resume-form.html" class="button">Get started now</a>
            </div> <!-- end .cta-button -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Latest News Section -->
<div class="section Latest-news-section">
    <div class="inner">
        <div class="container">
            <div class="section-top-content flex items-center">
                <h1>Latest News</h1>
                <a href="blog-list.html">View all news<i class="ion-ios-arrow-thin-right"></i></a>
            </div> <!-- end .section-top-content -->
            <div class="news-grid">
                <div class="news-grid-row flex space-between">
                    <div class="news-item">
                        <img src="static/zp/images/news-grid01.jpg" alt="news-thumbnail" class="img-responsive">
                        <div class="news-content">
                            <div class="news-meta flex no-column">
                                <h6><a href="#0" class="news-author">Nancy watson</a></h6>
                                <h6 class="publish-date">20.02.2017</h6>
                                <h6><a href="#0" class="comment-count">5 comments</a></h6>
                            </div> <!-- end .news-meta -->
                            <h3 class="news-title">Tips to write an impressive resume online for beginner</h3>
                            <p class="news-excerpt">Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien tempus.</p>
                            <a href="blog-single-fullwidth-image.html" class="button">Read More</a>
                        </div> <!-- end .news-content -->
                    </div> <!-- end .news-item -->
                    <div class="news-item">
                        <img src="static/zp/images/news-grid02.jpg" alt="news-thumbnail" class="img-responsive">
                        <div class="news-content">
                            <div class="news-meta flex no-column">
                                <h6><a href="#0" class="news-author">Nancy watson</a></h6>
                                <h6 class="publish-date">20.02.2017</h6>
                                <h6><a href="#0" class="comment-count">5 comments</a></h6>
                            </div> <!-- end .news-meta -->
                            <h3 class="news-title">Let's explore 5 cool new features in JobPress theme</h3>
                            <p class="news-excerpt">Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien tempus.</p>
                            <a href="blog-single-fullwidth-image.html" class="button">Read More</a>
                        </div> <!-- end .news-content -->
                    </div> <!-- end .news-item -->
                    <div class="news-item">
                        <img src="static/zp/images/news-grid03.jpg" alt="news-thumbnail" class="img-responsive">
                        <div class="news-content">
                            <div class="news-meta flex no-column">
                                <h6><a href="#0" class="news-author">Nancy watson</a></h6>
                                <h6 class="publish-date">20.02.2017</h6>
                                <h6><a href="#0" class="comment-count">5 comments</a></h6>
                            </div> <!-- end .news-meta -->
                            <h3 class="news-title">How to convince recuiters and get your dream job</h3>
                            <p class="news-excerpt">Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien tempus.</p>
                            <a href="blog-single-fullwidth-image.html" class="button">Read More</a>
                        </div> <!-- end .news-content -->
                    </div> <!-- end .news-item -->
                </div>  <!-- end .news-grid-row -->
            </div> <!-- end .news-grid -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Clients Section -->
<div class="section clients-section solid-grey-bg">
    <div class="inner">
        <div class="container">
            <h1 class="section-title">Clients & Partners</h1>
            <div class="logo-grid">
                <div class="logo-grid-row flex space-between">
                    <div class="logo-item flex">
                        <img src="static/zp/images/client-logo01.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item flex">
                        <img src="static/zp/images/client-logo02.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item flex">
                        <img src="static/zp/images/client-logo03.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item flex">
                        <img src="static/zp/images/client-logo04.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item flex">
                        <img src="static/zp/images/client-logo05.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item flex">
                        <img src="static/zp/images/client-logo06.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                </div> <!-- end .logo-grid-row -->
            </div> <!-- end .logo-grid -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- CTA App Section -->
<div class="section cta-app-section solid-blue-bg">
    <div class="inner">
        <div class="container">
            <div class="cta-app-section-inner flex space-between items-center">
                <div class="left">
                    <h2 class="light">Don't want to miss a thing?</h2>
                    <p class="large">Just go to<span>AppStore</span>&<span>Google Play</span>to download<span>JobPress Mini</span></p>
                </div> <!-- end .left -->
                <div class="button-group flex no-column">
                    <a href="#0" class="button white">Google Play</a>
                    <a href="#0" class="button white">Apple Store</a>
                </div> <!-- end .button-group -->
            </div> <!-- end .cta-app-section-inner -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Footer -->
<div class="section footer transparent" style="background-image: url(&#x27;static/zp/images/background03.jpg&#x27;);">
    <div class="container">
        <div class="top flex space-between items-center">
            <img src="static/zp/images/footer-logo.png" alt="footer-logo" class="img-responsive">
            <ul class="list-unstyled footer-menu flex">
                <li><a href="#0">Home</a></li>
                <li><a href="#0">About</a></li>
                <li><a href="#0">Browse Jobs</a></li>
                <li><a href="#0">Browse candidates</a></li>
                <li><a href="#0">Contact</a></li>
            </ul> <!-- end .footer-menu -->
        </div> <!-- end .top -->
        <div class="footer-widgets flex no-column space-between">
            <div class="widget">
                <h6>About</h6>
                <ul class="list-unstyled">
                    <li><a href="#0">Company</a></li>
                    <li><a href="#0">Our Partners</a></li>
                    <li><a href="#0">Blog</a></li>
                    <li><a href="#0">FAQ</a></li>
                    <li><a href="#0">Pricing</a></li>
                    <li><a href="#0">Help Center</a></li>
                    <li><a href="#0">Team</a></li>
                    <li><a href="#0">Contact Us</a></li>
                </ul>
            </div> <!-- end .widget -->
            <div class="widget">
                <h6>For candidates</h6>
                <ul class="list-unstyled">
                    <li><a href="#0">Browse Jobs</a></li>
                    <li><a href="#0">Browse categories</a></li>
                    <li><a href="#0">Submit Resume</a></li>
                    <li><a href="#0">Candidate Dashboard</a></li>
                    <li><a href="#0">Job Alerts</a></li>
                    <li><a href="#0">My Bookmarks</a></li>
                </ul>
            </div> <!-- end .widget -->
            <div class="widget">
                <h6>For companies</h6>
                <ul class="list-unstyled">
                    <li><a href="#0">Browse Candidates</a></li>
                    <li><a href="#0">Company Dashboard</a></li>
                    <li><a href="#0">Add A Job</a></li>
                    <li><a href="#0">Packages</a></li>
                </ul>
            </div> <!-- end .widget -->
            <div class="widget">
                <h6>Follow us</h6>
                <ul class="list-unstyled social-icons flex no-column">
                    <li><a href="#0"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#0"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#0"><i class="ion-social-youtube"></i></a></li>
                    <li><a href="#0"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="#0"><i class="ion-social-linkedin"></i></a></li>
                </ul>
                <h6>Subscribe Us</h6>
                <p>Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleifend tempor vitae augue.</p>
                <form class="form-inline subscribe-form flex no-column no-wrap items-center">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your email">
                    </div> <!-- end .form-group -->
                    <button type="submit" class="button"><i class="ion-ios-arrow-thin-right"></i></button>
                </form>
            </div> <!-- end .widget -->
        </div> <!-- end .footer-widgets -->
        <div class="bottom flex space-between items-center">
            <p class="copyright-text small">&copy; 2017 <a href="#0">JobPress</a>. All Rights Reserved. Designed by <a href="#0">LeoStudo</a>.</p>
            <ul class="list-unstyled copyright-menu flex no-column">
                <li><a href="#0">Privacy policy</a></li>
                <li><a href="#0">Terms of service</a></li>
                <li><a href="#0">Conditions</a></li>
            </ul> <!-- end .copyright-menu -->
        </div> <!-- end .bottom -->
    </div> <!-- end .container -->
</div> <!-- end .footer -->


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

</body>
</html>
