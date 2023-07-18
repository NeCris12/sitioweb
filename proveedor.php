<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>REGISTRAR PROVEEDOR</title>
    </head>
    <body>
        <section class="form">
        <form action="agregarproducto.php" method="POST" enctype="multipart/form-data">
            <h1>REGISTRO DE PROVEEDOR</h1>
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del proveedor">
            <input class="controls" type="text" name="celular" id="celular" placeholder="Ingrese el celular del proveedor">
            <input class="controls" type="email" name="correo" id="correo"  placeholder="Ingrese su correo electronico">
            <input class="botons" type="submit" value="REGISTRAR">
        </form>
        <form action="paginapricipal.php" method="post">
            <input type="submit" value="SALIR"> <br/>
        </form>
        </section>
    </body>
</html>