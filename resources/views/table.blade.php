@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Table @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link rel="stylesheet" href="{{ asset('vendors/wenk/wenk.min.css')}}">
    <!--end of page vendors -->
@stop
{{-- Page content --}}
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Tables</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Table</li>
            </ol>
        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>

    <!-- Main content -->
    <section class="content tablepage">
        <div class="row">
            <div class="col-md-6 col-12">
                <div>
                    <h5 class="d-inline-block">Default Table</h5>  <span>(Add class <code>.table)</code></span>
                </div>
                <div class="card">
                    <div class="table-responsive">
                    <table class="table ">
                        <thead>
                        {{--<tr>--}}
                            {{--<th class="border-top-0" colspan="5">Default Table</th>--}}
                        {{--</tr>--}}
                        <tr>
                            <th class="border-top-0" scope="col"></th>
                            <th class="border-top-0" scope="col">Name</th>
                            <th class="border-top-0" scope="col">Email Address</th>
                            <th class="border-top-0" scope="col">Status</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img src="{{asset('img/authors/avatar.jpg')}}" alt="image missing" class="rounded-circle"></td>
                            <td>Stiphen Mark</td>
                            <td>stiphen@mail.com</td>
                            <td><span class="badge badge-success float-left">Approved</span></td>


                        </tr>
                        <tr>
                            <td><img src="{{asset('img/authors/avatar1.jpg')}}" alt="image missing" class="rounded-circle"></td>
                            <td>James Marle</td>
                            <td>marle@mail.com</td>
                            <td>
                                <span class="badge badge-warning float-left">Pending</span></td>


                        </tr>
                        <tr>
                            <td><img src="{{asset('img/authors/avatar2.jpg')}}" alt="image missing" class="rounded-circle"></td>
                            <td>Lois Mark</td>
                            <td>loismark@mail.com</td>
                            <td><span class="badge badge-danger float-left">Rejected</span>  </td>

                        </tr>
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-12">
                <div>
                    <h5 class="d-inline-block">Striped Table</h5>  <span>(Add class <code>.table-striped)</code></span>
                </div>
                <div class="card">
<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="border-top-0" scope="col">Product Id</th>
                            <th class="border-top-0" scope="col">Product Name</th>
                            <th class="border-top-0" scope="col">Product Quantity</th>
                            <th class="border-top-0" scope="col">Product Quality</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Vivo</td>
                            <td>1 mobile</td>

                            <td>Excellent</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Samsung</td>
                            <td>2 mobiles</td>

                            <td>Good</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Moto</td>
                            <td>3 mobiles</td>

                            <td>Average</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>LG</td>
                            <td>4 mobiles</td>

                            <td>Good</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Honor</td>
                            <td>5 mobiles</td>

                            <td>Average</td>
                        </tr>
                        </tbody>
                    </table>
