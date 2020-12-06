var baseURL = 'http://localhost:2104/01/';

function saveToken(token) {
    localStorage.setItem('token_access', JSON.stringify(token));
}

function loadToken() {
    return localStorage.getItem("token_access") != null ? JSON.parse(localStorage.getItem("token_access")) : '';
}

function signOut() {
    if (localStorage.getItem("token_access") != null) {
        localStorage.removeItem('token_access');
        window.location.href = baseURL + 'index.php/home';
    }
}

function getInfoToken(host) {
    token = loadToken();
    if (token != '') {
        $.ajax({
            type: "POST",
            url: host + 'index.php/admin/UserManage/getInfoToken',
            dataType: 'json',
            data: {
                token: token,
            },
            success: function(dataReturned) {
                if (dataReturned.length > 0) {
                    return dataReturned;
                }
            }
        });
    }

    return '';
}

function displayInfoUser(info) {
    if (info != '') {
        $('.signin_info').html('<a class="nav-link dropdown-toggle home-navbar-button" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, ' + info.firstName + ' &nbsp<i class="fal fa-user-check"></i></a>');
        $('.signin_info').append($('<div class="dropdown-menu need-hover-drop rounded-0 border-0 shadow" aria-labelledby="navbarDropdown">' +
            '<a class="dropdown-item custom-font-4 account_" href="' + baseURL + 'index.php/customer/account/edit">Account</a>' +
            '<a class="dropdown-item custom-font-4 orders_" href="' + baseURL + 'index.php/customer/order/history">Orders</a>' +
            '<div class="dropdown-divider"></div>' +
            '<a class="dropdown-item custom-font-4 signout_" href="#">Sign out</a>' +
            '</div>'));
        $('.signin_info').on('mouseover', function() {
            fadeBackground();
        }).on('mouseout', function() {
            hideBackground();
        })
        $('.signin_info').on('click', '.signout_', function() {
            signOut();
        })
    }
}