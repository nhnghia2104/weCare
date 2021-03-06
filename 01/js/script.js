var isOpenCart = false;

function openSearchBar() {

}

function openNav() {
    document.getElementById("miniCart").style.right = "0px";
    // document.getElementById("navi-top").style.top = "-80px";
    document.getElementById("fadeBackground").style.opacity = "1";
    $('#fadeBackground').css('z-index', '30');
    $('body').addClass('disableScroll');
    isOpenCart = true;
}

function closeNav() {
    document.getElementById("miniCart").style.right = "-500px";
    // document.getElementById("navi-top").style.top = "0px";
    document.getElementById("fadeBackground").style.opacity = "0";
    $('#fadeBackground').css('z-index', '-1');
    $('body').removeClass('disableScroll');
    isOpenCart = false;
}

function goBack() {
    window.history.back();
}

function fadeBackground() {
    document.getElementById("fadeBackground").style.opacity = "1";
    $('#fadeBackground').css('z-index', '30');
}

function hideBackground() {
    document.getElementById("fadeBackground").style.opacity = "0";
    $('#fadeBackground').css('z-index', '-1');
}

$(document).ready(function() {
    $("#fadeBackground").click(function() {
        closeNav();
        hideSearch();
    });
});

// text input listenner
function textDidchange() {
    const x = $(".signup-input").val();
    if (x.length == 0) {
        $('.signup-button').attr('disabled', 'disabled');
    } else {
        $('.signup-button').removeAttr('disabled');
    }
}
// focus input
$(document).ready(function() {
    $(".signup-input").focusout(function() {
        const x = $(".signup-input").val();
        if (x.length == 0) {
            $(".input-warning").css("display", "block");
            $('.input-warning').html('');
            $('.signup-input').css("border-color",
                " rgb(221, 221, 221) rgb(221, 221, 221)  rgb(221, 221, 221)  rgb(221, 221, 221)"
            );
        }
    });
});

function hideNav() {
    document.getElementById("navi-top").style.top = "-80px";

}

function showNav() {
    document.getElementById("navi-top").style.top = "0px";
}

function showSearch() {
    hideNav();
    $('.search-bar').css('top', '0');
    $('.search-bar').css('opacity', '1');
    $('body').addClass('disableScroll');
    fadeBackground();
    $('#inputFocus').focus();
}

function hideSearch() {
    $('.search-bar').css('top', '-' + $('.search-bar').css('height'));
    $('.search-bar').css('opacity', '0');
    $('body').removeClass('disableScroll');
    setTimeout(showNav(), 5000);
    hideBackground();
}
// focus scroll
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) { // is csroll up
        if (prevScrollpos <= 100) {
            document.getElementById("navi-top").style.backgroundColor = "rgba(0,48,73, 0.0)";
            $('.navbar_logo').attr('src', $('.navbar_logo').data('light'));
            $('#navi-top').removeClass('navbar-dark');
            $('#navi-top').addClass('navbar-light');
        }
    } else { // scroll down
        if (prevScrollpos > 100) {
            document.getElementById("navi-top").style.backgroundColor = "rgba(0,48,73, 0.9)";
            $('.navbar_logo').attr('src', $('.navbar_logo').data('dark'));
            $('#navi-top').addClass('navbar-dark');
            $('#navi-top').removeClass('navbar-light');
        }
        // document.getElementById("navi-top").style.top = "-80px";
    }
    prevScrollpos = currentScrollPos;
}


function validateEmail(email) {
    const re =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$(document).ready(function() {
    $(".signup-button").click(function() {
        const email = $(".signup-input").val();
        if (validateEmail(email)) {

            $.ajax({
                type: "POST",
                url: 'insertEmail',
                dataType: 'json',
                data: {
                    email: $(".signup-input").val(),
                },
                success: function(obj, textstatus) {
                    if (!('error' in obj)) {
                        yourVariable = obj.result;
                    } else {
                        console.log(obj.error);
                    }
                }
            });

            $('.input-warning').html('');
            $('.signup-input').css("border-color", "0.1rem solid rgb(221, 221, 221);");
        } else {
            $('.signup-input').css("border-color",
                "rgb(221, 221, 221) rgb(221, 221, 221) rgb(216, 0, 0)");
            $(".input-warning").css("display", "block");
            $('.input-warning').html(
                'Please enter a valid email address. For example MinhOcCho@gmail.com.');
        }
        return false;
    });
});

$(document).ready(function() {
    $(".dfMNN").click(function() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    });
});