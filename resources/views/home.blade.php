@extends('layouts.main')

@section('title')
    Home
    @endsection

@section('header')
<header id="header" class="header header-white">

    <div align="center" id="google_translate_element"></div>

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
                    <li><i class="icon-phone"></i><span>(917)410-3503</span></li>
                    <li><i class="icon-phone"></i><span>+44 7520647634</span></li>
                    <li>
                        <div class="dropdown">
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
</header><!-- /.Header -->
@endsection

@section('contents')
    <!-- ============================
        Slider
    ============================== -->
    <section id="slider2" class="slider slider-2">
        <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1"
             data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true"
             data-speed="3000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="{{ asset('assets/images/sliders/2.jpg') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="slide__content">
                                <h2 class="slide__title">Fast, Certified & Felxible Solutions.</h2>
                                <p class="slide__desc">Through integrated supply chain solutions, our drives sustainable competitive
                                    advantages to some of the largest companies allover the world.</p>
                                <a href="{{ url('services') }}" class="btn btn__primary mr-30">Our Services</a>
                                <a href="{{ url('about') }}" class="btn btn__white">About Us</a>
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
                                <h2 class="slide__title">Safe & Reliable Cargo Solutions!</h2>
                                <p class="slide__desc">Through integrated supply chain solutions, our drives sustainable competitive
                                    advantages to some of the largest companies allover the world.</p>
                                <a href="#" class="btn btn__white mr-40">Get Started</a>
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
                                <p class="slide__desc">Through integrated supply chain solutions, our drives sustainable competitive
                                    advantages to some of the largest companies allover the world.</p>
                                <a href="#" class="btn btn__white mr-40">Get Started</a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
        <div class="request__form d-none d-lg-block">
            <div class="request__form-header d-flex align-items-center">
                <i class="icon-box"></i>
                <h4 class="request__form-title">Track Your Parcel</h4>
            </div><!-- /.request-form-header -->

            <form method="post" action="{{ url('track-shipment') }}" class="request-quote-form">
                @csrf
                <div class="request__form-body">
                    @include('includes.alerts')
                    <p class="mb-30">Real-time, detailed progress as your shipment speeds through the network</p>
                    <div class="form-group mb-5">
                        <input type="text" name="tracking_id" class="form-control" placeholder="Tracking Number:" required>
                    </div>
                    <small class="d-block mb-30">* Enter tracking number.</small>
                    <button type="submit" class="btn btn__primary btn__hover3">Track Now!</button>
                </div><!-- /.request-form-body -->
            </form>

        </div><!-- /.request-form -->
    </section><!-- /.slider -->

    <!-- ========================
        Services layout 2
    =========================== -->
    <section id="servicesLayout2" class="services services-layout2 bg-gray pb-70">
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
        </div><!-- /.container -->
        <div class="container col-padding-0">
            <div class="row">

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/1.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><i class="icon-airplane"></i></div>
                            <h4 class="service__title">Air Freight</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                            <a href="#" class="btn btn__secondary btn__link btn__underlined">Read More</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/2.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><i class="icon-ship"></i></div>
                            <h4 class="service__title">Ocean Freight</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                            <a href="#" class="btn btn__secondary btn__link btn__underlined">Read More</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="service-item service-item-reversed">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/3.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><i class="icon-truck"></i></div>
                            <h4 class="service__title">Road Freight</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                            <a href="#" class="btn btn__secondary btn__link btn__underlined">Read More</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="service-item service-item-reversed">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/4.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><i class="icon-elevator"></i></div>
                            <h4 class="service__title">Warehousing</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                            <a href="#" class="btn btn__secondary btn__link btn__underlined">Read More</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->

                <div class="col-sm-6 col-md-6 col-lg-6  hidden-service">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/5.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><i class="icon-conveyor"></i></div>
                            <h4 class="service__title">Supply Chain</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                            <a href="#" class="btn btn__secondary btn__link btn__underlined">Read More</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->

                <div class="col-sm-6 col-md-6 col-lg-6 hidden-service">
                    <div class="service-item">
                        <div class="service__img">
                            <img src="{{ asset('assets/images/services/6.jpg') }}" alt="service" class="img-fluid">
                        </div><!-- /.service-img -->
                        <div class="service__content">
                            <div class="service__icon"><i class="icon-open-box"></i></div>
                            <h4 class="service__title">Packaging</h4>
                            <p class="service__desc">We have more than twenty years of experience. We’ve become expert in freight
                                transportation by air and all its related.</p>
                            <a href="#" class="btn btn__secondary btn__link btn__underlined">Read More</a>
                        </div>
                    </div><!-- /.service-item -->
                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <a href="#" class="btn btn__primary btn__hover3 mt-50 loadMoreServices">Explore Services</a>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Services layout 2 -->

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
                            <p class="heading__desc color-white">Softlink Express is a representative logistics operator providing full
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

    <!-- ===========================
      projects Carousel
    ============================= -->
    <section id="projectsCarousel" class="projects projects-carousel pt-130 pb-0">
        <div class="projects-bg">
            <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/1.jpg') }}" alt="background"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle color-white">Latest Case Studies</span>
                        <h2 class="heading__title color-white">Featured Projects</h2>
                        <div class="divider__line divider__white divider__center mb-0"></div>
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
                            <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                                 data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                                 data-speed="700">
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/1.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/2.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/1.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing
                                                and
                                                optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab -->
                        <div class="tab-pane fade" id="tab2">
                            <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                                 data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                                 data-speed="700">
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/6.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/4.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/2.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing
                                                and
                                                optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab -->
                        <div class="tab-pane fade" id="tab3">
                            <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                                 data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                                 data-speed="700">
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/3.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/4.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/5.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing
                                                and
                                                optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab -->
                        <div class="tab-pane fade" id="tab4">
                            <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                                 data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                                 data-speed="700">
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/6.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/3.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/2.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing
                                                and
                                                optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab -->
                        <div class="tab-pane fade" id="tab5">
                            <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                                 data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                                 data-speed="700">
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/5.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/2.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/6.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing
                                                and
                                                optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab -->
                        <div class="tab-pane fade" id="tab6">
                            <div class="carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="1" data-slide-sm="1"
                                 data-autoplay="false" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                                 data-speed="700">
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/6.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/3.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Warehouse On-Hand Inventory </a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing and optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                                <div class="project-item">
                                    <div class="project__img">
                                        <img src="{{ asset('assets/images/case-studies/carousel/2.jpg') }}" alt="project img" class="img-fluid">
                                    </div><!-- /.project-img -->
                                    <div class="project__content">
                                        <div class="project__cat">
                                            <a href="#">Analystics</a><a href="#">Optimization</a>
                                        </div><!-- /.project-cat -->
                                        <div class="project__content-inner">
                                            <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                            <p class="project__desc">We understand that data is the greatest asset when it comes to
                                                analyzing
                                                and
                                                optimizing your supply chain performance.</p>
                                            <a href="#" class="btn btn__primary btn__link">Read More</a>
                                        </div><!-- /.project-content-inner -->
                                    </div><!-- /.project-content -->
                                </div><!-- /.project-item -->
                            </div><!-- /.carousel -->
                        </div><!-- /.tab -->
                    </div><!-- /.tab-content -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.projects Carousel -->

    <!-- =========================
            Testimonial #1
    =========================  -->
    <section id="testimonial1" class="testimonial testimonial-1 pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel" data-slide="2" data-slide-md="2" data-slide-sm="1" data-autoplay="true"
                         data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
                        <!-- Testimonial #1 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__content">
                                <div class="testimonial__thumb">
                                    <img src="{{ asset('assets/images/testimonials/thumbs/1.jpg') }}" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonial-rating -->
                                <p class="testimonial__desc">“Softlink Express Delivery expertly trained team members who take the extra step and go the
                                    extra mile, all to fulfill our dedicated promise deliver innovative and solutions to our
                                    customers!”</p>
                            </div><!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <h5 class="testimonial__meta-title">John Peter</h5>
                                <p class="testimonial__meta-desc">John Peter</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__content">
                                <div class="testimonial__thumb">
                                    <img src="{{ asset('assets/images/testimonials/thumbs/2.jpg') }}" alt="author thumb">
                                </div><!-- /.testimonial-thumb -->
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonial-rating -->
                                <p class="testimonial__desc">“In my career, I’ve seen great companies serving logistics. But not to
                                    the point where you feel that comfort and trust that we get with Softlink Express Delivery Company In.”</p>
                            </div><!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <h5 class="testimonial__meta-title">Martin Hope</h5>
                                <p class="testimonial__meta-desc">ProMov</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                    </div>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonial1 -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section id="blogGrid" class="blog blog-grid blog-grid-layout2 pb-70 bg-gray">
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
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <!-- Blog Item #1 -->
                    <div class="blog-item blog-item-wide">
                        <div class="blog__img">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/grid/8.jpg') }}" alt="blog image">
                            </a>
                            <div class="blog__meta-cat">
                                <a href="#">Insights</a><a href="#">Management</a>
                            </div><!-- /.blog-meta-cat -->
                        </div><!-- /.entry-img -->
                        <div class="blog__content">
                            <div class="blog__meta">
                                <span class="blog__meta-date">Jan 20, 2019</span>
                            </div><!-- /.blog-meta -->
                            <h4 class="blog__title"><a href="#">Importers achieve cost savings through the First Sale rule!</a></h4>
                            <p class="blog__desc">The trade war currently ensuing between the US and several nations around the
                                globe, most fiercely with China, shows no signs of the first set of tariffs levied against solar. US
                                and several nations around the globe, most fiercely with China ...</p>
                            <a href="#" class="btn btn__secondary btn__link">Read More</a>
                        </div><!-- /.entry-content -->
                    </div><!-- /.blog-item -->
                </div><!-- /.col-xl-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <!-- Blog Item #2 -->
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/blog/grid/2.jpg') }}" alt="blog image">
                                    </a>
                                    <div class="blog__meta-cat">
                                        <a href="#">Warehousing</a><a href="#">Industry</a>
                                    </div><!-- /.blog-meta-cat -->
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <span class="blog__meta-date">Oct 18, 2019</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">Cargo flow through better supply chain visibility, control.</a>
                                    </h4>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <!-- Blog Item #3 -->
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/blog/grid/3.jpg') }}" alt="blog image">
                                    </a>
                                    <div class="blog__meta-cat">
                                        <a href="#">Logistics</a><a href="#">Distribution</a>
                                    </div><!-- /.blog-meta-cat -->
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <span class="blog__meta-date">Jan 20, 2019</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">Importance of specialized focus in Projects, Oil & Gas
                                            Logistics?</a></h4>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <!-- Blog Item #4 -->
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/blog/grid/1.jpg') }}" alt="blog image">
                                    </a>
                                    <div class="blog__meta-cat">
                                        <a href="#">Warehousing</a><a href="#">Industry</a>
                                    </div><!-- /.blog-meta-cat -->
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <span class="blog__meta-date">Oct 18, 2019</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">Cargo flow through better supply chain visibility, control.</a>
                                    </h4>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <!-- Blog Item #5 -->
                            <div class="blog-item">
                                <div class="blog__img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/blog/grid/7.jpg') }}" alt="blog image">
                                    </a>
                                    <div class="blog__meta-cat">
                                        <a href="#">Logistics</a><a href="#">Distribution</a>
                                    </div><!-- /.blog-meta-cat -->
                                </div><!-- /.entry-img -->
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <span class="blog__meta-date">Jan 20, 2019</span>
                                    </div><!-- /.blog-meta -->
                                    <h4 class="blog__title"><a href="#">Importance of specialized focus in Projects, Oil & Gas
                                            Logistics?</a></h4>
                                </div><!-- /.entry-content -->
                            </div><!-- /.blog-item -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.blog Grid -->
@endsection
