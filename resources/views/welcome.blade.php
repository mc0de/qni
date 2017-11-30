@extends('layouts.app')

@section('content')
<div class="header header-filter">
    <div class="container index-page">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-upload">
                    <div class="header header-primary text-center">
                        <h4>Drop image here to upload</h4>
                    </div>
                    <div class="content">
                        {{ Form::open(['url' => route('upload'), 'id' => 'upload', 'files' => true, 'class' => 'dropzone']) }}
                        <div class="dz-message">
                            <p><i class="material-icons text-info" style="font-size: 76px;">cloud_upload</i></p>
                            <p>Or, if you prefer...</p>
                            <p><button type="button" class="btn btn-info btn-sm">Choose image to upload</button></p>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
