<?php
class Auto {

public $marca;
public $precio;
public $modelo;

function __construct($marca, $precio, $modelo){
    $this->marca = $marca;
    $this->precio = $precio;
    $this->modelo = $modelo;
    
}

function __get($propiedad)
{
    return $this->$propiedad;
}


?>