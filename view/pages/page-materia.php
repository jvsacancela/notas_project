<?php 

require_once "../../config/conexion.php";
require_once "../../code/sql/sql.php";

$consulta = new sql();

$consulta_materia = $consulta->ConsultarMateria();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materia</title>
    <link rel="stylesheet" href="../style/general.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
  <div class="container">

  <div class="row my-5 col-md-12 m-auto shadow p-3 mb-5 bg-white rounded">
          <h2 id="titu">Materias</h2>

        <div>
            <hr>
            <a class="col-sm-2" id="btnAdd" data-bs-toggle="modal" data-bs-target="#modal-paralelo-add"><i class="icon ion-md-person"></i>NUEVO MATERIA</a>
           <?php include('../screen/materia-add.php')?>
          </div> 


  <div  class="table-responsive" id="tabla">
        <table class="table table-sm">
            <thead>
                <th>SELECCIÓN</th>
                <th>CODIGO</th>
                <th>CODIGO CURSO</th>
                <th>NOMBRE</th>
                <th>CODIGO PERSONA</th>
                <th>GRADO</th>
                <th>TIPO</th>
                <th>ORDEN</th>
                <th>MAT RESALT</th>
                <th>OBPRMA</th>
                <th>COCOMA</th>
                <th>NUMACO</th>
                <th>OCULTA</th>
                <th>AREID</th>
                <th>AREAC</th>
                <th>AMBITO</th>
                <th>FUNCION</th>

            </thead>
           
            <tbody>
            <?php while($display = $consulta_materia->fetch_assoc()){ ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $display['MAT_CODIGO']; ?></td>
                    <td><?php echo $display['MAT_CODCUR']; ?></td>
                    <td><?php echo $display['MAT_NOMBRE']; ?></td>
                    <td><?php echo $display['MAT_CODPER']; ?></td>
                    <td><?php echo $display['MAT_GRADO']; ?></td>
                    <td><?php echo $display['MAT_TIPO']; ?></td>
                    <td><?php echo $display['MAT_ORDEN']; ?></td>
                    <td><?php echo $display['MAT_RESALT']; ?></td>
                    <td><?php echo $display['MAT_OBPRMA']; ?></td>
                    <td><?php echo $display['MAT_COCOMA']; ?></td>
                    <td><?php echo $display['MAT_NUMACO']; ?></td>
                    <td><?php echo $display['MAT_OCULTA']; ?></td>
                    <td><?php echo $display['MAT_AREID']; ?></td>
                    <td><?php echo $display['MAT_AREAC']; ?></td>
                    <td><?php echo $display['MAT_AMBITO']; ?></td>
                    <td>
                    <a data-bs-toggle="modal" data-bs-target="#modal-paralelo-edit<?php echo $display['MAT_CODIGO']?>" id="btnEdit">EDIT</a>
                  
                  <a data-bs-toggle="modal" data-bs-target="#modal-paralelo-delete<?php echo $display['MAT_CODIGO']?>"  id="btnDelete" >DELETE</a>
                    </td>
                </tr>
                <?php  
                  
                    include('../screen/materia-delete.php');
                    include('../screen/materia-edit.php');
                   
             } ?>
            </tbody>
        </table>
    </div>
  </div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>