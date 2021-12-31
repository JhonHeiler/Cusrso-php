<?php


  $conexion=new mysqli("localhost","root","","sistema_php") //crea la conexion a la base de datos
  or die("not connected".mysqli_connect_error()); // si no se puede conetar manda un error da un mensaje


  //recibir los datos por get
  // http://localhost/sistema_php/api/consut_edit.php?nombre=hllleiler&apellido=mosquera&email=jdhffdxv@fhfhf&telefono=13345&detalles=soy%20peor
  if(isset($_GET['nombre'])){
  $id= $_GET['id'];
  $nombre = $_GET['nombre'];
  $apellido = $_GET['apellido'];
  $email =  $_GET['email'];
  $telefono = $_GET['telefono'];
  $detalles = $_GET['detalles'];
 
    $sql="UPDATE `clientes` SET `nombre` = ' $nombre', `apellido` = '$apellido', `email` = '$email', `telefono` = '$telefono', `detalles` = '$detalles' WHERE `clientes`.`id` = $id;";//hace la consulta a la base datos
    $query=mysqli_query($conexion, $sql); // ejecuta la consulta, pasa conexion y base de datos
    if($query){    //revisa si hay resultado 
      echo"1 row update";
    }else{
      echo mysqli_error($conexion);    
    }
  
  }

?>