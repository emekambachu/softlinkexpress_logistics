@extends('layouts.main')

@section('title')
    Shipment History
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
                    <h5 class="pagetitle__heading">Shipment History</h5>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section id="trackShipmeent" class="track-shipmeent" style="padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">

                    <table class="table table-dark">
                        <tbody>
                        <tr>
                            <td><strong>Recipient Name:</strong> {{ $shipment->user->name }} </td>
                            <td><strong>Recipient Email:</strong> {{ $shipment->user->email }}</td>
                            <td><strong>Recipient Mobile:</strong> {{ $shipment->user->mobile }}</td>
                        </tr>
                        <tr>
                            <td><strong>Parcel Name:</strong> {{ $shipment->parcel->name }} </td>
                            <td><strong>Parcel Weight:</strong> {{ $shipment->parcel->weight }}</td>
                            <td><strong>Parcel Description:</strong> {{ $shipment->parcel->description }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tracking ID:</strong> {{ $shipment->tracking_id }}</td>
                            <td><strong>Shipment Origin:</strong> {{ $shipment->origin }}</td>
                            <td><strong>Shipment Destination:</strong> {{ $shipment->destination }}</td>
                        </tr>
                        <tr>
                            <td><strong>Shipment Date:</strong> {{date('jS \of F Y', strtotime($shipment->created_at))}}</td>
                            <td><strong>Last Shipment Date:</strong>
                                @if(!empty($lastCheckpoint->created_at))
                                {{date('jS \of F Y', strtotime($lastCheckpoint->created_at))}}
                                @else
                                    <i>Awaiting Shipment</i>
                                @endif
                            </td>
                            <td><strong>Last Location:</strong>
                                @if(!empty($lastCheckpoint->location))
                                    {{$lastCheckpoint->location}}
                                @else
                                   <i>Awaiting Shipment</i>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Status</th>
                            <th scope="col">Location</th>
                            <th scope="col">Date</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if($checkpoints)
                            @foreach($checkpoints as $checkpoint)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $checkpoint->status }}</td>
                                    <td>{{ $checkpoint->location }}</td>
                                    <td>{{date('jS \of F Y', strtotime($checkpoint->created_at))}}</td>
                                </tr>
                            @endforeach
                        @else
                            <p>Awaiting Shipment</p>
                        @endif
                        </tbody>
                    </table>


                </div><!-- /.col-lg-8 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection
