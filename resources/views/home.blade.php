@extends('layouts.app')
{{-- @extends('layouts.preload') --}}
@section('title', 'Home page')
@section('content')

    {{-- preload --}}
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
                                    SELEKSI PP, PPAN & PPAP
                                </h1>
                                <h1> TANGERANG SELATAN</h1>
                                <h1>TAHUN 2025
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
    <section class="features section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title mb-2">
                        <h2 class="font-weight-bold display-4">Sisa Waktu Pendaftaran</h2>
                        <img src="img/section-img.png" alt="#" class="img-fluid" />
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="card p-5 p-md-5 d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-left shadow"
                        style="background-color: #1a76d1; margin-top:15px">
                        <div class="d-flex flex-column text-center px-3 mb-4 mb-md-0">
                            <div id="days" class="font-weight-bold display-4 display-md-3">0</div>
                            <div class="text-muted h5">Hari</div>
                        </div>
                        <div class="display-4 mx-2">:</div>
                        <div class="d-flex flex-column text-center px-3 mb-4 mb-md-0">
                            <div id="hours" class="font-weight-bold display-4 display-md-3">00</div>
                            <div class="text-muted h5">Jam</div>
                        </div>
                        <div class="display-4 mx-2">:</div>
                        <div class="d-flex flex-column text-center px-3 mb-4 mb-md-0">
                            <div id="minutes" class="font-weight-bold display-4 display-md-3">00</div>
                            <div class="text-muted h5">Menit</div>
                        </div>
                        <div class="display-4 mx-2">:</div>
                        <div class="d-flex flex-column text-center px-3">
                            <div id="seconds" class="font-weight-bold display-4 display-md-3">00</div>
                            <div class="text-muted h5">Detik</div>
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
