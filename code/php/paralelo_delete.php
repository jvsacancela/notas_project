<?php 

    require_once '../sql/sql.php';
    require_once '../../config/conexion.php';

    $delete = new sql();

    $id = $_GET['PAR_CODIGO'];
    
    $delete_paralelo = $delete-> DeleteParalelo($id);

    header ('Location: ../../view/pages/page-paralelo.php');

    ?>
