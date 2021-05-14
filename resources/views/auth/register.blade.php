@php
    $countries = App\Models\Country::all();
@endphp

<html>

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>
    <link href='captcha/custom.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://edge.avangate.net/static/css-cpanel4avangate-c1213e0d984916369196eb6c2b0d6ed4-V104/20201126143128.css">
    <link rel="stylesheet" href="{{ asset('mytemp/plugins/font-icons/fontawesome/css/fontawesome.css') }}">
    <style>
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: 12px;
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body style="background: url({{ asset('img/images/register_back3.jpg')}}); background-size: 100% 100%;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-1">
                <fieldset style="padding:15px;">
                    <a href="/">
                        <img alt="2checkout" style="width:65%;" src="{{ asset('./images/gymscanner logo.png')}}" border="0">
                    </a>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-1" style="background-color:#f2f2f2;">
                <!-- <form id="contact-form" method="post" action="contact.php" role="form"> -->
                <form action="{{url('register')}}" id="authentication" method="post"class="sign_validator" style="border-color: #e4e7e7;">
                     @csrf
                    <fieldset style="padding:15px;">
                    <h3 class="formTitle text-center buffer0">Sign Up for Free</h3>
                    <p class="formSubtitle text-center top-buffer0 bottom-buffer20">You're on your way to sell online globally</p>
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="first_name" type="text" name="name" class="form-control" placeholder="First Name" required="required"
                                        data-error="Firstname is required.">
                                    <div class="help-block with-errors">
                                        @error('name') {{ $message }} @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Last Name" required="required"
                                        data-error="Lastname is required.">
                                    <div class="help-block with-errors">
                                        @error('last_name') {{ $message }} @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required"
                                        data-error="Valid email is required.">
                                    <div class="help-block with-errors">
                                        @error('email') {{ $message }} @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="input-group mt-1">
                        <!--<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="changetype()"></span>-->
                            <input type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password" required style="padding-right:20px;!important"/>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon6" style="cursor:pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off toggle-password" toggle="#password"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                </span>
                            </div>
                        
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
			<!--<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="changetype1()"></span>-->
                        <div class="form-group">
                            <div class="input-group mt-1">
                            <input type="password" class="form-control"
                                id="confirm-password" name="password_confirmation"
                                placeholder="Confirm Password" required style="padding-right:20px;!important">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon6" style="cursor:pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off toggle-password" toggle="#confirm-password"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text"
                                class="form-control @error('website') is-invalid @enderror"
                                id="website" name="website" placeholder="Website"/>

                            @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>                
                            <select class="browser-default custom-select" name="country" style="height:40px;">
                                    <option value="not" class="hidden defaultText">Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->iso }}">{{ $country->nicename }}</option>
                                    @endforeach
                            </select>
                        </div>
                        <br>
                        <div>                
                            <select class="browser-default custom-select" name="role" style="height:40px;">
                                    <option value="2">I am a GYM</option>
                                    <option value="3" style="height:40px;">I am a Personal Trainer</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin:20px;">
                            <div id = "sell">
                            <div class="g-recaptcha" data-sitekey="6LdZ5wcaAAAAAOrSi3zsrgtiyFT38MGSUmGl20FG" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div> 
                            
                            {{-- <div class="g-recaptcha" data-sitekey="6LdZ5wcaAAAAAOrSi3zsrgtiyFT38MGSUmGl20FG" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>--}}

                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group" style="margin:20px;">
                            <input type="submit" value="GET STARTED" class="btn btn-success btn-block" style="width:150px; margin:auto;"/>
                        </div>
                        <div style="text-align:center" style="padding;20px;">
                            Already have an Account? 
                            <a href="{{ route('login')}}">
                                <strong>Sign in</strong>
                            </a>
                        </div>
                        <br>
                        <div class="showFirstStep text-center">
                                By clicking "GET STARTED" I agree to Gymscanner's
                                <a href="https://www.gymscanner.com/terms" target="_blank">Terms of Service</a>, <a href="https://www.gymscanner.com/privacy/" target="_blank">Privacy Policy</a>
                                .
                        </div>
                    </div>
                    </fieldset>
                </form>
                
            </div>
            <!-- /.8 -->
            
        </div>
        <div class="row">
            <div class="col-md-8" style="text-align:center;">
                        © Gymscanner 2021. All rights reserved.
            </div>
        </div>
        <!-- /.row-->
    </div>
    
    <!-- /.container-->
    <script>
        function changetype(){
            var pass = document.getElementById("password");
            var pass_type = pass.getAttribute("type");
            if(pass_type == "password"){
                pass.setAttribute("type", "text");
            }else{
                pass.setAttribute("type", "password");
            }
        }
	function changetype1(){
            var pass = document.getElementById("confirm-password");
            var pass_type = pass.getAttribute("type");
            if(pass_type == "password"){
                pass.setAttribute("type", "text");
            }else{
                pass.setAttribute("type", "password");
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="captcha/validator.js"></script>
    <script src="captcha/contact.js"></script>

    <!-- import -->
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/register.js')}}"></script>
     <script src="{{ asset('mytemp/plugins/font-icons/feather/feather.min.js') }}"></script>
    <script type="text/javascript">
    
        feather.replace();

        $(document).on('click','.toggle-password',function() {

        let input = $($(this).attr("toggle"));

        let input_id = $(this).attr("toggle");

        let icon_html = '';

        if (input.attr("type") == "password") {
            input.attr("type", "text");
            input.attr("data", "eye");
            icon_html = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye toggle-password" toggle="'+input_id+'"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>';
        } else {
            input.attr("type", "password");
            input.attr("data", "eye-off");
            icon_html ='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off toggle-password" toggle="'+input_id+'"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>';
        }

        $(input).next('div').find('span').find('svg').remove();

        $(input).next('div').find('span').html(icon_html);
        
    });

    </script>
</body>

</html>