@extends('layouts.default')
{{-- Page title --}}
@section('title') Tourist Pass @parent @stop

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
                    <h4>Create Gym Tourist Pass</h4>
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
            <form  action="{{ route('publish_tourist')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group mb-4">
                        <label for="formGroupExampleInput">Price<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="For example: 10" name="price" required>
                    </div>
                    <div class="col-md-4 form-group mb-4">
                        <label for="currency">Currency <span class="text-danger">*</span></label>
                        <select class="form-control" id="currency" required="" name="currency" style="font-style: normal!important;; font-family: Nunito;">
                            <option value="" selected="" disabled="">Select...</option>
                            <option>USD($)</option>
                            <option>Euro(€)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="duration">Duration<span class="text-danger">*</span></label>
                    <select class="form-control" id="duration" required="" name="duration" style="font-style: normal!important;; font-family: Nunito;">
                        <option value="" selected="" disabled="">Select...</option>
                        <option>1 day</option>
                        <option>2 days</option>
                        <option>3 days</option>
                    </select>
                </div>
                
                <div class="form-group mb-4">
                    <label for="facility">Facility<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="facility" placeholder="For example: Full access&#10;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Free Wi-Fi&#10;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Park" name="facility" rows="3" required></textarea>
                </div>
                <input type="submit" name="time" class="btn btn-primary" value="Publish">
                
            </form>
            <hr>
            <div class="row mt-3">
                <?php $i = 0;?>
                @if($touristpass)
                    @foreach($touristpass as $temp)
                    <?php $i++;?>
                    <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12 mb-3">
                        <div class="card component-card_1" style="width: 100%!important;">
                            <div class="card-body">
                                <div class="py-3">
                                    <h5 class="card-title d-inline">Tourist Pass {{$i}}</h5>
                                    <a href="javascipt:void(0)" class="d-inline float-right" data-toggle="modal" data-target="#touristPassEditModal{{ $temp->id }}">
                                        <i data-feather="edit"></i>Edit
                                    </a>
                                </div>
                                <p style="text-align:center; color:black;background-color:gray;"> Price:   {{$temp->price.$temp->currency}}</p>
                                <p style="text-align:center;background-color:black;color:white;">Duration: {{$temp->duration}}</p>
                                <p style="text-align:center;background-color:lightblue;color:black;">Facility: {{$temp->facility}}</p>
                                <a style="color:black; cursor: pointer;" onclick="event.preventDefault(); document.getElementById('delete-form-{{$temp->id}}').submit();">

                                    <form id="delete-form-{{$temp->id}}" action="{{ route('touristpass.delete', $temp->id) }}" method="POST" style="display: none;">
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
</div>

<!-- </div> -->

@foreach($touristpass as $temp)
    <div class="modal fade" id="touristPassEditModal{{ $temp->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Tourist Pass</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@stop

@section('footer_scripts')
    
@stop