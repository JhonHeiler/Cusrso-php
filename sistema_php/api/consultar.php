<?php


$conexion=new mysqli("localhost","root","","sistema_php") //crea la conexion a la base de datos
  or die("not connected".mysqli_connect_error()); // si no se puede conetar manda un error da un mensaje


//recibir los datos por get
// http://localhost/sistema_php/api/consultar.php
 
$sql="SELECT * FROM `clientes`;";//hace la consulta a la base datos
$result=mysqli_query($conexion, $sql); // ejecuta la consulta, pasa conexion y base de datos

$clientes = array();  //Arreglo
while ($row = mysqli_fetch_array($result)){    //va recorriendo cada una de las filas
  array_push($clientes, $row);
 /*  echo $row['nombre'] ." ".  $row['apellido'];
  echo "<br /"; */
}
echo json_encode($clientes); //formato json
mysqli_free_result($result);
mysqli_close($conexion);
?>