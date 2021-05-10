@extends('layouts.default')
{{-- Page title --}}
@section('title')
Alerts @parent
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
        <h1>Alerts</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Alerts</li>
        </ol>
    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content general-components">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Default Alert</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="alert alert-primary fade show" role="alert">
                                <strong>alert!</strong> <span>information.</span>
                            </div>
                            <div class="row">
                                <div class="col-12 card-class">
                                    <span data-color="alert-primary" class="color1 active bg-primary  d-inline-block"><i
                                            class="im im-icon-Yes"></i></span>
                                    <span data-color="alert-success" class="color1  bg-success  d-inline-block"><i
                                            class="im im-icon-Yes"></i></span>
                                    <span data-color="alert-warning" class="color1 bg-warning  d-inline-block"><i
                                            class="im im-icon-Yes"></i></span>
                                    <span data-color="alert-info" class="color1  bg-info  d-inline-block"><i
                                            class="im im-icon-Yes"></i></span>
                                    <span data-color="alert-danger" class="color1  bg-danger  d-inline-block"><i
                                            class="im im-icon-Yes"></i></span>
                                    <span data-color="alert-light" class="color1  bg-light  d-inline-block"><i
                                            class="im im-icon-Yes"></i></span>
                                    <span data-color="alert-dark" class="color1  bg-dark  d-inline-block"><i
                                            class="im im-icon-Yes"></i></span>
                                    <span data-color="alert-secondary"
                                        class="color1  bg-secondary  border-secondary d-inline-block"><i
                                            class="im im-icon-Yes"></i></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 alert-class mt-3"><span>add class="alert-primary"</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h5>Dismissable Alert</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisici laboriosam minus molestiae nam, placeat
                        quidem quos repellat rerum similique tempore voluptatem?</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <strong>Secondary!</strong> addClass <span>&ensp;alert-secondary</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <strong>Primary!</strong> addClass <span>&ensp;alert-primary</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> addClass <span>&ensp;alert-success</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong> addClass <span>&ensp;alert-warning</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Info!</strong> addClass <span>&ensp;alert-info</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                                <strong>Danger!</strong> addClass <span>&ensp;alert-danger</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-light  alert-dismissible fade show" role="alert">
                                <strong>Light!</strong> addClass <span>&ensp;alert-light</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-dark  alert-dismissible fade show" role="alert">
                                <strong>Dark!</strong> addClass <span>&ensp;alert-dark</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h5>Outline Alert</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisici laboriosam minus molestiae nam, placeat
                        quidem quos repellat rerum similique tempore voluptatem?</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="alert alert-secondary alert-outline-secondary" role="alert">
                                <strong>Secondary!</strong> addClass <span>&ensp;alert-secondary</span>.

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-primary alert-outline-primary " role="alert">
                                <strong>Primary!</strong> addClass <span>&ensp;alert-primary</span>.

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-success  alert-outline-success" role="alert">
                                <strong>Success!</strong> addClass <span>&ensp;alert-success</span>.

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-warning  alert-outline-warning " role="alert">
                                <strong>Warning!</strong> addClass <span>&ensp;alert-warning</span>.

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-info  alert-outline-info" role="alert">
                                <strong>Info!</strong> addClass <span>&ensp;alert-info</span>.

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-danger  alert-outline-danger" role="alert">
                                <strong>Danger!</strong> addClass <span>&ensp;alert-danger</span>.

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-light  alert-outline-light " role="alert">
                                <strong>Light!</strong> addClass <span>&ensp;alert-light</span>.

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-dark  alert-outline-dark alert-dismissible fade show" role="alert">
                                <strong>Dark!</strong> addClass <span>&ensp;alert-dark</span>.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h5>Outline Dismissable Alert</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisici laboriosam minus molestiae nam, placeat
                        quidem quos repellat rerum similique tempore voluptatem?</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="alert alert-secondary alert-outline-secondary alert-dismissible fade show"
                                role="alert">
                                <strong>Secondary!</strong> addClass <span>&ensp;alert-outline-secondary</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-primary alert-outline-primary alert-dismissible fade show"
                                role="alert">
                                <strong>Primary!</strong> addClass <span>&ensp;alert-outline-primary</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-success  alert-outline-success alert-dismissible fade show"
                                role="alert">
                                <strong>Success!</strong> addClass <span>&ensp;alert-outline-success</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-warning  alert-outline-warning alert-dismissible fade show"
                                role="alert">
                                <strong>Warning!</strong> addClass <span>&ensp;alert-outline-warning</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-info  alert-outline-info alert-dismissible fade show" role="alert">
                                <strong>Info!</strong> addClass <span>&ensp;alert-outline-info</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-danger  alert-outline-danger alert-dismissible fade show"
                                role="alert">
                                <strong>Danger!</strong> addClass <span>&ensp;alert-outline-danger</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-light  alert-outline-light alert-dismissible fade show"
                                role="alert">
                                <strong>Light!</strong> addClass <span>&ensp;alert-outline-light</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-dark  alert-outline-dark alert-dismissible fade show" role="alert">
                                <strong>Dark!</strong> addClass <span>&ensp;alert-outline-dark</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">

            <div class="card">
                <h5 class="card-header">Dissmissable Alerts with Icons</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <span class="im im-icon-Information mr-3 icon"></span><span
                                    class="alert-text"><strong>Secondary!</strong> addClass
                                    &ensp;alert-secondary</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <span class="im im-icon-Information mr-3 icon"></span>
                                <span class="alert-text"><strong>Primary!</strong> addClass &ensp;alert-primary</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="im im-icon-Information mr-3 icon"></span><span
                                    class="alert-text"><strong>Success!</strong> addClass &ensp;alert-success</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <span class="im im-icon-Information mr-3 icon"></span><span
                                    class="alert-text"><strong>Warning!</strong> addClass &ensp;alert-warning</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <span class="im im-icon-Information mr-3 icon"></span><span
                                    class="alert-text"><strong>Info!</strong> addClass &ensp;alert-info</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="im im-icon-Information mr-3 icon"></span><span
                                    class="alert-text"><strong>Danger!</strong> addClass &ensp;alert-danger</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-light alert-dismissible fade show" role="alert">
                                <span class="im im-icon-Information mr-3 icon"></span><span
                                    class="alert-text"><strong>Light!</strong> addClass &ensp;alert-light</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <span class="im im-icon-Information mr-3 icon"></span><span
                                    class="alert-text"><strong>Dark!</strong> addClass &ensp;alert-dark</span>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
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
<script>

</script>
<!-- end of page level js -->
@stop
