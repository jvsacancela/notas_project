<?php 

    require_once '../sql/sql.php';
    require_once '../../config/conexion.php';

    $insertar = new sql();       


   $paralelo_nombre = $_POST['paralelo-nombre'];
    
    $insertar_paralelo = $insertar->AddParalelo($paralelo_nombre);

    header ('Location: ../../view/pages/page-paralelo.php');

    ?>
