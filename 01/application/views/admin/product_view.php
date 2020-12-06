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
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
                    <i class="fal fa-shopping-bag"></i>
                    <span> Product</span>
                </a>
                <div id="collapseProduct" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="<?php echo base_url(); ?>index.php/admin/productmanage">All
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
                                <button class="btn btn-info" type="button">
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
                                            <button class="btn btn-info" type="button">
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
                                        <div class="icon-circle bg-info">
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
                    <div class="row">
                        <div class="col-sm-12 offset-md-2 col-md-8 shadow-sm bg-white p-0">
                            <form class="card border-0 card-sm">
                                <div class="card-body p-0 row no-gutters align-items-center">
                                    <div class="col-auto border-right pt-1">
                                        <div class="dropdown" id="dropdown-category">
                                            <button class="btn btn-white rounded-0 dropdown-toggle mr-1 pr-5" type="button" id="dropdownCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                All Category
                                            </button>
                                            <div id="product-category-2" class="dropdown-menu" aria-labelledby="dropdownCategory">
                                                <a class="dropdown-item" href="#">All Category</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input id="searchTable" class="form-control form-control form-control-borderless" type="search" placeholder="Search">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <a class="btn btn-lg custom-font-1 text-white btn-info rounded-0"><i class="fal fa-search"></i></a>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4 mt-3 rounded-0">
                                <div class="card-header bg-white p-0">

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <!-- Tabs -->
                                            <section id="tabs">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xs-12 ">
                                                            <nav>
                                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                                    <a class="nav-item nav-link active tab-element" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" data-filter="all" aria-selected="true">All</a>
                                                                    <a class="nav-item nav-link tab-element" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" data-filter="instock" aria-selected="false">In
                                                                        stock</a>
                                                                    <a class="nav-item nav-link tab-element" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" data-filter="outstock" aria-selected="false">Out of
                                                                        stock</a>
                                                                    <a class="nav-item nav-link tab-element" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" data-filter="published" aria-selected="false">Published</a>
                                                                    <a class="nav-item nav-link tab-element" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" data-filter="unpublished" aria-selected="false">Unpublished</a>
                                                                    <a class="nav-item nav-link tab-element" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" data-filter="sale" aria-selected="false">Sale</a>
                                                                </div>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <!-- Button trigger modal -->
                                            <button id="buttonAddProduct" type="button" class="btn btn-sm btn-info float-md-right font-weight-bold h-100 rounded-0" data-toggle="modal" data-target="#exampleModalCenter">
                                                <i class="fal fa-plus"></i> Add new product
                                            </button>
                                        </div>
                                    </div>
                                    <!-- ------------------------------------------------------------------ -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                        <div class="modal-dialog modal-lg custom-font-1" role="document">
                                            <form method="post" enctype="multipart/form-data" action="insertProduct">
                                            <input hidden name="product-idAdmin" id="product-idAdmin" type="text" value="admin1">
                                            <input hidden name="product-detail" id="product-detail" type="text" value="">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title" id="exampleModalCenterTitle">Add new product
                                                        </h6>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <!-- Input Product's Name -->
                                                            <div class="form-group">
                                                                <label class="col-lg-12 col-form-label custom-font-weight-bold">*
                                                                    Product's name</label>
                                                                <div class="col-lg-12">
                                                                    <input type="text" class="form-control border-bottom rounded-0" id="product-name" name="product-name" placeholder="Name">
                                                                </div>
                                                            </div> <!-- end input product's name -->

                                                            <div class="row">

                                                                <!-- Select Category -->
                                                                <div class="form-group col-lg-6">
                                                                    <label class="col-12 col-form-label custom-font-weight-bold">*
                                                                        Category</label>
                                                                    <div class="col-12">
                                                                        <select id="product-category" class="form-control border-bottom rounded-0" name="product-category">
                                                                            <option value="0" selected>Choose...</option>
                                                                        </select>
                                                                    </div>
                                                                </div><!-- end select category -->

                                                                <!-- Select Style -->
                                                                <div class="form-group col-lg-6">
                                                                    <label class="col-12 col-lg-12 col-form-label custom-font-weight-bold">*
                                                                        Style</label>
                                                                    <!-- ID Category -->
                                                                    <input type="hidden" name="product-categoryID" value="">
                                                                    <div class="col-12 col-lg-12">
                                                                        <select id="product-style" class=" text-capitalize form-control rounded-0" name="product-style">
                                                                            <option value='0' selected>Choose...</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!-- end select Style -->
                                                            </div>


                                                            <!-- Input description -->
                                                            <div class="form-group">
                                                                <label class="col-12 col-form-label custom-font-weight-bold">*
                                                                    Description</label>
                                                                <div class="col-12">
                                                                    <textarea class="form-control border-bottom rounded-0" id="product-description" rows="3" name="product-description" placeholder="Description"></textarea>
                                                                </div>
                                                            </div> <!-- end input description -->

                                                            <div class="row">
                                                                <!-- Input price -->
                                                                <div class="form-group col-lg-6">
                                                                    <label class="col-12 col-form-label custom-font-weight-bold">*
                                                                        Price</label>
                                                                    <div class="input-group mb-3 col-12">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text rounded-0" style="background-color: white !important;">$</span>
                                                                        </div>
                                                                        <input id="product-price" name="product-price" type="number" step="0.01" class="form-control rounded-0" aria-label="Amount (to the nearest dollar)" placeholder="" value="0">

                                                                    </div>
                                                                </div><!-- end input Price -->
                                                                <!-- input discount -->
                                                                <div class="form-group col-lg-6">
                                                                    <label class="col-lg-12 col-form-label custom-font-weight-bold">*
                                                                        Discount</label>
                                                                    <div class="input-group mb-3 col-12 col-lg-12">
                                                                        <input id="product-discount" name="product-discount" type="number" step="0.01" class="form-control rounded-0" aria-label="Amount (to the nearest dollar)" placeholder="Price" value="0">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color: white !important;">%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end discount -->
                                                                <!-- Input inventory -->
                                                                <div class="form-group col-lg-6">
                                                                    <label class="col-12 col-form-label custom-font-weight-bold">*
                                                                        Inventory</label>
                                                                    <div class="input-group mb-3 col-12">
                                                                        <input id="product-inventory" name="product-inventory" type="number" step="0.01" class="form-control rounded-0" aria-label="Amount (to the nearest dollar)" placeholder="" value="0">

                                                                    </div>
                                                                </div><!-- end input Price -->
                                                            </div>

                                                            <!-- Input Image -->
                                                            <div class="form-group">
                                                                <label class="col-12 col-form-label custom-font-weight-bold">*
                                                                    Image</label>
                                                                <div class="col-12">

                                                                    <!-- Upload image input-->
                                                                    <div class="input-group mb-3 px-2 py-2 rounded-0 bg-white border">
                                                                        <input name="product-image" id="upload" type="file" accept="image/*" onchange="readURL(this);" class="form-control rounded-0">
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
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <input class="btn btn-info" type="submit" value="Save">
                                                    </div>
                                                </div> <!-- end modal content -->
                                            </form><!-- end form -->
                                        </div>

                                    </div> <!-- end modal -->
                                </div>

                                <div class="card-body custom-font-1">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="">
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th>Sale</th>
                                                    <th>Stock</th>
                                                    <th>Published</th>
                                                    <th></th>
                                                    <!-- <th>Salary</th> -->
                                                </tr>
                                            </thead>
                                            <tbody id="tableBodyContent">

                                            </tbody>
                                        </table> <!-- end table -->
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div>
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
                    <a class="btn btn-info" href="login.html">Logout</a>
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

    <!-- custom Nghia'sJS -->
    <script src="<?php echo base_url(); ?>js/base.js"></script>
    <!-- input Image -->
    <script>
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
    </script>

    <!-- get Category -->
    <script>
        var needToLoad = true;
        $(document).ready(function() {
            $("#buttonAddProduct").click(function() {
                if (needToLoad) {
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>index.php/admin/productmanage/requestCategory',
                        dataType: 'json',
                        success: function(data) {
                            solveAddCategory(data);
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>index.php/admin/productmanage/requestStyleOptions_Ajax',
                        dataType: 'json',
                        success: function(data) {
                            solveStyles(data);
                        }
                    });
                    needToLoad = false;
                }
            });
        });
        // add Category to Select Form 
        function solveAddCategory(data) {
            html = '<option>Choose</option>';
            for (var i = 0; i < data.length; i++) {
                html += '<option value="'+ data[i].ID +'">' + data[i].DisplayName + '</option>';
            }
            $('#product-category').html(html);
        }
        // add Style to select form
        function solveStyles(array) {
            var output = "";
            for (var index = 0; index < array.length; index++) {
                for (var index = 0; index < array.length; index++) {
                    const element = array[index];
                    $('#product-style').append("<option value='" + element.id + "'>" + element.DisplayName + "</option>");
                }
                $('#product-style').append(output);
            }
        }

        $('#searchTable').keyup(function() {
            oTable.search($(this).val()).draw();
        })

        filterCategory = 'all category';

        $(document).on('click', '.dropdown-cate', function(event) {
            filterCategory = $(this).data('filter').toLowerCase();
            console.log(filterCategory);
            $('#dropdownCategory').html($(this).data('filter'));
            oTable.draw();
        })
    </script>

    <script>
        oTable = $('#dataTable').DataTable({
            "searching": true,
            "paging" : true,
            columnDefs: [{
                orderable: false,
                targets: 7
            },
            { width: 100, targets: 0 },
            // { width: 300, targets: 1 },
            { width: 60, targets: [2,3,4,5] },
            { width: 60, targets: 6 },
            { width: 80, targets: 7 }],
        });
        filterValue = "all";
        

        $('.tab-element').on("click", function(event) {
            filterValue = $(this).data('filter').toLowerCase();
            oTable.draw();
        })

        var products = [];
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>index.php/admin/productmanage/requestProductList_Ajax',
            dataType: 'json',
            success: function(data) {
                products = data;
                displayTable(products);
                // console.log(products);
            }
        });

        function displayTable(products) {
            for (var index = 0; index < products.length; index++) {
                oTable.row.add([
                    '<img src="' + products[index].Image + '" alt="image" width="100%">',
                    products[index].Name,
                    products[index].Category,
                    '$' + products[index].Price,
                    Number(products[index].discount) * 100 + '%',
                    products[index].inventory,
                    (products[index].status == '1' ?
                        '<span class="switch switch-sm"><input name="product-status" type="checkbox" class="switch sw_val" id="switch-status_' + products[index].ID + '" data-id="' + products[index].ID + '" value="1" checked><label id="statusLabel_' + products[index].ID + '" for="switch-status_' + products[index].ID + '" style="color: #449D44;">Published</label>' :
                        '<span class="switch switch-sm"><input name="product-status" type="checkbox" class="switch sw_val" id="switch-status_' + products[index].ID + '" data-id="' + products[index].ID + '" value="0"><label id="statusLabel_' + products[index].ID + '" for="switch-status_' + products[index].ID + '" style="color: #6e707e;">Unpublished</label>'),
                    '<div>' +
                    '<a class="btn btn-light btn-sm mb-1"' +
                    'href="<?php echo base_url(); ?>index.php/admin/productmanage/info/' + products[index]
                    .ID +
                    '">' +
                    '<i class="fal fa-sliders-v"></i></a>' +
                    '<button class="btn btn-light btn-sm btn-remove"' +
                    'href="#" data-id="' + products[index]
                    .ID +
                    '">' +
                    '<i class="fal fa-trash-alt"></i></button></div'

                ])
            }
            oTable.draw();
        }

        $('#dataTable tbody').on('change', '.switch', function() {
            status = $(this).val();
            $(this).prop('value', status == 1 ? 0 : 1);
            $('#statusLabel_' + $(this).data('id')).html(status == 1 ? 'Unpublished' : 'Published')
            $('#statusLabel_' + $(this).data('id')).css('color', status == 1 ? '#6e707e' : '#449D44');
            if ($(this).data('id') != '' && $(this).val() != '' && $(this).data('id') != undefined && $(this).val() != undefined) {
                // console.log( $(this).data('id'));
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>index.php/admin/productmanage/updateStatus',
                    dataType: 'json',
                    data: {
                        id: $(this).data('id'),
                        status: $(this).val(),
                    },
                    success: function(data) {
                        console.log(data);
                    }
                });
            }
        });

        $('#dataTable tbody').on('click', '.btn-remove', function() {
            $(this).closest("tr").remove();
            var id = $(this).data('id');
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/productmanage/deleteProduct/' + id,
                dataType: 'json',
                success: function(data) {

                }
            });
        });

        $.fn.dataTableExt.afnFiltering.push(
            function(oSettings, aData, iDataIndex) {
                filter = false;
                category = false;
                
                switch (filterValue) {
                    case "all":
                        filter = true;
                        break;
                    case "instock":
                        if (Number(aData[5]) > 0) {
                            filter = true;
                        }
                        break;
                    case "outstock":
                        if (Number(aData[5]) == 0) {
                            filter = true;
                        }
                        break;
                    case "published":
                        
                        if (aData[6].toLowerCase() == 'published') {
                            filter = true;
                        }
                        break;
                    case "unpublished":
                        console.log(filterValue);
                        console.log(aData[6].toLowerCase());
                        if (aData[6].toLowerCase() == "unpublished") {
                            filter = true;
                        }
                        break;
                    case "sale":
                        if (aData[4] > '0%') {
                            filter = true;
                        }
                        break;
                    default:
                    filter = false;
                }

                if (filterCategory == "all category") {
                    category = true;
                } else {
                    if (aData[2].toLowerCase() == filterCategory) {
                        category = true;
                    }
                }
                return category && filter;
            }
        );

        // select tab
        function setDefaultSelectedTab() {
            selected = '<?php echo $filter ?>';
            if (selected != '') {
                $(".nav").find("[data-filter='" + selected.toLowerCase() + "']").trigger("click");
            }
        }
        setDefaultSelectedTab();

        // Category
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>index.php/admin/productmanage/requestCategory',
            dataType: 'json',
            success: function(data) {
                solveCategory(data);
            }
        });

        function solveCategory(data) {
            var selectForm = document.getElementById('product-category-2');
            var n = data.length;
            var element = data;
            htmlInner = '<a class="dropdown-item text-capitalize dropdown-cate" data-filter="All Category" href="#">All Category</a>';
            for (var i = 0; i < n; i++) {
                htmlInner += '<a class="dropdown-item text-capitalize dropdown-cate" data-filter="' + element[i]['DisplayName'] + '" href="#">' + element[i]['DisplayName'] + '</a>';
            }
            $('#product-category-2').html(htmlInner);
        }
    </script>


</body>

</html>