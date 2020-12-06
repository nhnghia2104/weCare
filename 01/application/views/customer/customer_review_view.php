<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>TNTM</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/img/svg/shortcuticon.svg" />
    <!-- --------------------------------------------------------------- -->
    <!-- font -->
    <!-- -------------------------------------------------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- Style -->
    <!-- --------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/sb-admin-2.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    <!-- Custom style for this page -->
    <link href="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/pagination/pagination.css">

    <style>
        .paginate_button {
            border-radius: 0px !important;
        }
    </style>
</head>

<body>
<div id="place-search">

</div>
    <div class="custom-font-4">
        <!-- <div class="overlay"></div> -->
        <nav class="navbar fixed-top navbar-expand-md topbar navbar-light shadow" id="navi-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-top" aria-controls="menu-top" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">
                    <img class="navbar_logo" data-light="<?php echo base_url(); ?>img/svg/logo-light.svg" data-dark="<?php echo base_url(); ?>img/svg/logo.svg" src="<?php echo base_url(); ?>img/svg/logo-light.svg" alt="logo" height="70px" color="white">
                </a>
                <div class="collapse navbar-collapse" id="menu-top">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-top-element">
                        <li class="nav-item active shop_category dropdown no-arrow">
                            <a class="nav-link dropdown-toggle home-navbar-button" href="shop" id="navbarCategory" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <div class="dropdown-menu need-hover-drop rounded-0 border-0 shadow" id="dropdownCategory" style="min-width: 300px;">
                                <a class="dropdown-item custom-font-4" href="#">All Category</a>
                                <a class="dropdown-item custom-font-4" href="#">A</a>
                                <a class="dropdown-item custom-font-4" href="#">B</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link  home-navbar-button" href="#">About us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link  home-navbar-button" href="#">Contact us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0 menu-top-element">
                        <li class="nav-item active">
                            <a onclick="showSearch()" class="nav-link btn-search home-navbar-button">Search &nbsp<i class="fal fa-search"></i></a>
                        </li>

                        <li class="nav-item active signin_info dropdown no-arrow">
                            <a class="nav-link btn-signin home-navbar-button" href="#signModal" data-toggle="modal">Sign in &nbsp<i class="fal fa-user"></i></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link  home-navbar-button" onclick="openNav()">
                                Your cart &nbsp<i class="fal fa-shopping-cart"></i>
                                <span class="total-count badge badge-success badge-counter align-middle rounded-circle" style=" background-color: #f77f00;">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!-- end container -->
        </nav> <!-- end navi -->

        <!-- mini cart -->
        <div id="miniCart" class="sideCart">
            <!-- Header cart -->
            <div class="container pt-3 pb-3">
                <div class="row text-center">
                    <a class="col-2 pl-1" onclick="closeNav();">
                        <i class="fal fa-times"></i>
                    </a>
                    <span class="col-9 text-right" style="font-weight: 600;">Your cart</span>
                </div>
            </div>

            <div class="border-bottom"></div>
            <!-- Body cart -->
            <div class="cart-body container-fluid mt-3 p-0">
                <ul class="show-cart">
                </ul>
                <div class="cart-footer container pt-3 pb-5 pl-5 pr-5">
                    <div class="row justify-content-center align-items-center p-0">
                        <div class="border-bottom border-dark"></div>
                        <!-- cart footer -->
                        <div class="col-10 mt-3 mb-3 p-0">Total Price:</div>
                        <div class="col-2 text-right p-0">
                            <span class="total-cart align-middle">99*</span>
                        </div>

                        <a href="#" id="btn-checkout" type="button" class="col-12 btn btn-info rounded-0" style="height:50px">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fade background -->
    <div id="fadeBackground" class="fjXvoO"></div>
    <div style="height:70px"></div>

    <!-- Main content here -->
    <div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="">
                    <ul class="navbar-nav sidebar sidebar-light accordion custom-font-1" id="accordionSidebar">
                            <!-- Sidebar - Brand -->
                            <a class="sidebar-brand d-flex align-items-center justify-content-center info_avt" href="#">
                                <div class="sidebar-brand-icon">
                                    <div class="sidebar-brand-icon">
                                        <img class="card-avt img-rounded border rounded-circle" src="http://localhost:2104/01/FilesUpload/default-avatar.png" onError="this.onerror=null;this.src='http://localhost:2104/01/FilesUpload/default-avatar.png';" alt="avt" width="70px" height="70px" color="white">
                                    </div>
                                </div>
                            </a>

                            <li class="cus-nav-item text-center p-0 mt-1 info_name">
                                <b>Nghĩa</b>
                            </li>

                            <!-- Divider -->
                            <hr class="sidebar-divider my-0 mt-3 mb-2">
                            <li class="cus-nav-item">
                                <a class="nav-link collapsed item_account" href="<?php echo base_url(); ?>index.php/customer/account/edit">
                                    <span class="mr-2"><i class="fal fa-user"></i></span>
                                    <span>Account</span>
                                </a>
                            </li>
                            <li class="cus-nav-item">
                                <a class="nav-link collapsed item_order" href="<?php echo base_url(); ?>index.php/customer/order/history">
                                    <span class="mr-2"><i class="fal fa-ballot-check"></i></span>
                                    <span>Orders</span>
                                </a>
                            </li>
                            <li class="cus-nav-item">
                                <a class="nav-link collapsed item_address" href="<?php echo base_url(); ?>index.php/customer/address">
                                    <span class="mr-2"><i class="fal fa-map-marker-alt"></i></span>
                                    <span>Shipping address</span>
                                </a>
                            </li>
                            <li class="cus-nav-item">
                                <a class="nav-link collapsed item_address" href="<?php echo base_url(); ?>index.php/customer/reviews/writenew">
                                    <span class="mr-2"><i class="fal fa-comment-alt-lines"></i></span>
                                    <span>Write review</span>
                                </a>
                            </li>
                            <li class="cus-nav-item">
                                <a class="nav-link collapsed item_reviews" href="<?php echo base_url(); ?>index.php/customer/reviews">
                                    <span class="mr-2"><i class="fal fa-star-half-alt"></i></span>
                                    <span>My review</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-9">

                    <p class="custom-font-6 custom-font-weight-light">My Reviews</p>
                    <div id="data-container" class="mb-5"></div>
                    <div id="pagination-container" class="d-flex justify-content-center"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-lg custom-font-1" role="document">
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/customer/account/updateAvatar">
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
                        <button type="button" class="btn btn-sm btn-secondary pl-3 pr-3 rounded-0" data-dismiss="modal">Close</button>
                        <input class="btn btn-sm btn-info rounded-0 pl-3 pr-3" type="submit" value="Update">
                    </div>
                </div> <!-- end modal content -->
            </form><!-- end form -->
        </div>

    </div> <!-- end modal -->

    <!-- -------------------------------------------------------------------- -->
    <!-- script -->
    <!-- -------------------------------------------------------------------- -->
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <!-- Script for get Fontawesome pro version -->
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap/js/bootstrap.js"></script>
    <!-- custom script -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/shop.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/user.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/base.js"></script>

    <!-- Page level plugins -->
    <!-- https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js -->
    <script src="<?php echo base_url(); ?>vendors/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="<?php echo base_url(); ?>vendors/pagination/pagination.min.js"></script>

    <script>
        href = '';
        dataForUse = '';
        checkToken();

        function checkToken() {
            token_access = loadToken();
            if (token_access != '') {
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>index.php/admin/UserManage/getInfoToken',
                    dataType: 'json',
                    data: {
                        token: token_access.token,
                    },
                    success: function(dataReturned) {
                        if (dataReturned.length > 0) {
                            goPagination(dataReturned[0].id);
                            dataForUse = dataReturned[0];
                            displayProfile(dataReturned[0]);
                            displayInfoUser(dataReturned[0]);
                            console.log(dataReturned[0]);

                            $('.info_name').html('<b>' + dataForUse.firstName + ' ' + dataForUse.lastName + '</b>');
                            $('.info_avt img').attr('src', dataForUse.avatar);

                        }
                    }
                });
            }
        }



        function displayProfile(data) {
            $('#info-firstName').val(data.firstName);
            $('#info-lastName').val(data.lastName);
            $('#info-email').val(data.email);
            $('#info-phone').val(data.phone);
            $('#user_id').val(data.id);

            birthday = new Date().setTime(data.birthday);
            $('#info_birthday').val(dateFormatShort(birthday));

            gender = data.gender;
            gender == 0 ? $('#info_male').prop('checked', true) : $('#info_female').prop('checked', true);
        }

        $('.sign_in').click(function() {
            user = $('#user').val();
            pass = $('#pass').val();
            if (user != '' && pass != '') {
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>index.php/admin/UserManage/signin',
                    dataType: 'json',
                    data: {
                        username: user,
                        password: pass,
                    },
                    success: function(return_) {
                        saveToken(return_);
                        window.location.reload();
                    }
                });
            }
        });

        $('#btn-checkout').click(function() {
            if (loadToken() != '') {
                window.location.href = '<?php echo base_url(); ?>index.php/checkout';
            } else {
                href = '<?php echo base_url(); ?>index.php/checkout';
                closeNav();
                $('.btn-signin').trigger('click');
            }
        })
        $('.shop_category').on('mouseover', function() {
            fadeBackground();
        }).on('mouseout', function() {
            hideBackground();
        })
    </script>


    <!-- category -->
    <script>
        $.ajax({
            type: "GET",
            url: '<?php echo base_url(); ?>index.php/admin/ProductManage/requestCategory',
            dataType: 'json',
            success: function(dataReturned) {
                displayCategory(dataReturned)
            }
        });

        function displayCategory(info) {
            output = '<a class="dropdown-item custom-font-4" href="<?php echo base_url(); ?>index.php/shop">All Category</a>';
            for (i = 0; i < info.length; i++) {
                output += '<div class="dropdown-divider"></div>' +
                    '<a class="dropdown-item custom-font-4" data-id="' + info[i].ID + '" href="<?php echo base_url(); ?>index.php/shop?src=' + info[i].DisplayName + '">' + info[i].DisplayName + '</a>'
            }
            $('#dropdownCategory').html(output);
        }
    </script>

    <script>
        function goPagination(id) {
            $('#pagination-container').pagination({
                pageSize: 10,
                // showPrevious: false,
                // showPageNumbers: false,
                // showNext: false,
                className: 'paginationjs-theme-blue',
                dataSource: function(done) {
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url(); ?>index.php/customer/reviews/listReviewOfCustomer',
                        dataType: 'json',
                        data: {
                            id: id,
                        },
                        success: function(response) {
                            console.log(response);
                            done(response);
                        }
                    });

                },
                callback: function(data, pagination) {
                    // template method of yourself
                    var html = template(data);
                    $('#data-container').html(html);
                    // if (data.length < 10) {
                    //     $('#pagination-container').pagination('hide');
                    // }
                }
            })
        }

        function template(data) {
            html = '';
            for (i = 0; i < data.length; i++) {
                date = new Date().setTime(data[i].date);
                html += '<div class="card bg-white rounded-0">' +
                    '<div class="card-body custom-font-4 pl-4 pr-4 pt-4">' +
                    '<div class="row">' +
                    '<div class="info_avt col-2">' +
                    '<img width="100%" src="' + data[i].image + '" alt="">' + //here
                    '</div>' +
                    '<div class="col-10 custom-font-4">' +
                    '<a href="<?php echo base_url(); ?>index.php/product/' + data[i].idProduct + '">' + // here
                    '<p>' + data[i].name + '</p>' + 
                    '</a>' +
                    '<p class="custom-font-7 mb-1">' + dateFormatFull(date) + '</p>' +
                    '<div class="d-flex">' +
                    '<p class="mb-0 custom-font-weight-bold">' + data[i].head + '</p>' +
                    '<span class="ml-2 text-warning">';
                for (var k = 1; k <= 5; k++) {
                    html += (k <= data[i].vote) ? "<i class='fas fa-star'></i> " :
                        "<i class='fal fa-star'></i> ";
                }

                html += '</span></div>' +
                '<p class="mb-0">' + data[i].content + '</p>' + 
                '</div></div></div></div>';
            }
            return html;
        }
    </script>
    <!-- load search  -->
    <script>
        $('#place-search').load('<?php echo base_url(); ?>html/search_bar.html');
    </script>

</body>

</html>