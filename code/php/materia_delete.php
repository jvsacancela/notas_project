<?php 

    require_once '../sql/sql.php';
    require_once '../../config/conexion.php';

    $delete = new sql();

    $id = $_GET['MAT_CODIGO'];
    
    $delete_materia = $delete-> DeleteMateria($id);

    header ('Location: ../../view/pages/page-materia.php');

    ?>
