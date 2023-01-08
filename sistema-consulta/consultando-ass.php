<?php



     if(isset($_POST['submit']) AND !empty($_POST['name_titular'] AND !empty($_POST['code_carteirinha']))){
       
       $name_titular = $_POST['name_titular'];
       $code_carteirinha = $_POST['code_carteirinha'];

       //echo $name_titular;
       //echo $code_carteirinha;
      

        $pattern_name = "/^[a-záàâãéèêíïóôõöúçñ ]+$/i";
        $pattern_code = "/^[0-9]{4}+$/";

        if(preg_match($pattern_code,$code_carteirinha) AND preg_match($pattern_name,$name_titular)){

            // VERIFICANDO SE EXISTE UM BLOQUEIO
            include "../config.inc";
            session_start();


            $verf_bloq = "SELECT * FROM clientebloqueado  WHERE RIGHT(s_carteirinha_clientebloqueado, 4) = '$code_carteirinha' AND s_nomecompleto_clientebloqueado LIKE('$name_titular%')";
            $QUERY_BLOC = mysqli_query($conec, $verf_bloq);

            if(mysqli_affected_rows($conec) == 1){
               //MOSTRANDO CLIENTES BLOQUEADOS 
                 
                while($registers = mysqli_fetch_row($QUERY_BLOC)){
                    $id = $registers[0];
                    $carteirinha_bloc = $registers[1];
                    $nome_bloc = $registers[2];
                    $estado = $registers[3];
                } 

                $verf_bloq_dependendentes = "SELECT s_nomecompleto01_dependentes, s_nomecompleto02_dependentes, s_nomecompleto03_dependentes, s_nomecompleto04_dependentes, s_nomecompleto05_dependentes, s_nomecompleto06_dependentes, s_nomecompleto07_dependentes FROM dependentes WHERE RIGHT(s_carteirinha_dependentes, 4) = '$code_carteirinha' ";
                $QUERY_BLOC_DEPENDENTE = mysqli_query($conec, $verf_bloq_dependendentes);

                
                while($registers = mysqli_fetch_row($QUERY_BLOC_DEPENDENTE)){
                    $dp_bloc_01 = $registers[0];
                    $dp_bloc_02 = $registers[1];
                    $dp_bloc_03 = $registers[2];
                    $dp_bloc_04 = $registers[3];
                    $dp_bloc_05 = $registers[4];
                    $dp_bloc_06 = $registers[5];
                    $dp_bloc_07 = $registers[6];
                } 


                $_SESSION['carteirinha_bloc'] = $carteirinha_bloc;
                $_SESSION['nome_bloc'] = $nome_bloc;
                $_SESSION['dp_bloc_01'] = $dp_bloc_01;
                $_SESSION['dp_bloc_02'] = $dp_bloc_02;
                $_SESSION['dp_bloc_03'] = $dp_bloc_03;
                $_SESSION['dp_bloc_04'] = $dp_bloc_04;
                $_SESSION['dp_bloc_05'] = $dp_bloc_05;
                $_SESSION['dp_bloc_06'] = $dp_bloc_06;
                $_SESSION['dp_bloc_07'] = $dp_bloc_07;
                $_SESSION['estado'] =  $estado;

                header("Location: listar-bloc.php");
                die();
            
            
            
            
            
            
            
            
            }




            
         
            

            // CONSULTANDO


            $consult = "SELECT 
            dp.s_carteirinha_dependentes,
            ct.s_nomecompleto_clientesmaisfamilia AS 'Nome do titular',
            dp.s_nomecompleto01_dependentes,
            dp.s_nomecompleto02_dependentes,
            dp.s_nomecompleto03_dependentes,
            dp.s_nomecompleto04_dependentes,
            dp.s_nomecompleto05_dependentes,
            dp.s_nomecompleto06_dependentes,
            dp.s_nomecompleto07_dependentes,
            (SELECT cc.Plano FROM contratos_consulta AS cc WHERE RIGHT(cc.s_carteirinha_clientesmaisfamilia, 4) = '$code_carteirinha' AND cc.s_nomecompleto_clientesmaisfamilia LIKE('$name_titular%'))
                FROM
              
              clientesmaisfamilia ct
                        INNER JOIN
                    dependentes dp ON dp.s_carteirinha_dependentes = ct.s_carteirinha_clientesmaisfamilia
                WHERE
                    RIGHT(dp.s_carteirinha_dependentes, 4) = '$code_carteirinha'
                        AND  ct.s_nomecompleto_clientesmaisfamilia like('$name_titular%')";

            $query = mysqli_query($conec, $consult);
            $confir = mysqli_num_rows($query);

           if($confir > 0)
           {
           // echo "certo";
             session_start();
            
            while($registers = mysqli_fetch_row($query)){
                    $carteirinha_titular = $registers[0];
                    $name_titular = $registers[1];
                    $dp_01 = $registers[2];
                    $dp_02 = $registers[3];
                    $dp_03 = $registers[4];
                    $dp_04 = $registers[5];
                    $dp_05 = $registers[6];
                    $dp_06 = $registers[7];
                    $dp_07 = $registers[8];
                    $plano =  $registers[9];
                    // print_r($registers);
                } 

          

            $_SESSION['carteirinha_titular'] =  $carteirinha_titular;
            $_SESSION['nome_titular'] =  $name_titular;
            $_SESSION['dp_01'] =   $dp_01;
            $_SESSION['dp_02'] =   $dp_02;
            $_SESSION['dp_03'] =   $dp_03;
            $_SESSION['dp_04'] =   $dp_04;
            $_SESSION['dp_05'] =   $dp_05;
            $_SESSION['dp_06'] =   $dp_06;
            $_SESSION['dp_07'] =   $dp_07;
            $_SESSION['plano'] =   $plano;

          

           header("Location: listar-consulta.php");
        

           }else
           {
            //sem registros encontrados 
            //echo "sem registro";
            include "tratando-erros/sem-registro.html";
           }

        }else{

            $name_titular = null;
            $code_carteirinha = null;

            //echo "erro de padrao";
            include "tratando-erros/dados-errados.html";

        }
        
    
    }else{

        //echo "não existe dados inseridos";
        header("Location: index.html");
    
     }
?>

