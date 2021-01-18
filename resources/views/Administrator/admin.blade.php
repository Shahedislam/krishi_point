<!DOCTYPE html>
<html lang="en">


<head>
    <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc."/>
    <meta name="author" content="Potenza Global Solutions"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css"/>
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
</head>

<body>
<!-- begin app -->
<div class="app">
    <!-- begin app-wrap -->
    <div class="app-wrap">
        <!-- begin pre-loader -->
        <div class="loader">
            <div class="h-100 d-flex justify-content-center">
                <div class="align-self-center">
                    <img src="assets/img/loader/loader.svg" alt="loader">
                </div>
            </div>
        </div>
        <!-- end pre-loader -->
        <!-- begin app-header -->
        <header class="app-header top-bar">
            <!-- begin navbar -->
            <nav class="navbar navbar-expand-md">

                <!-- begin navbar-header -->
                <div class="navbar-header d-flex align-items-center">
                    <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                    <a class="navbar-brand" href="mainpage.blade.php">
                        <img src="assets/img/logo.png" class="img-fluid logo-desktop" alt="logo"/>
                        <img src="assets/img/logo-icon.png" class="img-fluid logo-mobile" alt="logo"/>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti ti-align-left"></i>
                </button>
                <!-- end navbar-header -->
                <!-- begin navigation -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navigation d-flex">
                        <ul class="navbar-nav nav-left">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                    <i class="ti ti-align-right"></i>
                                </a>
                            </li>

                            <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                <a href="javascript:void(0)" class="nav-link expand">
                                    <i class="icon-size-fullscreen"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- end navigation -->
            </nav>
            <!-- end navbar -->
        </header>


        <div class="app-container">
            <!-- begin app-nabar -->
            <aside class="app-navbar">
                <!-- begin sidebar-nav -->
                <div class="sidebar-nav scrollbar scroll_light">
                    <ul class="metismenu " id="sidebarNav">


                        <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                                    class="nav-icon ti ti-calendar"></i><span
                                    class="nav-title">Add </span></a>
                            <ul aria-expanded="false">
                                <li><a href='operator'>local Opeator</a></li>
                                <li><a href='info'>Supplier</a></li>
                                <li><a href='man'>Manager</a></li>
                                <li><a href='tester'>Tester</a></li>

                            </ul>

                        <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                                    class="nav-icon ti ti-calendar"></i><span
                                    class="nav-title">View Information</span></a>
                            <ul aria-expanded="false">
                                <li><a href='view_operator'>local Opeator</a></li>
                                <li><a href='view_supplier'>Supplier</a></li>
                                <li><a href='view_manager'>Manager</a></li>
                                <li><a href='view_tester'>Tester</a></li>

                            </ul>
                        </li>

                        <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                                    class="nav-icon ti ti-calendar"></i><span
                                    class="nav-title">Registered Sample</span></a>
                            <ul aria-expanded="false">
                                <li><a href='#'>Soil Invoice</a></li>
                                <li><a href='#'>Crops Invoice</a></li>


                            </ul>
                        </li>





                        <li><a  href="{{ route('logout') }}" aria-expanded="false"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="nav-icon ti ti-email"></i><span
                                    class="nav-title">Log Out</span></a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </ul>
                </div>
                <!-- end sidebar-nav -->
            </aside>
            <!-- end app-navbar -->
            <!-- begin app-main -->
        @yield("content")
        <!-- end container-fluid -->
        </div>

        <!-- end app-container -->
        <!-- begin footer -->
        <footer class="footer">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-left">
                    <p>&copy; Copyright 2019. All rights reserved.</p>
                </div>
                <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                    <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- end app-wrap -->
</div>
<!-- end app -->

<!-- plugins -->
<script src="assets/js/vendors.js"></script>

<!-- custom app -->
<script src="assets/js/app.js"></script>
</body>


</html>
