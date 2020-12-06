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


    <!-- Main content -->
    <div class="bg-white mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div>
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
                    <div class="container-fluid m-0">
                        <div class="custom-font-4">
                            <div class="row m-0">
                                <div class="col-6 p-0">
                                    <p class="custom-font-1 text-capitalize order_id"></p>
                                </div>

                                <div class="col-6 text-right p-0">
                                    <a href="tracking" class="track_btn btn btn-sm btn-warning rounded-0">Track
                                        Order</a>
                                </div>
                            </div>
                            <div class="row m-0">
                                <p class="date_created"></p>
                            </div> <!-- end row -->

                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <div class="card-deck">
                                        <div class="card rounded-0">
                                            <div class="card-body custom-font-4">
                                                <h5 class="card-title custom-font-1-bold text-uppercase customer_name">
                                                </h5>
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
                                <div class="col-12 mt-3">
                                    <div class="card rounded-0">
                                        <div class="card-body">
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
                                        </div> <!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                            </div>

                            <div class="row mt-2 ml-0">
                                <div class="col-6 p-0">
                                    <a href="history" class="mt-1 mr-3">
                                        << Back Your Order</a> </div> <div class="col-6 text-right">
                                            <a href="#" class="btn btn-danger btn-sm rounded-0 pl-3 pr-3 btn_cancel" data-toggle="modal" data-target="#staticBackdrop">
                                                Cancel This Order
                                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Main content -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content custom-font-4">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cancel Orders</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to cancel ?!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0 btn-sm pl-3 pr-3" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-danger rounded-0 btn-sm pl-3 pr-3 yes_delete">Yes</button>
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

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>js/demo/datatables-demo.js"></script>

    <!-- custom script -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/shop.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/user.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/base.js"></script>


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

            paid = data.paid;
            status = data.idStatus;
            payDate = data.payDate;
            timeline = data.timeline;
            timeline = timeline == '' ? [] : JSON.parse(timeline);
            statusDidchange = false;

            if (status >= 3) {
                $('.btn_cancel').attr('hidden', 'hidden');
                if (status > 4) {
                    $('.track_btn').attr('hidden', 'hidden');
                }
            }

            $('.track_btn').attr('href', 'tracking?id=' + data.id);

            tracking = data.tracking != '' ? JSON.parse(data.tracking) : [];
            lastStatus = tracking[0];
            $('.order_id').html('Detail <b>#' + data.id + ' - ' + lastStatus.status + '</b>');
            $('.date_created').html('Created:&nbsp;&nbsp;' + dateFormatHard(data.createAt));
            $('.customer_name').html(data.firstName + ' ' + data.lastName);
            $('.customer_email').html('<i class="fad fa-envelope-open text-gray-700 mr-2"></i> ' + data.email);
            $('.customer_phone').html('<i class="fad fa-phone-alt text-gray-700 mr-2"></i>' + data.phone);
            $('.customer_address').html('<i class="fad fa-car-building text-gray-700 mr-2"></i>' + data.address + ', ' +
                data.city);
            $('.payment_method').html('Method: ' + data.paymentName);
            $('.payment_total').html('Total: $' + data.total);
            $('.ship_option').html('<img class="rounded ship_icon" src="' + data.shipping_option_icon +
                '" alt="logo" style="width: 30px; height: 30px;">&nbsp ' + data.shipping_option_name);

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
        }

        $('.yes_delete').click(function() {
            today = newDateForDB();
            timeline.unshift({
                time: today,
                status_id: 5,
                status: 'customer cancelled',
            });
            tracking.unshift({
                time: today,
                status_id: 5,
                status: 'cancelled',
            })
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/ordersmanage/updateOrder',
                dataType: 'json',
                data: {
                    id: id,
                    status: 5,
                    paid: paid,
                    payDate: payDate,
                    timeline: JSON.stringify(timeline),
                    tracking: JSON.stringify(tracking),
                },
                success: function(data) {
                    if (data != null) {
                        location.reload();
                    }
                }
            });
        })
    </script>

    <script>
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
    <!-- load search  -->
    <script>
        $('#place-search').load('<?php echo base_url(); ?>html/search_bar.html');
    </script>
</body>

</html>