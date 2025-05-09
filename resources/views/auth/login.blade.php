<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <style>
       
    body{color: #000;overflow-x: hidden;height: 100%;background-image: url("{{ asset('img/background_form.jpg') }}");background-repeat: no-repeat;background-size: cover}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
    </style>
</head>
<body>
    <section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100">
        <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                
                <div class="card-body py-3 px-5">
                <h2 class="text-uppercase text-center mb-4">Registrasi akun</h2>

                <form>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-control-label" for="form3Example3cg">Email</label>
                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-control-label" for="form3Example4cg">Password</label>
                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                    </div>

                    <div class="d-flex justify-content-center">
                    <button  type="button" data-mdb-button-init
                        data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                    </div>

                    <p class="text-center text-muted mt-3 mb-0">Sudah punya akun? <a href="#!"
                        class="fw-bold text-body"><u>Login disini</u></a></p>

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