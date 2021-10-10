<p class="mt-5">Solicitação de materiais</p>
@if (count($materials) > 0)
<form method="post" action="/solicitor" class="w-100 row col-md-12">
    @csrf
    @foreach ($materials as $material)
        <div class="form-group col-md-2 align-items-center">
            <input type="checkbox" name="inputMaterial[{{ $material->id }}]" id="inputMaterial" value="{{ $material->name }}" class="mr-2">
            <label for="checkInput">{{ ucfirst($material->name)}}</label>
        </div>
    @endforeach

    <div class="col col-md-12 d-flex flex-column-reverse mt-5">
        <div class="form-row flex-row-reverse">
            <button  class="btn b-primary btn-md ml-2 px-3">Cadastrar solicitação</button>
            <a href="/solicitor" class="btn b-secondary btn-md px-4">Cancelar</a>
        </div>
    </div>
</form>

@else
<a href="#" class="btn b-secondary btn-md px-4">Voltar</a>
@endif
