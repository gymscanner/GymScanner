@extends('layouts.default')
{{-- Page title --}}
@section('title')
Documents @parent
@stop

@section('content')
<style>
    .custom-control{
        padding-left: 0px!important;
    }
    .dropzone{
        border: 2px dotted rgba(0,0,0,0.3);
        background: #fafafa!important;
    }
    .dropzone .dz-message 
    {
        margin:0px!important;
    }

    .photo_uploading_section .filename {
        font-size: 18px;
        padding: 0 10px;
    }
</style>
<div class="row layout-top-spacing w-100">
    <div class="statbox widget box box-shadow w-100">
        <div class="widget-header">                                
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4 style="font-size: 26px;color: #393939;font-weight: 600;font-family: 'Nunito';">Document Upload</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form  action="{{ route('upload_document')}}" method="post" enctype="multipart/form-data" class="dropzone" id="dropzone">
            @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">
                        @if(auth()->user()->role==2)

                            Please upload your Gym License :

                        @elseif(auth()->user()->role==3)

                            Please upload your Personal ID :

                        @endif
                    </label>
                     <!--<a href="{{($document)?URL::asset('upload/documents/'.$document->document_path):''}}" target="_blank">{{($document)?$document->document_path:'No document uploaded'}}</a>-->
                </div>
                
            </form>
        </div>
    </div>
</div>
@stop
@section('footer_scripts')
<script type="text/javascript">

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

                    url: '{{ route("document_delete") }}',

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

                // console.log(response);

            },

            error: function (file, response) {

                return (ref = file.previewElement) != null ?

                    ref.removeChild(file.previewElement) : void 0;

                // alert();

            }

        };

</script>

@stop
