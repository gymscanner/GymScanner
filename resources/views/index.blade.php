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
        <h1>Dashboard</h1>

    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content">
    <div class="row">
        <div class="col-md-6 col-xl-3 col-12 mb-20">
            <div class="  bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Add-Cart im-icon-set float-right bg-primary"></i>
                <h3>35K</h3>
                <p>Number of Sales</p>
                <div class="progress meter mr-15">
                    <div id="progress-primary"
                        class=" progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 mt-3 "><span>Gained: 655</span> <span class="float-right pr-15">Lost: 56</span></p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>
                <h3>10K</h3>
                <p>Page Views</p>
                <div class="progress mr-15">
                    <div id="progress-success"
                        class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 mt-3 "><span>Unique Pageviews: </span> <span class="float-right pr-15">4.7K</span>
                </p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Love-User im-icon-set float-right bg-info"></i>
                <h3>23K</h3>
                <p>Number of Fans</p>
                <div class="progress mr-15">
                    <div id="progress-info" class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <p class="mb-0 mt-3 "><span>Gained: 655</span> <span class="float-right pr-15">Lost: 56</span></p>
            </div>
        </div>


        <div class="col-md-6 col-xl-3 col-12  mb-20">
            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                <i class="im im-icon-Checked-User im-icon-set float-right bg-danger"></i>
                <h3>400</h3>
                <p>Total Actions</p>
                <div class="progress mr-15">
                    <div id="progress-danger" class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <p class="mb-0 mt-3 "><span>To Prev. Period: 655</span> <span class="float-right pr-15">+72%</span>
                </p>
            </div>
        </div>
    </div>


    {{--<div class="col-12">--}}
    <div class="row">
        <div class="col-md-12 col-lg-7 mt-20 col-12 ">
            <div class="dashboard-col">

                <h5 class="card-header">Sales Analysis</h5>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <canvas id="myChart" width="400" height="200"></canvas>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12 col-lg-5 mt-20 col-12 ">
            <div class="dashboard-col">

                <h5 class="card-header">Sales Report</h5>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Names</th>
                                    <th>Daily Sales</th>
                                    <th>Monthly Sales</th>
                                    <th>Yearly Sales</th>
                                </tr>
                                <tr>
                                    <td>Jan</td>
                                    <td>6</td>
                                    <td>180</td>
                                    <td>1500</td>
                                </tr>
                                <tr>
                                    <td>Feb</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>
                                <tr>
                                    <td>Mar</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>
                                <tr>
                                    <td>Mar</td>
                                    <td>13</td>
                                    <td>390</td>
                                    <td>4680</td>
                                </tr>

                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </div>
    <div class="row">
        <div class="col-xl-7 col-12 mt-20 ">
            <div class="bg-white dashboard-col">
                <h5 class="card-header">Registered Users</h5>
                {{--<div class="card">--}}
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"> Name</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Data and time</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Stiphen Mark</td>
                                <td><img src="{{asset('img/authors/avatar9.jpg')}}" alt="image missing"
                                        class="rounded-circle img-size"></td>
                                <td>stiphen@mail.com</td>
                                <td>Mar 25,2019</td>
                                <td><span class="badge badge-success float-left">Approved</span></td>


                            </tr>
                            <tr>
                                <td>James Marle</td>
                                <td><img src="{{asset('img/authors/avatar1.jpg')}}" alt="image missing"
                                        class="rounded-circle img-size"></td>
                                <td>marle@mail.com</td>
                                <td>Mar 25,2019</td>
                                <td>

                                    <span class="badge badge-warning float-left">Pending</span></td>


                            </tr>
                            <tr>
                                <td>Lois Mark</td>
                                <td><img src="{{asset('img/authors/avatar2.jpg')}}" alt="image missing"
                                        class="rounded-circle img-size"></td>
                                <td>loismark@mail.com</td>
                                <td>Mar 25,2019</td>
                                <td><span class="badge badge-danger float-left">Rejected</span></td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            {{--</div>--}}
        </div>
        <div class="col-xl-5 col-12 mt-20 ">
            <div class="card p-0">
                <div class="bg-white dashboard-col">
                    <div class="card-header bg-primary">
                        <h5 class="text-white my-0">Blog Report</h5>
                    </div>
                    <div class="col-12">
                        <ul class="list-group">
                            <li class="list-group-item border-bottom-1 border-0">
                                <div class="row">
                                    <div class="col-sm-4 col-12 align-self-center">
                                        <img src="{{asset('img/images/blog3.jpg')}}" alt="images missing"
                                            class="img-fluid img-thumbnail">
                                    </div>
                                    <div class="col-sm-5 col-12">
                                        <h6>Technology</h6>
                                        <p>It is the modern technology description</p>
                                    </div>
                                    <div class="col-sm-3 col-12 align-self-center">
                                        <a href="" class="btn btn-secondary">View</a>
                                    </div>
                                </div>
                                <hr>
                            </li>

                            <li class="list-group-item  border-0">
                                <div class="row">
                                    <div class="col-sm-4 col-12 align-self-center">
                                        <img src="{{asset('img/images/blog1.jpg')}}" alt="images missing"
                                            class="img-fluid img-thumbnail">
                                    </div>
                                    <div class="col-sm-5 col-12">
                                        <h6>Happy Holi 2019</h6>
                                        <p>It is the Full of colors with happyness...</p>
                                    </div>
                                    <div class="col-sm-3 col-12 align-self-center">
                                        <a href="" class="btn btn-secondary">View</a>
                                    </div>
                                </div>
                                <hr>
                            </li>
                            <li class="list-group-item  border-0">
                                <div class="row">
                                    <div class="col-sm-4 col-12 align-self-center">
                                        <img src="{{asset('img/images/blog2.jpg')}}" alt="images missing"
                                            class="img-fluid img-thumbnail">
                                    </div>
                                    <div class="col-sm-5 col-12">
                                        <h6 class="card-title">Political news</h6>

                                        <p class="col-10 px-0 text-truncate">It is provides political news information
                                        </p>
                                        <p class="text-muted">created:2 days ago</p>
                                    </div>
                                    <div class="col-sm-3 col-12 align-self-center">
                                        <a href="" class="btn btn-secondary">View</a>
                                    </div>
                                </div>

                            </li>

                        </ul>
                    </div>
                    <a href="" class="card-footer text-center bg-white d-block ">View All Blogs</a>
                </div>
            </div>
        </div>
    </div>
    {{--</div>--}}
</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script language="javascript" type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>

<!-- end of page level js -->
@stop
