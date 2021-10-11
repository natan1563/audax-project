<div class="col-md-2 d-flex flex-column justify-content-around" id="sidebar">
    <div class="row">
        <a href="/{{Auth::user()->type_user}}" class="w-100">
            <img src="{{ asset('icons/solicitacoes_icone.svg') }}" class="pr-3" alt="Solicitações">
            <span>Solicitações</span>
        </a>
    </div>

    <div class="row mt-5">
        <a href="/logout" class="d-flex col">
            <img src="{{ asset('icons/sair_icone.svg') }}" class="pr-3" alt="Adicionar usuario">
            <span>Sair</span>
        </a>
    </div>
</div>
