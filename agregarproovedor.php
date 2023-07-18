<?php
 
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $connection = mysqli_connect('localhost:3306', 'root', 'uleam2019', 'tiendacalzado');

    $query = "INSERT INTO proveedor (idproveedor, prov_nombres, prov_celular, prov_correo) values(null,'$nombre','$celular','$correo')";
    $resultado = $connection->query($query);

    if($resultado){
        echo'<script>alert("proveedor registrado");</script>';
     //   header("location:detalleproducto.php");
    }else{
        echo('ERROR');
    }
    ?>
    