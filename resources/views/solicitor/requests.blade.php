@extends('template.template_module')

@section('sidebar')
    @include('layout.sidebar_requests')
@endsection

@section('titleModule')
    Solicitações
@endsection

@section('content')
    @include('layout.search_and_create', ['buttonAdd' => 'Novo usuário'])
@endsection

@section('table')
    @include('layout.request.table_requests')
@endsection
