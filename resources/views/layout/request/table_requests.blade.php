<table class="table">
    <thead>
      <tr>
        <th class="border-top-0 border-bottom-0 col-3" scope="col">Data da solicitação</th>
        <th class="border-top-0 border-bottom-0 col-3" scope="col">Solicitador</th>
        <th class="border-top-0 border-bottom-0 col-3" scope="col">Status</th>
        <th class="border-top-0 border-bottom-0 col-1" scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($requests as $request)
     <tr class="border">
        <td class="pl-4 py-3">{{ date('d/m/Y', strtotime($request->created_at))}}</td>
        <td class="pl-4 py-3">{{ $request->name }}</td>
        <td>@include('layout.status', ['status' => $request->status])</td>
        <td>
            <a href="{{$actionPath}}/{{$request->request_id}}">
                <img id="olho" src="{{ asset('icons/olho.svg') }}" alt="Editar Usuário">
            </a>
        </td>
      </tr>
     @endforeach
    </tbody>
</table>
