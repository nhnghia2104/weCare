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
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/bootstrap/css/bootstrap.css">

</head>

<body>
    <div class="top"
        style="background-image: linear-gradient(207.49deg, #333333 6.27%, rgba(196, 196, 196, 0) 81.14%), url(<?php echo base_url();?>img/background4.jpg);">
        <div class="overlay"></div>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark" id="navi-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-top"
                    aria-controls="menu-top" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <i class="fal fa-atom"></i>
                </a>
                <div class="collapse navbar-collapse" id="menu-top">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-top-element">
                        <li class="nav-item active">
                            <a class="nav-link home-navbar-button" href="shop">Elite's shop</a>
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
                            <a class="nav-link  home-navbar-button" href="signin"><i class="fal fa-user"></i> Sign
                                in<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link  home-navbar-button" onclick="openNav()">
                                <i class="fal fa-shopping-cart"></i> Your cart
                                <span class="total-count badge badge-light badge-counter">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!-- end container -->
        </nav> <!-- end navi -->

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 text-center">
                        <h1>
                            LIVE FOR GREATENESS
                        </h1>
                        <p id="banner-content">
                            Greatness is within everyone. Passion, drive, inspiration greatness is a journey that never
                            end.
                        </p>
                        <a href="#" class="btn btn-outline-light" style="text-transform: uppercase;">
                            Discover now
                        </a>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end banner -->
    </div> <!-- end top -->

    <!-- mini cart -->
    <div id="miniCart" class="sideCart">

        <!-- Header cart -->
        <div class="container pt-3 pb-3">
            <div class="row text-center">
                <a class="col-2 pl-1" onclick="closeNav();">
                    <i class="fal fa-times"></i>
                </a>
                <span class="col-9 text-right">Your cart</span>
            </div>
        </div>

        <div class="border-bottom"></div>
        <!-- Body cart -->
        <div class="cart-body container">
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
            
            <div class="">TOTAL : &nbsp $<span class="total-cart"></span></div>
            
        </div>
    </div>

     <!-- fade background -->
     <div id="fadeBackground" class="fjXvoO"></div>

    <div class="about-us mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <span class="story-logo">
                        <img class="svg-icon-image" src="<?php echo base_url(); ?>img/svg/logo.svg" alt="logo">
                    </span>
                    <h3>
                        THE STORY OF ELITE
                    </h3>
                    <p>
                        At the end of 2020, 4 students who were passionate about Wathes decided to start Elite.
                        <br>Elite
                        was
                        found
                        with a mission "Bring an inspiration, a change of mindset, a change of thought and what we call
                        young
                        experience".
                    </p>
                </div>
            </div> <!-- end row -->
            <picture>
                <img src="<?php echo base_url(); ?>img/why-not-background-01.png" alt="" width="100%">
            </picture>
        </div> <!-- end container -->
    </div> <!-- end about us -->

    <div class="our-product">
        <div class="our-product-title mb-5 text-center" style="width: 100%;">
            <h2>
                MEN'S BEST SELLERS
            </h2>
            <a href="#">
                MORE <i class="fal fa-long-arrow-right"></i>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 product-card">
                    <div class="card pt-2 text-center">
                        <a href="#">
                            <img class="card-img" src="<?php echo base_url(); ?>img/watch/motar.webp" alt="Vans">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                            <p class="card-text">
                                $21.04 </p>
                            <a href="#" class="cus-btn from-center mt-3 button-add-to-cart"><i
                                    class="fal fa-shopping-cart"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 product-card">
                    <div class="card pt-2 text-center">
                        <a href="#">
                            <img class="card-img" src="<?php echo base_url(); ?>img/watch/motar.webp" alt="Vans">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                            <p class="card-text">
                                $21.04 </p>
                            <a href="#" class="btn btn-outline-dark mt-3 button-add-to-cart"><i
                                    class="fal fa-shopping-cart"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 product-card">
                    <div class="card pt-2 text-center">
                        <a href="#">
                            <img class="card-img" src="<?php echo base_url(); ?>img/watch/motar.webp" alt="Vans">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                            <p class="card-text">
                                $21.04 </p>
                            <a href="#" class="btn btn-outline-dark mt-3 button-add-to-cart"><i
                                    class="fal fa-shopping-cart"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 product-card">
                    <div class="card pt-2 text-center">
                        <a href="#">
                            <img class="card-img" src="<?php echo base_url(); ?>img/watch/motar.webp" alt="Vans">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                            <p class="card-text">
                                $21.04 </p>
                            <a href="#" class="btn btn-outline-dark mt-3 button-add-to-cart"><i
                                    class="fal fa-shopping-cart"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="our-product">
        <div class="our-product-title mb-5 text-center" style="width: 100%;">
            <h2>
                WOMAN'S BEST SELLERS
            </h2>
            <a href="#">
                MORE <i class="fal fa-long-arrow-right"></i>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 product-card">
                    <div class="card pt-2 text-center">
                        <a href="#">
                            <img class="card-img" src="<?php echo base_url(); ?>img/watch/charm.webp" alt="Vans">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                            <p class="card-text">
                                $21.04 </p>
                            <a href="#" class="btn btn-outline-dark mt-3 button-add-to-cart"><i
                                    class="fal fa-shopping-cart"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 product-card">
                    <div class="card pt-2 text-center">
                        <a href="#">
                            <img class="card-img" src="<?php echo base_url(); ?>img/watch/charm.webp" alt="Vans">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                            <p class="card-text">
                                $21.04 </p>
                            <a href="#" class="btn btn-outline-dark mt-3 button-add-to-cart"><i
                                    class="fal fa-shopping-cart"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 product-card">
                    <div class="card pt-2 text-center">
                        <a href="#">
                            <img class="card-img" src="<?php echo base_url(); ?>img/watch/charm.webp" alt="Vans">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                            <p class="card-text">
                                $21.04 </p>
                            <a href="#" class="btn btn-outline-dark mt-3 button-add-to-cart"><i
                                    class="fal fa-shopping-cart"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 product-card">
                    <div class="card pt-2 text-center">
                        <a href="#">
                            <img class="card-img" src="<?php echo base_url(); ?>img/watch/charm.webp" alt="Vans">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                            <p class="card-text">
                                $21.04 </p>
                            <a href="#" class="btn btn-outline-dark mt-3 button-add-to-cart"><i
                                    class="fal fa-shopping-cart"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="letter-signup-sec">
        <div class="letter-box">
            <div class="letter-content">
                <span class="letter-title">BE THE FIRST</span>
                <div class="letter-sub-title">
                    <span>Get the latest news, invites and offers straight to your mail.</span>
                </div>
                <form class="signup-form">
                    <label class="signup-form-label">Email address</label>
                    <input name="email" type="email" aria-la bel="email" class="signup-input" value=""
                        oninput="textDidchange()">
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
                <a href="https://www.facebook.com/" title="Facebook" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/" title="Instagram" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://youtube.com/" title="Youtube" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://twitter.com/" title="Twitter" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.pinterest.com/" title="Pinterest" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-pinterest-p"></i>
                </a>
                </button>
                <a href="https://www.snapchat.com/" title="snapchat" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-snapchat-ghost"></i>
                </a>
            </div>
        </div>
    </div>

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
    </footer>

    <!-- -------------------------------------------------------------------- -->
    <!-- script -->
    <!-- -------------------------------------------------------------------- -->
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Script for get Fontawesome pro version -->
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>vendors/js/bootstrap.js"></script>
     <!-- custom script -->
     <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

</body>

</html>