@extends('template.template_base')

@section('css')
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        a span{
            color: #0C4284;
        }
        #main {
            height: 100vh;
        }
        #userManager {
            padding: 120px 90px;
        }
        #sidebar {
            padding-left: 3%;
            max-width: 250px;
        }
        #boxSearch {
            min-width: 300px;
        }
        #inputSearch {
            max-width: 600px;
        }
        #newUser {
            font-family:' Open Sans';
            font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 19px;
            color: #FFFFFF;
        }
        #olho {
            width: 36px;
            height: 36px;
        }
        .titleModule {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: bold;
            font-size: 50px;
            line-height: 68px;
            color: #7A7A7A;
        }
        .form-control,
        #labelCheckInput span {
            background: #F9F9F9;
            border: 0.649342px solid #D2D2D2;
        }

        .boxDetailApprover {
            width: 47%;
        }
    </style>
@endsection

@section('conteudo')
<section>
   <div class="col col-md-12 d-flex" id="main">
       @yield('sidebar')
       <div class="col-md-10 border-left" id="userManager">
            <h1 class="titleModule">@yield('titleModule')</h1>
            @yield('content')
            @yield('table')
        </div>
    </div>
</section>
@endsection
