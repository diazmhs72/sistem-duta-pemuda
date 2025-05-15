@extends('layouts.app')
@extends('layouts.preload')
@section('title', 'Home page')
@section('content')

    @font-face {
    font-family: 'Digital7';
    src: url('fonts/digital-7.ttf') format('truetype');
    }

    <style>
        body {
            background: #f0f4f8;
            font-family: 'Orbitron', sans-serif;
        }

        .countdown-card {
            background: linear-gradient(135deg, #3a8dff, #6ca7ff);
            border-radius: .75rem;
            padding: 2.5rem 4rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .countdown-unit {
            text-align: center;
            color: #fff;
        }

        .countdown-unit .value {
            font-size: 5rem;
            font-family: 'Digital7', monospace;
            letter-spacing: .1rem;
            display: block;
            text-align: center;
            line-height: 1;
        }

        .countdown-unit .label {
            font-size: 1rem;
            margin-top: 0.5rem;
            text-transform: uppercase;
            letter-spacing: .05rem;
            display: block;
            text-align: center;
            line-height: 1.2;
        }

        .separator {
            font-size: 5rem;
            /* Sesuaikan dengan .value */
            line-height: 1;
            position: relative;
            top: -10px;
            /* Naikkan separator ke atas */
            color: #fff
        }
    </style>

    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image: url('img/slider.png')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>
                                    SELEKSI PPAN & PPAP TINGKAT KOTA TANGERANG SELATAN TAHUN
                                    2025
                                </h1>
                                <p><a href="#">Info Selengkapnya >></a></p>
                                <div class="button">
                                    <a href="{{ route('kategori') }}" class="btn">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image: url('img/slider2.png')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>
                                    SELEKSI PPAN & PPAP TINGKAT KOTA TANGERANG SELATAN TAHUN
                                    2025
                                </h1>
                                <p><a href="#">Info Selengkapnya >></a></p>
                                <div class="button">
                                    <a href="{{ route('kategori') }}" class="btn">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image: url('img/slider3.png')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>
                                    SELEKSI PPAN & PPAP TINGKAT KOTA TANGERANG SELATAN TAHUN
                                    2025
                                </h1>
                                <p><a href="#">Info Selengkapnya >></a></p>
                                <div class="button">
                                    <a href="{{ route('kategori') }}" class="btn">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Start Schedule Area -->
    <section class="schedule">
        <div class="container">
            <div class="schedule-inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule first">
                            <div class="">
                                <img src="img\pp.png" style="width: 100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule middle">
                            <div class="">
                                <img src="img\ppap.png" style="width: 100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- single-schedule -->
                        <div class="single-schedule last">
                            <div class="">
                                <img src="img\ppan.png" style="width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/End Start schedule Area -->

    <!-- Start countdown -->
    <section class="Feautes section" style="background-color: #ffffff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sisa Waktu Pendaftaran</h2>
                        {{-- <img src="img/section-img.png" alt="#" /> --}}
                        {{-- <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit praesent
                            aliquet. pretiumts
                        </p> --}}
                        <div class="d-flex justify-content-center align-items-center vh-100">
                            <div class="countdown-card d-flex align-items-center">
                                <div class="countdown-unit">
                                    <div id="days" class="value">0</div>
                                    <div class="label">Hari</div>
                                </div>
                                <div class="separator mx-3">:</div>
                                <div class="countdown-unit">
                                    <div id="hours" class="value">00</div>
                                    <div class="label">Jam</div>
                                </div>
                                <div class="separator mx-3">:</div>
                                <div class="countdown-unit">
                                    <div id="minutes" class="value">00</div>
                                    <div class="label">Menit</div>
                                </div>
                                <div class="separator mx-3">:</div>
                                <div class="countdown-unit">
                                    <div id="seconds" class="value">00</div>
                                    <div class="label">Detik</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="section" style="border-radius: 30px; backgrund-color: blue">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Start Single Fun -->
                            <div class="single-fun">
                                <i class="icofont icofont-home"></i>
                                <div class="content">
                                    <span class="counter">3468</span>
                                    <p>Hospital Rooms</p>
                                </div>
                            </div>
                            <!-- End Single Fun -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Start Single Fun -->
                            <div class="single-fun">
                                <i class="icofont icofont-user-alt-3"></i>
                                <div class="content">
                                    <span class="counter">557</span>
                                    <p>Specialist Doctors</p>
                                </div>
                            </div>
                            <!-- End Single Fun -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Start Single Fun -->
                            <div class="single-fun">
                                <i class="icofont-simple-smile"></i>
                                <div class="content">
                                    <span class="counter">4379</span>
                                    <p>Happy Patients</p>
                                </div>
                            </div>
                            <!-- End Single Fun -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Start Single Fun -->
                            <div class="single-fun">
                                <i class="icofont icofont-table"></i>
                                <div class="content">
                                    <span class="counter">32</span>
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                            <!-- End Single Fun -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End countdown -->

    <!-- Start selection flow -->
    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-home"></i>
                        <div class="content">
                            <span class="counter">3468</span>
                            <p>Hospital Rooms</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-user-alt-3"></i>
                        <div class="content">
                            <span class="counter">557</span>
                            <p>Specialist Doctors</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-simple-smile"></i>
                        <div class="content">
                            <span class="counter">4379</span>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-table"></i>
                        <div class="content">
                            <span class="counter">32</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End selection flow -->

    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Keep up with Our Most Recent Medical News.</h2>
                        <img src="img/section-img.png" alt="#" />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit praesent
                            aliquet. pretiumts
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/blog1.jpg" alt="#" />
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">22 Aug, 2020</div>
                                <h2>
                                    <a href="blog-single.html">We have annnocuced our new product.</a>
                                </h2>
                                <p class="text">
                                    Lorem ipsum dolor a sit ameti, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt sed do incididunt sed.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/blog2.jpg" alt="#" />
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">15 Jul, 2020</div>
                                <h2>
                                    <a href="blog-single.html">Top five way for solving teeth problems.</a>
                                </h2>
                                <p class="text">
                                    Lorem ipsum dolor a sit ameti, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt sed do incididunt sed.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/blog3.jpg" alt="#" />
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">05 Jan, 2020</div>
                                <h2>
                                    <a href="blog-single.html">We provide highly business soliutions.</a>
                                </h2>
                                <p class="text">
                                    Lorem ipsum dolor a sit ameti, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt sed do incididunt sed.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

@endsection