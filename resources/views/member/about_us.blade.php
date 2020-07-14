@extends('member.layouts.header2')
@section('content')
<!-- Login/Signup Popup -->
<div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent" id="login-signup-popup" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm login-signup-modal">
        <div class="modal-content">
            <div class="popup-tabs">
                <ul class="nav nav-tabs" id="myTab">
                    <li class><a data-toggle="tab" href="#login">login</a></li>
                    <li class="active"><a data-toggle="tab" href="#register">Register</a></li>
                </ul>
            </div> <!-- end .popup-tabs -->
            <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active in" id="login">
                        <form class="login-form">

                            <div class="form-group">
                                <label for="InputEmail1">Your Email *</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label for="InputPassword1">Password *</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                            </div>

                            <div class="checkbox flex space-between">
                                <div>
                                    <input id="sigin-checkbox" type="checkbox">
                                    <label for="sigin-checkbox">Remember me</label>
                                </div>
                                <a href="#0">Lost password?</a>
                            </div> <!-- end .checkbox -->

                            <button type="button" class="button" data-dismiss="modal">Login</button>

                            <p class="text-center divider-text small"><span>or login using</span></p>

                            <div class="social-buttons">
                                <ul class="list-unstyled flex space-between">
                                    <li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                                    <li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                                    <li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div> <!-- end .social-buttons -->

                        </form> <!-- end .login-form -->
                    </div> <!-- end login-tab-content -->

                    <div class="tab-pane fade" id="register">
                        <form class="signup-form">
                            <div class="form-group">
                                <label for="InputEmail1">Your Email *</label>
                                <input type="email" class="form-control" id="InputEmail2" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label for="InputPassword1">Password *</label>
                                <input type="password" class="form-control" id="InputPassword2" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="InputPassword2">Confirm Password *</label>
                                <input type="password" class="form-control" id="InputPassword3" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="select1">Register as:</label>
                                <div class="select-wrapper">
                                    <select class="form-control" id="select1">
                                        <option>Candidate</option>
                                        <option>Company</option>
                                    </select>
                                </div> <!-- end .select-wrapper -->
                            </div>

                            <div class="checkbox">
                                <input id="signup-checkbox" type="checkbox">
                                <label for="signup-checkbox">I agree with the Terms of Use</label>
                            </div> <!-- end .checkbox -->

                            <button type="button" class="button" data-dismiss="modal">Sign Up</button>

                            <p class="text-center divider-text small"><span>or login using</span></p>

                            <div class="social-buttons">
                                <ul class="list-unstyled flex space-between">
                                    <li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                                    <li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                                    <li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div> <!-- end .social-buttons -->

                        </form> <!-- end .signup-form -->
                    </div> <!-- end signup-tab-content -->
                </div> <!-- end .mytabcontent -->
            </div> <!-- end .modal-body -->
        </div> <!-- end .modal-content -->
    </div> <!-- end .modal-dialog -->
</div> <!-- end .modal -->

