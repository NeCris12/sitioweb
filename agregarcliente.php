<?php
 
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $connection = mysqli_connect('localhost:3306', 'root', 'uleam2019', 'tiendacalzado');

    $query = "INSERT INTO clientes (idclientes, cli_cedula, cli_nombres, cli_telefono, cli_correo,cli_clave) values(null,'$cedula','$nombre','$celular','$correo','$clave')";
    $resultado = $connection->query($query);

    if($resultado){
        echo'<script>alert("cliente registrado");</script>';
    
    }else{
        echo('ERROR');
    }
    ?>