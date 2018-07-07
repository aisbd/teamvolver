$(document).ready(function () {
    $('.loginButton').click(function () {
        $('#login-form').show();
        $('#register-form').hide();
    })
    $('#register-btn').click(function () {
        $('#login-form').hide();
        $('#register-form').show();
    })

    $('#loginButton').click(function () {

        $('.loginButton').trigger('click')
        $('#loginModal').modal();
    })

    $('.become-igniter').click(()=>{
        $("#register-btn").trigger('click')
        $('#loginModal').modal()
        $('[href="#tab-1"]').trigger('click')
    })

    $('.become-member').click(() => {
        $("#register-btn").trigger('click')
        $('#loginModal').modal()
        $('[href="#tab-3"]').trigger('click')
    })

})
