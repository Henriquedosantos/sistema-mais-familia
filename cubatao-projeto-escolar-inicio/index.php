<?php



//VARIAVEIS E ESCOLAS PARA SELECIONAR

$escola_escolhida_01 = "Lafayette Rodrigues Santos";
$escola_escolhida_02 = "Jose Aldo Henrique";
$escola_escolhida_03 = "Henrique lindo";
$escola_escolhida_04 = "Lafayette Rodrigues Santos";
$escola_escolhida_05 = "Lafayette Rodrigues Santos";
$escola_escolhida_06 = "Lafayette Rodrigues Santos";
$escola_escolhida_07 = "Lafayette Rodrigues Santos";
$escola_escolhida_08 = "Lafayette Rodrigues Santos";






?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index-style/style-index.css" media="all">
    <link rel="stylesheet" href="styles/index-style/style-mobile.css" media="screen">
    <title>Prefeitura de Cubatão</title>
</head>

<body>


    <header id="caixa-header-main">

        <img id="logo-cubatão-prefeitura" src="pictures/logo-prefeitura/logo-01.png" alt="Prefeitura de Cubatão">
        <a href="atividades-escolares/atividades-escolares-all.html" target="_self"><button type="button" id="bnt-encerrar" class="btn btn-success">Relatório geral</button></a>


    </header>


    <main>

        <div class="card">

            <img src="pictures/pictures-escolas/escola-teste.jpg" alt="Escola tal">

            <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>{$escola_escolhida_01}</h5>"?>

                <p class="card-text">Entre em atividade como professor para coordenar e administrar suas classes e
                    series</p>
                <?php
                    echo '<a href="ensino-das-classes/interface-ensino.php?nome-escola-escolhida='.$escola_escolhida_01.'" target="_self" id="link-card" class="btn btn-success">Entrar em atividade</a>'

                ?>
            </div>

        </div>


        <div class="card">

            <img src="pictures/pictures-escolas/escola-teste.jpg" alt="Escola tal">

            <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>{$escola_escolhida_02}</h5>"?>

                <p class="card-text">Entre em atividade como professor para coordenar e administrar suas classes e
                    series</p>
                <?php
                    echo '<a href="ensino-das-classes/interface-ensino.php?nome-escola-escolhida='.$escola_escolhida_02.'" target="_self" id="link-card" class="btn btn-success">Entrar em atividade</a>'

                ?>
            </div>

        </div>


      
        <div class="card">

            <img src="pictures/pictures-escolas/escola-teste.jpg" alt="Escola tal">

            <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>{$escola_escolhida_03}</h5>"?>

                <p class="card-text">Entre em atividade como professor para coordenar e administrar suas classes e
                    series</p>
                <?php
                    echo '<a href="ensino-das-classes/interface-ensino.php?nome-escola-escolhida='.$escola_escolhida_03.'" target="_self" id="link-card" class="btn btn-success">Entrar em atividade</a>'

                ?>
            </div>

        </div>


       
        <div class="card">

            <img src="pictures/pictures-escolas/escola-teste.jpg" alt="Escola tal">

            <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>{$escola_escolhida_04}</h5>"?>

                <p class="card-text">Entre em atividade como professor para coordenar e administrar suas classes e
                    series</p>
                <?php
                    echo '<a href="ensino-das-classes/interface-ensino.php?nome-escola-escolhida='.$escola_escolhida_04.'" target="_self" id="link-card" class="btn btn-success">Entrar em atividade</a>'

                ?>
            </div>

        </div>



        <div class="card">

            <img src="pictures/pictures-escolas/escola-teste.jpg" alt="Escola tal">

            <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>{$escola_escolhida_05}</h5>"?>

                <p class="card-text">Entre em atividade como professor para coordenar e administrar suas classes e
                    series</p>
                <?php
                    echo '<a href="ensino-das-classes/interface-ensino.php?nome-escola-escolhida='.$escola_escolhida_05.'" target="_self" id="link-card" class="btn btn-success">Entrar em atividade</a>'

                ?>
            </div>

        </div>



        <div class="card">

            <img src="pictures/pictures-escolas/escola-teste.jpg" alt="Escola tal">

            <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>{$escola_escolhida_06}</h5>"?>

                <p class="card-text">Entre em atividade como professor para coordenar e administrar suas classes e
                    series</p>
                <?php
                    echo '<a href="ensino-das-classes/interface-ensino.php?nome-escola-escolhida='.$escola_escolhida_06.'" target="_self" id="link-card" class="btn btn-success">Entrar em atividade</a>'

                ?>
            </div>

        </div>
     

        <div class="card">

            <img src="pictures/pictures-escolas/escola-teste.jpg" alt="Escola tal">

            <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>{$escola_escolhida_07}</h5>"?>

                <p class="card-text">Entre em atividade como professor para coordenar e administrar suas classes e
                    series</p>
                <?php
                    echo '<a href="ensino-das-classes/interface-ensino.php?nome-escola-escolhida='.$escola_escolhida_07.'" target="_self" id="link-card" class="btn btn-success">Entrar em atividade</a>'

                ?>
            </div>

        </div>

        <div class="card">

            <img src="pictures/pictures-escolas/escola-teste.jpg" alt="Escola tal">

            <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>{$escola_escolhida_08}</h5>"?>

                <p class="card-text">Entre em atividade como professor para coordenar e administrar suas classes e
                    series</p>
                <?php
                    echo '<a href="ensino-das-classes/interface-ensino.php?nome-escola-escolhida='.$escola_escolhida_08.'" target="_self" id="link-card" class="btn btn-success">Entrar em atividade</a>'

                ?>
            </div>

        </div>







    </main>

</body>

</html>