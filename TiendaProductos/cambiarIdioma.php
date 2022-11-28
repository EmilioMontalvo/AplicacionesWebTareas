<?php 

    session_start(); //Cada que se va  autilizar la sesion se usa

    if(!isset($_SESSION["s_nombre"]) && !isset($_SESSION["s_clave"])){
            header("Location: index.php");
    }

    setcookie("c_idioma",$_GET["idioma"],0);
    header("Location: mipanel.php");

?>