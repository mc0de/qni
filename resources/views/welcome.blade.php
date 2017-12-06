@extends('layouts.app')

@section('content')
<div class="header header-filter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card card-upload">


                    <div class="header header-primary text-center">
                        <h4 class="shorturl">Drop image here to upload</h4>
                    </div>


                    <div class="content">
                        {{ Form::open(['url' => route('api.media.store'), 'id' => 'upload', 'files' => true, 'class' => 'dropzone']) }}
                        <div class="dz-message">
                            <p>
                                <i class="material-icons text-info upload-icon">cloud_upload</i>
                            </p>
                            <p>Or, if you prefer...</p>
                            <p>
                                <button type="button" class="btn btn-info btn-md btn-fileinput">Choose image to upload</button>
                            </p>
                        </div>
                        {{ Form::close() }}

                        <div id="previews" class="filezone">
                            <div id="template" class="dz-preview">
                                <div class="dz-image">
                                    <img data-dz-thumbnail>
                                </div>
                                <div class="dz-details">
                                    <div class="dz-details-items">
                                        <div class="dz-filename" data-dz-name></div>
                                        <div class="dz-size" data-dz-size></div>
                                        <div class="progress progress-line-success dz-progress">
                                            <div class="progress-bar progress-bar-success dz-upload" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress>
                                            <span class="sr-only"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dz-success-mark"><span>✔</span></div>
                                <div class="dz-error-mark"><span>✘</span></div>
                                <div class="dz-error-message"><span data-dz-errormessage></span></div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        Dropzone.autoDiscover = false;
        var previewNode = document.querySelector("#template");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);

        var qniDropzone = new Dropzone(document.body, {
            init: function() {
                this.on("success", function(file, response) {
                    $('.shorturl').text(response.data.url);
                });

                this.on("addedfile", function(file){
                    $('#upload').hide();
                });
            },
            url: "{{ route('api.media.store') }}",
            clickable: ".btn-fileinput",
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            previewsContainer: "#previews",
            previewTemplate: previewTemplate,
            maxFiles: 1,
            headers: {
                'Accept': 'application/json',
                'Authorization': 'Bearer {{ $access_token }}'
            }
        });
    </script>
@endsection
