<div>

    <div class="modal fade" id="modal-paralelo-delete<?php echo $display['MAT_CODIGO'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar materia</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
            <span>¿Seguro de eliminar materia </span>
            <span class="text-uppercase"><?php echo $display['MAT_NOMBRE'] . "?"?></span>
        </div>

        <div class="modal-footer">
            <a class="desc" id="btn2" href="../../code/php/materia_delete.php?MAT_CODIGO=<?php echo $display['MAT_CODIGO']?>"><i class="icon ion-md-checkmark"></i>Si, eliminar materia</a>
        </div>

        </div>
    </div>
    </div>

</div>