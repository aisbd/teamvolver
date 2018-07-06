$(document).ready(function () {
    $('#login-btn').click(function () {
        $('#login-form').show();
        $('#register-form').hide();
    })
    $('#register-btn').click(function () {
        $('#login-form').hide();
        $('#register-form').show();
    })

    $('a[data-href="#login"]').click(function () {
        $('#loginModal').modal();
    })

})
