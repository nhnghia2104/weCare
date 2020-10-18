<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Elite</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>img/elite-favicon.png" />
    <!-- --------------------------------------------------------------- -->
    <!-- font -->
    <!-- -------------------------------------------------------------- -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- Style -->
    <!-- --------------------------------------------------------------------------- -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/queries.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/sb-admin-2.min.css">


</head>

<body>

    <!-- fake div -->
    <div id="navi-top"></div>

    <!-- main div -->
    <div class="bg-dark custom-font-1 fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand navbar-dark bg-none topbar static-top">

                <ul class="navbar-nav ml-auto" style="min-width: 120px">
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" role="button" onclick="goBack()" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fal fa-long-arrow-left"></i>&nbsp Back
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-center">
                    <a class="story-logo p-2" href="<?php echo base_url(); ?>index.php/home">
                        <img class="svg-icon-image" src="<?php echo base_url(); ?>img/svg/logo.svg" alt="logo">
                    </a>
                </div>
                <ul class="navbar-nav ml-auto" style="min-width: 120px">
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" role="button" onclick="openNav()" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Your cart &nbsp<i class="fal fa-shopping-cart"></i>
                            <!-- Counter -->
                            <span
                                class="total-count badge badge-success badge-counter align-middle rounded-circle">0</span>
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>

    <!-- mini cart -->
    <div id="miniCart" class="sideCart">
        <!-- Header cart -->
        <div class="container pt-3 pb-3">
            <div class="row text-center">
                <a class="col-2 pl-1" onclick="closeNav();">
                    <i class="fal fa-times"></i>
                </a>
                <!-- mini cart title -->
                <span class="col-9 text-right">Your cart</span>
            </div>
        </div>

        <div class="border-bottom"></div>
        <!-- Body cart -->
        <div class="cart-body container-fluid mt-3 p-0 custom-font-1">
            <ul class="show-cart">
                <!-- <li>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-3"><img id="img-0" class="lazy img-responsive card-img p-3" src="http://localhost:8080/01/FilesUpload/werner.webp"></div>
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

                <div class="border-bottom border-dark"></div>

                <div class="row justify-content-center align-items-center p-0">
                    <div class="col-10 mt-3 mb-3 p-0">Total Price:</div>
                    <div class="col-2 text-right p-0">
                        <span class="total-cart align-middle">99*</span>
                    </div>
                    <button type="button" class="col-12 btn btn-dark rounded-0" style="height:50px">Checkout</button>
                </div>

            </div>
        </div>
    </div>


    <!-- fade background -->
    <div id="fadeBackground" class="fjXvoO"></div>

    <div style="height:70px"></div>

    <!-- policy -->
    <div class="our-policy text-center align-middle pt-3 pb-3">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <i class="fal fa-shipping-fast"></i>
                    <span>Free ship for all</span>
                </div>
                <div class="col-md-4">
                    <i class="fal fa-hand-holding-box"></i>
                    <span>Free return for 30 days</span>
                </div>
                <div class="col-md-4">
                    <i class="fal fa-star-shooting"></i>
                    <span>Two years warranty</span>
                </div>
            </div>
        </div>
    </div>
    <!-- end policy -->

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
                    <h3 class="custom-font-2-bold mb-4">Customer Infomation</h3>
                    <form>
                        <div class="form-group">
                            <label class="custom-font-0">Email *</label>
                            <input id="info-email" type="email" class="form-control rounded-0" value="nhnghia2104@gmail.com"
                                placeholder="Email">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="custom-font-0">First Name *</label>
                                <input  id="info-firstName" type="email" class="form-control rounded-0" value="Nghia"
                                    placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="custom-font-0">Last Name *</label>
                                <input  id="info-lastName" type="email" class="form-control rounded-0" value="Nguyen Huu"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="custom-font-0">Phone number *</label>
                                <input  id="info-phone" type="text" class="form-control rounded-0" value="+84835574140"
                                    placeholder="Phone number">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="custom-font-0">City *</label>
                                <input  id="info-city" type="text" class="form-control rounded-0" id="inputCity" value="Ho Chi Minh"
                                    placeholder="City">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="custom-font-0">Address *</label>
                            <input  id="info-address" type="text" class="form-control rounded-0"
                                value="Han Thuyen, Quarter 6,  Linh Trung Ward, Thu Duc District" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label class="custom-font-0">Note</label>
                            <div class="">
                                <textarea id="info-note" class="form-control rounded-0" id="product-description" rows="4"
                                    name="product-description" placeholder="Note"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end form group info -->

                <div class="border-bottom"></div>

                <!-- group payemnt -->
                <div class="pt-3 mb-5">
                    <h3 class="custom-font-2-bold mb-4">Payment</h3>
                    <form class="mt-4">
                        <div class="form-group justify-content-center align-items-center">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    <img class="rounded"
                                        src="https://www.flaticon.com/svg/static/icons/svg/2331/2331895.svg" alt="logo"
                                        style="width: 30px; height: 30px;">&nbsp Cash On Delivery
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    <img class="rounded" src="<?php echo base_url(); ?>img/vnpay.png" alt="logo"
                                        style="width: 30px; height: 30px;">&nbsp VNPAY Payment Gateway
                                </label>

                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                    value="option2">
                                <label class="form-check-label" for="exampleRadios3">
                                    <img class="rounded" src="<?php echo base_url(); ?>img/momo.png" alt="logo"
                                        style="width: 30px; height: 30px;">&nbsp Momo E-Wallet
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
                    <div class="ccontainer-fluid mt-3 pt-4 pl-4 pr-4">
                        <ul class="show-overview">
                            <li class="mb-3">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-3"><img id="img-0" class="lazy img-responsive card-img"
                                            src="http://localhost:8080/01/FilesUpload/werner.webp"></div>
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
                            <img src="https://imaginary.dtx.asia/fit?auto=png&format=png&width=60&url=https%3A%2F%2Fcurnonwatch.com%2Fmomo-5Wx.png%3Fauto%3Dpng%26format%3Dpng%26width%3D60&nocrop=true&type=auto&height=1080"
                                alt="momoIcon">
                            <img src="https://imaginary.dtx.asia/fit?auto=png&format=png&width=60&url=https%3A%2F%2Fcurnonwatch.com%2Fvnpay-aWk.png%3Fauto%3Dpng%26format%3Dpng%26width%3D60&nocrop=true&type=auto&height=1080"
                                alt="VNPayIcon">
                        </div>
                        <div class="col-12 col-sm-6">
                            <img src="<?php echo base_url(); ?>img/bct-5Sz.png" alt="" style="width: 100%;">
                        </div>
                    </div>
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
                "<span class='align-middled'>$" + cartArray[i].price + "</span>" +
                "</div>" +
                "</div>" +
                "</li>";
        }
        $('.show-overview').html(output);
    }
    displayOverview();
    </script>

    <script>
    $(document).ready(function() {
        $("#btnSubmitCheckout").click(function() {

            var cartArray = shoppingCart.listCart();
            var totalPrice = shoppingCart.totalCart();
            var cusObj = {
                productList : cartArray,
                totalPrice : totalPrice,
                email : $("#info-email").val(),
                firstName : $("#info-firstName").val(),
                lastName : $("#info-lastName").val(),
                phone : $("#info-phone").val(),
                city : $("#info-city").val(),
                address : $("#info-address").val(),
                note : $("#info-note").val(),

            }
            var productJson = JSON.stringify(cusObj);
            $.ajax({
                type: "POST",
                url: 'checkout/complete',
                dataType: 'json',
                data: {
                    dataSend: productJson,
                },
                success: function(status) {
                    alart(status);
                }
            });

            shoppingCart.clearCart();
        });
    });
    </script>
</body>

</html>