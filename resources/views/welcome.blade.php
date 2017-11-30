@extends('layouts.app')

@section('content')
<div class="header header-filter">
    <div class="container index-page">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-upload">
                    <div class="header header-primary text-center">
                        <h4>Drop Files Here</h4>
                    </div>
                    <div class="content">
                        {{ Form::open(['url' => route('upload'), 'id' => 'upload', 'files' => true, 'class' => 'dropzone']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
