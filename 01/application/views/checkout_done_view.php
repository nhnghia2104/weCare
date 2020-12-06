<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Elite</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/img/svg/shortcuticon.svg" />
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
                                <li class="completed">
                                    <span class="bubble"></span>
                                    Sign in
                                </li>
                                <li class="completed">
                                    <span class="bubble"></span>
                                    Shipping & Payment
                                </li>
                                <li class="completed">
                                    <span class="bubble"></span>
                                    Place Order
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="mainBody" class="row justify-content-center text-center">
                    <div class="col-12">
                        <h1>Order Successfully</h1>
                        <h6 class="custom-font-1-bold mb-0">Your Order Has Been Placed With ID: <a id="order-id" href=""></a>
                        </h6>
                        <div class="row mt-2 justify-content-center text-center">
                            <a href="<?php echo base_url(); ?>index.php/shop" class="btn btn-warning rounded-0 m-3">Continue Buying</a>
                            <a id="tracking" href="#" class="btn btn-warning rounded-0 m-3">Tracking Order</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="border-bottom mt-5"></div>
        </div>
    </div>
    </div>
    </div>

    <!-- Modal error -->
    <div id="modalError" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Error</h5>
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
        var id = parseURLParams(window.location.search).id[0];
        $('#order-id').html(id);
        $('#order-id').attr('href', '<?php echo base_url(); ?>index.php/customer/order/view?id=' + id);
        $('#tracking').attr('href', '<?php echo base_url(); ?>index.php/customer/order/tracking?id=' + id);
    </script>
</body>

</html>