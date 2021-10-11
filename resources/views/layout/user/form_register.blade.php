@include('helpers.errors')
@include('helpers.success')

<form
    method="post"
    action="/users"
    class="mt-5 w-100 col col-md-12">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Nome</label>
          <input type="text" class="form-control" id="inputName" name="inputName" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputFunction">Função</label>
          <select id="inputFunction" class="form-control form-control-lg" name="inputFunction" required>
              <option value="solicitor">Solicitador</option>
              <option value="approver">Aprovador</option>
              <option value="admin">Administrador</option>
          </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail">E-mail</label>
          <input type="email" class="form-control" id="inputEmail" name="inputEmail" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword">Senha</label>
          <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
        </div>
     </div>

      <div class="form-row flex-row-reverse mt-4">
          <button class="btn b-primary btn-md ml-2 px-3">Cadastrar usuário</button>
          <a href="/users" class="btn b-secondary btn-md px-4">Cancelar</a>
      </div>
</form>
