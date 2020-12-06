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
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/sb-admin-2.min.css">


</head>

<body>
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
                            <a class="nav-link dropdown-toggle home-navbar-button" href="<?php echo base_url(); ?>index.php/shop" id="navbarCategory" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
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
                        <li class="nav-item active signin_info dropdown no-arrow">
                            <a class="nav-link btn-signin home-navbar-button" href="#signModal" data-toggle="modal">Sign in &nbsp<i class="fal fa-user"></i></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link  home-navbar-button" onclick="openNav()">
                                Your cart &nbsp<i class="fal fa-shopping-cart"></i>
                                <span style=" background-color: #f77f00;" class="total-count badge badge-success badge-counter align-middle rounded-circle">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!-- end container -->
        </nav> <!-- end navi -->
    </div> <!-- end top -->

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


    <!-- fade background -->
    <div id="fadeBackground" class="fjXvoO"></div>
    <div style="height:70px"></div>
    <!-- policy -->
    <!-- <div class="our-policy text-center align-middle pt-3 pb-3">
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
    </div> -->
    <!-- end policy -->

    <!-- main content -->

    <div class="d-flex">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6">
                    <img style="max-height:350px" class="d-block mt-auto mb-auto ml-auto mr-auto" src="<?php echo $dataProduct[0]['Image']; ?>" alt="">
                </div>
                <div class="col-md-6 pl-4 pr-4">
                    <section class="product-sale-content ">
                        <h2 class="text-capitalize font-weight-lighter custom-font-1">
                            <?php echo $dataProduct[0]['style']; ?></h2>

                        <!-- price product -->
                        <div>
                            <div class="container p-0">
                                <div class="row nameNprice">
                                    <div class="col-md-8 style">
                                        <h4 class="custom-font-5 text-uppercase">
                                            <?php echo $dataProduct[0]['Name']; ?>
                                        </h4>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="float-right justify-content-center align-items-center">
                                            <?php if ($dataProduct[0]['discount'] > 0) {
                                                echo "<h4 class='custom-font-2 custom-font-weight-light text-dec-line text-right text-uppercase'>$";
                                                echo $dataProduct[0]['Price'];
                                                echo "</h4>";
                                            } ?>
                                            <h4 class="custom-font-5 text-right text-uppercase">
                                                &nbsp;$<?php echo $dataProduct[0]['Price'] * (1 - $dataProduct[0]['discount']); ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end price of product -->

                        <!-- border -->
                        <div class="border-bottom mt-3 mb-3"></div>

                        <!-- star -->
                        <div class="d-flex reviews">
                            <p class="star-summary text-warning"></p>
                            <a class="num-review ml-1" href="#"></a>
                        </div>
                        <!-- end star -->

                        <!-- button add to cart -->
                        <button type="button" class="add-to-cart btn btn-info rounded-0 text-uppercase w-100 justify-content-center align-items-center" data-id="<?php echo $dataProduct[0]['ID'] ?>" data-name="<?php echo $dataProduct[0]['Name'] ?>" data-price="<?php echo $dataProduct[0]['Price'] ?>" data-image="<?php echo $dataProduct[0]['Image'] ?>" data-discount="<?php echo $dataProduct[0]['discount'] ?>" style="height:50px">
                            <i class="fal fa-shopping-cart"></i>
                            &nbsp;Add to cart
                        </button>
                        <!-- end add cart button -->

                        <!-- free ship info -->
                        <div class="reviews mt-4">
                            <!-- <p><i class="fas fa-square-full"></i>&nbsp;&nbsp;Free return</p> -->
                            <p><i class="fas fa-square-full"></i>&nbsp;&nbsp;Free ship for all</p>
                            <!-- <p><i class="fas fa-square-full"></i>&nbsp;&nbsp;Two years warranty</p> -->
                        </div>
                    </section>
                </div>
            </div>

            <!-- Tabs -->
            <section id="tabs">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">DETAILS</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">SHIPPING INFO</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">PAYMENT OPTIONS</a>
                                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">RETURNS &
                                        EXCHANGES</a>
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6 pr-5">
                                                <p class="custom-font-1">
                                                    <?php echo $dataProduct[0]['Description'] ?>
                                                </p>
                                            </div>

                                            <div class="col-lg-6">
                                                <table class="detail-content table">

                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <p class="custom-font-1 w-100">
                                        Free Ship nha mọi người<br>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <p class="custom-font-1">
                                        ELite offers secure payment methods and you can choose to pay with Visa,
                                        Mastercard, Maestro, American Express, Discover, Diners Club International,
                                        Klarna, Apple Pay or PayPal.
                                    </p>
                                    <div class="text-center">
                                        <img srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2ewe5eMPSEcIqwoU08QIOA/5d89569ef8dfe251d0b795f76e0163d1/visa-2x.png?ecom2=true&amp;width=40&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2ewe5eMPSEcIqwoU08QIOA/5d89569ef8dfe251d0b795f76e0163d1/visa-2x.png?ecom2=true&amp;width=80&amp;quality=100 2x" src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2ewe5eMPSEcIqwoU08QIOA/5d89569ef8dfe251d0b795f76e0163d1/visa-2x.png?ecom2=true&amp;" alt="" data-srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2ewe5eMPSEcIqwoU08QIOA/5d89569ef8dfe251d0b795f76e0163d1/visa-2x.png?ecom2=true&amp;width=40&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2ewe5eMPSEcIqwoU08QIOA/5d89569ef8dfe251d0b795f76e0163d1/visa-2x.png?ecom2=true&amp;width=80&amp;quality=100 2x" class="m-2">
                                        <img srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2MIeYuELok46G2wAIU64Ao/dc9ffe7987f1c1654a722a3506199561/mastercard-2x.png?ecom2=true&amp;width=33&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2MIeYuELok46G2wAIU64Ao/dc9ffe7987f1c1654a722a3506199561/mastercard-2x.png?ecom2=true&amp;width=66&amp;quality=100 2x" src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2MIeYuELok46G2wAIU64Ao/dc9ffe7987f1c1654a722a3506199561/mastercard-2x.png?ecom2=true&amp;" alt="" data-srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2MIeYuELok46G2wAIU64Ao/dc9ffe7987f1c1654a722a3506199561/mastercard-2x.png?ecom2=true&amp;width=33&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2MIeYuELok46G2wAIU64Ao/dc9ffe7987f1c1654a722a3506199561/mastercard-2x.png?ecom2=true&amp;width=66&amp;quality=100 2x" class="m-2">
                                        <img srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/13q571kpXagKaugiUm8sqA/f292e71009a25c91f46b7a888e5cbccb/maestro-2x.png?ecom2=true&amp;width=32&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/13q571kpXagKaugiUm8sqA/f292e71009a25c91f46b7a888e5cbccb/maestro-2x.png?ecom2=true&amp;width=64&amp;quality=100 2x" src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/13q571kpXagKaugiUm8sqA/f292e71009a25c91f46b7a888e5cbccb/maestro-2x.png?ecom2=true&amp;" alt="" data-srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/13q571kpXagKaugiUm8sqA/f292e71009a25c91f46b7a888e5cbccb/maestro-2x.png?ecom2=true&amp;width=32&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/13q571kpXagKaugiUm8sqA/f292e71009a25c91f46b7a888e5cbccb/maestro-2x.png?ecom2=true&amp;width=64&amp;quality=100 2x" class="m-2">
                                        <img srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7rjkl2vvIk46uK2ius6Uiy/bd47cf4a76b302d4a39b1176e853a712/amex-2x.png?ecom2=true&amp;width=27&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7rjkl2vvIk46uK2ius6Uiy/bd47cf4a76b302d4a39b1176e853a712/amex-2x.png?ecom2=true&amp;width=54&amp;quality=100 2x" src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7rjkl2vvIk46uK2ius6Uiy/bd47cf4a76b302d4a39b1176e853a712/amex-2x.png?ecom2=true&amp;" alt="" data-srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7rjkl2vvIk46uK2ius6Uiy/bd47cf4a76b302d4a39b1176e853a712/amex-2x.png?ecom2=true&amp;width=27&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7rjkl2vvIk46uK2ius6Uiy/bd47cf4a76b302d4a39b1176e853a712/amex-2x.png?ecom2=true&amp;width=54&amp;quality=100 2x" class="m-2">
                                        <img srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/3mlTXT3LWMyU8wKQaGm4YQ/26816edd4b522fb95031e74e2e80755d/discover-2x.png?ecom2=true&amp;width=53&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/3mlTXT3LWMyU8wKQaGm4YQ/26816edd4b522fb95031e74e2e80755d/discover-2x.png?ecom2=true&amp;width=106&amp;quality=100 2x" src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/3mlTXT3LWMyU8wKQaGm4YQ/26816edd4b522fb95031e74e2e80755d/discover-2x.png?ecom2=true&amp;" alt="" data-srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/3mlTXT3LWMyU8wKQaGm4YQ/26816edd4b522fb95031e74e2e80755d/discover-2x.png?ecom2=true&amp;width=53&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/3mlTXT3LWMyU8wKQaGm4YQ/26816edd4b522fb95031e74e2e80755d/discover-2x.png?ecom2=true&amp;width=106&amp;quality=100 2x" class="m-2">
                                        <img srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/3piI2aoGAUOiYQYc0KCw0Y/a9adef44c32c3efe97e34aebbb8feaa5/diners-club-2x.png?ecom2=true&amp;width=74&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/3piI2aoGAUOiYQYc0KCw0Y/a9adef44c32c3efe97e34aebbb8feaa5/diners-club-2x.png?ecom2=true&amp;width=148&amp;quality=100 2x" src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/3piI2aoGAUOiYQYc0KCw0Y/a9adef44c32c3efe97e34aebbb8feaa5/diners-club-2x.png?ecom2=true&amp;" alt="" data-srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/3piI2aoGAUOiYQYc0KCw0Y/a9adef44c32c3efe97e34aebbb8feaa5/diners-club-2x.png?ecom2=true&amp;width=74&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/3piI2aoGAUOiYQYc0KCw0Y/a9adef44c32c3efe97e34aebbb8feaa5/diners-club-2x.png?ecom2=true&amp;width=148&amp;quality=100 2x" class="m-2">
                                        <img srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/5UI0gSGTReIIQka4kWiKWQ/136ec5357618caf55b28efa2308ce298/klarna.png?ecom2=true&amp;width=67.5&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/5UI0gSGTReIIQka4kWiKWQ/136ec5357618caf55b28efa2308ce298/klarna.png?ecom2=true&amp;width=135&amp;quality=100 2x" src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/5UI0gSGTReIIQka4kWiKWQ/136ec5357618caf55b28efa2308ce298/klarna.png?ecom2=true&amp;" alt="" data-srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/5UI0gSGTReIIQka4kWiKWQ/136ec5357618caf55b28efa2308ce298/klarna.png?ecom2=true&amp;width=67.5&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/5UI0gSGTReIIQka4kWiKWQ/136ec5357618caf55b28efa2308ce298/klarna.png?ecom2=true&amp;width=135&amp;quality=100 2x" class="m-2">
                                        <img srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7lbcSVPXDa2caEYsEssYwQ/5a4d5223c5a306c96f86c9a81933e24b/apple-pay-2x.png?ecom2=true&amp;width=41&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7lbcSVPXDa2caEYsEssYwQ/5a4d5223c5a306c96f86c9a81933e24b/apple-pay-2x.png?ecom2=true&amp;width=82&amp;quality=100 2x" src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7lbcSVPXDa2caEYsEssYwQ/5a4d5223c5a306c96f86c9a81933e24b/apple-pay-2x.png?ecom2=true&amp;" alt="" data-srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7lbcSVPXDa2caEYsEssYwQ/5a4d5223c5a306c96f86c9a81933e24b/apple-pay-2x.png?ecom2=true&amp;width=41&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7lbcSVPXDa2caEYsEssYwQ/5a4d5223c5a306c96f86c9a81933e24b/apple-pay-2x.png?ecom2=true&amp;width=82&amp;quality=100 2x" class="m-2">
                                        <img srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/4eXbeetlGwMke2MkY4Kkkw/1d422b9855aacdb179c7a42fd815cfa1/paypal-2x.png?ecom2=true&amp;width=64&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/4eXbeetlGwMke2MkY4Kkkw/1d422b9855aacdb179c7a42fd815cfa1/paypal-2x.png?ecom2=true&amp;width=128&amp;quality=100 2x" src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/4eXbeetlGwMke2MkY4Kkkw/1d422b9855aacdb179c7a42fd815cfa1/paypal-2x.png?ecom2=true&amp;" alt="" data-srcset="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/4eXbeetlGwMke2MkY4Kkkw/1d422b9855aacdb179c7a42fd815cfa1/paypal-2x.png?ecom2=true&amp;width=64&amp;quality=100 1x, https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/4eXbeetlGwMke2MkY4Kkkw/1d422b9855aacdb179c7a42fd815cfa1/paypal-2x.png?ecom2=true&amp;width=128&amp;quality=100 2x" class="m-2">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <p class="custom-font-1">
                                        We offer free returns on all our products. You have the right to return any/all
                                        products you have purchased directly from our website within 30 days of
                                        receiving
                                        the item. The product(s) must be unused – in its original packaging with labels
                                        and
                                        protective stickers intact - and in the same condition as when the watch was
                                        received. <br><br>
                                        Products purchased directly from our website must be returned to our warehouse
                                        for a
                                        full refund; the product (s) cannot be returned to a local dealer.
                                        Please note that you may be charged the shipping costs for returning this
                                        package to
                                        us. <br><br>
                                        ELite is not responsible for lost items during the return.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Review -->
            <section>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-5 col-12 mb-4">
                            <div class="row">
                                <h6 class="custom-font-2-bold">Customer Reviews</h6>
                            </div>
                            <div class="row">
                                <div class="review-summary">
                                    <div class="text-center border-right pr-3">
                                        <span class="vote-summary custom-font-5-bold">5.0</span>
                                        <div class="reviews-detail mb-1">
                                            <span class="star-summary custom-font-3 text-warning m-0">
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                                <i class="fas fa-star" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <span class="num-review custom-font-3">1 Review</span>
                                    </div>
                                </div>

                                <div class="mt-1 ml-3">
                                    <!-- 5 star -->
                                    <div id="vote-5s" class="row custom-font-0 m-0">
                                        <div class="text-warning">
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="progress ml-3 mr-3 mt-1" style="width: 120px; height:8px">
                                            <div class="progress-bar bg-info rounded-right" role="progressbar" style="width: 0%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="numVote">0</div>
                                    </div>
                                    <!-- 4 star -->
                                    <div id="vote-4s" class="row custom-font-0 m-0">
                                        <div class="text-warning">
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class='fal fa-star'></i>
                                        </div>
                                        <div class="progress ml-3 mr-3 mt-1" style="width: 120px; height:8px">
                                            <div class="progress-bar bg-info rounded-right" role="progressbar" style="width: 0%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="numVote">0</div>
                                    </div>
                                    <!-- 3 star -->
                                    <div id="vote-3s" class="row custom-font-0 m-0">
                                        <div class="text-warning">
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class='fal fa-star'></i>
                                            <i class='fal fa-star'></i>
                                        </div>
                                        <div class="progress ml-3 mr-3 mt-1" style="width: 120px; height:8px">
                                            <div class="progress-bar bg-info rounded-right" role="progressbar" style="width: 0%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="0"></div>
                                        </div>
                                        <div class="numVote">0%</div>
                                    </div>
                                    <!-- 2 star -->
                                    <div id="vote-2s" class="row custom-font-0 m-0">
                                        <div class="text-warning">
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class='fal fa-star'></i>
                                            <i class='fal fa-star'></i>
                                            <i class='fal fa-star'></i>
                                        </div>
                                        <div class="progress ml-3 mr-3 mt-1" style="width: 120px; height:8px">
                                            <div class="progress-bar bg-info rounded-right" role="progressbar" style="width: 0%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="0"></div>
                                        </div>
                                        <div class="numVote">0%</div>
                                    </div>
                                    <!-- 1 star -->
                                    <div id="vote-1s" class="row custom-font-0 m-0">
                                        <div class="text-warning">
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class='fal fa-star'></i>
                                            <i class='fal fa-star'></i>
                                            <i class='fal fa-star'></i>
                                            <i class='fal fa-star'></i>
                                        </div>
                                        <div class="progress ml-3 mr-3 mt-1" style="width: 120px; height:8px">
                                            <div class="progress-bar bg-info rounded-right" role="progressbar" style="width: 0%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="0"></div>
                                        </div>
                                        <div class="numVote">0%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="review-block">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div hidden class="container writeReview_block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="border-bottom mb-3 mt-3"></div>
                            <h6 class="custom-font-1-bold">Review this product</h6>
                            <p class="custom-font-3 mb-2">Share your thoughts with other customers</p>
                            <button class="btn btn-sm btn-warning rounded-0 pl-4 pr-4 btn_writeReview">Write a customer
                                review</button>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>

    <!-- end main content -->

    <!-- letter content -->
    <div class="letter-signup-sec">
        <div class="letter-box">
            <div class="letter-content">
                <span class="letter-title">BE THE FIRST</span>
                <div class="letter-sub-title">
                    <span>Get the latest news, invites and offers straight to your mail.</span>
                </div>
                <form class="signup-form">
                    <label class="signup-form-label">Email address</label>
                    <input name="email" type="email" aria-la bel="email" class="signup-input" value="" oninput="textDidchange()">
                    <span class="input-warning"></span>
                    <button class="signup-button" type="button" disabled="disabled" action="insertEmail">
                        <span class="signup-span">Subscribe</span>
                    </button>
                </form>
                <div class="form-bottom-privacy">
                    <span>Click <a href="#zxc" title="Privacy Policy">here</a> to read information on how Elite
                        processes your personal data.</span>
                </div>
            </div>
            <div class="letter-footer">
                <!-- Link facebook -->
                <a href="https://www.facebook.com/" title="Facebook" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!-- Link instagram -->
                <a href="https://www.instagram.com/" title="Instagram" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-instagram"></i>
                </a>
                <!-- Link Youtube -->
                <a href="https://youtube.com/" title="Youtube" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-youtube"></i>
                </a>
                <!-- Link Twitter -->
                <a href="https://twitter.com/" title="Twitter" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-twitter"></i>
                </a>
                <!-- Link pinterest -->
                <a href="https://www.pinterest.com/" title="Pinterest" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-pinterest-p"></i>
                </a>
                <!-- Link snapchat -->
                <a href="https://www.snapchat.com/" title="snapchat" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-snapchat-ghost"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- end letter -->

    <footer>
        <div class="GoToTopButton-Container cnWqIH">
            <button class="GoToTopButton-Button dfMNN">
                <i class="far fa-arrow-up"></i>
            </button>
        </div>

        <div class="container pt-5 pb-0 menu-bot">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <h4>SHOP</h4>
                    <h6>
                        <a href="#">All Watches</a>
                    </h6>
                    <h6>
                        <a href="#">Men's Watches</a>
                    </h6>
                    <h6>
                        <a href="#">Woman's Watches</a>
                    </h6>
                    <h6>
                        <a href="#">Gold Watches</a>
                    </h6>
                    <h6>
                        <a href="#">Silver Watches</a>
                    </h6>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <h4>SUPPORT</h4>
                    <h6>
                        <a href="#">FAQ</a>
                    </h6>
                    <h6>
                        <a href="#">Contact us</a>
                    </h6>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <h4>INFORMATION</h4>
                    <h6>
                        <a href="#">Privacy Policy</a>
                    </h6>
                    <h6>
                        <a href="#">Term of service</a>
                    </h6>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <h4>ABOUT US</h4>
                    <h6>
                        <a href="#">Our Story</a>
                    </h6>
                    <h6>
                        <a href="#">Career</a>
                    </h6>
                </div>

            </div>
        </div>

        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 copy-right-footer">
                    <h6>&copy; 2020 - Bản quyền của Nghia Minh Thuy Thu</h6>
                    <p>Giấy chứng nhận ĐKKD số 0108150321 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày
                        29/01/2018 123C Thụy Khuê, Tây Hồ, Hà Nội</p>
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
    </footer>

    <!-- Modal Signin -->
    <div id="signModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sign In</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fal fa-user"></i></span>
                                <input id="user" type="text" class="form-control" placeholder="Username" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fal fa-lock"></i></span>
                                <input id="pass" type="text" class="form-control" name="password" placeholder="Password" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block btn-lg rounded-0 sign_in">Sign In</button>
                        </div>
                        <p class="hint-text"><a href="#">Forgot Password?</a></p>
                    </form>
                </div>
                <div class="modal-footer">Don't have an account? <a href="#">Create one</a></div>
            </div>
        </div>
    </div>

    <!-- modal review -->
    <div class="modal fade" id="modalReview" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="col-form-label text-uppercase custom-font-5-bold">Send your reviews</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-4">
                    <div class="container">
                        <form>
                            <div class="form-group row custom-font-1-bold">
                                <label class="col-form-label mr-3">1. Your rating: </label>
                                <div class="rating-input pt-2 text-warning">
                                    <i class="fal fa-star" data-value="1"></i>
                                    <i class="fal fa-star" data-value="2"></i>
                                    <i class="fal fa-star" data-value="3"></i>
                                    <i class='fal fa-star' data-value="4"></i>
                                    <i class='fal fa-star' data-value="5"></i>
                                </div>
                                <input id="review-rate" type="number" hidden class="form-control rounded-0">
                            </div>
                            <div class="form-group row custom-font-1-bold">
                                <label for="inputPassword" class="mb-1 col-form-label p-0">2. Title</label>
                                <div class="col-sm-12 p-0">
                                    <input id="review-head" type="text" class="form-control rounded-0">
                                </div>
                            </div>
                            <div class="form-group row custom-font-1-bold">
                                <label for="inputPassword" class="mb-1 col-form-label p-0">3. Your reviews</label>
                                <div class="col-sm-12 p-0">
                                    <textarea id="review-content" type="text" class="form-control rounded-0" rows="5" placeholder="Input your reviews here"></textarea>
                                </div>
                            </div>
                            <a href="#" id='btn-sendreview' class="row btn btn-sm pt-2 pb-2 pl-5 pr-5 btn-warning rounded-0">SEND YOUR REVIEW</a>
                        </form>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>js/base.js"></script>

    <script>
        function loadReviewStar() {
            var id = "<?php echo  $dataProduct[0]['ID'] ?>";
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/ProductManage/getReviewOfProductByID_Ajax/',
                dataType: 'json',
                data: {
                    id: id,
                },
                success: function(data) {
                    displayStar(data);
                }
            });
        }

        function loadFeedback() {
            var id = "<?php echo  $dataProduct[0]['ID'] ?>";
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/ProductManage/getListFeedbackByID/',
                dataType: 'json',
                data: {
                    id: id,
                },
                success: function(data) {
                    console.log(data);
                    displayFeedback(data);
                }
            });
        }

        function displayStar(data) {
            var count = data[0]['count'];
            var sum = data[0]['sum'];
            var point = sum / count;

            // var x = point / 5;
            var htmlOut = "";

            for (var i = 1; i <= 5; i++) {
                if (i <= point) {
                    htmlOut += "<i class='fas fa-star'></i>";
                } else {
                    if (i - point < 1) {
                        htmlOut += "<i class='fas fa-star-half-alt'></i>";
                    } else {
                        htmlOut += "<i class='fal fa-star'></i>";
                    }
                }
            }

            $('.vote-summary').html((Math.round((count == 0 ? 0 : point) * 100) / 100).toFixed(1) +
                '<small>/ 5</small>');
            $(".star-summary").html(htmlOut);
            $(".num-review").html("(" + count + (count > 1 ? " Reviews" : " Review") + ")");

            $('#vote-5s .numVote').html(data[0]['v5']);
            $('#vote-4s .numVote').html(data[0]['v4']);
            $('#vote-3s .numVote').html(data[0]['v3']);
            $('#vote-2s .numVote').html(data[0]['v2']);
            $('#vote-1s .numVote').html(data[0]['v1']);

            $('#vote-5s .progress .progress-bar').attr('style', 'width:' + (data[0]['v5'] / count) * 100 + '%');
            $('#vote-4s .progress .progress-bar').attr('style', 'width:' + (data[0]['v4'] / count) * 100 + '%');
            $('#vote-3s .progress .progress-bar').attr('style', 'width:' + (data[0]['v3'] / count) * 100 + '%');
            $('#vote-2s .progress .progress-bar').attr('style', 'width:' + (data[0]['v2'] / count) * 100 + '%');
            $('#vote-1s .progress .progress-bar').attr('style', 'width:' + (data[0]['v1'] / count) * 100 + '%');


        }

        function displayFeedback(data) {
            if (data.length == 0) {
                $('.review-block').attr('hidden','hidden');
            } else {
                htmlOut = '';
                for (index = 0; index < data.length; index++) {
                    date = new Date().setTime(data[index].date);
                    htmlOut += '<div class="row"><div class="col-sm-4">';
                    if (data[index].avatar != '') {
                        htmlOut +=
                            '<img style="width:60px;height:60px" height="60px" src="' + data[index].avatar +
                            '" class="img-rounded border rounded-circle">'
                    } else {
                        avt = data[index].name.charAt(0);
                        htmlOut +=
                            '<div style="width:60px;height:60px" class="review-avt bg-gray-700 text-white text-center rounded-circle">' +
                            avt + '</div>';
                    }

                    htmlOut +=
                        '<div class="review-block-name text-capitalize"><p class="custom-font-3-bold mb-0">' + data[index]
                        .name +
                        '</p></div>' + '<div class="review-block-date">' + dateLongFormat(date) +
                        '<br /></div></div>' +
                        '<div class="col-sm-8"><div class="review-block-rate text-warning">';
                    for (var i = 1; i <= 5; i++) {
                        htmlOut += (i <= data[index].vote) ? "<i class='fas fa-star'></i>" :
                            "<i class='fal fa-star'></i>";
                    }
                    htmlOut += '</div>' +
                        '<div class="review-block-title">' + data[index].head + '</div>' +
                        '<div class="review-block-description">' + (data[index].content == null ? ' ' : data[index]
                            .content) + '</div></div></div><hr />';

                }
                $('.review-block').html(htmlOut);
            }
        }

        loadReviewStar();
        loadFeedback();
        var rateDefault = 0;
        $(".rating-input i").hover(function() {
            value = $(this).data('value');
            for (ind = 0; ind < $(".rating-input i").length; ind++) {
                $(".rating-input i").eq(ind).removeClass(ind + 1 <= value ? 'fal' : 'fas').addClass(ind + 1 <=
                    value ? 'fas' : 'fal');
                // $(".rating-input i").eq(ind).removeClass('fal').addClass('fas');
            }
        });
        $('.form-group').hover(function() {
            setDefaultRating();
        });
        $(".rating-input i").click(function() {
            rateDefault = $(this).data('value');
            for (ind = 0; ind < $(".rating-input i").length; ind++) {
                $(".rating-input i").eq(ind).removeClass(ind + 1 <= value ? 'fal' : 'fas').addClass(ind + 1 <=
                    value ? 'fas' : 'fal');
                // $(".rating-input i").eq(ind).removeClass('fal').addClass('fas');
            }
            $('#review-rate').val(rateDefault);
        });

        function setDefaultRating() {
            for (ind = 0; ind < $(".rating-input i").length; ind++) {
                $(".rating-input i").eq(ind).removeClass(ind + 1 <= rateDefault ? 'fal' : 'fas').addClass(ind + 1 <=
                    rateDefault ? 'fas' : 'fal');
                // $(".rating-input i").eq(ind).removeClass('fal').addClass('fas');
            }
        }

        $('#btn-sendreview').click(function() {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/ProductManage/saveReview',
                dataType: 'json',
                data: {
                    idProduct: '<?php echo  $dataProduct[0]['ID'] ?>',
                    idCustomer: loadToken().customer_id,
                    vote: $('#review-rate').val(),
                    head: $('#review-head').val(),
                    content: $('#review-content').val(),
                    date: Date.now()
                },
                success: function(data) {
                    if (data.status == 'complete') {
                        $(window).scrollTop(0);
                        location.reload();
                    }
                }
            });
        })

        $('.btn_writeReview').click(function() {
            $('#modalReview').modal('show');
        })
    </script>

    <script>
        function displayDetailContent() {
            json = '';

            if (json != null) {
                innerhtml = "";
                for (index = 0; index < json.length; index++) {

                    innerhtml += '<tr>' +
                        '<td class="text-left font-weight-light">' + json[index].key +
                        '</td>' +
                        '<td class="text-right">' + json[index].val +
                        '</td>' +
                        '</tr>';
                    $('.table-details').append(innerhtml);
                }
                $('.detail-content').html(innerhtml);
            }
        }
        displayDetailContent();
    </script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/user.js"></script>

    <script>
        href = '';
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
                            displayInfo(dataReturned[0]);
                        }
                    }
                });
            }
        }

        function displayInfo(info) {
            if (info != '') {
                $('.signin_info').html('<a class="nav-link dropdown-toggle home-navbar-button" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, ' + info.firstName + ' &nbsp<i class="fal fa-user-check"></i></a>');
                $('.signin_info').append($('<div class="dropdown-menu need-hover-drop rounded-0 border-0 shadow" aria-labelledby="navbarDropdown">' +
                    '<a class="dropdown-item custom-font-4 account_" href="#">Account</a>' +
                    '<a class="dropdown-item custom-font-4 orders_" href="#">Orders</a>' +
                    '<div class="dropdown-divider"></div>' +
                    '<a class="dropdown-item custom-font-4 signout_" href="#">Sign out</a>' +
                    '</div>'));
                $('.signin_info').on('mouseover', function() {
                    fadeBackground();
                }).on('mouseout', function() {
                    hideBackground();
                })
                $('.signin_info').on('click', '.signout_', function() {
                    signOut();
                })
            }
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
            output = '<a class="dropdown-item custom-font-4" href="shop">All Category</a>';
            for (i = 0; i < info.length; i++) {
                output += '<div class="dropdown-divider"></div>' +
                    '<a class="dropdown-item custom-font-4" data-id="' + info[i].ID + '" href="shop?src=' + info[i].DisplayName + '">' + info[i].DisplayName + '</a>'
            }
            $('#dropdownCategory').html(output);

            sth = parseURLParams(window.location.search);
            $('.category_display').html(sth != null ? sth.src[0].toUpperCase() : 'All Category'.toUpperCase());
        }
    </script>

</body>

</html>