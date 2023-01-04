<?php




     //conec efeituada!
   
    $localhost = "localhost";
    $usr = "root";
    $snh = "Henrique0510@";
    $shema = "cartão";


    $conec = mysqli_connect($localhost,$usr,$snh);
    $shema_db = mysqli_select_db($conec,$shema);




   
  
?>