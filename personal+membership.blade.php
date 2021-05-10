@extends('layouts.personal_default')
{{-- Page title --}}
@section('title')
Membership Plans @parent
@stop

@section('content')
<style>
    .custom-control{
        padding-left: 0px!important;
    }
    .component-card_1 .card-title{
        margin-bottom:8px!important;
    }
    .component-card_1 .card-body {
        padding: 15px 0px;
    }
</style>

        <!--<div class="container"> -->

            <div class="row layout-top-spacing w-100">

                <!-- <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing"> -->
                    <div class="statbox widget box box-shadow w-100">
                       
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Membership Plans</h4>
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
                            <form  action="{{ route('personal_membership') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    
                                    <div class="col-lg-7">

                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="form-group mb-4">
                                                    <label for="formGroupExampleInput">Membership Type<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="For example: 12 sessions" name="service" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group mb-4">
                                                    <label for="formGroupExampleInput">Duration<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="For example: 30 days" name="duration" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="form-group mb-4">
                                                    <label for="formGroupExampleInput">Regular Price<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="For example: USD $50" name="price" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                
                                                <div class="form-group mb-4">
                                                    <label for="exampleFormControlSelect1">Currency</label>
                                                    <select class="form-control" name="currency"  id="exampleFormControlSelect1" style=" font-size: 15px!important;color: #393939!important;font-weight: 400!important;font-family: "Nunito"; required>
                                                            <option value="USD $">USD $</option>
                                                            <option value="EURO €">EURO €</option>
                                                            <option value="KWD KD">KWD KD</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-sm-12">
                                                
                                                <div class="form-group mb-4">
                                                    <label for="formGroupExampleInput">Discount (If you aren't offering any special discount, leave it empty)</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="For example: USD $10" name="discount">
                                                </div>

                                            </div>

                                            <div class="col-sm-12">
                                                
                                                <div class="form-group mb-4">
                                                    <label for="formGroupExampleInput">Additional Perk (If any)</label>
                                                    <textarea rows="3" class="form-control" id="formGroupExampleInput" placeholder="For example: 1 session free&#13;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;Free Nutritional Guide&#10;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;4 zoom calls/month" name="perk"></textarea>
                                                </div>

                                            </div>
                                            
                                       
                                            <div class="col-lg-12">
                                                <label class="new-control new-checkbox checkbox-info" style="margin-left: 2px;">
                                                    <input type="checkbox" class="new-control-input" name="featured" value="featured" style="width: 20px;height: 30px;border-radius: 3px;filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1));background-color: #ffffff;border: 1px solid #161616;vertical-align:middle;">
                                                    <span class="new-control-indicator"></span> <span style="margin-top: 5px;position: absolute;margin-left: 15px;">Set as Featured Plan</span>
                                                </label>
                                            </div>      

                                            <div class="col-lg-12">
                                                <label class="new-control new-checkbox checkbox-info" style="margin-left: 2px;">
                                                    <input type="checkbox" class="new-control-input" name="app" value="app" style="width: 20px;height: 30px;border-radius: 3px;filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1));background-color: #ffffff;border: 1px solid #161616;vertical-align:middle;">
                                                    <span class="new-control-indicator"></span> <span style="margin-top: 5px;position: absolute;margin-left: 15px;">App Exclusive (This plan will be available on the Gymscanner mobile app only)</span>
                                                </label>
                                            </div>                                          
                                            <div class="col-lg-12">
                                                 <input type="submit" name="time" class="btn btn-primary mt-2" value="Publish Offer">
                                            </div>
                                                    

                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="row">
                                        <?php $i = 0;?>
                                        @if($membership)
                                        @foreach($membership as $temp)
                                        <?php $i++;?>
                                        <div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12 mb-3">
                                            
                                            <div class="card component-card_1" style="margin-top: 21px;">
                                                @if($temp->featured!="featured")
                                                <div class="card-body" style="border-radius: 5px 5px 0px 0px;filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1));background-color: #393939;">
                                                @else
                                                <div class="card-body" style="border-radius: 5px 5px 0px 0px;filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1));background-color: #dc3545;">
                                                @endif
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                    @if($temp->app=="app")
                                                        <?php $i--;?>
                                                        <h5 class="card-title text-center" style="font-size: 14px;color: #eaeaea;font-weight: 600;font-family: Nunito;margin-bottom:8px!important;margin-top:10px;">App Exclusive</h5>
                                                    @else
                                                        <h5 class="card-title text-center" style="font-size: 14px;color: #eaeaea;font-weight: 600;font-family: Nunito;margin-top:10px;">PLAN {{$i}}</h5>
                                                    @endif
                                                        <h1 class="text-center" style="font-size: 34px;color: #eaeaea;font-weight: 600;font-family: "Nunito";">{{ $temp->service }}</h1>
                                                        <h5 class="card-title text-center" style="font-size: 14px;color: #eaeaea;font-weight: 600;font-family: "Nunito";">{{ $temp->duration }}</h5>
                                                        </div>
                                                        <div class="col-lg-12 text-center">
                                                            <a href="{{ route('personal_membership.edit',$temp->id)}}" style="color:white;" title="Edit">
                                                            <i data-feather="edit" style="width: 15px;height: 18px;"></i>
                                                            </a>
                                                            <a href="{{ route('personal_membership.delete',$temp->id)}}" style="color:white;" title="Delete">
                                                            <i data-feather="trash" style="width: 15px;height: 18px;"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="card-body" style="border-radius: 5px;background-color: #ffffff;padding: 15px 42px!important;">
                                                    <p style="text-align:center; color:#393939;margin-top:27px;"> {{ $temp->service }}</p><hr style="border-top: 3px solid #f1f2f3!important;">
                                                    <?php $perk = json_decode($temp->perk);
                                                    foreach(@$perk as $key => $v){ if(!empty($v)){?>
                                                    <p style="text-align:center; color:#393939;"> {{ $v }}</p><hr style="border-top: 3px solid #f1f2f3!important;">
                                                    <?php } } ?>
                                                    <button type="button" class="btn btn-dark" style="background-color:black!important;position:absolute;margin-left: 58px;font-weight:600;">{{ $temp->currency }}{{ $temp->price }}</button>
                                                </di>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        <div class="col-sm-12 mt-5" style="margin-left:90px!important;">

                                                
                                                <!--{{ $membership->links() }}-->
                                                {{ $membership->links('vendor.custom') }}
                                        </div>
                                        
                                        </div>
                                    </div>
                                   

                                </div>
                               
                                <!--<div class="custom-control custom-checkbox">
                                    
                                                           
                                    

                                </div>-->
                                
                            </form>
                            <hr>
                            <div class="row mt-3">
                                
                                
                            </div>
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            </div>

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')

    <script>

        // function realtime_membership()
        // {
        //     $('input[name=service]').val();
        //     $('input[name=service]').val();
        //     $('input[name=service]').val();
        //     $('input[name=service]').val();
        //     $('input[name=service]').val();

        // }

    </script>
@stop
