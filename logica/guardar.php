<?php  
require 'conexion.php'; 

$nombre = $_POST['nombre'];
$medicion = $_POST['medicion']; 
$fecha = $_POST['fecha'];

$insertar = "INSERT INTO datos VALUES ('$nombre','$medicion','$fecha')";

$query = mysqli_query($conectar, $insertar); 

if($query){
    echo "<script> alert('Datos Guardados'); 
    location.href ='../index.php'; 
    </script>"; 
} else{
    echo "<script> alert('No se pudieron Guardar los datos'); 
    location.href ='../index.php'; 
    </script>";
}

?>