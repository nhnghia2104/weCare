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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>css/sb-admin-2.min.css" rel="stylesheet">

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
            <li class="nav-item active">
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                <div class="container shadow-sm bg-white status-group mt-3 mb-3">
                    <div class="row">
                        <a href="<?php echo base_url(); ?>index.php/admin/ordersmanage?filter=unsolved" id="status-unsolved" class="col-md-3 col-6 mt-2 mb-2 item-status text-center">
                            <p class="item-title mt-3 mb-0">0</p>
                            <p class="item-desc">Unsolved Order</p>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/ordersmanage?filter=confirmed" id="status-processed" class="col-md-3 col-6 mt-2 mb-2 item-status text-center">
                            <p class="item-title mt-3 mb-0">0</p>
                            <p class="item-desc">Confirmed Orders</p>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/ordersmanage?filter=shipped" id="status-shipped" class="col-md-3 col-6 mt-2 mb-2 item-status text-center">
                            <p class="item-title mt-3 mb-0">0</p>
                            <p class="item-desc">Shipped</p>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/ordersmanage?filter=completed" id="status-completed" class="col-md-3 col-6 mt-2 mb-2 item-status text-center">
                            <p class="item-title mt-3 mb-0">0</p>
                            <p class="item-desc">Completed Orders</p>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/ordersmanage?filter=cancelled" id="status-cancelled" class="col-md-3 col-6 mt-2 mb-2 item-status text-center">
                            <p class="item-title mt-3 mb-0">0</p>
                            <p class="item-desc">Cancelled Orders</p>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/ordersmanage?filter=refunded" id="status-refunded" class="col-md-3 col-6 mt-2 mb-2 item-status text-center">
                            <p class="item-title mt-3 mb-0">0</p>
                            <p class="item-desc">Refunded Orders</p>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/productmanage?filter=outstock" id="status-outstock" class="col-md-3 col-6 mt-2 mb-2 item-status text-center">
                            <p class="item-title mt-3 mb-0">0</p>
                            <p class="item-desc">Products Out Of Stock</p>
                        </a>
                        <a href="<?php echo base_url(); ?>index.php/admin/productmanage?filter=sale" id="status-sale" class="col-md-3 col-6 mt-2 mb-2 item-status text-center">
                            <p class="item-title mt-3 mb-0">0</p>
                            <p class="item-desc">Sale</p>
                        </a>
                    </div>
                </div>
                <div class="container p-0">
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-lg-9 col-md-7">
                            <div class="card rounded-0 shadow-sm mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-white">
                                    <h6 id="earning-header" class="m-0 font-weight-bold text-primary">Earnings Overview
                                    </h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle custom-font-1-bold" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            More <i class="far fa-angle-right"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="card rounded-0 shadow-sm mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-white">
                                    <h6 id="earning-header" class="m-0 font-weight-bold text-primary">Best Seller
                                    </h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle custom-font-1-bold" href="<?php echo base_url(); ?>index.php/admin/dataanalyse/products_overview?filter=sold" role="button">
                                            Detail <i class="far fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="card text-center border-0">
                                        <a class="go-to-detail-product" id="product-a">
                                            <img class="img-responsive card-img p-3" src="">
                                        </a>
                                        <div class="card-body p-0">
                                            <h5 id="product-style" class="card-text text-uppercase custom-font-weight-light custom-font-3 text-black-50 mb-1">
                                                style</h5>
                                            <h4 id="product-name" class="card-title mb-2 custom-font-1-bold"></h4>
                                            <div class="row justify-content-center align-items-center">
                                                <p id="price-cur" class="m-0 custom-font-3 custom-font-weight-bold"></p>
                                                <h5 id="discountt" class="mb-0 text-black-50 custom-font-3 custom-font-weight-light">
                                                </h5>
                                            </div>
                                            <h5 id="price-old" class="mb-0 custom-font-3 custom-font-weight-light text-dec-line">
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

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

    <!-- script for get pro version fontawesome -->
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>

    <script>
        // get order status
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>index.php/admin/OrdersManage/requestCountOrdersWithStatus',
            dataType: 'json',
            success: function(status) {
                if (status[0] != null) {
                    loadStatusOrder(status[0]);
                }
            }
        });

        function loadStatusOrder(status) {
            $('#status-unsolved > .item-title').html(status.unsolved);
            $('#status-processed > .item-title').html(status.processed);
            $('#status-shipped > .item-title').html(status.shipped);
            $('#status-completed > .item-title').html(status.completed);
            $('#status-cancelled > .item-title').html(status.cancelled);
            $('#status-refunded > .item-title').html(status.refunded);
            // $('#status-unprocessed > .item-title').html(status.unprocess);
        }

        // get product status
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>index.php/admin/ProductManage/requestCountProductWithStatus',
            dataType: 'json',
            success: function(status) {
                if (status[0] != null) {
                    loadStatusProduct(status[0]);
                }
            }
        });

        function loadStatusProduct(status) {
            $('#status-outstock > .item-title').html(status.outOfStock);
            $('#status-sale > .item-title').html(status.sale);
        }
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
                ]
                createChart(earning);
            }
        });

        // get most view product
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>index.php/admin/ProductManage/getBestSellerProduct',
            dataType: 'json',
            success: function(array) {
                if (array[0] != null) {
                    ele = array[0];
                    $('#product-a > img').attr('src', ele.Image);
                    $('#product-style').html(ele.style);
                    $('#product-name').html(ele.name);

                    if (Number(ele.discount) > 0) {
                        $('#price-cur').html("$" + (1 - Number(ele.discount)) * Number(ele.Price));
                        $('#discountt').html('-' + Number(ele.discount) * 100 + '%');
                        $('#price-old').html("$" + ele.Price);
                    }
                }
            }
        });
    </script>
</body>

</html>