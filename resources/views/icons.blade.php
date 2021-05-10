@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Icons @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />

    <!--end of page vendors -->
@stop
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Icons</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Icons</li>
            </ol>
        </div>
        <div class="separator-breadcrumb border-top"></div>




    </section>
    <!-- /.content -->
    <!-- /.content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h5>FontAwesome Icons</h5>
                    </div>
                    <ul class="pl-0 list-inline text-justify">
                        <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                            data-original-title="fab fa-500px">
                            <div class="iconview m-3 d-flex justify-content-center d-flex justify-content-center">
                                <i class=".align-self-center fa-2x fab fa-500px"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr  m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-accessible-icon" data-filter="fa-accessible-icon">
                            <div class="iconview m-3 d-flex justify-content-center d-flex justify-content-center ">
                                <i class=".align-self-center fa-2x fab fa-accessible-icon"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr  m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-accusoft">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-accusoft"
                                        data-filter="fa-accusoft"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4" data-toggle="tooltip"
                            data-original-title="fab fa-acquisitions-incorporated">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-acquisitions-incorporated"
                                        data-filter="fa-acquisitions-incorporated"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ad">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ad"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-address-book">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-address-book"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-address-book">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-address-book"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-address-card">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-address-card"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-address-card">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-address-card"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-adjust">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-adjust"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-adn">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-adn"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-adobe">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-adobe"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-adversal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-adversal"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-affiliatetheme">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-affiliatetheme"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-air-freshener">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-air-freshener"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-algolia">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-algolia"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-align-center">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-align-center"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-align-justify">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-align-justify"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-align-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-align-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-align-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-align-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-alipay">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-alipay"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-allergies">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-allergies"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-amazon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-amazon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-amazon-pay">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-amazon-pay"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ambulance">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ambulance"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-american-sign-language-interpreting">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-american-sign-language-interpreting"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-amilia">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-amilia"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-anchor">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-anchor"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-android">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-android"></i>
                            </div>
                        </li>


                    </ul>
                    <div class="m-4 mx-auto">
                        <a href="{{url('fontawesome_icons')}}" class="btn btn-outline-primary">More Icons</a>
                    </div>


                </div>
            </div>
            <div class="col-md-6">
                <div class="card" id="fa-icons">
                    <div class="card-header border-bottom">
                        <h5>IconsMind Icons</h5>
                    </div>

                    <ul class="pl-0 list-inline text-justify">
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-A-Z " tabindex="0">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-A-Z fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Aa">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Aa fs-20"></span>
                                </div>
                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Add-Bag">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Add-Bag fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Add-Basket">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Add-Basket fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Add-Cart">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Add-Cart fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Add-File">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Add-File fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Add-SpaceAfterParagraph">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Add-SpaceAfterParagraph fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Add-SpaceBeforeParagraph">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Add-SpaceBeforeParagraph fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Add-User">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Add-User fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Add-UserStar">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Add-UserStar fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Add-Window">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Add-Window fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Add">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Add fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Address-Book">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Address-Book fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Address-Book2">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Address-Book2 fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Administrator">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im   im-icon-Administrator  fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Aerobics-2">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Aerobics-2 fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Aerobics-3">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Aerobics-3 fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Aerobics">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Aerobics fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Affiliate">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Affiliate fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Aim">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Aim fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Air-Balloon">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Air-Balloon fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Airbrush">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Airbrush fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Airship">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Airship fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Alarm-Clock">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Alarm-Clock fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Alarm-Clock2">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Alarm-Clock2 fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Alarm">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Alarm fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Alien-2">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Alien-2 fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Alien">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Alien fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Aligator">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Aligator fs-20"></span>
                                </div>

                           </li>
                          <li class="list-inline-item  clr  m-4  clr" data-toggle="tooltip"
                                            data-original-title="im im-icon-Align-Center">
                               <div class="iconview m-3  d-flex justify-content-center">
                                    <span class="im  im-icon-Align-Center fs-20"></span>
                                </div>

                           </li>
                    </ul>
                    <div class="m-4 mx-auto d-block">
                        <a href="{{url("iconsmind_icons")}}" class="btn btn-outline-primary">More Icons</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@stop
@section('footer_scripts')
    <!--   page level js ----------->
    <script src="{{ asset('js/pages/icons.js')}}"></script>
    <!-- end of page level js -->
@stop
