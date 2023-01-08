<?php


   session_start();

  include "../verific.inc";


if (isset($_POST['submit']) AND !empty($_POST['c_carteirinha']) AND !empty($_POST['c_nometitular']) and !empty($_POST['c_datanascimento'])  and !empty($_POST['c_rg'])  and !empty($_POST['c_cpf']) and !empty($_POST['c_contato']) and !empty($_POST['c_rua'])  and !empty($_POST['c_cidades'])  and !empty($_POST['c_inicioplano'])  and !empty($_POST['c_fimplano'])  and isset($_FILES['c_foto'])) {


   $email = $_SESSION['email'];


   //textos

   $c_nometitular = ($_POST['c_nometitular']);

   // inicio e fim do plano

   $c_inicio = $_POST['c_inicioplano'];
   $c_fim = $_POST['c_fimplano'];


   //numbers

   $c_cpf = $_POST['c_cpf'];
   $c_contato = $_POST['c_contato'];
   $c_carteirinha = $_POST['c_carteirinha'];
   $c_rua = $_POST['c_rua'];
   $c_nascimento = $_POST['c_datanascimento'];
   $c_rg = $_POST['c_rg'];
   $c_cidades = $_POST['c_cidades'];
   // filtrando cidades - nome - carteirinha

   $pattern_text = "/^[a-záàâãéèêíïóôõöúçñ ]+$/i";
   $pattern_number = "/^[0-9]+$/";
   $pattern_carterinha = "/[0-9]{4}\.?[0-9]{4}\.?[0-9]{2}\.?[0-9]{4}$/";
   $pattern_cpf = "/[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}$/";



   if (preg_match($pattern_text, $c_nometitular) AND preg_match($pattern_cpf, $c_cpf)  AND preg_match($pattern_carterinha, $c_carteirinha)){
      
     //foto enviada - caminho original -

      $foto_enviada = $_FILES["c_foto"];
      $path = $foto_enviada['full_path'];
      $_SESSION['path'] = $path;

      
      // Conferindo o tamanho da imagem

      if ($_FILES['c_foto']['size'] > 4194304) {

         unset($_FILES['c_foto']);
         include  "tratando-erros/arquivo-grande.html";
         die();
      }

      // conferindo falha ao enviar!

      if ($_FILES['c_foto']['error']) {
         unset($_FILES['c_foto']) ;
         include  "tratando-erros/erro-coringa.html";
         die();
      }


      $diretoy = "fotos-contratos/";
      $name_arquivo = $foto_enviada['name'];
      $new_name = uniqid();

      $tipo_arquivo = strtolower(pathinfo($path, PATHINFO_EXTENSION));


      if ($tipo_arquivo != "jpeg" && $tipo_arquivo != "png" && $tipo_arquivo != "jpg") {
         unset($_FILES['c_foto']);
         include "tratando-erros/arquivo-nao-aceito.html";
         die();
      }

      // novos arquivos!

      $new_path =  move_uploaded_file($foto_enviada["tmp_name"], "{$diretoy}.{$new_name}.{$tipo_arquivo}");
      $foto_enviada_new = "{$new_name}.$tipo_arquivo";
      $novocaminho = "{$diretoy}.{$new_name}.{$tipo_arquivo}";

     
       

      if ($new_path == TRUE) {
         // --> $foto_enviada_new

         include  "../config.inc";

         $primary_key = 
         " SELECT s_carteirinha_clientesmaisfamilia 
           FROM cons4068_cardfamily_cloud.clientesmaisfamilia
           WHERE s_carteirinha_clientesmaisfamilia ="."'$c_carteirinha'";

         $query = mysqli_query($conec, $primary_key);
         mysqli_num_rows($query);


         if(mysqli_num_rows($query) == 0){


            $insert_associado = " INSERT INTO cons4068_cardfamily_cloud.clientesmaisfamilia (s_carteirinha_clientesmaisfamilia,  s_nomecompleto_clientesmaisfamilia, d_nascimento_clientesmaisfamilia, s_rg_clientesmaisfamilia, s_cpf_clientesmaisfamilia, s_contato_clientesmaisfamilia, s_endereco_clientesmaisfamilia, s_cidade_clientesmaisfamilia, d_datainicio_clientesmaisfamilia, d_datafim_clientesmaisfamilia) VALUES(
            '$c_carteirinha',
            '$c_nometitular',
            '$c_nascimento',
            '$c_rg',
            '$c_cpf',
            '$c_contato',
            '$c_rua',
            '$c_cidades',
            '$c_inicio',
            '$c_fim')";
            
            $query_02 = mysqli_query($conec, $insert_associado);
            mysqli_affected_rows($conec);

            $day = date("d");
            $moth = date("m");
            $year = date("Y");

            $date_atual = "{$year}-{$moth}-{$day}";

            if(mysqli_affected_rows($conec) > 0){

               $insert_registros = "INSERT INTO cons4068_cardfamily_cloud.registroscadastro (s_log_registroscadastro,s_novoregistro_registrocadastro, s_carteirinha_registrocadastro, d_dataregistro_registroscadastro, s_cidade_registrocadastro) VALUES (
                  '$email',
                  '$c_nometitular',
                  '$c_carteirinha',
                  '$date_atual',
                  '$c_cidades'

                  )";

                mysqli_query($conec, $insert_registros);    


               $insert_foto = 

               "INSERT INTO cons4068_cardfamily_cloud.fotoscontratos (s_carteirinha_fotoscontratos,s_path_fotoscontratos) 
               VALUES('$c_carteirinha','$novocaminho') ";


               $query_03 = mysqli_query($conec, $insert_foto);

               if(mysqli_affected_rows($conec) > 0 ){
                  
               session_start();
               $_SESSION['foto_REC'] =  $novocaminho;
               $_SESSION['carteirinha'] = $c_carteirinha;
               $_SESSION['nome_titular'] = $c_nometitular;
              

               mysqli_close($conec);
               header("Location: cadastro-clientes.php");

               }


            }
               
         

         }else{
            // ja existe este registro
            unset($_SESSION['carteirinha']);
            unset($_SESSION['nome_titular']);
            mysqli_close($conec);
            include 'tratando-erros/primary-key.html';
            die();
         }

      }

   }else{
      //dados inseridos de forma errada
      include 'tratando-erros/digitos-errados.html';
      die();
      
      
   }      
  
  
  
}else{
   // falta dados e submit ;
   include "tratando-erros/digitos-faltando.html";
   //include "cadastro-clientes.php";
}
