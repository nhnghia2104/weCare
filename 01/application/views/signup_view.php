<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/js/nghiaxcvxc.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/base.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }


        .root-sign-up {
            width: 100%;
            height: 100%;
            font-size: 12px;
        }


        .main-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }


        .main-container .main-content {
            text-align: center;
            white-space: nowrap;
            height: 100%;
            margin: auto;
            position: relative;
            -webkit-overflow-scrolling: touch;
        }

        .main-container .main-content::before {
            content: "";
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }

        .main-container .main-content .main-card {
            position: relative;
            border: none;
            text-align: initial;
            white-space: normal;
            display: inline-block;
            vertical-align: middle;
            min-width: 320px;
            max-width: 470px;
            width: 100%;
        }


        .main-container .main-content .main-card .main-card-content {
            background-color: #202020;
            padding: 28px 60px 10px;
            margin: 0 auto;
            width: 100%;
            z-index: 1;
        }


        .main-container .main-content .main-card .main-card-content .layout-vertical {
            display: flex;
            flex-direction: column;
            width: 100%;
            min-width: 300px;
        }


        .main-container .main-content .main-card .main-card-content .layout-vertical .logo-website-layout {
            display: flex;
            flex-direction: column;
            align-items: center;
        }


        .main-container .main-content .main-card .main-card-content .layout-vertical .logo-website-layout .logo-website {
            background: #cecece;
        }

        .main-container .main-content .main-card .main-card-content .layout-vertical .headtlt-root {
            margin: 0;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .main-container .main-content .main-card .main-card-content .layout-vertical .heading {
            margin-top: 30px;
        }

        .main-container .main-content .main-card .main-card-content .layout-vertical .headtlt-subtitle {
            color: #F4F4F4;
            font-size: 12px;
            font-weight: 500;
            line-height: 16px;
            letter-spacing: 0.5px;
        }


        .width-full {
            width: 100%;
        }


        .width-size {
            max-width: 380px;
            margin-left: auto !important;
            margin-right: auto !important;
        }


        .form-vertical {
            display: flex;
            flex-direction: column;
            min-width: 300px;
            width: 100%;
            margin: 0 auto;
        }

        .form-control-root {
            border: 0;
            margin: 0;
            display: inline-flex;
            padding: 0;
            position: relative;
            min-width: 0;
            border-radius: 4px;
            flex-direction: column;
            vertical-align: top;
            background-color: #2B2B2B;
        }


        .form-vertical .form-field,
        .form-vertical .submitBtn {
            margin-top: 15px;
            border-radius: 4px;
        }


        .input-root {
            position: relative;
        }

        .inputbase-root {
            color: #fff;
            cursor: text;
            display: inline-flex;
            position: relative;
            font-size: 14px;
            box-sizing: border-box;
            align-items: center;
            font-family: Brutal, sans-serif;
            font-weight: 400;
            line-height: 20px;
            border-radius: 4px;
        }


        .inputbase-input {
            font: inherit;
            color: #F4F4F4;
            width: 100%;
            border: 0;
            height: 50px;
            margin: 0;
            display: block;
            padding: 6px 0 7px;
            min-width: 0;
            background: none;
            box-sizing: content-box;
            padding-top: 0;
            padding-left: 14px;
            padding-right: 14px;
            letter-spacing: inherit;
            padding-bottom: 0;
            animation-duration: 10ms;
            -webkit-tap-highlight-color: transparent;
        }

        .form-width-full {
            width: 100%;
        }

        .input-adorment-root {
            height: 0.01em;
            display: flex;
            max-height: 2em;
            align-items: center;
            white-space: nowrap;
        }

        .input-position-end {
            height: 50px;
            display: inline-block;
            max-height: 50px;
            line-height: 50px;
            margin-left: 8px;
            white-space: nowrap;
            margin-right: 8px;
        }

        .validation-adornment {
            white-space: nowrap;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
        }

        .upper {
            text-transform: uppercase;
        }


        .name-fields {
            display: flex;
            justify-content: space-between;
        }

        .form-vertical .name-fields .first-name-field,
        .form-vertical .name-fields .last-name-field {
            flex-grow: 1;
        }

        .spacer {
            max-height: 20px;
            max-width: 20px;
        }



        .buttonbase-root {
            color: inherit;
            border: 0;
            cursor: pointer;
            margin: 0;
            display: inline-flex;
            outline: 0;
            padding: 0;
            position: relative;
            align-items: center;
            user-select: none;
            border-radius: 4px;
            vertical-align: middle;
            -moz-appearance: none;
            justify-content: center;
            text-decoration: none;
            background-color: transparent;
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent;
        }

        .button-icon-root {
            flex: 0 0 auto;
            color: #e6e6e6;
            padding: 12px;
            overflow: visible;
            font-size: 1.7142857142857142rem;
            text-align: center;
            border-radius: 50%;
        }


        .toggle-pass-btn {
            padding: 6px !important;
        }


        .icon-btn-lbl {
            width: 100%;
            display: flex;
            align-items: inherit;
            justify-content: inherit;
        }



        .toggle-pass-btn .toggle-pass-icon {
            font-size: 11px;
        }

        .icon-root {
            fill: currentColor;
            width: 1em;
            height: 1em;
            display: inline-block;
            font-size: 1.7142857142857142rem;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            flex-shrink: 0;
            user-select: none;
        }



        .controls-vertical {
            margin-top: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }


        .button-root {
            color: #fff;
            height: 50px;
            padding: 6px 16px;
            font-size: 12px;
            min-width: 40px;
            box-sizing: border-box;
            font-family: sans-serif;
            font-weight: 500;
            line-height: 16px;
            border-radius: 4px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            background-color: rgba(0, 0, 0, 0.87);
        }


        .button-label {
            color: #fff;
            width: 100%;
            display: inherit;
            align-items: inherit;
            justify-content: inherit;
        }

        .layout-vertical .alter {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            flex-wrap: wrap;
        }


        .layout-vertical .alter .alter-text {
            padding: 0 5px;
        }


        .tlt-body {
            color: rgba(244, 244, 244, 0.5);
            font-size: 14px;
            font-family: Brutal, sans-serif;
            font-weight: 400;
            line-height: 1.5;
        }

        .layout-vertical .alter .alter-link {
            padding: 0 5px;
            margin: 0;
            text-decoration: none;
        }

        .layout-vertical .alter .alter-link p {
            color: #f4f4f4;
        }


        .main-container .main-content .main-card .optional-bottom-spacer {
            background-color: #202020;
            height: 40px;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 0;
        }
    </style>
    <title>Document</title>
</head>

<body style="background:#121212">
    <div class="root-sign-up">
        <div class="main-container">
            <div class="main-content">
                <div class="main-card">
                    <div class="main-card-content">
                        <div class="layout-vertical">
                            <div class="logo-website-layout">
                                <div class="rounded-circle" style="width: 150px; height: 150px;">
                                    <img class="" width="100%" src="<?php echo base_url(); ?>img/svg/logo.svg" alt="logo">
                                </div>
                            </div>
                            <h1 class="headtlt-root width-size width-full heading upper headtlt-subtitle">SIGN UP</h1>
                            <div class="form-vertical width-size" action="insertUser_controller" method="post" enctype="multipart/form-data">
                                <div class="name-fields">
                                    <div class="form-control-root form-field first-name-field width-full">
                                        <div class="inputbase-root input-root">
                                            <input autocomplete="given-name" name="name" id="firstName" placeholder="*First Name" type="text" inputmode="text" class="input-input inputbase-input">
                                            <div class="input-adorment-root input-position-end upper"></div>
                                        </div>
                                    </div>
                                    <div class="Spacer" style="width: 100%; height: 0px; max-width: 15px; max-height: 0px;"></div>
                                    <div class="form-control-root form-field last-name-field width-full">
                                        <div class="inputbase-root input-root">
                                            <input autocomplete="family-name" name="name" id="lastName" placeholder="*Last Name" type="text" inputmode="text" class="input-input inputbase-input">
                                            <div class="input-adorment-root input-position-end upper"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-control-root form-field form-width-full">
                                    <div class="inputbase-root input-root">
                                        <input autocomplete="email" name="email" id="email" placeholder="*Email Address" type="email" inputmode="email" class="input-input inputbase-input">
                                        <div class="input-adorment-root input-position-end upper"></div>
                                    </div>
                                </div>
                                <p class="alter-input" style="color: #dd8080; margin-top: 15px; padding: 0;" hidden>*This email have already taken</p>
                                <div class="form-control-root form-field form-width-full">
                                    <div class="inputbase-root input-root">
                                        <input autocomplete="new-password" name="password" id="password" placeholder="*Password" type="password" inputmode="text" class="input-input inputbase-input">
                                        <div class="input-adorment-root input-position-end upper">
                                            <button class="buttonbase-root button-icon-root toggle-pass-btn" tabindex="0" type="button" id="toggle-password">
                                                <span class="icon-btn-lbl">
                                                    <i class="fad fa-eye-slash icon-root toggle-pass-icon"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-vertical">
                                    <a herf="#" class="buttonbase-root button-root button-contained submitBtn btn-disabled width-full button-contained-primary">
                                        <span class="button-label">
                                            Continue
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="alter">
                                <p class="headtlt-root alter-text tlt-body">
                                    Already have an account?
                                </p>
                                <a href="<?php echo base_url() ?>index.php/home" id="to-login" class="alter-link">
                                    <p class="headtlt-root tlt-body">
                                        Sign In
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="optional-bottom-spacer"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var i;
        $('.submitBtn').click(function() {
            var idCustomer = Date.now();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/Signup/insertCustomer',
                dataType: 'json',
                data: {
                    id: idCustomer,
                    email: $('#email').val(),
                    firstName: $('#firstName').val(),
                    lastName: $('#lastName').val()
                },
                success: function(status) {
                    console.log(status);
                }
            });

            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/Signup/insertAccount',
                dataType: 'json',
                data: {
                    email: $('#email').val(),
                    password: $('#password').val(),
                    id: idCustomer
                },
                success: function(response) {
                    console.log(response);
                    if (response.status == 'success') {
                        window.location.href = '<?php echo base_url(); ?>index.php/home'
                    }
                }
            });
        });

        $('.input-input').focusin(function() {
            var index = ($('.input-input').index(this));
            i = index;

            $('.inputbase-root').eq(i).css("background",
                "#2B2B2B");
            $('.input-adorment-root').eq(i).removeClass('validation-adornment');
            $('.input-adorment-root').eq(i).text('');

        });

        $('#email').focusout(function() {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>index.php/Signup/checkEmail',
                dataType: 'json',
                data: {
                    email: $('#email').val()
                },
                success: function(status) {
                    if (status == "exist") {
                        $('.inputbase-root').eq(i).css("background",
                            "#554343");
                        $('.alter-input').removeAttr('hidden');
                    } else {
                        if ($('#email').val() != '') {
                            $('.inputbase-root').eq(i).css("background",
                                "#2B2B2B");
                        }
                        $('.alter-input').attr('hidden', 'hidden');
                    }
                }
            });
        });


        $('.input-input').focusout(function() {
            if ($('.input-input').eq(i).val() == '') {
                $('.inputbase-root').eq(i).css("background",
                    "#554343");
                $('.input-adorment-root').eq(i).addClass('validation-adornment');
                $('.input-adorment-root').eq(i).text('REQUIRED');
                // $('.submitBtn').off('click');
                $('.button-label').eq(i).css("color",
                    "#333333");
            } else {
                $('.inputbase-root').eq(i).css("background",
                    "#2B2B2B");
                $('.input-adorment-root').eq(i).removeClass('validation-adornment');
                $('.input-adorment-root').eq(i).text('');
            }
        });
    </script>
</body>

</html>