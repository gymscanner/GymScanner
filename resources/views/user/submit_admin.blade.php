@extends('layouts.default')
{{-- Page title --}}
@section('title')
Notify Gymscanner @parent
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
                                    <h4>Complete Your Profile</h4>
                                </div>
                            </div>
                        </div>
                       
                        <div class="widget-content widget-content-area">
                            <form method="post" enctype="multipart/form-data">

                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Profile</label>
                                    @if($profile)
                                    <span style="color: #0ae60a;">
                                        {{-- <i class="fas fa-check-circle"></i> --}}
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                    @else
                                    <span style="color: red;"><i class="fas fa-ban"></i></span>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">My Branding</label>
                                    <span style="color: red;"><i class="fas fa-ban"></i></span>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Membership</label>
                                    @if($membership)
                                    <span style="color: #0ae60a;">
                                        {{-- <i class="fas fa-check-circle"></i> --}}
                                        <i class="fas fa-check-circle"></i>
                                    </span>
                                    @else
                                    <span style="color: red;">
                                        <i class="fas fa-ban"></i>
                                    </span>
                                    @endif
                                </div>
                                
                                @if(auth()->user()->role==2)
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Tourist Pass </label>
                                     @if($touristpass)
                                   <span style="color: #0ae60a;"><i class="fas fa-check-circle"></i></span>
                                    @else
                                    <span style="color: red;"><i class="fas fa-ban"></i></span>
                                    @endif
                                </div>
                                @endif

                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Bank Account </label>
                                    @if($bank)
                                   <span style="color: #0ae60a;"><i class="fas fa-check-circle"></i></span>
                                    @else
                                    <span style="color: red;"><i class="fas fa-ban"></i></span>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Documents </label>
                                     @if($document)
                                  <span style="color: #0ae60a;"><i class="fas fa-check-circle"></i></span>
                                    @else
                                    <span style="color: red;"><i class="fas fa-ban"></i></span>
                                    @endif
                                </div>
                                
                                @if(auth()->user()->role==3)
                                    @if($document&&$bank&&$membership&&$profile)

                                    <a href="{{ route("send_notification_admin") }}" class="btn btn-primary">Submit</a>

                                    @endif
                                @endif
                                @if(auth()->user()->role==2)
                                    @if($document&&$bank&&$membership&&$profile&&$touristpass)

                                    <a href="{{ route("send_notification_admin") }}" class="btn btn-primary">Submit</a>

                                    @endif
                                @endif
                                
                            </form>
                           
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            <!-- </div> >

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')

@stop
