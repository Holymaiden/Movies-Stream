<?php session_start();
if (isset($_SESSION['username'])) {
        if ($_SESSION['l'] !== '1')
                header("Location:../index.php");
} else {
        header("Location:../index.php");
};
require_once("./koneksi.php"); ?>
<!doctype html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= $title ?></title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/media/image/favicon.png" />

        <!-- Main css -->
        <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Datatable -->
        <link rel="stylesheet" href="vendors/dataTable/datatables.min.css" type="text/css">

        <!-- App css -->
        <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">

        <!-- Css -->
        <link rel="stylesheet" href="vendors/datepicker/daterangepicker.css" type="text/css">

        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
        <!-- Preloader -->
        <div class="preloader">
                <div class="preloader-icon"></div>
                <span>Loading...</span>
        </div>
        <!-- ./ Preloader -->

        <!-- Sidebar group -->
        <div class="sidebar-group">

                <!-- BEGIN: Settings -->
                <div class="sidebar" id="settings">
                        <div class="card">
                                <div class="card-body">
                                        <h6 class="card-title d-flex justify-content-between">
                                                Settings
                                                <a class="btn-sidebar-close" href="#">
                                                        <i class="ti-close"></i>
                                                </a>
                                        </h6>
                                        <ul class="list-group list-group-flush">
                                                <li class="list-group-item pl-0 pr-0">
                                                        <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                                                <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                                                        </div>
                                                </li>
                                                <li class="list-group-item pl-0 pr-0">
                                                        <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                                <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                                                        </div>
                                                </li>
                                                <li class="list-group-item pl-0 pr-0">
                                                        <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                                                <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                                                        </div>
                                                </li>
                                                <li class="list-group-item pl-0 pr-0">
                                                        <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                                                                <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                                                        </div>
                                                </li>
                                                <li class="list-group-item pl-0 pr-0">
                                                        <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                                <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                                                        </div>
                                                </li>
                                                <li class="list-group-item pl-0 pr-0">
                                                        <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                                                <label class="custom-control-label" for="customSwitch6">Enable report
                                                                        generation.</label>
                                                        </div>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>
                <!-- END: Settings -->

        </div>
        <!-- ./ Sidebar group -->

        <!-- Layout wrapper -->
        <div class="layout-wrapper">

                <!-- Header -->
                <div class="header d-print-none">
                        <div class="header-container">
                                <div class="header-left">
                                        <div class="navigation-toggler">
                                                <a href="#" data-action="navigation-toggler">
                                                        <i data-feather="menu"></i>
                                                </a>
                                        </div>

                                        <div class="header-logo">
                                                <a href="../index.php">
                                                        <img class="logo" src="assets/media/image/logo.png" alt="logo">
                                                </a>
                                        </div>
                                </div>

                                <div class="header-body">
                                        <div class="header-body-left">
                                                <ul class="navbar-nav">
                                                        <li class="nav-item mr-3">
                                                                <div class="header-search-form">
                                                                        <form>
                                                                                <div class="input-group">
                                                                                        <div class="input-group-prepend">
                                                                                                <button class="btn">
                                                                                                        <i data-feather="search"></i>
                                                                                                </button>
                                                                                        </div>
                                                                                        <input type="text" class="form-control" placeholder="Search">
                                                                                        <div class="input-group-append">
                                                                                                <button class="btn header-search-close-btn">
                                                                                                        <i data-feather="x"></i>
                                                                                                </button>
                                                                                        </div>
                                                                                </div>
                                                                        </form>
                                                                </div>
                                                        </li>
                                                </ul>
                                        </div>

                                        <div class="header-body-right">
                                                <ul class="navbar-nav">
                                                        <li class="nav-item">
                                                                <a href="#" class="nav-link mobile-header-search-btn" title="Search">
                                                                        <i data-feather="search"></i>
                                                                </a>
                                                        </li>

                                                        <li class="nav-item dropdown d-none d-md-block">
                                                                <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                                                                        <i class="maximize" data-feather="maximize"></i>
                                                                        <i class="minimize" data-feather="minimize"></i>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </div>
                                </div>

                                <ul class="navbar-nav ml-auto">
                                        <li class="nav-item header-toggler">
                                                <a href="#" class="nav-link">
                                                        <i data-feather="arrow-down"></i>
                                                </a>
                                        </li>
                                </ul>
                        </div>
                </div>
                <!-- ./ Header -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                        <!-- begin::navigation -->
                        <div class="navigation">
                                <div class="navigation-header">
                                        <span>Navigation</span>
                                        <a href="#">
                                                <i class="ti-close"></i>
                                        </a>
                                </div>
                                <div class="navigation-menu-body">
                                        <ul>
                                                <li>
                                                        <a href="users.php">
                                                                <span class="nav-link-icon">
                                                                        <i data-feather="pie-chart"></i>
                                                                </span>
                                                                <span>Users</span>
                                                        </a>
                                                </li>
                                                <li>
                                                        <a href="Movies.php">
                                                                <span class="nav-link-icon">
                                                                        <i data-feather="calendar"></i>
                                                                </span>
                                                                <span>Movies</span>
                                                        </a>
                                                </li>
                                                <li>
                                                        <a href="Images.php">
                                                                <span class="nav-link-icon">
                                                                        <i data-feather="shopping-cart"></i>
                                                                </span>
                                                                <span>Images</span>
                                                        </a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                        <!-- end::navigation -->

                        <!-- Content body -->
                        <div class="content-body">