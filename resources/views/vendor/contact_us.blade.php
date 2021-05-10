@extends('layouts.personal_default')
{{-- Page title --}}
@section('title')
Contact Us @parent
@stop

@section('content')
<style>
    .custom-control{
        padding-left: 0px!important;
    }
</style>

        <!--<div class="container"> -->

            <div class="row layout-top-spacing w-100">

                <!-- <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing"> -->
                    <div class="statbox widget box box-shadow w-100">
                       
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Contact Us</h4>
                                </div>
                            </div>

                            
                             @if (Session::get('success'))
                  
                                <div class="row">
                                    <div class="col-md-12 mt-1">
                                        
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ Session::get('success') }}
                                        {{ Session::forget('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            
                                    </div>
                                </div>

                                @endif
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row mb-3">
                                <div class="col-2"><strong>{{ auth()->user()->name }}</strong></div>
                                <div class="col-1"></div>
                                <div class="col-2"><strong>{!! strtoupper($uuid) !!}</strong></div>
                            </div>
                            
                            <form  action="{{ route('profile.contact_us_mail') }}" method="post" enctype="multipart/form-data">
                            @csrf
                             <div class="row">
                                <div class="col-6">
                                    <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Request Type</label>
                                    
                                    <select class="form-control pull-right" name="type">
                                        <option>Technical support questions</option>
                                        <option>Bug report</option>
                                        <option>Commercial issues</option>
                                        <option>Orders and customer inquires</option>
                                        <option>&nbsp &nbsp &nbsp &nbsp &nbsp Refund</option>
                                        <option>&nbsp &nbsp &nbsp &nbsp &nbsp Charge back</option>
                                        <option>&nbsp &nbsp &nbsp &nbsp &nbsp Fraud review</option>
                                        <option>Payment issues & accounting inquiries</option>
                                        <option>Marketing opportunities</option>
                                        <option>Feedback</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-6"></div>
                                
                             </div>   
                        
                            <div class="row">
                              <div class="col-6">
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Subject</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your subject" name="subject" required>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-6">
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Your Message </label>
                                    <textarea rows="7" cols="50" id="formGroupExampleInput" class='form-control' name='message' placeholder="If you are reporting a technical problem please describe occure and the exact error message, if any" ></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-6">
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Upload Fle </label>
                                    <input type="file" class="form-control"  name="file">
                                </div>
                              </div>
                            </div>
                               
                                <div class="custom-control custom-checkbox">
                                    
                                    <div class="row">
                                       
                                                                                
                                        
                                    </div>                                
                                    

                                </div>

                                <input type="submit" name="time" class="btn btn-primary" value="Send">
                                
                            </form>
                            <hr>
                            <div class="row mt-3">
                                <?php $i = 0;?>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            <!--</div>-->

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')

@stop
