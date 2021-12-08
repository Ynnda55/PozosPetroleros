<?php

require 'conexion.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
</head>
<body>

    <br>

    <table border="1" align="center">
        <tr>
            <td>nombre</td>
            <td>medicion</td>
            <td>fecha</td>
        </tr>

        <?php
            $sql = "SELECT * FROM datos"; 
            $result = mysqli_query($conectar,$sql);

            while($mostrar=mysqli_fetch_array($result)){
        ?>


        <tr>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['medicion'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>
        </tr>
        <?php
            }

            echo "<a href='../index.php'>Regresar</a>"; 
        ?>
    </table>


</body>
</html>