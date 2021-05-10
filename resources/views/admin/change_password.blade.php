@extends('layouts.default')
{{-- Page title --}}
@section('title')
Change Password @parent
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
                                    <h4>Change Password</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form  method="post" enctype="multipart/form-data">
                                
                                <label for="formGroupExampleInput">New Password</label>
                                <div class="input-group mb-4">
                                      <input type="password" class="form-control" placeholder="New Password" name="password" required id="password" data="eye-off">
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off toggle-password" toggle="#password"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                        </span>
                                      </div>
                                </div>
                                <label for="formGroupExampleInput">Confirm Password</label>
                                <div class="input-group mb-4">
                                      <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPass" required id="confirmPass" data="eye-off">
                                      <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon6">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off toggle-password" toggle="#confirmPass"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                                        </span>
                                      </div>
                                </div>

                                <input type="button" class="btn btn-primary" name="time" onclick="submit_pass()" value="Save Changes">
                                
                            </form>
                            <div id="passModal" class="modal animated fadeInDown" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Alert</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>

                                        <div class="modal-body" id="modal_body">
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            </div>

           
            
        <!-- </div> -->
    

@stop
@section('footer_scripts')
<script>
 function submit_pass() {
        if ($("#password").val()!="" && $("#confirmPass").val()!="") {
         
            if ($("#password").val() == $("#confirmPass").val()) {
                $.ajax({
                    url: "{{ route('admin.save_pass') }}",
                    type:'post',
                    data: {
                            _token : $('meta[name="csrf-token"]').attr('content'),
                            newPass:$("#password").val(),
                            confirmPass:$("#confirmPass").val()
                        },
                    
                    success: function(data){
                        
                        var res = JSON.parse(data);
                        console.log(res.res);
                        if (res.res) {
                            $("#password").val("");
                            $("#confirmPass").val("");
                            $("#modal_body").text("Password changed.");
                            $('#passModal').modal('show');
                        }
                        
                    }
                    
                });
            }

            else {
                $("#modal_body").text("No match new password."); 
                $('#passModal').modal('show');
            }
        }
        else {
            $("#modal_body").text("Please fully enter all fields.");
            $('#passModal').modal('show');
        }
    }
    
    $(document).on('click','.toggle-password',function() {

        let input = $($(this).attr("toggle"));

        let input_id = $(this).attr("toggle");

        let icon_html = '';

        if (input.attr("type") == "password") {
            input.attr("type", "text");
            input.attr("data", "eye");
            icon_html = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye toggle-password" toggle="'+input_id+'"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>';
        } else {
            input.attr("type", "password");
            input.attr("data", "eye-off");
            icon_html ='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off toggle-password" toggle="'+input_id+'"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>';
        }

        $(input).next('div').find('span').find('svg').remove();

        $(input).next('div').find('span').html(icon_html);
        
    });

    
</script>
@stop
