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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed" rel="stylesheet">
    <!-- -------------------------------------------------------------------------------------------- -->
    <!-- Style -->
    <!-- --------------------------------------------------------------------------- -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/queries.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/bootstrap/css/bootstrap.css">
    
    <!-- -------------------------------------------------------------------- -->
    <!-- script -->
    <!-- -------------------------------------------------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>
</head>

<body>
    <div class="sign-in-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-5 pt-5 pl-5 pr-5 pb-5 sign-in-container">
                    <h1>Sign in</h1>
                    <form>
                        <div class="form-group mt-5">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="OcChoMinh@domain.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="at least 8 characters">
                        </div>
                        <div class="form-group">
                            <a href="#">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 mb-3" style="width:100%;">Login</button>
                        <div class="form-group">
                            <label>Don't have an account?</label>
                            <a href="#">Create new</a>
                        </div>
                    </form>

                    <!-- <div class="col-lg-6 col-md-0 sign-in-background"> -->
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!--  end sign-in-form -->
</body>
</html>