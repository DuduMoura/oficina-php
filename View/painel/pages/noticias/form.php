<form action="" method="POST">
  <div class="card">
    <div class="card-header">
      <h5> <?= $data ? 'Editar' : 'Nova' ?> Notícia</h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo" required maxlength="100" value="<?= $data['titulo'] ?? '' ?>">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label>Categoria</label>
            <select class="form-control" name="categoria_id" required>
              <option value="">Selecione uma opção</option>
              <?php foreach($categorias as $item):
                $selected = ($data['categoria_id'] ?? '') === $item['id'] ? 'selected' : '';  
                echo '<option value="' . $item['id'] . '" ' . $selected . '>' . $item['name'] . '</option>';
                endforeach; ?>
            </select>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label>Reporter</label>
            <input type="text" class="form-control" name="reporter" required maxlength="50" value="<?= $data['reporter'] ?? '' ?>">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label>Local</label>
            <input type="text" class="form-control" name="local" required maxlength="45" value="<?= $data['local'] ?? '' ?>">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label>Assunto</label>
            <input type="text" class="form-control" name="assunto" required maxlength="100" value="<?= $data['assunto'] ?? '' ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Imagem link</label>
            <input type="url" class="form-control" name="image_link" required maxlength="255" value="<?= $data['image_link'] ?? '' ?>">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao"><?= $data['descricao'] ?? '' ?></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-info float-right"> Salvar</button>
      <a href="?index.php?p=news" class="btn btn-secondary float-right mr-2">Cancelar</a>
    </div>
  </div>
</form>