@extends('layouts.default')
{{-- Page title --}}
@section('title')
Form Layouts @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />
<!--end of page vendors -->
@stop
@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">

    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Form Layout</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
        </ol>
    </div>
    <div class="separator-breadcrumb border-top"></div>


</section>

<!-- content start-->
<section class="content">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card p-0">
                <div class="card-header border border-primary text-primary border-top-0 border-left-0 border-right-0">
                    <h3 class="card-title text-primary d-inline">
                        Horizontal Layout
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <p>A form control layout using row to create horizontal alignment.</p>
                    <div class="row row-xs">
                        <div class="col-md-5 col-lg-4">
                            <input type="text" class="form-control" placeholder="Enter your username">
                        </div>
                        <div class="col-md-5 col-lg-4 mt-3 mt-md-0">
                            <input type="password" class="form-control" placeholder="Enter your password">
                        </div>
                        <div class="col-md-2 col-lg-3 mt-3 mt-md-0">
                            <button class="btn btn btn-outline-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-0">
                <div class="card-header border border-success text-success border-top-0 border-left-0 border-right-0">
                    <h3 class="card-title d-inline text-success">
                        Vertical Layout
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <p>A form control layout using flex to create verticle alignment.</p>
                    <div class="d-flex flex-column">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter your password">
                        </div>
                        <button class="btn btn-outline-success pd-x-20">Sign In</button>
                    </div>
                </div>
            </div>

            <div class="card p-0">
                <div class="card-header border border-warning text-warning border-top-0 border-left-0 border-right-0">
                    <h3 class="card-title d-inline text-warning">
                        Left Label Alignment
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <p>A form control layout using row with left label alignment.</p>
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-md-3 col-form-label">Email</label>
                            <div class="col-sm-10 col-md-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-md-3 col-form-label">Password</label>
                            <div class="col-sm-10 col-md-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <div class="col-form-label col-sm-2 col-md-3 pt-0">Radios</div>
                                <div class="col-sm-10 col-md-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                            value="option1" checked="">
                                        <label class="form-check-label" for="gridRadios1">
                                            First radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                            value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Second radio
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                            value="option3" disabled="">
                                        <label class="form-check-label" for="gridRadios3">
                                            Third disabled radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <div class="col-sm-2 col-md-3">Checkbox</div>
                            <div class="col-sm-10 col-md-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Example checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-outline-warning">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card p-0">
                <div class="card-header border border-info text-info border-top-0 border-left-0 border-right-0">
                    <h3 class="card-title d-inline text-info">
                        Creating Button Dropdowns
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-6 col-sm-6 col-lg-6 btn_margin_top">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Dropdown</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                </div>


                            </div>
                            <div class="col-12 col-md-6 col-sm-6 col-lg-6 btn_margin_top">
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                    <div class="input-group-append">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Dropdown</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            <div class="input-group-append">
                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-6 col-md-12">

            <div class="card p-0 sizing">
                <div class="card-header text-light border border-light border-top-0 border-left-0 border-right-0">
                    <h3 class="card-title d-inline text-light">
                        Height Sizing of Input Groups
                    </h3>
                    <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="im im-icon-Business-Man"></i>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-append ">
                                        <span class="input-group-text">

                                            <input type="radio" aria-label="Radio button for following text input">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                <div class="input-group">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="im im-icon-Business-Man"></i>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                            <div class="icheckbox_minimal-blue" style="position: relative;"><input
                                                    type="checkbox" class="square-blue"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins
                                                    class="iCheck-helper"
                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </span>

                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <input type="radio" aria-label="Radio button for following text input">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="im im-icon-Business-Man"></i>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 btn_margin_top">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <input type="radio" aria-label="Radio button for following text input">
                                        </span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card p-0">
                <div class="card-header border border-dark text-dark border-top-0 border-left-0 border-right-0 ">
                    <h3 class="card-title d-inline ">
                        Grid sizing of Inputs, Textareas and Select Boxes
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-3 col-12 mb-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4 col-12 mb-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-5 col-12 mb-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3 col-12 mb-4">
                                <textarea class="form-control resize_vertical"></textarea>
                            </div>
                            <div class="col-md-4 col-12 mb-4">
                                <textarea class="form-control resize_vertical"></textarea>
                            </div>
                            <div class="col-md-5 col-12 mb-4">
                                <textarea class="form-control resize_vertical"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3 col-12 mb-4">
                                <select class="form-control">
                                    <option>Select</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-12 mb-4">
                                <select class="form-control">
                                    <option>Select</option>
                                </select>
                            </div>
                            <div class="col-md-5 col-12 mb-4">
                                <select class="form-control">
                                    <option>Select</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card ">

                <div class="card-header border border-primary text-primary border-top-0 border-left-0 border-right-0 ">
                    <h3 class="card-title d-inline text-primary">
                        Static Form Control
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="row">
                                <label for="inputEmail" class="control-label col-3">Email</label>
                                <!--<label for="inputEmail" class="control-label col-2 visible-xs">Mail</label>-->
                                <div class="col-9">
                                    <p class="form-control-static">harrypotter@mail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="staticPassword" class="control-label col-3 hidden-xs">Password</label>
                                <!--<label for="staticPassword" class="control-label visible-xs  hidden-lg hidden-sm hidden-md col-xs-2">Pwd</label>-->
                                <div class="col-9">
                                    <input type="password" class="form-control" id="staticPassword"
                                        placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-offset-2 custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3"> Remember me</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class=" col-12">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card ">

                <div class="card-header border border-primary text-primary border-top-0 border-left-0 border-right-0 ">
                    <h3 class="card-title d-inline text-primary">
                        Multiple Addons
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form class="form-horizontal">

                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                                <input type="text" class="form-control"
                                    aria-label="Dollar amount (with dot and two decimal places)">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control"
                                    aria-label="Dollar amount (with dot and two decimal places)">
                                <div class="input-group-append">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">
                                        <input type="checkbox" name="checkbox">
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" value=100
                                    aria-describedby="basic-addon3">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>



        </div>
        <div class="col-12">
            <div class="card p-0">
                <div class="card-header border border-danger text-danger border-top-0 border-left-0 border-right-0">
                    <h3 class="card-title d-inline text-danger">
                        Form Columns Readonly
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="#" class="form-horizontal">
                        <div class="form-body">
                            <h3>Personal</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">First Name :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">Jenny</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Last Name :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">Kerry</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Email :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">
                                                    <a href="mailto:whisfat1935@jourrapide.com">Jenny321@example.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Gender :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">Female</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Birthday :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">10.11.1980</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Phone :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">321-333-5432</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Address</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Address 1 :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">1219 Quiet Subdivision</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row"> <label class="col-sm-4 control-label">Address 2 :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">3536 Petunia Way</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">States :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">Canada</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">City :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">Canada</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Post Code :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">7987678</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-4 control-label">Conditions :</label>
                                            <div class="col-sm-8">
                                                <p class="form-control-static">True</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>





</section>
<!-- content end-->


@stop
@section('footer_scripts')
<!--   page level js ----------->
<script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>


<!-- end of page level js -->
@stop
