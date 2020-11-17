<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Elite</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>img/elite-favicon.png" />
    <!-- --------------------------------------------------------------- -->
    <!-- font -->
    <!-- -------------------------------------------------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- Style -->
    <!-- --------------------------------------------------------------------------- -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/queries.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/sb-admin-2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/step_process.style.css">

    <style>
        .border-success {
            border: 1px dashed rgb(0, 153, 0);
        }
    </style>
</head>

<body>



    <!-- fake div -->
    <div hidden id='navi-top'></div>
    <div id="mainBody">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <a class="" href="<?php echo base_url(); ?>index.php/home">
                            <img height="150px" src="<?php echo base_url(); ?>img/svg/logo-light.svg" alt="logo">
                        </a>
                    </div>

                    <div class="col-9">

                        <div class="containerac mt-5">

                            <ul class="progress-indicator">
                                <li class="completed">
                                    <span class="bubble"></span>
                                    Sign in
                                </li>
                                <li class="completed">
                                    <span class="bubble"></span>
                                    Shipping & Payment
                                </li>
                                <li>
                                    <span class="bubble"></span>
                                    Place Order
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>



            <div class="container">
                <div class="row text-uppercase justify-content-center align-items-center pt-4 pb-4">
                    <h1>check out</h1>
                </div>
            </div>

            <!-- main container -->
            <div class="container custom-font-1 mb-5">

                <div class="row pl-md-5 pr-md-5">
                    <div class="col-md-6">
                        <div class="pt-3 mb-5">
                            <h3 class="custom-font-2-bold mb-4">Shipping address</h3>
                            <div class="shipping_adress">
                                <!-- <div class="card rounded-0 custom-font-4">
                                <div class="card-header bg-white">
                                    <div class="row">
                                        <div class="col-6">
                                            Default Address
                                        </div>
                                        <div class="col-6 text-right">
                                            <a href="#">Change</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title custom-font-1-bold text-uppercase ship_name">
                                        Nguyen Huu Nghia
                                    </h5>
                                    <p class="card-text ship_address">Address:</p>
                                    <p class="card-text ship_phone">Phone:</p>
                                </div>
                            </div> -->
                            </div>
                        </div>
                        <!-- end form group info -->

                        <div class="border-bottom"></div>

                        <!-- group payemnt -->
                        <div class="pt-3 mb-5">
                            <h3 class="custom-font-2-bold mb-4">Shipping Option</h3>
                            <form class="mt-4">
                                <div class="form-group justify-content-center align-items-center">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios0" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            <img class="rounded" src="https://www.flaticon.com/svg/static/icons/svg/3306/3306060.svg" alt="logo" style="width: 30px; height: 30px;">&nbsp Free Ship
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="border-bottom"></div>

                        <!-- group payemnt -->
                        <div class="pt-3 mb-5">
                            <h3 class="custom-font-2-bold mb-4">Payment</h3>
                            <form class="mt-4">
                                <div class="form-group justify-content-center align-items-center">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            <img class="rounded" src="https://www.flaticon.com/svg/static/icons/svg/2331/2331895.svg" alt="logo" style="width: 30px; height: 30px;">&nbsp Cash On Delivery
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            <img class="rounded" src="<?php echo base_url(); ?>img/vnpay.png" alt="logo" style="width: 30px; height: 30px;">&nbsp VNPAY Payment Gateway
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                                        <label class="form-check-label" for="exampleRadios3">
                                            <img class="rounded" src="<?php echo base_url(); ?>img/momo.png" alt="logo" style="width: 30px; height: 30px;">&nbsp Momo E-Wallet
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end form group payemnt -->
                        <button id="btnSubmitCheckout" class="col-12 btn btn-dark rounded-0" style="height:50px">Checkout</input>
                    </div>
                    <!-- end left content -->

                    <!-- right content -->
                    <div class="col-md-5 offset-1">

                        <!-- over view  -->
                        <div class="shadow">
                            <div class="container-fluid mt-3 pt-4 pl-4 pr-4">
                                <div class="row">
                                    <div class="col-8">
                                        <p class="custom-font-1 total_count mt-1 mb-0">Order( 2 product )</p>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a class="btn btn-light btn-sm custom-font-1 text-primary" href="#" onclick="openNav()"> Edit</a>
                                    </div>
                                </div>

                                <div class="border-bottom mt-1 mb-1"></div>
                                <ul class="show-overview">
                                    <li class="mb-3">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-3"><img id="img-0" class="lazy img-responsive card-img" src="http://localhost:2104/01/FilesUpload/werner.webp"></div>
                                            <div class="col-6">
                                                <div class="name-content">Werner</div>
                                                <span class="align-middled">x 1</span>
                                            </div>
                                            <div class="col-3 text-right">
                                                <span class="align-middled">$ 99</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="border-bottom"></div>

                                <div class="pt-3 pb-3">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-9">
                                            <span class="custom-font-1-bold">Total Price:</span>
                                        </div>
                                        <div class="col-3 text-right">
                                            <span class="total-cart align-middle">$ 99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end main container -->

            <div class="border-bottom"></div>

            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-6 copy-right-footer">
                        <h6>&copy; 2020 Nghia Minh Thuy Thu</h6>
                        <p>Giấy chứng nhận ĐKKD số 0108150321 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày 29/01/2018
                            123C Thụy Khuê, Tây Hồ, Hà Nội</p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6">
                        <div class="container">
                            <div class="row offset-md-3 text-center">
                                <div class="col-12 col-sm-6">
                                    <img src="https://imaginary.dtx.asia/fit?auto=png&format=png&width=60&url=https%3A%2F%2Fcurnonwatch.com%2Fmomo-5Wx.png%3Fauto%3Dpng%26format%3Dpng%26width%3D60&nocrop=true&type=auto&height=1080" alt="momoIcon">
                                    <img src="https://imaginary.dtx.asia/fit?auto=png&format=png&width=60&url=https%3A%2F%2Fcurnonwatch.com%2Fvnpay-aWk.png%3Fauto%3Dpng%26format%3Dpng%26width%3D60&nocrop=true&type=auto&height=1080" alt="VNPayIcon">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <img src="<?php echo base_url(); ?>img/bct-5Sz.png" alt="" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- fade background -->
        <div id="fadeBackground" class="fjXvoO"></div>

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
                    <!-- <li>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-3"><img id="img-0" class="lazy img-responsive card-img p-3" src="http://localhost:2104/01/FilesUpload/werner.webp"></div>
                        <div class="col-7">
                            <div class="name-content mb-2">Werner</div>
                            <div class="container-fluid price-content">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-6 price-group pl-0">
                                        <button class="minus-item btn-dark rounded-0" data-name="">-</button>
                                        <input type="number" class="item-count rounded-0 form-control" data-name="" value="8">
                                        <button class="plus-item btn-dark rounded-0" data-name="">+</button>
                                    </div>
                                    <div class="col-2">x</div><span class="col-4 align-middled">$41</span>
                                </div>
                            </div>
                        </div>
                        <a class="delete-item col-2 text-center"><span class="align-bottom"><i class="fal fa-trash-alt"></i></span></a>
                    </div>
                    <div class="border-bottom"></div>
                </li> -->
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

    <!-- Modal error -->
    <div id="modalError" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="error-content">Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script for get Fontawesome pro version -->
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>vendors/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Lazy load -->
    <script type="text/javascript" src="<?php echo base_url(); ?>vendors/jquery.lazy-master/jquery.lazy.min.js">
    </script>

    <!-- script for this template -->
    <!-- shop script -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/shop.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/base.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/user.js"></script>


    <script>
        function displayOverview() {
            var cartArray = shoppingCart.listCart();
            var output = "";
            for (var i in cartArray) {
                output += "<li class='mb-3'>" +
                    "<div class='row justify-content-center align-items-center'>" +
                    "<div class='col-3'><img class='img-responsive card-img'" +
                    "src='" + cartArray[i].image + "'></div>" +
                    "<div class='col-6'>" +
                    "<div class='name-content'>" + cartArray[i].name + "</div>" +
                    "<span class='align-middled'>x " + cartArray[i].count + "</span></div>" +
                    "<div class='col-3 text-right'>" +
                    "<span class='align-middled'>$" + cartArray[i].salePrice + "</span>" +
                    "</div>" +
                    "</div>" +
                    "</li>";
            }
            total = shoppingCart.totalCount();
            console.log(total);
            $('.total_count').html('Order (' + total + ' products)');
            $('.show-overview').html(output);
        }
        displayOverview();
    </script>

    <script>
        $(document).ready(function() {
            $("#btnSubmitCheckout").click(function() {
                // var productJson = JSON.stringify(cusObj);

                id = userProfile.id;
                console.log(id);
                createNewOrder(id);

            });

            function createNewOrder(id) {
                today = newDateForDB();
                var cartArray = shoppingCart.listCart();
                var totalPrice = shoppingCart.totalCart();
                var timeline = [];
                timeline.push({
                    time: today,
                    status: 'Order Success'
                });

                shipping_address = JSON.parse(userProfile.shipping_address);
                array = shipping_address.array;
                idx = localStorage.getItem("shipping_address") != null ? localStorage.getItem("shipping_address") : shipping_address.default;

                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>index.php/admin/OrdersManage/insertOrders',
                    dataType: 'json',
                    data: {
                        id: Date.now(),
                        createAt: today,
                        total: totalPrice,
                        idPayment: 1,
                        status: 1,
                        paid: 0,
                        payDate: 0,
                        note: $("#info-note").val(),
                        idCDate: 0,
                        idCustomer: id,
                        timeline: JSON.stringify(timeline),
                        productList: JSON.stringify(cartArray),
                        shipping_address: JSON.stringify(array[idx]),
                        shipping_option_id: 1,
                    },
                    success: function(status) {
                        console.log(status);
                        if (status != null) {
                            loadStatus(status);
                        }
                    }
                });
            }
        });

        function loadStatus(status) {
            if (status.status == 'complete') {
                htmll =
                    '<div class="container"><div class="justify-content-center text-center"><a href="<?php echo base_url(); ?>index.php/home"><img style="height:100px" class="svg-icon-image" src="<?php echo base_url(); ?>img/svg/logo.svg"alt="logo"></a><h1>Order Success</h1><h6 class="custom-font-1-bold mb-0" id="order-id">Your Order Has Been Placed With ID: <a href="">' +
                    status.id + '</a></h6></div></div><div class="border-bottom mt-5"></div>';
                $('#mainBody').html(htmll);
                shoppingCart.clearCart();
                localStorage.removeItem('shipping_address');
            } else if (status.status == 'error') {
                $('#error-content').html(status.alert);
                $('#modalError').modal('show');
            }
        }

        userProfile = '';
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
                            displayDefaultAddress(dataReturned[0]);
                            userProfile = dataReturned[0];
                        }
                    }
                });
            }
        }



        function displayDefaultAddress(info) {
            console.log(info);
            if (info.shipping_address == '') {
                $('.shipping_adress').load('<?php echo base_url(); ?>/html/address_form.html');
            } else {
                shipping_address = JSON.parse(info.shipping_address);
                console.log(shipping_address);
                array = shipping_address.array;
                idx = localStorage.getItem("shipping_address") != null ? localStorage.getItem("shipping_address") : shipping_address.default;
                output = '<div class="card border-success custom-font-4">' +
                    '<div class="card-body">' +
                    '<a class="btn btn-light btn-sm custom-font-1 tag-change" href="<?php echo base_url(); ?>index.php/checkout/shipping">Change</a>' +
                    '<h5 class="card-title custom-font-1-bold text-uppercase ship_name">' +
                    array[idx].firstName + ' ' + array[idx].lastName +
                    '</h5>' +
                    '<p class="card-text ship_address">Address: ' +
                    array[idx].address + ', ' + array[idx].city +
                    '</p>' +
                    '<p class="card-text ship_phone">Phone: ' +
                    array[idx].phone +
                    '</p>' +
                    '<p class="card-text ship_phone">Email: ' +
                    array[idx].email +
                    '</p>' +
                    '</div></div>';

                $('.shipping_adress').html(output);
            }
        }

        $(document).on('click', '.save_address', function() {
            email = $('#info-email').val();
            firstName = $('#info-firstName').val();
            lastName = $('#info-lastName').val();
            phone = $('#info-phone').val();
            city = $('#info-city').val();
            address = $('#info-address').val();

            newList = {
                default: 0,
                array: [{
                    email: email,
                    firstName: firstName,
                    lastName: lastName,
                    phone: phone,
                    city: city,
                    address: address
                }]
            };
            saveShipping_Address(newList);
            location.reload();
        })

        function saveShipping_Address(list) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/UserManage/updateShipping_Address',
                dataType: 'json',
                data: {
                    idCustomer: userProfile.id,
                    value: JSON.stringify(list),
                },
                success: function(dataReturned) {}
            });
        }
    </script>
</body>

</html>