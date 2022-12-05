function Alertlogin(){
    var status_login = localStorage.getItem("status-login");
    if (status_login == 'false') {
       
        console.log('false');
        $('.notiflogin').html(`<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Login gagal</strong> mohon periksa username dan password anda.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>`);
    }else if (status_login == 'true') {
        $('.notiflogin').html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Login sukses</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>`);
        console.log('true');
    } else {
        $('.alert').remove();
    }
    $('.close').click(function () {
        localStorage.removeItem("status-login");
       
       
    });
    
}

function Alertregister(){
    var status_register = localStorage.getItem("status-register");


    if (status_register == 'false') {
        $('.alerts-register').html(`<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Register gagal</strong> mohon periksa kembali data anda.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>`);
    }else if (status_register == 'true') {
        $('.alerts-register').html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Register sukses</strong> Silahkan login.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>`);
    } else {
        $('.alert').remove();
    }
    
    $('.close').click(function () {
       
        localStorage.removeItem("status-register");
       
    });
    
}
