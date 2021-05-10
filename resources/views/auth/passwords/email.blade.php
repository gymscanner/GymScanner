<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Gymscanner.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/circles.png')}}" />
    <!--page level css -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/auth.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://edge.avangate.net/static/css-cpanel4avangate-c1213e0d984916369196eb6c2b0d6ed4-V104/20201126143128.css">

    <!--end of page level css-->
</head>

<body id="sign-up" class="login_backimg" onload="change_img()">
    <div class="container mt-3rem">
        <div class="card ">
                <div class="row card-align bg-white" id="card_name">
                    
                        <div class="col-md-6  signup-form">
                            <div class="card-header border-bottom-0">
                                <div class="row">
                                    <div class="col-md-12">
                                    <img class="title img-responsive pt-4" src="{{ asset('./images/gymscanner logo.png')}}" alt="" width="160">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-md-12 signup-header-text" style="margin-top:21px;">
                                        <h3 class="active fs-18">Recover Password</h3>
                                    </div>
                                </div>
                                <div class="bs-callout bs-callout-info " style="">                       
                                     Please enter your login username for the  Control Panel to start the password recovery process
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                        <form action="{{ route('password.email') }}" id="authentication" method="post"
                                            class="sign_validator">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group mb-1">
                                                    <span class="input-group-addon" id="email-addon"> <div class="icon icon-user"></div></span>
                                                    <input name="email" type="email" id="email" value="" class="form-control no-left-border" placeholder="Email" aria-describedby="email-addon" value="{{ old('email') }}" required>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- <div class="input-group mb-1">
                                                <input name="email" style="width:72%;" type="email" id="email" value="" class="form-control no-left-border" placeholder="Enter the Verification Code" aria-describedby="email-addon" value="{{ old('email') }}" required>
                                                <img src="login.i.php" alt="" title="" width="116" height="38" style="border:1px solid #b4c9d9;">
                                            </div> -->
                                            <button type="submit" class="btn btn btn-primary " id="recover">Continue</button>
                                            <button type="button" class="btn btn-default btn btn-default "><span class="icon icon-chevron-left"></span><a href="{{route('login')}}"> Back to login</a></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 signup-form">
                            <img src="{{ asset('images/reset.jpeg')}}" class="img-responsive my-1 mr-1" alt="">
                        </div>
                  
                </div>
        </div>


    </div>
    <!-- begining of page level js -->
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/register.js')}}"></script>
      <!-- begining of page level js -->
      <script>
        function change_img(){
            var img_width = screen.width;
            if(img_width<500){
                document.getElementById("card_name").setAttribute("class","row bg-white");
                document.getElementById("side_img").setAttribute("display","none");
            }
        }
    </script>
</body>

</html>
