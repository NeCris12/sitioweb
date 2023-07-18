<?php
 
    $usuario = $_POST['cedula'];
    $clave = $_POST['clave'];
    $connection = mysqli_connect('localhost:3306', 'root', 'uleam2019', 'tiendacalzado');

    $consulta = "SELECT * FROM `clientes` WHERE cli_cedula ='$usuario' AND cli_clave='$clave';";

    $resultado=mysqli_query($connection,$consulta);
    $filas= mysqli_num_rows($resultado);
   

    if($filas>0){

        header("location:index.php");
  
        }
    
        else {
            $consulta1 = "SELECT * FROM `admin` WHERE cedula ='$usuario' AND clave='$clave';";

            $resultado1=mysqli_query($connection,$consulta1);
            $filas1= mysqli_num_rows($resultado1);
            if($filas1>0){

                header("location:paginapricipal.php");
          
                }else{
                    
                    echo'<script>alert("Los datos ingresados son incorectos");</script>';
                    header("location:iniciosesion.php.php");
                
            }
            }

    
        mysqli_close($connection);
        
    ?>