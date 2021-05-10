@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Accordion @parent
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
            <h1>Accordion</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accordion</li>
            </ol>
        </div>
        <div class="separator-breadcrumb border-top"></div>


    </section>

    <!-- content start-->
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-12 mb-20">
                <div class="accordion accordion-bordered" id="accordionExample">
                    <div class="card p-0">
                        <div class="card-header bg-white">
                            <h5>Default Accordion</h5>
                            <p class="card-description">Use class <code>.accordion</code> for basic accordion</p>
                        </div>
                        <div class="card-body">

                            <div class="m-t-10 accordian_alignment">
                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="card">
                                        <div class="card-header bg-white" role="tab" id="title-one">
                                            <a class="accordion-section-title collapsed d-block" data-toggle="collapse"  href="#card-data-one" aria-expanded="false">
                                                <span class="acc-text">Section 1</span>
                                                &ensp;<i class="im float-right m-t-5 im-icon-Arrow-Up2"></i>
                                            </a>
                                        </div>
                                        <div id="card-data-one" class="card-collapse collapse" data-parent="#accordion" style="">
                                            <div class="card-body m-t-20">
                                                <p class="text-justify">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-t-20 ">
                                        <div class="card-header bg-white" role="tab" id="title-two">
                                            <a class="accordion-section-title collapsed d-block" data-toggle="collapse"  href="#card-data-two" aria-expanded="false">
                                                <span class="acc-text">Section 2</span>
                                                &ensp;<i class="im float-right m-t-5 im-icon-Arrow-Up2"></i>
                                            </a>
                                        </div>
                                        <div id="card-data-two" class="card-collapse collapse" data-parent="#accordion" style="">
                                            <div class="card-body m-t-20">
                                                <p class="text-justify">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-t-20 ">
                                        <div class="card-header bg-white" role="tab" id="title-three">
                                            <a class="accordion-section-title collapsed d-block" data-toggle="collapse"  href="#card-data-three" aria-expanded="false">
                                                <span class="acc-text"> Section 3</span>
                                                &ensp;<i class="im float-right  im-icon-Arrow-Up2"></i>
                                            </a>
                                        </div>
                                        <div id="card-data-three" class="card-collapse collapse" data-parent="#accordion" style="">
                                            <div class="card-body m-t-20">
                                                <p class="text-justify">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-t-20 ">
                                        <div class="card-header bg-white" role="tab" id="title-four">
                                            <a class="accordion-section-title d-block" data-toggle="collapse"  href="#card-data-four" aria-expanded="true">
                                                <span class="acc-text">Section 4</span>
                                                &ensp;<i class="im float-right m-t-5 im-icon-Arrow-Down2"></i>
                                            </a>
                                        </div>
                                        <div id="card-data-four" class="card-collapse collapse show" data-parent="#accordion" style="">
                                            <div class="card-body m-t-20">
                                                <p class="text-justify">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-0 p-0">
                        <div class="card-header bg-white">
                            <h5>Border Accordion</h5>
                            <p class="card-description">Use class <code>.accordion-bordered</code> for basic accordion</p>
                        </div>
                        <div class="card-header  px-0 border border-primary  " id="headingOne">
                            <h2 class="mb-0 text-primary">
                                <button class="btn btn-link d-block text-left w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="acc-text"> What is HTML ?</span>

                                    <span class="float-right fs-14  mr-3">    &ensp;<i class="im float-right m-t-5 im-icon-Arrow-Down2"></i></span>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="card-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                               <blockquote class="blockquote-acc"> HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages.</blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 p-0">
                        <div class="card-header px-0 border border-primary  " id="headingTwo">
                            <h2 class="mb-0 text-primary">
                                <button class="btn btn-link collapsed d-block text-left w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="acc-text">What is Bootstrap ?</span>
                                    <span class="float-right fs-14 mr-3">    &ensp;<i class="im float-right m-t-5 im-icon-Arrow-Up2"></i></span>
                                </button>


                            </h2>
                        </div>
                        <div id="collapseTwo" class="card-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <blockquote class="blockquote-acc"> Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions.</blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 p-0">
                        <div class="card-header   px-0 border border-primary  " id="headingThree">
                            <h2 class="mb-0 text-primary">
                                <button class="btn btn-link text-left collapsed d-block w-100" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="acc-text"> What is CSS ?</span>
                                    <span class="float-right fs-14 mr-3">    &ensp;<i class="im float-right m-t-5 im-icon-Arrow-Up2"></i></span>
                                </button>

                            </h2>

                        </div>
                        <div id="collapseThree" class="card-collapse collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <blockquote class="blockquote-acc"> CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc.</blockquote>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card p-0">
                            <div class="card-body">
                                <h4 class="card-title">Solid header accordion</h4>
                                <p class="card-description">Use class <code>.accordion-solid-header</code> for basic accordion</p>
                                <div class="mt-4">
                                    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                                        <div class="card p-0">
                                            <div class="card-header p-0" role="tab" id="heading-10">
                                                <h6 class="m-0">
                                                    <a data-toggle="collapse" href="#collapse-10" aria-expanded="true" aria-controls="collapse-10" class="">
                                                        <span class="acc-text"> How can I pay for an order I placed?</span>
                                                        <span class="float-right"><i class="im float-right im-icon-Arrow-Down2"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapse-10" class="collapse show card-collapse" role="tabpanel" aria-labelledby="heading-10" data-parent="#accordion-4" style="">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3 col-12">
                                                            <img src="{{asset('img/images/10.jpg')}}" class="mw-100" alt="image">
                                                        </div>
                                                        <div class="col-md-9 col-12 text-justify">
                                                            <p class="mb-0 mt-2">You can pay for the product you have purchased using credit cards, debit cards, or via online banking.
                                                                We also on-delivery services.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card p-0">
                                            <div class="card-header p-0" role="tab" id="heading-11">
                                                <h6 class="m-0">
                                                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                                                        <span class="acc-text"> I can’t sign in to my account</span>
                                                        <span class="float-right"><i class="im im-icon-Arrow-Up2"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapse-11" class="collapse card-collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                                                <div class="card-body">
                                                    <p>If while signing in to your account you see an error message, you can do the following</p>
                                                    <ol class="pl-3 mt-4">
                                                        <li>Check your network connection and try again</li>
                                                        <li>Make sure your account credentials are correct while signing in</li>
                                                        <li>Check whether your account is accessible in your region</li>
                                                    </ol>
                                                    <br>
                                                    <p class="text-success">
                                                        <i class="mdi mdi-alert-octagon mr-2"></i>If the problem persists, you can contact our support.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card p-0">
                                            <div class="card-header p-0" role="tab" id="heading-12">
                                                <h6 class="m-0">
                                                    <a class="collapsed" data-toggle="collapse" href="#collapse-12" aria-expanded="false" aria-controls="collapse-12">
                                                        <span class="acc-text">  Can I add money to the wallet?</span>
                                                        <span class="float-right"><i class="im im-icon-Arrow-Up2"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapse-12" class="collapse card-collapse" role="tabpanel" aria-labelledby="heading-12" data-parent="#accordion-4">
                                                <div class="card-body">
                                                    <p class="mb-0">You can add money to the wallet for any future transaction from your bank account using net-banking, or credit/debit card transaction. The money in the wallet can be used for an easier and faster transaction.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-12">
                            <div class="grid-margin stretch-card">
                                <div class="card p-0">
                                    <div class="card-body">
                                        <h4 class="card-title">Solid content accordion</h4>
                                        <p class="card-description">Use class <code>.accordion-solid-content</code> for basic accordion</p>
                                        <div class="mt-4">
                                            <div class="accordion accordion-solid-content" id="accordion-5" role="tablist">
                                                <div class="card">
                                                    <div class="card-header" role="tab" id="heading-13">
                                                        <h6 class="mb-0">
                                                            <a data-toggle="collapse" href="#collapse-13" aria-expanded="false" aria-controls="collapse-13" class="collapsed">
                                                                <span class="acc-text">How can I pay for an order I placed?</span>
                                                                <span class="float-right"><i class="im im-icon-Add"></i></span>
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-13" class="collapse card-collapse-acc" role="tabpanel" aria-labelledby="heading-13" data-parent="#accordion-5" style="">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-3 col-12">
                                                                    <img src="{{asset('img/images/10.jpg')}}" class="mw-100" alt="image">
                                                                </div>
                                                                <div class="col-md-9 col-12 text-justify">
                                                                    <p class="mb-0 mt-2">You can pay for the product you have purchased using credit cards, debit cards, or via online banking.
                                                                        We also on-delivery services.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" role="tab" id="heading-14">
                                                        <h6 class="mb-0">
                                                            <a class="collapsed" data-toggle="collapse" href="#collapse-14" aria-expanded="false" aria-controls="collapse-14">
                                                                <span class="acc-text"> I can’t sign in to my account</span>
                                                                <span class="float-right"><i class="im im-icon-Add"></i></span>
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-14" class="collapse card-collapse-acc" role="tabpanel" aria-labelledby="heading-14" data-parent="#accordion-5" style="">
                                                        <div class="card-body">
                                                            <p>If while signing in to your account you see an error message, you can do the following</p>
                                                            <ol class="pl-3 mt-4">
                                                                <li>Check your network connection and try again</li>
                                                                <li>Make sure your account credentials are correct while signing in</li>
                                                                <li>Check whether your account is accessible in your region</li>
                                                            </ol>
                                                            <br>
                                                            <p class="text-warning">
                                                                <i class="im im-icon-Danger mr-2"></i>If the problem persists, you can contact our support.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" role="tab" id="heading-15">
                                                        <h6 class="mb-0">
                                                            <a class="" data-toggle="collapse" href="#collapse-15" aria-expanded="true" aria-controls="collapse-15">
                                                                <span class="acc-text"> Can I add money to the wallet?</span>
                                                                <span class="float-right"><i class="im im im-icon-Close-Window"></i></span>
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-15" class="collapse card-collapse-acc show" role="tabpanel" aria-labelledby="heading-15" data-parent="#accordion-5" style="">
                                                        <div class="card-body">
                                                            <p class="mb-0">You can add money to the wallet for any future transaction from your bank account using net-banking, or credit/debit card transaction. The money in the wallet can be used for an easier and faster transaction.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>

        </div>




    </section>
    <!-- content end-->


@stop
@section('footer_scripts')
    <script src="{{ asset('js/pages/accordion.js')}}"></script>

@stop
