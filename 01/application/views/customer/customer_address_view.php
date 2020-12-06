<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>TNTM</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/img/svg/shortcuticon.svg" />
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
    <!-- Custom style for this page -->
    <link href="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- <a href='https://www.symptoma.ro/'>Căutare de date paraclinice</a> -->
    <!-- <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=6d96b85bae8cf8afc4d08c421f9acce4f249edbf'></script>
    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/759611/t/1"></script> -->
    <style>
        .paginate_button {
            border-radius: 0px !important;
        }
    </style>
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

    <!-- Main content here -->
    <div class="bg-white mt-5">
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
                    <div class="container custom-font-1 pl-0 pr-0">
                        <div class="row">
                            <div class="col-12">
                                <p class="custom-font-6 custom-font-weight-light">My shipping address</p>
                            </div>
                        </div>
                        <!-- main container -->
                        <div class="row shipping_adress">
                            <div class="">
                                <!-- <div class="col-12 col-md-6">
                                    <div class="card custom-font-4">
                                        <div class="card-body">
                                            <h5 class="card-title custom-font-1-bold text-uppercase ship_name">
                                                Nguyen Huu Nghia
                                            </h5>
                                            <p class="card-text ship_address">Address:</p>
                                            <p class="card-text ship_phone">Phone:</p>
                                            <p class="card-text ship_phone">Email:</p>
                                            <div class="row m-0" data-index="">
                                                <a href="#" class="btn btn-light btn-sm rounded-0 mr-2">Edit</a>
                                                <a href="#" class="btn btn-light btn-sm rounded-0 mr-2">Remove</a>
                                            </div>
                                        </div>

                                    </div>
                                </div> -->
                            </div> <!-- end shipping_address -->
                        </div>
                        <!-- end row -->
                        <div class="row custom-font-4 p-3">
                            <a class="text-primary addnew_ col-12 text-center pt-2 pb-2 border border-info border-shit" href="#"><i class="fal fa-map-marker-alt"></i> Add a new address</a>
                        </div>
                    </div>
                    <!-- end main container -->

                    <!-- container for add new address -->
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="custom-font-4 addnew_form" data-index="-1" hidden>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end container for add new address -->

                    <div class="border-bottom target-bot"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------------------------------------------------------- -->
    <!-- script -->
    <!-- -------------------------------------------------------------------- -->
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <!-- Script for get Fontawesome pro version -->
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap/js/bootstrap.js"></script>
    <!-- custom script -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/shop.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/user.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/base.js"></script>

    <!-- Page level plugins -->
    <!-- https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js -->
    <script src="<?php echo base_url(); ?>vendors/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        $('.alert').hide();
        href = '';
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
                            userProfile = dataReturned[0];
                            console.log(userProfile);
                            displayDefaultAddress(dataReturned[0]);
                            displayInfoUser(dataReturned[0]);

                            $('.info_name').html('<b>' + userProfile.firstName + ' ' + userProfile.lastName + '</b>');
                            $('.info_avt img').attr('src', userProfile.avatar);

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
            output = '<a class="dropdown-item custom-font-4" href="<?php echo base_url(); ?>index.php/shop">All Category</a>';
            for (i = 0; i < info.length; i++) {
                output += '<div class="dropdown-divider"></div>' +
                    '<a class="dropdown-item custom-font-4" data-id="' + info[i].ID + '" href="<?php echo base_url(); ?>index.php/shop?src=' + info[i].DisplayName + '">' + info[i].DisplayName + '</a>'
            }
            $('#dropdownCategory').html(output);
        }
    </script>

    <!-- display Profile -->
    <script>

    </script>

    <script>
        $('.addnew_form').load('<?php echo base_url(); ?>/html/address_form.html');
        $('.addnew_').click(function() {
            $('.addnew_form').removeAttr('hidden');
            $('.title_form').html('Add a new address');
            $([document.documentElement, document.body]).animate({
                scrollTop: $(".target-bot").offset().top
            }, 0);
            indexSelect = -1;

            $('#info-email').val('');
            $('#info-firstName').val('');
            $('#info-lastName').val('');
            $('#info-phone').val('');
            $('#info-city').val('');
            $('#info-address').val('');
        })

        function displayDefaultAddress(info) {
            // console.log(info);
            if (info.shipping_address == '') {
                addressProfile = '';
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
                output += '<div class="col-12 col-md-6"><div><div id="card_' + i + '" class="card custom-font-4 mb-4"><div class="card-body"><h5 class="card-title custom-font-1-bold text-uppercase ship_name">' +
                    array[i].firstName + ' ' + array[i].lastName + '</h5><p class="card-text ship_address">Address: ' +
                    array[i].address + ', ' + array[i].city +
                    '</p><p class="card-text ship_phone">Phone: ' +
                    array[i].phone + '</p><p class="card-text ship_phone">Email: ' + array[i].email + '</p><div class="row m-0 ngon" data-index="' +
                    i + '">' +
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

            $('#card_' + defaultvl).find('.btn_remove').remove();
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
            $('.title_form').html('Update address');
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

                if (addressProfile == '') { // do not have address
                    addressProfile = {
                        array: [newList],
                        default: 0
                    }
                } else {
                    if (isDefault) {
                        addressProfile.default = addressProfile.array.length;
                    }
                    addressProfile.array.push(newList);
                }

            }
            console.log(addressProfile);
            saveShipping_Address(addressProfile);
            location.reload();

        })
    </script>
    <!-- load search  -->
    <script>
        $('#place-search').load('<?php echo base_url(); ?>html/search_bar.html');
    </script>

</body>

</html>