<!-- Page Title Section -->
<div class="section page-title text-center" style="background-image: url(&#x27;static/zp/images/background04.jpg&#x27;);">
    <div class="inner">
        <h1 class="light">关于我们</h1>
        <h3 class="light">关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们</h3>
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Tabs Section -->
<div class="section tabs-section about-page">
    <ul class="nav nav-tabs jobpress-dynamic-tabs flex space-center items-center no-column">
        <li class="active"><a data-toggle="tab" href="#company"><i class="ion-ios-glasses-outline"></i>Company</a></li>
        <li><a data-toggle="tab" href="#how-it-works"><i class="ion-ios-cog-outline"></i>How it works</a></li>
        <li><a data-toggle="tab" href="#team"><i class="ion-ios-person-outline"></i>Team</a></li>
        <li><a href="help.html"><i class="ion-ios-help-empty"></i>Faq</a></li>
        <li><a href="contact-us-full-width.html"><i class="ion-ios-email-outline"></i>Contact Us</a></li>
    </ul> <!-- end .jobpress-dynamic-tabs -->

    <div class="tab-content jobpress-dynamic-tabs-content">

        <div id="company" class="tab-pane company-tab-content text-center fade in active">
            <div class="testimonial">
                <p><q>Donec at cursus sem. Duis condimentum posuere<br>purus, at <strong>venenatis tellus</strong> mollis. Vestibulum cursus<br>convallis venenatis. Sed ut blandit mauris. Proin pret-<br>ium consequat est, sit amet consectetur.</q></p>
            </div> <!-- end .testimonial -->
            <div class="core-values">
                <div class="core-values-inner">
                    <div class="container">
                        <div class="images">
                            <div class="images-inner flex space-between no-wrap items-center">
                                <div class="image-item">
                                    <img src="static/zp/images/company01.jpg" alt="company-office-images" class="img-responsive">
                                </div> <!-- end .image-item -->
                                <div class="spacer-xs-m"></div>
                                <div class="image-item">
                                    <img src="static/zp/images/company02.jpg" alt="company-office-images" class="img-responsive">
                                </div> <!-- end .image-item -->
                                <div class="spacer-xs-m"></div>
                                <div class="image-item">
                                    <img src="static/zp/images/company03.jpg" alt="company-office-images" class="img-responsive">
                                </div> <!-- end .image-item -->
                            </div> <!-- end .images-inner -->
                        </div> <!-- end .images -->
                    </div> <!-- end .container -->
                    <div class="values-text-content">
                        <div class="container">
                            <div class="values-text-content-inner flex space-around no-wrap items-center">
                                <div class="vision box">
                                    <div class="icon">
                                        <img src="static/zp/images/vision-icon.png" alt="vision-icon" class="img-responsive">
                                    </div> <!-- end .icon -->
                                    <h3 class="dark">Our Vision</h3>
                                    <p>Quisque id placerat leo, quis porta justo. Pellen tesque bibendum, sem eu aliquet eleifend, turpis mauris faucibus ligula, vel hendrerit.</p>
                                </div> <!-- end .vision -->
                                <div class="spacer-md-m"></div>
                                <div class="mission box">
                                    <div class="icon">
                                        <img src="static/zp/images/our-mission-icon.png" alt="our-mission-icon" class="img-responsive">
                                    </div> <!-- end .icon -->
                                    <h3 class="dark">Our Vision</h3>
                                    <p>Quisque id placerat leo, quis porta justo. Pellen tesque bibendum, sem eu aliquet eleifend, turpis mauris faucibus ligula, vel hendrerit.</p>
                                </div> <!-- end .vision -->
                                <div class="spacer-md-m"></div>
                                <div class="target box">
                                    <div class="icon">
                                        <img src="static/zp/images/our-target-icon.png" alt="our-target-icon" class="img-responsive">
                                    </div> <!-- end .icon -->
                                    <h3 class="dark">Our Vision</h3>
                                    <p>Quisque id placerat leo, quis porta justo. Pellen tesque bibendum, sem eu aliquet eleifend, turpis mauris faucibus ligula, vel hendrerit.</p>
                                </div> <!-- end .vision -->

                            </div> <!-- end .values-text-content-inner -->
                        </div> <!-- end .container -->

                    </div> <!-- end .values-text-content -->
                </div> <!-- end .core-values-inner -->
                <div class="background-text">
                    <h1>Core Values</h1>
                </div> <!-- end .background-text -->
            </div> <!-- end .core-values -->

            <div class="section team-members-section">
                <div class="inner">
                    <div class="container">
                        <h1 class="section-title text-center">Boards Of Leaders</h1>
                        <div class="team-members-inner-row flex space-between no-column items-center">
                            <div class="team-member">
                                <img src="static/zp/images/team-member01.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Albert Martin</h3>
                                    <h6 class="team-member-designation">Founder of Jobpress</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="static/zp/images/team-member02.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Kenneth Turner</h3>
                                    <h6 class="team-member-designation">Co-Founder of Jobpress</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="static/zp/images/team-member03.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Dorothy Cole</h3>
                                    <h6 class="team-member-designation">HR Manager</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="static/zp/images/team-member04.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Alan Schmidt</h3>
                                    <h6 class="team-member-designation">Product Lead</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                        </div> <!-- end .team-inner -->
                    </div> <!-- end .container -->
                </div> <!-- end .inner -->
            </div> <!-- end .team-memebers-section -->
        </div> <!-- end .company-tab-content -->

        <div id="how-it-works" class="tab-pane how-it-works-tab-content fade">
            <div class="section">
                <div class="inner">
                    <div class="container">
                        <h3 class="text-center">什么是推广</h3>
                        <p class="text-center">Your content goes here.　　在国内高校毕业后直接出国留学的学生，在国外学成后回国就业；
                            　　或出国前已办理解除公职手续的留学回国人员；
                            　　在国外取得硕士以上学位；
                            　　出国留学一年以上（参照护照出入境时间，累计境外学习逗留时间需要足360天）；
                            　　学业结束回国两年以内，用人单位需要按要求和流程将所有材料备齐交至留学生服务中心受理；
                            　　用人单位已经依法与留学回国人员建立劳动人事关系，签订一年期以上(含一年)聘用合同或劳动合同；用人单位和留学回国人员必须依法参加社会保险（养老、医疗、工伤、生育、失业等），缴纳社会保险费；
                            　　用人单位在留学生服务中心立过户，并且给留学生分配到相应的落户申请名额。

                            　　落户后创业可享科技园最高十万元的无偿资助</p>
                    </div> <!-- end .container -->
                </div> <!-- end .inner -->
            </div> <!-- end .section -->
        </div> <!-- end .how-it-works-tab-content -->

        <div id="team" class="tab-pane team-tab-content fade">
            <div class="section team-members-section">
                <div class="inner">
                    <div class="container">
                        <div class="team-members-inner-row flex space-between no-column items-center">
                            <div class="team-member">
                                <img src="static/zp/images/team-member01.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Albert Martin</h3>
                                    <h6 class="team-member-designation">Founder of Jobpress</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="static/zp/images/team-member02.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Kenneth Turner</h3>
                                    <h6 class="team-member-designation">Co-Founder of Jobpress</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="static/zp/images/team-member03.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Dorothy Cole</h3>
                                    <h6 class="team-member-designation">HR Manager</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="static/zp/images/team-member04.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Alan Schmidt</h3>
                                    <h6 class="team-member-designation">Product Lead</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                        </div> <!-- end .team-inner -->

                        <div class="spacer-sm"></div>

                        <div class="team-members-inner-row flex space-between no-column items-center">
                            <div class="team-member">
                                <img src="static/zp/images/team-member01.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Albert Martin</h3>
                                    <h6 class="team-member-designation">Founder of Jobpress</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="static/zp/images/team-member02.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Kenneth Turner</h3>
                                    <h6 class="team-member-designation">Co-Founder of Jobpress</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="static/zp/images/team-member03.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Dorothy Cole</h3>
                                    <h6 class="team-member-designation">HR Manager</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="static/zp/images/team-member04.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Alan Schmidt</h3>
                                    <h6 class="team-member-designation">Product Lead</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                        </div> <!-- end .team-inner -->

                        <div class="spacer-md"></div>

                        <ul class="jobpress-custom-pager list-unstyled flex no-column space-center items-center">
                            <li><a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a></li>
                            <li><a href="#0">1</a></li>
                            <li><a href="#0">2</a></li>
                            <li><a href="#0">3</a></li>
                            <li><a href="#0">4</a></li>
                            <li><a href="#0">5</a></li>
                            <li><a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a></li>
                        </ul>

                    </div> <!-- end .container -->
                </div> <!-- end .inner -->
            </div> <!-- end .team-members-section -->

        </div> <!-- end .team-tab-content -->

        <div id="faq" class="tab-pane faq-tab-content fade">
            <h3>Menu 2</h3>
            <p>Some content in menu 2.</p>
        </div>

        <div id="contact-us" class="tab-pane contact-us-tab-content fade">
            <h3>Menu 2</h3>
            <p>Some content in menu 2.</p>
        </div>



    </div> <!-- end .tab-content -->
</div> <!-- end .section -->

<!-- Clients Section -->
<div class="section clients-section solid-blue-bg">
    <div class="inner">
        <div class="container">
            <div class="logo-grid">
                <div class="logo-grid-row flex space-between">
                    <div class="logo-item solid-blue flex">
                        <img src="static/zp/images/client-logo-light01.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item solid-blue flex">
                        <img src="static/zp/images/client-logo-light02.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item solid-blue flex">
                        <img src="static/zp/images/client-logo-light03.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item solid-blue flex">
                        <img src="static/zp/images/client-logo-light04.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item solid-blue flex">
                        <img src="static/zp/images/client-logo-light05.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item solid-blue flex">
                        <img src="static/zp/images/client-logo-light06.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                </div> <!-- end .logo-grid-row -->
            </div> <!-- end .logo-grid -->
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
                <form class="form-inline subscribe-form flex no-column no-wrap items-center" role="subscribe">
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
