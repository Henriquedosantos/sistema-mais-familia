
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style-erros/tratando-erros-fail-all.css" media="all">
    <link rel="stylesheet" href="../styles/style-erros/tratando-erros-fail-screen.css" meidia="sreen">
    <link rel="shortcut icon" href="../img-all/favicon/favicon.ico" type="image/x-icon">
    <title>Obrigado pelas informações!</title>
</head>
<body>
    <main>
        <?php

          echo "<h1> Dados enviados com sucesso!</h1>";
          echo "<p> Obrigado pelas informações</p>";
          echo "<a id = 'links' href = '../vizualizar-atendimentos/visu-atendimentos.php'>Ver atendimentos do dia</a>";
          echo "<a id = 'links' href = '../index.html'>Finalizar consulta</a>";
          die();
       
        ?>
        
    </main>
</body>
</html>