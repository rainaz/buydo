
    jQuery.validator.setDefaults({
      debug: false,
      success: "valid"
    });

    $(document).ready(function () {
    $('#form_edit_bid').validate({ // initialize the plugin
        
        rules: {
            item_name: {
                required: true,
                rangelength: [1, 40]
            },
            picture: {
                required: true,
                url: true
            },
            initial_price: {
                required: required: function(element) {
                    return $("#initial_price").val() > 0;
                }
                number: true
            },
            enddate {
                required: true
            },
            endtime {
                required: true
            },
            spec {
                required: true
            },
            payment_method {
                required: true
            },
            agreement {
                required: true
            }
        },
      messages: {
            item_name: {
                required: "Item's name is required",
                rangelength: "Maximum length is 40"
            },
            picture: {
                required: "URL is required",
                url: "Invalid URL"
            },
            initial_price: {
                required: "Invalid Initial price"
                number: "Invalid Initial price"
            },
            enddate {
                required: "End Date is required"
            },
            endtime {
                required: "End time is required"
            },
            spec {
                required: "Property is required"
            }
            agreement {
                required: "Agreement is required"
            }

        }
    });

});
