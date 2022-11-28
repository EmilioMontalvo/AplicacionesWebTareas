<?php

    //Nombre: Emilio Montalvo
    //Curso: GR2

    $preferencias=false;
    $nombre="";
    $clave="";

    



?>

<html>
    <head>
    </head>
    <body>
    <div id="container">
        <form method="POST" action="mipanel.php">
            <fieldset>
                <h1>LOGIN</h1>
                Usuario:<br> <input type="text" name="nombre" value="<?php echo $nombre;?>"/><br><br/>
                Clave:<br> <input type="password" name="clave" value="<?php echo $clave;?>"/><br>
                <input type="checkbox" name="chkpreferencias" <?php echo ($preferencias)?"checked":"";?>>
                <label class="check" for="checkbox">Recordarme</label><br> 
                <input type="submit" value="Enviar"/>

            </fieldset>
        </form>
    </div>
    </body>

    
</html>