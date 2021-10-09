@extends('template.template_module')

@section('sidebar')
    @include('layout.sidebar_admin')
@endsection

@section('titleModule')
    Cadastrar usuário
@endsection

@section('content')
    @include('layout.user.form_register', ['buttonAdd' => 'Novo usuário'])
@endsection
