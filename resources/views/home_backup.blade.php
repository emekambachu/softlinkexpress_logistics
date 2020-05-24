<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Cargo Base Logistics ">
    <link href="{{ asset('softlinkexpress_logoonly.png') }}" rel="icon">
    <title>Cargo Base Logistics </title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
<div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-transparent">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('softlinkexpress_logo.png') }}" width="200" class="logo-light" alt="logo">
                    <img src="{{ asset('softlinkexpress_logo.png') }}" width="200" class="logo-dark" alt="logo">
                </a>
                <button class="navbar-toggler" type="button">
                    <span class="menu-lines"><span></span></span>
                </button>
                <div class="header__top-right d-none d-lg-block">
                    <ul class="list-unstyled d-flex justify-content-end align-items-center">
                        <li><i class="icon-phone"></i><span>+55 654 541 17</span></li>
                        <li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle width-auto" id="langDrobdown" data-toggle="dropdown">
                                    <i class="icon-map"></i><span>En</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="langDrobdown">
                                    <a class="dropdown-item" href="#">Spain</a>
                                    <a class="dropdown-item" href="#">France</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="request-quote.html" class="btn btn__white"><i class="icon-list"></i><span>Request A
                    Quote</span></a></li>
                    </ul>
                </div><!-- /.header-top-right -->
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav__item with-dropdown">
                            <a href="index-2.html" class="dropdown-toggle nav__item-link active">Home</a>
                            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="index-2.html" class="nav__item-link">Home Main</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="home-modern.html" class="nav__item-link">Home Moderm</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="home-classic.html" class="nav__item-link">Home classic</a></li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="about-us.html" class="dropdown-toggle nav__item-link">Company</a>
                            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="about-us.html" class="nav__item-link">About Us</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="why-us.html" class="nav__item-link">Why Choose Us</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="leadership-team.html" class="nav__item-link">Leadership Team</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="global-locations.html" class="nav__item-link">Global Locations</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="gallery.html" class="nav__item-link">Our Gallery</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="careers.html" class="nav__item-link">careers</a></li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="services.html" class="dropdown-toggle nav__item-link">Services</a>
                            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu wide-dropdown-menu">
                                <li class="nav__item">
                                    <div class="row mx-0">
                                        <div class="col-sm-6 dropdown-menu-col">
                                            <h6>What We Do</h6>
                                            <ul class="nav flex-column">
                                                <li class="nav__item"><a class="nav__item-link" href="single-service.html">Warehousing</a>
                                                </li> <!-- /.nav-item -->
                                                <li class="nav__item"><a class="nav__item-link" href="single-service.html">Air Freight</a>
                                                </li> <!-- /.nav-item -->
                                                <li class="nav__item"><a class="nav__item-link" href="single-service.html">Ocean Freight</a>
                                                </li> <!-- /.nav-item -->
                                                <li class="nav__item"><a class="nav__item-link" href="single-service.html">Road Freight</a>
                                                </li> <!-- /.nav-item -->
                                                <li class="nav__item"><a class="nav__item-link" href="single-service.html">Supply Chain</a>
                                                </li> <!-- /.nav-item -->
                                                <li class="nav__item"><a class="nav__item-link" href="single-service.html">Packaging</a></li>
                                                <!-- /.nav-item -->
                                            </ul>
                                        </div><!-- /.col-sm-6 -->
                                        <div class="col-sm-6 dropdown-menu-col">
                                            <h6>Who We Serve</h6>
                                            <ul class="nav flex-column">
                                                <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Retail &
                                                        Consumer</a></li> <!-- /.nav-item -->
                                                <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Sciences &
                                                        Healthcare</a></li> <!-- /.nav-item -->
                                                <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Industrial &
                                                        Chemical</a></li> <!-- /.nav-item -->
                                                <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Power
                                                        Generation</a></li> <!-- /.nav-item -->
                                                <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Food &
                                                        Beverage</a></li> <!-- /.nav-item -->
                                                <li class="nav__item"><a class="nav__item-link" href="single-industry.html">Oil & Gas</a></li>
                                                <!-- /.nav-item -->
                                            </ul>
                                        </div><!-- /.col-sm-6 -->
                                    </div><!-- /.row -->
                                </li><!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="rates.html" class="nav__item-link">rates</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="case-studies-grid.html" class="dropdown-toggle nav__item-link">case studies</a>
                            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="case-studies-default.html" class="nav__item-link">case studies
                                        default</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="case-studies-grid.html" class="nav__item-link">case studies grid</a>
                                </li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="case-studies-carousel.html" class="nav__item-link">case studies
                                        carousel</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="case-studies-single.html" class="nav__item-link">case study Single</a>
                                </li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="blog-grid.html" class="dropdown-toggle nav__item-link">News & Media</a>
                            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="blog-grid.html" class="nav__item-link">blog grid</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="blog-classic.html" class="nav__item-link">blog classic</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="blog-single-post.html" class="nav__item-link">blog single post</a></li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Features</a>
                            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="request-quote.html" class="nav__item-link">request a quote</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="track-shipment.html" class="nav__item-link">track and trace</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="find-location.html" class="nav__item-link">find Location</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="faqs.html" class="nav__item-link">help and faqs</a></li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="contacs.html" class="nav__item-link">Contact Us</a>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.navbar-collapse -->
                <div class="navbar-modules">
                    <div class="modules__wrapper d-flex align-items-center">
                        <a href="#" class="module__btn module__btn-search"><i class="fa fa-search"></i></a>
                    </div><!-- /.modules-wrapper -->
                </div><!-- /.navbar-modules -->
            </div><!-- /.container -->
        </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ============================
        Slider
    ============================== -->
    <section id="slider1" class="slider slider-1">
        <div class="owl-carousel thumbs-carousel carousel-arrows" data-slider-id="slider1" data-dots="false"
             data-autoplay="true" data-nav="true" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="{{ asset('assets/images/sliders/1.jpg') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="slide__content">
                                <h2 class="slide__title">Safe & Reliable Cargo Solutions!</h2>
                                <p class="slide__desc">Providing flexibile, improved service levels, and accelerated
                                    delivery.</p>
                                <a href="#" class="btn btn__white mr-40">Our Services</a>
                                <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                    <div class="video__player">
                                        <span class="video__player-animation"></span>
                                        <i class="fa fa-play"></i>
                                    </div>Our Video!
                                </a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="{{ asset('assets/images/sliders/3.jpg') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="slide__content">
                                <h2 class="slide__title">Fast, Certified & Felxible Solutions.</h2>
                                <p class="slide__desc">Providing flexibile, improved service levels, and accelerated delivery.</p>
                                <a href="#" class="btn btn__white mr-40">Get Started</a>
                                <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                    <div class="video__player">
                                        <span class="video__player-animation"></span>
                                        <i class="fa fa-play"></i>
                                    </div>Our Video!
                                </a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="{{ asset('assets/images/sliders/2.jpg') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="slide__content">
                                <h2 class="slide__title">Safe & Reliable Cargo Solutions!</h2>
                                <p class="slide__desc">Providing flexibile, improved service levels, and accelerated
                                    delivery.</p>
                                <a href="#" class="btn btn__white mr-40">Our Services</a>
                                <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                    <div class="video__player">
                                        <span class="video__player-animation"></span>
                                        <i class="fa fa-play"></i>
                                    </div>Our Video!
                                </a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="{{ asset('assets/images/sliders/5.jpg') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="slide__content">
                                <h2 class="slide__title">Fast, Certified & Felxible Solutions.</h2>
                                <p class="slide__desc">Providing flexibile, improved service levels, and accelerated delivery.</p>
                                <a href="#" class="btn btn__white mr-40">Get Started</a>
                                <a class="btn btn__video popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                    <div class="video__player">
                                        <span class="video__player-animation"></span>
                                        <i class="fa fa-play"></i>
                                    </div>Our Video!
                                </a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12  d-none d-lg-block">
                    <div class="owl-thumbs thumbs-dots" data-slider-id="slider1">
                        <button class="owl-thumb-item">
                            <i class="icon-elevator"></i>
                            <span>Warehousing <br> Services</span>
                        </button>
                        <button class="owl-thumb-item">
                            <i class="icon-airplane"></i>
                            <span>Air Freight<br> Services</span>
                        </button>
                        <button class="owl-thumb-item">
                            <i class="icon-ship"></i>
                            <span>Ocean Freight<br> Services</span>
                        </button>
                        <button class="owl-thumb-item">
                            <i class="icon-truck"></i>
                            <span>Road Freight<br> Services</span>
                        </button>
                    </div><!-- /.owl-thumbs -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.slider -->

    <!-- ========================
      About 4
    =========================== -->
    <section id="about4" class="about about-2 about-4 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="row heading heading-2">
                        <div class="col-sm-12 col-md-12 col-sm-12">
                            <h2 class="heading__title">Safe, Reliable And Express Logistic & Transport Solutions
                                That Saves Your Time!</h2>
                        </div><!-- /.col-lg-12 -->
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1"
                                 data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true"
                                 data-speed="700">
                                <div class="fancybox-item">
                                    <div class="fancybox__icon">
                                        <i class="icon-worldwide"></i>
                                    </div><!-- /.fancybox-icon -->
                                    <div class="fancybox__content">
                                        <h4 class="fancybox__title">Our Mission</h4>
                                        <p class="fancybox__desc">Utilising latest communications, tracking processing software, and
                                            decades of experience.</p>
                                    </div><!-- /.fancybox-content -->
                                </div><!-- /.fancybox-item -->
                                <div class="fancybox-item">
                                    <div class="fancybox__icon">
                                        <i class="icon-transfer"></i>
                                    </div><!-- /.fancybox-icon -->
                                    <div class="fancybox__content">
                                        <h4 class="fancybox__title">Our Vision</h4>
                                        <p class="fancybox__desc">The best possible service in the sphere of optimized route of cargo &
                                            transportation worldwide.</p>
                                    </div><!-- /.fancybox-content -->
                                </div><!-- /.fancybox-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.col-lg-5 -->
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <p class="heading__desc mb-30">Cargo Base Logistics is a representative logistics operator providing full range
                                of service in the sphere
                                of customs clearance and transport worldwide for any type of cargo.</p>
                            <p>We pride ourselves on providing the best transport and shipping services available allover the
                                world. Our skilled personnel, utilising the latest communications, tracking and processing software,
                                combined with decades of experience! Through integrated supply chain solutions, Cargo Base Logistics drives
                                sustainable competitive advantages to some of Australia's largest companies.</p>
                            <img src="{{ asset('assets/images/about/singnture.png') }}" alt="singnture" class="signature mb-30">
                        </div><!-- /.col-lg-7 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-7 -->
                <div class="col-sm-12 col-md-9 col-lg-5">
                    <div class="about__img mb-60">
                        <img src="{{ asset('assets/images/about/2.jpg') }}" alt="about img" class="img-fluid">
                        <span>More About Us!</span>
                    </div><!-- /.about-img -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About 4 -->

    <!-- =========================
       video 1
      =========================== -->
    <section id="video1" class="video video-1 bg-overlay bg-parallax counters-white">
        <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/3.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="video__btn mb-45">
                        <a class="popup-video" href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk">
                            <span class="video__player-animation"></span>
                            <div class="video__player">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div><!-- /.video -->
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <div class="heading">
                        <span class="heading__subtitle color-white">Your Package, Your Rules</span>
                        <h3 class="heading__title color-white">Digital Freight That
                            Saves Your Time!</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-xl-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6 offset-xl-1">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="counter-item">
                                <div class="counter__icon"><i class="icon-worldwide"></i></div>
                                <h4><span class="counter">1,538</span><span>m</span></h4>
                                <p class="counter__desc">Clients Worldwide</p>
                            </div><!-- /.counter-item -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="counter-item">
                                <div class="counter__icon"><i class="icon-trolley"></i></div>
                                <h4><span class="counter">5,154</span><span>m</span></h4>
                                <p class="counter__desc">Delivered Goods</p>
                            </div><!-- /.counter-item -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="counter-item">
                                <div class="counter__icon"><i class="icon-truck"></i></div>
                                <h4><span class="counter">8,845</span><span>m</span></h4>
                                <p class="counter__desc">Miles Driven</p>
                            </div><!-- /.counter-item -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.video 1 -->

    <!-- ========================
        Request Quote Tabs
    =========================== -->
    <section id="requestQuoteTabs" class="request-quote request-quote-tabs pt-0 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="request__form">
                        <nav class="nav nav-tabs">
                            <a class="nav__link active" data-toggle="tab" href="#quote">
                                <div class="request__form-header d-flex align-items-center">
                                    <i class="icon-box"></i>
                                    <h4 class="request__form-title">Request A Quote</h4>
                                </div><!-- /.request-form-header -->
                            </a>
                            <a class="nav__link" data-toggle="tab" href="#track">
                                <div class="request__form-header d-flex align-items-center">
                                    <i class="icon-worldwide"></i>
                                    <h4 class="request__form-title">Track & Trace</h4>
                                </div><!-- /.request-form-header -->
                            </a>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="quote">
                                <div class="request__form-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-8">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <h6>Personal Data</h6>
                                                </div><!-- /.col-lg-12 -->
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Phone">
                                                    </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <h6 class="mt-5">Shipment Data</h6>
                                                </div><!-- /.col-lg-12 -->
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group form-group-select">
                                                        <select class="form-control">
                                                            <option>Freight Type</option>
                                                            <option>Freight Type 1</option>
                                                            <option>Freight Type 2</option>
                                                        </select>
                                                    </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="City of Departure">
                                                    </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Delivery City">
                                                    </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="form-group form-group-select">
                                                        <select class="form-control">
                                                            <option>Incoterms</option>
                                                            <option>Incoterms 1</option>
                                                            <option>Incoterms 2</option>
                                                        </select>
                                                    </div>
                                                </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-6 col-md-4 col-lg-4 d-flex">
                                                    <div class="form-group mr-20">
                                                        <input type="email" class="form-control" placeholder="Weight">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Height">
                                                    </div>
                                                </div><!-- /.col-lg-3 -->
                                                <div class="col-sm-6 col-md-4 col-lg-4  d-flex">
                                                    <div class="form-group mr-20">
                                                        <input type="email" class="form-control" placeholder="Width">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Length">
                                                    </div>
                                                </div><!-- /.col-lg-4 -->
                                                <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Fragile
                                                            <input type="radio" name="radioGroup2" checked="">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Express Delivery
                                                            <input type="radio" name="radioGroup2">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Insurance
                                                            <input type="radio" name="radioGroup2">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Packaging
                                                            <input type="radio" name="radioGroup2">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                </div><!-- /.col-lg-12 -->
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <button class="btn btn__secondary btn__block">Request A Quote</button>
                                                </div><!-- /.col-lg-12 -->
                                            </div>
                                        </div><!-- /.col-lg-8 -->
                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <div class="widget widget-help bg-theme">
                                                <div class="widget__content">
                                                    <h5>How Can <br> We Help You!</h5>
                                                    <p>We understand the importance approaching each work integrally and believe in the power of simple and easy communication.</p>
                                                    <a href="#" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact
                                                        Us</a>
                                                </div><!-- /.widget-download -->
                                            </div><!-- /.widget-help -->
                                        </div><!-- /.col-lg-4 -->
                                    </div><!-- /.row -->
                                </div><!-- /.request-form-body -->
                            </div><!-- /.tab -->
                            <div class="tab-pane fade" id="track">
                                <div class="request__form-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-8">
                                            <div class="row">

                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Shipment Type</label>
                                                        <div class="form-group form-group-select">
                                                            <select class="form-control">
                                                                <option>Packaging</option>
                                                                <option>Packaging 1</option>
                                                                <option>Packaging 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- /.col-lg-12 -->

                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Tracking Number</label>
                                                        <div class="form-group">
                                <textarea class="form-control"
                                          placeholder="You can enter up to a maximum of 10 airway bill numbers for tracking."></textarea>
                                                        </div>
                                                    </div>
                                                </div><!-- /.col-lg-12 -->
                                                <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Fragile
                                                            <input type="radio" name="radioGroup2" checked="">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Express Delivery
                                                            <input type="radio" name="radioGroup2">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Insurance
                                                            <input type="radio" name="radioGroup2">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group input-radio">
                                                        <label class="label-radio">Packaging
                                                            <input type="radio" name="radioGroup2">
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    </div>
                                                </div><!-- /.col-lg-12 -->
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <button class="btn btn__secondary btn__block">Track & Trace</button>
                                                </div><!-- /.col-lg-12 -->
                                            </div>
                                        </div><!-- /.col-lg-8 -->
                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <div class="widget widget-help bg-theme">
                                                <div class="widget__content">
                                                    <h5>How Can <br> We Help You!</h5>
                                                    <p>We understand the importance approaching each work integrally and believe in the power of
                                                        simple
                                                        and easy communication.</p>
                                                    <a href="#" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact
                                                        Us</a>
                                                </div><!-- /.widget-download -->
                                            </div><!-- /.widget-help -->
                                        </div><!-- /.col-lg-4 -->
                                    </div><!-- /.row -->
                                </div><!-- /.request-form-body -->
                            </div><!-- /.tab -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.request-form -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Request Quote Tabs -->

    <!-- ========================
        Services
    =========================== -->
    <section id="services" class="services pt-0 bg-gray">
        <div class="container">
            <div class="row heading mb-40">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <span class="heading__subtitle">Services We Offer</span>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <h2 class="heading__title">We Manage Lead Logistics For World’s Multinational Companies.</h2>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
                    <p class="heading__desc">Our global logistics expertise, advanced supply chain technology & customized
                        logistics solutions will help you analyze, develop and implement successful supply chain management
                        strategies.</p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/1.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__overlay">
                            <div class="service__icon"><i class="icon-airplane"></i></div>
                            <h4 class="service__title">Air Freight</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                            <a href="#" class="btn btn__white btn__link btn__underlined">Read More</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/2.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__overlay">
                            <div class="service__icon"><i class="icon-ship"></i></div>
                            <h4 class="service__title">Ocean Freight</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                            <a href="#" class="btn btn__white btn__link btn__underlined">Read More</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/3.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__overlay">
                            <div class="service__icon"><i class="icon-truck"></i></div>
                            <h4 class="service__title">Road Freight</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                            <a href="#" class="btn btn__white btn__link btn__underlined">Read More</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <a href="request-quote.html" class="btn btn__primary btn__hover3 btn__lg mt-20">Schedule An Appointment</a>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Services -->

    <!-- ===========================
      fancybox Layout2
    ============================= -->
    <section id="fancyboxLayout2" class="fancybox-layout2 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 col-xl-4">
                    <div class="heading heading-3 mb-50">
                        <span class="heading__subtitle">Your Package, Your Rules</span>
                        <h2 class="heading__title">We continue to pursue that same vision in today's complex, uncertain world,
                            working every day</h2>
                    </div>
                </div><!-- /.col-xl-4 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- fancybox item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item">
                        <div class="fancybox__icon">
                            <i class="icon-credit-cards"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">Transparent Pricing</h4>
                            <p class="fancybox__desc">The world of international supply chains involves a myriad of unknown risks
                                and challenging regulations.</p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item">
                        <div class="fancybox__icon">
                            <i class="icon-search-worldwide"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">Real-Time Tracking</h4>
                            <p class="fancybox__desc">We ensure our customers’ supply chains are fully compliant by our
                                comprehensive practices and programs. </p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item">
                        <div class="fancybox__icon">
                            <i class="icon-boxes"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">Warehouse Storage</h4>
                            <p class="fancybox__desc">Depending on your product, needs and requirements, we provide professional
                                warehouse activities.</p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #4 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item">
                        <div class="fancybox__icon">
                            <i class="icon-balance"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">Security For Cargo</h4>
                            <p class="fancybox__desc">Our facilities meet high security requirements and are certified to the
                                highest local standards.</p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #5 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item">
                        <div class="fancybox__icon">
                            <i class="icon-target"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">Easy Payment Methods</h4>
                            <p class="fancybox__desc">You can make use the easy convenient payment options, listed below, that are
                                available in your country.</p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #6 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item">
                        <div class="fancybox__icon">
                            <i class="icon-telephone-1"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">24/7 Hours Support</h4>
                            <p class="fancybox__desc">We enhance our logistics operations by relieving you of the worries associated
                                with freight forwarding.</p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #7 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item">
                        <div class="fancybox__icon">
                            <i class="icon-delivery-delay"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">Fast & Efficient Delivery</h4>
                            <p class="fancybox__desc">We enhance our logistics operations by relieving you of the worries associated
                                with freight forwarding.</p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
                <!-- fancybox item #8 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="fancybox-item fancybox-item-custom">
                        <div class="fancybox__icon">
                            <i class="icon-stamp"></i>
                        </div><!-- /.fancybox-icon -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">Awards & Milestones</h4>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.fancybox Layout2 -->

    <!-- =====================
       Clients 1
    ======================== -->
    <section id="clients1" class="clients clients-1 border-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
                         data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
                        <div class="client">
                            <a href="#"><img src="{{ asset('assets/images/clients/9.png') }}" alt="client"></a>
                        </div><!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="{{ asset('assets/images/clients/10.png') }}" alt="client"></a>
                        </div><!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="{{ asset('assets/images/clients/11.png') }}" alt="client"></a>
                        </div><!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="{{ asset('assets/images/clients/12.png') }}" alt="client"></a>
                        </div><!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="{{ asset('assets/images/clients/13.png') }}" alt="client"></a>
                        </div><!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="{{ asset('assets/images/clients/11.png') }}" alt="client"></a>
                        </div><!-- /.client -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.clients 1 -->

    <!-- =========================
      Carousel Tabs
      =========================== -->
    <section id="carouselTabs" class="carousel-tabs pb-70">
        <div class="pricing-bg">
            <div class="bg-img bg-overlay"><img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="background"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle color-white">Latest Case Studies</span>
                        <h2 class="heading__title color-white">Featured Projects</h2>
                        <div class="divider__line divider__white divider__center"></div>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav class="nav nav-tabs nav-tabs-white">
                        <a class="nav__link active" data-toggle="tab" href="#tab1">ALL Works</a>
                        <a class="nav__link" data-toggle="tab" href="#tab2">Distribution</a>
                        <a class="nav__link" data-toggle="tab" href="#tab3">Warehousing</a>
                        <a class="nav__link" data-toggle="tab" href="#tab4">Optimization</a>
                        <a class="nav__link" data-toggle="tab" href="#tab5">Logistics</a>
                        <a class="nav__link" data-toggle="tab" href="#tab6">Analystics</a>
                    </nav>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                                 data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                                 data-loop="true" data-speed="800">
                                <!-- project item #1 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/1.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #2 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/2.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #3 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/3.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Logistics</a><a href="#">Analytics</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                                            spend by
                                            utilizing an extensive .</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #4 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/4.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane fade" id="tab2">
                            <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                                 data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                                 data-loop="true" data-speed="800">
                                <!-- project item #1 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/5.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #2 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/6.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #3 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/1.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Logistics</a><a href="#">Analytics</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                                            spend by
                                            utilizing an extensive .</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #4 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/4.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane fade" id="tab3">
                            <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                                 data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                                 data-loop="true" data-speed="800">
                                <!-- project item #1 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/4.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #2 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/6.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #3 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/1.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Logistics</a><a href="#">Analytics</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                                            spend by
                                            utilizing an extensive .</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #4 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/2.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane fade" id="tab4">
                            <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                                 data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                                 data-loop="true" data-speed="800">
                                <!-- project item #1 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/5.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #2 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/6.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #3 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/1.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Logistics</a><a href="#">Analytics</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                                            spend by
                                            utilizing an extensive .</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #4 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/4.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane fade" id="tab5">
                            <div class="projects-carousel-3  carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                                 data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                                 data-loop="true" data-speed="800">
                                <!-- project item #1 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/6.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #3 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/1.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Logistics</a><a href="#">Analytics</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                        <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall
                                            spend by
                                            utilizing an extensive .</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #4 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/4.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane fade" id="tab6">
                            <div class="projects-carousel-3 carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2"
                                 data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                                 data-loop="true" data-speed="800">
                                <!-- project item #1 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/3.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <!-- project item #2 -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/grid/6.jpg') }}" alt="project img">
                                        <a href="#" class="zoom__icon"></a>
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Warehousing</a><a href="#">Distribution</a>
                                        </div><!-- /.project-cat -->
                                        <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                        <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing
                                            and
                                            optimizing your supply chain performance.</p>
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Carousel Tabs  -->

    <!-- =========================
            Testimonial #2
    =========================  -->
    <section id="testimonial2" class="testimonial testimonial-2 text-center pt-0 pb-170">
        <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/2.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center">
                        <span class="heading__subtitle mb-0">Client’s Testimonials</span>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                    <div class="owl-carousel thumbs-carousel" data-slider-id="1" data-nav="false" data-dots="false">
                        <!-- Testimonial #1 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__content">
                                <p class="testimonial__desc">Cargo Base Logistics team is the best of the best, and expertly trained team members
                                    who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                                    innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                                    environment.</p>
                            </div><!-- /.testimonial-content -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__content">
                                <p class="testimonial__desc">Cargo Base Logistics team is the best of the best, and expertly trained team members
                                    who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                                    innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                                    environment.</p>
                            </div><!-- /.testimonial-content -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #3 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__content">
                                <p class="testimonial__desc">Cargo Base Logistics team is the best of the best, and expertly trained team members
                                    who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                                    innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                                    environment.</p>
                            </div><!-- /.testimonial-content -->
                        </div><!-- /. testimonial-item -->
                    </div>
                    <div class="owl-thumbs" data-slider-id="1">
                        <button class="owl-thumb-item">
                <span class="testimonial__meta">
                  <span class="testimonial__thumb">
                    <img src="{{ asset('assets/images/testimonials/thumbs/1.jpg') }}" alt="author thumb">
                  </span><!-- /.testimonial-thumb -->
                  <span class="testimonial__meta-title">Sami Wade</span>
                  <span class="testimonial__meta-desc">WhiteMov</span>
                </span><!-- /.testimonial-meta -->
                        </button>
                        <button class="owl-thumb-item">
                <span class="testimonial__meta">
                  <span class="testimonial__thumb">
                    <img src="{{ asset('assets/images/testimonials/thumbs/2.jpg') }}" alt="author thumb">
                  </span><!-- /.testimonial-thumb -->
                  <span class="testimonial__meta-title">John Peter</span>
                  <span class="testimonial__meta-desc">Mov Inc</span>
                </span><!-- /.testimonial-meta -->
                        </button>
                        <button class="owl-thumb-item">
                <span class="testimonial__meta">
                  <span class="testimonial__thumb">
                    <img src="{{ asset('assets/images/testimonials/thumbs/1.jpg') }}" alt="author thumb">
                  </span><!-- /.testimonial-thumb -->
                  <span class="testimonial__meta-title">Martin Hope</span>
                  <span class="testimonial__meta-desc">ProMov</span>
                </span><!-- /.testimonial-meta -->
                        </button>
                    </div><!-- /.owl-thumbs -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonial2 -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section id="blogGrid" class="blog blog-grid pb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle">Insight and Trends</span>
                        <h2 class="heading__title">Recent Articles</h2>
                        <div class="divider__line divider__theme divider__center mb-0"></div>
                        <p class="heading__desc">Follow our latest news and thoughts which focuses exclusively on insight,
                            industry trends, top news headlines.</p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- Blog Item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/1.jpg') }}" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">
                                    <a href="#">Insights</a><a href="#">Management</a>
                                </div><!-- /.blog-meta-cat -->
                                <span class="blog__meta-date">Jan 20, 2019</span>
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#">Importers achieve cost savings through the First Sale rule!</a></h4>
                            <p class="blog__desc">The trade war currently ensuing between the US and several nations around the
                                globe, most fiercely with China, shows no signs of the first set of tariffs levied against solar...
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">Read More</a>
                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/2.jpg') }}" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">
                                    <a href="#">Warehousing</a><a href="#">Industry</a>
                                </div><!-- /.blog-meta-cat -->
                                <span class="blog__meta-date">Oct 18, 2019</span>
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#">Cargo flow through better supply chain visibility, control.</a></h4>
                            <p class="blog__desc">Global provider connected products for consumers, and enterprises worldwide,
                                supply chain control is everything, provide visibility and traceability needed for...</p>
                            <a href="#" class="btn btn__secondary btn__link">Read More</a>
                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
                <!-- Blog Item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog__img">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/3.jpg') }}" alt="blog image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <div class="blog__meta-cat">
                                    <a href="#">Logistics</a><a href="#">Distribution</a>
                                </div><!-- /.blog-meta-cat -->
                                <span class="blog__meta-date">Jan 20, 2019</span>
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#">Importance of specialized focus in Projects, Oil & Gas
                                    Logistics?</a></h4>
                            <p class="blog__desc">Our team provides highly skilled & experienced project managers who know the
                                intricacies of this vertical and focus on providing innovative solutions in Oil & Gas sector...</p>
                            <a href="#" class="btn btn__secondary btn__link">Read More</a>
                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <!-- =========================
            cta 1
    =========================  -->
    <section id="cta1" class="cta cta-1 border-top pt-40 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="contact-panel contact-panel-2">
                        <div class="contact__panel-header d-flex align-items-center">
                            <i class="icon-placeholder"></i>
                            <h4 class="contact__panel-title">Global Locations</h4>
                        </div>
                        <div id="accordion">
                            <div class="accordion-item">
                                <div class="accordion__item-header opened" data-toggle="collapse" data-target="#collapse1">
                                    <a class="accordion__item-title" href="#">London Office</a>
                                </div><!-- /.accordion-item-header -->
                                <div id="collapse1" class="collapse  show" data-parent="#accordion">
                                    <div class="accordion__item-body">
                                        <ul class="contact__list list-unstyled">
                                            <li>002 010123456789</li>
                                            <li>Email: Cargo Base Logistics@7oroof.com</li>
                                            <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                                            <li>Hours: Mon-Fri: 8am – 7pm</li>
                                        </ul>
                                    </div><!-- /.accordion-item-body -->
                                </div>
                            </div><!-- /.accordion-item -->
                            <div class="accordion-item">
                                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                                    <a class="accordion__item-title" href="#">Berlin Office</a>
                                </div><!-- /.accordion-item-header -->
                                <div id="collapse2" class="collapse" data-parent="#accordion">
                                    <div class="accordion__item-body">
                                        <ul class="contact__list list-unstyled">
                                            <li>002 010123456789</li>
                                            <li>Email: Cargo Base Logistics@7oroof.com</li>
                                            <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                                            <li>Hours: Mon-Fri: 8am – 7pm</li>
                                        </ul>
                                    </div><!-- /.accordion-item-body -->
                                </div>
                            </div><!-- /.accordion-item -->
                            <div class="accordion-item">
                                <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                                    <a class="accordion__item-title" href="#">Manchester Office</a>
                                </div><!-- /.accordion-item-header -->
                                <div id="collapse3" class="collapse" data-parent="#accordion">
                                    <div class="accordion__item-body">
                                        <ul class="contact__list list-unstyled">
                                            <li>002 010123456789</li>
                                            <li>Email: Cargo Base Logistics@7oroof.com</li>
                                            <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                                            <li>Hours: Mon-Fri: 8am – 7pm</li>
                                        </ul>
                                    </div><!-- /.accordion-item-body -->
                                </div>
                            </div><!-- /.accordion-item -->
                        </div>
                    </div><!-- /.contact-panel -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-3 text-right">
                    <h2 class="cta__title">Sign up for industry news and insights from Cargo Base Logistics.</h2>
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <form>
                        <div class="form-group d-flex">
                            <input type="text" class="form-control mr-30" placeholder="Your Email Address">
                            <button class="btn btn__primary btn__hover3">Sign Up!</button>
                        </div>
                    </form>
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta1 -->

    <!-- =========================
            Google Map
    =========================  -->
    <section id="googleMap" class="google-map p-0">
        <div id="map"></div>
        <script src="{{ asset('assets/js/google-map.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&amp;callback=initMap"
                async defer></script>
    </section><!-- /.GoogleMap -->

    <!-- ========================
      Footer
    ========================== -->
    <footer id="footer" class="footer footer-1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-about">
                        <div class="footer__widget-content">
                            <img src="{{ asset('cargobase_logistics_png.png') }}" alt="logo" class="mb-30">
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                        <h6 class="footer__widget-title">Who We Are</h6>
                        <div class="footer__widget-content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Meet Our Team</a></li>
                                    <li><a href="#">News & Media</a></li>
                                    <li><a href="#">Case Studies</a></li>
                                    <li><a href="#">Contacts</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </nav>
                        </div><!-- /.footer-widget-content -->
                    </div><!-- /.col-lg-2 -->
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                        <h6 class="footer__widget-title">What We Do</h6>
                        <div class="footer__widget-content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="#">Warehousing</a></li>
                                    <li><a href="#">Air Freight</a></li>
                                    <li><a href="#">Ocean Freight</a></li>
                                    <li><a href="#">Road Freight</a></li>
                                    <li><a href="#">Supply Chain</a></li>
                                    <li><a href="#">Packaging</a></li>
                                </ul>
                            </nav>
                        </div><!-- /.footer-widget-content -->
                    </div><!-- /.col-lg-2 -->
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                        <h6 class="footer__widget-title">Who We Serve</h6>
                        <div class="footer__widget-content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="#">Retail & Consumer</a></li>
                                    <li><a href="#">Sciences & Healthcare</a></li>
                                    <li><a href="#">Industrial & Chemical</a></li>
                                    <li><a href="#">Power Generation</a></li>
                                    <li><a href="#">Food & Beverage</a></li>
                                    <li><a href="#">Oil & Gas</a></li>
                                </ul>
                            </nav>
                        </div><!-- /.footer-widget-content -->
                    </div><!-- /.col-lg-2 -->
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                        <h6 class="footer__widget-title">Quick Links</h6>
                        <div class="footer__widget-content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="#">Request A Quote</a></li>
                                    <li><a href="#">Track & Trace</a></li>
                                    <li><a href="#">Find A Location</a></li>
                                    <li><a href="#">Global Agents</a></li>
                                    <li><a href="#">Help & FAQ</a></li>
                                </ul>
                            </nav>
                        </div><!-- /.footer-widget-content -->
                    </div><!-- /.col-lg-2 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->
        <div class="container">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="footer__copyright">
                            <nav>
                                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap">
                                    <li><a href="#">Terms & Conditions </a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </nav>
                            <span>&copy; 2019 Cargo Base Logistics</span>
                        </div><!-- /.Footer-copyright -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center">
                        <div class="social__icons justify-content-end w-100">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div><!-- /.social-icons -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.Footer-bottom -->
        </div><!-- /.container -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

    <div class="module__search-container">
        <i class="fa fa-times close-search"></i>
        <form class="module__search-form">
            <input type="text" class="search__input" placeholder="Search Here">
            <button class="module__search-btn"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- /.module-search-container -->

</div><!-- /.wrapper -->

<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>


</html>
