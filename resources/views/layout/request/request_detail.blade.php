<p class="mt-5">Materiais solicitados</p>
    @include('layout.your_materials')
    <div class="col col-md-12 mt-3">
        <p>Status:</p>
        <p class="pl-1">@include('layout.status', ['status' => $requests['status']])</p>
    </div>

    <div class="col mt-3">
        <p>Observação:</p>
        <div class="row">
            <textarea id="observation" cols="5" rows="5" disabled>
                {{ $requests['observation'] }}
            </textarea>
        </div>
    </div>

    <div class="col col-md-12 d-flex flex-column-reverse mt-5">
        <div class="form-row flex-row-reverse">
            <a href="/solicitor" class="btn b-primary btn-md ml-2 p-2 px-5">Voltar</a>
        </div>
    </div>
</form>
