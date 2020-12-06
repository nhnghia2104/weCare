<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>TNTM</title>
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
    <!-- <a href='https://www.symptoma.ro/'>Căutare de date paraclinice</a> -->
    <!-- <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=6d96b85bae8cf8afc4d08c421f9acce4f249edbf'></script>
    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/759611/t/1"></script> -->

</head>

<body>

    <div id="place-search">

    </div>

    <div class="top custom-font-4" style="background-image: url(<?php echo base_url(); ?>img/pet.png);">
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
                            <a class="nav-link  home-navbar-button" href="<?php echo base_url(); ?>index.php/welcome">About us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link  home-navbar-button" href="welcome">Contact us</a>
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

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 text-left custom-font-5 mt-5 text-info">
                        <h1 class="custom-font-6-bold">A house is not a home without a pet</h1>
                        <p class="custom-font-1">
                            They are not our whole life, but they make our lives whole.
                        </p>
                        <div class="row p-0 m-0">
                            <a href="#" class="btn btn-pink border-0 rounded-pill mr-3">About us</a>
                            <a href="#" class="btn btn-pink border-0 rounded-pill">Contact us</a>
                        </div>

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

    <!-- top popular -->
    <div class="bg-gray-100 pt-3 pb-3 mb-4">
        <div class="container">
            <div class="row text-left">
                <div class="col-12">
                    <p class="custom-font-6-bold text-info mb-0">Our Top Seller</p>
                    <a href="shop">
                        <p class="custom-font-4 mb-0 text-info">Shop now <i class="fal fa-long-arrow-right"></i></p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row data-popular">

        </div>
    </div>

    <!-- saling -->
    <div class="container-saling">
        <div class="bg-gray-100 pt-3 pb-3 mb-4">
            <div class="container">
                <div class="row text-left">
                    <div class="col-12">
                        <p class="custom-font-6-bold text-info mb-0">On Saling</p>
                        <a href="shop/sale">
                            <p class="custom-font-4 mb-0 text-info">Shop now <i class="fal fa-long-arrow-right"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row data-saling">

            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-6 text-center">
                <!-- <div style="hei"></div> -->
                <img class="card-avt border rounded-circle" width="400px" height="400px" src="<?php echo base_url(); ?>img/Webp.net-resizeimage.jpg" alt="">
            </div>
            <div class="col-12 col-md-6 text-center">
                <img class="card-avt border rounded-circle" width="400px" height="400px" src="<?php echo base_url(); ?>img/pexels-photo-38867.jpeg" alt="">
            </div>
        </div>
        <div class="row text-center mb-5 mt-5">
            <div class="col-12 custom-font-6-bold">
                <a href="#" class="btn btn-explore border-0 rounded-pill mr-3">Explore Our Collection</a>
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
                    <input name="email" type="email" aria-la bel="email" class="signup-input" value="" oninput="textDidchange()">
                    <span class="input-warning"></span>
                    <button class="signup-button" type="button" disabled="disabled" action="insertEmail">
                        <span class="signup-span">Subscribe</span>
                    </button>
                </form>
                <div class="form-bottom-privacy">
                    <span>Click <a href="#zxc" title="Privacy Policy">here</a> to read information on how TNTM
                        processes your personal data.</span>
                </div>
            </div>
            <div class="letter-footer">
                <a href="https://www.facebook.com/" title="Facebook" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/" title="Instagram" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://youtube.com/" title="Youtube" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://twitter.com/" title="Twitter" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.pinterest.com/" title="Pinterest" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-pinterest-p"></i>
                </a>
                </button>
                <a href="https://www.snapchat.com/" title="snapchat" target="_blank" rel="noopener noreferrer" class="socialIcons__SocialLink-sc-1cs9t32-0 hmxtUr">
                    <i class="fab fa-snapchat-ghost"></i>
                </a>
            </div>
        </div>
    </div>

    <div>
        <div class="GoToTopButton-Container cnWqIH">
            <button class="GoToTopButton-Button dfMNN">
                <i class="far fa-arrow-up"></i>
            </button>
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
                <div class="modal-footer">Don't have an account? <a href="<?php echo base_url(); ?>index.php/signup">Create one</a></div>
            </div>
        </div>
    </div>

    <!-- -------------------------------------------------------------------- -->
    <!-- script -->
    <!-- -------------------------------------------------------------------- -->
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Script for get Fontawesome pro version -->
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap/js/bootstrap.js"></script>
    <!-- custom script -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/shop.js"></script>


    <script type="text/javascript" src="<?php echo base_url(); ?>js/user.js"></script>

    <script>
        // place search
        $('#place-search').load('<?php echo base_url(); ?>html/search_bar.html');
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
                            displayInfoUser(dataReturned[0]);
                        }
                    }
                });
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
        }
    </script>

    <!-- data product -->
    <script>
        // top seller
        $.ajax({
            type: "GET",
            url: '<?php echo base_url(); ?>index.php/admin/ProductManage/getTopPopularProductActive',
            dataType: 'json',
            success: function(response) {
                var html = template(response);
                $('.data-popular').html(html);
            }
        });

        // saling
        $.ajax({
            type: "GET",
            url: '<?php echo base_url(); ?>index.php/admin/ProductManage/getTopSalingProductActive',
            dataType: 'json',
            success: function(response) {
                if (response.length > 0) {
                    var html = template(response);
                    $('.data-saling').html(html);
                } else {
                    $('.container-saling').attr('hidden', 'hidden');
                }

            }
        });

        function template(data) {
            html = '';
            // data = sortData(data, defaultSorted);
            for (i = 0; i < data.length; i++) {
                const salePrice = Math.round(((data[i].Price * (1 - data[i].discount)) * 100)) / 100;
                html += '<div class="col-6 col-md-6 col-lg-3 mb-3 product-card">' +
                    '<div class="card text-center">' +
                    '<div ' + (data[i].discount > 0 ? '' : 'hidden') + ' class="position-absolute sale-tag" id="sale-tag-' + i + '">-' + data[i].discount * 100 + '%' + '</div>' +
                    '<a class="go-to-detail-product" id="link-' + i + '"' +
                    'href="<?php echo base_url(); ?>index.php/product/' + data[i].ID + '" ' +
                    'data-id="' + data[i].ID + '" ' +
                    '>' +
                    '<img class="img-responsive card-img card-img-custom p-3" src="' + data[i].Image + '"></a>' +
                    '<div class="card-body">' +
                    '<h5 id="style-' + i + '" class="card-text text-uppercase custom-font-weight-light custom-font-3 text-black-50 mb-1"></h5>' +
                    '<h4 id="name-' + i + '" class="card-title">' + data[i].Name + '</h4>' +
                    '<p id="sale-price-' + i + '" class="custom-font-weight-bold mb-0">' + (data[i].discount > 0 ? '$' + salePrice : '$' + data[i].Price) + '</p>' +
                    '<p id="original-price-' + i + '" class="custom-font-weight-light text-dec-line">' + (data[i].discount > 0 ? '$' + data[i].Price : '') + '</p>' +
                    '</div>' +
                    '<a id="data-add-to-cart-' + i + '" class="add-to-cart mt-3 rounded-0 button-add-to-cart"' +
                    'data-id="' + data[i].ID + '" ' +
                    'data-name="' + data[i].Name + '" ' +
                    'data-image="' + data[i].Image + '" ' +
                    'data-price="' + data[i].Price + '" ' +
                    'data-discount="' + data[i].discount + '" ' +
                    '>' +
                    '<i class="fal fa-shopping-cart"></i> Add to Cart' +
                    '</a>' +
                    '</div>' +
                    '</div>';
            }
            return html;
        }
    </script>

</body>

</html>