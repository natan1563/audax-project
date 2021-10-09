@extends('template.template_module')

@section('sidebar')
    @include('layout.sidebar_admin')
@endsection

@section('titleModule')
    Usuários
@endsection

@section('content')
    @include('layout.search_and_create', [
        'buttonAdd' => 'Novo usuário',
        'user' => $user
        ])
@endsection

@section('table')
    @include('layout.user.table_users')
@endsection
