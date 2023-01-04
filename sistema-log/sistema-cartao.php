<?php
session_start();

include  "../verific.inc";

$logado = $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="portgues-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style-sistema/cartao-sistema-all.css" media='all'>
    <link rel="stylesheet" href="../styles/style-sistema/cartao-sistema-screen.css" media='screen'>
    <link rel="shortcut icon" href="../img-all/favicon/favicon.ico" type="image/x-icon">
    <title>Sistema MAIS FAMÍLIA - home</title>
</head>

<body>
    <header>
        <img src="../img-all/logo-all/logo-write.png" alt="logo do cartão MAIS FAMÍLIA">
        <?php echo "<h3> Acessado por: {$logado}</h3>" ?>
        <a class="encerrar_sessao" href="encerrar.php">Encerrar sessão</a>

    </header>


    <main>
        <img class="icon_01" src="../img-all/icons-all/analise-view.png">
        <div class="container_checkBox">
            <div class="check"><a href="../sistema-views/atendimento-list.php">Clientes que passaram em consultas</a></div>
            <div class="check"><a href="../sistema-views/atividade-sistema.php">Atividades do sistema</a></div>
            <div class="check"><a href="../sistema-views/contratos.php">Contratos ativos e inativos</a></div>
            
        </div>

        <article>
            <h1>Tem clientes para cadastrar?</h1>
            <p>Cadastre seu cliente Mais Famíia clicando aqui!</p>
            <a href="../sistema-cadastro/cadastro-clientes.php" id="bottom_main">Casdastrar + 1 cliente</a>
        </article>

    </main>

    <section>

        <div class="icons_imgs">
            <img class="icon" src="../img-all/icons-all/cliente.png" alt="icone de clientes">
            <a href="../sistema-clientes/clientes.php">
                <h3>Meus associados</h3>
            </a>
        </div>

        <div class="icons_imgs">
            <img class="icon" src="../img-all/icons-all/cliente-inativo.png" alt="icone de procurar clientes">
            <a href="#">
                <h3>Clientes inativos</h3>
            </a>
        </div>

        <div class="icons_imgs">
            <img class="icon" src="../img-all/icons-all/clientes-novos.png" alt="icone de atendimento ao cliente">
            <a href="../sistema-views/new-cadastro.php">
                <h3>Clientes novos</h3>
            </a>
        </div>
    </section>






</body>

</html>