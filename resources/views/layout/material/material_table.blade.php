@include('helpers.errors')
@include('helpers.success')
<table class="table">
    <thead>
      <tr>
        <th class="col-8 border-top-0 border-bottom-0" scope="col">Nome do material</th>
        <th class="col-1 border-top-0 border-bottom-0" scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($materials as $material)
     <tr class="border">
        <td>{{ ucfirst($material->name) }}</td>
        <td class="d-flex flex-row border-0">
            <a href="#">
                <img src="{{ asset('icons/editar_icon.svg') }}" alt="Editar Material">
            </a>
            <form
            onsubmit="return confirm('Tem certeza que deseja excluir o material {{addslashes($material->name)}}?')"
            action="/materials/{{$material->id}}"
            method="post">
            @csrf
            @method('DELETE')
                    <button type="submit" class="ml-4 bg-light border-0">
                        <img src="{{ asset('icons/lixo_icon.svg') }}" title="Excluir Material" alt="Excluir Material">
                    </button>
            </form>
        </td>
      </tr>
     @endforeach
    </tbody>
</table>
