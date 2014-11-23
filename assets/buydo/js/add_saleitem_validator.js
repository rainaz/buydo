
    jQuery.validator.setDefaults({
      debug: false,
      success: "valid"
    });

    $(document).ready(function () {
    $('##add_saleitem_form').validate({ // initialize the plugin
        
        rules: {
            item_name: {
                required: true,
                rangelength: [1, 40]
            },
            picture: {
                required: true,
                url: true,
                rangelength: [1, 50]
            },
            price: {
                required: function(element) {
                    return $("#price").val() > 0;
                },
                number: true
            },
            quantity_in_stock: {
                required: function(element) {
                    return $("#quantity_in_stock").val() > 0;
                },
                rangelength: [1, 11],
                number : true
            },
            spec: {
                required: true
            },
            payment_method: {
                required: true
            },
            agreement: {
                required: true
            }
        },
      messages: {
            item_name: {
                required: "Item name is required",
                rangelength: "Maximum length is 40"
            },
            picture: {
                required: "Image link is required",
                url: "Invalid URL",
                rangelength: "Maximun length is 50"
            },
            price: {
                required: "Invalid price"
                number: "Invalid price"
            },
            quantity_in_stock: {
                required: "Invalid quantity"
                rangelength: "Invalid quantity",
                number : "Invalid quantity"
            },
            spec: {
                required: "Properties is required"
            },
            payment_method: {
                required: "Payment method is required"
            },
            agreement: {
                required: "Agreement is required"
            }
        }
    });

});
