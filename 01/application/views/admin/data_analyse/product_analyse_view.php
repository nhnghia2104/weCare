<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elite Admin</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>img/elite-favicon.png" />

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom style for this page -->
    <link href="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Nghia's styles for thí template -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

    <!-- date picker -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendors/daterangepicker-bootstrap/daterangepicker-bs3.css" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>index.php/admin/dashboard">
                <div class="sidebar-brand-icon">
                    <div class="sidebar-brand-icon">
                        <img src="<?php echo base_url(); ?>img/svg/logo.svg" alt="logo" height="100px" width="100px" color="white">
                        <!-- <i class="fas fa-laugh-wink"></i> -->
                    </div>
                </div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage
            </div>

            <!-- Nav Item - Product manage -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
                    <i class="fal fa-shopping-bag"></i>
                    <span> Product</span>
                </a>
                <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/productmanage">All
                            products</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/productmanage/addproduct">Add new product</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Order manage -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrder" aria-expanded="true" aria-controls="collapseOrder">
                    <i class="fal fa-archive"></i>
                    <span> Order</span>
                </a>
                <div id="collapseOrder" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/ordersmanage">All
                            Orders</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/ordersmanage?filter=unsolved">Unsolved</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/ordersmanage?filter=refunded">Refunded</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Customer manage -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomer" aria-expanded="true" aria-controls="collapseCustomer">
                    <i class="fal fa-users"></i>
                    <span> Customers</span>
                </a>
                <div id="collapseCustomer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/usermanage">All
                            Customers</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                analyse
            </div>

            <!-- Nav Item - analyse -->

            <!-- analyse Earning -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>index.php/admin/dataanalyse/earnings_analyse">
                    <i class="fal fa-dollar-sign"></i>
                    <span> Earnings</span>
                </a>
            </li>

            <!-- analyse product -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProductAnalyse" aria-expanded="true" aria-controls="collapseProductAnalyse">
                    <i class="fal fa-box-usd"></i>
                    <span> Products Analyse</span>
                </a>
                <div id="collapseProductAnalyse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/dataanalyse/products_overview">Overview</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/dataanalyse/products_performance">Product Analyse</a>
                    </div>
                </div>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-dark" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-dark">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow-sm rounded-0 mb-4">
                        <div class="card-header bg-white p-0">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <!-- Tabs -->
                                    <section id="tabs">
                                        <div class="container">
                                            <h1 class="custom-font-2-bold mt-3">Product rankings (Top 10)</h1>
                                            <div class="row">
                                                <div class="col-xs-12 ">
                                                    <nav>
                                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                            <a class="nav-item nav-link active tab-element" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" data-filter="views" aria-selected="true">Views</a>
                                                            <a class="nav-item nav-link tab-element" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" data-filter="earnings" aria-selected="false">Earnings</a>
                                                            <a class="nav-item nav-link tab-element" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" data-filter="sold" aria-selected="false">Sold</a>
                                                            <a class="nav-item nav-link tab-element" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" data-filter="add to cart" aria-selected="false">Add to cart</a>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="col-sm-12 col-md-6 text-md-right">
                                    <div class="container mt-3">
                                        <a href="<?php echo base_url(); ?>index.php/admin/DataAnalyse/Products_Performance" class="custom-font-1-bold">More <i class="far fa-angle-right"></i></a>
                                    </div>
                                </div>

                            </div>
                            <!-- ------------------------------------------------------------------ -->
                        </div>

                        <div class="card-body custom-font-1">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Rank</th>
                                            <th>Product Info</th>
                                            <th id="thead-change">Views</th>
                                            <th>Rate <a data-toggle="tooltip" data-placement="bottom" title="The rates are based on ratio between this product and all products"><i class="far fa-question-circle"></i></a></th>
                                            <!-- <th>Salary</th> -->
                                        </tr>
                                    </thead>

                                    <tbody id="tableBodyContent">

                                    </tbody>
                                </table> <!-- end table -->

                            </div> <!-- end table-responsive -->

                        </div> <!-- end card body -->

                    </div> <!-- end card -->

                    <div class="row" hidden id="product-detail">
                        <div class="col-12">
                            <div class="card shadow-sm rounded-0 mb-4 mt-3">
                                <div class="container-fluid pt-4 pb-4">
                                    <div class="row">
                                        <!-- content -->
                                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                                            <div class="card border-0">
                                                <div class="pt-2 text-center main-pro-card">
                                                    <img class="border rounded-circle border-light" height="80px" src="http://localhost:2104/01/FilesUpload/paul.webp" alt="">
                                                    <p class="custom-font-1-bold mt-1 text-uppercase">AHIHIHIHI</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="row p-0 m-0">
                                                        <div class="col-6 p-0 m-0">
                                                            <p class="custom-font-4-bold mb-0">Views</p>
                                                        </div>
                                                        <div class="col-6 m-0 p-0 text-right custom-font-4">
                                                            <a data-toggle="tooltip" data-placement="bottom" title="The rates are based on the ratio of this product to all products"><i class="far fa-question-circle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="row p-0 m-0 Views-card">
                                                        <div class="col-6 p-0 m-0">
                                                            <p class="item-title mb-0">0</p>
                                                        </div>
                                                        <div class="col-6 p-0 m-0 text-right">
                                                            <p class="item-percent custom-font-3 mb-0">0.00%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row p-0 m-0">
                                                        <div class="col-8 p-0 m-0">
                                                            <p class="custom-font-4-bold mb-0">Add to cart</p>
                                                        </div>
                                                        <div class="col-4 m-0 p-0 text-right custom-font-4">
                                                            <a data-toggle="tooltip" data-placement="bottom" title="The rates are based on the ratio of this product to all products"><i class="far fa-question-circle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="row p-0 m-0 AddToCart-card">
                                                        <div class="col-6 p-0 m-0">
                                                            <p class="item-title mb-0">0</p>
                                                        </div>
                                                        <div class="col-6 p-0 m-0 text-right">
                                                            <p class="item-percent custom-font-3 mb-0">0.00%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row p-0 m-0">
                                                        <div class="col-6 p-0 m-0">
                                                            <p class="custom-font-4-bold mb-0">Orders</p>
                                                        </div>
                                                        <div class="col-6 m-0 p-0 text-right custom-font-4">
                                                            <a data-toggle="tooltip" data-placement="bottom" title="The rates are based on the ratio of this product to all products"><i class="far fa-question-circle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="row p-0 m-0 Orders-card">
                                                        <div class="col-6 p-0 m-0">
                                                            <p class="item-title mb-0">0</p>
                                                        </div>
                                                        <div class="col-6 p-0 m-0 text-right">
                                                            <p class="item-percent custom-font-3 mb-0">0.00%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row p-0 m-0">
                                                        <div class="col-6 p-0 m-0">
                                                            <p class="custom-font-4-bold mb-0">Sold</p>
                                                        </div>
                                                        <div class="col-6 m-0 p-0 text-right custom-font-4">
                                                            <a data-toggle="tooltip" data-placement="bottom" title="The rates are based on the ratio of this product to all products"><i class="far fa-question-circle"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="row p-0 m-0 Sold-card">
                                                        <div class="col-6 p-0 m-0">
                                                            <p class="item-title mb-0">0</p>
                                                        </div>
                                                        <div class="col-6 p-0 m-0 text-right">
                                                            <p class="item-percent custom-font-3 mb-0">0.00%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row p-0 m-0">
                                                        <div class="col-6 p-0 m-0">
                                                            <p class="custom-font-4-bold mb-0">Earnings</p>
                                                        </div>
                                                        <div class="col-6 m-0 p-0 text-right custom-font-4">
                                                            <a data-toggle="tooltip" data-placement="bottom" title="The rates are based on the ratio of this product to all products"><i class="far fa-question-circle"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="row p-0 m-0 Earnings-card">
                                                        <div class="col-6 p-0 m-0">
                                                            <p class="item-title mb-0">0</p>
                                                        </div>
                                                        <div class="col-6 p-0 m-0 text-right">
                                                            <p class="item-percent custom-font-3 mb-0">0.00%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end content -->
                                    </div>
                                    <!-- end row -->

                                    <!-- row chart -->
                                    <div class="row border-top pt-5">
                                        <div class="col-5">
                                            <div class="chart-pie">
                                                <canvas id="myPieChart"></canvas>
                                            </div>
                                            <div class="mt-4 text-center small">
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-success"></i> Completed
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-danger"></i> Cancelled
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-orange"></i> Refunded
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-light-gray"></i> Others
                                                </span>
                                            </div>
                                        </div>
                                        <!-- end col- -->

                                        <div class="col-7">
                                            <div class="chart-line">
                                                <canvas id="myLineChart"></canvas>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row chart -->

                                </div>
                                <!-- end container -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col-12 -->
                    </div>

                </div> <!-- /.container -->

            </div><!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white mt-5">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-dark" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- script for get pro version fontawesome -->
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>vendors/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- date range picker -->
    <script src="<?php echo base_url(); ?>vendors/daterangepicker-bootstrap/moment.js"></script>
    <script src="<?php echo base_url(); ?>vendors/daterangepicker-bootstrap/daterangepicker.js"></script>

    <!-- custom Nghia'sJS -->
    <script src="<?php echo base_url(); ?>js/base.js"></script>

    <!-- chart -->
    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>vendors/chart.js/Chart.js">
        Chart.defaults.global.defaultFontFamily = 'Open Sans', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';
    </script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>js/demo/chart-area-demo.js"></script>

    <script>
        bTable = $('#tableMore').DataTable();
        oTable = $('#dataTable').DataTable({
            "searching": false,
            "pageLength": 10,
            "lengthChange": false,
            "ordering": false,
            "paging": false,
            "info": false,
            "columnDefs": [{
                "className": "text-center",
                "targets": [0, 2, 3],
            }, {
                "width": "80px",
                "targets": 0
            }]
        });
        var myLineChart = "";
        var myPieChart = "";

        filterValue = "views";

        $('.tab-element').on("click", function(event) {
            filterValue = $(this).data('filter').toLowerCase();
            $('#thead-change').html($(this).html());
            displayTable(sortProduct(products, filterValue));
        })

        var products = [];
        var totalView = 0;
        var totalEarning = 0;
        var totalSold = 0;
        var totalAddToCart = 0;
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>index.php/admin/DataAnalyse/getAnalyseListProductPaid',
            dataType: 'json',
            success: function(data) {
                products = sortProduct(data, filterValue);

                totalView = products.map(product => Number(product.view)).reduce((a, b) => a + b);
                totalEarning = products.map(product => Number(product.earnings)).reduce((a, b) => a + b);
                totalSold = products.map(product => Number(product.sold)).reduce((a, b) => a + b);
                totalAddToCart = products.map(product => Number(product.addToCart)).reduce((a, b) => a + b);

                displayTable(products);
            }
        });

        function sortProduct(data, key) {
            switch (key) {
                case "views":
                    data.sort((a, b) => b.view - a.view);
                    break;
                case "earnings":
                    data.sort((a, b) => b.earnings - a.earnings);
                    break;
                case "sold":
                    data.sort((a, b) => b.sold - a.sold);
                    break;
                case "add to cart":
                    data.sort((a, b) => b.addToCart - a.addToCart);
                    break;
                default:
                    break;
            }
            return data;
        }

        function displayTable(products) {
            oTable.clear();
            for (var index = 0; index < 10; index++) {
                col = 0;
                rate = 0;
                switch (filterValue) {
                    case "views":
                        col = products[index].view;
                        rate = products[index].view / totalView;
                        console.log(rate);
                        break;
                    case "earnings":
                        col = roundNumber(products[index].earnings);
                        rate = products[index].earnings / totalEarning;
                        break;
                    case "sold":
                        col = products[index].sold;
                        rate = products[index].sold / totalSold;
                        break;
                    case "add to cart":
                        col = products[index].addToCart;
                        rate = products[index].addToCart / totalAddToCart;
                        break;
                    default:
                        break;
                }
                oTable.row.add([
                    index + 1,
                    '<div class="d-flex"><img class="border rounded-circle border-light" height="50px" src="' + products[index].Image + '" alt="">' +
                    '<div class="d-block mt-2 ml-2 text-uppercase"><a class="product-id" data-id="' + products[index].ID + '" href="<?php echo base_url(); ?>index.php/admin/Productmanage/editProduct/' + products[index].ID + '">ID: ' + products[index].ID + '</a><p>' + products[index].DisplayName + '</p></div>',
                    col,
                    Math.round((rate * 100) * 100) / 100 + '%',
                ])
            }
            oTable.draw();
        }

        $(document).ready(function() {

            $('#dataTable tbody').on('click', 'tr', function() {
                var data = oTable.row(this).data();
                id = $(data[1]).find('.product-id').data('id');
                $('#product-detail').removeAttr('hidden');
                displayDetailOf(id);
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#product-detail").offset().top
                }, 0);
            });
        });

        function displayDetailOf(id) {
            console.log(id);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/DataAnalyse/getCounterOfProduct',
                dataType: 'json',
                data: {
                    id: id,
                },
                success: function(data) {
                    showDataCounter(data[0]);
                }
            });
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/DataAnalyse/getEarningsOfProduct',
                dataType: 'json',
                data: {
                    id: id,
                },
                success: function(array) {
                    index = 0;
                    var filteredObj = array.find(function(item, i) {
                        year = new Date().getFullYear()
                        if (item.YEAR == year) {
                            index = i;
                            console.log(i);
                            return i;
                        }
                        $('#earning-header').html('Earnings Overview (' + year + ')');
                    });
                    console.log(index);
                    data = array[index];
                    earning = data == null ? [] : [
                        data.Jan, data.Feb, data.Mar, data.Apr, data.May, data.Jun, data.Jul, data
                        .Aug, data.Sep, data.Oct, data.Nov, data.Dec
                    ]
                    myLineChart.data.datasets[0].data = earning;
                    myLineChart.update();

                }
            });
        }

        function showDataCounter(data) {
            $('.main-pro-card img').attr('src', data.img);
            $('.main-pro-card p').html(data.name);
            $('.Views-card .item-title').html(data.view);
            $('.Views-card .item-percent').html((Math.round((data.rateView * 100) * 100) / 100).toFixed(2) + '%');
            $('.AddToCart-card .item-title').html(data.addToCart);
            $('.AddToCart-card .item-percent').html((Math.round((data.rateAddToCart * 100) * 100) / 100).toFixed(2) + '%');
            $('.Orders-card .item-title').html(data.allOrders);
            $('.Orders-card .item-percent').html((Math.round((data.rateOrder * 100) * 100) / 100).toFixed(2) + '%');
            $('.Sold-card .item-title').html(data.sold);
            $('.Sold-card .item-percent').html((Math.round((data.rateSold * 100) * 100) / 100).toFixed(2) + '%');
            $('.Earnings-card .item-title').html('$' + roundNumber(data.earnings));
            $('.Earnings-card .item-percent').html((Math.round((data.rateEarnings * 100) * 100) / 100).toFixed(2) + '%');



            dataChart = {
                labels: ["Completed", "Cancelled", "Refunded", "Others"],
                datasets: [{
                    data: (data.allOrders == 0) ? [0, 0, 0, 0] : [data.orderCompleted, data.orderCancelled, data.orderRefuneded, data.allOrders - data.orderCancelled - data.orderRefuneded - data.orderCompleted],
                    backgroundColor: ['#28a745', '#dc3545', '#fd7e14', '#ced4da'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            }

            myPieChart.data = dataChart;
            myPieChart.config.options.elements.center.text = data.allOrders + ' Orders';
            myPieChart.update();

        }
        createPieChart([], 0);
        createLineChart([]);

        //  ------------------------------------------ Crate Chart

        function createLineChart(data) {
            var ctx1 = document.getElementById("myLineChart").getContext("2d");
            myLineChart = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Earnings",
                        lineTension: 0.3,
                        backgroundColor: "rgba(78, 115, 223, 0.00)",
                        borderColor: "#28a745",
                        pointRadius: 3,
                        pointBackgroundColor: "#28a745",
                        pointBorderColor: "#28a745",
                        pointHoverRadius: 3,
                        pointHoverBackgroundColor: "#28a745",
                        pointHoverBorderColor: "#28a745",
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        data: data
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'date'
                            },
                        }],
                        yAxes: [{
                            ticks: {
                                maxTicksLimit: 5,
                                padding: 10,
                                // Include a dollar sign in the ticks
                                callback: function(value, index, values) {
                                    return '$' + number_format(value);
                                }
                            },
                        }],
                    },
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        titleMarginBottom: 10,
                        titleFontColor: '#6e707e',
                        titleFontSize: 14,
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        intersect: false,
                        mode: 'index',
                        caretPadding: 10,
                        callbacks: {
                            label: function(tooltipItem, chart) {
                                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: new Date().getFullYear(),
                    }
                },
            });
        }

        function createPieChart(data, totalOrder) {
            Chart.pluginService.register({
                beforeDraw: function(chart) {
                    if (chart.config.options.elements.center) {
                        // Get ctx from string
                        var ctx = chart.chart.ctx;

                        // Get options from the center object in options
                        var centerConfig = chart.config.options.elements.center;
                        var fontStyle = centerConfig.fontStyle || 'Arial';
                        var txt = centerConfig.text;
                        var color = centerConfig.color || '#000';
                        var maxFontSize = centerConfig.maxFontSize || 75;
                        var sidePadding = centerConfig.sidePadding || 20;
                        var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                        // Start with a base font of 30px
                        ctx.font = "30px " + fontStyle;

                        // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                        var stringWidth = ctx.measureText(txt).width;
                        var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                        // Find out how much the font can grow in width.
                        var widthRatio = elementWidth / stringWidth;
                        var newFontSize = Math.floor(30 * widthRatio);
                        var elementHeight = (chart.innerRadius * 2);

                        // Pick a new font size so it will not be larger than the height of label.
                        var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                        var minFontSize = centerConfig.minFontSize;
                        var lineHeight = centerConfig.lineHeight || 25;
                        var wrapText = false;

                        if (minFontSize === undefined) {
                            minFontSize = 20;
                        }

                        if (minFontSize && fontSizeToUse < minFontSize) {
                            fontSizeToUse = minFontSize;
                            wrapText = true;
                        }

                        // Set font settings to draw it correctly.
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'middle';
                        var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                        var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                        ctx.font = fontSizeToUse + "px " + fontStyle;
                        ctx.fillStyle = color;

                        if (!wrapText) {
                            ctx.fillText(txt, centerX, centerY);
                            return;
                        }

                        var words = txt.split(' ');
                        var line = '';
                        var lines = [];

                        // Break words up into multiple lines if necessary
                        for (var n = 0; n < words.length; n++) {
                            var testLine = line + words[n] + ' ';
                            var metrics = ctx.measureText(testLine);
                            var testWidth = metrics.width;
                            if (testWidth > elementWidth && n > 0) {
                                lines.push(line);
                                line = words[n] + ' ';
                            } else {
                                line = testLine;
                            }
                        }

                        // Move the center up depending on line height and number of lines
                        centerY -= (lines.length / 2) * lineHeight;

                        for (var n = 0; n < lines.length; n++) {
                            ctx.fillText(lines[n], centerX, centerY);
                            centerY += lineHeight;
                        }
                        //Draw text in center
                        ctx.fillText(line, centerX, centerY);
                    }
                }
            });

            var ctx2 = document.getElementById("myPieChart").getContext("2d");
            myPieChart = new Chart(ctx2, {
                type: 'doughnut',
                data: data,
                options: {
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 80,
                    elements: {
                        center: {
                            text: totalOrder + ' Orders',
                            color: '#111111', // Default is #000000
                            fontStyle: 'Open Sans', // Default is Arial
                            sidePadding: 20, // Default is 20 (as a percentage)
                            minFontSize: 18, // Default is 20 (in px), set to false and text will not wrap.
                            lineHeight: 20 // Default is 25 (in px), used for when text wraps
                        }
                    }
                },
            });
        }

        function setDefaultSelectedTab() {
                selected = '<?php echo $filter ?>';
                if (selected != '') {
                    $(".nav").find("[data-filter='" + selected.toLowerCase() + "']").trigger("click");
                }
            } 
            setDefaultSelectedTab();
    </script>


</body>

</html>