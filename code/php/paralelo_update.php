<?php 

    require_once '../sql/sql.php';
    require_once '../../config/conexion.php';

    $update = new sql();
 
    $paralelo_codigo = $_POST['paralelo-codigo'];
    $paralelo_nombre = $_POST['paralelo-nombre'];
    

    $update_paralelo = $update->UpdateParalelo($paralelo_codigo,  $paralelo_nombre);
      
    header ('Location: ../../view/pages/page-paralelo.php');

    ?>
