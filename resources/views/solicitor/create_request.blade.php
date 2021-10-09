@extends('template.template_module')

@section('sidebar')
    @include('layout.sidebar_requests')
@endsection

@section('titleModule')
    Nova solicitação
@endsection

@section('content')
    @include('layout.request.form_request', ['buttonAdd' => 'Novo usuário'])
@endsection
