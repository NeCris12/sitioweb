
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>REGISTRAR CLIENTE</title>
    </head>
    <body>
        <section class="form">
        <form action="agregarcliente.php" method="POST" enctype="multipart/form-data">
            <h1>REGISTRO DE CLIENTES</h1>
            <input class="controls" type="text" name="cedula" id="cedula" placeholder="Ingrese el número de cédula">
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del cliente">
            <input class="controls" type="text" name="celular" id="celular" placeholder="Ingrese el número de celular">
            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese el correo">
            <input class="controls" type="password" name="clave" id="clave" placeholder="Ingrese la clave" >
            <input class="botons" type="submit" value="REGISTRAR">
        </form>
        </section>
    </body>
</html>