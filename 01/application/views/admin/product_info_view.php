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

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>img/svg/logo.svg" />
    <link href="<?php echo base_url(); ?>vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/sb-admin-2.min.css">



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
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
                    <i class="fal fa-shopping-bag"></i>
                    <span> Product</span>
                </a>
                <div id="collapseProduct" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
                                            <button class="btn btn-primary" type="button">
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

                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <button class="btn rounded-0 pl-4 pr-4 btn-sm btn-info btn_edit">Edit</button>
                            <button class="btn rounded-0 pl-4 pr-4 btn-sm btn-info btn_save">Save</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body custom-font-4 text-info">
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/Productmanage/updateProduct">
                                <!-- Product's ID -->
                                <input type="hidden" name="id" class="p_id" value=""> <!-- fake -->
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="hidden" id="product-image2" name="product-image2" value=""> <!-- fake -->
                                            <input name="product-image" id="upload" type="file" accept="image/*" onchange="readURL(this);" class="form-control rounded-0">
                                            <img style="height:auto; width:100%;" class="p_avt" src="" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p class="" id="p_id">#123123</p>
                                            <p id="p_name" class="custom-font-6-bold"></p>
                                            <div hidden class="form-group group_name">
                                                <label class="col-form-label custom-font-weight-bold">Product's
                                                    name</label>
                                                <div class="">
                                                    <input type="text" class="form-control bg-nonLamEm" id="product-name" name="product-name" placeholder="Name" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <div class="p_status">
                                            <span class="switch switch-sm">
                                                <input name="product-status" type="checkbox" class="switch" id="switch-status" value="0" onclick="statusChange();">
                                                <label id="statusLabel" for="switch-status"></label>
                                            </span>
                                            </div>
                                            <!-- Input inventory -->
                                            <div class="form-group p-0">
                                                <label class="col-12 col-form-label custom-font-weight-bold p-0 mb-1">
                                                    Inventory</label>
                                                <div class="input-group mb-3 col-4 offset-8 p-0">
                                                    <input id="product-inventory" name="product-inventory" type="number" step="1" class="form-control text-center" aria-label="Amount (to the nearest dollar)" placeholder="" value="<?= $dataProduct[0]['inventory'] ?>">
                                                </div>
                                            </div><!-- end input Inventory -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="tabs" class="col-12 custom-font-4">
                                            <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General Infomation</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Description</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group row">
                                                                <label class="col-12 col-md-3 col-form-label custom-font-weight-bold">Category</label>
                                                                <!-- ID Category -->
                                                                <input id="p_idCategory" type="hidden" name="product-categoryID" value="">
                                                                <div class="col-12 col-md-6">
                                                                    <p id="p_category" class="col-form-label">ngon</p>
                                                                    <select hidden id="product-category" class="form-control bg-nonLamEm" name="product-category">

                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <!-- Select Style -->
                                                            <div class="form-group row">
                                                                <label class="col-12 col-md-3 col-form-label custom-font-weight-bold">Style</label>

                                                                <div class="col-12 col-md-6">
                                                                    <p id="p_style" class="col-form-label">ngon</p>
                                                                    <select hidden id="product-style" class="text-capitalize form-control bg-nonLamEm" name="product-style">
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- end select Style -->
                                                        </div>

                                                        <div class="col-6">
                                                            <!-- Input price -->
                                                            <div class="form-group row">
                                                                <label class="col-12 col-md-3 col-form-label custom-font-weight-bold">Sale price</label>
                                                                <div class="input-group col-12 col-md-6">
                                                                    <p id="p_price" class="col-form-label">ngon</p>

                                                                    <div hidden id="p_price-edit">
                                                                        <input id="product-price" name="product-price" type="number" step="0.01" class="form-control bg-nonLamEm" aria-label="Amount (to the nearest dollar)" placeholder="Price" value="">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- end input Price -->
                                                            <!-- input discount -->
                                                            <div class="form-group row">
                                                                <label class="col-12 col-md-3 col-form-label custom-font-weight-bold">Discount (%)</label>
                                                                <div class="input-group col-12 col-md-6">
                                                                    <p id="p_discount" class="col-form-label">ngon</p>
                                                                    <div hidden id="p_discount-edit">
                                                                        <input id="product-discount" name="product-discount" type="number" step="1" class="form-control bg-nonLamEm" aria-label="Amount (to the nearest dollar)" placeholder="Price" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end discount -->
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <!-- Input description -->
                                                                <div class="form-group">
                                                                    <label class="col-form-label custom-font-weight-bold">Description</label>
                                                                    <div class="">
                                                                        <p id="p_description"></p>
                                                                        <textarea hidden class="form-control bg-nonLamEm" id="product-description" rows="10" name="product-description" placeholder="Description"><?= $dataProduct[0]['Description'] ?></textarea>
                                                                    </div>
                                                                </div>
                                                                <!-- end input description -->
                                                            </div>
                                                            <div class="col-6">
                                                                <!-- Input details -->
                                                                <div class="form-group">
                                                                    <label class="col-12 col-form-label custom-font-weight-bold">Details</label>
                                                                    <div class="col-12 p-0">
                                                                        <div hidden id="table-edit">
                                                                            <table class="table-details table table-striped table-bordered">

                                                                            </table>
                                                                            <a class="btn-Them text-primary"><i class="fal fa-plus"></i> Add Row</a>
                                                                        </div>

                                                                        <table class="detail-content table">

                                                                        </table>
                                                                    </div>
                                                                    <input hidden name="product-detail" id="product-detail" type="text">
                                                                </div> <!-- end detail -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <a class="btn rounded-0 pl-4 pr-4 btn-info" type="button" href="<?php echo base_url(); ?>index.php/admin/Productmanage/cancel">Cancel</a>
                                    <button class="btn-save btn rounded-0 pl-4 pr-4 btn-info">Save & Close</button>
                                </div>
                            </form>
                            <!-- end form -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- /.container -->

            </div>
            <!-- End of Main Content -->

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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-lg custom-font-1" role="document">
            <input hidden type="text" name="id" id="user_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalCenterTitle">Update avatar
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <!-- Input Image -->
                        <div class="form-group">
                            <div class="col-12">
                                <!-- Upload image input-->
                                <div class="input-group mb-3 px-2 py-2 rounded-0 bg-white border">
                                    <!-- <input name="product-image" id="upload" type="file" accept="image/*" onchange="readURL(this);" class="form-control rounded-0"> -->
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted rounded-0">Choose
                                        file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4">
                                            <i class="fal fa-cloud-upload mr-2 text-muted"></i>
                                            <small class="text-uppercase font-weight-normal text-muted">Upload</small>
                                        </label>
                                    </div>
                                </div>

                                <!-- Uploaded image area-->
                                <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                                </div>
                            </div>
                        </div> <!-- end input image -->
                    </div><!-- /.container -->
                </div>
                <!-- end modal body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary pl-3 pr-3 rounded-0" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-info rounded-0 pl-3 pr-3 btn_update_avt">Update</button>
                </div>
            </div> <!-- end modal content -->
        </div>

    </div> <!-- end modal -->


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>vendors/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>js/sb-admin-2.min.js"></script>

    <!-- script for get pro version fontawesome -->
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>

    <!-- input Image -->
    <script>
        var id = '';
        id = window.location.href.substring(window.location.href.lastIndexOf('/') + 1).replace('#','');
        $('.p_avt').click(function() {
            $('#exampleModalCenter').modal('show');
        })
        $('.btn_update_avt').click(function() {
            $('#exampleModalCenter').modal('hide');
            cc = $('#imageResult').attr('src');
            $('.p_avt').attr('src', cc);
        })

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function() {
            $('#upload').on('change', function() {
                readURL(input);
            });
        });

        /*  ==========================================
            SHOW UPLOADED IMAGE NAME
        * ========================================== */
        var input = document.getElementById('upload');
        var infoArea = document.getElementById('upload-label');

        input.addEventListener('change', showFileName);

        function showFileName(event) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = fileName;
        }

        // <!--click button save-- >

        p_data = '';
        console.log(window.location.href.substring(window.location.href.lastIndexOf('/') + 1));

        gogogo();

        function gogogo() {

            $('.p_id').val(id);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/productmanage/getProductInfo',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function(obj) {
                    console.log(obj);
                    if (obj[0] != null) {
                        pushData(obj[0]);
                    }


                }
            });
        }


        $('.btn_edit').click(function() {
            // name
            $('.group_name').removeAttr('hidden');
            $('#p_name').attr('hidden', 'hidden');

            // category
            $('#product-category').removeAttr('hidden');
            $('#p_category').attr('hidden', 'hidden');

            // style
            $('#product-style').removeAttr('hidden');
            $('#p_style').attr('hidden', 'hidden');

            // price
            $('#p_price-edit').removeAttr('hidden');
            $('#p_price').attr('hidden', 'hidden');

            // discount
            $('#p_discount-edit').removeAttr('hidden');
            $('#p_discount').attr('hidden', 'hidden');

            // Description
            $('#product-description').removeAttr('hidden');
            $('#p_description').attr('hidden', 'hidden');

            // Detail
            $('#table-edit').removeAttr('hidden');
            $('.detail-content').attr('hidden', 'hidden');
        })

        $('.btn_save').click(function() {
            // name
            $('.group_name').attr('hidden', 'hidden');
            $('#p_name').removeAttr('hidden');
            $('#p_name').html($('#product-name').val());

            // category
            $('#product-category').attr('hidden', 'hidden');
            $('#p_category').removeAttr('hidden');
            $('#p_category').html($('#product-category option:selected').html());

            // style
            $('#product-style').attr('hidden', 'hidden');
            $('#p_style').removeAttr('hidden');
            $('#p_style').html($('#product-style option:selected').html());

            // price
            $('#p_price-edit').attr('hidden', 'hidden');
            $('#p_price').removeAttr('hidden');
            $('#p_price').html('$' + $('#product-price').val());

            // discount
            $('#p_discount-edit').attr('hidden', 'hidden');
            $('#p_discount').removeAttr('hidden');
            $('#p_discount').html($('#product-discount').val() + '%');

            // Description
            $('#product-description').attr('hidden', 'hidden');
            $('#p_description').removeAttr('hidden');
            $('#p_description').html($('#product-description').val());

            // Detail
            $('#table-edit').attr('hidden', 'hidden');
            $('.detail-content').removeAttr('hidden');

            arrDetail = [];
            for (index = 0; index < $('.table-details tr').length; index++) {
                key = $('.table-details tr').eq(index).find($('.detail-key')).val();
                value = $('.table-details tr').eq(index).find($('.detail-val')).val();
                if (key != '' && value != '') {
                    arrDetail.push({
                        key: key,
                        val: value
                    });
                }
            }
            displayTableReview(arrDetail);
            $('#product-detail').val(JSON.stringify(arrDetail));

        })




        function pushData(dataUse) {

            $('#product-image2').val(dataUse.Image);
            $('.p_avt').attr('src', dataUse.Image != '' ? dataUse.Image : 'https://www.flaticon.com/svg/static/icons/svg/44/44413.svg');
            // id
            $('#p_id').html('#' + dataUse.ID.toUpperCase());
            // name
            $('#p_name').html(dataUse.Name);
            $('#product-name').val(dataUse.Name);

            // category
            $('#p_category').html(dataUse.Category);

            // style
            $('#p_style').html(dataUse.style);

            // price
            $('#p_price').html('$' + dataUse.Price);
            $('#product-price').val(dataUse.Price);

            // discount
            $('#p_discount').html(dataUse.discount * 100 + '%');
            $('#product-discount').val(dataUse.discount * 100);

            // status
            sst = '<span class="switch switch-sm">' +
                '<input name="product-status" type="checkbox" class="switch" id="switch-status" onclick="statusChange();"' +
                (dataUse.status == '1' ? 'value="1" checked' : 'value="0"') + '>' +
                '<label id="statusLabel" for="switch-status"' +
                (dataUse.status == '1' ? 'style="color: #449D44 ;"' : 'style="color: #6e707e;"') + '>' + 'Published' + '</label></span>';
            // $('.p_status').html(sst);

            $('.p_status input').val(dataUse.status);
            $('.p_status input').prop('checked',dataUse.status == 1 ? true : false);
            $('.p_status #switch-status').prop('value', dataUse.status);
            $('.p_status #statusLabel').css('color', dataUse.status == 1 ? '#449D44' : '#6e707e');
            $('.p_status #statusLabel').html(dataUse.status == 1 ? 'Published' : 'Unpublished');

            // p_description
            $('#p_description').html(dataUse.Description);

            // detail product
            detail = dataUse.details;


            rac = detail != '' ? JSON.parse(dataUse.details) : '';
            displayTableReview(rac);

            // !--display style options-- >

            function requestStyleOptions() {
                $.ajax({
                    type: "POST",
                    url: 'http://localhost:2104/01/index.php/admin/Productmanage/requestStyleOptions_Ajax/',
                    dataType: 'json',
                    success: function(arr) {
                        // console.log(data);
                        displayStyle(arr);
                    }
                });
            }

            function displayStyle(array) {
                var output = "";
                const styleID = "<?php echo $dataProduct[0]['styleID'] ?>";
                for (var index = 0; index < array.length; index++) {
                    const element = array[index];
                    output += "<option value='" + element.id + "'";
                    output += (element.id == styleID) ? " selected>" : ">";
                    output += element.DisplayName + "</option>";
                }
                $('#product-style').html(output);
            }
            requestStyleOptions();

            // Category
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/productmanage/requestCategory',
                dataType: 'json',
                success: function(arr) {
                    solveCategory(arr);
                }
            });

            function solveCategory(arr) {
                var selectForm = document.getElementById('product-category');
                var n = arr.length;
                cateID = dataUse.IDCategory;
                console.log(arr);
                htmlInner = '<option class="dropdown-item text-capitalize dropdown-cate" data-filter="All Category" href="#">All Category</a>';
                for (var i = 0; i < n; i++) {
                    htmlInner += "<option value='" + arr[i].ID + "'";
                    htmlInner += (arr[i].ID == cateID) ? " selected>" : ">";
                    htmlInner += arr[i].DisplayName + "</option>";
                }
                $('#product-category').html(htmlInner);
            }
        }

        // !--status change-- >

        function statusChange() {
            console.log('rac');
            status = $('#switch-status').val();
            if (status == 0) {
                $('#switch-status').prop('value', 1);
                $('#statusLabel').css('color', '#449D44');
            } else {
                $('#switch-status').prop('value', 0);
                $('#statusLabel').css('color', '#6e707e');
            }
        }



        function displayTableEdit(arr) {
            for (index = 0; index < arr.length; index++) {

                innerhtml = '<tr>' +
                    '<td><input class="detail-key form-control rounded-0" type="text" value="' + arr[index].key + '">' +
                    '</td>' +
                    '<td>' +
                    '<input class="detail-val form-control rounded-0" type="text" value="' + arr[index].val + '">' +
                    '</td>' +
                    '<td class="text-center text-danger"><a class="btn-remove">' +
                    '<i class="far fa-trash-alt"></i></a>' +
                    '</td>'
                '</tr>';
                $('.table-details').append(innerhtml);
            }
        }

        function displayTableReview(arr) {
            innerhtml = "";
            for (index = 0; index < arr.length; index++) {

                innerhtml += '<tr>' +
                    '<td class="text-left font-weight-light">' + arr[index].key +
                    '</td>' +
                    '<td class="text-right">' + arr[index].val +
                    '</td>' +
                    '</tr>';
            }
            $('.detail-content').html(innerhtml);
        }

        // display Detail
        function displayDetail() {
            // json = JSON.parse('<?php echo $dataProduct[0]['details'] ?>');
            displayTableEdit(json);
        }
        // displayDetail();

        $('.table-details').on('click', '.btn-remove', function() {
            $(this).closest("tr").remove();
        });
        $('.btn-Them').click(function() {
            innerhtml = '<tr>' +
                '<td><input class="detail-key form-control rounded-0" type="text">' +
                '</td>' +
                '<td>' +
                '<input class="detail-val form-control rounded-0" type="text">' +
                '</td>' +
                '<td class="text-center text-danger"><a class="btn-remove">' +
                '<i class="far fa-trash-alt"></i></a>' +
                '</td>'
            '</tr>';
            $('.table-details').append(innerhtml);
        });
        $('.btn-save').click(function() {
            arrDetail = [];
            for (index = 0; index < $('.table-details tr').length; index++) {
                key = $('.table-details tr').eq(index).find($('.detail-key')).val();
                value = $('.table-details tr').eq(index).find($('.detail-val')).val();
                if (key != '' && value != '') {
                    arrDetail.push({
                        key: key,
                        val: value
                    });
                }
            }
            $('#product-detail').val(JSON.stringify(arrDetail));
            // $("#form-target").submit();
        });
    </script>

</body>

</html>