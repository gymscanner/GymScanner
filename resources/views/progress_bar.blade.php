@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Progressbar @parent
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
            <h1>Progressbar</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Progressbar</li>
            </ol>
        </div>
        <div class="separator-breadcrumb border-top"></div>


    </section>

    <!-- content start-->
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-12">
                    <div class="card p-0">
                        <div class="card-header bg-white">
                            <h5>Default Progressbar</h5>
                            <p class="card-description">Use class <code>.progress</code> for basic accordion</p>
                        </div>
                        <div class="card-body">
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-6 col-12 mb-20">
                <div class="card mb-0 p-0">
                <div class="card-header bg-white">
                    <h5>Color Progressbar</h5>
                    <p>You can give bootstrap colors to progress bars</p>
                </div>
                <div class="card-body">
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-md-6 col-12">
                                <div class="card p-0">
                                    <div class="card-body">
                                        <h4 class="card-title">Progressbar Striped</h4>
                                        <p>Use class <code>.progress-bar-striped</code></p>
                                        <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

            </div>
            <div class="col-md-6 col-12">
                <div class="card p-0">
                    <div class="card-body">
                        <h4 class="card-title">Striped Animated</h4>
                        <p>Use class<code> .progress-bar-striped progress-bar-animated</code></p>
                        <div class="template-demo">
                            <div class="progress progress-md mb-3">
                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-md mb-3">
                                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-md mb-3">
                                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-md mb-3">
                                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-md mb-3">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-6 col-12">
                <div class="card p-0">
                    <div class="card-body">
                        <h4 class="card-title">With Label</h4>
                        <p>Progress bar with labels</p>
                        <div class="template-demo">
                            <div class="d-flex justify-content-between">
                                <small>Filled percentage</small>
                            </div>
                            <div class="progress  mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <small>Photoshop</small>
                            </div>
                            <div class="progress  mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60% completed</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-12">
                <div class="card p-0">
                    <div class="card-body">
                        <h4 class="card-title">Progressbar Sizes</h4>
                        <p>Add class <code>progress-{size}</code></p>


                            <div class="progress progress-sm" >
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <br>

                            <div class="progress progress-md" >
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <br>

                            <div class="progress progress-lg" >
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <br>

                            <div class="progress progress-xl" >
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                                         </div>
                </div>

            </div>

        </div>




    </section>
    <!-- content end-->


@stop
@section('footer_scripts')

@stop
