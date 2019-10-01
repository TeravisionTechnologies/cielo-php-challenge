$(document).ready(function() {

    //Datepicker
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        maxDate: new Date(),
    });

    //JQuery Validation
    $("#register-form").validate({
        rules: {
            name: {
                required: true,
                maxlength: 20, //preguntar a ignacio
                lettersonly: true
            },
            date: {
                required: true
            },
            email: {
                required: true,
                maxlength: 200, //preguntar a ignacio
                email: true
            },
            color: {
                required: true,
                maxlength: 20, //preguntar a ignacio
                lettersonly: true
            }
        },
        messages: {
            name: {
                required: "The name is required",
                maxlength: "The field must have less than 20 characters", //preguntar a ignacio
                lettersonly: "The field must contain only letters"
            },
            date: {
                required: "The date of birth is required",
            },
            email: {
                required: "The email is required",
                maxlength: "The field must have less than 200 characters", //preguntar a ignacio
                email: "The field doesn't have the format of an email"
            },
            color: {
                required: "The favorite color is required",
                maxlength: "The field must have less than 20 characters", //preguntar a ignacio
                lettersonly: "The field must contain only letters"
            },
        },
        submitHandler: function(form) {
            alert('SUBMIT');
            form.submit();
            //$(form).ajaxSubmit();
        }
    });


});