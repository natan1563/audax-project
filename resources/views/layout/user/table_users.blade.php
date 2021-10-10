<table class="table">
    <thead>
      <tr>
        <th class="border-top-0 border-bottom-0" scope="col">Nome</th>
        <th class="border-top-0 border-bottom-0" scope="col">E-mail</th>
        <th class="border-top-0 border-bottom-0 col-4" scope="col">Função</th>
        <th class="border-top-0 border-bottom-0" scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
@foreach($users as $user)
      <tr class="border">
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        @include('layout.type_user', ['type' => $user->type_user])
        <td class="d-flex flex-row border-0">
            <a href="#">
                <img src="{{ asset('icons/editar_icon.svg') }}" title="Editar Usuário" alt="Editar Usuário">
            </a>

           <form
           onsubmit="return confirm('Tem certeza que deseja excluir o usuário {{addslashes($user->name)}}?')"
           action="/users/{{$user->id}}"
           method="post">
           @csrf
           @method('DELETE')
                <button type="submit" class="ml-4 bg-light border-0">
                    <img src="{{ asset('icons/lixo_icon.svg') }}" title="Excluir Usuário" alt="Excluir Usuário">
                </button>
           </form>
        </td>
      </tr>
@endforeach
    </tbody>
</table>
