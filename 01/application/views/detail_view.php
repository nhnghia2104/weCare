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
    <div class="custom-font-1">
        <!-- <div class="overlay"></div> -->
        <nav class="navbar fixed-top navbar-expand-md topbar bg-dark navbar-dark" id="navi-top">
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

    <!-- main content -->

    <div class="d-flex">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6">
                    <img class="d-block mt-auto mb-auto ml-auto mr-auto" src="<?php echo $dataProduct[0]['Image']; ?>"
                        alt="">
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
                                        <div class="d-flex float-right justify-content-center align-items-center">
                                            <?php if ($dataProduct[0]['discount'] > 0) {
                                                echo "<h4 class='custom-font-2 custom-font-weight-light text-dec-line text-right text-uppercase'>$";
                                                echo $dataProduct[0]['Price'];
                                                echo "</h4>";
                                            } ?>
                                            <h4 class="custom-font-5 text-right text-uppercase">
                                                &nbsp;$<?php echo $dataProduct[0]['Price'] * (1-$dataProduct[0]['discount']); ?>
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
                            <p id="starReview" class="text-warning"></p>
                            <a id="numReview" class="ml-1" href="#"></a>
                        </div>
                        <!-- end star -->

                        <!-- button add to cart -->
                        <button type="button"
                            class="add-to-cart btn btn-dark rounded-0 text-uppercase w-100 justify-content-center align-items-center"
                            data-id="<?php echo $dataProduct[0]['ID'] ?>"
                            data-name="<?php echo $dataProduct[0]['Name'] ?>"
                            data-price="<?php echo $dataProduct[0]['Price'] ?>"
                            data-image="<?php echo $dataProduct[0]['Image'] ?>"
                            data-discount="<?php echo $dataProduct[0]['discount'] ?>"
                            style="height:50px">
                            <i class="fal fa-shopping-cart"></i>
                            &nbsp;Add to cart
                        </button>
                        <!-- end add cart button -->

                        <!-- free ship info -->
                        <div class="reviews mt-4">
                            <p><i class="fas fa-square-full"></i>&nbsp;&nbsp;Free return</p>
                            <p><i class="fas fa-square-full"></i>&nbsp;&nbsp;Free ship for all</p>
                        </div>
                    </section>
                </div>
            </div>
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

    function displayStar(data) {
        var count = data[0]['count'];
        var sum = data[0]['sum'];
        var point = sum / count;
        if (count != 0) {
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
            $("#starReview").html(htmlOut);
            $("#numReview").html("(" + count + (count > 1 ? " Reviews" : " Review") + ")");
        }

    }
    loadReviewStar();
    </script>

</body>

</html>