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

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: url("{{ asset('img/background_form.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card {
            padding: 30px 40px;
            margin-top: 60px;
            margin-bottom: 60px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2);
            border-radius: 15px;
        }

        .blue-text {
            color: #00BCD4;
        }

        .form-control-label {
            margin-bottom: 0;
        }

        input,
        textarea,
        button,
        select {
            padding: 8px 15px;
            border-radius: 5px !important;
            margin: 5px 0px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            font-size: 18px !important;
            font-weight: 300;
        }

        input:focus,
        textarea:focus,
        select:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #00BCD4;
            outline-width: 0;
            font-weight: 400;
        }

        .btn-block {
            text-transform: uppercase;
            font-size: 15px !important;
            font-weight: 400;
            height: 43px;
            cursor: pointer;
        }

        .btn-block:hover {
            color: #fff !important;
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card">
                    <div class="card-body py-5">
                        <h3 class="text-center mb-5">Pendaftaran PPAN/PPAP Tahun 2025</h3>

                        <form id="myForm" class="needs-validation" novalidate method="POST">

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-12 flex-column d-flex">
                                    <label for="fname" class="form-control-label px-3">Nama lengkap <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="fname" name="fname" placeholder="" required>
                                    <div class="invalid-feedback">Nama lengkap wajib diisi.</div>
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="email" class="form-control-label px-3">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" id="email" name="email" placeholder="" required
                                        onblur="validate(3)">
                                    <div class="invalid-feedback">Email wajib diisi.</div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="mob" class="form-control-label px-3">Nomor Whatsapp <span
                                            class="text-danger">*</span></label>
                                    <input type="tel" id="mob" name="mob" placeholder="" required
                                        onblur="validate(4)">
                                    <div class="invalid-feedback">Nomor Whatsapp wajib diisi.</div>
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="nik" class="form-control-label px-3">NIK <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="nik" name="nik" placeholder="" required
                                        onblur="validate(1)">
                                    <div class="invalid-feedback">NIK wajib diisi.</div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3 mb-1">Tanggal Lahir <span
                                            class="text-danger">*</span></label>
                                    <div class="d-flex flex-sm-row gap-2">
                                        <select class="form-control w-100" id="tgl_lahir_dd" name="tgl_lahir_dd"
                                            required>
                                            <option value="">Tanggal</option>
                                            @for ($i = 1; $i <= 31; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>

                                        <select class="form-control w-100" id="tgl_lahir_mm" name="tgl_lahir_mm"
                                            required>
                                            <option value="">Bulan</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>

                                        <select class="form-control w-100" id="tgl_lahir_yyyy" name="tgl_lahir_yyyy"
                                            required>
                                            <option value="">Tahun</option>
                                            @for ($year = 1980; $year <= 2025; $year++)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    {{-- <div class="invalid-feedback">Tanggal lahir wajib dipilih lengkap.</div> --}}
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="provinsi" class="form-control-label px-3">Provinsi <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="provinsi" name="provinsi" placeholder="" required
                                        onblur="validate(2)">
                                    <div class="invalid-feedback">Provinsi wajib diisi.</div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="kabupaten" class="form-control-label px-3">Kabupaten/Kota <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="kabupaten" name="kabupaten" placeholder="" required
                                        onblur="validate(2)">
                                    <div class="invalid-feedback">Kabupaten/Kota wajib diisi.</div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="kecamatan" class="form-control-label px-3">Kecamatan <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="kecamatan" name="kecamatan" placeholder="" required
                                        onblur="validate(1)">
                                    <div class="invalid-feedback">Kecamatan wajib diisi.</div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="desa" class="form-control-label px-3">Desa/Kelurahan <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="desa" name="desa" placeholder="" required
                                        onblur="validate(2)">
                                    <div class="invalid-feedback">Desa/Kelurahan wajib diisi.</div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="rw" class="form-control-label px-3">RW <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="rw" name="rw" placeholder="" required
                                        onblur="validate(2)">
                                    <div class="invalid-feedback">RW wajib diisi.</div>
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label for="rt" class="form-control-label px-3">RT <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="rt" name="rt" placeholder="" required
                                        onblur="validate(2)">
                                    <div class="invalid-feedback">RT wajib diisi.</div>
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-lg-12 flex-column d-flex">
                                    <label for="proposal" class="form-control-label px-3">Upload proposal (Link
                                        gdrive) <span class="text-danger">*</span></label>
                                    <input type="file" id="proposal" name="proposal" required>
                                    <div class="invalid-feedback">Proposal wajib diunggah.</div>
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-lg-12 flex-column d-flex">
                                    <label for="ktp" class="form-control-label px-3">Upload foto KTP <span
                                            class="text-danger">*</span></label>
                                    <input type="file" id="ktp" name="ktp" required>
                                    <div class="invalid-feedback">Foto KTP wajib diunggah.</div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="form-group col-lg-12 col-sm-6">
                                    <button type="submit" class="btn-block btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {
            'use strict';
            const form = document.getElementById("myForm");
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        })();
    </script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
