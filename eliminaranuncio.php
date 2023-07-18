<?php
	$connection = mysqli_connect('localhost:3306', 'root', 'uleam2019', 'tiendacalzado');

	$id = $_REQUEST['iddetalle_producto'];
	//echo $iddetalle_producto;

	$query = mysqli_query($connection, "DELETE FROM detalle_producto WHERE iddetalle_producto ='$id' ");
	$resultado = $connection->query($query);
	//echo $query;
	require_once("controlproducto.php")


?>