@extends('layouts.default')
{{-- Page title --}}
@section('title')
Users @parent
@stop

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('mytemp/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('mytemp/plugins/table/datatable/custom_dt_html5.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('mytemp/plugins/table/datatable/dt-global_style.css') }}">

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
                                    <h4>Users </h4>
                                </div>
                            </div>
                        </div>
                        
                       
                        <div class="widget-content widget-content-area">

                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Date Created</th>
                                        <th>Role</th>
                                        <th class="dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($users as $temp)
                                    @if($temp->role!=1)
                                    <tr>
                                        <td>{{$temp->name}}</td>
                                        <td>{{$temp->external_id}}</td>
                                        <td>{{$temp->email}}</td>
                                        <td>{{$temp->created_at}}</td>
                                        <td> 
                                            @if($temp->role == 2) Gym
                                            @else Personal
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.user_edit',$temp->id)}}" class="mr-3"  data-toggle="tooltip" data-placement="top" title="edit"> 
                                                <i  data-feather="edit-3"></i> 
                                            </a>
                                            <a href="{{ route('admin.user_change_pass',$temp->id)}}" class="mr-3"  data-toggle="tooltip" data-placement="top" title="Change Password"> 
                                                <i data-feather="refresh-ccw"></i> 
                                            </a>

                                            @if($temp->role == 2) 
                                                <a data-toggle="tooltip" data-placement="top" title="delete" style="color:black; cursor: pointer;" onclick="event.preventDefault(); document.getElementById('delete-form-{{$temp->id}}').submit();"> 
                                                    <i data-feather="trash-2"></i> 
                                                </a>

                                                <form id="delete-form-{{$temp->id}}" action="{{ route('admin.gym_delete', $temp->id) }}" method="POST" style="display: none;">
                                                    <input type="hidden" name="_method" value="delete">
                                                    @csrf
                                                </form>
                                            @else 
                                                <a data-toggle="tooltip" data-placement="top" title="delete" style="color:black; cursor: pointer;" onclick="event.preventDefault(); document.getElementById('delete-userform-{{$temp->id}}').submit();"> 
                                                    <i data-feather="trash-2"></i> 
                                                </a>

                                                <form id="delete-userform-{{$temp->id}}" action="{{ route('admin.user_delete', $temp->id) }}" method="POST" style="display: none;">
                                                    <input type="hidden" name="_method" value="delete">
                                                    @csrf
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            </div>

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')

     <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{ asset('mytemp/plugins/table/datatable/datatables.js') }}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{ asset('mytemp/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('mytemp/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('mytemp/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('mytemp/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

    <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>
@stop
