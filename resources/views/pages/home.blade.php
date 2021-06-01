@extends('layouts.base')
@section('content_header')
    <div class="panel panel--light">
        <div class="panel__header">
            <h1 class="panel__title">Welcome human</h1>
        </div>
    </div>
@endsection

@section('content_body')
   {!! \Illuminate\Mail\Markdown::parse($contents) !!}
@endsection

