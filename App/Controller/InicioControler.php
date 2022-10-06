<?php  
    switch($acao) {
        case 'detalhe':
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $noticia = new Noticias();
                $item = $noticia->getPeloId($id);
                $item = $item[0] ?? null;
            }
        break;

        case 'login':
            // Verifica se existe dados enviados, caso não exista continua na tela.
            if(isset($_POST['email']) && isset($_POST['senha'])) {
                // instanciar a classe Usuário na variavel usuario
                $usuario = new Usuarios();
                // chamar a função login passando os dados de login
                $usuario->login($_POST['email'], $_POST['senha']);
            }
        break;

        case 'sair':
            $usuario = new Usuarios();
            $usuario->sair();
        break;

        default: 
            $noticia = new Noticias();
            $noticias = $noticia->get();
        break;
    }