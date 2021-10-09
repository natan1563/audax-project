
<div class="row d-flex justify-content-between mt-5 px-3">
    <div class="boxDetailApprover">
        <label for="solicitor">Solicitador</label>
        <input type="text" class="form-control" value="Obi-wan-Kenobi" disabled>
    </div>

    <div class="boxDetailApprover">
        <label for="solicitor">Data da solicitação</label>
        <input type="text" class="form-control" value="14/10/2021" disabled>
    </div>
</div>

<p class="mt-5">Materiais solicitados</p>

<div class="w-100 row col-md-12">
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
            <a href="#" class="btn b-success btn-md ml-2 p-2 px-5">Aprovar</a>
            <a href="#" class="btn b-danger btn-md ml-2 p-2 px-5">Reprovar</a>
        </div>
    </div>
</form>
