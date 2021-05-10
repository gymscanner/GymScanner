@extends('layouts.default')
{{-- Page title --}}
@section('title')
Bank @parent
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
                                    <h4>Edit Bank</h4>
                                </div>
                            </div>
                        </div>                      
                        <div class="widget-content widget-content-area">
                            <form  action="{{ route('admin.update_bank')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden"  name="userid" value={{$id}}>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Bank Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Bank Name" name="bank_name" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Account Holder Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Account Holder Name" name="holder_name" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Account Number</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Account Number" name="bank_number" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Bank Swift Code</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Bank Swift Code" name="swift_code" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">IBAN</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="IBAN" name="iban" required>
                                </div>

                                <input type="submit" name="time" class="btn btn-primary" value="Save Changes">
                                
                            </form>
                           
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            </div>

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')

@stop
