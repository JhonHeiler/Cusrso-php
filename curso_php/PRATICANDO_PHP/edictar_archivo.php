<?php
//RESPONDER URL
/* $nombre= $_GET['nombre'];
echo $nombre;
 */
$archivo ='texto.txt';

if(isset($_GET['archivo'])){
    $archivo = $_GET['archivo'];

    if ($_GET['accion']=='Guadar'){
        //modificar texto
        file_put_contents($archivo, $_GET['texto']);
    }
    
}





//lEER UN ARCHIVO TEXTO
$texto = file_get_contents($archivo);

?>
<h1>Edictar Archivo de texto </h1>

<form action="">
<label for="">Nombre del archivo</label>
<input type="text" name="archivo" value="<?=$archivo?>">
<br>
<textarea name="texto" id="" cols="20" rows="20">
<?=$texto?></textarea>
<br>
<input type="submit" value="Guadar" name="accion">
<input type="submit" value="Cargar" name="accion">
</form>


