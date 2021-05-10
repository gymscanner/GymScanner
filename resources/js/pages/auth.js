$(document).ready(function () {
    $height = $(window).height();

    $(".register3").css("height", $height);
    var side1 = $("#sign-in3 .signin-form2 .card-body").height();
    console.log(side1);
    var side2 = $("#sign-in3 .signin-form2 .card-login-bg").height();
    console.log(side2);
    if (side1 > side2) {
        $("#sign-in3 .signin-form2 .card-login-bg").css("height", side1 + 36);
        $("#sign-in3 .card-box").css("height", side1 + 36);
    }
    $(".signin-btn").on('click', function () {
        setTimeout(function () {
            var side1 = $("#sign-in3 .signin-form2 .card-body").height();
            console.log(side1);
            var side2 = $("#sign-in3 .signin-form2 .card-login-bg").height();

            if (side1 > side2) {
                $("#sign-in3 .signin-form2 .card-login-bg").css("height", side1 + 36);
                $("#sign-in3 .card-box").css("height", side1 + 36);
            }
        });
    })

    $('.sign_validator').bootstrapValidator({
        fields: {
            first_name: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    }
                }
            },
            last_name: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required'
                    }
                }
            },
            password: {
                validators: {

                    notEmpty: {
                        message: 'The Password field is required'
                    }
                }
            },
            password_confirmation: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The Gender Field is required'
                    }
                }
            },
            email_confirm: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    },
                    identical: {
                        field: 'email',
                        message: 'Please enter the same email as above'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'The phone number is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^\d{10}$/,
                        message: 'The phone number should contain only 10 numbers'
                    }
                }
            },
            terms: {
                validators: {
                    notEmpty: {
                        message: 'The terms and conditions should be accepted'
                    }
                }
            }
        }
    });

});
