<?php 

    require_once '../sql/sql.php';
    require_once '../../config/conexion.php';

    $update = new sql();       


    $codigo_materia = $_POST['materia-codigo'];
    $codigo_curso = $_POST['codigo-curso'];
    $materia_nombre = $_POST['materia-nombre'];
    $codigo_persona = $_POST['codigo-persona'];
    $grado = $_POST['grado'];
    $tipo = $_POST['tipo'];
    $orden = $_POST['orden'];
    $resalt = $_POST['resalt'];
    $obprma = $_POST['obprma'];
    $cocoma = $_POST['cocoma'];
    $numaco = $_POST['numaco'];
    $oculta = $_POST['oculta'];
    $areid = $_POST['areid'];
    $areac = $_POST['areac'];
    $ambito = $_POST['ambito'];

    
   $update_materia = $update->UpdateMateria($codigo_materia, $codigo_curso, $materia_nombre, $codigo_persona, $grado, $tipo, $orden, $resalt, $obprma, $cocoma, $numaco, $oculta, $areid, $areac, $ambito);

   header ('Location: ../../view/pages/page-materia.php');

?>
