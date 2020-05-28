@extends('layouts.main')

@section('title')
    Get Tracking Code
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
                            <a href="{{ url('track-shipment') }}" class="btn btn__primary btn__hover3"><i class="icon-list"></i>
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
    <section id="page-title" class="page-title bg-overlay bg-parallax" style="padding: 150px 0;">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/13.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h5 class="pagetitle__heading">Track Your Shipment</h5>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section id="trackShipmeent" class="track-shipmeent">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar sidebar-layout2 mb-30">

                        <div class="widget widget-help bg-theme">
                            <div class="widget__content">
                                <h5>How Can <br> We Help You!</h5>
                                <p>We understand the importance approaching each work integrally and believe in the power of simple
                                    and easy communication.</p>
                                <a href="{{ url('contact') }}" class="btn btn__secondary btn__hover2"><i class="fa fa-envelope"></i>Contact Us</a>
                            </div><!-- /.widget-download -->
                        </div><!-- /.widget-help -->

                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-12 col-md-12 col-lg-8">

                    @include('includes.alerts')

                    <form method="post" action="{{ url('track-shipment') }}" class="request-quote-form">
                        @csrf
                        <div class="row mb-30">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <p class="fz-16 mb-45">Track Shipment using your Tracking ID.</p>
                            </div><!-- /.col-lg-12 -->

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>Tracking ID</label>
                                    <div class="form-group">
                                        <input type="text" name="tracking_id" class="form-control" placeholder="Your Parcel Tracking ID">
                                    </div>
                                </div>
                            </div><!-- /.col-lg-12 -->

                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn btn__secondary btn__block">Track your Parcel</button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.col-lg-8 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection
