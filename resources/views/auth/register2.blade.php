<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Josh Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" />
    <!--page level css -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/pages.css')}}" rel="stylesheet">
    <!--end of page level css-->
</head>

<body id="sign-in2">
    <div class="container-fluid px-0">
        <div class="row mx-0">
            <div class="col-md-5 col-lg-4 col-sm-6 col-10 ml-auto signup-form bg-white auth">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 h2-setting">
                            <h2 class="text-center">
                                {{--                            <img src="{{ asset('img/logo_white.png')}}"
                                alt="Logo">--}}
                                <span>JOSH</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-10 mx-auto px-2 signin mb-20">
                            <span class="active fs-18">SIGN UP</span>
                        </div>
                        <form action="{{url('register')}}" id="authentication" method="post"
                            class="sign_validator mx-auto col-sm-11 col-12" />
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text"
                                    class="form-control  form-control-lg  @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Name" value="{{ old('name') }}" required
                                    autocomplete="name" autofocus />
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input type="text"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="E-mail" value="{{ old('email') }}" required />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <label for="password">{{ __('Confirm Password') }}</label>
                                <input type="password" class="form-control form-control-lg" id="cpwd"
                                    name="password_confirmation" placeholder="Confirm Password" />
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-4 custom-control custom-checkbox">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="terms"
                                        {{ old('terms') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customCheck1">&nbsp;I
                                        accept
                                        the <a href="javascript:void(0)">terms &amp; Condition</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-25">
                                <input type="submit" value="Sign Up" class="btn btn-primary btn-block" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr class="separator">
                        </div>
                        <div class="col-md-12 text-center mt-4">
                            <a href="#" class="text-decoration-none text-muted"><small>Already Registered ? </small></a>
                            <a href="{{url('login2')}}">Login Now</a>
                        </div>
                        </form>
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

    <!-- end of page level js -->
</body>

</html>
