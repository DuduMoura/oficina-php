
<div class="row">
  <div class="col-12">
    <div class="d-flex justify-content-between mb-3">

        <h4>Notícias</h4>
        <a href="?p=news&a=create" class="btn btn-info">Criar</a>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Categoria</th>
            <th scope="col">Resumo</th>
            <th scope="col">Criado em</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($noticias as $item): ?>
            <tr>
              <th scope="row"><?= $item['id'] ?></th>
              <td><?= $item['titulo'] ?></td>
              <td><?= $item['name'] ?></td>
              <td><?= $item['assunto'] ?></td>
              <td><?= date('d/m/Y', strtotime($item['criado_em'])) ?></td>
              <td>
                <a href="?p=noticias&a=edit&id=<?= $item['id'] ?>" class="text-info">Editar</a>
                <a onclick="deletar('?p=noticias&a=delete&id=<?= $item['id'] ?>')" href="#" class="text-danger">Deletar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script>

  function deletar(page) {
    if(confirm('Deseja realmente cancelar esse registro?')) {
      window.location.href = page
    }
  }
</script>