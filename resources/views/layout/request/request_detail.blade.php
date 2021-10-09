<p class="mt-5">Materiais solicitados</p>

<form method="post" class="w-100 row col-md-12">
    @for ($i = 0; $i < 15; $i++)
        <div class="form-group col-md-2 align-items-center pl-0">
            <input type="checkbox" name="checkInput" id="checkInput" class="mr-2" disabled checked>
            <label for="checkInput">Teste</label>
        </div>
    @endfor

    <div class="col col-md-12 mt-3">
        <p>Status:</p>
        <p class="text-danger pl-1">Reprovado</p>
    </div>

    <div class="col mt-3">
        <p>Observação:</p>
        <div class="row">
            <textarea id="observation" cols="5" rows="5" disabled>
                Reprovamos a sua solicitação porque semana passada você já pediu uma vassoura. O que aconteceu com ela? Você tem que parar de ficar brincando com os cabos das vassouras e rodos da empresa como se fossem espadas de Jedi. Pela última vez, o império não existe e ele não vai nos contra-atacar. Não existe um exército de clones sendo criado em um planeta não mapeado. E você não é um Jedi! Por favor, pare de quebrar as nossas vassouras.
            </textarea>
        </div>
    </div>

    <div class="col col-md-12 d-flex flex-column-reverse mt-5">
        <div class="form-row flex-row-reverse">
            <button class="btn b-primary btn-md ml-2 p-2 px-5">Voltar</button>
        </div>
    </div>
</form>
