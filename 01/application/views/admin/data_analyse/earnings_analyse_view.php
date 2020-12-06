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

    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

    <!-- Custom style for datatable -->
    <link href="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                    <span> Sale Order</span>
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
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/usermanage">
                            Customer Infomation</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/reviewmanage">
                            Customer Reviews</a>
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
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/admin/dataanalyse/earnings_analyse">
                    <i class="fal fa-sack-dollar"></i>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

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
                                        <div class="icon-circle bg-primary">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Huu Nghia</span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div>
                    <div class="container p-0">
                        <!-- Content Row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card rounded-0">
                                    <div class="card-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 border-bottom mb-4">
                                                    <p class="custom-font-5-bold text-gray-700">Overview</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-12 border-right">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p class="text-orange custom-font-6-bold">Will be Paid &nbsp<i class="fad fa-badge-dollar"></i></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p class="custom-font-1-bold text-gray-700 mb-0">Total</p>
                                                            <p class="will-paid custom-font-6-bold text-gray-800">$0</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-12 pl-md-5">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p class="text-success custom-font-6-bold">Paid &nbsp<i class="fad fa-money-check-alt"></i></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <p class="custom-font-1-bold text-gray-700 mb-0">Today</p>
                                                            <p class="today-paid custom-font-6-bold text-gray-800">$0</p>
                                                        </div>
                                                        <div class="col-3">
                                                            <p class="custom-font-1-bold text-gray-700 mb-0">This Week</p>
                                                            <p class="this-week custom-font-6-bold text-gray-800">$0</p>
                                                        </div>
                                                        <div class="col-3">
                                                            <p class="custom-font-1-bold text-gray-700 mb-0">This Month</p>
                                                            <p class="this-month custom-font-6-bold text-gray-800">$0</p>
                                                        </div>
                                                        <div class="col-3">
                                                            <p class="custom-font-1-bold text-gray-700 mb-0">Total</p>
                                                            <p class="total-paid custom-font-6-bold text-gray-800">$0</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->

                    </div> <!-- end container -->

                    <!-- container table -->
                    <div class="container p-0 mt-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card rounded-0">
                                    <div class="card-header bg-white p-0">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Tabs -->
                                                <section id="tabs">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <nav>
                                                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                                        <a class="nav-item nav-link active tab-element" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" data-filter="unpaid" aria-selected="true">Will be Paid</a>
                                                                        <a class="nav-item nav-link tab-element" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" data-filter="paid" aria-selected="false">Paid</a>
                                                                    </div>
                                                                </nav>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body custom-font-3">
                                        <div>
                                            <div hidden class="date-pick container p-0 ml-0 mr-0 mb-3">
                                                <div class="row ml-0">
                                                    <form class="custome-datepicker">
                                                        <fieldset>
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <div class="input-prepend input-group">
                                                                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control custom-font-3" value="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                            <table class="table" id="tableOrder" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>ID Order</th>
                                                        <th>Customer</th>
                                                        <th>Date Created</th>
                                                        <th>Date of payment</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <tbody class="text-capitalize" id="tableBodyContent">

                                                </tbody>
                                            </table> <!-- end table -->
                                        </div> <!-- end table-responsive -->
                                    </div> <!-- end card body -->

                                </div><!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- end table contentner -->

                    <!-- container chart -->
                    <div class="container p-0 mt-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card rounded-0">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="container-fluid">
                                            <div class="col-12">
                                                <div class="row  border-bottom mb-4">
                                                    <div class="col-12 col-sm-4">
                                                        <div class="input-group mb-3">
                                                            <input id="applyYear" type="text" class="form-control" placeholder="Year" value="2020">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-orange" type="button" id="btnApplyYear">Apply</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-12 col-sm-6">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p hidden class="invalid-data text-muted">
                                                            Invalid data
                                                        </p>
                                                        <div class="chart-bar">
                                                            <canvas id="myBarChart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container chart -->

                </div>
            </div><!-- end main content -->



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-dark" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>vendors/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>vendors/chart.js/Chart.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>js/demo/chart-area-demo.js"></script>

    <script src="<?php echo base_url(); ?>vendors/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- date range picker -->
    <script src="<?php echo base_url(); ?>vendors/daterangepicker-bootstrap/moment.js"></script>
    <script src="<?php echo base_url(); ?>vendors/daterangepicker-bootstrap/daterangepicker.js"></script>

    <!-- script for get pro version fontawesome -->
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>

    <!-- script for get pro version fontawesome -->
    <script src="<?php echo base_url(); ?>js/base.js"></script>

    <script>
        oTable = $('#tableOrder').DataTable({
            "columnDefs": [{
                "targets": [6],
                "visible": false
            }]
        });

        dataFilter = "unpaid";
        minDateFilter = "";
        maxDateFilter = "";
        arrayOrder = "";
        myBarChart = "";
        createBarChart([]);

        $.fn.dataTableExt.afnFiltering.push(
            function(oSettings, aData, iDataIndex) {
                dataOK = false;
                timeOK = false;
                if (dataFilter == 'paid') {
                    if (minDateFilter == "" && maxDateFilter == "") {
                        timeOK = true;
                    } else {
                        cur = new Date(aData[2].split(" ")[0]).getTime();
                        if (cur >= minDateFilter && cur <= maxDateFilter) {
                            timeOK = true;
                        }
                    }
                    dataOK = aData[6] == 4;
                } else {
                    timeOK = true;
                    dataOK = aData[6] < 4;
                }
                console.log();
                return dataOK && timeOK;
            }
        );

        $('#reservation').daterangepicker({
            format: 'YYYY-MM-DD',
            locale: {
                cancelLabel: 'Clear'
            }
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });

        $('#reservation').on('cancel.daterangepicker', function(ev, picker) {
            //do something, like clearing an input
            $('#reservation').val('');
            minDateFilter = '';
            maxDateFilter = '';
            oTable.draw();
        });

        $('#reservation').on('apply.daterangepicker', function(ev, picker) {
            minDateFilter = new Date(picker.startDate.format('YYYY-MM-DD 00:00:00')).getTime();
            maxDateFilter = new Date(picker.endDate.format('YYYY-MM-DD 23:59:59')).getTime();
            oTable.draw();
        });

        $('.tab-element').on("click", function(event) {

            dataFilter = $(this).data('filter').toLowerCase();
            if (dataFilter == 'paid') {
                $('#thead-change').html('Payment Date');
                $('.date-pick').removeAttr('hidden');
                oTable.columns([3]).visible(true);
                oTable.columns([2]).visible(false);
            } else {
                $('#thead-change').html('Date Created');
                $('.date-pick').attr('hidden', 'hidden');
                oTable.columns([3]).visible(false);
                oTable.columns([2]).visible(true);
            }
            oTable.draw();
        })

        $('#btnApplyYear').on("click", function() {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/DataAnalyse/getEarningOfYear',
                dataType: 'json',
                data: {
                    year: $('#applyYear').val(),
                },
                success: function(array) {

                    data = array[0];
                    earning = data == null ? [] : [
                        data.Jan, data.Feb, data.Mar, data.Apr, data.May, data.Jun, data.Jul, data
                        .Aug, data.Sep, data.Oct, data.Nov, data.Dec
                    ]
                    myBarChart.data.datasets[0].data = earning;
                    myBarChart.update();

                }
            });
        })

        // get earning overview
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>index.php/admin/OrdersManage/requestEarningOverview',
            dataType: 'json',
            success: function(array) {
                index = 0;
                var filteredObj = array.find(function(item, i) {
                    year = new Date().getFullYear()
                    if (item.Year == year) {
                        index = i;
                        return i;
                    }
                    $('#earning-header').html('Earnings Overview (' + year + ')');
                });
                data = array[index];
                earning = [
                    data.Jan, data.Feb, data.Mar, data.Apr, data.May, data.Jun, data.Jul, data
                    .Aug, data.Sep, data.Oct, data.Nov, data.Dec
                ];
                myBarChart.data.datasets[0].data = earning;
                myBarChart.update()
            }
        });

        $.ajax({
            type: "GET",
            url: '<?php echo base_url(); ?>index.php/admin/DataAnalyse/getEarningAnalyse',
            success: function(array) {
                displayPaid(JSON.parse(array));
            }
        });

        function displayPaid(arr) {
            data = arr[0];
            $('.will-paid').html("$" + roundNumber(data.willBePaid));
            $('.today-paid').html("$" + roundNumber(data.today));
            $('.this-week').html("$" + roundNumber(data.thisWeek));
            $('.this-month').html("$" + roundNumber(data.thisMonth));
            $('.total-paid').html("$" + roundNumber(data.totalPaid));
        }

        $.ajax({
            type: "GET",
            url: '<?php echo base_url(); ?>index.php/admin/OrdersManage/requestOrderList_Ajax',
            dataType: 'json',
            success: function(data) {
                orders = data.reverse();
                displayTable(orders);
                arrayOrder = orders;
            }
        });

        function displayTable(array) {
            oTable.clear();
            for (var index = 0; index < array.length; index++) {
                oTable.row.add([
                    '<a class="order-id" href="<?php echo base_url(); ?>index.php/admin/ordersmanage/detail?id=' + array[index].id + '">' + array[index].id + '</a>',

                    array[index].fullName,
                    array[index].createAt,
                    array[index].payDate,
                    array[index].status,
                    "$" + array[index].total,
                    array[index].idStatus,
                ])
            }
            // default is will be paid
            oTable.columns([3]).visible(false);
            oTable.columns([2]).visible(true);
            oTable.draw();
        }

        function createBarChart(data) {
            var ctx = document.getElementById("myBarChart").getContext("2d");
            myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Earning",
                        backgroundColor: 'rgba(13,179,158,0.6)',
                        hoverBackgroundColor: 'rgba(13,179,158,0.9)',
                        borderColor: 'rgba(13,179,158,1)',
                        data: data,
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 25,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'month'
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                maxTicksLimit: 12
                            },
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,

                                maxTicksLimit: 5,
                                padding: 10,
                                // Include a dollar sign in the ticks
                                callback: function(value, index, values) {
                                    return '$' + number_format(value);
                                }
                            },
                            gridLines: {
                                color: "rgb(234, 236, 244)",
                                zeroLineColor: "rgb(234, 236, 244)",
                                drawBorder: false,
                                borderDash: [2],
                                zeroLineBorderDash: [2]
                            }
                        }],
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        titleMarginBottom: 10,
                        titleFontColor: '#6e707e',
                        titleFontSize: 14,
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                        callbacks: {
                            label: function(tooltipItem, chart) {
                                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                            }
                        }
                    },
                }
            });
        }
    </script>
</body>

</html>