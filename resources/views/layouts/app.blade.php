<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="" />
    <meta name="copyright" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="{{ asset('css/icofont.css') }}" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}" />
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/form.css') }}" />

    @stack('styles')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Get Pro Button -->
    <ul class="pro-features">
        <a class="get-pro" href="#">Get Pro</a>
        <li class="big-title">Pro Version Available on Themeforest</li>
        <li class="title">Pro Version Features</li>
        <li>2+ premade home pages</li>
        <li>20+ html pages</li>
        <li>Color Plate With 12+ Colors</li>
        <li>Sticky Header / Sticky Filters</li>
        <li>Working Contact Form With Google Map</li>
        <div class="button">
            <a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879"
                target="_blank" class="btn">Pro Version Demo</a>
            <a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank"
                class="btn">Buy Pro Version</a>
        </div>
    </ul>

    <!-- Header Area -->
    <header class="header">
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" width="65%"
                                        alt="#" /></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="{{ request()->is('/') ? 'active' : '' }}">
                                            <a href="{{ route('home') }}">Beranda</a>
                                        </li>
                                        <li class="{{ request()->is('doctors*') ? 'active' : '' }}">
                                            <a href="#">Kategori</a>
                                        </li>
                                        <li class="{{ request()->is('services*') ? 'active' : '' }}">
                                            <a href="#">Alur seleksi</a>
                                        </li>
                                        <li class="{{ request()->is('pages*') ? 'active' : '' }}">
                                            <a href="#">Berita</a>
                                        </li>
                                        {{-- <li class="{{ request()->is('blogs*') ? 'active' : '' }}">
                                            <a href="#">Blogs</a>
                                        </li>
                                        <li class="{{ request()->is('contact*') ? 'active' : '' }}">
                                            <a href="#">Contact Us</a>
                                        </li> --}}
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a href="{{ route('login') }}" class="btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- Main Content -->
    @yield('content')
    <!-- End Main Content -->

    <!-- Footer Area -->
    <footer id="footer" class="footer">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>About Us</h2>
                            <p>
                                Lorem ipsum dolor sit am consectetur adipisicing elit do
                                eiusmod tempor incididunt ut labore dolore magna.
                            </p>
                            <!-- Social -->
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-vimeo"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-pinterest"></i></a>
                                </li>
                            </ul>
                            <!-- End Social -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Quick Links</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Home</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>About Us</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Services</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our
                                                Cases</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Other
                                                Links</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Consuling</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Finance</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Testimonials</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>FAQ</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Contact
                                                Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Open Hours</h2>
                            <p>
                                Lorem ipsum dolor sit ame consectetur adipisicing elit do
                                eiusmod tempor incididunt.
                            </p>
                            <ul class="time-sidual">
                                <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                                <li class="day">Saturday <span>9.00-18.30</span></li>
                                <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Newsletter</h2>
                            <p>
                                subscribe to our newsletter to get allour news in your inbox..
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            </p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="email" placeholder="Email Address" class="common-input"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                    required="" type="email" />
                                <button class="button">
                                    <i class="icofont icofont-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="copyright-content">
                            <p>
                                © Copyright 2018 | All Rights Reserved by
                                <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jQuery Min JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jQuery Migrate JS -->
    <script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
    <!-- jQuery UI JS -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('js/easing.js') }}"></script>
    <!-- Color JS -->
    <script src="{{ asset('js/colors.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <!-- jQuery Nav JS -->
    <script src="{{ asset('js/jquery.nav.js') }}"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('js/slicknav.min.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- Niceselect JS -->
    <script src="{{ asset('js/niceselect.js') }}"></script>
    <!-- Tilt jQuery JS -->
    <script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <!-- CounterUp JS -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Steller JS -->
    <script src="{{ asset('js/steller.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#btn-lanjut').click(function() {
                if (!$('#agreeTerms').is(':checked')) {
                    $('#alert-warning').removeClass('d-none');
                } else {
                    $('#alert-warning').addClass('d-none');
                    $('#wizard-step-1').hide();
                    $('#wizard-step-2').show();
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                }
            });

            $('#myForm').on('submit', function(event) {
                event.preventDefault();

                let form = this;
                const checkBox = document.getElementById("invalidCheck");
                let isValid = form.checkValidity();

                // Tampilkan alert jika form tidak valid atau checkbox tidak dicentang
                if (!isValid || !checkBox.checked) {
                    $('#alert-warning-2').removeClass('d-none');
                } else {
                    $('#alert-warning-2').addClass('d-none');
                }

                // Jika checkbox tidak dicentang, tambahkan pesan khusus
                if (!checkBox.checked) {
                    $('#alert-warning-2').text("Silakan centang kotak persetujuan dan lengkapi data Anda.");
                } else if (!isValid) {
                    $('#alert-warning-2').text("Silakan lengkapi data Anda.");
                }

                if (isValid && checkBox.checked) {
                    form.submit();
                } else {
                    form.classList.add('was-validated');
                }
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
