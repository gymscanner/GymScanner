@extends('layouts.default')
{{-- Page title --}}
@section('title')
Advanced Data Tables @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{asset('vendors/datatables/css/buttons.bootstrap4.min.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/scroller.bootstrap4.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2.min.css') }}" />--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}" />--}}
<!--end of page vendors -->
@stop
@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">

    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Admin datatable</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>


</section>

<!-- content start-->
<section class="content">
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="card panel-info filterable">
                <div class="card-header border border-primary text-primary border-top-0 border-left-0 border-right-0">
                    <h3 class="card-title text-primary d-inline">
                        Vendors
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>

                <div class="card-body table-responsive-lg table-responsive-md table-responsive-sm">
                    <table class="table  table-bordered" id="table1" width="100%">
                        <thead>
                            <tr>

                                <th>Gym Name</th>
                                <th>Country</th>
                                <th>Location</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Contact Person</th>
                                <th>Mobile</th>
                                <th>detail</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($company as $temp)
                            <tr>
                                <td>{{$temp->company_name}}</td>
                                <td>{{$temp->country}}</td>
                                <td>{{$temp->address}}</td>
                                <td>{{$temp->email}}</td>
                                <td> {{$temp->website}}</td>
                                <td> {{$temp->contact}}</td>
                                <td> {{$temp->phone_number}}</td>
                                <td><a href="{{ route('admin.detail',$temp->user_id)}}"> detail </a></td>
                                <td><a href="{{ route('admin.delete', $temp->user_id)}}"> Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/advanced_table.js') }}"></script>
<!-- end of page level js -->
@stop
