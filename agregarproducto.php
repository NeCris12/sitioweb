<?php
$connection =  mysqli_connect('localhost:3306', 'root', 'uleam2019', 'tiendacalzado');
$nombre=$_POST["nombre"];
$categoria=$_POST["categoria"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);
$query = "INSERT INTO producto (idproducto, pro_nombre, pro_categoria, pro_imagen) values(null,'$nombre','$categoria','$destino')";

//echo $query;
$resultado = $connection->query($query);

if($resultado){
    echo'<script>alert("Producto guardado");</script>';
    header("location:detalleproducto.php");
}else{
    echo('ERROR');
}
?>