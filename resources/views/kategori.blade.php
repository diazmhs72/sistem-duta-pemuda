@extends('layouts.app')
@section('title')
@section('content')


    {{-- start ketegori --}}
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card px-lg-5 px-3" style="border-radius: 15px;">
                    <div class="card-body py-4 text-left">
                        <h2 class="text-center">Pilih Kategori</h2>
                        <h6 class="text-muted text-center mb-5">Pilih program yang kamu inginkan.</h6>
                        {{-- kolom kategori --}}
                        <div class="mx-lg-5 mx-md-3 mx-1">
                            <a href="pendaftaranPp" class="program-item mb-5 d-flex flex-row align-items-center">
                                <img src="img/logo_pp.png" alt="" width="47px" class="mr-3">
                                <h6>Pemuda Pelopor (PP)</h6>
                            </a>

                            <a href="pendaftaranPpap" class="program-item mb-5 d-flex flex-row align-items-center">
                                <img src="img/logo_ppap.png" alt="" width="52px" class="mr-3">
                                <h6>Pertukaran Pemuda Antar Provinsi (PPAP)</h6>
                            </a>

                            <a href="pendaftaranPpan" class="program-item mb-5 d-flex flex-row align-items-center">
                                <img src="img/logo_ppan.png" alt="" width="52px" class="mr-3">
                                <h6>Pertukaran Pemuda Antar Negara (PPAN)</h6>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
