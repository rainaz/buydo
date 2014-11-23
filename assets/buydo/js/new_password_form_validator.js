
    jQuery.validator.setDefaults({
      debug: false,
      success: "valid"
    });

    $(document).ready(function () {
    $('#new_password_form').validate({ // initialize the plugin
        
        rules: {
            password: {
                required: true
            },
            confirm_password: {
                required: function(element) {
                    return $("#password").val() == $("#confirm_password").val();
                }
            }
        }
    });

});
