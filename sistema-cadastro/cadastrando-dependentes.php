<?php

session_start();

include "../verific.inc";

$dia = date('d');
$m = date('m');
$ano = date('y');

$date_atual = "{$ano}-{$m}-{$dia}";
$EMAIL = $_SESSION['email'];

if (isset($_SESSION['nome_titular'])) {
    $NAME_REGISTRO = $_SESSION['nome_titular'];
}

// verificando a existencia de uma proposta

if (!empty($_SESSION['carteirinha'])) {

    $carteirinha_titular_dep = $_SESSION['carteirinha'];




    // verificando se todos os dependentes estão nulos 

    if (empty($_POST['nome_dp01'])  and empty($_POST['nome_dp02']) and empty($_POST['nome_dp03'])  and empty($_POST['nome_dp04'])  and empty($_POST['nome_dp05'])  and empty($_POST['nome_dp06'])   and empty($_POST['nome_dp07'])  and empty($_POST['nascimento_dp1']) and empty($_POST['nascimento_dp2']) and empty($_POST['nascimento_dp3']) and empty($_POST['nascimento_dp4']) and empty($_POST['nascimento_dp5']) and empty($_POST['nascimento_dp6']) and empty($_POST['nascimento_dp7'])) {

        include "../config.inc";

        $primary_key =

            "SELECT s_carteirinha_dependentes FROM cons4068_cardfamily_cloud.dependentes
                    WHERE s_carteirinha_dependentes = '$carteirinha_titular_dep'";

        $query = mysqli_query($conec, $primary_key);
        mysqli_num_rows($query);

        if (mysqli_num_rows($query) == 0) {



            $insert_nulos =

                "INSERT INTO dependentes  (s_carteirinha_dependentes ,s_nomecompleto01_dependentes, d_nascimento01_dependentes, s_nomecompleto02_dependentes, d_nascimento02_dependentes,s_nomecompleto03_dependentes,d_nascimento03_dependentes, s_nomecompleto04_dependentes, d_nascimento04_dependentes, s_nomecompleto05_dependentes,d_nascimento05_dependentes, s_nomecompleto06_dependentes, d_nascimento06_dependentes, s_nomecompleto07_dependentes, d_nascimento07_dependentes ) VALUES(
            
                '$carteirinha_titular_dep',
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null

                    )";





            mysqli_query($conec, $insert_nulos);
            mysqli_close($conec);
            unset($_SESSION['carteirinha']);
            unset($_SESSION['nome_titular']);
            header("Location: cadastro-clientes.php");
        };
    }







    if (!empty($_POST['nome_dp01'])  or  !empty($_POST['nome_dp02'])  or !empty($_POST['nome_dp03'])  or  !empty($_POST['nome_dp04'])  or  !empty($_POST['nome_dp05'])  or  !empty($_POST['nome_dp06'])  or  !empty($_POST['nome_dp07'])) {



        // pegando os nomes dos dependentes

        $nome_dp01 = $_POST['nome_dp01'];
        $nome_dp02 = $_POST['nome_dp02'];
        $nome_dp03 = $_POST['nome_dp03'];
        $nome_dp04 = $_POST['nome_dp04'];
        $nome_dp05 = $_POST['nome_dp05'];
        $nome_dp06 = $_POST['nome_dp06'];
        $nome_dp07 = $_POST['nome_dp07'];



        $pattern_text = "/^[a-záàâãéèêíïóôõöúçñ ]+$/i";


        if (preg_match($pattern_text, $nome_dp01) or preg_match($pattern_text, $nome_dp02) or preg_match($pattern_text, $nome_dp03) or preg_match($pattern_text, $nome_dp04) or preg_match($pattern_text, $nome_dp05) or preg_match($pattern_text, $nome_dp06) or preg_match($pattern_text, $nome_dp07)) {

            // echo "passsamo";

            if (!empty($_POST['nascimento_dp1']) or !empty($_POST['nascimento_dp2']) or !empty($_POST['nascimento_dp3']) or !empty($_POST['nascimento_dp4']) or !empty($_POST['nascimento_dp5']) or !empty($_POST['nascimento_dp6']) or !empty($_POST['nascimento_dp7'])) {




                $nascimento_1 = $_POST['nascimento_dp1'];
                $nascimento_2 = $_POST['nascimento_dp2'];
                $nascimento_3 = $_POST['nascimento_dp3'];
                $nascimento_4 = $_POST['nascimento_dp4'];
                $nascimento_5 = $_POST['nascimento_dp5'];
                $nascimento_6 = $_POST['nascimento_dp6'];
                $nascimento_7 = $_POST['nascimento_dp7'];





                // CONFERINDO SE O 1º DEPENDENTE ESTÃO VAZIOS!

                if ((!empty($nome_dp01) and !empty($nascimento_1))) {
                    $tmp_name01 = "'$nome_dp01'";
                    $tmp_nascimento_dp1 = "'$nascimento_1'";
                } else if (!empty($nome_dp01) and empty($nascimento_1)) {
                    $tmp_name01 = "'$nome_dp01'";
                    $tmp_nascimento_dp1 = 'null';
                } else if (empty($nome_dp01) and !empty($nascimento_1)) {
                    $tmp_name01 = 'null';
                    $tmp_nascimento_dp1 = "'$nascimento_1'";
                } else if (empty($nome_dp01) and empty($nascimento_1)) {
                    $tmp_name01 = 'null';
                    $tmp_nascimento_dp1 = 'null';
                } else {
                    $tmp_name01 = 'null';
                    $tmp_nascimento_dp1 = 'null';
                }





                // CONFERINDO SE O 2º DEPENDENTE ESTÃO VAZIOS!

                if ((!empty($nome_dp02) and !empty($nascimento_2))) {
                    $tmp_name02 = "'$nome_dp02'";
                    $tmp_nascimento_dp2 = "'$nascimento_2'";
                } else if (!empty($nome_dp02) and empty($nascimento_2)) {
                    $tmp_name02 = "'$nome_dp02'";
                    $tmp_nascimento_dp2 = 'null';
                } else if (empty($nome_dp02) and !empty($nascimento_2)) {
                    $tmp_name02 = 'null';
                    $tmp_nascimento_dp2 = "'$nascimento_2'";
                } else if (empty($nome_dp02) and empty($nascimento_2)) {
                    $tmp_name02 = 'null';
                    $tmp_nascimento_dp2 = 'null';
                } else {
                    $tmp_name02 = 'null';
                    $tmp_nascimento_dp2 = 'null';
                }




                // CONFERINDO SE O 3º DEPENDENTE ESTÃO VAZIOS!





                if ((!empty($nome_dp03) and !empty($nascimento_3))) {
                    $tmp_name03 = "'$nome_dp03'";
                    $tmp_nascimento_dp3 = "'$nascimento_3'";
                } else if (!empty($nome_dp03) and empty($nascimento_3)) {
                    $tmp_name03 = "'$nome_dp03'";
                    $tmp_nascimento_dp3 = 'null';
                } else if (empty($nome_dp03) and !empty($nascimento_3)) {
                    $tmp_name03 = 'null';
                    $tmp_nascimento_dp3 = "'$nascimento_3'";
                } else if (empty($nome_dp03) and empty($nascimento_3)) {
                    $tmp_name03 = 'null';
                    $tmp_nascimento_dp3 = 'null';
                } else {
                    $tmp_name03 = 'null';
                    $tmp_nascimento_dp3 = 'null';
                }



                // CONFERINDO SE O 4º DEPENDENTE ESTÃO VAZIOS!

                if ((!empty($nome_dp04) and !empty($nascimento_4))) {
                    $tmp_name04 = "'$nome_dp04'";
                    $tmp_nascimento_dp4 = "'$nascimento_4'";
                } else if (!empty($nome_dp04) and empty($nascimento_4)) {
                    $tmp_name04 = "'$nome_dp04'";
                    $tmp_nascimento_dp4 = 'null';
                } else if (empty($nome_dp04) and !empty($nascimento_4)) {
                    $tmp_name04 = 'null';
                    $tmp_nascimento_dp4 = "'$nascimento_4'";
                } else if (empty($nome_dp04) and empty($nascimento_4)) {
                    $tmp_name04 = 'null';
                    $tmp_nascimento_dp4 = 'null';
                } else {
                    $tmp_name04 = 'null';
                    $tmp_nascimento_dp4 = 'null';
                }



                // CONFERINDO SE O 5º DEPENDENTE ESTÃO VAZIOS!


                if ((!empty($nome_dp05) and !empty($nascimento_5))) {
                    $tmp_name05 = "'$nome_dp05'";
                    $tmp_nascimento_dp5 = "'$nascimento_5'";
                } else if (!empty($nome_dp05) and empty($nascimento_5)) {
                    $tmp_name05 = "'$nome_dp05'";
                    $tmp_nascimento_dp5 = 'null';
                } else if (empty($nome_dp05) and !empty($nascimento_5)) {
                    $tmp_name05 = 'null';
                    $tmp_nascimento_dp5 = "'$nascimento_5'";
                } else if (empty($nome_dp05) and empty($nascimento_5)) {
                    $tmp_name05 = 'null';
                    $tmp_nascimento_dp5 = 'null';
                } else {
                    $tmp_name05 = 'null';
                    $tmp_nascimento_dp5 = 'null';
                }

                // CONFERINDO SE O 6º DEPENDENTE ESTÃO VAZIOS!

                if ((!empty($nome_dp06) and !empty($nascimento_6))) {
                    $tmp_name06 = "'$nome_dp06'";
                    $tmp_nascimento_dp6 = "'$nascimento_6'";
                } else if (!empty($nome_dp06) and empty($nascimento_6)) {
                    $tmp_name06 = "'$nome_dp06'";
                    $tmp_nascimento_dp6 = 'null';
                } else if (empty($nome_dp06) and !empty($nascimento_6)) {
                    $tmp_name06 = 'null';
                    $tmp_nascimento_dp6 = "'$nascimento_6'";
                } else if (empty($nome_dp06) and empty($nascimento_6)) {
                    $tmp_name06 = 'null';
                    $tmp_nascimento_dp6 = 'null';
                } else {
                    $tmp_name06 = 'null';
                    $tmp_nascimento_dp6 = 'null';
                }


                // CONFERINDO SE O 7º DEPENDENTE ESTÃO VAZIOS!



                if ((!empty($nome_dp07) and !empty($nascimento_7))) {
                    $tmp_name07 = "'$nome_dp07'";
                    $tmp_nascimento_dp7 = "'$nascimento_7'";
                } else if (!empty($nome_dp07) and empty($nascimento_7)) {
                    $tmp_name07 = "'$nome_dp07'";
                    $tmp_nascimento_dp7 = 'null';
                } else if (empty($nome_dp07) and !empty($nascimento_7)) {
                    $tmp_name07 = 'null';
                    $tmp_nascimento_dp7 = "'$nascimento_7'";
                } else if (empty($nome_dp07) and empty($nascimento_7)) {
                    $tmp_name07 = 'null';
                    $tmp_nascimento_dp7 = 'null';
                } else {
                    $tmp_name07 = 'null';
                    $tmp_nascimento_dp7 = 'null';
                }



                include "../config.inc";

                $primary_key =

                    "SELECT s_carteirinha_dependentes FROM dependentes
                                WHERE s_carteirinha_dependentes ='$carteirinha_titular_dep'";

                $query = mysqli_query($conec, $primary_key);
                mysqli_num_rows($query);

                if (mysqli_num_rows($query) == 0) {



                    $insert_dp =

                        "INSERT INTO dependentes  (s_carteirinha_dependentes ,s_nomecompleto01_dependentes, d_nascimento01_dependentes, s_nomecompleto02_dependentes, d_nascimento02_dependentes,s_nomecompleto03_dependentes,d_nascimento03_dependentes, s_nomecompleto04_dependentes, d_nascimento04_dependentes, s_nomecompleto05_dependentes,d_nascimento05_dependentes,  s_nomecompleto06_dependentes,d_nascimento06_dependentes, s_nomecompleto07_dependentes,d_nascimento07_dependentes) VALUES(
                                
                               '$carteirinha_titular_dep',
                                $tmp_name01,
                                $tmp_nascimento_dp1,
                                $tmp_name02,
                                $tmp_nascimento_dp2,
                                $tmp_name03,
                                $tmp_nascimento_dp3,
                                $tmp_name04,
                                $tmp_nascimento_dp4,
                                $tmp_name05,
                                $tmp_nascimento_dp5,
                                $tmp_name06,
                                $tmp_nascimento_dp6,
                                $tmp_name07,
                                $tmp_nascimento_dp7

                                )";


                    mysqli_query($conec, $insert_dp);



                    if (mysqli_affected_rows($conec)) {

                        // tudo ok
                        mysqli_close($conec);
                        unset($_SESSION['carteirinha']);
                        unset($_SESSION['nome_titular']);
                        header("Location: cadastro-clientes.php");
                    } else {
                        // ja registrado
                        unset($_SESSION['carteirinha']);
                        unset($_SESSION['nome_titular']);
                        mysqli_close($conec);
                        include "tratando-erros/primary-key.html";
                    }
                } else {
                    // já exixte este registro
                    include "tratando-erros/primary-key.html";
                    mysqli_close($conec);
                    die();
                } // caso as datas de nascimento esteja nula
            } else {
                //dados fora do padrao
                include "tratando-erros/digitos-errados.html";
                die();
            }
        }
    }
} else {
    include "tratando-erros/sem-proposta-dp.html";
    die();
}

