@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Cards @parent
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
            <h1>Dropdowns</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dropdowns</li>
            </ol>
        </div>
        <div class="separator-breadcrumb border-top"></div>




    </section>
    <!-- /.content -->
    <!-- /.content -->
    <section class="content">
        <div class="row">
            <div class="col-12 mb-20">
                <h5>Default Dropdowns</h5>
                <p>Trigger dropdown menus of the elements by adding classes to the parent element.   </p>
                <ul>
                    <li><code>.dropdown</code></li>
                    <li><code>.dropup</code></li>
                    <li><code>.dropleft</code></li>
                    <li><code>.dropright</code></li>
                </ul>

            </div>
        </div>
        <div class="row mb-150">
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group ">
                    <button type="button" class="btn btn-primary w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Primary
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group ">
                    <button type="button" class="btn btn-secondary  w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Secondary
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group ">
                    <button type="button" class="btn btn-success  w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Success
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group ">
                    <button type="button" class="btn btn-info  w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Info
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group ">
                    <button type="button" class="btn btn-warning w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Warning
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group ">
                    <button type="button" class="btn btn-danger  w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Danger
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12 mb-20">
                <h5>DropUp</h5>
                <p>Dropup buttons with different bootstrap variant classes</p>

            </div>
        </div>

        <div class="row mb-150">
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group dropup">
                    <button type="button" class="btn btn-primary w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Primary
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group dropup">
                    <button type="button" class="btn btn-secondary  w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Secondary
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group dropup">
                    <button type="button" class="btn btn-success  w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Success
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group dropup">
                    <button type="button" class="btn btn-info  w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Info
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group dropup">
                    <button type="button" class="btn btn-warning  w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Warning
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group dropup">
                    <button type="button" class="btn btn-danger  w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Danger
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-12 mb-20">
                <h5>Split Dropdowns</h5>
                <p>Split dropdown buttons with different bootstrap variant classes </p>
            </div>
        </div>

<div class="row dropdown-page">
        <div class="col-md-4 col-lg-3 col-sm-4 col-12 mt-15 col-xl-2 ">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary w-140px">Primary</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
        </div>
            <div class="col-md-4 col-lg-3 col-sm-4 col-12 mt-15 col-xl-2">
                <div class="btn-group ">
                    <button type="button" class="btn btn-secondary w-140px">Secondary</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-4 col-12 mt-15 col-xl-2">
                <div class="btn-group ">
                    <button type="button" class="btn btn-success w-140px">Success</button>
                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-4 col-12 mt-15 col-xl-2">
                <div class="btn-group ">
                    <button type="button" class="btn btn-info w-140px">Info</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-4 col-12 mt-15 col-xl-2">
                <div class="btn-group ">
                    <button type="button" class="btn btn-warning w-140px">Warning</button>
                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-4 col-12 mt-15 col-xl-2">
                <div class="btn-group ">
                    <button type="button" class="btn btn-danger w-140px">Danger</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">See All</a>
                    </div>
                </div>
                </div>
            </div>

        <div class="row mt-30">
            <div class="col-12 mb-20">
                <h5>Dropdowns Sizing</h5>
            </div>
        </div>

        <div class="row dropdown-page">
            <!-- Large button groups (default and split) -->
            <div class="col-md-3 col-12 col-sm-6">
                <div class="btn-group">
                    <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Large button
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                    </div>
                </div>
            </div>
            <!-- Small button groups (default and split) -->
            <div class="col-md-3 col-12 col-sm-6 align-self-lg-center">
                <div class="btn-group">
                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Small button
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 col-sm-6">
                <div class="btn-group">
                    <button class="btn btn-primary btn-lg" type="button">
                        Large split button
                    </button>
                    <button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-12 col-sm-6 align-self-lg-center">
                <div class="btn-group">
                    <button class="btn btn-primary btn-sm" type="button">
                        Small split button
                    </button>
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Menu Item 1</a>
                        <a class="dropdown-item" href="#">Menu Item 2</a>
                        <a class="dropdown-item" href="#">Menu Item 3</a>
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
