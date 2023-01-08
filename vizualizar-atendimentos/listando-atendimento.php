<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img-all/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/style-listando-atendimento/listando-atendimento-all.css" media="all">
    <link rel="stylesheet" href="../styles/style-listando-atendimento/listando-atendimento-screen.css" media="screen">
    <link rel="stylesheet" href="../styles/style-listando-atendimento/print.css" type="text/css" media="print">
    <title>Listando registros</title>
</head>

<body>

    <main>


        <h2>
            Registros de atendimento de hoje
        </h2>


        <h3>
            Precione "Ctrl + P" para imprimir seus registros.
        </h3>


        <h2 class = "msg">
            Veja seus registros!
        </h2>
        
        <h3  class = "msg">
            Entre no computador para imprimir seus registros de hoje.
        </h3>


        <div class="table-responsive">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Clinica</th>
                        <th scope="col">Carteirinha</th>
                        <th scope="col">Associado</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Data</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Serviço</th>
                        <th scope="col">Retorno</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    while ($registers = mysqli_fetch_row($result)) {

                        echo "<tr>";
                        echo "<td>{$registers[0]}</td>";
                        echo "<td>{$registers[1]}</td>";
                        echo "<td>{$registers[2]}</td>";
                        echo "<td>{$registers[3]}</td>";
                        echo "<td>{$registers[4]}</td>";
                        echo "<td>{$registers[5]}</td>";
                        echo "<td>{$registers[6]}</td>";
                        echo "<td>{$registers[7]}</td>";
                      

                     
                        echo "</tr>";
                    }

                    mysqli_close($conec);

                    ?>

                </tbody>
            </table>

       

        </div>
     <div id = "container_link"><a href="../index.html">Retornar</a></div>
    </main>

</body>

</html>