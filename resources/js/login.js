$(document).ready(function () {
    $('#password-toggle').click(function () {
        var passwordField = $('#password');
        var passwordFieldType = passwordField.attr('type');

        if (passwordFieldType === 'password') {
            passwordField.attr('type', 'text');
            $('#password-toggle i').removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            passwordField.attr('type', 'password');
            $('#password-toggle i').removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });
});