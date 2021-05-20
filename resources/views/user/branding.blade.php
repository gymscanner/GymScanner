@extends('layouts/default')

@section('title', 'Branding')

@section('content')

<style type="text/css">
	.upload_brand_photos {
		padding: 10px 20px;
	}

	.uploaded_photos img.image {
		border:1px solid #d8d8d8;
		border-radius: 8px;
	}

	.tooltips {
        position: relative;
        display: inline-block;
        /*border-bottom: 1px dotted black;*/
        opacity: 1;
    }

    .tooltips .tooltiptext {
        visibility: hidden;
        width: 30rem;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        top: -2rem;
        left: 110%;
    }

    .tooltips .tooltiptext::after {
        content: "";
        position: absolute;
        top: 50%;
        right: 100%;
        margin-top: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent black transparent transparent;
    }
    .tooltips:hover .tooltiptext {
        visibility: visible;
    }


    .tooltip_avatar {
        position: relative;
        display: inline-block;
        /*border-bottom: 1px dotted black;*/
        opacity: 1;
    }

    .tooltip_avatar .tooltipavatartext {
        visibility: hidden;
        width: 25rem;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        top: 1rem;
        left: 110%;
    }

    .tooltip_avatar .tooltipavatartext::after {
        content: "";
        position: absolute;
        top: 50%;
        right: 100%;
        margin-top: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent black transparent transparent;
    }
    .tooltip_avatar:hover .tooltipavatartext {
        visibility: visible;
    }
</style>

<div class="layout-px-spacing">
	<div class="row layout-spacing">

		<!-- Content -->
		<div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
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
						
						<div class="avatar avatar-xl tooltip_avatar">
                            <span class="tooltipavatartext">These images will be used in your profile in Gymscanner Apps and Website. <br>The maximum size of photo should be 400KB.</span>
							
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
	                                <!-- <video width="260" height="100" controls autoplay>
		                                <source src="{{ $v->name }}" type="video/mp4">https://www.youtube.com/embed/tgbNymZ7vqY
		                            </video>  <br> -->
		                            <iframe width="420" height="345" src="{{ $v->name }}">
									</iframe>                       
	                            </div>
	                        </div>
	                        <br>
	                        <div class="col-lg-12 text-right mb-4">
								<a href="javascript:void(0)" class="edit_brand_links" data-value="{{ $v->id }}" data-param-value="{{ $v->name }}" style="color: green;" title="Edit">
									<i data-feather="edit" style="height: 2rem; width: auto!important;"></i>
								</a>
								<a href="javascript:void(0)" class="delete_brand_links" data-value="{{ $v->id }}" style="color: red; cursor: pointer;" title="Delete">
									<i data-feather="trash" style="height: 2rem; width: auto!important;"></i>
								</a>
	                        </div>
                        @endforeach
                    </div>
				</div>
			</div>
		</div>

		<div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
			<div class="widget-content widget-content-area">
				<div class="row">
					
					<div class="col-lg-6 d-flex">
						<h3 class="font-size:15px;color:#393939;font-weight:600;">Photos&nbsp;</h3>

						<div class="tooltips mt-2">
                            <i class="fa fa-question-circle"></i>&nbsp;&nbsp;
                            <span class="tooltiptext">These images will be used in your profile in Gymscanner Apps and Website. <br>The maximum size of photo should be 1024 X 512 pixels.</span>
                        </div>
					</div>
					
					<div class="col-lg-6 text-right">
						<button class="btn btn-danger del_brand_photos mb-1" style="color:#dc3545; font-size: 11px !important;"><i data-feather="trash" style="width: 15px;height: 22px;"></i> Delete Photos</button>
					
						<button class="btn btn-primary mb-1 upload_brand_photos" style="font-size: 11px !important">+ Upload Photos</button>
					</div>
				</div>

				<hr>
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
							<h5 class="ml-1"><b>About the Gym</b></h5>
							<textarea class="form-control" name="about" placeholder="About the Gym" rows="4" required>{{ @$about->about }}</textarea>
						</div>
						<br>
						
						<h5 class=""><b>Insert Google Location:</b></h5>
						
						<textarea name="google_location" class="form-control" placeholder="Google Location" rows="4" required>{{ @$about->google_location }}</textarea>
						<br>
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
								<input type="text" class="form-control brand_link youtube_link" name="link">
								
							</div>
							
						</div>
						<!-- Modal footer -->
						<div class="modal-footer" style="display: none;">
							<button type="submit" class="btn btn-primary">Save Changes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</form>

					<div class="modal-footer">
						<button type="button" class="btn btn-primary-temp">Save Changes</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!--edit video links-->
		<div class="modal fade" id="EditBrandsLinksModal">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Edit link</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<form action="{{ route('update_brand_links')}}" method="post" >
						<div class="modal-body">
							
							@csrf
							<div class="form-group">
								<label>Link</label>
								<input type="text" class="form-control brand_link youtube_edit_link" name="link" id="edit_brand_links">
								<input type="hidden" name="brand_link_id" id="brand_link_id">
							</div>
							
						</div>
						<!-- Modal footer -->
						<div class="modal-footer" style="display: none;">
							<button type="submit" class="btn btn-primary">Save Changes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</form>

					<div class="modal-footer">
						<button type="button" class="btn btn-primary-temp">Save Changes</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!--delete video links-->
		<div class="modal fade" id="DeleteBrandsLinksModal">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Delete link</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal body -->
					<form action="{{ route('delete_brand_links')}}" method="post" >
						<div class="modal-body">
							@csrf
							<div class="form-group">
								<label>Link</label>
								<input type="hidden" name="brand_link_id" id="brand_link_id_for_delete">
							</div>
							
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Yes</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
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

		<!--confirmation brand logo-->
		<div class="modal fade" id="ConfirmLogoModal">
			<div class="modal-dialog modal-lg">
				<div class="modal-content ml-auto w-75">
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Successfully changed your branding Logo.</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		@endsection

