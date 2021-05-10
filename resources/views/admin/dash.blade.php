@extends('layouts.default')
{{-- Page title --}}
@section('title')
Dashboard @parent
@stop

@section('content')
<style>
    .custom-control{
        padding-left: 0px!important;
    }

    .component-card_7{
        width:9rem;
    }
</style>

        <!--<div class="container"> -->

            <div class="row layout-top-spacing w-100">

                <!-- <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing"> -->
                    <div class="statbox widget box box-shadow w-100">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Dashboard</h4>
                                </div>
                            </div>
                        </div>
                       
                        <div class="widget-content widget-content-area">

                            <div class="row">

                                <div class="col-lg-3">

                                    <div class="card component-card_7">
                                        <div class="card-body">
                                            <h5 class="card-text">{{$num_gym}}</h5>
                                            <h6 class="rating-count">Number of Gyms</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3">

                                    <div class="card component-card_7">
                                        <div class="card-body">
                                            <h5 class="card-text">{{$num_tra}}</h5>
                                            <h6 class="rating-count">Personal Trainers</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3">

                                    <div class="card component-card_7">
                                        <div class="card-body">
                                            <h5 class="card-text">{{$num_touri}}</h5>
                                            <h6 class="rating-count">Tourist Passes</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3">

                                    <div class="card component-card_7">
                                        <div class="card-body">
                                            <h5 class="card-text">{{$num_memship}}</h5>
                                            <h6 class="rating-count">Membership Plans</h6>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="table-responsive mt-3">
                                <table class="table table-bordered mb-4">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th>Email Address</th>
                                            <th>Web site</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($users as $temp)

                                        <tr>
                                            <td>{{$temp->name}}</td>

                                            @if($temp->avatar)

                                            <td><img src="{{asset($temp->avatar)}}" alt="image missing"

                                                    class="rounded-circle img-size"></td>

                                            @else

                                            <td><img src="{{asset('img/authors/user.jpg')}}" alt="image missing"

                                                class="rounded-circle img-size"></td>

                                            @endif

                                             <td>{{$temp->email}}</td>

                                            <td>{{$temp->website}}</td>

                                            @if($temp->role == 2)

                                            <td><span class="badge badge-success float-left">Gym</span></td>

                                            @elseif($temp->role == 3) <td><span class="badge badge-danger float-left">Personal</span></td>

                                            @else <td><span class="badge badge-primary float-left">Administrator</span></td>
                    
                                            @endif

                                        </tr>
                                        
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            </div>

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')

@stop
