@extends('layouts.default')
{{-- Page title --}}
@section('title')
SweetAlert @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('vendors/sweetalert/css/sweetalert2.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}" />


<link href="{{ asset('css/pages.css')}}" rel="stylesheet">

<!--end of page vendors -->
@stop
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>SweetAlert</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">SweetAlert</li>
        </ol>
    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content">

    <div class="row">

        <div class="col-md-6 col-lg-3 col-12   mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="simple">Basic Alert</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12   mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="description">Description Alert</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12 mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="questionalert">Question Alert</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12  mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="basic">Success Alert</button>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 col-12  mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="customposition">Custom Position</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12  mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="warningalert">Warning Alert</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12  mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="htmlalert">HTML Tag</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12  mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="customalert">Custom Alert</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12  mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="animatealert">Animate Alert</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12  mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="autoclose">Autoclose</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12  mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="ajaxrequest">Ajax Request</button>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-12  mb-30">
            <div class="text-center bg-white basic">
                <button class="btn btn-primary" id="Chaining">Chaining Modal</button>
            </div>
        </div>
    </div>
</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script src="{{ asset('vendors/sweetalert/js/sweetalert2.js') }}" type="text/javascript"></script>


<script src="{{ asset('js/pages/custom_sweetalert.js') }}" type="text/javascript"></script>
<!-- end of page level js -->
@stop
