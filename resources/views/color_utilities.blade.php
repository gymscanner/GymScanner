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
            <h1>Typography</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Color Utilities</li>
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
                             <h4 class="card-header px-0">Background colors</h4>
                            <p>Headings are the first thing you ll see or read in a document. We wanted to make them perfect in both size and colour.</p>

                            <div class="card-body">

                                        <div class="card">
                                            <h4>Solid colors</h4>
                                            <p><span class="text-danger">.bg-*</span> can apply to any element, where <span class="text-danger">*</span> is a color name.</p>
                                            <div class="card-body">
                                                <div class="gap-items gap-y">
                                                    <span class="bg-primary text-white d-inline-block d-inline-block text-center  m-2 p-2 w-140px">.bg-primary</span>
                                                    <span class="bg-secondary  d-inline-block text-center m-2 p-2 w-140px">.bg-secondary</span>
                                                    <span class="bg-success text-white d-inline-block text-center m-2 p-2 w-140px">.bg-success</span>
                                                    <span class="bg-info text-white d-inline-block text-center m-2 p-2 w-140px">.bg-info</span>
                                                    <span class="bg-warning text-white d-inline-block text-center m-2 p-2 w-140px">.bg-warning</span>
                                                    <span class="bg-danger text-white d-inline-block text-center m-2 p-2 w-140px">.bg-danger</span>
                                                    <span class="bg-dark text-white d-inline-block text-center m-2 p-2 w-140px">.bg-dark</span>
                                                    <span class="bg-light  d-inline-block text-center m-2 p-2 w-140px">.bg-light</span>
                                                </div>
                                            </div>

                                </div>
                                <div class="card">
                                    <h4>Border colors</h4>
                                    <p><span class="text-danger">.border-*</span> can apply to any element, where <span class="text-danger">*</span> is a color name.</p>
                                    <div class="card-body">
                                        <div class="gap-items gap-y">
                                            <span class="border border-primary d-inline-block d-inline-block text-center  m-2 p-2 w-140px">.border-primary</span>
                                            <span class="border border-secondary d-inline-block text-center m-2 p-2 w-140px">.border-secondary</span>
                                            <span class="border border-success d-inline-block text-center m-2 p-2 w-140px">.border-success</span>
                                            <span class="border border-info d-inline-block text-center m-2 p-2 w-140px">.border-info</span>
                                            <span class="border border-warning d-inline-block text-center m-2 p-2 w-140px">.border-warning</span>
                                            <span class="border border-danger d-inline-block text-center m-2 p-2 w-140px">.border-danger</span>
                                            <span class="border border-dark d-inline-block text-center m-2 p-2 w-140px">.border-dark</span>
                                            <span class="border border-light d-inline-block text-center m-2 p-2 w-140px">.border-light</span>
                                        </div>
                                    </div>
                                    <h4 class="px-0">Border Classes</h4>
                                    <p class="px-0">Bootstrap provides different border classes to use easily and apply the <span class="text-danger">.border-*</span> classes to get borders.</p>

                                    <div class="card-body ">
                                       <div class="">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <td><p class="text-danger">.border-top</p></td>
                                                    <td><span class="border-top d-inline-block d-inline-block text-center  m-2 p-2 w-140px">border-top</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><p class="text-danger">.border-right</p></td>
                                                    <td><span class="border-right d-inline-block d-inline-block text-center  m-2 p-2 w-140px">border-right</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><p class="text-danger">.border-bottom</p></td>
                                                    <td><span class="border-bottom d-inline-block d-inline-block text-center  m-2 p-2 w-140px">border-bottom</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><p class="text-danger">.border-left</p></td>
                                                    <td><span class="border-left d-inline-block d-inline-block text-center  m-2 p-2 w-140px">border-left</span>
                                                    </td>
                                                </tr>
                                            </table>
                                            {{--<span class="border-top d-inline-block d-inline-block text-center  m-2 p-2 w-140px">.border-top</span>--}}
                                            {{--<span class="border-right d-inline-block text-center m-2 p-2 w-140px">.border-right</span>--}}
                                            {{--<span class="border-bottom d-inline-block text-center m-2 p-2 w-140px">.border-bottom</span>--}}
                                            {{--<span class="border-left d-inline-block text-center m-2 p-2 w-140px">.border-left</span>--}}


                                        </div>
                                    </div>

                                </div>
                                <div class="card">
                                    <h4>Text colors</h4>
                                    <p><span class="text-danger">.text-*</span> can apply to any element, where <span class="text-danger">*</span> is a color name. Please note that you can safely add these classes to an</p>
                                    <div class="card-body">
                                        <div class="gap-items gap-y">
                                            <span class="text-primary d-inline-block d-inline-block text-center  m-2 p-2 w-140px">.text-primary</span>
                                            <span class="text-secondary d-inline-block text-center m-2 p-2 w-140px">.text-secondary</span>
                                            <span class="text-success d-inline-block text-center m-2 p-2 w-140px">.text-success</span>
                                            <span class="text-info d-inline-block text-center m-2 p-2 w-140px">.text-info</span>
                                            <span class="text-warning d-inline-block text-center m-2 p-2 w-140px">.text-warning</span>
                                            <span class="text-danger d-inline-block text-center m-2 p-2 w-140px">.text-danger</span>
                                            <span class="text-dark d-inline-block text-center m-2 p-2 w-140px">.text-dark</span>
                                            <span class="text-light d-inline-block text-center m-2 p-2 w-140px">.text-light</span>
                                        </div>
                                    </div>

                                </div>
                                {{--<div class="card">--}}
                                    {{--<h4>Hover colors</h4>--}}
                                    {{--<p><span class="text-danger">.hover-*</span> can apply to any element, where <span class="text-danger">*</span> is a color name. Please note that you can safely add these classes to an</p>--}}
                                    {{--<div class="card-body">--}}
                                        {{--<div class="gap-items gap-y">--}}
                                            {{--<span class="hover-primary d-inline-block d-inline-block text-center  m-2 p-2 w-140px">.text-primary</span>--}}
                                            {{--<span class="hover-secondary d-inline-block text-center m-2 p-2 w-140px">.text-secondary</span>--}}
                                            {{--<span class="hover-success d-inline-block text-center m-2 p-2 w-140px">.text-success</span>--}}
                                            {{--<span class="hover-info d-inline-block text-center m-2 p-2 w-140px">.text-info</span>--}}
                                            {{--<span class="hover-warning d-inline-block text-center m-2 p-2 w-140px">.text-warning</span>--}}
                                            {{--<span class="hover-danger d-inline-block text-center m-2 p-2 w-140px">.text-danger</span>--}}
                                            {{--<span class="hover-dark d-inline-block text-center m-2 p-2 w-140px">.text-dark</span>--}}
                                            {{--<span class="hover-light d-inline-block text-center m-2 p-2 w-140px">.text-light</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}

                                {{--<div class="card">--}}
                                    {{--<h4>Gradient backgrounds colors</h4>--}}
                                    {{--<p><span class="text-danger">.text-*</span> can apply to any element, where <span class="text-danger">*</span> is a color name. Please note that you can safely add these classes to an</p>--}}
                                    {{--<div class="card-body">--}}
                                        {{--<div class="gap-items gap-y">--}}
                                            {{--<span class="bg-gradient-primary d-inline-block d-inline-block text-center text-white  m-3 p-3 w-230px ">.bg-gradient-primary</span>--}}
                                            {{--<span class="bg-gradient-secondary d-inline-block text-center m-3 p-3 w-230px">.bg-gradient-secondary</span>--}}
                                            {{--<span class="bg-gradient-success d-inline-block text-center m-3 p-3 text-white w-230px ">.bg-gradient-success</span>--}}
                                            {{--<span class="bg-gradient-info d-inline-block text-center m-3 p-3 text-white w-230px ">.bg-gradient-info</span>--}}
                                            {{--<span class="bg-gradient-warning d-inline-block text-center m-3 p-3 text-white w-230px">.bg-gradient-warning</span>--}}
                                            {{--<span class="bg-gradient-danger d-inline-block text-center m-3 p-3 text-white w-230px ">.bg-gradient-danger</span>--}}
                                            {{--<span class="bg-gradient-dark d-inline-block text-center m-3 p-3 text-white w-230px">.bg-gradient-dark</span>--}}
                                            {{--<span class="bg-gradient-light d-inline-block text-center m-3 p-3 w-230px">.bg-gradient-light</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}


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
