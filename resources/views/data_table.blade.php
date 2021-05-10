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
        <h1>Advanced Data Tables</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Datatables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Advanced Data Tables</li>
        </ol>
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
                        Child rows
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>

                <div class="card-body table-responsive-lg table-responsive-md table-responsive-sm">
                    <table class="table table-bordered width100" id="table2">
                        <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    JacobThornton
                                </td>
                                <td>
                                    JacobThornton@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>11.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>12.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>13.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>14.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>15.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>16.</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>
                                <td>17.</td>
                                <td>Larryss</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12 my-3">
            <div class="card panel-info filterable">
                <div class="card-header border border-primary text-primary border-top-0 border-left-0 border-right-0">
                    <h3 class="card-title text-primary d-inline">
                        Table with Buttons
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                        <i class="fa fa-times removepanel clickable"></i>
                    </span>
                </div>

                <div class="card-body table-responsive-lg table-responsive-md table-responsive-sm">
                    <table class="table  table-bordered" id="table1" width="100%">
                        <thead>
                            <tr>

                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User Name</th>
                                <th>
                                    User E-mail
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Markotto</td>
                                <td>
                                    Markotto@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    JacobThornton
                                </td>
                                <td>
                                    JacobThornton@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Markotto</td>
                                <td>
                                    Markotto@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    JacobThornton
                                </td>
                                <td>
                                    JacobThornton@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Markotto</td>
                                <td>
                                    Markotto@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    JacobThornton
                                </td>
                                <td>
                                    JacobThornton@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Markotto</td>
                                <td>
                                    Markotto@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    JacobThornton
                                </td>
                                <td>
                                    JacobThornton@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Markotto</td>
                                <td>
                                    Markotto@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    JacobThornton
                                </td>
                                <td>
                                    JacobThornton@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Markotto</td>
                                <td>
                                    Markotto@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    JacobThornton
                                </td>
                                <td>
                                    JacobThornton@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Markotto</td>
                                <td>
                                    Markotto@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    JacobThornton
                                </td>
                                <td>
                                    JacobThornton@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Markotto</td>
                                <td>
                                    Markotto@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    JacobThornton
                                </td>
                                <td>
                                    JacobThornton@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Markotto</td>
                                <td>
                                    Markotto@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    JacobThornton
                                </td>
                                <td>
                                    JacobThornton@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
                            <tr>

                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                    Larrythe Bird
                                </td>
                                <td>
                                    LarrytheBird@test.com
                                </td>
                            </tr>
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
