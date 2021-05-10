<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Josh {{ __('Reset Password') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" />
    <!--page level css -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fonts/iconmind.css')}}">
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/pages.css')}}" rel="stylesheet">
    <!--end of page level css-->
</head>

<body id="sign-in3">

    <div class="container-fluid px-0">
        <!-- The video -->
        <video autoplay muted loop id="myVideo">
            <source src="{{asset('video/video.mov')}}" type="video/mp4">
        </video>
        <div class="row mx-0 justify-content-center mt-50">
            <div class="col-lg-8 col-10 card-box">

                <div class="row">
                    <div class="col-md-6  col-12 signin-form2 px-0">

                        <div class="card-body ">

                            <div class="row">
                                <div class="col-md-10 mx-auto px-2 pb-3">
                                    <p class="text-center">Even if you forget your password, you can still social login!
                                    </p>
                                    <div class="row social-buttons">
                                        <div class="  col-sm-8 col-md-10 col-10 text-center mx-auto">
                                            <button type="button" class="btn btn-primary   m-t-10 btn-block"><span
                                                    class="mr-15"><i class="im im-icon-Facebook-2"></i></span> Sign In
                                                with Facebook</button>
                                        </div>
                                        <div class=" col-sm-8 col-md-10 col-10 text-center mx-auto">
                                            <button type="button" class="btn btn-primary    m-t-10 btn-block"><span
                                                    class="mr-15"><i class="im im-icon-Twitter"></i></span> Sign In with
                                                Twitter</button>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-center mt-25">--OR--</p>
                                    </div>

                                </div>
                                <form action="{{ route('password.email') }}" id="authentication" method="post"
                                    class="sign_validator mx-auto col-11">
                                    @csrf
                                    <div class="col-md-12">
                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                        <div class="form-group mt-4">
                                            {{--<label for="email"> E-mail</label>--}}
                                            <input type="email"
                                                class="form-control   form-control-lg border-bottom border-top-0 border-left-0 border-right-0 @error('email') is-invalid @enderror"
                                                id="email" name="email" placeholder="E-mail Address"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mt-4">
                                            <input type="submit" value="{{ __('Send Password Reset Link') }}"
                                                class="btn btn-primary btn-block signin-btn" />
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-10   signin-form2 px-0">

                        <div class="card-body  card-login-bg d-none d-md-block">
                            <div class="overlay"></div>
                            <div class="col-12 text-white login2-text">
                                <h4 class="text-white login2-text font-weight-bold">HEY<br>Glad to See You</h4>
                                <p class="">Please Keep Connect with us</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!-- begining of page level js -->
    <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/login_register.js')}}"></script>


</body>

</html>
