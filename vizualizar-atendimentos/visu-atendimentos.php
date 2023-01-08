<?php

    session_start();


    //echo "{$_SESSION['nome_empresa']}"



    include "../config.inc";
    
    $day = date("d");
    $moth = date("m");
    $year = date("Y");

    $date_atender = "{$year}-{$moth}-{$day}";

    $nome_empresa = $_SESSION['nome_empresa'];

    $consultar_atendimentos = "SELECT s_nomeempresa_atendimento, s_carteirinha_atendimento, s_nomecliente_atendimento, s_tipocliente_atendimento, d_data_atendimento, s_hora_atendimento, s_servico_atendimento, s_retorno_atendimento FROM atendimento  WHERE s_nomeempresa_atendimento = '$nome_empresa' AND d_data_atendimento = '$date_atender'  ";
    $result = mysqli_query($conec, $consultar_atendimentos);

    

    if(mysqli_affected_rows($conec) > 0){
        // EXISTE REGISTROS
        $total_registros = mysqli_affected_rows($conec);
        include  "listando-atendimento.php";
   
    }else{
        //NÃO EXISTE REGISTROS
        include "sem-registros.html";
        mysqli_close($conec);
        die();
    }





?>
