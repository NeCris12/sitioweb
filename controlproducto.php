<!DOCTYPE html>
<html>


<div class="todo">
    
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
    <br/><br/><center><h2>LISTA DE PRODUCTOS</h2></center><br/><br/>	
    <thead>
  		<th>Id</th>
  		<th>talla</th>
  		<th>Precio</th>
        <th>Color</th>
        <th>Fecha compra</th>	
        <th>Cantidad</th>	
  		</thead>
  		
  		<?php

      $connection = mysqli_connect('localhost:3306', 'root', 'uleam2019', 'tiendacalzado');
      $sentencia=mysqli_query($connection, 'SELECT * FROM detalle_producto order by iddetalle_producto desc');
      
      
      while($filas=mysqli_fetch_array($sentencia))
      {
        echo '<tr>';
          echo '<td>';
          echo $filas['iddetalle_producto']; 
          echo '</td>';

          echo '<td>'; 
          echo $filas['talla']; 
          echo '</td>';

          echo '<td>'; 
          echo $filas['precio']; 
          echo '</td>';

          echo '<td>'; 
          echo $filas['color']; 
          echo '</td>';

          echo '<td>'; 
          echo $filas['fechaCompra']; 
          echo '</td>';

          echo '<td>'; 
          echo $filas['cantidad']; 
          echo '</td>';

          echo "<td>  <a href='eliminaranuncio.php?id=".$filas['iddetalle_producto']."'>
          <button type='button' class='btn btn-success'> Eliminar </button> </a> </td>";
          echo '</tr>';
      }

      ?>
  	</table>
    <br/><br/>
    <center><form action="paginapricipal.php" method="post">
<input type="submit" value="Salir"> <br/><br/>
</form></center>


</body>
</html>

