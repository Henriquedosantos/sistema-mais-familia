<?php 
     //print_r($_REQUEST)

     if(isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['password']))){
      
        //existe um submit - acessa
        
        include  "../config.inc";

        $Email = $_POST['email'];
        $password = $_POST['password'];

        $consulta =  "SELECT * FROM login WHERE s_email_login = '$Email' AND s_senha_login = '$password'";
        $query = mysqli_query($conec,$consulta);

        // confir de login com schema

        if(mysqli_affected_rows($conec) > 0){
            session_start();
            $_SESSION['email'] = $Email;
            $_SESSION['senha'] = $password;
            header("Location: sistema-cartao.php");
        }else{
            header("Location: login.php");
        }


     }else{
       //echo " não existe um submit - não acessa";
       
        header("Location: login.php");
     }

?>