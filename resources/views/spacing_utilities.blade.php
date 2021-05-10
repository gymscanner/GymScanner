@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Typography @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->


    <!--end of page vendors -->
@stop
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Spacing Utilities</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Spacing Utilities</li>
            </ol>
        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>
    <!-- /.content -->
    <section class="content typography">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card">
                    <div class="row">
                        <div class=" col-12">
                            <h4 class="card-header px-0">Padding and margin classes</h4>
                            <p>Assign <code>margin</code> or <code>padding</code> to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. It uses Bootstrap 4 spacing format of <code>{property}{sides}-{size}</code>. Available sizes can be any of:</p>
                            <ul class="ul-tag">
                                <li>4 5 8 10 12 15 16 20 24 25 30 35 40 45 50 60 70 80 90 100</li>
                                <li>120 140 150 160 180 200</li>
                                <li>250 300</li>
                            </ul>

                        </div>
                        <div class="col-md-6 col-12">
                            <h4 class="card-header">Padding classes
                            </h4>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="border-bottom-0">Class name</th>
                                        <th class="border-bottom-0">Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.pt-40</code></td>
                                        <td>padding-top: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.pb-40</code></td>
                                        <td>padding-bottom: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.pl-40</code></td>
                                        <td>padding-left: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.pr-40</code></td>
                                        <td>padding-right: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.px-40</code></td>
                                        <td>padding-left: 40px<br>padding-right: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.py-40</code></td>
                                        <td>padding-top: 40px<br>padding-bottom: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.p-40</code></td>
                                        <td>padding: 40px</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <h4 class="card-header">Margin classes
                            </h4>
                            <div class="card-body">
                                <table class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th class="border-bottom-0">Class name</th>
                                        <th class="border-bottom-0">Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.mt-40</code></td>
                                        <td>margin-top: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.mb-40</code></td>
                                        <td>margin-bottom: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.ml-40</code></td>
                                        <td>margin-left: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.mr-40</code></td>
                                        <td>margin-right: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.mx-40</code></td>
                                        <td>margin-left: 40px<br>margin-right: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.my-40</code></td>
                                        <td>margin-top: 40px<br>margin-bottom: 40px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.m-40</code></td>
                                        <td>margin: 40px</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>



                    </div>
                </div>


            </div>

        </div>

    </section>

@stop
@section('footer_scripts')
    <!--   page level js ----------->

    <!-- end of page level js -->
@stop
