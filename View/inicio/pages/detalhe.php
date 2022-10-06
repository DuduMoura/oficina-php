<div class="row mt-4">
    <div class="col-12">
        <a href="index.php" class="btn btn-dark">Voltar</a>
        <div class="card">
            <img class="card-img-top" src="<?= $item['image_link'] ?>">
            <div class="card-body">
                <h3 class="card-title"><?= $item['titulo'] ?></h3>
                <div class="d-flex justify-content-between align-itens-center">
                    <h6 class="card-subtitle mb-2 text-muted">Reporter: <?= $item['reporter'] ?> <br>
                    Local: <?= $item['local'] ?></h6>
                    <span><?= date('d/m/Y', strtotime($item['criado_em'])); ?></span>
                </div>
                <b>Descrição:</b>
                <p class="card-text"><?= $item['descricao'] ?></p>
            </div>
        </div>
    </div>
</div>