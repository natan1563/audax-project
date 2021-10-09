@extends('template.template_module')

@section('sidebar')
    @include('layout.sidebar_admin')
@endsection

@section('titleModule')
    Cadastrar material
@endsection

@section('content')
    @include('layout.material.form_register', ['buttonAdd' => 'Novo material'])
@endsection
