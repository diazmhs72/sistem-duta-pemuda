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

    <!-- Title -->
    <title>Mediplus - Free Medical and Doctor Directory HTML Template.</title>

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<!-- Nice Select CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css" />
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<!-- Icofont CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icofont/1.0.1/icofont.css" />
<!-- Slicknav -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css" />
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<!-- Datepicker CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" />
<!-- Animate CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />


    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

    <style>
        .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
    </style>

  </head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                  <form>
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="firstName" class="form-control form-control-lg" />
                          <label class="form-label" for="firstName">First Name</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="lastName" class="form-control form-control-lg" />
                          <label class="form-label" for="lastName">Last Name</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div data-mdb-input-init class="form-outline datepicker w-100">
                          <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                          <label for="birthdayDate" class="form-label">Birthday</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <h6 class="mb-2 pb-1">Gender: </h6>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="option1" checked />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="option2" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="option3" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div data-mdb-input-init class="form-outline">
                          <input type="email" id="emailAddress" class="form-control form-control-lg" />
                          <label class="form-label" for="emailAddress">Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div data-mdb-input-init class="form-outline">
                          <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-12">
      
                        <select class="select form-control-lg">
                          <option value="1" disabled>Choose option</option>
                          <option value="2">Subject 1</option>
                          <option value="3">Subject 2</option>
                          <option value="4">Subject 3</option>
                        </select>
                        <label class="form-label select-label">Choose option</label>
      
                      </div>
                    </div>
      
                    <div class="mt-4 pt-2">
                      <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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
