<div class="row mt-4">
    <div class="col-12">
        <a href="index.php" class="btn btn-dark">Voltar</a>
        <div class="card">
            <img class="card-img-top" src="<?= $item['image_link'] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $item['titulo'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $item['reporter'] ?></h6>
<span class="badge badge-info"><?= date('M d', strtotime($item['criado_em'])); ?></span>
                
<span class="badge badge-info"><?= date('H:i', strtotime($item['criado_em'])) ?></span>
                <p class="card-text"><?= $item['assunto'] ?></p>]
                <p class="card-text"><?= $item['descricao'] ?></p>
            </div>
        </div>
    </div>
</div>