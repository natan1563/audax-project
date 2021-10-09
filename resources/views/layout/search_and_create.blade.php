<form method="get" class="mt-4 w-100 d-flex justify-content-between">
    <div class="input-group mb-3 w-50" id="boxSearch">
        <input type="text" class="form-control" placeholder="Digite o que você quer encontrar" id="inputSearch" name="inputSearch">
        <div class="input-group-append">
          <button class="btn b-primary btn-md">
             <img src="{{ asset('icons/pesquisar_icon.svg') }}" alt="Pesquisar usuario">
          </button>
        </div>
    </div>

    @if($user != 'approver')
        <a href="{{ $buttonPath ?? '#' }}" class="btn b-primary h-50 px-4 rounded-pill">
    @else
        <a href="{{ $buttonPath ?? '#'}}" class="btn b-primary px-5 rounded-pill btn-approver">
    @endif
            <div class="d-flex">
                <img src="{{ asset('icons/novo_icon.svg') }}" class="pr-3" alt="Adicionar usuario">
                <span id="newUser">{{ $buttonAdd }}</span>
            </div>
        </a>
</form>
