@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Forms @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />

    <!--end of page vendors -->
@stop
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Forms</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Forms</li>
            </ol>
        </div>
        <div class="separator-breadcrumb border-top"></div>




    </section>
    <!-- /.content -->
    <!-- /.content -->
    <section class="content">
        <div class="row">
            <!--row starts-->
            <div class="col-md-12 col-lg-6 col-sm-12 col-12">
                <!--lg-6 starts-->
                <!--basic form starts-->
                <div class="my-3">
                    <div class="card p-0" id="hidepanel1">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title d-inline">
                                Basic Form 1
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="#">
                                <!-- CSRF Token -->
                                <!-- Name input-->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="name">Name</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                    </div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="email">Your E-mail</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control"></div>
                                    </div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="message">Your message</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <textarea class="form-control resize_vertical" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-position">
                                    <div class="row">
                                        <div class="col-md-12  col-sm-12 col-12  col-lg-12 text-right">
                                            <button type="submit" class="btn btn-responsive btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--basic form 2 starts-->
                <div class="my-3">
                    <div class="card p-0" id="hidepanel2">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title d-inline">
                                Basic Form 2
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="#">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <fieldset>
                                    <!-- Name input-->
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-3 col-lg-3 col-12 control-label" for="name1">E-mail Address</label>
                                            <div class="col-md-9 col-lg-9 col-12">
                                                <input id="name1" name="name" type="text" placeholder="Enter your Email" class="form-control"></div>
                                        </div>
                                    </div>
                                    <!-- Email input-->
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-3 col-lg-3 col-12 control-label" for="password">Password</label>
                                            <div class="col-md-9 col-12 col-lg-9">
                                                <input id="password" name="password" type="password" placeholder="Enter your Password" class="form-control"></div>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheckin">
                                            <label class="custom-control-label" for="customCheckin">Stay signed in</label>
                                        </div>
                                    </div>

                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="row my-2">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9 col-lg-9 col-12">
                                                <button type="submit" class="btn btn-responsive btn-info">Sign in</button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <!--panel body ends--> </div>
                </div>
                <!--input form starts-->
                <div class="my-3">
                    <div class="card p-0" id="hidepanel5">
                        <div class="card-header bg-warning text-white">
                            <h3 class="card-title d-inline">
                                Form Inputs
                            </h3>
                            <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                        </div>
                        <div class="card-body">
                            <form role="form">
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="User name"></div>
                                <div class="form-group input-group">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text image_radius">.00</span>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                           <i class="fas fa-euro-sign"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Font Awesome Icon"></div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text Form image_radius">.00</span>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-btn input-group-append">
                                            <button class="btn btn-default input-group-text image_radius" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail border" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                    <div>
                                            <span class="btn btn-default btn-file px-0">
                                                <span class="fileinput-new btn btn-secondary ">Select image</span>
                                                <span class="fileinput-exists btn btn-secondary">Change</span>
                                                <input type="file" name="..."></span>
                                        <a href="#" class="btn btn-secondary fileinput-exists color_a" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--md-6 ends-->
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <!--md-6 starts-->
                <!--form control starts-->
                <div class="card p-0" id="hidepanel6">
                    <div class="card-header bg-success text-white">
                        <h3 class="card-title d-inline text-white">
                            Form Controls
                        </h3>
                        <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <form role="form" id="form_controls">
                            <div class="form-group">
                                <label for="input">Text Input</label>
                                <input class="form-control" id="input">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label for="input2">Text Input with Placeholder</label>
                                <input class="form-control" placeholder="Enter text" id="input2"></div>
                            <div class="form-group">
                                <label>Static Control</label>
                                <p class="form-control-static">email@example.com</p>
                            </div>
                            <div class="form-group">
                                <label for="area">Text area</label>
                                <textarea class="form-control resize_vertical" id="area" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Checkboxes</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Laravel</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Html</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">Javascript</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mr-30">Inline Checkboxes</label>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="incustomCheck1">
                                    <label class="custom-control-label" for="incustomCheck1">Php</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="incustomCheck2">
                                    <label class="custom-control-label" for="incustomCheck2">Bootstrap</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="incustomCheck3">
                                    <label class="custom-control-label" for="incustomCheck3">Jquery</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Radio Buttons</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Home</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Calender</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Contact</label>
                                </div>

                                {{--<div class="radio">--}}
                                    {{--<label>--}}
                                        {{--<input type="radio" name="optionsRadios" class="custom-radio" id="optionsRadios3" value="option3"> Radio 3</label>--}}
                                {{--</div>--}}
                            </div>
                            <div class="form-group">
                                <label class="mr-30">Inline Radio Buttons</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="incustomRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="incustomRadio1">Excellent</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="incustomRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="incustomRadio2">Good</label>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="select1">Select</label>
                                <select class="form-control" id="select1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="multi">Multiple Selects</label>
                                <select multiple class="form-control" id="multi">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="multi">Custom Selects</label>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="multi">Custom File Input</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-responsive btn-secondary">Submit Button</button>
                            <button type="reset" class="btn btn-responsive btn-secondary" id="reset">Reset Button</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6 col-12 my-3">
            <div class="card p-0">
            <div class="card-header bg-danger text-white">
                <h3 class="card-title d-inline text-white">
                    Validation State
                </h3>
                <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
            </div>
                <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationServer01">First name</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationServer02">Last name</label>
                        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationServerUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationServer03">City</label>
                        <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationServer04">State</label>
                        <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationServer05">Zip</label>
                        <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                        <label class="form-check-label" for="invalidCheck3">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
                </div>
            </div>
            </div>
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <div class="card p-0" id="hidepanel3">
                    <div class="card-header bg-secondary ">
                        <h3 class="card-title d-inline">
                            Disabled Fieldsets
                        </h3>
                        <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <form role="form">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled input</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled></div>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control" disabled>
                                        <option disabled>Disabled select</option>
                                    </select>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="disdefaultCheck" disabled>
                                    <label class="form-check-label" for="disdefaultCheck">
                                        Disabled checkbox
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="disexampleRadios" value="option3" disabled>
                                    <label class="form-check-label" for="disexampleRadios">
                                        Disabled radio
                                    </label>
                                </div>
                                {{--<div class="custom-control custom-checkbox">--}}
                                    {{--<input type="checkbox" class="custom-control-input" id="customCheckdisable">--}}
                                    {{--<label class="custom-control-label text-light" for="customCheckdisable">&ensp;Disabled Custom Checkbox</label>--}}
                                {{--</div>--}}

                                {{--<div class="custom-control custom-radio">--}}
                                    {{--<input type="radio" name="radioDisabled" id="customRadioDisabled2" class="custom-control-input" disabled>--}}
                                    {{--<label class="custom-control-label" for="customRadioDisabled2">Disabled Custom radio</label>--}}
                                {{--</div>--}}
                                <button type="submit" class="btn btn-responsive my-2 btn-secondary">Disabled Button</button>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="card p-0" id="hidepanel2">
                    <div class="card-header bg-success text-white">
                        <h3 class="card-title d-inline">
                            Basic Form With File
                        </h3>
                        <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="#">
                            <!-- CSRF Token -->
                            <!-- Name input-->
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="name122">Name</label>
                                    <div class="col-md-9 col-lg-9 col-12">
                                        <input id="name122" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                </div>
                            </div>
                            <!-- Email input-->
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="email1">Your E-mail</label>
                                    <div class="col-md-9 col-lg-9 col-12">
                                        <input id="email1" name="email" type="text" placeholder="Your email" class="form-control"></div>
                                </div>
                            </div>
                            <!-- Message body -->
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="message1">Your message</label>
                                    <div class="col-md-9 col-lg-9 col-12">
                                        <textarea class="form-control resize_vertical" id="message1" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                                <div class="form-group">
                                    <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="exampleFormControlFile1">Example File</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                </div>


                            <!-- Form actions -->
                            <div class="form-position">
                                <div class="row">
                                    <div class="col-md-12  col-sm-12 col-12  col-lg-12 text-right">
                                        <button type="submit" class="btn btn-responsive btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>



    </section>



@stop
@section('footer_scripts')
    <!--   page level js ----------->
    <script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('js/pages/formlayout.js') }}"></script>
    <!-- end of page level js -->
@stop
