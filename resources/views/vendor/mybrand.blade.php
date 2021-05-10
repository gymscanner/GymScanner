@extends('layouts.default')
{{-- Page title --}}
@section('title')
My Branding @parent
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

            <div class="layout-px-spacing">

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-3 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                        <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                                
                                <div class="text-center user-info">
                                    <div class="avatar avatar-xl">
                                        <img alt="avatar" style="max-width:110px;max-height:100px;" src="{{ asset('img/images/card-pic1.jpg') }}" class="rounded-circle" />
                                    </div>

                                    <p style="color:black;" class="h6">Jaylor Dokidis</p>
                                </div>

                            </div>
                        </div>


                        <div class="education layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between">
                                    
                                    <div class="row">
                                        <div class="col-lg-8 col-md-7">
                                        <h6 class=""><b>Youtube Videos</b></h6>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                        <a href="#" class="add_brand_links"> 
                                            <h6 style="color:blue;">+ Add Links</h6>
                                        </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between">
                            <iframe width="260" height="100" src="https://www.youtube.com/embed/-2G2NLKCQG8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                    
                                </div>
                                <h6 style="color:blue;">{{substr('https://www.youtube.com/watch?v=-2G2NLKCQG8',0,37)}}</h6>
                            </div>
                        </div>
                        <div class="education layout-spacing ">
                            <div style="height:355px;" class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between">
                                    <h6 class=""><b>Certifications</b></h6>
                                    <a href="#" class="edit-profile add_brand_certificate"> 
                                        <p style="color:blue">+ Add Certificate</p>
                                    </a>
                                </div>
                                <div class="mt-3">
                                <h6 style="color:blue;">Fitness Center Certifications</h6>
                                <p>11 June 2014</p>
                                </div>
                                <br>
                                <div>
                                <h6 style="color:blue;">APKI Certified Fitness Trainer</h6>
                                <p>12 Nov 2015</p>
                                </div>
                                <br>
                                <div>
                                <h6 style="color:blue;">Fitness Center Certifications</h6>
                                <p>11 June 2021</p>
                                </div>                                                                
                            </div>
                        </div>


                    </div>

                    <div class="col-xl-9 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                        
                        <div class="">
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                   <div class="col-lg-6"> 
                                    <h3 class="">Photos</h3>
                                   </div>
                                   <div class="col-lg-6"> 
                                    <button class="btn btn-danger del_brand_photos">Delete Photos</button>
                                    <button class="btn btn-primary upload_brand_photos">Upload Photos</button>
                                   </div>                                    
                                </div>
                            </div>

                        </div>

                        <div class="layout-spacing">
                            <div class="widget-content widget-content-area">
                              

                                <div class="row">
                                    
                                    <div class="col-lg-12">                       
                                    
                                      <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                        <div class="row mb-2 show_branding_images">
                                        </div> 
                                                                        
                                      </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                <h5 class=""><b>About Me</b></h5>
                                <textarea class="form-control" placeholder="lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor egestas nisl ut turpis. Nunc, elementum  fringilla suscipit lorem dolor nulla in." rows="4"></textarea>
                                </div>
                                <br>
                                <div>
                                <h5 class=""><b>Show my Profile:</b></h5>


                                    <div class="radio mt-3">
                                        <div class="d-flex">
                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-info">
                                                  <input type="radio" id="radio-all-controls" class="new-control-input" name="gallery-style" checked>
                                                  <span class="new-control-indicator"></span>
                                                    <span class="" style="color:black">
                                                        Globally
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="radio">
                                        <div class="d-flex">
                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-info">
                                                  <input type="radio" id="radio-minimal-black" class="new-control-input" name="gallery-style">
                                                  <span class="new-control-indicator"></span>
                                                    <span class="" style="color:black">
                                                        Select Countries
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>





                                </div>    
                            </div>

                        </div>

                    </div>

                </div>
            </div>


            <!--upload brand images-->
            <div class="modal fade" id="UploadBrandPhotosModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Upload photos</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        
                        <form  action="{{ route('upload_brand_photos')}}" method="post" enctype="multipart/form-data" class="dropzone" id="dropzone">
                            @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">
                                @if(auth()->user()->role==2)

                                    Please upload your Gym License :

                                @elseif(auth()->user()->role==3)

                                    Please upload your Personal ID :

                                @endif
                                </label>
                                  
                            </div>
                            
                        </form>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                    </div>
                </div>
            </div>

            <!--add links-->
            <div class="modal fade" id="AddBrandsLinksModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add link</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                        <form action="{{ route('submit_brand_links')}}" method="post" >
                    <div class="modal-body">
                        
                            @csrf
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control brand_link" name="link">
                                  
                            </div>
                            

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                        </form>

                    </div>
                </div>
            </div>


            <!--add certificate-->
            <div class="modal fade" id="AddBrandsCertificatesModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add certificate</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                        <form action="{{ route('submit_brand_certificates')}}" method="post" >
                    <div class="modal-body">
                        
                            @csrf
                            <div class="form-group">
                                <label>Certificate name</label>
                                <input type="text" class="form-control brand_link" name="name">
                                  
                            </div>

                            <div class="form-group">
                                <label>Certificate date</label>
                                <input type="date" class="form-control brand_link" name="certificate_date">
                                  
                            </div>
                            

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                        </form>

                    </div>
                </div>
            </div>
            
                            

