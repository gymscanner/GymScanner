@extends('layouts.personal_default')
{{-- Page title --}}
@section('title')
My Branding @parent
@stop

@section('content')
 <link rel="stylesheet" type="text/css" href="{{ asset('mytemp/plugins/select2/select2.min.css') }}">
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
    .user-profile .widget-content-area .user-info {
        margin-top: 22px;
    }

    .sidebar-closed .layout-px-spacing {
        padding: 0 0px!important;
    }

    .layout-spacing {
        padding-bottom: 1px!important;
    }
</style>

            <div class="layout-px-spacing">

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-3 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                        <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                                
                                <div class="text-center user-info">

                                    <form method="post" id="upload-image-form" enctype="multipart/form-data" style="display:none;">
                                                    @csrf
                                            <input type="file" name="file" class="brand_image" onchange="UploadImage(this);">

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Upload</button>
                                        </div>

                                    </form>
    
                                    <div class="avatar avatar-xl">
                                        

                                        <div class="container change_brand_image" style="background-color:white;display:inline-block; width:30px; height:30px;border-radius:50%;margin-left: 100px;position: absolute;margin-top: 90px;box-shadow: 0px 0px 4px black;z-index:3;cursor:pointer;">
                                            <span style="color:black;font-size:26px;">
                                            <i data-feather="edit" style="width: 15px;margin-left: -6px;margin-top: -13px;"></i>
                                            </span>
                                        </div>

                                        
                                        <div style=" display: inline-block;position: relative;width: 130px;height: 130px;overflow: hidden;border-radius: 50%;box-shadow:0px 0px 4px #cccccc;">
                                            
                                            <img alt="avatar" style="max-width:130px;min-height:130px;" src="{{ asset('img/images/card-pic1.jpg') }}" class="rounded-circle avatar_img" />
                                        
                                        </div>

                                    </div>

                                    <p style="color:black;" class="h6 mt-3 mb-0">{{ @$name->name == ''?auth()->user()->name:@$name->name}} <i data-feather="edit" style="width: 15px;" class="change_brand_name" data-name="{{ @$name->name }}"></i></p>
                                </div>
                            </div>


                            <div class="widget-content widget-content-area">
                                    
                                    <div class="row">
                                        <div class="col-lg-7 col-sm-6 col-6">
                                        <h6 style="font-size:16px;" class=""><b>Youtube Videos</b></h6>
                                        </div>

                                       <div class="col-lg-5 col-sm-6 col-6">
                                        <a href="javascript:void(0)" class="add_brand_links"> 
                                            <h6 style="font-size: 11px;font-weight: 612;color:#393939;">+ Add Links</h6>
                                        </a>
                                        </div>
                                    </div>

                                <div class="row">
                                    @foreach($youtube as $key => $v)
                                    <div class="col-lg-12 mb-2">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" width="260" height="100" src="{{ $v->name }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                            </iframe>                                    
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                </div>
                                     
                            </div>
                            <div style="height:385px;" class="widget-content widget-content-area">
                                <div class="row">
                                  <div class="col-lg-6 col-sm-6 col-6">  
                                    <h6 style="font-size:16px;" class=""><b>Certifications</b></h6>
                                  </div>
                                    
                                  <div class="col-lg-6 col-sm-6 col-6">   
                                    <a href="javascript:void(0)" class="add_brand_certificate"> 
                                        <p style="font-size: 11px;font-weight: 612;color:#393939;">+ Add Certificate</p>
                                    </a>
                                  </div> 
                                </div>
                                
                                <div class="row mt-2">
                                @foreach($certificates as $key => $v)
                                 <div class="col-lg-12 mb-2">
                                    
                                    <h6 style="font-size:14px;color:blue;">{{ $v->name }}</h6>
                                    <p style="font-size:12px;color:#393939;">{{ date('d M Y',strtotime($v->certificate_date)) }}</p>
                                    
                                  </div>  
                                @endforeach
                                </div>
                                
                                                                                                                           
                            </div>
                        </div>


                    </div>

                    <div class="col-xl-9 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">


                            <div class="widget-content widget-content-area">
                                <div class="row">
                                   
                                   <div class="col-lg-6"> 
                                    <h3 class="font-size:15px;color:#393939;font-weight:600;">Photos</h3>
                                   </div>
                                                                       
                                   <div class="col-lg-6 text-right"> 
                                    <button class="btn btn del_brand_photos mb-1" style="background-color:#f8e4e4;color:#dc3545;">
                                    <i data-feather="trash" style="width: 15px;height: 22px;"></i> Delete Photos</button>
                                   
                                    <button class="btn btn-primary mb-1 upload_brand_photos">+ Upload Photos</button>
                                   </div>
                                </div>
                            </div>

                        <div class="layout-spacing">
                            <div class="widget-content widget-content-area">
                              
                                      
                                    <!-- Gallery -->
                                    <div class="row show_branding_images" style="max-width:103%;">
                                        
                                    </div>
                                    <!-- Gallery -->
        

                                <form action="{{route('save_brand_info')}}" method="post">
                                @csrf
                                    <div style="margin-top:-10px;!important" class="">
                                        <h5 class="ml-1"><b>About Me</b></h5>
                                        <textarea class="form-control" name="about" placeholder="About me" rows="4">{{ @$about->about }}</textarea>
                                    </div>
                                    <br>
                                    <h5 class=""><b>Show my Profile:</b></h5>
                                    <div class="radio mt-3">
                                        <div class="d-flex">
                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-info">
                                                  <input type="radio" id="radio-all-controls" class="new-control-input" name="select_country_type" value="global" {{ @$about->select_country =='' || @$about->select_country == 'global'?'checked':'' }}>
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
                                                  <input type="radio" id="radio-minimal-black" class="new-control-input" name="select_country_type" value="selected" {{ @$about->select_country == 'selected'?'checked':'' }}>
                                                  <span class="new-control-indicator"></span>
                                                    <span class="" style="color:black">
                                                        Select Countries
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php 

                                        $show_countries  = 'none';
                                        if(@$about->select_country == 'selected')
                                        {
                                            
                                            $show_countries  = 'block';

                                        }
                                        // print_r(@json_decode($about->countries));
                                        function check_country($arr,$code)
                                        {
                                            foreach($arr as $v)
                                            {
                                                if($v == $code)
                                                {
                                                    return true;
                                                    break;
                                                }
                                            }

                                            return false;
                                        }
                                    ?>
                                    <div class="row pl-4 show_countries" style="display:{{ $show_countries }}">
                                        <div class="col-md-12">

                                            <select class="form-control tagging" multiple="multiple" name="selected_counrties[]">
                                                
                                                @foreach($countries as $code => $country):

                                                    <?php $countryName = ucwords(strtolower($country["name"])); ?>
		                                            <?php $check = false; if(@count(@json_decode(@$about->countries)) > 0){ $check = check_country(@json_decode(@$about->countries),$code); }?>
                                                    <option value="{{ $code }}" {{ $check == true?'selected':''}}>{{ $countryName }} </option>
                                                
                                                @endforeach

                                            </select>

                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                </form>
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

                                    Please upload your photos ID :

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

                 <!--delete images-->
            <div class="modal fade" id="DeleteImagesModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete photo</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    
                    <div class="modal-body">
                        
                            <p>Are you sure you want to delete?</p>
                            

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary delete_photos">Yes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                        

                    </div>
                </div>
                
            </div>

             <!--delete images-->
            <div class="modal fade" id="AuthDeleteImageModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete photo</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    
                    <div class="modal-body">
                        
                            <p>Kindly select atleast one photo</p>
                            

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                        

                    </div>
                </div>
                
            </div>

            <!--add brand name-->
            <div class="modal fade" id="BrandNameModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Name</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                        <form action="{{ route('submit_brand_name')}}" method="post" >
                    <div class="modal-body">
                        
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control brand_name" name="brand_name">
                                  
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
<script src="{{ asset('mytemp/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('mytemp/plugins/select2/custom-select2.js') }}"></script>
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
                cache : false,
                async : true,
                success:function(data){

                    // console.log(data);
                    
                    // let length = data.length;
                    let images = data.images;
                    let avatar = data.avatar;

                    let html = '';
                    let i;
                    
                    if(images.length > 0)
                    {

                        for(i=0; i < images.length; i++)
                        {

                            let path_html = 'upload/brands/'+images[i].image_path;
                            let path = "{{ asset('') }}"+'/'+path_html;

                            html +='<div class="col-sm-12 col-md-4 mb-2">'+
                                    '<input type="checkbox" class="check_brand_image" data="'+images[i].image_path+'" style="margin-left: 13px;margin-top: 13px;position: absolute;"><img style="width:100%;height:200px;" src="'+path+'" class="w-100 shadow-1-strong rounded mb-4" alt="">'+
                                    '</div>';

                        }

                    }
                    else
                    {
                         html ='<div class="col-lg-12 mb-4">'+
                                    '<p style="font-size:20px;">No photo found...</p>'+
                                    '</div>';
                    }

                    if(avatar == null)
                    {
                        // let path_html1 = 'upload/brands/'+avatar.name;
                        // let path1 = "{{ asset('') }}"+'/'+path_html1;
                        // $('.avatar_img').attr('src',path1);
                        
                    }
                    else
                    {

                        let path_html1 = 'upload/brands/'+avatar.name;
                        let path1 = "{{ asset('') }}"+'/'+path_html1;
                        $('.avatar_img').attr('src',path1);
                        
                    }

                    $('.show_branding_images').html(html);
                   
                    
                }

            })
        }
        
        getBrandingData();

        $(document).on('click','.check_brand_image',function(){

            $(this).attr('checked',true);

        })


        $('.del_brand_photos').click(function(){

            let upload_images = [];

            $.each($(".check_brand_image:checked"), function(){
                upload_images.push($(this).attr('data'));
            });

            if(upload_images.length > 0)
            {

                $('#DeleteImagesModal').modal('show');
            
            }

            else
            {
                $('#AuthDeleteImageModal').modal('show');
                
            }


        })


        $('.delete_photos').click(function(){
            
             let upload_images = [];

            $.each($(".check_brand_image:checked"), function(){
                upload_images.push($(this).attr('data'));
            });

            let token = '{{ csrf_token() }}';

            $.ajax({
                url : "{{ route('delete_brand_photos') }}",
                method : "post",
                
                data : { _token : token , id : upload_images},

                success:function(data)
                {
                    $('#DeleteImagesModal').modal('hide');
                    getBrandingData();

                }   

            })

                

        })


        $('.change_brand_name').click(function(){

            let v = $(this).attr('data-name');

            $('.brand_name').val(v);
            
            $('#BrandNameModal').modal('show');

        })

        $('input[name=select_country_type]').change(function(){

            let val = $(this).val();

            if (val == 'selected')
            {
                $('.show_countries').css('display','block')
            }
            else
            {
                $('.show_countries').css('display','none')

            }

        })

        $(".tagging").select2({
            
        });

        //edit brand image
        $('.change_brand_image').click(function(){
            
            $('.brand_image').trigger('click');

        })

        function UploadImage(input) {

            $('#upload-image-form').trigger('submit');
           
        }

        $('#upload-image-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            // console.log(formData);
            $.ajax({
                type:'POST',
                url: '{{ route("submit_brand_image") }}',
                data: formData,
                contentType: false,
                processData: false,
                success:function(){
                    
                    getBrandingData();
                    
                } 
            });
        });


</script>

@stop 