@extends('layouts.default')
{{-- Page title --}}
@section('title')
User Profile @parent
@stop

@section('content')
<style>
    .custom-control{
        padding-left: 0px!important;
    }

::placeholder {
  color: grey !important;
  opacity: 0.5 !important;
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: grey !important;
   opacity: 0.5 !important;   
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: grey !important;
    opacity: 0.5 !important;
}


</style>
        <!--<div class="container"> -->

            <div class="row layout-top-spacing w-100">

                <!-- <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing"> -->
                    <div class="statbox widget box box-shadow w-100">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>User Profile</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                                        
                            <div class="row"  style="margin-top:30px;margin-left:10px;">
                                
                                @if($avatar)
                                <div class="col-lg-4">                
                                <img class="img-thumbnail" style="width:100px%;height:250px;background-repeat: no-repeat;" src="{{ asset($avatar->avatar) }}"  >
                                </div>
                                @else
                                <div class="col-lg-4">                
                                <img class="img-thumbnail" style="width:100px%;height:250px;background-repeat: no-repeat;" src="{{ url('mytemp/assets/img/b_img.jpg') }}"  >
                                </div>
                                @endif  
                                <div class="col-lg-8">
                                    
                                     
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <label for="exampleFormControlSelect1">ID:</label>
                                             {{ $users->external_id }}
                                            
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">

                                                @if($users->role == 3)
                                                <label for="exampleFormControlSelect1">Trainer Name:</label>
                                                @else
                                                <label for="exampleFormControlSelect1">Gym Name:</label>
                                                @endif

                                                {{($company_data)?$company_data->company_name:''}}

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="exampleFormControlSelect1">Country:</label>
                                                {{($company_data)?$company_data->country:''}}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="formGroupExampleInput">Location:</label>
                                                {{($company_data)?$company_data->address:''}}
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="formGroupExampleInput">Email:</label>
                                                {{($company_data)?$company_data->email:''}}
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="formGroupExampleInput">Website:</label>
                                                {{($company_data)?$company_data->website:''}}
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="formGroupExampleInput">Contact Person:</label>
                                                {{($company_data)?$company_data->contact:''}}
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Mobile:</label>
                                                {{($company_data)?$company_data->phone_number:''}}
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="exampleFormControlTextarea1">GYM Info:</label>
                                                {{($company_data)?$company_data->message:''}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                            </div> 

                        </div>
                    </div>
                    <div class="statbox widget box box-shadow w-100 mt-6">    
                      
                            
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Network</h4>
                                        <h6>Account Link</h6>
                                    </div>
                                </div>
                            </div>

                             <div class="widget-content widget-content-area">
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">Facebook: </label>
                                            {{($company_data)?$company_data->facebook:''}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                         <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">Twitter: </label>
                                            {{($company_data)?$company_data->twitter:''}}
                                        </div>
                                    </div>
                                </div>

                                 <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">Instagram: </label>
                                            {{($company_data)?$company_data->instagram:''}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">Youtube Video Link: </label>
                                            {{($company_data)?$company_data->youtube:''}}
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
<!--   page level js ----------->
<script src="{{ asset('vendors/toastr/js/toastr.js') }}" ></script>
<script src="{{ asset('js/pages/toastr.js') }}"></script>
<script>
    function avatar(){
        document.getElementById("avatar").click();
    }

    function submit_fun(){
        document.getElementById("real_submit").click();
    }
    function reset_fun() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "profile/reset",
            type:'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(){
                location.reload();
            }
        });
    }
    function image_del(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "profile/banner/delete/"+id,
            type:'post',
            headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
            success: function(){
                $("#banner-preview-"+id).hide();
            }
        });
    }
    function working(e){
        var checking = e.checked;
        if(checking == true){
           $("#working").children().children().children("input").css({ 
                "background-color": "gray", 
            }); 
        }
        else{
            $("#working").children().children().children("input").css({ 
                "background-color": "white", 
            }); 
        }
    }
</script>
 <script src="{{ asset('mytemp/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

<script type="text/javascript">

        //First upload
    let firstUpload = new FileUploadWithPreview('myFirstImage');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function (file) {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url("delete") }}',
                    data: {filename: name},
                    success: function (data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function (e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
                return (ref = file.previewElement) != null ?
                    ref.removeChild(file.previewElement) : void 0;
                // alert();
            }
        };
</script>




@stop
