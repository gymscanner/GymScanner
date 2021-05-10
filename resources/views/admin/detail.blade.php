@extends('layouts.default')
{{-- Page title --}}
@section('title')
Dashboard @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('css/pages.css')}}" rel="stylesheet">


<!--end of page vendors -->
@stop
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Vender Information</h1>

    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content">
    <div class="row">

        <!-- avatar -->
        <div class="col-lg-2 col-md-4"></div>
        <div class="col-lg-8 col-md-16">
            <form>
                <div class="picture-container">
                    <div class="picture">
                        @if($avatar)
                        <img src="{{ asset($avatar->avatar)}}" class="picture-src" id="wizardPicturePreview" title="">
                        @else
                        @endif
                    </div>
                    <h6 class="">Logo</h6>
                </div>
                <button type="submit" style="top:-300px; position:absolute" id="avatar" ></button>
            </form>
        </div>
        <div class="col-lg-2 col-md-4"></div>


        <!-- company information -->
        <div class="col-lg-2 col-md-4"></div>
        <div class="col-lg-8 col-md-16">
            <div class="card">
                <div class="card-header bg-secondary text-white ">
                    <h3 class="card-title d-inline">
                        Company Information
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form>
                        @csrf
                        <div class="form-body">
                            <!-- gym name -->
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-md-6 control-label">
                                       GYM Name
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <p>{{($company_data)?$company_data->company_name:''}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- country -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-6 control-label">
                                        Country
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <p>{{($company_data)?$company_data->country:''}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- location -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-6 control-label">
                                        Location
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <p>{{($company_data)?$company_data->address:''}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- email -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-6 control-label">
                                        Email
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <p>{{($company_data)?$company_data->email:''}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- website -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-6 control-label">
                                        WEBSITE
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <p>{{($company_data)?$company_data->website:''}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CONTACT PERSON -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-6 control-label">
                                        CONTACT PERSON
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <p>{{($company_data)?$company_data->contact:''}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- mobile -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputnumber3" class="col-md-6 control-label">
                                        MOBILE
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <p>{{($company_data)?$company_data->phone_number:''}}"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-sm btn-primary"><a href="{{ route('admin.index')}}">Back</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4"></div>
        <!-- else information -->
        <!-- else information -->
        <div class="col-lg-2 col-md-4"></div>

        <div class="col-lg-2 col-md-4"></div>
    </div>
</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script language="javascript" type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>
<script>
    function avatar(){
        alert("hello");
        document.getElementById("avatar").click();
    }
</script>
<!-- end of page level js -->
@stop
