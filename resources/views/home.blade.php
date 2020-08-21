<!DOCTYPE html>

<html lang="en">
<head>

        <!-- ==============================================
        Basic Page Needs
        =============================================== -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

        <title>Tweeny Consul Group</title>

        <meta name="description" content="Business, Consulting, Finance, Insurance, Startup and Technology">
        <meta name="subject" content="Business, Consulting, Finance, Insurance, Startup and Technology">
        <meta name="author" content="tweenyconsul">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href={{ asset('assets/images/favicon.ico')}}"">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png')}}">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/slider.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/icons.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/icons-fa.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/animation.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/gallery.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/cookie-notice.min.css')}}">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="{{ asset('assets/css/default.css')}}">

        <!-- ==============================================
        Theme Color
        =============================================== -->
        <meta name="theme-color" content="#21333e">

        <!-- ==============================================
        Theme Settings
        =============================================== -->
        <style>
            :root {
                --hero-bg-color: #000007;
    
                --section-1-bg-color: #eef4ed;
                --section-2-bg-color: #ffffff;
                --section-3-bg-color: #111117;
                --section-4-bg-color: #eef4ed;
                --section-5-bg-color: #ffffff;
                --section-6-bg-color: #111117; --section-6-bg-image: url('assets/images/bg-1.jpg');
                --section-7-bg-color: #ffffff;
            }
        </style>
        
    </head>

    <body>
        
        <!-- Preloader -->
        <div id="preloader" data-timeout="2000" class="odd preloader counter">
            <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header id="header">

            <!-- Top Navbar -->
            <nav class="navbar navbar-expand top">
                <div class="container header">

                    <!-- Navbar Items [left] -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link pl-0"><i class="fas fa-clock mr-2"></i>Open Hours: Mon - Sat - 9:00 - 18:00</a>
                        </li>
                    </ul>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items [right] -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-phone-alt mr-2"></i>+1 (305) 1234-5678</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-envelope mr-2"></i>info@tweenyconsulgroup.com</a>
                        </li>
                    </ul>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="https://www.linkedin.com/company/tweenyconsulgroup/" class="nav-link pr-0"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>

                </div>
            </nav>

            <!-- Navbar -->
            <nav class="navbar navbar-expand navbar-fixed sub">
                <div class="container header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="index.html">
                        <span class="brand">
                            <span class="featured">
                                <span class="first">Tweeny</span>
                            </span>
                            <span class="last">Consul</span>
                        </span>
                        
                        <!-- 
                            Custom Logo
                            <img src="assets/images/logo.svg" alt="NEXGEN">
                        -->
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a href="#header" class="smooth-anchor nav-link">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="smooth-anchor nav-link">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="smooth-anchor nav-link">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pricing" class="smooth-anchor nav-link">PRICING</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="smooth-anchor nav-link">BLOG</a>
                        </li>
                    </ul>

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="#contact" class="smooth-anchor btn ml-lg-auto primary-button">GET IN TOUCH</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>

        <!-- Hero -->
        <section id="slider" class="hero p-0 odd">
            <div class="swiper-container no-slider animation slider-h-100 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <video class="full-image to-bottom" data-mask="70" src="assets/videos/home.mp4" autoplay muted loop></video>

                        <div class="slide-content row">
                            <div class="col-12 d-flex justify-content-start justify-content-md-center inner">
                                <div class="center text-left text-md-center">

                                    <!-- Content -->
                                    <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">Lead ~ <span class="featured"><span>Customer</span></span></h1>
                                    <p data-aos="zoom-in" data-aos-delay="2400" class="description mr-auto ml-auto">Successful strategies require data analysis, creativity and customer focus, taking advantage of the latest technologies to offer excellent services.</p>
                                   
                                    <!-- Action -->
                                    <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                        <div class="d-sm-inline-flex">
                                            <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN TOUCH</a>
                                            <a href="#features" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features" class="section-1 features offers featured">
            <div class="container">
                <div class="row justify-content-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon featured icon-people"></i>
                            <h4>Human Capital</h4>
                            <p>Humanizing business: Harness the power of technology to improve the way people work.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon featured icon-pie-chart"></i>
                            <h4>Core Business</h4>
                            <p>It takes innovative approaches to transform, modernize, and run existing platforms.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon featured icon-speedometer"></i>
                            <h4>Performance</h4>
                            <p>Achieving maximum impact and value from investments in finance and supply chain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="section-2 highlights image-right featured">
            <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-auto m-md-0">About the company</span>
                            <h2><span class="featured"><span>Tweeny</span></span> Consul</h2>
                            <p>For 12 years we have been providing audit and warranty, financial advice, risk advice, taxes and related services to select clients.</p>
                        </div>
                    </div>
                    <div class="row items">                             
                        <div data-aos="fade-up" class="col-12 col-md-6 p-0 pr-md-4 item">
                            <h4><i class="mr-2 icon-badge"></i>Tradition</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        </div>           
                        <div data-aos="fade-up" class="col-12 col-md-6 p-0 item">
                            <h4><i class="mr-2 icon-lock"></i>Security</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        </div> 
                    </div>
                    <div class="row items"> 
                        <div data-aos="fade-up" class="col-12 col-md-6 p-0 item">
                            <h4><i class="mr-2 icon-note"></i>Certificate</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        </div>  
                        <div data-aos="fade-up" class="col-12 col-md-6 p-0 pr-md-4 item">
                            <h4><i class="mr-2 icon-graduation"></i>Expertise</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0 image">
                    <img src="assets/images/about-3.jpg" class="fit-image" alt="Fit Image">
                </div>
            </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="section-3 odd offers">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <span class="pre-title m-auto ml-md-0">Our business areas</span>
                        <h2>Excellence in <span class="featured"><span>Services</span></span></h2>
                        <p>We are leaders in providing consultancy services with a set of cutting-edge technologies and a team of experienced and renowned professionals. These are some options that you can hire.</p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                        <a href="#" class="btn mx-auto mr-md-0 ml-md-auto outline-button">SEE ALL</a>
                    </div>
                </div>
                <div class="row justify-content-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-organization"></i>
                            <h4>Audit & Assurance</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

                            <!-- Action -->
                            <div class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#" class="mt-4 btn outline-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-briefcase"></i>
                            <h4>Financial Advisory</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

                            <!-- Action -->
                            <div class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#" class="mt-4 btn outline-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-chart"></i>
                            <h4>Analytics and M&A</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

                            <!-- Action -->
                            <div class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#" class="mt-4 btn outline-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-plane"></i>
                            <h4>Middle Marketing</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

                            <!-- Action -->
                            <div class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#" class="mt-4 btn outline-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-globe-alt"></i>
                            <h4>Legal Consulting</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

                            <!-- Action -->
                            <div class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#" class="mt-4 btn outline-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-drawer"></i>
                            <h4>Regulatory Risk</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

                            <!-- Action -->
                            <div class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#" class="mt-4 btn outline-button">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section id="pricing" class="section-4 plans">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">Monthly Plans</span>
                        <h2><span class="featured"><span>Pricing</span></span> Table</h2>
                        <p class="text-max-800">We can help you deliver and execute your future, wherever you compete, using the latest technologies, from strategy development to implementation.</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                        <div data-aos="fade-up"  class="card">
                            <a href="#" class="choose-plan"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                            <i class="icon icon-rocket"></i>
                            <h4>Standard</h4>
                            <span class="price">
                                <i>$</i>490<span class="plan"> / mo</span>
                            </span>                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Standard Accounting</span>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Platform Access</span>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Business Orientation</span>
                                    <i class="icon-min m-0 fas fa-times text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Dedicated Consultant</span>
                                    <i class="icon-min m-0 fas fa-times text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Personal Assistance</span>
                                    <i class="icon-min m-0 fas fa-times text-right"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                        <div data-aos="fade-up"  class="card most-popular">
                            <span class="badge">Most<br>Popular</span>
                            <a href="#" class="choose-plan"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                            <i class="icon icon-briefcase"></i>
                            <h4>Professional</h4>
                            <span class="price">
                                <i>$</i>890<span class="plan"> / mo</span>
                            </span>  
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Standard Accounting</span>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Platform Access</span>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Business Orientation</span>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Dedicated Consultant</span>
                                    <i class="icon-min m-0 fas fa-times text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Personal Assistance</span>
                                    <i class="icon-min m-0 fas fa-times text-right"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                        <div data-aos="fade-up" class="card">
                            <a href="#" class="choose-plan"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                            <i class="icon icon-diamond"></i>
                            <h4>Ultimate</h4>
                            <span class="price">
                                <i>$</i>1.390<span class="plan"> / mo</span>
                            </span>  
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Standard Accounting</span>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Platform Access</span>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Business Orientation</span>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Dedicated Consultant</span>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                    <span>Personal Assistance</span>
                                    <i class="icon-min m-0 fas fa-check text-right"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section id="blog" class="section-5 carousel showcase">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row intro">
                        <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                            <span class="pre-title m-auto m-md-0">Our editorial content</span>
                            <h2>Latest <span class="featured"><span>News</span></span></h2>
                            <p>Every week we publish content about what is best in the business world.</p>
                        </div>
                        <div class="col-12 col-md-3 align-self-end">
                            <a href="#" class="btn mx-auto mr-md-0 ml-md-auto primary-button">SEE ALL</a>
                        </div>
                    </div>
                    <div class="swiper-container mid-slider items" data-perview="3"> 
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-1.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea Miller</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2 Days Ago</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>Increasing creativity is possible for everyone</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-2.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Smith</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>9 Days Ago</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>Because market research is part of the business plan</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-3.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea Miller</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>16 Days Ago</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>Working from home is now a trend</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-4.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Smith</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>23 Days Ago</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>Tips for having a good relationship at work</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-5.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>David Cooper</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>30 Days Ago</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>David Cooper tells about the opening of the new office in Baltimore</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-1.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea Miller</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2 Days Ago</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>Increasing creativity is possible for everyone</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-2.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Smith</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>9 Days Ago</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>Because market research is part of the business plan</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-3.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea Miller</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>16 Days Ago</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>Working from home is now a trend</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-4.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Smith</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>23 Days Ago</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>Tips for having a good relationship at work</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-5.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>David Cooper</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>30 Days Ago</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>David Cooper tells about the opening of the new office in Baltimore</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subscribe -->
        <section id="subscribe" class="section-6 odd subscribe">
            <div class="container smaller">
                <div class="row">
                    <div class="col-12 col-md-6 m-md-0 intro">
                        <span class="pre-title m-0">Newsletter</span>
                        <h2><span class="featured"><span>Know</span></span> First</h2>
                        <p>Follow closely and receive content about our company and the news of the current market.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <form action="https://nexgen.codings.dev/php/form.php" id="nexgen-subscribe" class="row m-auto items">
                            <input type="hidden" name="section" value="nexgen_subscribe">

                            <input type="hidden" name="reCAPTCHA">
                            <!-- Remove this field if you want to disable recaptcha -->

                            <div class="col-12 mt-0 input-group align-self-center item">
                                <input type="text" name="name" class="form-control less-opacity field-name" placeholder="Name">
                            </div>
                            <div class="col-12 input-group align-self-center item">
                                <input type="email" name="email" class="form-control less-opacity field-email" placeholder="Email">
                            </div>
                            <div class="col-12 input-group align-self-center item">
                                <a data-aos="zoom-in" class="btn primary-button">SUBSCRIBE</a>
                            </div>
                            <div class="col-12">
                                <span class="form-alert mt-3 mb-0"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="section-7 form contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Send a message</span>
                                <h2>Get in <span class="featured"><span>Touch</span></span></h2>
                                <p>We will respond to your message as soon as possible.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <form action="https://nexgen.codings.dev/php/form.php" id="nexgen-simple-form" class="nexgen-simple-form">
                                    <input type="hidden" name="section" value="nexgen_form">

                                    <input type="hidden" name="reCAPTCHA">
                                    <!-- Remove this field if you want to disable recaptcha -->

                                    <div class="row form-group-margin">
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="name" class="form-control field-name" placeholder="Name">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="email" name="email" class="form-control field-email" placeholder="Email">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="phone" class="form-control field-phone" placeholder="Phone">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <i class="icon-arrow-down mr-3"></i>
                                            <select name="info" class="form-control field-info">
                                                <option value="" selected disabled>More Info</option>
                                                <option>Audit & Assurance</option>
                                                <option>Financial Advisory</option>
                                                <option>Analytics and M&A</option>
                                                <option>Middle Marketing</option>
                                                <option>Legal Consulting</option>
                                                <option>Regulatory Risk</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12 m-0 p-2 input-group">
                                            <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12 col-12 m-0 pl-md-2">
                                            <span class="form-alert"></span>
                                        </div>
                                        <div class="col-12 input-group m-0 p-2">
                                            <a class="btn primary-button">SEND</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="contacts">
                            <h4>Example Inc.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +1 (305) 1234-5678
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        hello@example.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <footer>

            <!-- Footer [content] -->
            <section id="footer" class="odd footer offers">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 footer-left">

                            <!-- Navbar Brand-->
                            <a class="navbar-brand" href="index.html">
                                <span class="brand">
                                    <span class="featured">
                                        <span class="first">Tweeny</span>
                                    </span>
                                    <span class="last">Consul</span>
                                </span>
                                
                                <!-- 
                                    Custom Logo
                                    <img src="assets/images/logo.svg" alt="NEXGEN">
                                -->
                            </a>
                            <p>A Functional HTML Template<br>for Corporate & Business.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +1 (305) 1234-5678
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        hello@example.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="mt-4 btn outline-button smooth-anchor">GET IN TOUCH</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-9 p-0 footer-right">
                            <div class="row items">
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>About</h4>
                                        <a href="#"><i class="icon-arrow-right"></i>The Company</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Institutional</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Social & Events</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Innovation</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Environment</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Technology</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>Services</h4>
                                        <a href="#"><i class="icon-arrow-right"></i>Audit & Assurance</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Financial Advisory</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Analytics M&A</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Middle Marketing</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Legal Consulting</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Regulatory Risk</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>Support</h4>
                                        <a href="#"><i class="icon-arrow-right"></i>Responsibility</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Terms of Use</a>
                                        <a href="#"><i class="icon-arrow-right"></i>About Cookies</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Privacy Policy</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Accessibility</a>
                                        <a href="#"><i class="icon-arrow-right"></i>Information</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Copyright -->
            <section id="copyright" class="p-3 odd copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                            <p>Customers satisafction is key.</p>
                            <!--
                                Suggestion: Replace the text above with a description of your website.
                             -->
                        </div>
                        <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                            <p>© 2020 Proudly Powered by <a href="tweenyconsulgroup.com" target="_blank">Tweeny Consul Group</a>.</p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>

        <!-- Modal [search] -->
        <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <h2>What are you looking for?</h2>
                                        <div class="badges">
                                            <span class="badge"><a href="#">Consulting</a></span>
                                            <span class="badge"><a href="#">Audit</a></span>
                                            <span class="badge"><a href="#">Assurance</a></span>
                                            <span class="badge"><a href="#">Advisory</a></span>
                                            <span class="badge"><a href="#">Financial</a></span>
                                            <span class="badge"><a href="#">Capital Markets</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Enter Keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [sign] -->
        <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form action="https://nexgen.codings.dev/" class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Sign In</h2>
                                        <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">SIGN IN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [register] -->
        <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form action="https://nexgen.codings.dev/" class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Register</h2>
                                        <p>Have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">REGISTER</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [map] -->
        <div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header absolute" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.123073808986!2d12.490042215441486!3d41.89021017922119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61b6532013ad%3A0x28f1c82e908503c4!2sColiseu!5e0!3m2!1spt-BR!2sbr!4v1594148229878!5m2!1spt-BR!2sbr" width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>        
        
        <!-- ==============================================
        Google reCAPTCHA // Put your site key here
        =============================================== -->
        <script src="../www.google.com/recaptcha/api9516.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="{{ asset('assets/js/vendor/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.inview.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/ponyfill.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/slider.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/animation.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/progress-radial.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/bricklayer.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/gallery.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/shuffle.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/cookie-notice.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/particles.min.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>

    </body>
</html>