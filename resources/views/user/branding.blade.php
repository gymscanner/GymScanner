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
						<div class="col-lg-12 mb-2">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" width="260" height="100" src="https://www.youtube.com/embed/r-H61ROtwOQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
								</iframe>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
			<div class="widget-content widget-content-area">
				<div class="row">
					
					<div class="col-lg-6">
						<h3 class="font-size:15px;color:#393939;font-weight:600;">Photos</h3>
					</div>
					
					<div class="col-lg-6 text-right">
						<button class="btn btn-danger del_brand_photos mb-1" style="color:#dc3545; font-size: 11px !important;"><i data-feather="trash" style="width: 15px;height: 22px;"></i> Delete Photos</button>
					
						<button class="btn btn-primary mb-1 upload_brand_photos" style="font-size: 11px !important">+ Upload Photos</button>
					</div>
				</div>

				<hr>

				<div class="row uploaded_photos">
					<div class="col-md-4 image_div my-2">
						<input type="checkbox" class="image_check float-right" value="">
						<img src="{{ asset('img/images/10.jpg') }}" class="image w-100" alt="Image">
					</div>
					<div class="col-md-4 image_div my-2">
						<input type="checkbox" class="image_check float-right" value="">
						<img src="{{ asset('img/images/10.jpg') }}" class="image w-100" alt="Image">
					</div>
					<div class="col-md-4 image_div my-2">
						<input type="checkbox" class="image_check float-right" value="">
						<img src="{{ asset('img/images/10.jpg') }}" class="image w-100" alt="Image">
					</div>
					<div class="col-md-4 image_div my-2">
						<input type="checkbox" class="image_check float-right" value="">
						<img src="{{ asset('img/images/10.jpg') }}" class="image w-100" alt="Image">
					</div>
					<div class="col-md-4 image_div my-2">
						<input type="checkbox" class="image_check float-right" value="">
						<img src="{{ asset('img/images/10.jpg') }}" class="image w-100" alt="Image">
					</div>
					<div class="col-md-4 image_div my-2">
						<input type="checkbox" class="image_check float-right" value="">
						<img src="{{ asset('img/images/10.jpg') }}" class="image w-100" alt="Image">
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
							<h5 class="ml-1"><b>About the GYM</b></h5>
							<textarea class="form-control" name="about" placeholder="About me" rows="4">{{ @$about->about }}</textarea>
						</div>
						<br>
						
						<h5 class=""><b>Insert Google Location:</b></h5>
						
						<div class="w-100">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27814.411819952653!2d47.96435710602138!3d29.376101453940137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9c83ce455983%3A0xc3ebaef5af09b90e!2sKuwait%20City%2C%20Kuwait!5e0!3m2!1sen!2sbd!4v1619965282697!5m2!1sen!2sbd" width="100%" height="350" style="border:1px solid #d8d8d8; border-radius: 10px" allowfullscreen="" loading="lazy"></iframe>
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
									<option>Country</option>
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

		@endsection

@section('footer_scripts')


@endsection