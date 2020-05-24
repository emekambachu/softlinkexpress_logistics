@extends('layouts.main')

@section('title')
    Get Tracking Code
@endsection

@section('contents')

    <section id="page-title" class="page-title bg-overlay bg-parallax bg-img" style="background-image: url(&quot;{{ asset('assets/images/page-titles/14.jpg') }}&quot;); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Get Tracking ID</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section id="trackShipmeent" class="track-shipmeent">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar sidebar-layout2 mb-30">
                        <div class="widget widget-categories widget-categories-2">
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="">Warehousing</a></li>
                                    <li><a href="">Air Freight</a></li>
                                    <li><a href="">Ocean Freight</a></li>
                                    <li><a href="">Road Freight</a></li>
                                    <li><a href="">Supply Chain</a></li>
                                    <li><a href="">Packaging</a></li>
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-categories -->

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
                                <p class="fz-16 mb-45">Track Shipment with your Tracking ID.</p>
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
