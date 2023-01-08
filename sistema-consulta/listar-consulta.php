<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style-consulta/listando-consulta-all.css" media="all">
    <link rel="stylesheet" href="../styles/style-consulta/listando-consulta-screen.css" media="screen">
    <link rel="shortcut icon" href="../img-all/favicon/favicon.ico" type="image/x-icon">
    <title>Consultando cliente</title>
</head>

<body>

    <main>
        <?php

        session_start();

      

        if ($_SESSION['plano'] == "ativo") {
            echo "<span id = 'ativo'><h1>Cliente: " .$_SESSION['plano']."</span></h1>";
        } else {
            echo "<span id = 'inativo'><h1>Cliente: " .$_SESSION['plano']."</span></h1>";
            $inativo = 0;
        } 


        echo "<p>Cliente: ".$_SESSION['nome_titular']."</p>";
        echo "<p>Carteirinha: ".$_SESSION['carteirinha_titular']."</p>";

        if (strlen($_SESSION['dp_01']) > 0) {
            echo "<p>Dependente 01: ".$_SESSION['dp_01']."</p>";
        }

        if (strlen($_SESSION['dp_02']) > 0) {
            echo "<p>Dependente 02: ".$_SESSION['dp_02']."</p>";
        }

        if (strlen($_SESSION['dp_03']) > 0) {
            echo "<p>Dependente 03:" .$_SESSION['dp_03']."</p>";
        }

        if (strlen($_SESSION['dp_04']) > 0) {
            echo "<p>Dependente 04: ".$_SESSION['dp_04']."</p>";
        }

        if (strlen($_SESSION['dp_05']) > 0) {
            echo "<p>Dependente 05: ".$_SESSION['dp_05']."</p>";
        }

        if (strlen($_SESSION['dp_06']) > 0) {
            echo "<p>Dependente 06: ".$_SESSION['dp_06']."</p>";
        }

        if (strlen($_SESSION['dp_07']) > 0) {
            echo "<p>Dependente 07: ".$_SESSION['dp_07']."</p>";
        }

      


        ?>


      <section>

        <?php
                if(isset($inativo)){
                    //echo 'existe';
                    echo " <a href='../index.html'>Consultar novamente</a>";
                
                }else{
                    echo
                    "  <a href='../index.html'>Consultar novamente</a>
                        <a href='../atender-associado/form-atender.php'>Atender associado</a>";
                }
            
            ?>
      </section>
      
    </main>




</body>

</html>