<p class="mt-5">Solicitação de materiais</p>
<form method="post" class="w-100 row col-md-12">
    @for ($i = 0; $i < 15; $i++)
        <div class="form-group col-md-2 align-items-center">
            <input type="checkbox" name="checkInput" id="checkInput" class="mr-2">
            <label for="checkInput">Teste</label>
        </div>
    @endfor
    <div class="col col-md-12 d-flex flex-column-reverse mt-5">
        <div class="form-row flex-row-reverse">
            <button  class="btn b-primary btn-md ml-2 px-3">Cadastrar solicitação</button>
            <a href="#" class="btn b-secondary btn-md px-4">Cancelar</a>
        </div>
    </div>
</form>
