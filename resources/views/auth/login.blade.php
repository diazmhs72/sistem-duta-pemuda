<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />


    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-size: cover
        }

        .card {
            padding: 30px 40px;
            margin-top: 60px;
            margin-bottom: 60px;
            border: 1px solid #888 !important;
            box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
        }

        .blue-text {
            color: #00BCD4
        }

        .form-control-label {
            margin-bottom: 0
        }

        input,
        textarea {
            padding: 8px 15px;
            border-radius: 5px !important;
            margin: 5px 0px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            font-size: 18px !important;
            font-weight: 300
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #00BCD4;
            outline-width: 0;
            font-weight: 400
        }
    </style>
</head>

<body>
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">

                            <div class="card-body py-3 px-md-5 px-2">
                                <h2 class="text-uppercase text-center mb-4">Login</h2>

                                <form>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-control-label" for="form3Example3cg">Email</label>
                                        <input type="email" id="form3Example3cg"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-control-label" for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="d-flex justify-content-center flex-column">
                                        <button class="btn mb-3" style="width: 100%"
                                            onclick="window.location.href='{{ route('pendaftaran') }}'">Login</button>
                                        <button class="btn-light py-2"
                                            style="width: 100%; border: 1px solid rgba(0, 0, 0, 0.2)"><img
                                                src="img/google.png" class="mr-2" alt="" width="32px"
                                                onclick="window.location.href='{{ route('pendaftaran') }}'">Login
                                            dengan
                                            google</button>
                                    </div>

                                    <p class="text-center text-muted mt-3 mb-0">Belum punya akun? <a
                                            href="{{ route('kategori') }}" class="fw-bold text-body"
                                            style="color: var(--blue)"><u>Daftar
                                                disini</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
