<?php 
    session_start();

    if( isset ($_SESSION['Nombre']) && $_POST['Cerrar'] == 1){
        session_unset();
        session_destroy();
        header('location: ./datos.php');
    }else{
        header('location: ./datos.php');
    }


?>