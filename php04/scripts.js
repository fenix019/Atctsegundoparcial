$(document).ready(function() {
    $('#togglePassword').click(function() {
        const passwordField = $('#password');
        const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', type);
        $(this).find('i').toggleClass('fa-eye fa-eye-slash');
    });

    $('#toggleConfirmPassword').click(function() {
        const confirmPasswordField = $('#confirmPassword');
        const type = confirmPasswordField.attr('type') === 'password' ? 'text' : 'password';
        confirmPasswordField.attr('type', type);
        $(this).find('i').toggleClass('fa-eye fa-eye-slash');
    });

    $('#password, #confirmPassword').on('input', function () {
        const password = $('#password').val();
        const confirmPassword = $('#confirmPassword').val();

        if (password.length < 8) {
            $('#password').addClass('is-invalid');
            $('#passwordError').show();
        } else {
            $('#password').removeClass('is-invalid');
            $('#passwordError').hide();
        }

        if (password !== confirmPassword) {
            $('#confirmPassword').addClass('is-invalid');
            $('#confirmPasswordError').show();
        } else {
            $('#confirmPassword').removeClass('is-invalid');
            $('#confirmPasswordError').hide();
        }
    });

    // Initialize invalid-feedback display
    $('.invalid-feedback').hide();
});
