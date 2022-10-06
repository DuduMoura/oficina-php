<div class="row">
    <?php foreach ($noticias as $item): ?>
    <div class="col-12 col-md-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= $item['image_link'] ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $item['titulo'] ?> 
                </h5>
                <p class="card-text"><?= $item['assunto'] ?> </p>
                <a href="?a=detalhe&id=<?= $item['id'] ?>" class="btn btn-primary">saiba mais</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>