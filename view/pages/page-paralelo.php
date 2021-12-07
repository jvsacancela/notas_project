<?php 

require_once "../../config/conexion.php";
require_once "../../code/sql/sql.php";

$consulta = new sql();

$consulta_paralelo = $consulta->ConsultarParalelo();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paralelo</title>
    <link rel="stylesheet" href="../style/general.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
  <div class="container">

  <div class="row my-5 col-md-12 m-auto shadow p-3 mb-5 bg-white rounded">
          <h2 id="titu">Paralelos</h2>

        <div>
            <hr>
            <a class="col-sm-2" id="btnAdd" data-bs-toggle="modal" data-bs-target="#modal-paralelo-add"><i class="icon ion-md-person"></i>NUEVO PARALELO</a>
            <?php include('../screen/paralelo-add.php')?>
          </div> 


  <div  class="table-responsive" id="tabla">
        <table class="table table-sm">
            <thead>
                <th>SELECCIÓN</th>
                <th>PARALELO</th>
                <th>FUNCIÓN</th>
            </thead>
           
            <tbody>
            <?php while($display = $consulta_paralelo->fetch_assoc()){ ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $display['PAR_NOMBRE']; ?></td>
                    <td>
                    <a data-bs-toggle="modal" data-bs-target="#modal-paralelo-edit<?php echo $display['PAR_CODIGO']?>" id="btnEdit">EDIT</a>
                  
                  <a data-bs-toggle="modal" data-bs-target="#modal-paralelo-delete<?php echo $display['PAR_CODIGO']?>"  id="btnDelete" >DELETE</a>
                    </td>
                </tr>
                <?php  
                  
                    include('../screen/paralelo-delete.php');
                    include('../screen/paralelo-edit.php');
                   
             } ?>
            </tbody>
        </table>
    </div>
  </div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>