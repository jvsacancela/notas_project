<?php 

    require_once '../sql/sql.php';
    require_once '../../config/conexion.php';

    $insertar = new sql();       


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

   $verificar_materia = $insertar -> ConsultarMateriaName($materia_nombre);

   
    //Verificar que el paralelo no se repita
    if(mysqli_num_rows($verificar_materia) > 0){
        ?>

        <div class="alert alert-primary" role="alert">
       NOO
      </div>
        <?php
      
    }else{
        $insertar_materia = $insertar->AddMateria($codigo_curso, $materia_nombre, $codigo_persona, $grado, $tipo, $orden, $resalt, $obprma, $cocoma, $numaco, $oculta, $areid, $areac, $ambito);
        ?>

        <div class="alert alert-primary" role="alert">
       SII
      </div>
        <?php
    }

    ?>
