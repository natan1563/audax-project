@extends('template.template_module')

@section('sidebar')
    @include('layout.sidebar_requests')
@endsection

@section('titleModule')
    Sua solicitação
@endsection

@section('content')
    @include('layout.request.request_detail')
@endsection
