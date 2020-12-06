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

    <style>
        .dataTables_filter {
            display: none;
        }
    </style>
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
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseCustomer" aria-expanded="true" aria-controls="collapseCustomer">
                    <i class="fal fa-users"></i>
                    <span> Customers</span>
                </a>
                <div id="collapseCustomer" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url(); ?>index.php/admin/usermanage">
                            Customer Infomation</a>
                        <a class="collapse-item active" href="<?php echo base_url(); ?>index.php/admin/reviewmanage">
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
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>index.php/admin/dataanalyse/earnings_analyse">
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

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
                    <!-- <div class="row mb-2">
                        <div class="col-12 custom-font-2-bold">
                            Customer Reviews
                        </div>
                    </div> -->
                    <div class="card rounded-0 mb-4">
                        <!-- body -->
                        <div class="card-body custom-font-3">
                            <div class="container p-0 m-0">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="custom-font-4">Product Name</label>
                                            <input id="product_filter" type="text" class="form-control custom-font-4" placeholder="Place product name or id" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="custom-font-4">Customer</label>
                                            <input id="customer_filter" type="text" class="form-control custom-font-4" placeholder="Place customer name or id" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label class="custom-font-4">Category</label>
                                            <div class="dropdown no-arrow" id="dropdown-category">
                                                <button class="btn btn-white border dropdown-toggle mr-1 pr-5 custom-font-4" type="button" id="dropdownCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    All Category
                                                </button>
                                                <div id="product-category" class="dropdown-menu" aria-labelledby="dropdownCategory">
                                                    <a class="dropdown-item" href="#">All Category</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <form class="custome-datepicker">
                                            <fieldset>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <div class="input-prepend input-group">
                                                            <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control custom-font-4" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <button id="btn_search" class="btn btn-sm btn-orange pl-3 pr-3">Search</button>
                                        <button id="btn_clear" class="btn btn-sm btn-secondary pl-3 pr-3">Clear</button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <!-- Tabs -->
                                        <section id="tabs">
                                            <div class="">
                                                <div class="">
                                                    <div class="col-xs-12">
                                                        <nav>
                                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                                <a class="nav-item nav-link nav-link-orange active tab-element" id="nav-all-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" data-filter="0" aria-selected="true">All</a>
                                                                <a class="nav-item nav-link nav-link-orange tab-element" id="nav-1-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" data-filter="1" aria-selected="false">1 <i class="fas fa-star"></i></a>
                                                                <a class="nav-item nav-link nav-link-orange tab-element" id="nav-2-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" data-filter="2" aria-selected="false">2 <i class="fas fa-star"></i></a>
                                                                <a class="nav-item nav-link nav-link-orange tab-element" id="nav-3-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" data-filter="3" aria-selected="false">3 <i class="fas fa-star"></i></a>
                                                                <a class="nav-item nav-link nav-link-orange tab-element" id="nav-4-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" data-filter="4" aria-selected="false">4 <i class="fas fa-star"></i></a>
                                                                <a class="nav-item nav-link nav-link-orange tab-element" id="nav-5-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" data-filter="5" aria-selected="false">5 <i class="fas fa-star"></i></a>
                                                            </div>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table class="table" id="tableCustomer" width="100%" cellspacing="0">
                                    <thead class="">
                                        <tr>
                                            <th>Product Infomation</th>
                                            <th>Customer Review</th>
                                            <th>product_id</th> <!-- end 2 -->
                                            <th>product_name</th> <!-- end 3 -->
                                            <th>product_category_id</th> <!-- end 4 -->
                                            <th>customer_id</th> <!-- end 5 -->
                                            <th>customer_name</th> <!-- end 6 -->
                                            <th>time</th> <!-- end 7 -->
                                            <th>star</th> <!-- end 8 -->
                                        </tr>
                                    </thead>

                                    <tbody id="tableBodyContent">

                                    </tbody>
                                </table> <!-- end table -->
                            </div> <!-- end table-responsive -->
                        </div> <!-- end card body -->
                    </div> <!-- end card -->

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
    <!-- https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js -->
    <script src="<?php echo base_url(); ?>vendors/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- date range picker -->
    <script src="<?php echo base_url(); ?>vendors/daterangepicker-bootstrap/moment.js"></script>
    <script src="<?php echo base_url(); ?>vendors/daterangepicker-bootstrap/daterangepicker.js"></script>


    <!-- custom base script -->
    <script src="<?php echo base_url(); ?>js/base.js"></script>


    <script>
        $(document).ready(function() {



            categoryVal = "0";
            fromDateVal = "";
            toDateVal = "";
            productVal = "";
            customerVal = "";
            starVal = "0";

            oTable = $('#tableCustomer').DataTable({
                // "searching": false,
                "lengthChange": false,
                "order": false,
                "columnDefs": [{
                    "targets": [2, 3, 4, 5, 6, 7, 8],
                    "visible": false
                }]
            });

            $.fn.dataTableExt.afnFiltering.push(
                function(oSettings, aData, iDataIndex) {

                    product = false;
                    customer = false;
                    category = false;
                    time = false;
                    star = false;

                    // product id or name
                    product = productVal == '' ? true : (aData[2].toLowerCase() == productVal.toLowerCase()) || (aData[3].toLowerCase() == productVal.toLowerCase());


                    // customer id or name
                    customer = customerVal == '' ? true : (aData[5].toLowerCase() == customerVal.toLowerCase()) || (aData[6].toLowerCase() == customerVal.toLowerCase());


                    // category
                    category = categoryVal == '0' ? true : categoryVal == aData[4];


                    // time
                    time = (fromDateVal == '' && toDateVal == '') ? true : (aData[7] >= fromDateVal && aData[7] <= toDateVal);


                    // star
                    star = starVal == '0' ? true : starVal == aData[8];


                    return product && customer && category && time && star;
                }
            );

            $('#btn_clear').click(function() {
                categoryVal = '0';
                fromDateVal = '';
                toDateVal = '';
                productVal = '';
                customerVal = '';
                starVal = '0';

                $('#product_filter').val('');
                $('#customer_filter').val('');
                $('#reservation').val('');
                $('#dropdownCategory').html('All Category');

                oTable.draw();
            })

            $('#btn_search').click(function() {
                productVal = $('#product_filter').val();
                customerVal = $('#customer_filter').val();
                oTable.draw();
            })

            // date picker
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
                fromDateVal = '';
                toDateVal = '';
            });

            $('#reservation').on('apply.daterangepicker', function(ev, picker) {
                fromDateVal = new Date(picker.startDate.format('YYYY-MM-DD 00:00:00')).getTime();
                toDateVal = new Date(picker.endDate.format('YYYY-MM-DD 23:59:59')).getTime();
            });

            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/productmanage/requestCategory',
                dataType: 'json',
                success: function(data) {
                    solveCategory(data);
                }
            });

            function solveCategory(data) {
                var selectForm = document.getElementById('product-category');
                var n = data.length;
                var element = data;
                htmlInner = '<a class="dropdown-item text-capitalize dropdown-cate" data-filter="0" href="#">All Category</a>';
                for (var i = 0; i < n; i++) {
                    htmlInner += '<a class="dropdown-item text-capitalize dropdown-cate" data-filter="' + element[i]['ID'] + '" href="#">' + element[i]['DisplayName'] + '</a>';
                }
                $('#product-category').html(htmlInner);
            }

            // category select
            $(document).on('click', '.dropdown-cate', function(event) {
                categoryVal = $(this).data('filter');
                $('#dropdownCategory').html($(this).html());
                // oTable.draw();
            })

            // star select
            $('.tab-element').on("click", function(event) {
                starVal = $(this).data('filter');
                oTable.draw();
            })


            var orders = [];
            $.ajax({
                type: "GET",
                url: 'reviewmanage/listAllCustomerReview',
                dataType: 'json',
                success: function(response) {
                    // orders = data.reverse();
                    displayTable(response);
                    console.log(response);
                }
            });

            function displayTable(array) {
                for (var index = 0; index < array.length; index++) {
                    review = templateReview(array[index]);
                    product = templateProduct(array[index]);
                    oTable.row.add([
                        product,
                        review,
                        array[index].product_id,
                        array[index].product_name,
                        array[index].product_category_id,
                        array[index].customer_id,
                        array[index].customer_firstName + ' ' + array[index].customer_lastName,
                        array[index].reivew_date,
                        array[index].review_star,
                    ])
                }
                oTable.draw();
            }

            function templateProduct(data) {
                html = '<div class="row"><div class="col-sm-3">' +
                    '<img style="width:100%;height:auto" class="p-3" src="' + data.product_image + '">' +
                    '</div>' +
                    '<div class="col-sm-9">' +
                    '<a href="<?php echo base_url(); ?>index.php/admin/productmanage/info/' + data.product_id + '">' +
                    '<p class="custom-font-4-bold mt-4 pr-5">' + data.product_name + '</p>' +
                    '</a></div>' +
                    '</div>';
                return html;
            }

            function templateReview(data) {
                htmlOut = '';
                date = new Date().setTime(data.reivew_date);
                htmlOut += '<div class="row"><div class="col-sm-4">';
                if (data.customer_avatar != '') {
                    htmlOut +=
                        '<img style="width:60px;height:60px" height="60px" src="' + data.customer_avatar + '" class="img-rounded card-avt border rounded-circle">'
                } else {
                    avt = data.customer_firstName.charAt(0);
                    htmlOut +=
                        '<div style="width:60px;height:60px" class="review-avt bg-gray-700 text-white text-center rounded-circle">' +
                        avt + '</div>';
                }

                htmlOut +=
                    '<div class="review-block-name text-capitalize">' +
                    '<a href="<?php echo base_url(); ?>index.php/admin/usermanage/info?id=' + data.customer_id + '"' +
                    '<p class="custom-font-3-bold mb-0">' + data.customer_firstName + ' ' + data.customer_lastName +
                    '</p></a></div>' + '<div class="review-block-date">' + dateFormatFull(date) +
                    '<br /></div></div>' +
                    '<div class="col-sm-8"><div class="review-block-rate text-warning">';
                for (var i = 1; i <= 5; i++) {
                    htmlOut += (i <= data.review_star) ? "<i class='fas fa-star'></i>" :
                        "<i class='fal fa-star'></i>";
                }
                htmlOut += '</div>' +
                    '<div class="review-block-title">' + data.review_title + '</div>' +
                    '<div class="review-block-description">' + (data.review_content == null ? ' ' : data.review_content) + '</div></div></div>';
                return htmlOut;
            }


        });
    </script>


</body>

</html>