@extends('layouts.default')
{{-- Page title --}}
@section('title')
Form Examples @parent
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
        <h1>Form Examples</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Examples</li>
        </ol>
    </div>
    <div class="separator-breadcrumb border-top"></div>


</section>

<!-- content start-->
<section class="content">
    <div class="row ">
        <div class="col-lg-6 col-md-12 col-12">
            <div class="card">
                <div class="card-header bg-primary text-white ">
                    <h3 class="card-title d-inline">
                        Form Action on Top
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>

                <div class="card-body">
                    <form action="#" class="form-horizontal">
                        <div class="form-position">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9 ml-auto  mb-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                    &nbsp;
                                    <button type="button" class="btn btn-sm btn-danger">Cancel</button>
                                    &nbsp;
                                    <input type="reset"
                                        class="btn btn-default d-none d-lg-inline-block d-sm-inline-block d-md-inline-block"
                                        value="Reset">
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername5" class="col-md-3 control-label">
                                        Username
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="im im-icon-Add-User"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Username"
                                                id="inputUsername5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputEmail1" class="col-md-3 control-label">
                                        Email
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Envelope"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Email Address" class="form-control"
                                                id="inputEmail1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label" for="password5">
                                        Password
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fas fa-key"></i>
                                                </span>
                                            </span>
                                            <input type="password" placeholder="Password" class="form-control"
                                                id="password5" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputnumber5" class="col-md-3 control-label">
                                        Phone Number
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Phone-Wifi"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Phone Number" class="form-control"
                                                id="inputnumber5" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress1" class="col-md-3 control-label">
                                        Address
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Address-Book"></i>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" id="inputAddress1"
                                                placeholder=" Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputContent1" class="col-md-3 control-label">Message</label>
                                    <div class="col-md-9">
                                        <textarea id="inputContent1" rows="3"
                                            class="form-control resize_vertical "></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title d-inline">
                        Form Action on Bottom
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="#" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername1" class="col-md-3 control-label">
                                        Username
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="im im-icon-Add-User"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Username"
                                                id="inputUsername1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputEmail2" class="col-md-3 control-label">
                                        Email
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Envelope"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Email Address" class="form-control"
                                                id="inputEmail2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label" for="password1">
                                        Password
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fas fa-key"></i>
                                                </span>
                                            </span>
                                            <input type="password" placeholder="Password" class="form-control"
                                                id="password1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputnumber1" class="col-md-3 control-label">
                                        Phone Number
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Phone-Wifi"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Phone Number" class="form-control"
                                                id="inputnumber1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress2" class="col-md-3 control-label">
                                        Address
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Address-Book"></i>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" id="inputAddress2"
                                                placeholder=" Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputContent2" class="col-md-3 control-label">Message</label>
                                    <div class="col-md-9">
                                        <textarea id="inputContent2" rows="3"
                                            class="form-control resize_vertical "></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9 ml-auto  mb-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                    &nbsp;
                                    <button type="button" class="btn btn-sm btn-danger">Cancel</button>
                                    &nbsp;
                                    <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-12 col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white ">
                    <h3 class="card-title d-inline">
                        Form Action on Top & Bottom
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="#" class="form-horizontal">
                        <div class="form-position row">
                            <div class="col-md-offset-3 col-md-9 ml-auto mb-3">
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                &nbsp;
                                <button type="button" class="btn btn-sm btn-danger">Cancel</button>
                                &nbsp;
                                <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername2" class="col-md-3 control-label">
                                        Username
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="im im-icon-Add-User"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Username"
                                                id="inputUsername2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputEmail3" class="col-md-3 control-label">
                                        Email
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Envelope"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Email Address" class="form-control"
                                                id="inputEmail3" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label" for="password2">
                                        Password
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fas fa-key"></i>
                                                </span>
                                            </span>
                                            <input type="password" placeholder="Password" class="form-control"
                                                id="password2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputnumber2" class="col-md-3 control-label">
                                        Phone Number
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Phone-Wifi"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Phone Number" class="form-control"
                                                id="inputnumber2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress3" class="col-md-3 control-label">
                                        Address
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Address-Book"></i>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" id="inputAddress3"
                                                placeholder=" Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputContent3" class="col-md-3 control-label">Message</label>
                                    <div class="col-md-9">
                                        <textarea id="inputContent3" rows="3"
                                            class="form-control resize_vertical "></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-position row">
                            <div class="col-md-offset-3 col-md-9 ml-auto mb-3">
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                &nbsp;
                                <button type="button" class="btn btn-sm btn-danger">Cancel</button>
                                &nbsp;
                                <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6 col-md-12 col-12">
            <div class="card">
                <div class="card-header bg-primary text-white ">
                    <h3 class="card-title d-inline">
                        Left Aligned
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="form-position mb-3">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            &nbsp;
                            <button type="button" class="btn btn-sm btn-danger">Cancel</button>
                            &nbsp;
                            <input type="reset" class="btn btn-default d-none d-sm-inline-block" value="Reset">
                        </div>
                        <div class="form-body">
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-md-3 control-label">
                                        Username
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="im im-icon-Add-User"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Username"
                                                id="inputUsername3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputEmail4" class="col-md-3 control-label">
                                        Email
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Envelope"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Email Address" class="form-control"
                                                id="inputEmail4" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label" for="password3">
                                        Password
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fas fa-key"></i>
                                                </span>
                                            </span>
                                            <input type="password" placeholder="Password" class="form-control"
                                                id="password3" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputnumber3" class="col-md-3 control-label">
                                        Phone Number
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Phone-Wifi"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Phone Number" class="form-control"
                                                id="inputnumber3" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-3 control-label">
                                        Address
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Address-Book"></i>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" id="inputAddress4"
                                                placeholder=" Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputContent4" class="col-md-3 control-label">Message</label>
                                    <div class="col-md-9">
                                        <textarea id="inputContent4" rows="3"
                                            class="form-control resize_vertical "></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            &nbsp;
                            <button type="button" class="btn btn-sm btn-danger">Cancel</button>
                            &nbsp;
                            <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title d-inline">
                        Right Aligned
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="form-position text-right mb-3">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            &nbsp;
                            <button type="button" class="btn btn-sm btn-danger">Cancel</button>
                            &nbsp;
                            <input type="reset" class="btn btn-default d-none d-sm-inline-block" value="Reset">
                        </div>
                        <div class="form-body">
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername4" class="col-md-3 control-label">
                                        Username
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="im im-icon-Add-User"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Username"
                                                id="inputUsername4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputEmail5" class="col-md-3 control-label">
                                        Email
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Envelope"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Email Address" class="form-control"
                                                id="inputEmail5" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 control-label" for="password4">
                                        Password
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fas fa-key"></i>
                                                </span>
                                            </span>
                                            <input type="password" placeholder="Password" class="form-control"
                                                id="password4" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputnumber4" class="col-md-3 control-label">
                                        Phone Number
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Phone-Wifi"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Phone Number" class="form-control"
                                                id="inputnumber4" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress5" class="col-md-3 control-label">
                                        Address
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Address-Book"></i>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" id="inputAddress5"
                                                placeholder=" Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputContent5" class="col-md-3 control-label">Message</label>
                                    <div class="col-md-9">
                                        <textarea id="inputContent5" rows="3"
                                            class="form-control resize_vertical "></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions text-right ">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            &nbsp;
                            <button type="button" class="btn btn-sm btn-danger">Cancel</button>
                            &nbsp;
                            <input type="reset" class="btn btn-default d-none d-sm-inline-block" value="Reset">
                        </div>
                    </form>
                </div>
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
