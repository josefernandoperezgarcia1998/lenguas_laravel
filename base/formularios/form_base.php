<?php
          
        include 'conexion.php';
      
        $calif1 = $_POST["calif1"];
        $calif2 = $_POST["calif2"];
        $calif3 = $_POST["calif3"];
        
        $insertar = "INSERT INTO calificaciones(calif1, calif2, calif3) VALUES ('$calif1','$calif2','$calif3')";
        $resultado = mysqli_query($mysqli, $insertar);
       
        if (!$resultado){
            echo 'Error al ingresar datos';
        }
        else {
            echo 'datos agregados correctamente';
           
        }
      

        ?>
        <?php
    $host = "localhost";
 
   // Nombre de usuario del servidor MySQL
   $usuario = "root";
 
    // Contraseña del usuario
   $contrasena = "";
 
   // Nombre de la base de datos
   $baseDeDatos ="lenguas";
 
   // Nombre de la tabla a trabajar
    
    $tabla2 = "alumnos";
    $table1 = "calificaciones";
    function Conectarse()
   {
     global $host, $usuario, $contrasena, $baseDeDatos, $tabla1, $tabla2;
 
     if (!($link = mysqli_connect($host, $usuario, $contrasena))) 
     { 
        echo "Error conectando a la base de datos.<br>"; 
       exit(); 
            }
     else
      {
       //echo "Listo, estamos conectados.<br>";
      }
     if (!mysqli_select_db($link, $baseDeDatos)) 
      { 
        echo "Error seleccionando la base de datos.<br>"; 
        exit(); 
      }
     else
      {
       //echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
     }
   return $link; 
    } 
 
    $link = Conectarse();
 
   $query = "SELECT $tabla2.nombreAlumno FROM $tabla2 ";
 
    $result = mysqli_query($link, $query); 
 
   ?>
    <table BORDER="3PX" width="1000" align="center">
 <tr ALING=center>
    <th>Nombre</th>
    <th>Nivel 1</th>
    <th>Nivel 2</th>
    <th>Nivel 3</th>
  </tr>
    <?php

  


 while($row = mysqli_fetch_array($result))
 { 
     
  
    printf("<tr><th>%s", $row["nombreAlumno"]); 

  } 

  mysqli_free_result($result); 

  mysqli_close($link); 

  ?>
  </table>