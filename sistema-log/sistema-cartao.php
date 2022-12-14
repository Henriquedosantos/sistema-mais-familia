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
    <link rel="stylesheet" href="../styles/style-sistema/sistema-all.css" media="all">
    <link rel="stylesheet" href="../styles/style-sistema/sistema-ipad.css" media="screen">
    <link rel="stylesheet" href="../styles/style-sistema/sistema-screen.css" media="screen">
    <title> CAM - cartão MAIS FAMÍLIA</title>
</head>

<body>
    <header>
       <img id="img-logo" src="../img-all/logo-all/logo-sem-fundo.png" alt="logo do cartão MAIS FAMÍLIA">

        <div id="container-log">
            <a href="encerrar.php">Sair da conta</a>

            <?php  

                if($logado == "henrique.santos@gmail.com"){
                    echo '<img id="img-login" src="../img-all/login-img/henrique.png" alt="foto-de-login">';
                
                }else if($logado == "fernandosilva.pr@hotmail.com"){
                    echo '<img id="img-login" src="../img-all/login-img/f.png" alt="foto-de-login">';
                }else if($logado == "ps_moutinho21@hotmail.com"){
                    echo '<img id="img-login" src="../img-all/login-img/p.png" alt="foto-de-login">';
                }else{
                    unset($logado);
                    header("Location: ../sistema-log/login.php");
                    die();
                }
        
            ?>
        
        
        
        </div>

    </header>

    <main>

        <div class="container-cards">

            <a class="link-card" href="">
                <div class="card">
                    <img class="img-card" src="../img-all/icons-sistema/painel-controle.png" alt="Painel de controle">
                    <h3 class="card-text">C panel</h3>
                </div>
            </a>

            <a class="link-card" href="">
                <div class="card">
                    <img class="img-card" src="../img-all/icons-sistema/vendas-icons.png" alt="Associados">
                    <h3 class="card-text">Meus ssociados</h3>
                </div>
            </a>

            <a class="link-card" href="">
                <div class="card">
                    <img class="img-card" src="../img-all/icons-sistema/contratos.png" alt="Contratos de adesão">
                    <h3 class="card-text">Contratos de adesão</h3>
                </div>
            </a>

            <a class="link-card" href="">
                <div class="card">
                    <img class="img-card" src="../img-all/icons-sistema/atividades-sistema.png" alt="Atividades-do-sistema">
                    <h3 class="card-text">Atividades do sistema</h3>
                </div>
            </a>
        </div>

        <div class="container-cards">
            <a class="link-card" href="">
                <div class="card">
                    <img class="img-card" src="../img-all/icons-sistema/clientes-atendidos.png" alt="Clientes atendidos">
                    <h3 class="card-text">Clientes atendidos</h3>
                </div>
            </a>

            <a class="link-card" href="">
                <div class="card">
                    <img class="img-card" src="../img-all/icons-sistema/repasse.png" alt="Repasses">
                    <h3 class="card-text">Repasses das clinicas</h3>
                </div>
            </a>

            <a class="link-card" href="">
                <div class="card">
                    <img class="img-card" src="../img-all/icons-sistema/vendas.png" alt="Controle de vendas">
                    <h3 class="card-text">Controle de vendas</h3>
                </div>
            </a>

            <a class="link-card" href="../sistema-cadastro/cadastro-clientes.php">
                <div class="card">
                    <img class="img-card" src="../img-all/icons-sistema/novo-cliente.png" alt="Cadastrar associado">
                    <h3 class="card-text">Cadastrar +1 cliente</h3>
                </div>
            </a>
        </div>


        <div class="container-cards">
            <a class="link-card" href="">
                <div class="card">
                    <img class="img-card" src="../img-all/icons-sistema/bloqueio.png" alt="associados bloqueados">
                    <h3 class="card-text">Clientes bloqueados</h3>
                </div>
            </a>

            <a class="link-card" href="">
                <div class="card">
                    <img class="img-card" src="../img-all/icons-sistema/login.png" alt="associados bloqueados">
                    <h3 class="card-text">Contratos inativos</h3>
                </div>
            </a>


            <a class="link-card" href="encerrar.php">
                <div class="card" id="card-encerrar">
                    <img class="img-card" src="../img-all/icons-sistema/login.png" alt="Sair da conta">
                    <h3 class="card-text">Encerrar sessão</h3>
                </div>
            </a>
        </div>
    </main>





</body>

</html>