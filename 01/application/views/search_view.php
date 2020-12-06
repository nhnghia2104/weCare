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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/queries.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/sb-admin-2.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/pagination/pagination.css">

    <!-- <a href='https://www.symptoma.ro/'>Căutare de date paraclinice</a> -->
    <!-- <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=6d96b85bae8cf8afc4d08c421f9acce4f249edbf'></script>
    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/759611/t/1"></script> -->

</head>

<body>
    <div class="custom-font-4">
        <!-- <div class="overlay"></div> -->
        <nav class="navbar fixed-top navbar-expand-md topbar navbar-light shadow" id="navi-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-top" aria-controls="menu-top" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="home">
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
                        <li class="nav-item">
                            <a class="nav-link disabled btn-search home-navbar-button">Search &nbsp<i class="fal fa-search"></i></a>
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
    </div>

    <!-- mini cart -->
    <div id="miniCart" class="sideCart">
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




    <!-- fade background -->
    <div id="fadeBackground" class="fjXvoO"></div>
    <div style="height:70px"></div>

    <!-- Search -->
    <div class="min-vh-100 mb-5">
        <!-- search bar -->
        <div class="container s128 mt-3">
            <div class="row justify-content-center">
                <div class="form">
                    <div class="inner-form">
                        <div class="row">
                            <div class="col-8 offset-2 p-0 text-center">
                                <div class="input-field first" id="first">
                                    <input class="input isFocus border-bottom rounded-0" id="inputFocus" type="text" placeholder="Search" style="background-color: #fff;" />
                                    <button class="clear" id="clear">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end search bar -->

        <!-- search result -->
        <div class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2 p-0">
                        <div id="result" class="custom-font-6-bold text-info"></div>
                        <div hidden id="notFound" class="custom-font-1-bold text-info">Try searching for another term or go back to the <a href="home">home</a></div>
                    </div>
                </div>
                <div id="data-container" class="row mt-5"></div>
                <div id="pagination-container" class="d-flex justify-content-center"></div>
            </div>
        </div> <!-- end search result -->
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

    <script type="text/javascript" src="<?php echo base_url(); ?>js/base.js"></script>

    <script src="<?php echo base_url(); ?>vendors/pagination/pagination.min.js"></script>

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

    <script>
        goPagination();

        function goPagination() {
            $('#pagination-container').pagination({
                pageSize: 20,
                showPrevious: false,
                // showPageNumbers: false,
                showNext: false,
                className: 'paginationjs-theme-blue',
                dataSource: function(done) {
                    find = parseURLParams(window.location.search)
                    var key = find != null ? find.key[0] : '';
                    if (key == '') {
                        $.ajax({
                            type: 'GET',
                            url: 'shop/getProductActive_ajax',
                            dataType: 'json',
                            success: function(response) {
                                // console.log(defaultSorted);
                                done(response);
                            }
                        });
                    } else {
                        $("#inputFocus").val(key);
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>index.php/search/searchActiveProduct',
                            dataType: 'json',
                            data: {
                                key: key.toLowerCase()
                            },
                            success: function(response) {
                                if (response.length > 0) {
                                    found(response.length, key);
                                    done(response);
                                } else {
                                    notFound(key)
                                }

                            }
                        });
                    }

                },
                callback: function(data, pagination) {
                    // template method of yourself
                    var html = template(data);
                    $('#data-container').html(html);
                }
            })
        }


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
        $('#inputFocus').focus();
        $("#inputFocus").on('keyup', function(e) {
            if (e.key === 'Enter' || e.keyCode === 13) {
                window.location.href = "<?php echo base_url(); ?>index.php/search?key=" + $('#inputFocus').val();
            }
        });

        $('#search_btn').on('click', function() {
            // alert('ngon');
            window.location.href = "<?php echo base_url(); ?>index.php/search?key=" + $('#inputFocus').val();
        })

        function notFound(key) {
            $('#data-container').attr('hidden', 'hidden');
            $('#pagination-container').attr('hidden', 'hidden');
            $('#notFound').removeAttr('hidden');

            $('#result').html("Sorry we couldn't find any matches for '" + key + "'");
        }

        function found(num, key) {
            $('#result').html("Total " + num + " results for '" + key + "'");
        }
        var btnDelete = document.getElementById("clear");
        btnDelete.addEventListener("click", function(e) {
            e.preventDefault();
            inputFocus.value = "";
        });
    </script>

</body>

</html>