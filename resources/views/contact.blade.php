@extends('layouts.main')

@section('title')
    Contact us
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
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/5.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Contact</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section id="contact1" class="contact text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle">Get In Touch</span>
                        <h2 class="heading__title">Contact Us</h2>
                        <div class="divider__line divider__theme divider__center mb-0"></div>
                        <p class="heading__desc">We understand the importance of approaching each work integrally and believe in
                            the power of simple and easy communication.</p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <form>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Name"></div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><input type="email" class="form-control" placeholder="Email"></div>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Phone"></div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Company"></div>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Request Details"></textarea>
                                </div>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn btn__secondary btn__hover3">Submit Request</button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- =========================
            Google Map
    =========================  -->
    <section id="googleMap" class="google-map p-0">
        <div id="map"></div>
        <script src="{{ asset('assets/js/google-map.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&amp;callback=initMap"
                async defer></script>
    </section><!-- /.GoogleMap -->

    <!-- ==========================
       Contact panels
    ============================ -->
    <section id="contactPanels" class="contact-panels text-center pb-70">
        <div class="container">
            <div class="row">

                <!-- Contact panel #1 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="contact-panel">
                        <div class="contact__panel-header">
                            <h4 class="contact__panel-title">USA Office</h4>
                        </div>
                        <ul class="contact__list list-unstyled">
                            <li>+1 305-307-1470</li>
                            <li>Email: info@cargobaselogistics.com</li>
                            <li>Address: 34u Brooklyn, NY</li>
                            <li>Hours: Mon-Fri: 8am – 7pm</li>
                        </ul>
                    </div><!-- /.contact-panel -->
                </div><!-- /.col-lg-4 -->

                <!-- Contact panel #2 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="contact-panel">
                        <div class="contact__panel-header">
                            <h4 class="contact__panel-title">UK Office</h4>
                        </div>
                        <ul class="contact__list list-unstyled">
                            <li>+44 7520647634</li>
                            <li>Email: info@cargobaselogistics.com</li>
                            <li>Address: 2307 Beverley Rd Manchester</li>
                            <li>Hours: Mon-Fri: 8am – 7pm</li>
                        </ul>
                    </div><!-- /.contact-panel -->
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /. Contact panels -->


@endsection