</div>

                </div>
            </div>
            <div class="col-md-6 col-12">
                <div>
                    <h5 class="d-inline-block">Table Hover</h5>  <span>(Add class <code>.table-hover)</code></span>
                </div>
                <div class="card">
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>

                        <tr>
                            <th class="border-top-0" scope="col"></th>
                            <th class="border-top-0" scope="col">Employee Name</th>
                            <th class="border-top-0" scope="col">Email Address</th>
                            <th class="border-top-0" scope="col">City</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img src="{{asset('img/authors/avatar8.jpg')}}" alt="image missing" class="rounded-circle"></td>
                            <td>Anitha Palke</td>
                            <td>palke@mail.com</td>
                            <td>Kolkata</td>


                        </tr>
                        <tr>
                            <td><img src="{{asset('img/authors/avatar9.jpg')}}" alt="image missing" class="rounded-circle"></td>
                            <td>Umesh Pandith</td>
                            <td>umesh@mail.com</td>
                            <td>
                            Bangalore
                            </td>


                        </tr>
                        <tr>
                            <td><img src="{{asset('img/authors/avatar10.jpeg')}}" alt="image missing" class="rounded-circle"></td>
                            <td>Manika chandra</td>
                            <td>manika@mail.com</td>
                            <td>Hyderabad  </td>

                        </tr>
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-12">
                <div>
                    <h5 class="d-inline-block">Border Table</h5>  <span>(Add class <code>.table-bordered)</code></span>
                </div>
                <div class="card">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>

                        <tr>
                            <th class="border-top-0" ></th>
                            <th class="border-top-0" scope="col">Name</th>
                            <th class="border-top-0" scope="col">Email Address</th>
                            <th class="border-top-0" scope="col">Action</th>
                            <th class="border-top-0" scope="col">Status</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img src="{{asset('img/authors/avatar.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                            <td>Stiphen Mark</td>
                            <td>stiphen@mail.com</td>
                            <td>
                                <span class=""><i class="im im-icon-Pen-4"></i></span>
                                <span><i class="im im-icon-Close imstroke"></i></span>
                            </td>
                            <td><span class="badge badge-success float-left">Approved</span></td>


                        </tr>
                        <tr>
                            <td><img src="{{asset('img/authors/avatar1.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                            <td>Yamini padal</td>
                            <td>yamini@mail.com</td>
                            <td>
                                <span><i class="im im-icon-Pen-4"></i></span>
                                <span><i class="im im-icon-Close imstroke"></i></span>
                            </td>
                            <td><span class="badge badge-warning float-left">Pending</span></td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('img/authors/avatar2.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                            <td>Lois mary</td>
                            <td>lois@mail.com</td>
                            <td>
                                <span ><i class="im im-icon-Pen-4"></i></span>
                                <span><i class="im im-icon-Close imstroke"></i></span>
                            </td>
                            <td><span class="badge badge-danger float-left">Reject</span></td>

                        </tr>
                        </tbody>
                    </table>
                    </div>

                </div>

            </div>
            <div class="col-12">
                <div>
                    <h5>Table Header Styles</h5>
                    <p>use the modifier classes <code>.thead-light or .thead-dark</code> to make s appear light or dark gray.</p>
                </div>
                <div class="row">

                    <div class="col-md-6 col-12">

                        <div class="card">
                            <div class="table-responsive">
                            <table class="table ">
                                <thead class="table-light">

                                <tr>
                                    <th class="border-top-0" scope="col"></th>
                                    <th class="border-top-0" scope="col">Name</th>
                                    <th class="border-top-0" scope="col">Email Address</th>
                                    <th class="border-top-0" scope="col">Status</th>


                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="{{asset('img/authors/avatar.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                                    <td>Stiphen Mark</td>
                                    <td>stiphen@mail.com</td>
                                    <td><span class="badge badge-success float-left">Approved</span></td>


                                </tr>
                                <tr>
                                    <td><img src="{{asset('img/authors/avatar1.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                                    <td>Yamini padal</td>
                                    <td>yamini@mail.com</td>
                                    <td>
                                        <span class="badge badge-warning float-left">Pending</span></td>


                                </tr>
                                <tr>
                                    <td><img src="{{asset('img/authors/avatar2.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                                    <td>Lois mary</td>
                                    <td>loismary@mail.com</td>
                                    <td><span class="badge badge-danger float-left">Rejected</span>  </td>

                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">

                        <div class="card">
                            <div class="table-responsive">
                            <table class="table ">
                                <thead class="table-dark">

                                <tr>
                                    <th class="border-top-0" scope="col"></th>
                                    <th class="border-top-0" scope="col">Name</th>
                                    <th class="border-top-0" scope="col">Email Address</th>
                                    <th class="border-top-0" scope="col">Status</th>


                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="{{asset('img/authors/avatar.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                                    <td>Stiphen Mark</td>
                                    <td>stiphen@mail.com</td>
                                    <td><span class="badge badge-success float-left">Approved</span></td>


                                </tr>
                                <tr>
                                    <td><img src="{{asset('img/authors/avatar1.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                                    <td>Yamini padal</td>
                                    <td>yamini@mail.com</td>
                                    <td>
                                        <span class="badge badge-warning float-left">Pending</span></td>


                                </tr>
                                <tr>
                                    <td><img src="{{asset('img/authors/avatar2.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                                    <td>Lois mary</td>
                                    <td>loismary@mail.com</td>
                                    <td><span class="badge badge-danger float-left">Rejected</span>  </td>

                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <div>
                    <h5 class="d-inline-block">Table With Contextual Class</h5>  <span>(Add class <code>.table-{class})</code></span>
                </div>
                <div class="card">
                    <div class="table-responsive">
                    <table class="table table-default">
                        <thead>

                        <tr>
                            <th class="border-top-0" scope="col">Name</th>
                            <th class="border-top-0" scope="col">Email Address</th>
                            <th class="border-top-0" scope="col">Picture</th>
                            <th class="border-top-0" scope="col">Designation</th>
                            <th class="border-top-0" scope="col">Status</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Stiphen Mark</td>
                            <td>stiphen@mail.com</td>
                            <td><img src="{{asset('img/authors/avatar.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                            <td>SEO Analyst</td>
                            <td><span class="badge badge-success float-left">Approved</span></td>


                        </tr>
                        <tr>
                            <td>James Marle</td>
                            <td>marle@mail.com</td>
                            <td><img src="{{asset('img/authors/avatar1.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                           <td>Web Developer</td>
                            <td>
                                <span class="badge badge-warning float-left">Pending</span>
                            </td>


                        </tr>
                        <tr>
                            <td>Lois Mark</td>
                            <td>loismark@mail.com</td>
                            <td><img src="{{asset('img/authors/avatar2.jpg')}}" alt="image missing" class=" rounded-circle"></td>
                            <td>HR Manager</td>
                            <td><span class="badge badge-danger float-left">Rejected</span>  </td>

                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="row mr-0">
                        <div class="col-12 card-class text-right mb-20">
                            <span data-color="table-default"  data-toggle="tooltip" data-placement="top" title="table-default" class="color1 imicon-align active bg-default  d-inline-block text-dark"><i class="im im-icon-Yes"></i></span>
                            <span data-color="table-active" data-toggle="tooltip" data-placement="top" title="table-active" class="color1  imicon-align bg-active  d-inline-block text-dark"><i class="im im-icon-Yes"></i></span>
                            <span data-color="table-primary" data-toggle="tooltip" data-placement="top" title="table-primary" class="color1  imicon-align bg-primary  d-inline-block text-white" ><i class="im im-icon-Yes"></i></span>
                            <span data-color="table-success" data-toggle="tooltip" data-placement="top" title="table-success" class="color1  imicon-align bg-success  d-inline-block text-white"><i class="im im-icon-Yes"></i></span>
                            <span data-color="table-warning" data-toggle="tooltip" data-placement="top" title="table-warning" class="color1 imicon-align bg-warning  d-inline-block text-white" ><i class="im im-icon-Yes"></i></span>
                            <span data-color="table-info" data-toggle="tooltip" data-placement="top" title="table-info" class="color1  imicon-align bg-info  d-inline-block text-white" ><i class="im im-icon-Yes"></i></span>
                            <span data-color="table-danger" data-toggle="tooltip" data-placement="top" title="table-danger" class="color1  imicon-align bg-danger  d-inline-block text-white" ><i class="im im-icon-Yes"></i></span>
                            <span data-color="table-light" data-toggle="tooltip" data-placement="top" title="table-light" class="color1  imicon-align bg-light  d-inline-block text-dark" ><i class="im im-icon-Yes"></i></span>
                            <span data-color="table-dark" data-toggle="tooltip" data-placement="top" title="table-dark" class="color1  imicon-align bg-dark  d-inline-block text-white"><i class="im im-icon-Yes"></i></span>
                            <span data-color="table-secondary" data-toggle="tooltip" data-placement="top" title="table-secondary" class="color1  imicon-align bg-secondary  border-secondary d-inline-block text-dark"><i class="im im-icon-Yes"></i></span>
                        </div>
                    </div>


                </div>

            </div>


        </div>
    </section>
    @stop
@section('footer_scripts')
    <script type="text/javascript" src="{{asset('js/pages/table.js')}}"></script>


@stop


