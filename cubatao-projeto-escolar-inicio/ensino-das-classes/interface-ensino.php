<?php

if (isset($_GET['nome-escola-escolhida']) and !empty($_GET['nome-escola-escolhida'])) {
    //echo "tudo certo meu amigo";

    session_start();

    $Escola_selecionada = $_GET['nome-escola-escolhida'];

    //SESSION - ESCOLA SELECIONADA PARA LOGIN 
    $_SESSION['nome-escola-escolhida-session'] =  $Escola_selecionada;
} else {

    unset($_SESSION['nome-escola-escolhida-session']);
    header("Location: ../index.php ");
    die();
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/ensino-das-classes/ensino-das-classes-all-screen.css">
    <title>Grau de ensino - atividades</title>
</head>

<body>

    <main>
        <div class="card text-center">
            <div class="card-header">
                Atividades escolares
            </div>
            <div class="card-body">
                <h5 class="card-title">Selecione o grau de ensino</h5>
                <p class="card-text">Escolha qual é o seu grau de ensino.</p>

                <div id="caixa-links-esinos">
                    <a href="<?php echo '../validacao-usuario/valida-professor-login.php?ensino-fundamental=Ensino médio'   ?>" target="_self" class="btn btn-success" id="links">Ensino médio</a>
                    <a href="<?php echo '../validacao-usuario/valida-professor-login.php?ensino-fundamental=Ensino fundamental'  ?>" target="_self" class="btn btn-success" id="links">Ensino fundamental</a>
                    <a href="<?php echo '../validacao-usuario/valida-professor-login.php?ensino-fundamental=Ensino primário'  ?>" target="_self" class="btn btn-success" id="links">Ensino primário</a>
                </div>

            </div>
            <div class="card-footer text-muted" id="data-horario">
                <?php

                $DIA_ATUAL = date("d");
                $MES_ATUAL = date("m");
                $ANO_ATUAL = date("Y");


                echo "Data do acesso: {$DIA_ATUAL}/{$MES_ATUAL}/{$ANO_ATUAL}";


                ?>



            </div>
        </div>
    </main>

</body>

</html>