<?php


//retorno_associado

session_start();

if (!empty($_POST['submit']) and !empty($_POST['nome_associado_atender']) and !empty($_POST['tipo_associado_atender']) and !empty($_POST['empresa_atender']) and !empty($_POST['servico_atender']) and !empty($_POST['hora_atender'])  and !empty($_POST['retorno_atender'])) {


    // print_r(  $_SESSION['carteirinha_titular'] );

    $associado_atender = $_POST['nome_associado_atender'];
    $servico_atender = $_POST['servico_atender'];

    $pattern = "/^[a-záàâãéèêíïóôõöúçñ ]+$/i";

    if (preg_match($pattern, $associado_atender) and preg_match($pattern, $servico_atender)) {

        $day = date("d");
        $moth = date("m");
        $year = date("Y");

       $date_atender = "{$year}-{$moth}-{$day}";
      // echo $date_atender;

  
        // pegando horario

        $hora_atender = $_POST['hora_atender'];
        $retorno_atender = $_POST['retorno_atender'];
        $empresa_atender = $_POST['empresa_atender'];
        $tipo_associado = $_POST['tipo_associado_atender'];

        // fazeno o insert


        include "../config.inc";

       if(!empty($_SESSION['carteirinha_titular'])){
           
          $carteirinha = $_SESSION['carteirinha_titular'];
       } 

        $insert =

         " INSERT INTO atendimento (s_carteirinha_atendimento, s_nomeempresa_atendimento, s_nomecliente_atendimento, s_tipocliente_atendimento, d_data_atendimento, s_hora_atendimento, s_servico_atendimento, s_retorno_atendimento) VALUES (
        '$carteirinha',
        '$empresa_atender',
        '$associado_atender',  
        '$tipo_associado',
        '$date_atender',
        '$hora_atender',
        '$servico_atender',
        '$retorno_atender')";

        $query = mysqli_query($conec, $insert);

            if (mysqli_affected_rows($conec) > 0) {
                // echo "sucesso";

                $enviado_atender = 1;
                $_SESSION['dados_enviados_atender'] = $enviado_atender;
                $_SESSION['nome_empresa'] = $empresa_atender;

                header("Location: enviado-atender.php");
                
            } else {
                include "tratando-erros-enviado/erro-inesperado.html";
                die();
               // header("Location:atender-enviado.php")
            }

    }else{
        // nome escrito de forma incorreta
        include "tratando-erros-enviado/digitos-errados.html";
        die();
    }


}else{
    // dados faltando 
    include "tratando-erros-enviado/digitos-faltando.html";
    die();
}
