function saveToken(token) {
    localStorage.setItem('token_access', JSON.stringify(token));
}

function loadToken() {
    return localStorage.getItem("token_access") != null ? JSON.parse(localStorage.getItem("token_access")) : '';
}

function signOut() {
    if (localStorage.getItem("token_access") != null) {
        localStorage.removeItem('token_access');
        window.location.reload();
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