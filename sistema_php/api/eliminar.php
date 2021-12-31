<?php


  $conexion=new mysqli("localhost","root","","sistema_php") //crea la conexion a la base de datos
  or die("not connected".mysqli_connect_error()); // si no se puede conetar manda un error da un mensaje


  //recibir los datos por get
  // http://localhost/sistema_php/api/eliminar.php?id=3
      $id = $_GET['id'];
  
 
    $sql="DELETE FROM `clientes` WHERE `clientes`.`id` = $id";//hace la consulta a la base datos
    $query=mysqli_query($conexion, $sql); // ejecuta la consulta, pasa conexion y base de datos
    if($query){    //revisa si hay resultado 
      echo"1 row delete";
    }else{
      echo mysqli_error($conexion);    
    }
  
  

?>