@extends('layouts.default')
{{-- Page title --}}
@section('title')
Membership Edit @parent
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
                                    <h4>Edit Membership Plan</h4>
                                </div>
                            </div>
                        </div>                      
                        <div class="widget-content widget-content-area">
                            <form  action="{{ route('membership_update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <input type="hidden" name="id" value="{{ $membership->id }}">
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Price</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Price" name="price" required value="{{ $membership->price }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Duration</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Duration" name="duration" required value="{{ $membership->duration }}">
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Service</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Service" name="service" required value="{{ $membership->service }}">
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Additional Perk</label>
                                    <textarea class="form-control" name="perk" placeholder="Additional Perk" rows="3" required>{{ $membership->perk }}</textarea>
                                </div>
                               
                                <div class="custom-control custom-checkbox">
                                    
                                    <div class="row">
                                       
                                        <div class="col-lg-12">
                                            <label class="new-control new-checkbox checkbox-info">
                                                <input type="checkbox" class="new-control-input" name="app" value="app"  {{ $membership->app !='computer'?'checked':'' }}>
                                                <span class="new-control-indicator"></span> App Exclusive
                                            </label>
                                        </div>                                          
                                        
                                    </div>                                
                                    

                                </div>

                                <input type="submit" name="time" class="btn btn-primary" value="Publish Offer">
                                
                            </form>
                            
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            </div>

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')

@stop