@section('footer_scripts')

<script>
	$('.upload_brand_photos').click(function(){
        $('#UploadBrandPhotosModal').modal('show');  
    });

    Dropzone.options.dropzone = {
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
        }
    };

    function getBrandingData()
    {
        $.ajax({
            
            url : "{{ route('getBrandingData') }}",
            dataType : 'json',
            cache : false,
            async : true,
            success:function(data){
                let images = data.images;
                let avatar = data.avatar;

                let html = '';
                let i;
                
                if(images.length > 0)
                {

                    for(i=0; i < images.length; i++)
                    {

                        let path_html = 'upload/brands/'+images[i].image_path;
                        let path = "{{ asset('') }}"+path_html;

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
                    let path1 = "{{ asset('') }}"+path_html1;
                    $('.avatar_img').attr('src',path1);
                }

                $('.show_branding_images').html(html);
            }
        })
    }
    
    getBrandingData();

    $(document).on('click','.check_brand_image',function(){
        $(this).attr('checked',true);
    });

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
    });

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
        });
    });

    //edit brand image
    $('.change_brand_image').click(function(){
        $('.brand_image').trigger('click');
    });

    function UploadImage(input) {
    	var file = input;
    	var file_size = input.files[0].size;
        if (file_size > 400000) {
        	alert('Branding Logo image size should be than small with 400KB.');
        	return;
        }
        $('#upload-image-form').trigger('submit');
    }

    $('#upload-image-form').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: '{{ route("submit_brand_image") }}',
            data: formData,
            contentType: false,
            processData: false,
            success:function(){
                
                $('#ConfirmLogoModal').modal('show');
                getBrandingData();
                
            } 
        });
    });

    $('.change_brand_name').click(function(){
        let v = $(this).attr('data-name');
        $('.brand_name').val(v);
        $('#BrandNameModal').modal('show');
    });

    $('.add_brand_links').click(function(){
        $('#AddBrandsLinksModal').modal('show');
    });

    $('.edit_brand_links').click(function(){
    	var value_of_brandlink = $(this).attr('data-value');
    	var link = $(this).attr('data-param-value');
    	
        $('#EditBrandsLinksModal').modal('show');
        $('#brand_link_id').val(value_of_brandlink);
        $('#edit_brand_links').val(link);
    });

    $('.delete_brand_links').click(function(){
    	var value_of_brandlink = $(this).attr('data-value');
        $('#DeleteBrandsLinksModal').modal('show');
        $('#brand_link_id_for_delete').val(value_of_brandlink);
    });

    function validateYouTubeUrlInAdd(flag)
	{
		if (flag == 1) {
			var url = $('.youtube_link').val();	
		}else{
			var url = $('.youtube_edit_link').val();
		}
	    
        if (url) {
            var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
            var match = url.match(regExp);
            if (match && match[2].length == 11) {
            	const videoId = getId(url);
				const videoEmbedlink = "https://www.youtube.com/embed/"+ videoId;
				
            	if (flag == 1) {
            		$('.youtube_link').val(videoEmbedlink);
            		$('#AddBrandsLinksModal .btn-primary').click();	
            	}else{
            		$('.youtube_edit_link').val(videoEmbedlink);
            		$('#EditBrandsLinksModal .btn-primary').click();
            	}
            }
            else {
                var mes = "Please put correct YouTube link.";
	            var title = 'Warning!';
	            toastr.options = {
				  	"closeButton": true,
				  	"debug": false,
				  	"newestOnTop": false,
				  	"progressBar": false,
				  	"positionClass": "toast-top-right",
				  	"onclick": null,
				  	"showDuration": "5000",
				  	"hideDuration": "5000",
				  	"timeOut": "5000",
				  	"extendedTimeOut": "1000",
				};
	            toastr.warning(mes, title); //info, success, warning, error
            }
        }else{
        	var mes = "Please put correct YouTube link.";
            var title = 'Warning!';
            toastr.options = {
			  	"closeButton": true,
			  	"debug": false,
			  	"newestOnTop": false,
			  	"progressBar": false,
			  	"positionClass": "toast-top-right",
			  	"onclick": null,
			  	"showDuration": "5000",
			  	"hideDuration": "5000",
			  	"timeOut": "5000",
			  	"extendedTimeOut": "1000",
			};
            toastr.warning(mes, title); //info, success, warning, error
        }
	}

	function getId(url) {
	    const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
	    const match = url.match(regExp);

	    return (match && match[2].length === 11)
	      ? match[2]
	      : null;
	}

	$('#AddBrandsLinksModal .btn-primary-temp').click(function(e) {
		validateYouTubeUrlInAdd(1);
	});

	$('#EditBrandsLinksModal .btn-primary-temp').click(function(e) {
		validateYouTubeUrlInAdd(2);
	});
</script>

@endsection