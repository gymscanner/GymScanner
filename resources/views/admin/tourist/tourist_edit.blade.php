@extends('layouts.default')
{{-- Page title --}}
@section('title')
Tourist Pass Manager@parent
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
                                    <h4>Edit TOURIST PASS</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form  action="{{ route('admin.update_tourist')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                                <input type="hidden" class="form-control" id="inputUsername3"  name="userid" value={{$id}}>

                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Price</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example: US $10" name="price" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Duration</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"  placeholder="Example: 1 day" name="duration" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Facility</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Access" name="facility" required>
                                </div>

                                <input type="submit" name="time" class="btn btn-primary" value="Publish">
                                
                            </form>
                           
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            </div>

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')

@stop
