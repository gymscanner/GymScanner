<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Josh {{ __('Confirm Password') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" />
    <!--page level css -->
    <link href="{{ asset('css/main.css')}}" rel="stylesheet">


    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/auth.css')}}" rel="stylesheet">
    <!--end of page level css-->
</head>

<body id="sign-up" class="login_backimg">
    <div class="container mt-3rem">
        <div class="card ">
            <div class="row ">
                <div class="col-lg-6 col-12 card-align bg-white">
                    <div class="row">
                        <div class="col-12  signup-form">
                            <div class="card-header border-bottom-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="text-center">
                                            <span>JOSH</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-md-12 signup-header-text">
                                        <span class="active fs-18">{{ __('Confirm Password') }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <strong>{{ __('Please confirm your password before continuing.') }}</strong><br>
                                        <form action="{{ route('password.confirm') }}" id="authentication" method="post"
                                            class="sign_validator">
                                            @csrf
                                            <div class="form-group">
                                                <label for="password">{{ __('Password') }}</label>
                                                <input type="password"
                                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                    id="password" name="password" placeholder="Password" required />

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" value="{{ __('Confirm Password') }}"
                                                    class="btn btn-primary btn-block" />
                                            </div>

                                        </form>
                                        <div>
                                            <small><a href="#" class="text-decoration-none text-muted">Forgot your
                                                    password?</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
    <!-- begining of page level js -->
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/register.js')}}"></script>

</body>

</html>
