<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // header("Location:user_dashboard.php");
    $user_id = '';
    if (!empty($_SESSION['User']) && !empty($_SESSION['user_id'])) {
        $user_name = $_SESSION['User'];
        // $user_id = $_SESSION['user_id'];
    }
}
require_once 'basicTemplates/header.php';
?>

<body class="host_version">
    <!-- LOADER -->
    <!-- <div id="preloader">
		<div class="loading">
			<div class="finger finger-1">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-2">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-3">
				<div class="finger-item">
				  <span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-4">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="last-finger">
				<div class="last-finger-item"><i></i></div>
			</div>
		</div>
	</div> -->
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logos/logo-hosting.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!-- <li><a href="domain.html">Domain</a></li> -->
                        <li><a href="hosting.html">Hosting</a></li>
                        <li><a class="" href="index.html">Server</a></li>
                        <li><a href="features.html">VPS </a></li>
                        <li><a href="pricing.html">Email</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <!-- <li><a href="testimonials.html">Free Trial</a></li> -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if (!empty($user_name)) {
                            echo '<li><a class="btn-light btn-radius btn-brd log" href="user_dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>&nbsp;' . $user_name . '</a></li>';
                        } else {
                        ?>
                            <li><a class="btn-light btn-radius btn-brd log" href="customer_login.php"><i class="flaticon-padlock"></i> Login</a></li>
                            <li><a class=""><i class=""></i> </a></li>
                            <li><a class="btn-light btn-radius btn-brd log" href="customer_register.php"><i class="flaticon-padlock"></i> Register</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div id="home" class="first-section" style="background-image:url('uploads/slider-01.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="images/logos/logo-hosting.png" alt="image">
                                    <h2 data-animation="animated zoomInRight">Best <strong>Hosting</strong> Company</h2>
                                    <p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p>
                                    <a data-scroll href="#pricing" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">View Plans</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a data-scroll href="#overviews" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInRight">All Features</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <div class="item">
                <div id="home" class="first-section" style="background-image:url('uploads/slider-02.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="images/logos/logo-hosting.png" alt="image">
                                    <h2 data-animation="animated zoomInRight">Find the right <strong>Hosting</strong></h2>
                                    <p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p>
                                    <a data-scroll href="#pricing" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">View Plans</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a data-scroll href="#overviews" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInRight">All Features</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <div class="item">
                <div id="home" class="first-section" style="background-image:url('uploads/slider-03.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="images/logos/logo-hosting.png" alt="image">
                                    <h2 data-animation="animated zoomInRight">Best <strong>VPS Servers</strong> Company</h2>
                                    <p class="lead" data-animation="animated fadeInLeft">1 IP included with each server (more on request to justification)
                                        Your Choice of any OS (CentOS, Windows, Debian, Fedora)
                                        FREE Reboots</p>
                                    <a data-scroll href="#pricing" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">View Plans</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a data-scroll href="#overviews" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInRight">All Features</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>About</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>2017 BEST WEB HOSTING COMPANY</h4>
                        <h2>Awards Winner Support Center</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p>

                        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/about_02.jpg" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis">

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-server global-radius effect-1 alignleft"></i>
                        <h3>Unlimited Bandwidth</h3>
                        <p>Our Landigoo responsive site template elements 100% compatible with all mobile devices and modern browsers! <small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-cloud-computing-1 global-radius effect-1 alignleft"></i>
                        <h3>Unlimited Traffic</h3>
                        <p>When you need anything about for Landigoo template, just drop an email or leave a feedback from TF!<small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-world-wide-web global-radius effect-1 alignleft"></i>
                        <h3>1 Domain Free</h3>
                        <p>We offer pixel perfect icons, graphic sources for high-resolution devices! Landigoo compatible retina display! <small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr3">

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <i class="flaticon-cup global-radius effect-1 alignleft"></i>
                        <h3>Awards Winner Support</h3>
                        <p>Our Landigoo responsive site template elements 100% compatible with all mobile devices and modern browsers! <small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <i class="flaticon-cer-file-format global-radius effect-1 alignleft"></i>
                        <h3>Free SSL Certifica</h3>
                        <p>We offer pixel perfect icons, graphic sources for high-resolution devices! Landigoo compatible retina display! <small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="flaticon-locked global-radius effect-1 alignleft"></i>
                        <h3>High Security</h3>
                        <p>When you need anything about for Landigoo template, just drop an email or leave a feedback from TF!<small class="readmore"><a href="#">Read more</a></small></p>
                    </div><!-- end icon-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="domain" class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('uploads/parallax_11.jpg');">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-5 col-sm-12">
                    <div class="customwidget text-left">
                        <h1>Find Your Domain</h1>
                        <p>With our awesome domain name search form, you can search any domain names with tons of extensions.</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-check"></i> 20k Domains Sold in 2017</li>
                            <li><i class="fa fa-check"></i> 4k Website Created</li>
                        </ul>
                        <!-- end list -->
                        <a href="#hosting" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">Hosting Packages</a>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-md-7">
                    <form class="checkdomain form-inline">
                        <div class="checkdomain-wrapper">
                            <div class="form-group">
                                <label class="sr-only" for="domainnamehere">Domain name</label>
                                <input type="text" class="form-control" id="domainnamehere" placeholder="Enter domain name here..">
                                <button type="submit" class="btn btn-primary grd1"><i class="fa fa-search"></i></button>
                            </div>
                            <hr>
                            <div class="clearfix"></div>
                            <div class="checkbox checkbox-warning">
                                <input id="domaincom" type="checkbox" class="styled" checked>
                                <label for="domaincom">.com</label>
                            </div>
                            <div class="checkbox checkbox-warning">
                                <input id="domainnet" type="checkbox" class="styled" checked>
                                <label for="domainnet">.net</label>
                            </div>
                            <div class="checkbox checkbox-warning">
                                <input id="domainorg" type="checkbox" class="styled">
                                <label for="domainorg">.org</label>
                            </div>
                            <div class="checkbox checkbox-warning">
                                <input id="domaintv" type="checkbox" class="styled">
                                <label for="domaintv">.tv</label>
                            </div>
                            <div class="checkbox checkbox-warning">
                                <input id="domaininfo" type="checkbox" class="styled">
                                <label for="domaininfo">.info</label>
                            </div>
                        </div><!-- end checkdomain-wrapper -->
                    </form>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="hosting" class="section wb" style="background: rgb(248, 248, 248)">
        <div class="container">
            <div class="section-title text-center">
                <h3>Hosting Packages</h3>
                <p class="lead">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, true generator<br> on the Internet. It uses a dictionary of over..</p>
            </div><!-- end title -->

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget clearfix">
                        <img src="uploads/hosting_01.jpg" alt="" class="img-responsive">
                        <div class="widget-title">
                            <h3>Shared Hosting</h3>
                            <small>Starting from $40/month</small>
                        </div>
                        <!-- end title -->
                        <p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, true dont miss this one!</p>

                        <hr>

                        <div class="footer-social">
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="Free Page Builder"><i class="flaticon-coding"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="WordPress Support"><i class="flaticon-wordpress-logo"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="1 Domain Free"><i class="flaticon-world-wide-web"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="50MB Bandwdith"><i class="flaticon-cloud-computing-1"></i></a>
                        </div>

                        <hr>

                        <a href="#pricing" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">Order Now</a>

                    </div>
                    <!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="widget clearfix">
                        <img src="uploads/hosting_02.jpg" alt="" class="img-responsive">
                        <div class="widget-title">
                            <h3>Reseller Hosting</h3>
                            <small>Starting from $80/month</small>
                        </div>
                        <!-- end title -->
                        <p>Internet lorem Ipsum generators on the tend to repeat predefined chunks as necessary, finally its release!</p>

                        <hr>

                        <div class="footer-social">
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="Free Page Builder"><i class="flaticon-coding"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="WordPress Support"><i class="flaticon-wordpress-logo"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="1 Domain Free"><i class="flaticon-world-wide-web"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="150MB Bandwdith"><i class="flaticon-cloud-computing-1"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="Money Back Guarentee"><i class="flaticon-money"></i></a>
                        </div>
                        <hr>

                        <a href="#pricing" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">Order Now</a>

                    </div>
                    <!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="widget clearfix">
                        <img src="uploads/hosting_03.jpg" alt="" class="img-responsive">
                        <div class="widget-title">
                            <h3>Dedicated Server</h3>
                            <small>Starting from $120/month</small>
                        </div>
                        <!-- end title -->
                        <p>Predefined internet lorem Ipsum generators on the tend to repeat chunks as necessary, true and more..</p>

                        <hr>

                        <div class="footer-social">
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="Free Page Builder"><i class="flaticon-coding"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="WordPress Support"><i class="flaticon-wordpress-logo"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="1 Domain Free"><i class="flaticon-world-wide-web"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="Unlimited Bandwdith"><i class="flaticon-cloud-computing-1"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="Money Back Guarentee"><i class="flaticon-money"></i></a>
                            <a href="#" class="btn global-radius" data-toggle="tooltip" data-placement="top" title="24/7 Support"><i class="flaticon-lifesaver-security-sportive-tool"></i></a>
                        </div>
                        <hr>

                        <a href="#pricing" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">Order Now</a>

                    </div>
                    <!--widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section cl">
        <div class="container">
            <div class="row text-left stat-wrap">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-hosting"></i></span>
                    <p class="stat_count">12000</p>
                    <h3>Hosted Sites</h3>
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-domain-registration"></i></span>
                    <p class="stat_count">24000</p>
                    <h3>Sold Domains</h3>
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-mail"></i></span>
                    <p class="stat_count">5000</p>
                    <h3>Email Accounts</h3>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Ready to get started?</h3>
                <p class="lead">Get the red carpet treatment <strong>just $39 per month!</strong> It is estimated that 3.5 million established by personal blogs.<br> From each other, we share paid WordPress themes WP Service...</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li class="active"><a href="#tab1" data-toggle="pill">Monthly Subscription</a></li>
                            <li><a href="#tab2" data-toggle="pill">Yearly Subscription</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Shared Hosting</h2>
                                            <h3>$85/month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#contact" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>WordPress Hosting</h2>
                                            <h3>$59/year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>This is a perfect choice for small businesses and startups.</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#contact" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Reseller Hosting</h2>
                                            <h3>$85/one-time</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#contact" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->

                        <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Dedicated Server</h2>
                                            <h3>$85/month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#contact" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>VPS Server</h2>
                                            <h3>$59/month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>This is a perfect choice for small businesses and startups.</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#contact" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about Landigoo website template!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="support" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Need Help? Sure we are Online!</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="login_email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Service</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="12">Select Package</option>
                                        <option value="Web Design">Web Hosting</option>
                                        <option value="Web Development">Shared Hosting</option>
                                        <option value="Graphic Design">Reseller Hosting</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Country</label>
                                    <select name="select_price" id="select_price" class="selectpicker form-control" data-style="btn-white">
                                        <option value="India">India</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Holland">Holland</option>
                                        <option value="Germany">Germany</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <?php
    require_once 'basicTemplates/footer.php';
    ?>