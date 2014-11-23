
    jQuery.validator.setDefaults({
      debug: false,
      success: "valid"
    });

    $(document).ready(function () {
    $('#login_form').validate({ // initialize the plugin
        
        rules: {
            username: {
                required: true,
                rangelength: [1, 16]
            },
            password: {
                required: true,
                rangelength: [1, 41]
            }
        },
      messages: {
            username: {
                required: "Username is required",
                rangelength: "Maximum length is 16"
            },
            password: {
                required: "Password is required",
                rangelength: ""
            },
        }
    });

});
