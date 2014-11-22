
    jQuery.validator.setDefaults({
      debug: false,
      success: "valid"
    });

    $(document).ready(function () {
    $('#resgistration').validate({ // initialize the plugin
        
        rules: {
            username: {
                required: true,
                rangelength: [1, 16]
            },
            email: {
                required: true,
                email: true,
                rangelength: [1, 50]
            },
            password: {
                required: true,
                rangelength: [1, 41]
            },
            confirm_password: {
                required: function(element) {
                    return $("#password").val() == $("#confirm_password").val();
                }
            },
            user_type: {
                required: true
            },
            name: {
                required: true,
                rangelength: [1, 20]
            },
            surname: {
                required: true,
                rangelength: [1, 20]
            },
            birthday: {
                required: true
            },
            address:{
                required: true
            },
            sent_address: {
                required: false
            },
            country: {
                required: true
            },
            creditcard: {
                required: false,
                rangelength: [16, 16],
                number: true
            },
            phone_no: {
                required: true,
                rangelength: [1, 11]
            }
        }  ,
      messages: {
            username: {
                required: "Username is required",
                rangelength: "Maximum length is 16"
            },
            email: {
                required: "Email is required",
                email: true,
                rangelength: [1, 50]
            },
            password: {
                required: "Password is required",
                rangelength: [1, 41]
            },
            confirm_password: {
                required: "The password above and here are not the same. Please try again."
                
            },
            user_type: {
                required: "Please choose one of the following"
            },
            name: {
                required: "Firstname is required",
                rangelength: [1, 20]
            },
            surname: {
                required: "Surname is required",
                rangelength: [1, 20]
            },
            birthday: {
                required: "Birthdate is required"
            },
            address:{
                required: "Address is required"
            },
            sent_address: {
                required: false
            },
            country: {
                required: "Please choose one of the following"
            },
            creditcard: {
                required: false,
                rangelength: "Length must be exactly 16",
                number: ""
            },
            phone_no: {
                required: "Phone number is required",
                rangelength: [1, 11]
            }
        }
    });

});
