<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="" />
    <meta name="copyright" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

       <!-- Favicon -->
       <link rel="icon" href="img/favicon.png" />

       <!-- Google Fonts -->
       <link
         href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
         rel="stylesheet"
       />
   
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
       {{-- my style --}}
       {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" /> --}}
  

  <style>
    body{color: #000;overflow-x: hidden;height: 100%;background-image: url("{{ asset('img/background_form.jpg') }}");background-repeat: no-repeat;background-size: cover}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
  </style>

  </head>
<body>
  <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body py-5">
                <h3 class="text-center mb-5">Pendaftaran PPAN/PPAP Tahun 2025</h3>

                <form class="form-card mt-4" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Nama lengkap<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="" onblur="validate(1)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="email" id="email" name="email" placeholder="" onblur="validate(3)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nomor Whatsapp<span class="text-danger"> *</span></label> <input type="number" id="mob" name="mob" placeholder="" onblur="validate(4)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">NIK<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="" onblur="validate(1)"> </div>
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Tanggal Lahir<span class="text-danger"> *</span></label> <input type="date" id="email" name="email" placeholder="" onblur="validate(3)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                      {{-- <h6 class="col-12 ml-2 mb-3">Alamat Kepeloporan</h6> --}}
                      <div class="form-group col-lg-12 col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Alamat sesuai KTP<span class="text-danger"> *</span></label> <textarea id="ans" name="ans" placeholder="" onblur="validate(5)" cols="" rows="2"></textarea></div>
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">RT<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="" onblur="validate(2)"> </div>
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">RW<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="" onblur="validate(1)"> </div>
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Desa/Kelurahan<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="" disabled onblur="validate(2)"></div>
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Kecamatan<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="" onblur="validate(2)"> </div>
                    </div>
                    {{-- <div class="row justify-content-between text-left">
                      <div class="form-group col-lg-12 col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Proposal kepeloporan (link google drive)<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" onblur="validate(3)"></div>
                    </div> --}}
                    <div class="row justify-content-between text-left">
                      <div class="form-group col-lg-12 col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Upload foto KTP<span class="text-danger"> *</span></label> <input type="file" id="email" name="email" placeholder="" onblur="validate(3)"></div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-lg-12 col-sm-6"> <button type="submit" class="btn-block btn-primary">Kirim</button> </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>


<script>
  function validate(val) {
    v1 = document.getElementById("fname");
    v2 = document.getElementById("lname");
    v3 = document.getElementById("email");
    v4 = document.getElementById("mob");
    v5 = document.getElementById("job");
    v6 = document.getElementById("ans");

    flag1 = true;
    flag2 = true;
    flag3 = true;
    flag4 = true;
    flag5 = true;
    flag6 = true;

    if(val>=1 || val==0) {
        if(v1.value == "") {
            v1.style.borderColor = "red";
            flag1 = false;
        }
        else {
            v1.style.borderColor = "green";
            flag1 = true;
        }
    }

    if(val>=2 || val==0) {
        if(v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        }
        else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }
    if(val>=3 || val==0) {
        if(v3.value == "") {
            v3.style.borderColor = "red";
            flag3 = false;
        }
        else {
            v3.style.borderColor = "green";
            flag3 = true;
        }
    }
    if(val>=4 || val==0) {
        if(v4.value == "") {
            v4.style.borderColor = "red";
            flag4 = false;
        }
        else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }
    if(val>=5 || val==0) {
        if(v5.value == "") {
            v5.style.borderColor = "red";
            flag5 = false;
        }
        else {
            v5.style.borderColor = "green";
            flag5 = true;
        }
    }
    if(val>=6 || val==0) {
        if(v6.value == "") {
            v6.style.borderColor = "red";
            flag6 = false;
        }
        else {
            v6.style.borderColor = "green";
            flag6 = true;
        }
    }

    flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

    return flag;
}
</script>
        <!-- jQuery Min JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery Migrate JS -->
<script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
<!-- jQuery UI JS -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<!-- Easing JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Color JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
<!-- jQuery Nav JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-one-page-nav/3.0.0/jquery.nav.min.js"></script>
<!-- Slicknav JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js"></script>
<!-- ScrollUp JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
<!-- Niceselect JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<!-- Tilt jQuery JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- CounterUp JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<!-- Steller JS (jika gak nemu, skip atau pakai custom) -->
<!-- <script src="..."></script> -->
<!-- Wow JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- Magnific Popup JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Main JS (kalau custom, tetap taruh di public/js/main.js) -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
