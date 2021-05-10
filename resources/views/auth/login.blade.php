<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Gymscanner|Vendor Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/circles.png')}}" />
    <!--page level css -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/auth.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://edge.avangate.net/static/css-cpanel4avangate-c1213e0d984916369196eb6c2b0d6ed4-V104/20201126143128.css">
    <!--end of page level css-->
    <link rel="stylesheet" href="{{ asset('mytemp/plugins/font-icons/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('mytemp/plugins/font-icons/fontawesome/css/fontawesome.css') }}">
    <style>
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: 12px;
            position: relative;
            z-index: 99;
        }
    </style>
</head>

<body id="sign-up" class="login_backimg" onload="change_img()">
    <div class="container mt-3rem">
        <div class="card ">
            <div class="row ">
                
                    <div class="row card-align bg-white" id="card_name">
                        <div class="col-md-6  signup-form">
                            <div class="card-header border-bottom-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img  class="title img-responsive pt-4" src="{{ asset('./images/gymscanner logo.png')}}" alt="" width="60%" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-md-12 signup-header-text" style="margin-top:21px;">
                                        <h3 class="active fs-18">Sign in to your account</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{ route('login') }}" id="authentication" method="post"
                                            class="sign_validator">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group mb-1">
                                                    <span class="input-group-addon" id="email-addon"> <div class="icon icon-user"></div></span>
                                                    <input name="email" type="email" id="email" value="" class="form-control no-left-border" placeholder="Email" aria-describedby="email-addon" value="{{ old('email') }}" required>
                                                    
                                                </div>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <!-- <div class="about-my-username">
                                                <div class="username-info">
                                                <a href="#">
                                                    <span class="caret username-info-toggle-action"></span>
                                                    <span class="username-info-toggle-action">What is my <strong>username</strong>?</span>
                                                </a>
                                                </div>
                                                <div class="username-text">
                                                    <p> If your account has been upgraded from the previous 2Checkout Admin Area, please login using the same <span>username</span>. Otherwise, please log in using your account <span>email address.</span> </p>
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <div class="input-group mt-1">
                                                    <span class="input-group-addon" id="pass-addon"><div class="icon icon-key"></div></span>
                                                    <input name="password" type="password" id="password" size="40" class="form-control no-left-border" placeholder="Password" aria-describedby="pass-addon" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon6" style="cursor:pointer">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off toggle-password" toggle="#password"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                                        </span>
                                                    </div>
                                                    


                                                    <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="changetype()"></span> -->
                                                   
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                @if($msg = Session::get('message'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $msg }}</strong>
                                                </span>
                                                @endif
                                            </div>

                                            <!-- <div class="form-group">
                                                <div class="input-group mt-1">
                                                    {{-- <div class="g-recaptcha" data-sitekey="6LdZ5wcaAAAAAOrSi3zsrgtiyFT38MGSUmGl20FG" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div> --}}
                                                    <div class="g-recaptcha" data-sitekey="6LdZ5wcaAAAAAOrSi3zsrgtiyFT38MGSUmGl20FG" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                    <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div> -->
                                            
                                            <div class="form-group">
                                                <input type="submit" value="Log In" class="btn btn-primary btn-block" />
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-sm-12 mt-2">
                                                <p class="recover_password mb-0"><a href="{{ route('password.request') }}">Forgot your password?</a></p>
                                                <p class="recover_password"><a href="{{ route('register')}}">Not  Gymscanner.com client, yet?</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 signup-form">
                            <img src="{{ asset('images/login-pic.png')}}" class="img-responsive my-1 pt-3 mr-1" style="width:100%!important;">
			    <p style="text-align: end;font-style: italic;font-size: small;">Viktoria Kharlap, Athens, Greece</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script>

        function changetype()
        {
            var pass = document.getElementById("password");
            var pass_type = pass.getAttribute("type");
            if(pass_type == "password"){
                pass.setAttribute("type", "text");
            }else{
                pass.setAttribute("type", "password");
            }
        }
        function change_img(){
            var img_width = screen.width;
            if(img_width<500){
                document.getElementById("card_name").setAttribute("class","row bg-white");
                document.getElementById("side_img").setAttribute("display","none");
            }
        }
    </script>
    <!-- begining of page level js -->
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/register.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="captcha/validator.js"></script>
    <script src="captcha/contact.js"></script>
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
