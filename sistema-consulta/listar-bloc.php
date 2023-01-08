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

      
        if ($_SESSION['estado'] == "Bloqueado") {
            echo "<span id = 'inativo'><h1>Cliente: " .$_SESSION['estado']."</span></h1>";
        } 


        echo "<p>Cliente: ".$_SESSION['nome_bloc']."</p>";
        echo "<p>Carteirinha: ".$_SESSION['carteirinha_bloc']."</p>";


        
        if (strlen($_SESSION['dp_bloc_01']) > 0) {
            echo "<p>Dependente 01: ".$_SESSION['dp_bloc_01']."</p>";
        }

        if (strlen($_SESSION['dp_bloc_02']) > 0) {
            echo "<p>Dependente 02: ".$_SESSION['dp_bloc_02']."</p>";
        }

        if (strlen($_SESSION['dp_bloc_03']) > 0) {
            echo "<p>Dependente 03: ".$_SESSION['dp_bloc_03']."</p>";
        }


        if (strlen($_SESSION['dp_bloc_04']) > 0) {
            echo "<p>Dependente 04: ".$_SESSION['dp_bloc_04']."</p>";
        }


        if (strlen($_SESSION['dp_bloc_05']) > 0) {
            echo "<p>Dependente 05: ".$_SESSION['dp_bloc_05']."</p>";
        }

        if (strlen($_SESSION['dp_bloc_06']) > 0) {
            echo "<p>Dependente 06: ".$_SESSION['dp_bloc_06']."</p>";
        }

        if (strlen($_SESSION['dp_bloc_07']) > 0) {
            echo "<p>Dependente 07: ".$_SESSION['dp_bloc_07']."</p>";
        }







        ?>


      <section>

        <?php
        
            echo "<span id = 'msg'>Encaminhe o associado para que entre em contato com o escritorio Mais Família.</span>";
            echo '<a id = "link" href="../index.html">Retornar</a>';
            die();
        ?>
      </section>
      
    </main>




</body>

</html>