@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Pagination @parent
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
            <h1>Pagination</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pagination</li>
            </ol>
        </div>
        <div class="separator-breadcrumb border-top"></div>


    </section>
    <!-- content start-->
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4 col-12">
                <div class="card">
                    <div class="card-header"><h5>Basic Pagination</h5>
                        <p>Default bordered pagination</p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 col-12">
                <div class="card">
                    <div class="card-header"><h5>Pagination with Icons</h5>
                        <p>Use of Pagination with icons</p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 col-12">
                <div class="card">
                    <div class="card-header"><h5>Disabled and active states</h5>
                        <p>Use of Disabled and active Paginations</p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        {{--<div class="row">--}}
            <div class="col-md-6 col-lg-6 col-xl-4 col-12">
                <div class="card">
                    <div class="card-header"><h5>Left Position</h5>
                        <p>Left aligned Pagination</p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 col-12">
                <div class="card">
                    <div class="card-header"><h5>Center Position</h5>
                        <p>Center aligned Pagination</p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 col-12">
                <div class="card">
                    <div class="card-header"><h5>Right Position</h5>
                        <p>Right aligned Pagination</p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>



        {{--</div>--}}
        {{--<div class="row">--}}
            <div class="col-md-6 col-lg-6 col-xl-4 col-12">
                <div class="card">
                    <div class="card-header"><h5>Pagination Sizing</h5>
                        <p> Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="...">
                            <ul class="pagination pagination-lg">
                                <li class="page-item active" aria-current="page">
      <span class="page-link">
        1
        <span class="sr-only">(current)</span>
      </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>
                        <nav class="mt-25" aria-label="...">
                            <ul class="pagination pagination-sm">
                                <li class="page-item active" aria-current="page">
                                      <span class="page-link">
                                        1
                                        <span class="sr-only">(current)</span>
                                      </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>

        {{--</div>--}}
        </div>
    </section>
@stop

@section('footer_scripts')

@stop
