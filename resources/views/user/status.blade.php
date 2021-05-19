@extends('layouts/default')

@section('title', 'My Account')

@section('content')

<style type="text/css">
	.switch {
	  	position: relative;
	  	display: inline-block;
	  	width: 60px;
	  	height: 34px;
	}

	.switch input { 
	  	opacity: 0;
	  	width: 0;
	  	height: 0;
	}

	.slider {
	  	position: absolute;
	  	cursor: pointer;
	  	top: 0;
	  	left: 0;
	  	right: 0;
	  	bottom: 0;
	  	background-color: #ccc;
	  	-webkit-transition: .4s;
	  	transition: .4s;
	}

	.slider:before {
	  	position: absolute;
	  	content: "";
	  	height: 26px;
	  	width: 26px;
	  	left: 4px;
	  	bottom: 4px;
	  	background-color: white;
	  	-webkit-transition: .4s;
	  	transition: .4s;
	}

	input:checked + .slider {
	  	background-color: #2196F3;
	}

	input:focus + .slider {
	  	box-shadow: 0 0 1px #2196F3;
	}

	input:checked + .slider:before {
	  	-webkit-transform: translateX(26px);
	  	-ms-transform: translateX(26px);
	  	transform: translateX(26px);
	}

	/* Rounded sliders */
	.slider.round {
	  	border-radius: 34px;
	}

	.slider.round:before {
	  	border-radius: 50%;
	}
</style>

<div class="layout-px-spacing">
	<div class="row layout-spacing">

		<!-- Content -->
		<div class="col-xl-12 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
			<div class="widget-content widget-content-area">
				<div class="row">
					
					<div class="col-lg-6 d-flex">
						<h3 class="font-size:15px;color:#393939;font-weight:600;">Change Account Status</h3>
					</div>
					
					<div class="col-lg-6 text-right">
						
					</div>
				</div>

				<hr>
			</div>
			<div class="layout-spacing">
				<div class="widget-content widget-content-area">
					<form action="{{route('myaccount.change_myaccount_status')}}" method="post">
						@csrf

						<input type="hidden" name="userid" value="{{ $loggedin_user->id }}">
						<input type="hidden" name="status" id="status" value="1" />

						<div class="col-lg-12 p-0 d-flex">
							<div class="col-lg-8 p-0">
								<h5 class=""><b>Deactivate Account</b></h5>

								<h5>Render your account inactive. Your profile and membership plans will be removed within 48 - 72 hours from Gymscanner mobile apps and websites.</h5>
							</div>
							<div class="col-lg-4 text-right pt-2">
								<label class="switch">
								  	<input type="checkbox" id="checkbox" />
								  	<span class="slider round"></span>
								</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('footer_scripts')

<script>
	$('.switch').change(function() {
		var formUrl = "<?= route('myaccount.change_myaccount_status') ?>";
		var userid = "<?= $loggedin_user->id ?>";
		var checked = $('#checkbox');
		var status = checked[0].checked;
		var status_val = 1;
		if (status == true) {
			status_val = 2;
		}else{
			status_val = 1;
		}

		var formData = new FormData();
		formData.append("userid", userid);
		formData.append("status", status_val);

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.ajax({
			url: formUrl,
			type: 'POST',
			contentType: false,
		    cache: false,
		    processData: false,
			data: formData,
			success: function(result, status) {
				var mes = result.msg;
	            var title = 'Success!';
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
	            toastr.success(mes, title); //info, success, warning, error
			}
		});
	});
</script>

@endsection