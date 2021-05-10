@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Buttons @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->


    <!--end of page vendors -->

@stop
{{-- Page content --}}
@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div aria-label="breadcrumb" class="card-breadcrumb">
                <h1>Buttons</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Content</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                </ol>
            </div>
            <div class="separator-breadcrumb border-top"></div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                          <div class="card-body p-20">
                            <h5>Buttons Colors</h5>
                            <p>This page provides different styles of buttons, To achieve the button styles there is need of the following classes,
                            Different Style of buttons makes template beautiful.
                            </p>
                            <div class="row">
                            <div class="col-md-3">
                            <button type="button" class="btn btn-secondary m-t-10"> secondary</button>
                                <div class="row m-l-5 m-t-10">
                                    <div class="col-1 no-padding">
                                        <div class="bg-secondary p-t-30 p-b-35"></div>
                                        <div class="bg-secondary-light p-t-30 p-b-35"></div>
                                        <div class="bg-secondary-dark p-t-30 p-b-35"></div>
                                    </div>
                                    <div class="col-10 bg-white b-a b-grey padding-10">
                                        <p class="no-margin text-black bold text-uppercase fs-12">Normal</p>
                                        <p class="no-margin fs-12">#e9ecf0 </p>
                                        <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Hover</p>
                                        <p class="no-margin fs-12">7.5% white </p>
                                        <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Active</p>
                                        <p class="no-margin fs-12">10% white </p>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-3">
                            <button type="button" class="btn btn-primary m-t-10 "> Primary</button>
                            <div class="row m-l-5 m-t-10">
                                <div class="col-1 no-padding">
                                    <div class="bg-primary p-t-30 p-b-35"></div>
                                    <div class="bg-primary-light p-t-30 p-b-35"></div>
                                    <div class="bg-primary-dark p-t-30 p-b-35"></div>
                                </div>
                                <div class="col-10 bg-white b-a b-grey padding-10">
                                    <p class="no-margin text-black bold text-uppercase fs-12">Normal</p>
                                    <p class="no-margin fs-12">#50a1ff </p>
                                    <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Hover</p>
                                    <p class="no-margin fs-12">7.5% white </p>
                                    <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Active</p>
                                    <p class="no-margin fs-12">10% white </p>
                                </div>
                            </div>
                                </div>

                            <div class="col-md-3">
                            <button type="button" class="btn btn-success m-t-10 "> Success</button>
                            <div class="row m-l-5 m-t-10">
                                <div class="col-1 no-padding">
                                    <div class="bg-success p-t-30 p-b-35"></div>
                                    <div class="bg-success-light p-t-30 p-b-35"></div>
                                    <div class="bg-success-dark p-t-30 p-b-35"></div>
                                </div>
                                <div class="col-10 bg-white b-a b-grey padding-10">
                                    <p class="no-margin text-black bold text-uppercase fs-12">Normal</p>
                                    <p class="no-margin fs-12">#3cd458 </p>
                                    <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Hover</p>
                                    <p class="no-margin fs-12">7.5% white </p>
                                    <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Active</p>
                                    <p class="no-margin fs-12">10% white </p>
                                </div>
                            </div>
                            </div>
                                <div class="col-md-3">
                            <button type="button" class="btn btn-warning m-t-10 "> Warning</button>
                                <div class="row m-l-5 m-t-10">
                                    <div class="col-1 no-padding">
                                        <div class="bg-warning p-t-30 p-b-35"></div>
                                        <div class="bg-warning-light p-t-30 p-b-35"></div>
                                        <div class="bg-warning-dark p-t-30 p-b-35"></div>
                                    </div>
                                    <div class="col-10 bg-white b-a b-grey padding-10">
                                        <p class="no-margin text-black bold text-uppercase fs-12">Normal</p>
                                        <p class="no-margin fs-12">#ffba00 </p>
                                        <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Hover</p>
                                        <p class="no-margin fs-12">7.5% white </p>
                                        <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Active</p>
                                        <p class="no-margin fs-12">10% white </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-3 mt-3">
                            <button type="button" class="btn btn-info "> Info</button>

                                <div class="row m-l-5 m-t-10">
                                    <div class="col-1 no-padding">
                                        <div class="bg-info p-t-30 p-b-35"></div>
                                        <div class="bg-info-light p-t-30 p-b-35"></div>
                                        <div class="bg-info-dark p-t-30 p-b-35"></div>
                                    </div>
                                    <div class="col-10 bg-white b-a b-grey padding-10">
                                        <p class="no-margin text-black bold text-uppercase fs-12">Normal</p>
                                        <p class="no-margin fs-12">#727cf5 </p>
                                        <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Hover</p>
                                        <p class="no-margin fs-12">7.5% white </p>
                                        <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Active</p>
                                        <p class="no-margin fs-12">10% white </p>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                            <button type="button" class="btn btn-danger m-t-10 "> Danger</button>
                                <div class="row m-l-5 m-t-10">
                                    <div class="col-1 no-padding">
                                        <div class="bg-danger p-t-30 p-b-35"></div>
                                        <div class="bg-danger-light p-t-30 p-b-35"></div>
                                        <div class="bg-danger-dark p-t-30 p-b-35"></div>
                                    </div>
                                    <div class="col-10 bg-white b-a b-grey padding-10">
                                        <p class="no-margin text-black bold text-uppercase fs-12">Normal</p>
                                        <p class="no-margin fs-12">#ff4954 </p>
                                        <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Hover</p>
                                        <p class="no-margin fs-12">7.5% white </p>
                                        <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Active</p>
                                        <p class="no-margin fs-12">10% white </p>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                            <button type="button" class="btn btn-light m-t-10 "> Light</button>
                                <div class="row m-l-5 m-t-10">
                                    <div class="col-1 no-padding">
                                        <div class="bg-light p-t-30 p-b-35"></div>
                                        <div class="bg-light-light p-t-30 p-b-35"></div>
                                        <div class="bg-light-dark p-t-30 p-b-35"></div>
                                    </div>
                                    <div class="col-10 bg-white b-a b-grey padding-10">
                                        <p class="no-margin text-black bold text-uppercase fs-12">Normal</p>
                                        <p class="no-margin fs-12">#fff </p>
                                        <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Hover</p>
                                        <p class="no-margin fs-12">7.5% white </p>
                                        <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Active</p>
                                        <p class="no-margin fs-12">10% white </p>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-dark m-t-10 "> Dark</button>
                                    <div class="row m-l-5 m-t-10">
                                        <div class="col-1 no-padding">
                                            <div class="bg-dark p-t-30 p-b-35"></div>
                                            <div class="bg-dark-light p-t-30 p-b-35"></div>
                                            <div class="bg-dark-dark p-t-30 p-b-35"></div>
                                        </div>
                                        <div class="col-10 bg-white b-a b-grey padding-10">
                                            <p class="no-margin text-black bold text-uppercase fs-12">Normal</p>
                                            <p class="no-margin fs-12">#fff </p>
                                            <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Hover</p>
                                            <p class="no-margin fs-12">7.5% white </p>
                                            <p class="p-t-20 no-margin text-black bold text-uppercase fs-12">Active</p>
                                            <p class="no-margin fs-12">10% white </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-40">
                            <h5 class="m-t-25">Default Buttons</h5>
                            <button type="button" class="btn btn-secondary  m-t-10 m-r-30"> secondary</button>
                            <button type="button" class="btn btn-primary  m-t-10 m-r-30"> Primary</button>
                            <button type="button" class="btn btn-success  m-t-10 m-r-30"> Success</button>
                            <button type="button" class="btn btn-warning  m-t-10 m-r-30"> Warning</button>
                            <button type="button" class="btn btn-info  m-t-10 m-r-30"> Info</button>
                            <button type="button" class="btn btn-danger  m-t-10 m-r-30"> Danger</button>
                            <button type="button" class="btn btn-dark  m-t-10 m-r-30"> Dark</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-40">
                                    <h5 class="m-t-25">Buttons Size</h5>
                                    <p>Add .btn-lg or .btn-sm for additional sizes.</p>
                                    <button type="button" class="btn btn-secondary btn-lg  m-t-10 m-r-30"> secondary</button>
                                    <button type="button" class="btn btn-primary btn-lg  m-t-10 m-r-30"> Primary</button>
                                    <button type="button" class="btn btn-success btn-lg  m-t-10 m-r-30"> Success</button>
                                    <button type="button" class="btn btn-warning btn-lg m-t-10 m-r-30"> Warning</button>
                                    <button type="button" class="btn btn-info btn-lg m-t-10 m-r-30"> Info</button>
                                    <button type="button" class="btn btn-danger btn-lg m-t-10 m-r-30"> Danger</button>
                                    <button type="button" class="btn btn-dark btn-lg m-t-10 m-r-30"> Dark</button>
                                    <button type="button" class="btn btn-light btn-lg m-t-10 m-r-30"> Light</button>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12 mt-40">
                                    <h5 class="m-t-25">Outline Buttons</h5>
                                    <p>Add <code>.btn-outline-*</code> class to select the Contextual class of button <code>*</code>specifics the btn classes like <code>primary, secondary,..</code></p>
                                    <button type="button" class="btn btn-outline-secondary  m-t-10 m-r-30"> secondary</button>
                                    <button type="button" class="btn btn-outline-primary   m-t-10 m-r-30"> Primary</button>
                                    <button type="button" class="btn btn-outline-success  m-t-10 m-r-30"> Success</button>
                                    <button type="button" class="btn btn-outline-warning  m-t-10 m-r-30"> Warning</button>
                                    <button type="button" class="btn btn-outline-info  m-t-10 m-r-30"> Info</button>
                                    <button type="button" class="btn btn-outline-danger  m-t-10 m-r-30"> Danger</button>
                                    <button type="button" class="btn btn-outline-dark  m-t-10 m-r-30"> Dark</button>
                                    <button type="button" class="btn btn-outline-light  m-t-10 m-r-30"> Light</button>
                                </div>
                            </div>




                            <div class="row mt-40">
                                    <div class="col-lg-5 col-12">
                                        <div class="row">
                                            <div class="col-10">
                                                <h5 class="m-t-25">Block Buttons</h5>
                                                <div class="m-t-10">
                                                    <button type="button" class="btn btn-secondary btn-lg btn-block  m-t-10 "> secondary</button>
                                                    <button type="button" class="btn btn-primary btn-lg btn-block  m-t-10"> Primary</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <h5 class="m-t-25">Button Group</h5>
                                        <div class="btn-group m-t-10">
                                            <button type="button" class="btn btn-secondary">Left</button>
                                            <button type="button" class="btn btn-secondary">Middle</button>
                                            <button type="button" class="btn btn-secondary">Right</button>
                                        </div>
                                    </div>
                                <div class="col-lg-4 col-12">
                                    <h5 class="m-t-25">Checkbox and radio buttons</h5>
                                    <div class="btn-group btn-group-toggle m-t-10" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" id="activecheck"  checked> Active
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" id="radiocheck" > Radio
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="checkbox" name="options" id="radiocheck2" > Checkbox
                                        </label>
                                    </div>
                                </div>
                                </div>
                            <div class="row mt-40">
                                <h5 class="m-t-25">Active Buttons</h5>
                                <div class="col-lg-12 col-12">

                                    <button type="button" class="btn btn-secondary btn-lg active  m-t-10 m-r-30"> secondary</button>
                                    <button type="button" class="btn btn-primary btn-lg active  m-t-10 m-r-30"> Primary</button>
                                    <button type="button" class="btn btn-success btn-lg active  m-t-10 m-r-30"> Success</button>
                                    <button type="button" class="btn btn-warning btn-lg active  m-t-10 m-r-30"> Warning</button>
                                    <button type="button" class="btn btn-info btn-lg active  m-t-10 m-r-30 "> Info</button>
                                    <button type="button" class="btn btn-danger btn-lg active  m-t-10 m-r-30"> Danger</button>
                                    <button type="button" class="btn btn-dark btn-lg active  m-t-10 m-r-30"> Dark</button>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-40">
                                    <h5 class="m-t-25">Round Buttons</h5>
                                    <button type="button" class="btn btn-round btn-primary btn-lg m-t-10 m-r-30 w-140px">Primary</button>
                                    <button type="button" class="btn btn-round btn-secondary btn-lg m-t-10 m-r-30 w-140px">Secondary</button>
                                    <button type="button" class="btn btn-round btn-success btn-lg m-t-10 m-r-30 w-140px">Success</button>
                                    <button type="button" class="btn btn-round btn-warning btn-lg m-t-10 m-r-30 w-140px">Warning</button>
                                    <button type="button" class="btn btn-round btn-info btn-lg m-t-10 m-r-30 w-140px">Info</button>
                                    <button type="button" class="btn btn-round btn-danger btn-lg m-t-10 m-r-30 w-140px">Danger</button>
                                    <button type="button" class="btn btn-round btn-dark btn-lg m-t-10  m-r-30 w-140px">Dark</button>
                                    <button type="button" class="btn btn-round btn-light btn-lg m-t-10 m-r-30 w-140px">Light</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->

@stop
@section('footer_scripts')
    <!-- end of page level js -->
@stop

