<form method="post" action="/materials" class="mt-5">
    @csrf
    <div class="form-row">
        <div class="form-group w-100">
          <label for="inputFunction">Nome do material</label>
          <input type="text" class="form-control" id="inputName" name="inputName" required>
        </div>
    </div>

      <div class="form-row flex-row-reverse mt-4">
          <button class="btn b-primary btn-md ml-2 px-3">Cadastrar material</button>
          <a href="/materials" class="btn b-secondary btn-md px-4">Cancelar</a>
      </div>
</form>
