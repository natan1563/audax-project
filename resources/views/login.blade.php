@extends('template.template_base')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection
@section('conteudo')
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div>
                <h2 class="t-primary title-login mb-5">Solicite os materiais do seu almoxarifado de forma facilitada</h2>
                </div>
                <div class="col-md-12 ml-2 mb-3">@include('helpers.errors')</div>
                <form class="mt-1" method="post" action="{{route('auth.user')}}">
                    @csrf
                    <div class="form-group" id="main_form">
                        <div id="box_email">
                            <label for="input_email" class="label-email">E-mail</label>
                            <input type="email" name="input_email" id="input_email" class="input-login t-primary">
                        </div>

                        <div id="box_password">
                            <label for="input_password" class="label-senha">Senha</label>
                            <input type="password" name="input_password" id="input_password" class="input-login t-primary">
                        </div>

                        <button class="b-primary b-login">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
