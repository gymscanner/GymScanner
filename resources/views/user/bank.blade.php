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
                                    <h4>Bank Account Details</h4>
                                </div>
                            </div>
                             @if (Session::get('success'))
                  
                                <div class="row">
                                    <div class="col-md-12 mt-1">
                                        
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ Session::get('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            
                                    </div>
                                </div>
                            
                                @endif
                        </div>
                       
                        <div class="widget-content widget-content-area">
                            <form  action="{{ route('myprofile.bank.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
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
                            <hr>
                            <div class="row mt-3">
                                <?php $i = 0;?>
                                @if($bank)
                                @foreach($bank as $temp)
                                <?php $i++;?>
                               <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12 mb-3">
                                    
                                    <div class="card component-card_1" style="width: 100%!important;">
                                        <div class="card-body">
                                            
                                           <h5 class="card-title">Bank {{$i}}</h5>
                                            <p style="text-align:center; color:black;background-color:gray;">Bank Name: {{$temp->bank_name}}</p>
                                            <p style="text-align:center;background-color:gray;color:black;">Account Holder Name: {{$temp->holder_name}}</p>
                                            <p style="text-align:center;background-color:gray;color:black;">Account Number: {{$temp->bank_number}}</p>
                                            <p style="text-align:center;background-color:gray;color:black;"> Bank Swift Code: {{$temp->swift_code}}</p>
                                            <p style="text-align:center;background-color:gray;color:black;">IBAN: {{$temp->iban}}</p>
                                            <a onclick="event.preventDefault(); document.getElementById('delete-form-{{$temp->id}}').submit();" style="color:black; cursor: pointer;">

                                                <form id="delete-form-{{$temp->id}}" action="{{ route('myprofile.bank.delete', $temp->id) }}" method="POST" style="display: none;">
                                                    <input type="hidden" name="_method" value="delete">
                                                    @csrf
                                                </form>

                                                <button type="button" class="btn btn-block btn-sm btn-warning">Delete</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                
                            </div>
                        </div>
                        
                     </div>
                <!-- </div> -->
                
           
           <!-- </div>->

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')

@stop
