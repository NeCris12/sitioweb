<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>LOGIN</title>
    </head>
    <body>
        <section class="form">
        <form action="validadlogin.php" method="POST" enctype="multipart/form-data">
            <h1>LOGIN</h1>
            <input class="controls" type="text" name="cedula" id="cedula" placeholder="Ingrese la cedula">
            <input class="controls" type="password" name="clave" id="clave" placeholder="Ingrese su clave">
            <input class="botons" type="submit" value="INGRESAR">
            <input class="botons" type="submit" value="REGISTRARSE" href="cliente.php">
        </form>
       
        </section>
    </body>
</html>