@extends('member.layouts.header2')
@section('content')
    <!-- Responsive Menu -->
    <div class="responsive-menu">
        <a href class="responsive-menu-close"><i class="ion-android-close"></i></a>
        <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
    </div> <!-- end .responsive-menu -->

    <!-- Breadcrumb Bar -->
    <div class="section breadcrumb-bar solid-blue-bg">
        <div class="inner">
            <div class="container">
                <div class="breadcrumb-menu flex items-center no-column">
                    <img src="static/zp/images/company-logo-big01.jpg" alt="company-logo" class="img-responsive">
                    <div class="breadcrumb-info-dashboard">
                        <h2>{{$admin->login_name}}</h2>
                        <h4>{{$admin->ipone}}</h4>
                    </div> <!-- end .candidate-info -->
                </div> <!-- end .breadcrumb-menu -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <!-- Employer Dashboard -->
    <div class="section employer-dashboard-content solid-light-grey-bg">
        <div class="inner">
            <div class="container">
                <div class="employer-dashboard-wrapper flex space-between no-wrap">

                    <div class="left-sidebar-menu">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="heading">账户信息</li>
                            <li class="active"><a data-toggle="pill" href="#profile">我的资料</a></li>
                            <li ><a data-toggle="pill" href="#favorite-candidates">我的推广</a></li>
                            <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications-employer">Notifications</a> <span class="notification-count">2</span></li>
                            <li><a data-toggle="pill" href="#packages">Packages</a></li>
                            <li class="nav-divider"></li>
                            <li class="heading">Manage job</li>
                            <li><a data-toggle="pill" href="#manage-jobs">Manage Jobs</a></li>
                            <li><a data-toggle="pill" href="#manage-applications-employer">Manage Applications</a></li>
                            <li class="nav-divider"></li>
                            <li><a data-toggle="pill" href="#change-password-employer">Change Password</a></li>
                            <li><a  href="logout">退出</a></li>
                        </ul>
                    </div> <!-- end .left-sidebar-menu -->

                    <div class="right-side-content">
                        <div class="tab-content employer-dashboard">

                            <div id="favorite-candidates" class="tab-pane fade in ">
                                <h3 class="tab-pane-title">我的推广</h3>
                                <div class="favorite-candidates-list-wrapper">
                                    @if(isset($admin->votes))
                                    <div class="fav-candidates-wrapper">

                                        <div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
                                            <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                                                推广注册码:<p style="color: red">{{$admin->votes}}</p>
                                            </div> <!-- end .candidate-name-cell -->
                                        </div> <!-- end .fav-candidate -->

                                        <div class="divider"></div>

                                    </div>
                                    <!-- end .fav-candidates-wrapper -->
                                    @endif
                                    <ul class="fav-candidates-table-headings flex items-center no-column list-unstyled">
                                        <li class="candidate-name-cell candidate-cell"><h6>account</h6></li>
                                        <li class="candidate-skills-cell candidate-cell"><h6>Skills</h6></li>
                                        <li class="candidate-location-cell"><h6>Location</h6></li>
                                    </ul> <!-- end .fav-candidates-table-headings -->
                                        @foreach($my_menbers_list as $k=>$v)
                                    <div class="fav-candidates-wrapper">

                                        <div class="fav-candidate flex no-wrap no-column items-center list-unstyled">
                                            <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>account</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex items-center no-column no-wrap">

                                                    <div class="cell-text no-column">
                                                        <p>{{$v['login_name']}}</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="candidate-skills-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Skills</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <button type="button" class="button button-sm grey ">推广</button>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-skills-cell -->

                                            <div class="candidate-location-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Location</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p>Park Ave, NYC, USA</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-location-cell -->

                                            <div class="candidate-edit-cell flex items-center no-wrap no-column no-wrap">
                                                <i class="ion-ios-compose-outline edit-icon"></i>
                                                <i class="ion-ios-trash-outline trash-icon"></i>
                                                <i class="ion-ios-more-outline options-icon"></i>
                                            </div> <!-- end .posted-job-edit-cell -->
                                        </div> <!-- end .fav-candidate -->

                                        <div class="divider"></div>

                                    </div> <!-- end .fav-candidates-wrapper -->
                                        @endforeach
                                </div> <!-- end .favorite-candidates-list-wrapper -->

                                <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
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

                            </div> <!-- end #favorite-candidates-tab -->



                            <div id="manage-applications-employer" class="tab-pane fade in">
                                <h3 class="tab-pane-title">Manage applications</h3>
                                <div class="candidate-applications-list-wrapper">

                                    <ul class="candidate-applications-table-headings flex items-center no-column no-wrap list-unstyled">
                                        <li class="candidate-name-cell candidate-cell"><h6>Name</h6></li>
                                        <li class="candidate-job-cell candidate-cell"><h6>Job</h6></li>
                                        <li class="candidate-resume-cell"><h6>Resume</h6></li>
                                        <li class="candidate-actions-cell"><h6>Actions</h6></li>
                                    </ul> <!-- end .fav-candidates-table-headings -->

                                    <div class="candidate-applications-wrapper">

                                        <div class="candidate-application flex no-wrap no-column items-center list-unstyled">
                                            <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Name</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex items-center no-column no-wrap">
                                                    <div class="candidate-img">
                                                        <img src="static/zp/images/candidate-small01.jpg" alt="candidate-image" class="img-responsive">
                                                    </div> <!-- end .candidate-img -->
                                                    <div class="cell-text no-column">
                                                        <h4>Richard Thomas</h4>
                                                        <p>UI/UX Designer</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Job</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p>Web Designer needed</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-job-cell -->

                                            <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Resume</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p><span><i class="ion-document"></i></span>PDF (54KB)</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-resume-cell -->

                                            <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Actions</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <i class="ion-ios-checkmark-empty approve-icon"></i>
                                                    <i class="ion-ios-close-empty trash-icon"></i>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-actions-cell -->
                                        </div> <!-- end .candidate-application -->

                                        <div class="divider"></div>

                                        <div class="candidate-application flex no-wrap no-column items-center list-unstyled">
                                            <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Name</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex items-center no-column no-wrap">
                                                    <div class="candidate-img">
                                                        <img src="static/zp/images/candidate-small02.jpg" alt="candidate-image" class="img-responsive">
                                                    </div> <!-- end .candidate-img -->
                                                    <div class="cell-text no-column">
                                                        <h4>David Ortega</h4>
                                                        <p>Front-end developer</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Job</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p>Front-end developer needed</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-job-cell -->

                                            <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Resume</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p><span><i class="ion-document"></i></span>PDF (54KB)</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-resume-cell -->

                                            <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Actions</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <i class="ion-ios-checkmark-empty approve-icon"></i>
                                                    <i class="ion-ios-close-empty trash-icon"></i>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-actions-cell -->
                                        </div> <!-- end .candidate-application -->

                                        <div class="divider"></div>

                                        <div class="candidate-application flex no-wrap no-column items-center list-unstyled">
                                            <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Name</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex items-center no-column no-wrap">
                                                    <div class="candidate-img">
                                                        <img src="static/zp/images/candidate-small06.jpg" alt="candidate-image" class="img-responsive">
                                                    </div> <!-- end .candidate-img -->
                                                    <div class="cell-text no-column">
                                                        <h4>Nancy Suvillivan</h4>
                                                        <p>Graphic Designer</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Job</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p>Graphic Designer needed</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-job-cell -->

                                            <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Resume</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p><span><i class="ion-document"></i></span>PDF (54KB)</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-resume-cell -->

                                            <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Actions</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <i class="ion-ios-checkmark-empty approve-icon"></i>
                                                    <i class="ion-ios-close-empty trash-icon"></i>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-actions-cell -->
                                        </div> <!-- end .candidate-application -->

                                        <div class="divider"></div>

                                        <div class="candidate-application flex no-wrap no-column items-center list-unstyled">
                                            <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Name</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex items-center no-column no-wrap">
                                                    <div class="candidate-img">
                                                        <img src="static/zp/images/candidate-small07.jpg" alt="candidate-image" class="img-responsive">
                                                    </div> <!-- end .candidate-img -->
                                                    <div class="cell-text no-column">
                                                        <h4>Gregory cooper</h4>
                                                        <p>Web Designer</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Job</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p>Web Designer needed</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-job-cell -->

                                            <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Resume</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p><span><i class="ion-document"></i></span>PDF (54KB)</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-resume-cell -->

                                            <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Actions</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <i class="ion-ios-checkmark-empty approve-icon"></i>
                                                    <i class="ion-ios-close-empty trash-icon"></i>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-actions-cell -->
                                        </div> <!-- end .candidate-application -->

                                        <div class="divider"></div>

                                        <div class="candidate-application flex no-wrap no-column items-center list-unstyled">
                                            <div class="candidate-name-cell candidate-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Name</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex items-center no-column no-wrap">
                                                    <div class="candidate-img">
                                                        <img src="static/zp/images/candidate-small08.jpg" alt="candidate-image" class="img-responsive">
                                                    </div> <!-- end .candidate-img -->
                                                    <div class="cell-text no-column">
                                                        <h4>Brittany Riley</h4>
                                                        <p>Marketer</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="candidate-job-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Job</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p>Looking for a market position</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-job-cell -->

                                            <div class="candidate-resume-cell candidate-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Resume</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <p><span><i class="ion-document"></i></span>PDF (54KB)</p>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-resume-cell -->

                                            <div class="candidate-actions-cell candidate-cell flex items-center no-wrap no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Actions</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="candidate-cell-inner flex no-column no-wrap">
                                                    <i class="ion-ios-checkmark-empty approve-icon"></i>
                                                    <i class="ion-ios-close-empty trash-icon"></i>
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-actions-cell -->
                                        </div> <!-- end .candidate-application -->

                                        <div class="divider"></div>

                                    </div> <!-- end .candidate-applications-wrapper -->
                                </div> <!-- end .candidate-applications-list-wrapper -->

                                <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
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

                            </div> <!-- end #manage-applications-employer -->

                            <div id="manage-jobs" class="tab-pane fade in">
                                <h3 class="tab-pane-title">Manage Jobs</h3>
                                <div class="posted-jobs-list-wrapper">

                                    <ul class="posted-jobs-table-headings flex items-center no-column list-unstyled">
                                        <li class="posted-job-title-cell"><h6>Name</h6></li>
                                        <li class="posted-job-type-cell"><h6>Job Type</h6></li>
                                        <li class="posted-job-candidates-cell"><h6>Candidates</h6></li>
                                        <li class="posted-job-featured-cell"><h6>Featured</h6></li>
                                    </ul> <!-- end .posted-jobs-table-headings -->

                                    <div class="posted-jobs-wrapper">

                                        <div class="posted-job flex no-wrap no-column items-center list-unstyled">
                                            <div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Name</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner">
                                                    <div class="cell-text">
                                                        <h4>Web Designer needed</h4>
                                                        <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Job Type</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner flex no-column no-wrap">
                                                    <button type="button" class="button button-sm freelancer">Freelancer</button>
                                                </div> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-type-cell -->

                                            <div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Candidates</h6>
                                                </div> <!-- end .cell-label -->
                                                <ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
                                                    <li><img src="static/zp/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                                                    <li><img src="static/zp/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                                                    <li class="candidates-total-count"><img src="static/zp/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                                                </ul> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-candidates-cell -->

                                            <div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Featured</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner flex no-wrap no-column">
                                                    <i class="ion-ios-star grey"></i>
                                                </div> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-candidates-cell -->

                                            <div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
                                                <i class="ion-ios-compose-outline edit-icon"></i>
                                                <i class="ion-ios-trash-outline trash-icon"></i>
                                                <i class="ion-ios-more-outline options-icon"></i>
                                            </div> <!-- end .posted-job-edit-cell -->
                                        </div> <!-- end .posted-job -->

                                        <div class="divider"></div>

                                        <div class="posted-job flex no-wrap no-column items-center list-unstyled">
                                            <div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Name</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner">
                                                    <div class="cell-text">
                                                        <h4>We're hring a fullstack developer</h4>
                                                        <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Job Type</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner flex no-column no-wrap">
                                                    <button type="button" class="button button-sm full-time">Freelancer</button>
                                                </div> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-type-cell -->

                                            <div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Candidates</h6>
                                                </div> <!-- end .cell-label -->
                                                <ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
                                                    <li><img src="static/zp/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                                                    <li><img src="static/zp/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                                                    <li class="candidates-total-count"><img src="static/zp/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                                                </ul> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-candidates-cell -->

                                            <div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Featured</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner flex no-wrap no-column">
                                                    <i class="ion-ios-star safron"></i>
                                                </div> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-candidates-cell -->

                                            <div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
                                                <i class="ion-ios-compose-outline edit-icon"></i>
                                                <i class="ion-ios-trash-outline trash-icon"></i>
                                                <i class="ion-ios-more-outline options-icon"></i>
                                            </div> <!-- end .posted-job-edit-cell -->
                                        </div> <!-- end .posted-job -->

                                        <div class="divider"></div>

                                        <div class="posted-job flex no-wrap no-column items-center list-unstyled">
                                            <div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Name</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner">
                                                    <div class="cell-text">
                                                        <h4>Front-end developer needed</h4>
                                                        <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Job Type</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner flex no-column no-wrap">
                                                    <button type="button" class="button button-sm part-time">Freelancer</button>
                                                </div> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-type-cell -->

                                            <div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Candidates</h6>
                                                </div> <!-- end .cell-label -->
                                                <ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
                                                    <li><img src="static/zp/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                                                    <li><img src="static/zp/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                                                    <li class="candidates-total-count"><img src="static/zp/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                                                </ul> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-candidates-cell -->

                                            <div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Featured</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner flex no-wrap no-column">
                                                    <i class="ion-ios-star grey"></i>
                                                </div> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-candidates-cell -->

                                            <div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
                                                <i class="ion-ios-compose-outline edit-icon"></i>
                                                <i class="ion-ios-trash-outline trash-icon"></i>
                                                <i class="ion-ios-more-outline options-icon"></i>
                                            </div> <!-- end .posted-job-edit-cell -->
                                        </div> <!-- end .posted-job -->

                                        <div class="divider"></div>

                                        <div class="posted-job flex no-wrap no-column items-center list-unstyled">
                                            <div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Name</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner">
                                                    <div class="cell-text">
                                                        <h4>Looking for internship web designer</h4>
                                                        <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Job Type</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner flex no-column no-wrap">
                                                    <button type="button" class="button button-sm internship">Freelancer</button>
                                                </div> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-type-cell -->

                                            <div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Candidates</h6>
                                                </div> <!-- end .cell-label -->
                                                <ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
                                                    <li><img src="static/zp/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                                                    <li><img src="static/zp/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                                                    <li class="candidates-total-count"><img src="static/zp/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                                                </ul> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-candidates-cell -->

                                            <div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Featured</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner flex no-wrap no-column">
                                                    <i class="ion-ios-star grey"></i>
                                                </div> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-candidates-cell -->

                                            <div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
                                                <i class="ion-ios-compose-outline edit-icon"></i>
                                                <i class="ion-ios-trash-outline trash-icon"></i>
                                                <i class="ion-ios-more-outline options-icon"></i>
                                            </div> <!-- end .posted-job-edit-cell -->
                                        </div> <!-- end .posted-job -->

                                        <div class="divider"></div>

                                        <div class="posted-job flex no-wrap no-column items-center list-unstyled">
                                            <div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Name</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner">
                                                    <div class="cell-text">
                                                        <h4>We're looking for an project leader</h4>
                                                        <p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
                                                    </div> <!-- end .cell-text -->
                                                </div> <!-- end .candidate-cell-inner -->
                                            </div> <!-- end .candidate-name-cell -->

                                            <div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Job Type</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner flex no-column no-wrap">
                                                    <button type="button" class="button button-sm full-time">Freelancer</button>
                                                </div> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-type-cell -->

                                            <div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Candidates</h6>
                                                </div> <!-- end .cell-label -->
                                                <ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
                                                    <li><img src="static/zp/images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
                                                    <li><img src="static/zp/images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
                                                    <li class="candidates-total-count"><img src="static/zp/images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
                                                </ul> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-candidates-cell -->

                                            <div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
                                                <div class="cell-mobile-label">
                                                    <h6>Featured</h6>
                                                </div> <!-- end .cell-label -->
                                                <div class="posted-job-cell-inner flex no-wrap no-column">
                                                    <i class="ion-ios-star safron"></i>
                                                </div> <!-- end .posted-job-cell-inner -->
                                            </div> <!-- end .posted-job-candidates-cell -->

                                            <div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
                                                <i class="ion-ios-compose-outline edit-icon"></i>
                                                <i class="ion-ios-trash-outline trash-icon"></i>
                                                <i class="ion-ios-more-outline options-icon"></i>
                                            </div> <!-- end .posted-job-edit-cell -->
                                        </div> <!-- end .posted-job -->

                                        <div class="divider"></div>

                                    </div> <!-- end .posted-jobs-wrapper -->
                                </div> <!-- end .posted-jobs-list-wrapper -->

                                <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
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
                            </div> <!-- end #manage-applications-tab -->

                            <div id="notifications-employer" class="tab-pane fade in">
                                <h3 class="tab-pane-title">Your notifications</h3>
                                <div class="notifications-list-wrapper">

                                    <div class="notification flex items-center no-column no-wrap">
                                        <div class="notification-company-logo">
                                            <img src="static/zp/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .notification-company-logo -->
                                        <div class="notification-text">
                                            <p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>has expired.</p>
                                            <p class="ultra-light">3 hours ago</p>
                                        </div> <!-- end .notification-text -->
                                    </div> <!-- end .notification -->

                                    <div class="divider"></div>

                                    <div class="notification highlighted flex items-center no-column no-wrap">
                                        <div class="notification-company-logo">
                                            <img src="static/zp/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .notification-company-logo -->
                                        <div class="notification-text">
                                            <p>Banana Inc. posted a new job.<a href="#0">Check it out now!</a></p>
                                            <p class="ultra-light">4 hours ago</p>
                                        </div> <!-- end .notification-text -->
                                    </div> <!-- end .notification -->

                                    <div class="divider"></div>

                                    <div class="notification flex items-center no-column no-wrap">
                                        <div class="notification-company-logo">
                                            <img src="static/zp/images/company-logo13.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .notification-company-logo -->
                                        <div class="notification-text">
                                            <p>Your bookmarked job “Web designer needed” from<span class="company-name">Bull Creative Agency.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
                                            <p class="ultra-light">5 hours ago</p>
                                        </div> <!-- end .notification-text -->
                                    </div> <!-- end .notification -->

                                    <div class="divider"></div>

                                    <div class="notification flex items-center no-column no-wrap">
                                        <div class="notification-company-logo">
                                            <img src="static/zp/images/company-logo14.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .notification-company-logo -->
                                        <div class="notification-text">
                                            <p>Your bookmarked job “We’re looking for a designer” from<span class="company-name">Cat Studio</span>has expired.</p>
                                            <p class="ultra-light">6 hours ago</p>
                                        </div> <!-- end .notification-text -->
                                    </div> <!-- end .notification -->

                                    <div class="divider"></div>

                                    <div class="notification highlighted flex items-center no-column no-wrap">
                                        <div class="notification-company-logo">
                                            <img src="static/zp/images/company-logo07.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .notification-company-logo -->
                                        <div class="notification-text">
                                            <p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
                                            <p class="ultra-light">1 day ago</p>
                                        </div> <!-- end .notification-text -->
                                    </div> <!-- end .notification -->

                                    <div class="divider"></div>

                                    <div class="notification flex items-center no-column no-wrap">
                                        <div class="notification-company-logo">
                                            <img src="static/zp/images/company-logo12.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .notification-company-logo -->
                                        <div class="notification-text">
                                            <p><span class="company-name">Prymb Creative Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
                                            <p class="ultra-light">2 hours ago</p>
                                        </div> <!-- end .notification-text -->
                                    </div> <!-- end .notification -->

                                    <div class="divider"></div>

                                    <div class="notification flex items-center no-column no-wrap">
                                        <div class="notification-company-logo">
                                            <img src="static/zp/images/company-logo08.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .notification-company-logo -->
                                        <div class="notification-text">
                                            <p><span class="company-name">Elephant Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
                                            <p class="ultra-light">2 hours ago</p>
                                        </div> <!-- end .notification-text -->
                                    </div> <!-- end .notification -->

                                    <div class="divider"></div>

                                    <div class="notification flex items-center no-column no-wrap">
                                        <div class="notification-company-logo">
                                            <img src="static/zp/images/company-logo11.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .notification-company-logo -->
                                        <div class="notification-text">
                                            <p><span class="company-name">Evotweet</span>posted a new job.<a href="#0">Check it out now!</a></p>
                                            <p class="ultra-light">2 hours ago</p>
                                        </div> <!-- end .notification-text -->
                                    </div> <!-- end .notification -->

                                    <div class="divider"></div>

                                    <div class="notification flex items-center no-column no-wrap">
                                        <div class="notification-company-logo">
                                            <img src="static/zp/images/company-logo14.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .notification-company-logo -->
                                        <div class="notification-text">
                                            <p>Your bookmarked job “We're looking for a designer'” from<span class="company-name">Cat studio</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
                                            <p class="ultra-light">2 hours ago</p>
                                        </div> <!-- end .notification-text -->
                                    </div> <!-- end .notification -->

                                    <div class="divider"></div>

                                    <div class="notification flex items-center no-column no-wrap">
                                        <div class="notification-company-logo">
                                            <img src="static/zp/images/company-logo15.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .notification-company-logo -->
                                        <div class="notification-text">
                                            <p><span class="company-name">Audiotorium</span>posted a new job.<a href="#0">Check it out now!</a></p>
                                            <p class="ultra-light">2 hours ago</p>
                                        </div> <!-- end .notification-text -->
                                    </div> <!-- end .notification -->

                                    <div class="divider"></div>

                                </div> <!-- end .notifications-list-wrapper -->
                                <div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
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
                            </div> <!-- end #notifications-tab -->

                            <div id="profile" class="tab-pane fade in active">
                                <div class="profile-badge"><h6>资料</h6></div>
                                <div class="profile-wrapper">

                                    <div class="profile-info profile-section flex no-column no-wrap">
                                        <div class="profile-picture">
                                            <img src="static/zp/images/company-logo-jumbo01.jpg" alt="company-logo" class="img-responsive">
                                        </div> <!-- end .user-picture -->
                                        <div class="profile-meta">
                                            <h4 class="dark">{{$admin->login_name}}</h4>
                                            <p>@if($admin->job_status) 已入职 @else 未入职 @endif</p>
                                            <div class="profile-contact flex items-center no-wrap no-column">
                                                <h6 class="contact-phone">{{$admin->ipone}}</h6>
                                                <h6 class="contact-email">{{$admin->email}}</h6>
                                            </div> <!-- end .profile-contact -->
{{--                                            <ul class="list-unstyled social-icons flex no-column">--}}
{{--                                                <li><a href="#0"><i class="ion-social-twitter"></i></a></li>--}}
{{--                                                <li><a href="#0"><i class="ion-social-facebook"></i></a></li>--}}
{{--                                                <li><a href="#0"><i class="ion-social-instagram"></i></a></li>--}}
{{--                                            </ul> --}}
                                            <!-- end .social-icons -->
                                        </div> <!-- end .profile-meta -->
                                    </div> <!-- end .profile-info -->

                                    <div class="divider"></div>

                                    <div class="profile-about profile-section">
                                        <h3 class="dark profile-title">关于我<span><i class="ion-edit"></i></span></h3>
                                        <p>Nullam semper erat arcu, ac tincidunt sem venenatis vel. Curabitur at dolor ac ligula fermentum euismod ac ullamcorper nulla. Integer blandit ultricies aliquam. Pellentesque quis dui varius, dapibus velit id, iaculis ipsum. Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien, tempus sit amet rutrum eu, commodo eu lacus. Morbi in ligula nibh.<br><br>Donec eget nibh non nibh varius varius a vitae dolor. Ut ornare mollis lacus, non fringilla magna egestas mattis. Sed iaculis tortor magna, at tincidunt mi imperdiet in. Cras semper massa blandit quam varius, tincidunt imperdiet tellus accumsan. Vestibulum sagittis justo leo, bibendum ullamcorper arcu bibendum vitae. Integer convallis neque imperdiet orci consequat consequat.<br><br>Phasellus at feugiat diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.
                                        </p>
                                    </div> <!-- end .profile-about -->

                                    <div class="divider"></div>


                                </div> <!-- end .profile-wrapper -->
                            </div> <!-- end #profile-tab -->

                            <div id="change-password-employer" class="tab-pane fade in">
                                <div class="password-form-wrapper">
                                    <h3 class="dark">Change Password</h3>
                                    <form class="password-form">
                                        <div class="form-group">
                                            <label for="InputEmail1">Old password<sup>*</sup></label>
                                            <input type="email" class="form-control" id="InputEmail1" placeholder>
                                        </div>

                                        <div class="form-group">
                                            <label for="InputPassword1">New Password<sup>*</sup></label>
                                            <input type="password" class="form-control" id="InputPassword1" placeholder>
                                        </div>

                                        <div class="form-group">
                                            <label for="InputPassword1">Confirm New Password<sup>*</sup></label>
                                            <input type="password" class="form-control" id="InputPassword1" placeholder>
                                        </div>
                                    </form> <!-- end .password-form -->
                                    <div class="password-button-wrapper">
                                        <button type="submit" class="button">Save change</button>
                                    </div> <!-- end .password-button-wrapper -->
                                </div> <!-- end .password-form-wrapper -->
                            </div> <!-- end #change-password-tab -->

                        </div> <!-- end .employer-dashboard -->
                    </div> <!-- end .right-side-content -->

                </div> <!-- end .employer-dashboard-wrapper -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

@endsection

@section('footer')
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

@endsection

