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
                            <li class="warning">
                                <span class="bubble"></span>
                                Sign in
                            </li>
                            <li class="warning">
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

        <!-- main container -->
        <div class="container custom-font-1 mb-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="custom-font-2-bold mb-4">Shipping address</h3>
                </div>
            </div>
            <div class="row shipping_adress">
                <div class="">
                    <div class="col-12 col-md-6">
                        <div class="card custom-font-4">
                            <div class="card-body">
                                <h5 class="card-title custom-font-1-bold text-uppercase ship_name">
                                    Nguyen Huu Nghia
                                </h5>
                                <p class="card-text ship_address">Address:</p>
                                <p class="card-text ship_phone">Phone:</p>
                                <p class="card-text ship_phone">Email:</p>
                                <div class="row m-0" data-index="">
                                    <a href="#" class="btn btn-info btn-sm rounded-0 mr-2">Use this address</a>
                                    <a href="#" class="btn btn-light btn-sm rounded-0 mr-2">Edit</a>
                                    <a href="#" class="btn btn-light btn-sm rounded-0 mr-2">Remove</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end shipping_address -->
            </div>
            <!-- end row -->
            <div class="row mt-3 custom-font-4">
                <div class="col-12">
                    <p>You want to ship to an other address? <a class="text-primary addnew_" href="#"> Add a new address</a> </p>
                </div>
            </div>
        </div>
        <!-- end main container -->

        <!-- container for add new address -->
        <div class="container mb-5">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="custom-font-4 addnew_form" data-index="-1" hidden>

                    </div>
                </div>
            </div>
        </div> <!-- end container for add new address -->

        <div class="border-bottom target-bot"></div>

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

    <div id="modalError" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered custom-font-1">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title custom-font-weight-bold"><i class="far fa-dizzy"></i></h5>
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
            $('.show-overview').html(output);
        }
        displayOverview();
    </script>

    <script>
        $('.addnew_form').load('<?php echo base_url(); ?>/html/address_form.html');
        $(document).ready(function() {
            $("#btnSubmitCheckout").click(function() {


                var cusObj = {
                    note: $("#info-note").val(),

                }
                var productJson = JSON.stringify(cusObj);

                // createAndInsertUser();

            });

            function createAndInsertUser() {
                today = newDateForDB();
                id = Date.now();

                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>index.php/admin/UserManage/insertCustomer',
                    dataType: 'json',
                    data: {
                        id: Date.now(),
                        email: $("#info-email").val(),
                        firstName: $("#info-firstName").val(),
                        lastName: $("#info-lastName").val(),
                        phone: $("#info-phone").val(),
                        city: $("#info-city").val(),
                        address: $("#info-address").val(),
                        dateCreated: today,
                    },
                    success: function(status) {
                        console.log(status);
                        if (status == 'error') {

                        } else {
                            createNewOrder(id);
                        }
                    }
                });
            }

            function createNewOrder(id) {
                today = newDateForDB();
                var cartArray = shoppingCart.listCart();
                var totalPrice = shoppingCart.totalCart();
                var timeline = [];
                timeline.push({
                    time: today,
                    status: 'Order Success'
                });
                var shipping_address = [];
                shipping_address.push({
                    fullName: $("#info-firstName").val() + ' ' + $("#info-lastName").val(),
                    phone: $("#info-phone").val(),
                    email: $("#info-email").val(),
                    address: $("#info-address").val(),
                    city: $("#info-city").val(),
                    dateCreated: today,
                })
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
                        shipping_address: JSON.stringify(shipping_address),
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
            } else if (status.status == 'error') {
                $('#error-content').html(status.alert);
                $('#modalError').modal('show');
            }
        }

        addressProfile = '';
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

        $('.addnew_').click(function() {
            $('.addnew_form').load('<?php echo base_url(); ?>/html/address_form.html');
            $([document.documentElement, document.body]).animate({
                scrollTop: $(".target-bot").offset().top
            }, 0);
            $('.addnew_form').removeAttr('hidden');
            indexSelect = -1;
        })

        function displayDefaultAddress(info) {
            // console.log(info);
            if (info.shipping_address == '') {
                $('.shipping_adress').load('<?php echo base_url(); ?>/html/address_form.html');
            } else {
                addressProfile = JSON.parse(info.shipping_address);
                array = addressProfile.array;
                console.log(addressProfile);
                idx = addressProfile.default;
                displayTagAddress(array);
            }
        }

        function displayTagAddress(array) {
            output = '';
            for (i = 0; i < array.length; i++) {
                output += '<div class="col-12 col-md-6"><div><div id="card_'+ i +'" class="card custom-font-4 mb-4"><div class="card-body"><h5 class="card-title custom-font-1-bold text-uppercase ship_name">' +
                    array[i].firstName + ' ' + array[i].lastName + '</h5><p class="card-text ship_address">Address: ' +
                    array[i].address + ', ' + array[i].city +
                    '</p><p class="card-text ship_phone">Phone: ' +
                    array[i].phone + '</p><p class="card-text ship_phone">Email: ' + array[i].email + '</p><div class="row m-0 ngon" data-index="' +
                    i + '">' +
                    '<button class="btn btn-info btn-sm rounded-0 mr-2 btn_use">Use this address</button> ' +
                    '<button class="btn btn-light btn-sm rounded-0 mr-2 btn_edit">Edit</button>' +
                    '<button class="btn btn-light btn-sm rounded-0 mr-2 btn_remove">Remove</button> ' +
                    '</div></div></div></div></div>';
            }
            $('.shipping_adress').html(output);
            setdefault();
        }

        function setdefault() {
            defaultvl = addressProfile.default;
            $('#card_' + defaultvl).append('<span class="tag-default"><i class="fal fa-check-circle"></i> Default</span>');
            $('#card_' + defaultvl).addClass('border-success');
        }

        indexSelect = -1;

        $(document).on('click', '.btn_use', function() {
            thiss = $(this).closest('div');
            console.log(thiss.data('index'));
            indexSelect = thiss.data('index');
            localStorage.setItem("shipping_address", indexSelect);
            window.location.href = '<?php echo base_url(); ?>index.php/checkout';
        })
        $(document).on('click', '.btn_edit', function() {
            $('.addnew_form').removeAttr('hidden');
            $([document.documentElement, document.body]).animate({
                scrollTop: $(".addnew_form").offset().top
            }, 0);

            thiss = $(this).closest('div');
            idx = thiss.data('index');
            indexSelect = thiss.data('index');

            shipping_address = JSON.parse(userProfile.shipping_address);
            array = shipping_address.array;

            $('#info-email').val(array[idx].email);
            $('#info-firstName').val(array[idx].firstName);
            $('#info-lastName').val(array[idx].lastName);
            $('#info-phone').val(array[idx].phone);
            $('#info-city').val(array[idx].city);
            $('#info-address').val(array[idx].address);
        })
        $(document).on('click', '.btn_remove', function() {
            thiss = $(this).closest('div');
            ind = thiss.data('index');
            addressProfile.array.splice(ind, 1);
            saveShipping_Address(addressProfile);
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
                success: function(dataReturned) {
                    console.log('save done');
                }
            });
        }

        $(document).on('click', '.cancel_address', function() {
            $('.addnew_form').html('');
        })
        $(document).on('click', '.save_address', function() {

            email = $('#info-email').val();
            firstName = $('#info-firstName').val();
            lastName = $('#info-lastName').val();
            phone = $('#info-phone').val();
            city = $('#info-city').val();
            address = $('#info-address').val();
            isDefault = $('#useDefault').is(':checked');

            console.log(indexSelect);

            if (indexSelect != -1) { // update
                index = $('.addnew_form').data('index');
                addressProfile.array[indexSelect] = {
                    email: email,
                    firstName: firstName,
                    lastName: lastName,
                    phone: phone,
                    city: city,
                    address: address
                }
                if (isDefault) {
                    addressProfile.default = indexSelect;
                }
            } else {
                newList = {
                    email: email,
                    firstName: firstName,
                    lastName: lastName,
                    phone: phone,
                    city: city,
                    address: address
                };
                if (isDefault) {
                    addressProfile.default = addressProfile.array.length;
                }
                addressProfile.array.push(newList);
            }
            console.log(addressProfile);
            saveShipping_Address(addressProfile);
            location.reload();

        })
    </script>
</body>

</html>