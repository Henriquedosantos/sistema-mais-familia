<?php
if ((!isset($_SESSION['email']) == TRUE) && (!isset($_SESSION['senha']) == TRUE)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);


    //echo "não existe";
    header("Location: login.php");

}

?>
