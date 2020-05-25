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
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/12.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Services</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section id="services" class="services  bg-gray pb-70">
        <div class="container">
            <div class="row heading  mb-40">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <span class="heading__subtitle">Services We Offer</span>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <h2 class="heading__title">We Manage Lead Logistics For World’s Multinational Companies.</h2>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
                    <p class="heading__desc">Our global logistics expertise, advanced supply chain technology &amp; customized
                        logistics solutions will help you analyze, develop and implement successful supply chain management
                        strategies.</p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/1.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__overlay">
                            <div class="service__icon"><i class="icon-airplane"></i></div>
                            <h4 class="service__title">Air Freight</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/2.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__overlay">
                            <div class="service__icon"><i class="icon-ship"></i></div>
                            <h4 class="service__title">Ocean Freight</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/3.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__overlay">
                            <div class="service__icon"><i class="icon-truck"></i></div>
                            <h4 class="service__title">Road Freight</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/4.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__overlay">
                            <div class="service__icon"><i class="icon-elevator"></i></div>
                            <h4 class="service__title">Warehousing</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/5.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__overlay">
                            <div class="service__icon"><i class="icon-conveyor"></i></div>
                            <h4 class="service__title">Supply Chain</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/6.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__overlay">
                            <div class="service__icon"><i class="icon-open-box"></i></div>
                            <h4 class="service__title">Packaging</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- ===========================
      fancybox Layout2
    ============================= -->
    <section id="fancyboxLayout2" class="fancybox-layout2 pb-60">
        <div class="container">
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
    <section id="testimonial2" class="testimonial testimonial-2 text-center  pt-0 pb-170">
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
                    <div class=" owl-carousel thumbs-carousel" data-slider-id="1" data-nav="false" data-dots="false">

                        <!-- Testimonial #1 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__content">
                                <p class="testimonial__desc">Softlink Express Delivery team is the best of the best, and expertly trained team members
                                    who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                                    innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                                    environment.</p>
                            </div><!-- /.testimonial-content -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__content">
                                <p class="testimonial__desc">Softlink Express Delivery team is the best of the best, and expertly trained team members
                                    who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver
                                    innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global
                                    environment.</p>
                            </div><!-- /.testimonial-content -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #3 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__content">
                                <p class="testimonial__desc">Softlink Express Delivery team is the best of the best, and expertly trained team members
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
@endsection
