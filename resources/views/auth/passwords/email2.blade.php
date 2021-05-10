<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Josh {{ __('Reset Password') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" />
    <!--page level css -->
    <link href="{{ asset('css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/auth.css')}}" rel="stylesheet">
    <!--end of page level css-->
</head>

<body id="sign-in2">
    <div class="container-fluid px-0">
        <div class="row mx-0">
            <div class="col-md-4 col-sm-6 col-10 ml-auto signin-form register3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h2 class="text-center">
                                <span>JOSH</span>
                            </h2>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-10 mx-auto px-2 pb-3">
                            <span class="active fs-18">{{ __('Reset Password') }}</span>
                        </div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form action="{{ route('password.email') }}" id="authentication" method="post"
                            class="sign_validator mx-auto col-lg-11 col-12">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group mt-4px">
                                    <label for="email"> E-mail</label>
                                    <input type="email"
                                        class="form-control  form-control-lg @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-20px">
                                    <input type="submit" value="{{ __('Send Password Reset Link') }}"
                                        class="btn btn-primary btn-block" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- begining of page level js -->
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript">
    </script>
    <script src="{{ asset('js/pages/auth.js')}}"></script>

    <!-- end of page level js -->
</body>

</html>
