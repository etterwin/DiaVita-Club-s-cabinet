function getFormData(form) {
    var data = {};
    $(form).find('input, select').each(function() {
        if (this.tagName.toLowerCase() == 'input') {
            if (this.type.toLowerCase() == 'checkbox') {
                data[this.name] = this.checked;
            } else if (this.type.toLowerCase() != 'submit') {
                data[this.name] = this.value;
            }
        } else {
            data[this.name] = this.value;
        }
    });
    return data;
}


function addFormError(formRow, errorMsg) {
    var errorMSG = '<span class="error-msg">' + errorMsg + '</span>';
    $(formRow).parents('.form-group').addClass('has-error');
    $(formRow).parents('.form-group').append(errorMSG);
    $('#dialog').removeClass('dialog-effect-in');
    $('#dialog').addClass('shakeit');
    setTimeout(function() {
        $('#dialog').removeClass('shakeit');
    }, 300);
}

function form_handler(form_name, custom_validation, success_message, error_message, success_function, error_function) {
    $(form_name).find('input[type="submit"]').on('click', function(e) {

        window.onbeforeunload = null;

        $(form_name).find('.form-group .error-msg').remove();
        var submitButton = this;
        submitButton.disabled = true;

        var form = $(form_name)[0];
        if (custom_validation != null) {
            if (!custom_validation(form, getFormData(form))) {
                submitButton.disabled = false;
                return false;
            }
        }
        e.preventDefault();
    });
    $(document).click(function(e) {
        if ($(e.target).closest(form_name).length) {
            $(form_name).find('.form-group').removeClass('has-error');
            setTimeout(function() {
                $(form_name).find('.form-group .error-msg').remove();
            }, 300);
        } else {
            return
        }
    });
}

// LOGIN FORM: Validation function
function validate_login_form(form, data) {
    if (data.user_username == "") {
        addFormError(form["user_username"], 'The username is invalid');
        return false;
    }

    if (data.user_password == "") {
        addFormError(form["user_password"], 'The password is invalid');
        return false;
    }

    $('#dialog').removeClass('dialog-effect-in').removeClass('shakeit');
    $('#dialog').addClass('dialog-effect-out');

    $('#successful_login').addClass('active');
    //return true;
}

var Regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


function validate_registration_form(form, data) {
    if (data.user_username == "") {
        addFormError(form["user_username"], 'The username is empty');
        return false;
    }

    if (!Regex.test(form.user_email.value)) {
        addFormError(form["user_email"], 'The email is invalid');
        return false;
    }

    if (data.user_email == "") {
        addFormError(form["user_email"], 'The email is empty');
        return false;
    }

    if (data.user_number == "") {
        addFormError(form["user_number"], 'The number is empty');
        return false;
    }

    if (data.user_password == "") {
        addFormError(form["user_password"], 'The password is empty');
        return false;
    }

    if (data.user_cnf_password == "" || data.user_password != data.user_cnf_password) {
        addFormError(form["user_cnf_password"], "The passwords don't match");
        return false;
    }

    if (!data.user_terms) {
        addFormError(form["user_terms"], "You need to read and accept the Terms and Conditions before proceeding");
        return false;
    }

    $('#dialog').removeClass('dialog-effect-in').removeClass('shakeit');
    $('#dialog').addClass('dialog-effect-out');

    $('#successful_registration').addClass('active');

}

form_handler("#login_form", validate_login_form, null, null, null, null, null, null);
form_handler("#register_form", validate_registration_form, null, null, null, null, null, null);

var dialogBox = $('#dialog');

dialogBox.on('click', 'a.user-actions', function() {
    dialogBox.toggleClass('flip');
});

$('#successful_login,#successful_registration').on('click', 'a.dialog-reset', function() {
    $('#successful_login,#successful_registration').removeClass('active');
    dialogBox.removeClass('dialog-effect-out').addClass('dialog-effect-in');
    document.getElementById('login_form').reset();
    document.getElementById('register_form').reset();
});
