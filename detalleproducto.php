
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>DETALLES PRODUCTO</title>
    </head>
    <body>
        <section class="form">
        <form action="selecionproducto.php" method="POST" enctype="multipart/form-data">
            <h1>DETALLES PRODUCTO</h1>
            <input class="controls" type="text" name="talla" id="talla" placeholder="Ingrese la talla del producto">
            <input class="controls" type="double" name="precio" id="precio" placeholder="Ingrese el precio del producto">
            <input class="controls" type="text" name="color" id="color" placeholder="Ingrese el color del producto">
            <input class="controls" type="date" name="Fecha de compra" id="fecom" placeholder="selleccione la fecha de compra del producto">
            <input class="controls" type="text" name="cantidad" id="cantidad" placeholder="Ingrese la cantidad del producto">
            <input class="controls" type="text" name="observacion" id="obserbacion" placeholder="Ingrese la obserbacion si es necesario">
            <input class="controls" type="text" name="seleccione el producto" id="idproducto" placeholder="Seleccione el producto">
            <input class="controls" type="text" name="seleccione el proveedor" id="idproovedor" placeholder="Seleccione el proveedor">
            <input class="botons" type="submit" value="REGISTRAR">
        </form>
        <form action="producto.php" method="post">
            <input type="submit" value="SALIR"> <br/>
      </form>
        </section>
    </body>
</html>