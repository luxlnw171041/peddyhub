<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PeddyHub</title>
    <!-- Stylesheets -->
    <link href="{{ asset('peddyhub/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('peddyhub/plugins/revolution/css/settings.css') }}" rel="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ asset('peddyhub/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('peddyhub/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{ asset('peddyhub/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('peddyhub/css/responsive.css') }}" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="{{ asset('peddyhub/css/color-switcher-design.css') }}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{ asset('peddyhub/css/color-themes/default-theme.css') }}" rel="stylesheet">
    <!--Favicon-->
    <link href="{{ asset('peddyhub/images/favicon.png') }}" type="image/x-icon" rel="shortcut icon">
    <link href="{{ asset('peddyhub/images/favicon.png') }}" type="image/x-icon" rel="icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Main Header / Header Style Two-->
        <header class="main-header header-style-two">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="header-inner-container clearfix">
                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                    </div>
                    <div class="pull-right upper-right clearfix">
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                        data-bs-target=".navbar-collapse">
                                        <span><i class="fa fa-bars"></i></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 01</a></li>
                                                <li><a href="index-2.html">Home 02</a></li>
                                                <li><a href="index-3.html">Home 03</a></li>
                                                <li><a href="index-4.html">Home 04</a></li>
                                                <li><a href="index-5.html">Home 05</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header 01</a></li>
                                                        <li><a href="index-2.html">Header 02</a></li>
                                                        <li><a href="index-3.html">Header 03</a></li>
                                                        <li><a href="index-4.html">Header 04</a></li>
                                                        <li><a href="index-5.html">Header 05</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="about.html">About</a>
                                            <ul>
                                                <li><a href="about-2.html">About 2</a></li>
                                                <li><a href="about-pet.html">About 3</a></li>
                                                <li><a href="about-pet2.html">About 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="services.html">Services</a>
                                            <ul>
                                                <li><a href="pet-service.html">Services 01</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="pets.html">Pets</a>
                                            <ul>
                                                <li><a href="buy-pet.html">Pets 01</a></li>
                                                <li><a href="pet-detail.html">Pet Detail</a></li>
                                                <li><a href="pet-profile.html">Pet Detail 02</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li class="dropdown"><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="pet-shop.html">Shop 01</a></li>
                                                <li><a href="product-details.html">Product Detail</a></li>
                                                <li><a href="pet-product.html">Product Detail 01</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="pet-cart.html">Cart 01</a></li>
                                                <li><a href="checkout.html">Check Out</a></li>
                                                <li><a href="pet-checkout.html">Check Out 01</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li class="dropdown"><a href="#">Shop</a>
                                                    <ul>
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="pet-shop.html">Shop 01</a></li>
                                                        <li><a href="product-details.html">Product Detail</a></li>
                                                        <li><a href="pet-product.html">Product Detail 01</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="pet-cart.html">Cart 01</a></li>
                                                        <li><a href="checkout.html">Check Out</a></li>
                                                        <li><a href="pet-checkout.html">Check Out 01</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="#">Special Pages</a>
                                                    <ul>
                                                        <li><a href="jobs-list.html">Jobs</a></li>
                                                        <li><a href="pet-job.html">Jobs 01</a></li>
                                                        <li><a href="job-details.html">Job Detail</a></li>
                                                        <li><a href="job-profile.html">Job Detail 01</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="pet-login.html">Login 01</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="pet-register.html">Register 01</a></li>
                                                        <li><a href="team.html">Team</a></li>
                                                        <li><a href="pet-team.html">Team 01</a></li>
                                                        <li><a href="team-detail.html">Team Detail</a></li>
                                                        <li><a href="team-profile.html">Team Detail 01</a></li>
                                                        <li><a href="events.html">Events</a></li>
                                                        <li><a href="pet-event.html">Events 01</a></li>
                                                        <li><a href="event-single.html">Event Detail</a></li>
                                                        <li><a href="event-profile.html">Event Detail 01</a></li>
                                                        <li><a href="calculator.html">Calories Calculator</a></li>
                                                        <li><a href="pet-calorie.html">Calories Calculator 01</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="#">Blog</a>
                                                    <ul>
                                                        <li><a href="blog.html">Our Blog</a></li>
                                                        <li><a href="blog2.html">Blog 02</a></li>
                                                        <li><a href="pet-blog.html">Blog 03</a></li>
                                                        <li><a href="pet-blog2.html">Blog 04</a></li>
                                                        <li><a href="blog-leftsidebar.html">Blog Right Sidebar</a></li>
                                                        <li><a href="pet-blog-right.html">Blog Right Sidebar 01</a></li>
                                                        <li><a href="blog-single.html">Blog Single</a></li>
                                                        <li><a href="blog-profile.html">Blog Single 01</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="gallery-2.html">Gallery 02</a></li>
                                                <li><a href="pet-gallery.html">Gallery 03</a></li>
                                                <li><a href="pet-gallery2.html">Gallery 04</a></li>
                                                <li><a href="404.html">Error</a></li>
                                                <li><a href="pet-error.html">Error 01</a></li>
                                                <li><a href="commingsoon.html">Comming Soon</a></li>
                                                <li><a href="pet-coming.html">Comming Soon 01</a></li>
                                                <li><a href="donation.html">Donation</a></li>
                                                <li><a href="pet-donate.html">Donation 01</a></li>
                                                <li><a href="appointment.html">Appointment</a></li>
                                                <li><a href="pet-appoint.html">Appointment 01</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li class="dropdown"><a href="#">Special Pages</a>
                                            <ul>
                                                <li><a href="jobs-list.html">Jobs</a></li>
                                                <li><a href="pet-job.html">Jobs 01</a></li>
                                                <li><a href="job-details.html">Job Detail</a></li>
                                                <li><a href="job-profile.html">Job Detail 01</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="pet-login.html">Login 01</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="pet-register.html">Register 01</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="pet-team.html">Team 01</a></li>
                                                <li><a href="team-detail.html">Team Detail</a></li>
                                                <li><a href="team-profile.html">Team Detail 01</a></li>
                                                <li><a href="events.html">Events</a></li>
                                                <li><a href="pet-event.html">Events 01</a></li>
                                                <li><a href="event-single.html">Event Detail</a></li>
                                                <li><a href="event-profile.html">Event Detail 01</a></li>
                                                <li><a href="calculator.html">Calories Calculator</a></li>
                                                <li><a href="pet-calorie.html">Calories Calculator 01</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog2.html">Blog 02</a></li>
                                                <li><a href="pet-blog.html">Blog 03</a></li>
                                                <li><a href="pet-blog2.html">Blog 04</a></li>
                                                <li><a href="blog-leftsidebar.html">Blog Right Sidebar</a></li>
                                                <li><a href="pet-blog-right.html">Blog Right Sidebar 01</a></li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                                <li><a href="blog-profile.html">Blog Single 01</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="dropdown"><a href="contact.html">Contact</a>
                                            <ul>
                                                <li><a href="contact2.html">Contact 02</a></li>
                                                <li><a href="pet-contact.html">Contact 03</a></li>
                                                <li><a href="pet-contact2.html">Contact 04</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                            <div class="outer-box">
                                <!--Search Box-->
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn" type="button" id="dropdownMenu3"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="fa fa-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel menu-search"
                                            aria-labelledby="dropdownMenu3">
                                            <li class="panel-outer">
                                                <div class="form-container">
                                                    <form method="post" action="blog.html">
                                                        <div class="form-group">
                                                            <input type="search" name="field-name" value=""
                                                                placeholder="Search Here" required>
                                                            <button type="submit" class="search-btn"><span
                                                                    class="fa fa-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="social-links-box">
                                    <ul class="social-icon-three">
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-youtube-play"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    </ul>
                                </div>
                                <div class="btn-box">
                                    <a href="#" class="theme-btn btn-style-three"><span
                                            class="icon fa fa-phone-square"></span> 234 567 8900</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt=""
                                title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                    data-bs-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                            <li><a href="index-4.html">Home 04</a></li>
                                            <li><a href="index-5.html">Home 05</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header 01</a></li>
                                                    <li><a href="index-2.html">Header 02</a></li>
                                                    <li><a href="index-3.html">Header 03</a></li>
                                                    <li><a href="index-4.html">Header 04</a></li>
                                                    <li><a href="index-5.html">Header 05</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="about.html">About</a>
                                        <ul>
                                            <li><a href="about-2.html">About 2</a></li>
                                            <li><a href="about-pet.html">About 3</a></li>
                                            <li><a href="about-pet2.html">About 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="services.html">Services</a>
                                        <ul>
                                            <li><a href="pet-service.html">Services 01</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="pets.html">Pets</a>
                                        <ul>
                                            <li><a href="buy-pet.html">Pets 01</a></li>
                                            <li><a href="pet-detail.html">Pet Detail</a></li>
                                            <li><a href="pet-profile.html">Pet Detail 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="pet-shop.html">Shop 01</a></li>
                                            <li><a href="product-details.html">Product Detail</a></li>
                                            <li><a href="pet-product.html">Product Detail 01</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="pet-cart.html">Cart 01</a></li>
                                            <li><a href="checkout.html">Check Out</a></li>
                                            <li><a href="pet-checkout.html">Check Out 01</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="gallery-2.html">Gallery 02</a></li>
                                            <li><a href="pet-gallery.html">Gallery 03</a></li>
                                            <li><a href="pet-gallery2.html">Gallery 04</a></li>
                                            <li><a href="404.html">Error</a></li>
                                            <li><a href="pet-error.html">Error 01</a></li>
                                            <li><a href="commingsoon.html">Comming Soon</a></li>
                                            <li><a href="pet-coming.html">Comming Soon 01</a></li>
                                            <li><a href="donation.html">Donation</a></li>
                                            <li><a href="pet-donate.html">Donation 01</a></li>
                                            <li><a href="appointment.html">Appointment</a></li>
                                            <li><a href="pet-appoint.html">Appointment 01</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Special Pages</a>
                                        <ul>
                                            <li><a href="jobs-list.html">Jobs</a></li>
                                            <li><a href="pet-job.html">Jobs 01</a></li>
                                            <li><a href="job-details.html">Job Detail</a></li>
                                            <li><a href="job-profile.html">Job Detail 01</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="pet-login.html">Login 01</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="pet-register.html">Register 01</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="pet-team.html">Team 01</a></li>
                                            <li><a href="team-detail.html">Team Detail</a></li>
                                            <li><a href="team-profile.html">Team Detail 01</a></li>
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="pet-event.html">Events 01</a></li>
                                            <li><a href="event-single.html">Event Detail</a></li>
                                            <li><a href="event-profile.html">Event Detail 01</a></li>
                                            <li><a href="calculator.html">Calories Calculator</a></li>
                                            <li><a href="pet-calorie.html">Calories Calculator 01</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog2.html">Blog 02</a></li>
                                            <li><a href="pet-blog.html">Blog 03</a></li>
                                            <li><a href="pet-blog2.html">Blog 04</a></li>
                                            <li><a href="blog-leftsidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="pet-blog-right.html">Blog Right Sidebar 01</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                            <li><a href="blog-profile.html">Blog Single 01</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="contact.html">Contact</a>
                                        <ul>
                                            <li><a href="contact2.html">Contact 02</a></li>
                                            <li><a href="pet-contact.html">Contact 03</a></li>
                                            <li><a href="pet-contact2.html">Contact 04</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->
        </header>
        <!--End Main Header -->
        <!--Main Slider-->
        <section class="main-slider">
            <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
                <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                    <ul>
                        <li data-description="Slide Description" data-easein="default" data-easeout="default"
                            data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689"
                            data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-rotate="0" data-saveperformance="off" data-slotamount="default"
                            data-thumb="images/main-slider/image-3.jpg" data-title="Slide Title"
                            data-transition="parallaxvertical">
                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                                data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                                src="images/main-slider/image-3.jpg">
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['650','700','650','420']"
                                data-whitespace="normal" data-hoffset="['15','15','15','15']"
                                data-voffset="['-85','-100','-100','-85']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                                <h2 class="alternate">Highest Quality of <br> Care for Pets You’ll Love</h2>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['700','750','600','420']"
                                data-whitespace="normal" data-hoffset="['15','15','15','15']"
                                data-voffset="['40','35','20','10']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="text">Elit sed eiusmod tempor incididunt sed laboret dolore magna aliquat
                                    enim <br> veniam nostrud exercitation ullamco laboris nisi</div>
                            </div>
                            <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['550','550','550','420']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['130','130','130','110']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="btns-box">
                                    <a href="contact.html" class="theme-btn btn-style-six">Schedule Appointment</a>
                                </div>
                            </div>
                        </li>
                        <li data-description="Slide Description" data-easein="default" data-easeout="default"
                            data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687"
                            data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-rotate="0" data-saveperformance="off" data-slotamount="default"
                            data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title"
                            data-transition="parallaxvertical">
                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                                data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                                src="images/main-slider/image-1.jpg">
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['650','700','650','420']"
                                data-whitespace="normal" data-hoffset="['15','15','15','15']"
                                data-voffset="['-85','-100','-100','-85']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                                <h2 class="alternate">Highest Quality of <br> Care for Pets You’ll Love</h2>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['700','700','600','420']"
                                data-whitespace="normal" data-hoffset="['15','15','15','15']"
                                data-voffset="['40','35','20','10']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="text">Elit sed eiusmod tempor incididunt sed laboret dolore magna aliquat
                                    enim <br> veniam nostrud exercitation ullamco laboris nisi</div>
                            </div>
                            <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                                data-responsive_offset="on" data-type="text" data-height="none"
                                data-width="['550','550','550','420']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['130','130','130','110']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="btns-box">
                                    <a href="contact.html" class="theme-btn btn-style-six">Schedule Appointment</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Main Slider-->
        <!--Services Section Two-->
        <section class="services-section-two">
            <div class="auto-container">
                <!--Sec Title Two-->
                <div class="sec-title-two centered">
                    <div class="title-icon">
                        <img src="images/icons/title-icon.png" alt="" />
                    </div>
                    <h2>All Types of Grooming Services</h2>
                    <div class="text">For professional dog and cat grooming needs Fanatic clearly</div>
                </div>
                <!--End Sec Title Two-->
                <div class="row clearfix">
                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-dog-in-front-of-a-man"></span>
                            </div>
                            <h3><a href="#">Experienced Staff</a></h3>
                            <div class="text">Well gaudy hound hired set flailed much followed less this maternal well
                                unavoidable crudely aloof more save groomed.</div>
                        </div>
                    </div>
                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-man"></span>
                            </div>
                            <h3><a href="#">Top Class Facilities</a></h3>
                            <div class="text">Well gaudy hound hired set flailed much followed less this maternal well
                                unavoidable crudely aloof more save groomed.</div>
                        </div>
                    </div>
                    <!--Services Block Two-->
                    <div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-pets-hotel-house-sign-with-a-paw"></span>
                            </div>
                            <h3><a href="#">Easy Consultation</a></h3>
                            <div class="text">Well gaudy hound hired set flailed much followed less this maternal well
                                unavoidable crudely aloof more save groomed.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Services Section Two-->
        <!--Mission Section-->
        <section class="mission-section" style="background-image:url(images/background/pattern-1.png)">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Image Column-->
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="images/resource/image-3.jpg" alt="" />
                        </div>
                    </div>
                    <!--Image Column-->
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h2>Our Mission</h2>
                            <div class="text">Broadcast neglectful and poignantly well until and some listlessly amidst
                                suc cessful concentrically ably dachshund more far but forwardly echidna outside tiger
                                split thanks far vibrantly gosh hence pangolin however notwithstanding leapt untruthful
                                gauchely yikes komodo dully more.</div>
                            <ul class="list-style-one style-two">
                                <li>Abore et dolore magna aliqua ut enim veniam</li>
                                <li>Quis nostrud exercitation ullamco laboris nisi aliquip</li>
                                <li>Eiusmod tempor incididunt labore.</li>
                            </ul>
                            <div class="signature"><img src="images/resource/signature.png" alt="" /></div>
                            <div class="designation">Pawrex CEO</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Mission Section-->
        <!--Groming Section-->
        <section class="grooming-section">
            <div class="auto-container">
                <!--Sec Title Two-->
                <div class="sec-title-two centered">
                    <div class="title-icon">
                        <img src="images/icons/title-icon.png" alt="" />
                    </div>
                    <h2>Special Grooming For</h2>
                    <div class="text">For professional dog and cat grooming needs Fanatic clearly</div>
                </div>
                <div class="row clearfix">
                    <!--Groming Block-->
                    <div class="groming-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="big-icon">
                                <span class="icon flaticon-pawprint-1"></span>
                            </div>
                            <div class="icon-box">
                                <img src="images/icons/icon-1.png" alt="" />
                            </div>
                            <h3>Cats</h3>
                            <div class="text">GROOMING & spa</div>
                        </div>
                    </div>
                    <!--Groming Block-->
                    <div class="groming-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="big-icon">
                                <span class="icon flaticon-pawprint-1"></span>
                            </div>
                            <div class="icon-box">
                                <img src="images/icons/icon-2.png" alt="" />
                            </div>
                            <h3>Rabbits</h3>
                            <div class="text">GROOMING & spa</div>
                        </div>
                    </div>
                    <!--Groming Block-->
                    <div class="groming-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="big-icon">
                                <span class="icon flaticon-pawprint-1"></span>
                            </div>
                            <div class="icon-box">
                                <img src="images/icons/icon-3.png" alt="" />
                            </div>
                            <h3>Dogs</h3>
                            <div class="text">GROOMING & spa</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Groming Section-->
        <!--Services Section Three-->
        <section class="services-section-three" style="background-image:url(images/background/pattern-2.png)">
            <div class="auto-container">
                <!--Sec Title Two-->
                <div class="sec-title-two centered">
                    <div class="title-icon">
                        <img src="images/icons/title-icon.png" alt="" />
                    </div>
                    <h2>Our Services</h2>
                    <div class="text">For professional dog and cat grooming needs</div>
                </div>
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column pull-left col-md-4 col-sm-12">
                        <!--Services Block Three-->
                        <div class="services-block-three">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-pawprint-1"></span>
                                </div>
                                <h3><a href="services.html">Bath & Brush</a></h3>
                                <div class="text">On ordered demonstrably bucolically barring grizly caustic poetical
                                </div>
                                <a href="services.html" class="detail">More Details</a>
                            </div>
                        </div>
                        <!--Services Block Three-->
                        <div class="services-block-three">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-dog-bone"></span>
                                </div>
                                <h3><a href="services.html">Cleaning & Plucking,</a></h3>
                                <div class="text">On ordered demonstrably bucolically barring grizly caustic poetical
                                </div>
                                <a href="services.html" class="detail">More Details</a>
                            </div>
                        </div>
                        <!--Services Block Three-->
                        <div class="services-block-three">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-pawprint-1"></span>
                                </div>
                                <h3><a href="services.html">Trim & Groom</a></h3>
                                <div class="text">On ordered demonstrably bucolically barring grizly caustic poetical
                                </div>
                                <a href="services.html" class="detail">More Details</a>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column col-md-4 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="images/resource/dog.png" alt="" />
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column pull-right col-md-4 col-sm-12">
                        <!--Services Block Four-->
                        <div class="services-block-four">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-dog-bone"></span>
                                </div>
                                <h3><a href="services.html">Coat Handler</a></h3>
                                <div class="text">On ordered demonstrably bucolically barring grizly caustic poetical
                                </div>
                                <a href="services.html" class="detail">More Details</a>
                            </div>
                        </div>
                        <!--Services Block Four-->
                        <div class="services-block-four">
                            <div class="inner-box wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-pawprint-1"></span>
                                </div>
                                <h3><a href="services.html">Hair Styling</a></h3>
                                <div class="text">On ordered demonstrably bucolically barring grizly caustic poetical
                                </div>
                                <a href="services.html" class="detail">More Details</a>
                            </div>
                        </div>
                        <!--Services Block Four-->
                        <div class="services-block-four">
                            <div class="inner-box wow fadeInRight" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="icon flaticon-dog-bone"></span>
                                </div>
                                <h3><a href="services.html">Teeth Brushed</a></h3>
                                <div class="text">On ordered demonstrably bucolically barring grizly caustic poetical
                                </div>
                                <a href="services.html" class="detail">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Appointment Section-->
        <section class="appointment-section style-two" style="background-image:url(images/background/layer-2.png)">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title light centered">
                    <div class="separator">
                        <span class="icon flaticon-pawprint-1"></span>
                    </div>
                    <div class="title">Because We Really Care About Your Pets</div>
                    <h2>Book Your Appointment</h2>
                </div>
                <!--Default Form-->
                <div class="default-form">
                    <div class="form-box">
                        <form method="post" action="contact-form">
                            <div class="row clearfix">
                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <input type="text" name="name" value="" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" value="" placeholder="Phone #" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <span class="clock-icon"><span class="icon fa fa-calendar"></span></span>
                                    <input class="datepicker" type="text" name="date" value="" placeholder="Date & Time"
                                        required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <input type="text" name="category" value="" placeholder="Pet Category" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <input type="text" name="service" value="" placeholder="Service Type" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Your Comments..."></textarea>
                                </div>
                                <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn btn-style-two">Send request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Default Form-->
            </div>
        </section>
        <!--End Appointment Section-->
        <!--Gallery Section-->
        <section class="gallery-section">
            <div class="auto-container">
                <!--Sec Title Two-->
                <div class="sec-title-two centered">
                    <div class="title-icon">
                        <img src="images/icons/title-icon.png" alt="" />
                    </div>
                    <h2>Works Gallery</h2>
                    <div class="text">For professional dog and cat grooming needs</div>
                </div>
                <div class="row clearfix">
                    <!--Gallery Item-->
                    <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/1.jpg" data-fancybox="images" data-caption=""
                                                class="link"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery Item-->
                    <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/2.jpg" data-fancybox="images" data-caption=""
                                                class="link"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery Item-->
                    <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/3.jpg" data-fancybox="images" data-caption=""
                                                class="link"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery Item-->
                    <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/4.jpg" data-fancybox="images" data-caption=""
                                                class="link"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery Item-->
                    <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/5.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/5.jpg" data-fancybox="images" data-caption=""
                                                class="link"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery Item-->
                    <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/6.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="images/gallery/6.jpg" data-fancybox="images" data-caption=""
                                                class="link"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Gallery Section-->
        <!--Pricing Section-->
        <section class="pricing-section" style="background-image:url(images/background/pattern-3.png)">
            <div class="auto-container">
                <!--Sec Title Two-->
                <div class="sec-title-two light centered">
                    <div class="title-icon">
                        <img src="images/icons/title-icon.png" alt="" />
                    </div>
                    <h2>Our Pricing List</h2>
                    <div class="text">For professional dog and cat grooming needs</div>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">
                        <!--Price Block Two-->
                        <div class="price-block-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="title">Standard</div>
                                <div class="price">$25 <span>/ Visit</span></div>
                                <ul>
                                    <li><span>Includes:</span></li>
                                    <li>Bath Spa & Brush</li>
                                    <li>Trim & Grooming</li>
                                    <li>Cleaning & Plucking</li>
                                </ul>
                                <a href="#" class="theme-btn btn-style-seven">enquire this</a>
                            </div>
                        </div>
                        <!--Price Block Two-->
                        <div class="price-block-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="title">Standard</div>
                                <div class="price">$45 <span>/ Visit</span></div>
                                <ul>
                                    <li><span>Includes:</span></li>
                                    <li>Bath Spa & Brush</li>
                                    <li>Trim & Grooming</li>
                                    <li>Cleaning & Plucking</li>
                                    <li>Designer Cologne</li>
                                </ul>
                                <a href="#" class="theme-btn btn-style-seven">enquire this</a>
                            </div>
                        </div>
                        <!--Price Block Two-->
                        <div class="price-block-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="title">Premium</div>
                                <div class="price">$75 <span>/ Visit</span></div>
                                <ul>
                                    <li><span>Includes:</span></li>
                                    <li>Bath Spa & Brush</li>
                                    <li>Trim & Grooming</li>
                                    <li>Cleaning & Plucking</li>
                                    <li>Pick n Drop Service</li>
                                </ul>
                                <a href="#" class="theme-btn btn-style-seven">enquire this</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Pricing Section-->
        <!--Testimonial Section-->
        <section class="testimonial-section style-two">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title centered">
                    <div class="separator">
                        <span class="icon flaticon-pawprint-1"></span>
                    </div>
                    <div class="title">Because We Really Care About Your Pets</div>
                    <h2>Read Testimonials</h2>
                </div>
                <div class="testimonials-item-carousel owl-carousel owl-theme">
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon">
                                <span class="icon flaticon-quotation-marks"></span>
                            </div>
                            <div class="text">And taped a amazingly lazily far gosh oh bald oh raffishly ouch ladybug
                                far that the and alas slapped alas far brusque pridefully kneeled python horse alas
                                sound because more prodigiously outgrew tortoise characteristic stupidly barring
                                therefore so sniffed before drank.</div>
                            <div class="author-image">
                                <img src="images/resource/author-1.jpg" alt="" />
                            </div>
                            <div class="author-name">Tina Cambell</div>
                            <div class="designation">pet owner</div>
                        </div>
                    </div>
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon">
                                <span class="icon flaticon-quotation-marks"></span>
                            </div>
                            <div class="text">And taped a amazingly lazily far gosh oh bald oh raffishly ouch ladybug
                                far that the and alas slapped alas far brusque pridefully kneeled python horse alas
                                sound because more prodigiously outgrew tortoise characteristic stupidly barring
                                therefore so sniffed before drank.</div>
                            <div class="author-image">
                                <img src="images/resource/author-1.jpg" alt="" />
                            </div>
                            <div class="author-name">Tina Cambell</div>
                            <div class="designation">pet owner</div>
                        </div>
                    </div>
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon">
                                <span class="icon flaticon-quotation-marks"></span>
                            </div>
                            <div class="text">And taped a amazingly lazily far gosh oh bald oh raffishly ouch ladybug
                                far that the and alas slapped alas far brusque pridefully kneeled python horse alas
                                sound because more prodigiously outgrew tortoise characteristic stupidly barring
                                therefore so sniffed before drank.</div>
                            <div class="author-image">
                                <img src="images/resource/author-1.jpg" alt="" />
                            </div>
                            <div class="author-name">Tina Cambell</div>
                            <div class="designation">pet owner</div>
                        </div>
                    </div>
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon">
                                <span class="icon flaticon-quotation-marks"></span>
                            </div>
                            <div class="text">And taped a amazingly lazily far gosh oh bald oh raffishly ouch ladybug
                                far that the and alas slapped alas far brusque pridefully kneeled python horse alas
                                sound because more prodigiously outgrew tortoise characteristic stupidly barring
                                therefore so sniffed before drank.</div>
                            <div class="author-image">
                                <img src="images/resource/author-1.jpg" alt="" />
                            </div>
                            <div class="author-name">Tina Cambell</div>
                            <div class="designation">pet owner</div>
                        </div>
                    </div>
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="quote-icon">
                                <span class="icon flaticon-quotation-marks"></span>
                            </div>
                            <div class="text">And taped a amazingly lazily far gosh oh bald oh raffishly ouch ladybug
                                far that the and alas slapped alas far brusque pridefully kneeled python horse alas
                                sound because more prodigiously outgrew tortoise characteristic stupidly barring
                                therefore so sniffed before drank.</div>
                            <div class="author-image">
                                <img src="images/resource/author-1.jpg" alt="" />
                            </div>
                            <div class="author-name">Tina Cambell</div>
                            <div class="designation">pet owner</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial Section-->
        <!--Subscribe Style One-->
        <section class="subscribe-style-one" style="background-image:url(images/background/7.jpg)">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-5 col-sm-12 col-xs-12 env_message">
                        <div class="icon-box">
                            <span class="icon flaticon-message"></span>
                        </div>
                        <h2>Subscribe Newsletter</h2>
                        <div class="text">Get weekly news & latest updates from Pawrex!</div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <form method="post" action="contact.html">
                            <div class="form-group clearfix">
                                <input type="email" name="email" value="" placeholder="Your Email ..." required>
                                <button type="submit" class="theme-btn btn-style-three">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--End Subscribe Style One-->
        <!--Main Footer-->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!--big column-->
                        <div class="big-column col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <!--Footer Column-->
                                <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
                                        </div>
                                        <div class="text">This prodigiously grew tortoise charact stupidly pernicious
                                            jeepers along while accordingly under useful much salacious walking fars
                                            before some supp aesthetically wow shuddered.</div>
                                        <ul class="social-icon-two">
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-youtube-play"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Footer Column-->
                                <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Web Links</h2>
                                        <ul class="links">
                                            <li><a href="index.html">Home Page</a></li>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="services.html">Our Services</a></li>
                                            <li><a href="blog.html">Our News</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--big column-->
                        <div class="big-column col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <!--Footer Column-->
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget posts-widget">
                                        <h2>Recent Posts</h2>
                                        <!--Widget Post-->
                                        <article class="widget-post">
                                            <figure class="post-thumb"><a href="blog-single.html"><img
                                                        src="images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                            <div class="text"><a href="blog-single.html">We have best Pet Grooming
                                                    Services</a></div>
                                            <div class="post-info">Feb 15, 2021</div>
                                        </article>
                                        <!--Widget Post-->
                                        <article class="widget-post">
                                            <figure class="post-thumb"><a href="blog-single.html"><img
                                                        src="images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                            <div class="text"><a href="blog-single.html">Less tme is required for cat
                                                    grooming</a></div>
                                            <div class="post-info">Feb 15, 2021</div>
                                        </article>
                                    </div>
                                </div>
                                <!--Footer Column-->
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget info-widget">
                                        <h2>Get In Touch</h2>
                                        <ul>
                                            <li><span class="icon fa fa-map-marker"></span>32 BellSouth, Harley Street
                                                <br> Florida 33968</li>
                                            <li>
                                                <span class="icon fa fa-phone"></span>
                                                <a href="tel:+12345678900">+(1) 234 567 8900 </a>
                                            </li>
                                            <li>
                                                <span class="icon fa fa-envelope"></span>
                                                    <a href="mailto:support@pawrex.com"> support@pawrex.com </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="copyright">Copyrights 2021 <span>PAWREX</span> • All Rights Reserved.</div>
                </div>
            </div>
        </footer>
        <!--End Main Footer-->
    </div>
    <!--End pagewrapper-->
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-bs-target="html"><span class="icon flaticon-pawprint-1"></span></div>
    <!-- Color Palate / Color Switcher -->
    <div class="color-palate">
        <div class="color-trigger">
            <i class="flaticon-pawprint-1"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Color</h6>
        </div>
        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
                <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
            </div>
        </div>
        <a href="#" class="purchase-btn">Purchase now $17</a>
        <div class="palate-foo">
            <span>You will find much more options for colors and styling in admin panel. This color picker is used only
                for demonstation purposes.</span>
        </div>
    </div>
    <script src="{{ asset('peddyhub/js/jquery.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('peddyhub/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('peddyhub/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('peddyhub/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('peddyhub/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('peddyhub/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('peddyhub/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('peddyhub/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('peddyhub/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('peddyhub/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('peddyhub/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('peddyhub/js/main-slider-script.js') }}"></script>
    <script src="{{ asset('peddyhub/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('peddyhub/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('peddyhub/js/owl.js') }}"></script>
    <script src="{{ asset('peddyhub/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('peddyhub/js/appear.js') }}"></script>
    <script src="{{ asset('peddyhub/js/wow.min.js') }}"></script>
    <script src="{{ asset('peddyhub/js/gallery.js') }}"></script>
    <script src="{{ asset('peddyhub/js/script.js') }}"></script>
    <script src="{{ asset('peddyhub/js/color-settings.js') }}"></script>
</body>

</html>