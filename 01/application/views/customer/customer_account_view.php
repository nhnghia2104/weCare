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
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/sb-admin-2.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    <!-- Custom style for this page -->
    <link href="<?php echo base_url(); ?>vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
    <div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="">
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
                    <div class="alert alert-success rounded-0 custom-font-4 fade show" role="alert">
                        Your account have been updated !
                    </div>
                    <div class="alert alert-danger rounded-0 custom-font-4 fade show" role="alert">
                        A simple danger alert—check it out!
                    </div>
                    <p class="custom-font-6 custom-font-weight-light">My Account</p>

                    <div class="card bg-white rounded-0">
                        <div class="card-body custom-font-4 pl-5 pr-5 pt-4">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">First Name</label>
                                <input id="info-firstName" type="text" class="form-control rounded-0 col-sm-9" placeholder="First Name" />
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Last Name</label>
                                <input id="info-lastName" type="text" class="form-control rounded-0 col-sm-9" placeholder="Last Name" />
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <input id="info-email" type="text" class="form-control col-sm-9 rounded-0" placeholder="Email" />
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Phone number</label>
                                <input id="info-phone" type="text" class="form-control col-sm-9 rounded-0" placeholder="Phone number" />
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9 p-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="info_male" value="option1" checked>
                                        <label class="form-check-label" for="info_male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="info_female" value="option2">
                                        <label class="form-check-label" for="info_female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="info_birthday" class="col-sm-3 col-form-label">Birthday</label>
                                <input id="info_birthday" class="form-control rounded-0 col-sm-9 js-date--west" type="text" placeholder="DD/MM/YYYY">
                            </div>

                            <div class="form-group row">
                                <div class="form-check col-sm-9 offset-sm-3">
                                    <input class="form-check-input " type="checkbox" name="exampleRadios" id="changePassword" value="option1">
                                    <label class="form-check-label" for="changePassword">
                                        Change Password
                                    </label>
                                </div>
                            </div>

                            <div hidden class="change_passwork_div">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Current password</label>
                                    <input id="info-currpass" type="password" class="form-control rounded-0 col-sm-9" placeholder="Current password" />
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">New password</label>
                                    <input id="info-newpass" type="password" class="form-control rounded-0 col-sm-9" placeholder="New password" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-3 p-0">
                                    <button class="btn btn-info btn-sm rounded-0 pl-5 pr-5 update_profile">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-lg custom-font-1" role="document">
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/customer/account/updateAvatar">
                <input hidden type="text" name="id" id="user_id">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalCenterTitle">Update avatar
                        </h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <!-- Input Image -->
                            <div class="form-group">
                                <div class="col-12">
                                    <!-- Upload image input-->
                                    <div class="input-group mb-3 px-2 py-2 rounded-0 bg-white border">
                                        <input name="product-image" id="upload" type="file" accept="image/*" onchange="readURL(this);" class="form-control rounded-0">
                                        <label id="upload-label" for="upload" class="font-weight-light text-muted rounded-0">Choose
                                            file</label>
                                        <div class="input-group-append">
                                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4">
                                                <i class="fal fa-cloud-upload mr-2 text-muted"></i>
                                                <small class="text-uppercase font-weight-normal text-muted">Upload</small>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Uploaded image area-->
                                    <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                                    </div>
                                </div>
                            </div> <!-- end input image -->
                        </div><!-- /.container -->
                    </div>
                    <!-- end modal body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary pl-3 pr-3 rounded-0" data-dismiss="modal">Close</button>
                        <input class="btn btn-sm btn-info rounded-0 pl-3 pr-3" type="submit" value="Update">
                    </div>
                </div> <!-- end modal content -->
            </form><!-- end form -->
        </div>

    </div> <!-- end modal -->

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
        // set default
        $('#place_sideBar').load('<?php echo base_url(); ?>/html/sideBar_customer.html');
        $('.alert').hide();

        href = '';
        dataForUse = '';
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
                            dataForUse = dataReturned[0];
                            displayProfile(dataReturned[0]);
                            displayInfoUser(dataReturned[0]);
                            console.log(dataReturned[0]);

                            $('.info_name').html('<b>' + dataForUse.firstName + ' ' + dataForUse.lastName + '</b>');
                            $('.info_avt img').attr('src', dataForUse.avatar);

                        }
                    }
                });
            }
        }



        function displayProfile(data) {
            $('#info-firstName').val(data.firstName);
            $('#info-lastName').val(data.lastName);
            $('#info-email').val(data.email);
            $('#info-phone').val(data.phone);
            $('#user_id').val(data.id);

            birthday = new Date().setTime(data.birthday);
            $('#info_birthday').val(dateFormatShort(birthday));

            gender = data.gender;
            gender == 0 ? $('#info_male').prop('checked', true) : $('#info_female').prop('checked', true);
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
        $('#changePassword').click(function() {
            $('#changePassword').is(':checked') ? $('.change_passwork_div').removeAttr('hidden') : $('.change_passwork_div').attr('hidden', 'hidden');
        })

        $('.update_profile').click(function() {

            birthdayVL = $('#info_birthday').val();
            var dateParts = birthdayVL.split("/");
            var dateObject = new Date(+dateParts[2], dateParts[1] - 1, +dateParts[0]);
            birthday = (new Date(dateObject).getTime());

            firstName = $('#info-firstName').val();
            lastName = $('#info-lastName').val();
            email = $('#info-email').val();
            phone = $('#info-phone').val();
            gender = $('#info_male').is(':checked') ? 0 : 1;

            $('.info_name').html('<b>' + firstName + ' ' + lastName + '</b>');

            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/customer/account/updateCustomer',
                dataType: 'json',
                data: {
                    id: loadToken().customer_id,
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    phone: phone,
                    gender: gender,
                    birthday: birthday,
                },
                success: function(dataReturned) {
                    if (dataReturned.status == 'success') {
                        $('.alert-success').html('Your account have been updated !');
                        $('.alert-success').slideDown();
                        setTimeout(function() {
                            $('.alert-success').slideUp();
                        }, 3000);
                    }

                    console.log(dataReturned);
                }
            });

            if ($('#changePassword').is(':checked')) {
                updatePassword();
            }
        })

        function updatePassword() {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/admin/usermanage/updatePassword',
                dataType: 'json',
                data: {
                    id: loadToken().customer_id,
                    password: $('#info-currpass').val(),
                    newPass: $('#info-newpass').val()
                },
                success: function(dataReturned) {


                    if (dataReturned.status == 'success') {
                        $('#info-currpass').val('');
                        $('#info-newpass').val('')
                        $('#changePassword').trigger('click');
                    } else {
                        $('.alert-danger').html('Update password failed !');
                        $('.alert-danger').slideDown();
                        setTimeout(function() {
                            $('.alert-danger').slideUp();
                        }, 5000);
                    }
                    console.log(dataReturned);
                }
            });
        }
    </script>

    <script>
        $('.js-date--west').mask('00/00/0000');
    </script>

    <script>
        $('.info_avt').click(function() {
            $('#exampleModalCenter').modal('show');
        })

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function() {
            $('#upload').on('change', function() {
                readURL(input);
            });
        });

        /*  ==========================================
            SHOW UPLOADED IMAGE NAME
        * ========================================== */
        var input = document.getElementById('upload');
        var infoArea = document.getElementById('upload-label');

        input.addEventListener('change', showFileName);

        function showFileName(event) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = fileName;
        }
    </script>
    <!-- load search  -->
    <script>
        $('#place-search').load('<?php echo base_url(); ?>html/search_bar.html');
    </script>

</body>

</html>