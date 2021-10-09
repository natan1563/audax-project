@extends('template.template_module')

@section('sidebar')
    @include('layout.sidebar_requests')
@endsection

@section('titleModule')
   Visualizar solicitação
@endsection

@section('content')
    @include('layout.request.request_detail_approver')
@endsection