@stop
@section('footer_scripts')
<script>

    $('.upload_brand_photos').click(function(){

        $('#UploadBrandPhotosModal').modal('show');

        
        
    })

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

            // acceptedFiles: ".jpeg,.jpg,.png,.gif",

	        dictDefaultMessage: "<i class='far fa-image' style='font-size: 50px;margin-bottom: 15px;color: #393939;font-weight: 600;font-family: 'Nunito';'></i><h5 style='font-size: 26px;color: #393939;font-weight: 600;font-family: 'Nunito';'>Select files here to upload</h5> <br><span>( File type: PDF,PNG,JPG,JPEG )</span>",

            addRemoveLinks: true,

            timeout: 50000,

            removedfile: function (file) {

                var name = file.upload.filename;

                $.ajax({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                    },

                    type: 'POST',

                    url: '{{ route("brand_photos_delete") }}',

                    data: {filename: name},

                    success: function (data) {

                        console.log("File has been successfully removed!!");
                        getBrandingData();

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

                // console.log(response);
                getBrandingData();

            },

            error: function (file, response) {

                return (ref = file.previewElement) != null ?

                    ref.removeChild(file.previewElement) : void 0;

                // alert();

            }

        };

        $('.add_brand_links').click(function(){

            $('#AddBrandsLinksModal').modal('show');
            

        })


        $('.add_brand_certificate').click(function(){

            $('#AddBrandsCertificatesModal').modal('show');
            

        })

        function getBrandingData()
        {
            $.ajax({
                
                url : "{{ route('getBrandingData') }}",
                dataType : 'json',
                success:function(data){

                    console.log(data);

                    // let length = data.length;
                    let html = '';
                    let i;
                    
                    for(i=0; i < data.length; i++)
                    {

                        let path_html = 'upload/brands/'+data[i].image_path;
                        let path = "{{ asset('') }}"+'/'+path_html;

                        html +='<div class="col-lg-4 mb-2">'+
                                '<a class="img-1" href="https://static.photocdn.pt/images/articles/2019/08/07/images/articles/2019/07/31/linkedin_profile_picture_tips-1.jpg" data-size="1600x1068" data-med="assets/img/1280x857.jpg" data-med-size="1024x683" data-author="Samuel Rohl">'+
                                   '<img style="margin-top:10px;max-height:175px!important;" src="'+path+'" alt="image-gallery">'+
                                '</a>'+
                                '</div>';

                    }

                    $('.show_branding_images').html(html);
                    
                }

            })
        }
        
        getBrandingData();

</script>
@stop  