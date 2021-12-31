<?php
// ecribimo signo ?nombre=heiler si agregamos mas datos tenemos que colocar &
//configurando email

if (!isset($_GET["nombre"])){
    die("Necesita un nombre");
}

if (!isset($_GET["email"])){
    die("Necesita un email");
}



if (!isset($_GET["mensaje"])){
    die("Necesita un mensaje");
}



/* 
if(isset($_GET["nombre"])){
    echo $_GET["nombre"];
    echo $_GET["apellido"];
} */

$nombre = $_GET["nombre"];
$email = $_GET["email"];
$mensaje = $_GET["mensaje"];

    $to      = 'heylerty7@gmail.com';
    $subject = 'Consultar desde la web';
    $body = 'Nueva consulta desde la web'. "\r\n";
    $body .= 'Nombre'.$nombre . "\r\n";
    $body .= 'Email'.$email . "\r\n";
    $body .= 'Mensaje'.$mensaje . "\r\n";
    $headers = 'From: '   .$email    . "\r\n" .
                 'Reply-To: '.$email . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $body, $headers);

//http://localhost/curso_php/PRATICANDO_PHP/Metodos%20http/metodos_http.php?nombre=heiler&apellido=mosquera

?>