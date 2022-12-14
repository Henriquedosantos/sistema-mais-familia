<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style-atendimeto/form-atendimento-all.css" media="all">
    <link rel="stylesheet" href="../styles/style-atendimeto/form-atendimento-screen.css" media="screen">
    <link rel="shortcut icon" href="../img-all/favicon/favicon.ico" type="image/x-icon">
    <title>Atender associado</title>
</head>

<body>
    <main>
        <h1>Atendimento ao associado</h1>
        <p>Nós mostre os detalhes do atendimento!</p>

        <div id="container">
            <form method="post" action="../atender-associado/armz-atendimento.php">


                <label for="nome_associado_atender">Nome do associado a ser atendido</label>
                <input type="text" name="nome_associado_atender" id="nome_associado_atender" maxlength="25" required>


                <label for="tipo_associado">Tipo do associado</label>
                <select name="tipo_associado_atender" id="tipo_associado">

                    <option name="tipo_associado_atender" value="Titular">Titular do plano</option>
                    <option name="tipo_associado_atender" value="Dependente">Dependente do plano</option>

                </select>



                <label for="empresa_atender">Nome da clínica médica</label>
                <select name="empresa_atender" id = "empresa_atender" >

            
                    <option name="empresa_atender" value="CLMED-PG">CLMED-PG</option>
                    <option name="empresa_atender" value="Carlos Chargas">Carlos Chargas</option>
                    <option name="empresa_atender" value="Cubatão Flex">Cubatão Flex</option>
                    <option name="empresa_atender" value="Cedipo">Cedipo</option>
                    <option name="empresa_atender" value="Comércio">Comércio</option>

                    <option name="empresa_atender" value="Dr. Olivato">Dr. Olivato</option>
                    <option name="empresa_atender" value="Drogaria">Drogaria</option>

                    <option name="empresa_atender" value="Sorridents">Sorridents</option>
                    <option name="empresa_atender" value="São Gabriel">São Gabriel</option>
                    <option name="empresa_atender" value="Oftalmo">Oftalmo</option>
                
                </select>


                <label for="servico_atender">Serviço atendido</label>
                <input type="text" name="servico_atender" id="servico_atender" required maxlength="25">

                <label for="hora_atender">Horário do atendimento</label>
                <input type="time" name="hora_atender" id="hora_atender" required>


                <label for="retorno_atender">Retorno</label>

                <select name="retorno_atender" id="retorno_atender">

                    <option name="retorno_associado" value="20 dias">20 dias</option>
                    <option name="retorno_associado" value="30 dias">30 dias</option>
                     <option name="retorno_associado" value="Nova consulta">Nova consulta</option>
                    <option name="retorno_associado" value="Sem retorno">Nenhum</option>

                </select>

               <input type="submit" name="submit" class="envia" value="Enviar">

            </form>
            <img id = "foto_main" src="../img-all/fotos-all/igm-atender.jpg"  alt="Atendendimento ao associado">

        </div>
    </main>
</body>

</html>