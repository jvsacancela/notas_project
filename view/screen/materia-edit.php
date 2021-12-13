<div>

<div class="modal fade" id="modal-paralelo-edit<?php echo $display['MAT_CODIGO']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar materia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../../code/php/materia_update.php" method="POST">
            <div class="form-row">


            <div class="col-md-12 mb-3">
            <input type="text" hidden  class="form-control " id="validationServer01" required name="materia-codigo" value="<?php echo $display['MAT_CODIGO'] ?>">
            
            <div class="col-md-12 mb-3">
                <label for="validationServer01">CODIGO CURSO</label>
                <input type="number"  class="form-control " id="input" required name="codigo-curso" value="<?php echo $display['MAT_CODCUR'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">NOMBRE DE MATERIA</label>
                <input type="text"  class="form-control " id="input" required name="materia-nombre" value="<?php echo $display['MAT_NOMBRE'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">CODIGO PERSONA</label>
                <input type="number"  class="form-control " id="input" required name="codigo-persona" value="<?php echo $display['MAT_CODPER'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">GRADO</label>
                <input type="number"  class="form-control " id="input" required name="grado" value="<?php echo $display['MAT_GRADO'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">TIPO</label>
                <input type="number"  class="form-control " id="input" required name="tipo" value="<?php echo $display['MAT_TIPO'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">ORDEN</label>
                <input type="number"  class="form-control " id="input" required name="orden" value="<?php echo $display['MAT_ORDEN'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">RESALT</label>
                <input type="number"  class="form-control " id="input" required name="resalt" value="<?php echo $display['MAT_RESALT'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">OBPRMA</label>
                <input type="number"  class="form-control " id="input" required name="obprma" value="<?php echo $display['MAT_OBPRMA'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">COCOMA</label>
                <input type="text"  class="form-control " id="input" required name="cocoma" value="<?php echo $display['MAT_COCOMA'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">NUMACO</label>
                <input type="number"  class="form-control " id="input" required name="numaco" value="<?php echo $display['MAT_NUMACO'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">OCULTA</label>
                <input type="number"  class="form-control " id="input" required name="oculta" value="<?php echo $display['MAT_OCULTA'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">AREID</label>
                <input type="number"  class="form-control " id="input" required name="areid" value="<?php echo $display['MAT_AREID'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">AREAC</label>
                <input type="text"  class="form-control " id="input" required name="areac" value="<?php echo $display['MAT_AREAC'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">AMBITO</label>
                <input type="number"  class="form-control " id="input" required name="ambito" value="<?php echo $display['MAT_AMBITO'] ?>">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>


                <div class="modal-footer">
                    <button class="btn col-md-12" id="btn" type="submit">Actualizar</button>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>


</div>