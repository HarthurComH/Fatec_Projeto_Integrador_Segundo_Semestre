<h3 class="mb-5">Nova página</h3>

<form action="" method="POST">
    <br>
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input type="text" name="title" id="pagesTitle" class="form-control" placeholder="Título">
    </div>
    <br>
    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="URL amigável, deixe em branco para informar a página inicial...">
        </div>  
    </div>
    <br>
    <div class="form-group">
        <input id="pagesBody" type="hidden" name="body">
        <trix-editor input="pagesBody"></trix-editor>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Salvar</button>

    <hr>

</form>

<a href="/admin/pages" class="btn btn-secondary">Voltar</a>