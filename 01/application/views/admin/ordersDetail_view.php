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
                <div class="container-fluid custom-font-4 mt-5">
                    <div class="row m-0">
                        <h6 class="custom-font-1-bold order_id"></h6>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-capitalize">
                            <div class="dropdown no-arrow">
                                <!-- button status -->
                                <button class="custom-tag dropdown-toggle status_button" role="button" id="dropdownStatus" data-toggle="dropdown" data-id="" aria-haspopup="true" aria-expanded="false"></button>
                                <div id="dataStatus" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item">Action</a>
                                    <a class="dropdown-item">Another action</a>
                                    <a class="dropdown-item">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="float-md-right date_created">
                            </p>
                        </div>
                    </div> <!-- end row -->

                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <div class="card-deck">
                                <div class="card rounded-0">
                                    <div class="card-body custom-font-4">
                                        <h5 class="card-title custom-font-1-bold text-uppercase customer_name"></h5>
                                        <p class="card-text customer_email"></p>
                                        <p class="card-text customer_phone"></p>
                                        <p class="card-text customer_address"></p>
                                    </div>
                                </div>

                                <div class="card rounded-0">
                                    <div class="card-body custom-font-4">
                                        <h5 class="card-title custom-font-1-bold text-uppercase">
                                            Shipping
                                        </h5>
                                        <label class="ship_option text-capitalize">
                                            
                                        </label>
                                    </div>
                                </div>

                                <div class="card rounded-0">
                                    <div class="card-body custom-font-4">
                                        <h5 class="card-title custom-font-1-bold text-uppercase">
                                            Payment
                                        </h5>
                                        <p class="card-text payment_method"></p>
                                        <p class="card-text payment_total"></p>
                                        <div class="statusDisplay"></div>
                                    </div>
                                </div>
                            </div> <!-- end card deck -->
                        </div><!-- end col -->
                    </div>
                    <!--end row -->

                    <div class="row mt-1 mt-sm-4">
                        <div class="col-12 col-lg-4 mt-3">
                            <div class="card bg-transparent rounded-0 border-0 shadow-sm">
                                <div class="card-body">
                                    <ul class="timeline custom-font-4">
                                        <p class="custom-font-2-bold text-gray-900" style="padding-left: 60px;">Status</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 mt-3">
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom-0" scope="col">#</th>
                                                    <th class="border-bottom-0" scope="col">Product</th>
                                                    <th class="border-bottom-0" scope="col">Price</th>
                                                    <th class="border-bottom-0" scope="col">Count</th>
                                                    <th class="border-bottom-0" scope="col">Discount</th>
                                                    <th class="border-bottom-0 text-right" scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableDetail">
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td class="row">
                                                        <img src="http://localhost:2104/01/FilesUpload/bx.swank.webp" alt="image" style="height:60px;">
                                                        <div>
                                                            <p class="custom-font-weight-bold">Ahihih</p>
                                                            <p>#dskflsdjflkdsjf</p>
                                                        </div>
                                                    </td>
                                                    <td>$120</td>
                                                    <td>2</td>
                                                    <td>15%</td>
                                                    <td>$204</td>
                                                </tr>
                                            </tbody>
                                        </table><!-- end table -->

                                        <div class="row custom-font-1-bold  border-top pt-3">
                                            <div class="col-6">

                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <div class="payment_total" style="padding-right: 0.75rem;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end card body -->
                            </div><!-- end card -->
                        </div>

                    </div> <!-- end row -->

                    <div class="float-right mt-3">
                        <button id="btnSave" class="btn btn-info rounded-0 pl-4 pr-4">Save
                        </button>
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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                </div>
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

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>js/base.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url(); ?>js/base.js"></script>


    <!-- Main infomation -->
    <script>
        var data = '';
        var timeline = '';
        var paid = '';
        var status = '';
        var payDate = '';
        var timeline = '';
        var id = parseURLParams(window.location.search).id[0];
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>index.php/admin/OrdersManage/orderDetail',
            dataType: 'json',
            data: {
                id: id,
            },
            success: function(ff) {
                if (ff != null) {
                    console.log(ff);
                    data = ff[0];
                    pushData(data);
                }
            }
        });

        function pushData(data) {

            $('.order_id').html('Order detail #' + data.id);
            $('.status_button').css('background', '#' + data.statusColor);
            $('.status_button').html(data.status);
            $('.date_created').html('Created:&nbsp;&nbsp;' + dateFormatHard(data.createAt));
            $('.customer_name').html(data.firstName + ' ' + data.lastName);
            $('.customer_email').html('<i class="fad fa-envelope-open text-gray-700 mr-2"></i> ' + data.email);
            $('.customer_phone').html('<i class="fad fa-phone-alt text-gray-700 mr-2"></i>' + data.phone);
            $('.customer_address').html('<i class="fad fa-car-building text-gray-700 mr-2"></i>' + data.address + ', ' + data.city);
            $('.payment_method').html('Method: ' + data.paymentName);
            $('.payment_total').html('Total: $' + data.total);
            $('.ship_option').html('<img class="rounded ship_icon" src="' + data.shipping_option_icon + '" alt="logo" style="width: 30px; height: 30px;">&nbsp ' + data.shipping_option_name);


            paid = data.paid;
            status = data.idStatus;
            payDate = data.payDate;
            timeline = data.timeline;
            timeline = timeline == '' ? [] : JSON.parse(timeline);
            statusDidchange = false;

            // Display status
            function statusVal() {
                var s = paid;
                if (s === '1') {
                    return "<span class='dot dot-sm dot-success'></span> Paid" + " <i>(" + payDate + ")</i>";
                } else {
                    return "<span class='dot dot-sm dot-warning'></span> Unpaid";
                }
            }

            $(".statusDisplay").html(statusVal());

            // Display detail order------------------------------------------------------------
            requestListDetail();

            function requestListDetail() {
                const id = data.id;
                console.log(id);
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>index.php/admin/OrdersManage/listOrderDetails',
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        if (data != null) {
                            displayDataHtml(data);
                        }
                    }
                });
            }

            function displayDataHtml(array) {
                var output = "";
                for (var i in array) {
                    output += "<tr>" +
                        "<th scope='row'>" + (parseInt(i) + 1) + "</th>" +
                        "<td class='row'>" +
                        "<img class='mr-2' src='" + array[i].Image + "' alt='image' style='height:60px;'>" +
                        "<div>" +
                        " <p class='custom-font-weight-bold'>" + array[i].productName + "</p>" +
                        " <p>ID: " + array[i].productId + "</p>" +
                        "<td>$" + array[i].price + "</td>" +
                        "<td>" + array[i].amount + "</td>" +
                        "<td>" + parseFloat(array[i].discount) * 100 + "%</td>" +
                        "<td class='text-right'>$" + array[i].total + "</td>" +
                        "</tr>";
                }
                $('#tableDetail').html(output);
            }


            // Display status-------------------------------------------------------------------
            requestOrderStatus();

            function requestOrderStatus() {
                const id = data.id;
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>index.php/admin/OrdersManage/listOrderStatus',
                    dataType: 'json',
                    success: function(ff) {
                        if (ff != null) {
                            displayStatus(ff);
                        }
                    }
                });
            }

            function displayStatus(array) {
                if (status == 4) {
                    $('#dropdownStatus').removeAttr('data-toggle');
                } else {
                    var output = "";
                    for (i = status; i < array.length; i++) {
                        output += "<a id='dropdown-" + array[i].id + "' class='dropdown-item rounded-0'" +
                            "data-color='#" + array[i].statusColor + "' data-status='" + array[i].DisplayName + "' " +
                            "onclick='changeStatus(" + array[i].id + ")'>" +
                            array[i].DisplayName +
                            "</a>";
                    }
                    $("#dataStatus").html(output);
                }
            }

            // display time line
            displayTimeline();

            function displayTimeline() {
                timeline.reverse();
                output = "";
                for (i = 0; i < timeline.length; i++) {
                    output += '<li>' +
                        '<p class="custom-font-weight-bold">' + timeline[i].time + '</p>' +
                        '<p class="text-capitalize">' + timeline[i].status + '</p>' +
                        '</li>';
                }
                $('.timeline').append(output);
                timeline.reverse();
            }

        }

        function changeStatus(i) {
            $('#dropdownStatus').attr('data-id', i);
            $('#dropdownStatus').css('background', $('#dropdown-' + i).data('color'));
            $('#dropdownStatus').html($('#dropdown-' + i).html());
            status = i;
            if (status == 4) {
                paid = 1;
                $(".statusDisplay").html("<span class='dot dot-sm dot-success'></span> Paid");
            }
            old = data.status;
            statusDidchange = (old != status);
            console.log(statusDidchange);
        }
        $("#btnSave").click(function() {
            var id = data.id;
            if (statusDidchange) {
                today = newDateForDB();
                timeline.push({
                    time: today,
                    status: $('#dropdown-' + status).html().toLowerCase(),
                })
                payDate = status == 4 && (payDate == '' || payDate == '0000-00-00 00:00:00') && paid == 1 ? today : '';
                paid = status == 4 ? 1 : 0;
            }
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/ordersmanage/updateOrder',
                dataType: 'json',
                data: {
                    id: id,
                    status: status,
                    paid: paid,
                    payDate: payDate,
                    timeline: JSON.stringify(timeline),
                },
                success: function(data) {
                    if (data != null) {
                        console.log(data);
                        window.location.replace(data.url);
                    }
                }
            });

        });
    </script>

    <script>

    </script>

</body>

</html>