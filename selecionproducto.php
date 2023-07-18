<?php
    $connection = mysqli_connect('localhost:3306', 'root', 'uleam2019', 'tiendacalzado');
    $producto = $_POST['idproducto'];
    $proovedor = $_POST['idproovedor'];
   

    //$query = "SELECT idproducto from producto where pro_nombre ='$producto'";
   //$query1 = "SELECT idproveedor from proveedor where pro_nombre ='$proovedor'";
   // $resultado = $connection->query($query);
   // $resultado1 = $connection->query($query1);


    $talla = $_POST['talla'];
    $precio = $_POST['precio'];
    $color = $_POST['color'];
    $fecom = $_POST['fecom'];
    $cantidad = $_POST['cantidad'];
    $obserbacion = $_POST['obserbacion'];
   // $idproducto = $resultado;
   // $idproovedor = $resultado1;
    
 
    $cunsulta = "INSERT INTO detalle_producto (iddetalle_producto, talla, precio, color, fechaCompra, cantidad, observacion, producto_idproducto, proveedor_idproveedor) values(null,'$talla','$precio','$color','$fecom','$cantidad','$obserbacion','$producto','$proovedor')";
    $respuesta = $connection->query($cunsulta);

    if($respuesta){
    echo'<script>alert("detalle agregado");</script>';

    header("location:detalleproducto.php");


    }else{
        echo('ERROR');
    }
    ?>