<?php 

    session_start(); 



    if(!isset($_SESSION["s_nombre"]) && !isset($_SESSION["s_clave"])){
           
            header("Location: index.php");
            die();
    }

    $idioma=$_GET["idioma"];

    if($idioma!="ES" && $idioma!="EN"){ 
        $idioma="ES";
    }

    setcookie("c_idioma",$idioma, time() + 24 * 3600);
    header("Location: mipanel.php");

?>