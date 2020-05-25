<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Softlink Express Delivery ">
    <link href="{{ asset('softlinkexpress_logoonly.png') }}" rel="icon">

    <title> @yield('title') - Softlink Express Delivery </title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:400,700%7cWork+Sans:400,600,700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    @yield('top-assets')
</head>

<body>
<div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    @yield('header')

    @yield('contents')

    <!-- ========================
      Footer
    ========================== -->
    <footer id="footer" class="footer footer-1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-about">
                        <div class="footer__widget-content">
                            <img width="200" src="{{ asset('softlinkexpress_logo.png') }}" alt="logo" class="mb-30">
                        </div>
                    </div><!-- /.col-lg-4 -->

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
                                    <li><a href="">Retail & Consumer</a></li>
                                    <li><a href="">Sciences & Healthcare</a></li>
                                    <li><a href="">Industrial & Chemical</a></li>
                                    <li><a href="">Power Generation</a></li>
                                    <li><a href="">Food & Beverage</a></li>
                                    <li><a href="">Oil & Gas</a></li>
                                </ul>
                            </nav>
                        </div><!-- /.footer-widget-content -->
                    </div><!-- /.col-lg-2 -->

                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                        <h6 class="footer__widget-title">Contacts</h6>
                        <div class="footer__widget-content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="">+1 305-307-1470</a></li>
                                    <li><a href="">+44 7520647634</a></li>
                                    <li><a href="">info@softlinkexpress.com</a></li>
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
                                    <li><a href="#">Sitemap</a></li>
                                </ul>
                            </nav>
                            <span>&copy; {{ date('Y') }} Softlink Express Delivery</span>
                        </div><!-- /.Footer-copyright -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center">
                        <div class="social__icons justify-content-end w-100">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div><!-- /.social-icons -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.Footer-bottom -->
        </div><!-- /.container -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

</div><!-- /.wrapper -->

<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>


</html>
