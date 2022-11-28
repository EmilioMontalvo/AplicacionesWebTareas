<?php

    //Nombre: Emilio Montalvo
    //Curso: GR2

    $preferencias=false;
    $nombre="";
    $clave="";

    
    if(isset($_COOKIE["c_preferencias"]) && $_COOKIE["c_preferencias"]!="" ){
        $preferencias=true;
        $nombre=isset($_COOKIE["c_nombre"])?$_COOKIE["c_nombre"]:"";
        $clave=isset($_COOKIE["c_clave"])?$_COOKIE["c_clave"]:"";        
    }



?>

<html>
    <head>
    </head>
    <body>
    <div id="container">
        <form method="POST" action="mipanel.php">
            <fieldset>
                <h1>LOGIN</h1>
                Usuario:<br> <input type="text" name="nombre" value="<?php echo $nombre;?>"required/><br><br/>
                Clave:<br> <input type="password" name="clave" value="<?php echo $clave;?>"required/><br>
                <input type="checkbox" name="chkpreferencias" <?php echo ($preferencias)?"checked":"";?>>
                <label class="check" for="checkbox">Recordarme</label><br> 
                <input type="submit" value="Enviar"/>

            </fieldset>
        </form>
    </div>
    </body>

    
</html>