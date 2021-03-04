@extends('layouts.base')
@section('content_header')
    <div class="panel panel--light">
        <div class="panel__header">
            <h1 class="panel__title">Files upload</h1>
        </div>
    </div>
@endsection

@section('content_body')
<div class="container">
    <div>

    </div>

    <div>
        @include('partials.files.upload-form')
    </div>
</div>
@endsection

