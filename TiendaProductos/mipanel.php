<?php

    session_start(); 


    if(isset($_POST["nombre"]) && isset($_POST["clave"])){
        $_SESSION["s_nombre"]=$_POST["nombre"];
        $_SESSION["s_clave"]=$_POST["clave"];
    }
    if(!isset($_SESSION["s_nombre"]) && !isset($_SESSION["s_clave"])){
        header("Location: index.php");
    }

    $nombre=$_SESSION["s_nombre"];
    $clave=$_SESSION["s_clave"];
    $guardarPreferencias=(isset($_POST["chkpreferencias"]))?$_POST["chkpreferencias"]:"";
    $idioma=isset($_COOKIE["c_idioma"])?$_COOKIE["c_idioma"]:"ES";

    if($guardarPreferencias!=""){
        
        setcookie("c_nombre",$nombre,0);
        setcookie("c_clave",$clave,0);
        setcookie("c_preferencias",$guardarPreferencias,0);
        
    }else{
        setcookie("c_nombre","");
        setcookie("c_clave","");
        setcookie("c_preferencias","");

    }

   


    $ficherosDeIdiomas=array("ES"=>"categorias_es.txt","EN"=>"categorias_en.txt");

?>

<html>
    <head>

    </head>
    <body>
    
            <fieldset>
                <h1>Panel Principal</h1>
                <h3>Bienvenido Usuario: <?php echo $nombre;?></h3>
                
                <a href="cambiarIdioma.php?idioma=ES"> ES(Español)</a> |
                <a href="cambiarIdioma.php?idioma=EN"> EN(Eglish)</a>
                <br>
                <a href="cerrarsesion.php"> Cerrar Sesion</a>
                
                <h2><?php echo ($idioma=="ES")?"Lista de Productos":"Product List";?></h2>
                <?php
                   
                   $fichero = fopen($ficherosDeIdiomas[$idioma], "r");
                   while (!feof($fichero)){
                    $linea = fgets($fichero);
                    echo $linea. "<br>";
                }
                
               
                fclose($fichero);                 
                ?>
                
            </fieldset>
        
    </body>
</html>
