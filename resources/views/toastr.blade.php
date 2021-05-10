@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Toastr @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link href="{{ asset('vendors/toastr/css/toastr.css') }}"  rel="stylesheet" type="text/css" />

    <!--end of page vendors -->
@stop
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Toastr</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Toastr</li>
            </ol>
        </div>
        <div class="separator-breadcrumb border-top"></div>




    </section>
    <!-- /.content -->
    <!-- /.content -->
    <section class="content">
        <div class="row">
            <!--row starts-->
            <div class="col-12">
                <div class="card ">
                          <div class="card-body p-20">
                            <h5>Toastr</h5>
                            <p>Toastr is a Javascript library for non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended.
                            </p>
                            <div class="row">
                                <div class="col-12">
                                    <h6>Variants</h6>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-success btn-block" id="toast-success">Success Toastr</button>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-warning btn-block" id="toast-warning">Warning Toastr</button>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-info btn-block" id="toast-info">Info Toastr</button>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-danger btn-block" id="toast-error">Danger Toastr</button>
                                </div>
                            </div>
                         </div>
                </div>

                <div class="card ">
                          <div class="card-body p-20">
                            
                            <div class="row">
                                <div class="col-12">
                                    <h6>Positions</h6>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-light btn-block text-dark" id="toast-position-top-left">Top Left</button>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-light btn-block text-dark" id="toast-position-top-center">Top Center</button>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-light btn-block text-dark" id="toast-position-top-right">Top Right</button>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-light btn-block text-dark" id="toast-position-top-full">Top Full Width</button>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-light btn-block text-dark" id="toast-position-bottom-left">Bottom Left</button>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-light btn-block text-dark" id="toast-position-bottom-right">Bottom Right</button>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-light btn-block text-dark" id="toast-position-bottom-center">Bottom center</button>
                                </div>
                                 <div class="col-md-6 col-12 mb-3">
                                    <button class="btn btn-outline-light btn-block text-dark" id="toast-position-bottom-full">Bottom Full Width</button>
                                </div>
                            </div>
                         </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12 ">
                        <div class="card ">
                          <div class="card-body p-20 mb-3">
                            
                         
                                    <h6>Text Notification</h6>
                                    <div class="row">
                                         <div class=" col-12">
                                            <button class="btn btn-outline-info btn-block" id="toast-text-notification">Show Toast</button>
                                        </div>
                                    </div>  
                                </div>                                      
                            </div>
                         </div>
              

                        <div class="col-md-6 col-12 ">
                            <div class="card ">
                                <div class="card-body p-20">
                            
                                        <h6>Close Button</h6>
                                    <div class="row">
                                         <div class="col-12 mb-3">
                                            <button class="btn btn-outline-success btn-block" id="toast-close-button">Close Toast</button>
                                        </div>
                                    </div>  
                               
                            </div>
                        </div>
                    </div>
                      </div>

                        <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card ">
                          <div class="card-body p-20">
                            
                         
                                    <h6>Progress Bar</h6>
                                    <div class="row">
                                         <div class=" col-12 mb-3">
                                            <button class="btn btn-outline-warning btn-block" id="toast-progress-bar">Show Toast</button>
                                        </div>
                                    </div>  
                                </div>                                      
                            </div>
                         </div>
              

                        <div class="col-md-6 col-12">
                            <div class="card ">
                                <div class="card-body p-20">
                            
                                        <h6>Clear Toast</h6>
                                    <div class="row">
                                         <div class="col-12 mb-3">
                                            <button class="btn btn-outline-danger btn-block" id="toast-clear-btn">Clear Toast</button>
                                        </div>
                                    </div>  
                               
                            </div>
                        </div>
                    </div>
                      </div>

                       <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card ">
                          <div class="card-body p-20">
                            
                         
                                    <h6>Remove Toast</h6>
                                    <p>remove toast without animation</p>
                                    <div class="row">
                                         <div class=" col-12 mb-3">
                                            <button class="btn btn-outline-light text-dark btn-block mb-3" id="toast-show-remove">Show Toast</button>
                                             <button class="btn btn-outline-light text-dark btn-block" id="toast-remove">Remove Toast</button>
                                        </div>
                                    </div>  
                                </div>                                      
                            </div>
                         </div>
              

                        <div class="col-md-6 col-12">
                            <div class="card ">
                              <div class="card-body p-20">
                            
                         
                                    <h6>Clear Toast</h6>
                                    <p>Clear toast with animation</p>
                                    <div class="row">
                                         <div class=" col-12 mb-3">
                                            <button class="btn btn-outline-light text-dark btn-block mb-3" id="toast-show-clear">Show Toast</button>
                                             <button class="btn btn-outline-light text-dark btn-block" id="toast-clear">Clear Toast</button>
                                        </div>
                                    </div>  
                                </div>
                        </div>
                    </div>
                      </div>

                      <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card ">
                          <div class="card-body p-20">
                            
                         
                                    <h6>Show .6s</h6>
                                    <p>the show time can be define by using <span class="text-danger">showDuration</span></p>
                                    <div class="row">
                                         <div class=" col-12 ">
                                            <button class="btn btn-outline-info btn-block mb-3" id="toast-fast-duration">Show Fast Toast</button>
                                            
                                        </div>
                                    </div> 

                                       <h6>Timeout 6s</h6>
                                    <p>Time Out can be define by <span class="text-danger">timeout</span> to set what amount of time will stay</p>
                                    <div class="row">
                                         <div class=" col-12 ">
                                            <button class="btn btn-outline-info btn-block mb-3" id="toast-timeout">Timeout Toast</button>
                                            
                                        </div>
                                    </div>  
                                </div>                                      
                            </div>
                         </div>
              

                        <div class="col-md-6 col-12">
                            <div class="card ">
                              <div class="card-body p-20">
                            
                         
                                    <h6>Hide 3s</h6>
                                    <p>Hide can be define by  <span class="text-danger">hideDuration</span> to set what amount of time will take to hide message</p>
                                    <div class="row">
                                         <div class=" col-12">
                                            <button class="btn btn-outline-light text-dark btn-block mb-3" id="toast-slow-duration">Hide Toast</button>
                                           
                                        </div>
 </div>  
                                                <h6>Sticky</h6>
                                    <p>Sticky Message can be create by set the <span class="text-danger">timeout</span> to set <span class="text-danger">0</span></p>
                                    <div class="row">
                                         <div class=" col-12 ">
                                            <button class="btn btn-outline-light text-dark btn-block" id="toast-sticky">Sticky Toast</button>
                                            
                                        </div>
                                    </div> 
                                   
                                </div>
                        </div>
                    </div>
                      </div>

                      <div class="card">
                         
                            <div class="col-12 my-3">
                                <h6>Show / Hide animation</h6>
                                </div>
                          <div class="col-12">  
                      <div class="row">

                    <div class="col-md-6 col-12">
                        <div class="card ">
                          <div class="card-body p-20">
                            
                         
                                    <h6>FadeIn /FadeOut</h6>
                                   
                                    <div class="row">
                                         <div class=" col-12">
                                            <button class="btn btn-outline-success btn-block mb-3" id="toast-fade">Fade Toast</button>
                                            
                                        </div>
                                    </div>  
                                </div>                                      
                            </div>
                         </div>
              

                        <div class="col-md-6 col-12">
                            <div class="card ">
                              <div class="card-body p-20">
                            
                         
                                    <h6>SlideDown /SlideUp</h6>
                                   
                                    <div class="row">
                                         <div class=" col-12 ">
                                            <button class="btn btn-outline-success btn-block mb-3" id="toast-slide">Slide Toast</button>
                                           
                                        </div>
                                    </div>  
                                </div>
                        </div>
                    </div>
                      </div>
                           </div>
                      </div>



                
            </div>
            <!--md-6 ends-->
           
        </div>



    </section>



@stop
@section('footer_scripts')
    <!--   page level js ----------->
    <script src="{{ asset('vendors/toastr/js/toastr.js') }}" ></script>
    <script src="{{ asset('js/pages/toastr.js') }}"></script>
    <!-- end of page level js -->
  
@stop
