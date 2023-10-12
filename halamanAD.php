<?php include 'koneksi.php'; 

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Pentium</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
            style="background: var(--blue);border-color: var(--blue);transform: perspective(0px) scale(1);">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>PENTIUM</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="halamanAD.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="tampilAD.php"><i class="fas fa-user"></i><span>Data
                                Admin</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="daftar_kartu.php"><i
                                class="fas fa-table"></i><span>Pendaftaran Anggota</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="cetak_kartu.php"><i
                                class="far fa-user-circle"></i><span>Cetak Kartu</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i
                                class="fas fa-user-circle"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form
                            class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <div class="input-group-append"></div>
                            </div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                    aria-expanded="false" data-toggle="dropdown" href="#"><i
                                        class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small"
                                                type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0"
                                                    type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-toggle="dropdown" href="#"><span
                                            class="badge badge-danger badge-counter">3+</span><i
                                            class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a
                                            class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i
                                                        class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i
                                                        class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i
                                                        class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your
                                                    account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                            Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-toggle="dropdown" href="#"><span
                                            class="badge badge-danger badge-counter">7</span><i
                                            class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a
                                            class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                    src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can
                                                        help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                    src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last
                                                        month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                    src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am
                                                        very happy with the progress so far, keep up the good
                                                        work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                    src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is
                                                        because someone told me that people say this to all dogs, even
                                                        if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                            Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right"
                                    aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity
                                            log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3><a
                            class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="laporan.php"><i
                                class="fas fa-download fa-sm text-white-50"></i>&nbsp;Laporan</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <?php 
                                                $today = date('ymd');
                                                $data = mysqli_query($konek ,"SELECT COUNT(tglkunjung) FROM tamu2 WHERE tglkunjung = '$today'");
                                                $dta = mysqli_fetch_array($data);
                                                // var_dump($dta);
                                                // echo "Jumlahkota : $dta[0]";
                                            ?>
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                                <span>jumlah Pengunjung Hari Ini (Anggota)</span>
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span><?php echo "$dta[0]"; ?></span>

                                            </div>

                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <?php 
                                                $today = date('ymd');
                                                $data = mysqli_query($konek ,"SELECT COUNT(tglkunjung) FROM tamu WHERE tglkunjung = '$today'");
                                                $dta = mysqli_fetch_array($data);
                                                // var_dump($dta);
                                                // echo "Jumlahkota : $dta[0]";
                                            ?>
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                                <span>jumlah Pengunjung Hari Ini (Non-Anggota)</span>
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span><?php echo "$dta[0]"; ?></span>
                                            </div>

                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1">
                                                <span>Tasks</span>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark font-weight-bold h5 mb-0 mr-3">
                                                        <span>50%</span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" aria-valuenow="50"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                            <span class="sr-only">50%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                                                <span>Pending Requests</span>
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span>18</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">

                            <div class="row">
                                <div class="col-lg-7 col-xl-8">
                                    <div class="card shadow mb-4"></div>
                                </div>
                                <div class="col-lg-5 col-xl-4">
                                    <div class="card shadow mb-4"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="text-primary font-weight-bold m-0">Projects</h6>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="small font-weight-bold">Server migration<span
                                                    class="float-right">20%</span>
                                            </h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 20%;"><span
                                                        class="sr-only">20%</span>
                                                </div>
                                            </div>
                                            <h4 class="small font-weight-bold">Sales tracking<span
                                                    class="float-right">40%</span>
                                            </h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-warning" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span
                                                        class="sr-only">40%</span>
                                                </div>
                                            </div>
                                            <h4 class="small font-weight-bold">Customer Database<span
                                                    class="float-right">60%</span>
                                            </h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-primary" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span
                                                        class="sr-only">60%</span>
                                                </div>
                                            </div>
                                            <h4 class="small font-weight-bold">Payout Details<span
                                                    class="float-right">80%</span>
                                            </h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0"
                                                    aria-valuemax="100" style="width: 80%;"><span
                                                        class="sr-only">80%</span>
                                                </div>
                                            </div>
                                            <h4 class="small font-weight-bold">Account setup<span
                                                    class="float-right">Complete!</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-success" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span
                                                        class="sr-only">100%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="text-primary font-weight-bold m-0">Todo List</h6>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col mr-2">
                                                        <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span
                                                            class="text-xs">10:30
                                                            AM</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="custom-control custom-checkbox"><input
                                                                class="custom-control-input" type="checkbox"
                                                                id="formCheck-1"><label class="custom-control-label"
                                                                for="formCheck-1"></label></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col mr-2">
                                                        <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span
                                                            class="text-xs">11:30
                                                            AM</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="custom-control custom-checkbox"><input
                                                                class="custom-control-input" type="checkbox"
                                                                id="formCheck-2"><label class="custom-control-label"
                                                                for="formCheck-2"></label></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col mr-2">
                                                        <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span
                                                            class="text-xs">12:30
                                                            AM</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="custom-control custom-checkbox"><input
                                                                class="custom-control-input" type="checkbox"
                                                                id="formCheck-3"><label class="custom-control-label"
                                                                for="formCheck-3"></label></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="card text-white bg-primary shadow">
                                                <div class="card-body">
                                                    <p class="m-0">Primary</p>
                                                    <p class="text-white-50 small m-0">#4e73df</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="card text-white bg-success shadow">
                                                <div class="card-body">
                                                    <p class="m-0">Success</p>
                                                    <p class="text-white-50 small m-0">#1cc88a</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="card text-white bg-info shadow">
                                                <div class="card-body">
                                                    <p class="m-0">Info</p>
                                                    <p class="text-white-50 small m-0">#36b9cc</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="card text-white bg-warning shadow">
                                                <div class="card-body">
                                                    <p class="m-0">Warning</p>
                                                    <p class="text-white-50 small m-0">#f6c23e</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="card text-white bg-danger shadow">
                                                <div class="card-body">
                                                    <p class="m-0">Danger</p>
                                                    <p class="text-white-50 small m-0">#e74a3b</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="card text-white bg-secondary shadow">
                                                <div class="card-body">
                                                    <p class="m-0">Secondary</p>
                                                    <p class="text-white-50 small m-0">#858796</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="bg-white sticky-footer">
                        <div class="container my-auto">
                            <div class="text-center my-auto copyright"><span>Pentium</span></div>
                        </div>
                    </footer>
                </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i
                        class="fas fa-angle-up"></i></a>
            </div>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/chart.min.js"></script>
            <script src="assets/js/bs-init.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
            <script src="assets/js/theme.js"></script>
</body>

</html>