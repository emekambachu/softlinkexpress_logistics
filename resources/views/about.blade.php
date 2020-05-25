@extends('layouts.main')

@section('title')
    About us
@endsection

@section('header')
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
                        <li><i class="icon-phone"></i><span>+1 305-307-1470</span></li>
                        <li><i class="icon-phone"></i><span>+44 7520647634</span></li>
                        <li>
                            <div class="dropdown bg-white">
                                <div id="google_translate_element"></div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="btn btn__primary btn__hover3"><i class="icon-list"></i>
                                <span>Track Shipment</span></a>
                        </li>
                    </ul>
                </div><!-- /.header-top-right -->

                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav__item">
                            <a href="{{ url('/') }}" class="nav__item-link">Home</a>
                        </li><!-- /.nav-item -->

                        <li class="nav__item">
                            <a href="{{ url('about') }}" class="nav__item-link">About</a>
                        </li><!-- /.nav-item -->

                        <li class="nav__item">
                            <a href="{{ url('services') }}" class="nav__item-link">Services</a>
                        </li><!-- /.nav-item -->

                        <li class="nav__item">
                            <a href="{{ url('signup') }}" class="nav__item-link">Sign up</a>
                        </li><!-- /.nav-item -->

                        <li class="nav__item">
                            <a href="{{ url('track-shipment') }}" class="nav__item-link">Track Shipment</a>
                        </li><!-- /.nav-item -->

                        <li class="nav__item">
                            <a href="{{ url('contact') }}" class="nav__item-link">Contact Us</a>
                        </li><!-- /.nav-item -->

                    </ul><!-- /.navbar-nav -->
                </div><!-- /.navbar-collapse -->

            </div><!-- /.container -->
        </nav><!-- /.navabr -->
    </header>
@endsection

@section('contents')

    <!-- ========================
       page title
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/14.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">About Us</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
  About 2
=========================== -->
    <section id="about2" class="about about-2 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-5">
                    <div class="about__img mb-60">
                        <img src="{{ asset('assets/images/about/2.jpg') }}" alt="about img" class="img-fluid">
                    </div><!-- /.about-img -->
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="row heading heading-2">
                        <div class="col-sm-12 col-md-12 col-sm-12">
                            <h2 class="heading__title">Safe, Reliable And Express Logistic & Transport Solutions
                                That Saves Your
                                Time!</h2>
                        </div><!-- /.col-lg-12 -->
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <p class="heading__desc mb-30">Softlink Express Delivery is a representative logistics operator providing full range of service in the sphere of customs clearance and transport worldwide for any type of cargo.</p>
                            <p>We pride ourselves on providing the best transport and shipping services available allover the
                                world. Our skilled personnel, utilising the latest communications, tracking and processing software,
                                combined with decades of experience! Through integrated supply chain solutions, Softlink Express Delivery drives
                                sustainable competitive advantages to some of Australia's largest companies.</p>
                            <img src="{{ asset('assets/images/about/singnture.png') }}" alt="singnture" class="signature mb-30">
                        </div><!-- /.col-lg-7 -->
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
                    </div><!-- /.row -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About 2 -->

    <!-- =====================
       Clients 1
    ======================== -->
    <section id="clients" class="clients clients-1 border-top">
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

    <!-- ======================
           banner 1
      ========================= -->
    <section id="banner1" class="banner banner-1 video fancybox-layout2 p-0 bg-theme">
        <div class="container-fluid col-padding-0">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 equal-height">
                    <div class="inner-padding">
                        <div class="heading heading-2 mb-50">
                            <h2 class="heading__title color-white">Logistic & Transport Solutions Saves Your Time!</h2>
                            <p class="heading__desc color-white">Softlink Express Delivery is a representative logistics operator providing full
                                range of service in the sphere of customs clearance and transportation worldwide for any type of
                                cargo. </p>
                        </div><!-- /.heading -->
                        <div class="row">
                            <!-- fancybox item #1 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="fancybox-item">
                                    <div class="fancybox__icon">
                                        <i class="icon-credit-cards"></i>
                                    </div><!-- /.fancybox-icon -->
                                    <div class="fancybox__content">
                                        <h4 class="fancybox__title">Transparent Pricing</h4>
                                        <p class="fancybox__desc">The world of international supply chains involves a myriad of unknown
                                            risks
                                            and challenging regulations.</p>
                                    </div><!-- /.fancybox-content -->
                                </div><!-- /.fancybox-item -->
                            </div><!-- /.col-lg-3 -->
                            <!-- fancybox item #2 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
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
                        </div><!-- /.row -->
                        <a href="request-quote.html" class="btn  btn__white btn__hover2 btn__lg">Schedule An Appointment</a>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="bg-overlay">
                        <div class="bg-img"><img src="{{ asset('assets/images/video/2.jpg') }}" alt="background"></div>
                        <div class="video__btn video__btn-white align-v-h equal-height">
                            <a class="popup-video" href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk">
                                <span class="video__player-animation"></span>
                                <div class="video__player">
                                    <i class="fa fa-play"></i>
                                </div>
                            </a>
                        </div>
                    </div><!-- /.video -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.banner 1 -->
@endsection
