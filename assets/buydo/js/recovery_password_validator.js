
    jQuery.validator.setDefaults({
      debug: false,
      success: "valid"
    });

    $(document).ready(function () {
    $('#recovery_password_form').validate({ // initialize the plugin
        
        rules: {
            email: {
                required: true,
                email: true
            }
        }
    });

});
