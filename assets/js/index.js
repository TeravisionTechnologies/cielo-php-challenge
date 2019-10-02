$(document).ready(function () {
    $.validator.addMethod("nameRegex", function (value, element) {
        return this.optional(element) || /^[a-z\-\s]+$/i.test(value);
    }, "Name must contain only letters");

    //JQuery Validation
    $("#register-form").validate({
        rules: {
            name: {
                required: true,
                maxlength: 120,
                nameRegex: true,
            },
            date_of_birth: {
                required: true
            },
            email: {
                required: true,
                maxlength: 120,
                email: true
            },
            favorite_color: {
                required: true
            }
        },
        messages: {
            name: {
                required: "The name is required",
                maxlength: "The field must have less than 120 characters",
                lettersonly: "The field must contain only letters"
            },
            date_of_birth: {
                required: "The date of birth is required",
            },
            email: {
                required: "The email is required",
                maxlength: "The field must have less than 120 characters",
                email: "The field doesn't have the format of an email"
            },
            favorite_color: {
                required: "The favorite color is required"
            },
        },
        submitHandler: function (form, e) {
            e.preventDefault();
            $('#toastBodyError').html('');
            $('#toastBodySuccess').html('');
            let data = $("#register-form").serializeArray();
            let formData = _.object(_.pluck(data, 'name'), _.pluck(data, 'value'));
            $.ajax({
                type: 'POST',
                url: 'form/store',
                dataType: "json",
                data: formData,
                success: function (result) {
                    if (result.errors == null) {
                        $('#register-form').trigger("reset");
                        $('#toastBodySuccess').text(result.message);
                        $('#toastSuccess').toast('show')
                    } else {
                        let liString = '';
                        _.each(result.errors, function (e) {
                            liString += '<li>' + e + '</li>';
                        });
                        liString = '<ul>' + liString + '</ul>';
                        $('#toastBodyError').html(liString);
                        $('#toastError').toast('show')
                    }
                },
                error: function (error) {
                    $('#toastBodyError').text('Whoops something went wrong!');
                    $('#toastError').toast('show')
                }
            });
        }
    });
});