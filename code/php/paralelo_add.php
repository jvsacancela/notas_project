<?php 

    /*
    require_once '../sql/sql.php';
    require_once '../../config/conexion.php';

    $insertar = new sql();       


   $paralelo_nombre = $_POST['paralelo-nombre'];
    
    $insertar_paralelo = $insertar->AddParalelo($paralelo_nombre);

    header ('Location: ../../view/pages/page-paralelo.php');

    */

    require_once '../sql/sql.php';
    require_once '../../config/conexion.php';

    $insertar = new sql();       


   $paralelo_nombre = $_POST['paralelo-nombre'];

   $verificar_paralelo = $insertar -> ConsultarParaleloName($paralelo_nombre);

   
    //Verificar que el paralelo no se repita
    if(mysqli_num_rows($verificar_paralelo) > 0){
        ?>

        <div class="alert alert-primary" role="alert">
       NOO
      </div>
        <?php
      
    }else{
        $insertar_paralelo = $insertar->AddParalelo($paralelo_nombre);
        ?>

        <div class="alert alert-primary" role="alert">
       SII
      </div>
        <?php
    }

    ?>
