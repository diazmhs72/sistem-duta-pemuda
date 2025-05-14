<!DOCTYPE html>
<html lang="en">

<head>
    <title>Duta Pemuda</title>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Phoenixcoded" />

    {{-- google fonts --}}
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <!-- Favicon icon -->
    <link rel="icon" href="img/favicon1.png" />

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <style>
        .pcoded-header .mobile-menu span,
        .pcoded-header .mobile-menu span::before,
        .pcoded-header .mobile-menu span::after {
            background-color: #000000 !important;
            /* ganti #ff0000 dengan warna yang lo mau */
        }
    </style>

</head>

<body class="">
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-content scroll-div">
                <div class="">
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-unstyled">
                            <li class="list-group-item">
                                <a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a>
                            </li>
                            <li class="list-group-item">
                                <a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar">
                    <!-- <li class="nav-item pcoded-menu-caption">
              <label>Navigation</label>
            </li> -->
                    <li class="nav-item mt-4">
                        <a href="index.html" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-layout"></i></span><span class="pcoded-mtext">Kelola
                                akun</span></a>
                        <ul class="pcoded-submenu">
                            <li>
                                <a href="layout-vertical.html" target="_blank">Editor</a>
                            </li>
                            <li>
                                <a href="layout-horizontal.html" target="_blank">Peserta</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-box"></i></span><span class="pcoded-mtext">Kelola
                                Pendaftaran</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="bc_alert.html">Alert</a></li>
                            <li><a href="bc_button.html">Button</a></li>
                            <li><a href="bc_badges.html">Badges</a></li>
                            <li>
                                <a href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a>
                            </li>
                            <li><a href="bc_card.html">Cards</a></li>
                            <li><a href="bc_collapse.html">Collapse</a></li>
                            <li><a href="bc_carousel.html">Carousel</a></li>
                            <li><a href="bc_grid.html">Grid system</a></li>
                            <li><a href="bc_progress.html">Progress</a></li>
                            <li><a href="bc_modal.html">Modal</a></li>
                            <li><a href="bc_spinner.html">Spinner</a></li>
                            <li><a href="bc_tabs.html">Tabs & pills</a></li>
                            <li>
                                <a href="bc_typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="bc_tooltip-popover.html">Tooltip & popovers</a>
                            </li>
                            <li><a href="bc_toasts.html">Toasts</a></li>
                            <li><a href="bc_extra.html">Other</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Forms &amp; table</label>
                    </li>
                    <li class="nav-item">
                        <a href="form_elements.html" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-file-text"></i></span><span
                                class="pcoded-mtext">Forms</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="tbl_bootstrap.html" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap
                                table</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Chart & Maps</label>
                    </li>
                    <li class="nav-item">
                        <a href="chart-apex.html" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-pie-chart"></i></span><span
                                class="pcoded-mtext">Chart</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="map-google.html" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-lock"></i></span><span
                                class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li>
                                <a href="auth-signup.html" target="_blank">Sign up</a>
                            </li>
                            <li>
                                <a href="auth-signin.html" target="_blank">Sign in</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="sample-page.html" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample
                                page</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-dark header-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="img/logo1.png" alt="" width="85%" class="logo" />
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                            Dropdown
                        </a>
                        <div class="dropdown-menu profile-notification">
                            <ul class="pro-body">
                                <li>
                                    <a href="user-profile.html" class="dropdown-item"><i class="fas fa-circle"></i>
                                        Profile</a>
                                </li>
                                <li>
                                    <a href="email_inbox.html" class="dropdown-item"><i class="fas fa-circle"></i> My
                                        Messages</a>
                                </li>
                                <li>
                                    <a href="auth-signin.html" class="dropdown-item"><i class="fas fa-circle"></i>
                                        Lock
                                        Screen</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown mega-menu">
                        <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                            Mega
                        </a>
                        <div class="dropdown-menu profile-notification">
                            <div class="row no-gutters">
                                <div class="col">
                                    <h6 class="mega-title">UI Element</h6>
                                    <ul class="pro-body">
                                        <li>
                                            <a href="#!" class="dropdown-item"><i class="fas fa-circle"></i>
                                                Alert</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i class="fas fa-circle"></i>
                                                Button</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i class="fas fa-circle"></i>
                                                Badges</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i class="fas fa-circle"></i>
                                                Cards</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i class="fas fa-circle"></i>
                                                Modal</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i class="fas fa-circle"></i>
                                                Tabs & pills</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <h6 class="mega-title">Forms</h6>
                                    <ul class="pro-body">
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-minus"></i>
                                                Elements</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-minus"></i>
                                                Validation</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-minus"></i>
                                                Masking</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-minus"></i>
                                                Wizard</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-minus"></i>
                                                Picker</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-minus"></i>
                                                Select</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <h6 class="mega-title">Application</h6>
                                    <ul class="pro-body">
                                        <li>
                                            <a href="#!" class="dropdown-item"><i class="feather icon-mail"></i>
                                                Email</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-clipboard"></i>
                                                Task</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-check-square"></i>
                                                To-Do</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-image"></i>
                                                Gallery</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-help-circle"></i>
                                                Helpdesk</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <h6 class="mega-title">Extension</h6>
                                    <ul class="pro-body">
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-file-plus"></i>
                                                Editor</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-file-minus"></i>
                                                Invoice</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-calendar"></i>
                                                Full calendar</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-upload-cloud"></i>
                                                File upload</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item"><i
                                                    class="feather icon-scissors"></i>
                                                Image cropper</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="icon feather icon-bell"></i>
                            <span class="badge badge-pill badge-danger">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">
                                    Notifications
                                </h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        {{-- <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image" /> --}}
                                        <div class="media-body">
                                            <p>
                                                <strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5 min</span>
                                            </p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        {{-- <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image" /> --}}
                                        <div class="media-body">
                                            <p>
                                                <strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>10 min</span>
                                            </p>
                                            <p>
                                                Prchace New Theme and make
                                                payment
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        {{-- <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image" /> --}}
                                        <div class="media-body">
                                            <p>
                                                <strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>12 min</span>
                                            </p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        {{-- <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image" /> --}}
                                        <div class="media-body">
                                            <p>
                                                <strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>30 min</span>
                                            </p>
                                            <p>
                                                Prchace New Theme and make
                                                payment
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                {{-- <img src="assets/images/user/avatar-1.jpg" class="img-radius"
                                    alt="User-Profile-Image" /> --}}
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li>
                                    <a href="user-profile.html" class="dropdown-item"><i
                                            class="feather icon-user"></i>
                                        Profile</a>
                                </li>
                                <li>
                                    <a href="email_inbox.html" class="dropdown-item"><i
                                            class="feather icon-mail"></i>
                                        My Messages</a>
                                </li>
                                <li>
                                    <a href="auth-signin.html" class="dropdown-item"><i
                                            class="feather icon-lock"></i>
                                        Lock Screen</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Data akun peserta
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>tiger.nixon@example.com</td>
                                <td>Admin</td>
                                <td>
                                    <button class="btn btn-sm btn-info">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Garrett Winters</td>
                                <td>garrett.winters@example.com</td>
                                <td>User</td>
                                <td>
                                    <button class="btn btn-sm btn-info">Edit</button>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ashton Cox</td>
                                <td>ashton.cox@example.com</td>
                                <td>User</td>
                                <td>
                                    <button class="btn btn-sm btn-info">
                                        Edit
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Muat jQuery terlebih dahulu -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="js/vendor-all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <!-- Required Js -->
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/pcoded.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#dataTable").DataTable({
                lengthMenu: [5, 10, 25, 50, 100],
                pageLength: 10,
                language: {
                    lengthMenu: "Tampilkan _MENU_ entri",
                    zeroRecords: "Tidak ditemukan data yang cocok",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    infoEmpty: "Tidak ada data tersedia",
                    infoFiltered: "(disaring dari total _MAX_ entri)",
                    search: "Cari:",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Berikutnya",
                        previous: "Sebelumnya",
                    },
                },
            });
        });
    </script>
</body>

</html>
