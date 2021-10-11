
@include('helpers.errors')
@include('helpers.success')

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
    @include('layout.your_materials')
    <div class="col col-md-12 mt-3">
        <p>Status:</p>
        <p class="pl-1">@include('layout.status', ['status' => $requests->status])</p>
    </div>

    <form action="/approver/reprove/{{$requests->id}}" method="post" class="col mt-3">
        @csrf
        <p>Observação:</p>
        <div class="row">
            @if (empty($requests->observation) && $requests->status == 'waiting')
                <textarea class="border" id="inputObservation" name="inputObservation" cols="5" rows="5" required></textarea>
            @else
                <textarea id="inputObservation" cols="5" rows="5" disabled>
                {{ $requests->observation }}
                </textarea>
            @endif
        </div>

        @if($requests->status == 'waiting')
            <div class="col col-md-12 d-flex flex-column-reverse mt-5 p-0">
                <div class="form-row flex-row-reverse">
                    <a href="/approver/aprove/{{$requests->id}}" class="btn b-success btn-md ml-2 py-3 px-5">Aprovar</a>
                    <button type="submit" class="btn b-danger btn-md ml-2 py-3 px-5">Reprovar</button>
                </div>
            </div>
        @endif
    </form>

</form>
