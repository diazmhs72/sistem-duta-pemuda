@extends('layouts.app')
@extends('layouts.preload')
@section('title', 'Home page')
@section('content')

    <style>
        @font-face {
            font-family: 'Digital7';
            src: url('fonts/digital-7.ttf') format('truetype');
        }

        body {
            background: #f0f4f8;
            font-family: 'Orbitron', sans-serif;
        }

        .countdown-card {
            background: linear-gradient(135deg, #3a8dff, #6ca7ff);
            border-radius: .75rem;
            padding: 2rem 3rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .countdown-unit .value {
            font-family: 'Digital7', monospace;
            font-size: 5rem;
            display: block;
            text-align: center;
            line-height: 1;
            letter-spacing: .1rem;
        }

        .countdown-unit .label {
            font-size: 1rem;
            display: block;
            text-align: center;
            margin-top: .5rem;
            letter-spacing: .05rem;
            text-transform: uppercase;
        }

        .separator {
            font-size: 5rem;
            line-height: 1;
            position: relative;
            top: -10px;
            color: #fff;
            margin: 0 .75rem;
        }

        .section-title {
            margin-top: 2rem;
            margin-bottom: 1.5rem;
        }

        .timer-title {
            color: #333;
            font-size: 1.25rem;
            margin-bottom: .75rem;
            text-align: center;
            font-weight: 600;
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
                        <!-- Countdown 1 -->
                        <div class="timer-title">Pemuda Pelopor</div>
                        <div class="d-flex justify-content-center">
                            <div class="countdown-card d-flex align-items-center">
                                <div class="countdown-unit text-white">
                                    <span id="days1" class="value">0</span>
                                    <span class="label">Hari</span>
                                </div>
                                <div class="separator">:</div>
                                <div class="countdown-unit text-white">
                                    <span id="hours1" class="value">00</span>
                                    <span class="label">Jam</span>
                                </div>
                                <div class="separator">:</div>
                                <div class="countdown-unit text-white">
                                    <span id="minutes1" class="value">00</span>
                                    <span class="label">Menit</span>
                                </div>
                                <div class="separator">:</div>
                                <div class="countdown-unit text-white">
                                    <span id="seconds1" class="value">00</span>
                                    <span class="label">Detik</span>
                                </div>
                            </div>
                        </div>

                        <!-- Countdown 2 -->
                        <div class="timer-title">PPAP dan PPAN</div>
                        <div class="d-flex justify-content-center">
                            <div class="countdown-card d-flex align-items-center">
                                <div class="countdown-unit text-white">
                                    <span id="days2" class="value">0</span>
                                    <span class="label">Hari</span>
                                </div>
                                <div class="separator">:</div>
                                <div class="countdown-unit text-white">
                                    <span id="hours2" class="value">00</span>
                                    <span class="label">Jam</span>
                                </div>
                                <div class="separator">:</div>
                                <div class="countdown-unit text-white">
                                    <span id="minutes2" class="value">00</span>
                                    <span class="label">Menit</span>
                                </div>
                                <div class="separator">:</div>
                                <div class="countdown-unit text-white">
                                    <span id="seconds2" class="value">00</span>
                                    <span class="label">Detik</span>
                                </div>
                            </div>
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
                        <i class="icofont icofont-ui-note"></i>
                        <div class="content">
                            <span>Pendaftaran</span>
                            <p>23 - 25 Desember 2025</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-pencil"></i>
                        <div class="content">
                            <span> Isi Formulir</span>
                            <p>10 - 15 Januari 2026</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-people"></i>
                        <div class="content">
                            <span>Ujian Seleksi</span>
                            <p>15 - 20 Januari 2026</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-bullhorn"></i>
                        <div class="content">
                            <span>Pengumuman</span>
                            <p>10 Februari 2025</p>
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