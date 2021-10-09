@extends('template.template_module')

@section('sidebar')
    @include('layout.sidebar_admin')
@endsection

@section('titleModule')
    Materiais
@endsection

@section('content')
    @include('layout.search_and_create', ['buttonAdd' => 'Novo material'])
@endsection

@section('table')
    @include('layout.material.material_table')
@endsection
