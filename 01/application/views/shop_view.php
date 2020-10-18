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
    <div class="top custom-font-1"
        style="height: 50vh !important ;background-image: linear-gradient(207.49deg, #333333 6.27%, rgba(196, 196, 196, 0) 81.14%), url(<?php echo base_url();?>img/background4.jpg);">
        <!-- <div class="overlay"></div> -->
        <nav class="navbar fixed-top navbar-expand-md topbar navbar-dark" id="navi-top">
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
                            <a class="nav-link home-navbar-button" href="#">Elite's shop</a>
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
                            <a class="nav-link  home-navbar-button" href="signin">Sign in &nbsp<i
                                    class="fal fa-user"></i></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link  home-navbar-button" onclick="openNav()">
                                Your cart &nbsp<i class="fal fa-shopping-cart"></i>
                                <span
                                    class="total-count badge badge-success badge-counter align-middle rounded-circle">0</span>
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
                <div class="row justify-content-center align-items-center p-0">
                    <div class="border-bottom border-dark"></div>
                    <!-- cart footer -->
                    <div class="col-10 mt-3 mb-3 p-0">Total Price:</div>
                    <div class="col-2 text-right p-0">
                        <span class="total-cart align-middle">99*</span>
                    </div>

                    <a href="<?php echo base_url(); ?>index.php/checkout" id="btn-checkout" type="button"
                        class="col-12 btn btn-dark rounded-0" style="height:50px">Checkout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- fade background -->
    <div id="fadeBackground" class="fjXvoO"></div>

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

    <!-- filter -->
    <div class="dropdown mt-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <div class="dropdown">
                        <button class="btn bg-white dropdown-toggle rounded-0" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Most popular
                        </button>
                        <div class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton">
                            <a id="dropdown-0" class="dropdown-item" onclick="sortData('0')">Newest</a>
                            <a id="dropdown-1" class="dropdown-item" onclick="sortData('1')">Most popular</a>
                            <a id="dropdown-2" class="dropdown-item" onclick="sortData('2')">Highest price</a>
                            <a id="dropdown-3" class="dropdown-item" onclick="sortData('3')">Lowest price</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end filter -->

    <!-- product content -->
    <div class="our-product">
        <div class="container">
            <div class="row">
                <?php foreach ($product as $key => $value): ?>
                <div class="col-6 col-md-6 col-lg-3 mb-3 product-card">
                    <div class="card text-center">
                        <a class="go-to-detail-product" id="link-<?= $key ?>">
                            <img class="lazy img-responsive card-img p-3" src="">
                        </a>
                        <div class="card-body">
                            <h5 id="style-<?= $key ?>"
                                class="card-text text-uppercase custom-font-weight-light custom-font-3 text-black-50 mb-1">
                                style</h5>
                            <h4 id="name-<?= $key ?>" class="card-title mb-2"></h4>
                            <div class="row justify-content-center align-items-center">
                                <p id="sale-price-<?= $key ?>" class="m-0 custom-font-weight-bold"></p>
                                <h5 id="sale-discount-<?= $key ?>"
                                    class="mb-0 text-black-50 custom-font-3 custom-font-weight-light"></h5>
                            </div>
                            <h5 id="original-price-<?= $key ?>"
                                class="mb-0 custom-font-3 custom-font-weight-light text-dec-line">
                            </h5>
                        </div>
                        <a id="data-add-to-cart-<?= $key ?>" class="add-to-cart mt-3 rounded-0 button-add-to-cart">
                            <i class="fal fa-shopping-cart"></i> Add to Cart
                        </a>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- end product content -->

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
                <!-- Link facebook -->
                <a href="https://www.facebook.com/" title="Facebook" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!-- Link instagram -->
                <a href="https://www.instagram.com/" title="Instagram" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-instagram"></i>
                </a>
                <!-- Link Youtube -->
                <a href="https://youtube.com/" title="Youtube" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-youtube"></i>
                </a>
                <!-- Link Twitter -->
                <a href="https://twitter.com/" title="Twitter" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-twitter"></i>
                </a>
                <!-- Link pinterest -->
                <a href="https://www.pinterest.com/" title="Pinterest" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-pinterest-p"></i>
                </a>
                <!-- Link snapchat -->
                <a href="https://www.snapchat.com/" title="snapchat" target="_blank" rel="noopener noreferrer"
                    class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
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

    <!-- lazy load -->
    <script>
    $(function() {
        $('.lazy').lazy();
    });
    </script>

    <script>
    // sort data
    function sortData(value) {
        // console.log($('#dropdown-select').val());
        $('#dropdownMenuButton').html($('#dropdown-' + value).html())
        var array = <?php echo json_encode($product) ?>;
        switch (value) {
            case '0': // New
                array = array.reverse();
                break;
            case '1': // Most popular
                array = array.sort((a, b) => b.view - a.view);
                break;

            case '2': // Highest Price
                array = array.sort((a, b) => b.Price - a.Price);
                break;
            case '3': // Lowest Price
                array = array.sort((a, b) => a.Price - b.Price);
                break;
        }
        console.log(array);
        // array = array.sort((a, b) => a.Price - b.Price);
        for (let index = 0; index < array.length; index++) {
            const element = array[index];
            const salePrice = Math.round((parseFloat(element.Price) * (1 - parseFloat(element.discount))) / 100) * 100;

            $('#name-' + index).html(element.Name);
            $('#link-' + index).attr("data-id", element.ID);
            $('#link-' + index).attr("href", "<?php echo base_url(); ?>index.php/shop/detail/" + element.ID);
            $('#link-' + index).html("<img class='lazy img-responsive card-img p-3' src='" + element.Image + "'>");

            $('#data-add-to-cart-' + index).attr('data-id', element.ID);
            $('#data-add-to-cart-' + index).attr('data-name', element.Name);
            $('#data-add-to-cart-' + index).attr('data-image', element.Image);
            $('#data-add-to-cart-' + index).attr('data-price', element.Price);
            $('#data-add-to-cart-' + index).attr('data-discount', element.discount);

            if (parseFloat(element.discount) > 0) {

                $('#sale-price-' + index).html("$" + salePrice + "&nbsp;");
                $('#original-price-' + index).html("$" + element.Price);
            } else {
                $('#sale-price-' + index).html("$" + element.Price);
                $('#original-price-' + index).html("");
            }
        }
    }
    </script>

    <script>
    // console.log($('#dropdown-select').val());
    var array = <?php echo json_encode($product) ?>;
    // default : most popular
    array = array.sort((a, b) => b.view - a.view);
    // console.log(array);
    // array = array.sort((a, b) => a.Price - b.Price);
    for (let index = 0; index < array.length; index++) {
        const element = array[index];
        const salePrice = Math.round(((parseFloat(element.Price) * (1 - parseFloat(element.discount))) / 100) * 100);

        $('#style-' + index).html(element.style);
        $('#name-' + index).html(element.Name);
        $('#link-' + index).attr("data-id", element.ID);
        $('#link-' + index).attr("href", "<?php echo base_url(); ?>index.php/shop/detail/" + element.ID);
        $('#link-' + index).html("<img class='lazy img-responsive card-img p-3' data-src='" + element.Image + "'>");


        $('#data-add-to-cart-' + index).attr('data-id', element.ID);
        $('#data-add-to-cart-' + index).attr('data-name', element.Name);
        $('#data-add-to-cart-' + index).attr('data-image', element.Image);
        $('#data-add-to-cart-' + index).attr('data-price', element.Price);
        $('#data-add-to-cart-' + index).attr('data-discount', element.discount);

        if (parseFloat(element.discount) > 0) {
            $('#sale-discount-' + index).html("-" + element.discount * 100 + "%");
            $('#sale-price-' + index).html("$" + salePrice + "&nbsp;");
            $('#original-price-' + index).html("$" + element.Price);
        } else {
            $('#sale-price-' + index).html("$" + element.Price);
        }
    }
    </script>

</body>

</html>