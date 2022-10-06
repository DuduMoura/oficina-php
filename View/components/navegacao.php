<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/View/inicio/index.php">Noticias TI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/View/inicio/index.php">Início </a>
                </li>
                <?php if ($_SESSION['user']): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/View/painel/index.php?p=news">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/View/painel/index.php?p=categories">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="/View/inicio/index.php?a=sair">Sair</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?a=login">Acessar Painel</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>
