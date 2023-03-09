<?php
session_start();



if (isset($_POST['valida-email-professor']) and isset($_POST['valida-senha-professor']) and isset($_POST['submit']) and  isset($_SESSION['ensino-fundamental-session']) and isset($_SESSION['nome-escola-escolhida-session'])) {

    // EMAIL E SENHA DE LOGIN
    $LOGAR_email_professor =  $_POST['valida-email-professor'];
    $LOGAR_senha_professor =  $_POST['valida-senha-professor'];


    // VERIFICAÇÕES DE PADRÃO

    $pattern = "/^[a-záàâãéèêíïóôõöúçñ@. ]+$/i";


    if (preg_match($pattern, $LOGAR_email_professor) and preg_match($pattern, $LOGAR_senha_professor)) {



        // ENSINO FUNDAMENTAL E ESCOLA ESCOLHIDA
        $LOGAR_ensinoFundamental_professor =  $_SESSION['ensino-fundamental-session'];
        $LOGAR_escola_professor =  $_SESSION['nome-escola-escolhida-session'];

        // IDENTIFICANDO O BANCO DE DADOS A SER USADO

        if ($LOGAR_escola_professor == "Lafayette Rodrigues Santos") {
            $schema_indentificada = "escola_01_lafayette";
        }


        // FAZENDO O CONFIG COM O BANCO DE DADOS CORRETO 

        $localhost = "localhost";
        $usuario = "root";
        $password = "Henrique0510@";
        $schema = "prefeitura_cubatao_" . $schema_indentificada . "";

        //echo  $schema;  -- CONFIRMANDO IDENTIFICAÇÃO DO BANCO DE DADOS
        $conection = mysqli_connect($localhost, $usuario, $password);
        $select_schema = mysqli_select_db($conection, $schema);


        //=============================TESTE DE CONEXÃO COM O BANCO DE DADOS=============================

        /*if($conection){
                                                                echo "certo, conexão efeituda";
                                                                die();
                                                            }else{
                                                                die("ops");
                                                            }*/



        //===================================================================================================



        //VERIFICANDO LOGIN DE USUARIO

        $select_VERIFICA_LOGIN_PROFESSOR = "SELECT * FROM loginprofessores  WHERE s_email_loginprofessores = ' $LOGAR_email_professor' AND s_senha_loginprofessores = ' $LOGAR_senha_professor'";
        mysqli_query($conection, $select_VERIFICA_LOGIN_PROFESSOR);


        if (mysqli_affected_rows($conection) > 0) {


            // USUARIO ENCONTRADO - EFETUANDO O LOGIN
            //die("Usuario encontrado - liberando acesso!");



        } else {




            // USUARIO NÃO ENCONTRADO - NEGANDO ACESSO AO SISTEMA   
            die("Usuario não encontrado - acesso negado!");

            header("Location: ../logando-usuarios/logando-acesso-negado.php");
            die();
        }
    }else{


        //DADOS INCORRETOS  



    }



} else {

    session_destroy();
    header("Location: ../ensino-das-classes/interface-ensino.php");
    die();
}
