@extends(config('app.error_pages_layout'))

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
