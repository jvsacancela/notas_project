
<div class="modal fade" id="modal-paralelo-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar materia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../../code/php/materia_add.php" method="POST">
            <div class="form-row">

            <div class="col-md-12 mb-3">
                <label for="validationServer01">CODIGO CURSO</label>
                <input type="number"  class="form-control " id="input" required name="codigo-curso">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">NOMBRE DE MATERIA</label>
                <input type="text"  class="form-control " id="input" required name="materia-nombre">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">CODIGO PERSONA</label>
                <input type="number"  class="form-control " id="input" required name="codigo-persona">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">GRADO</label>
                <input type="number"  class="form-control " id="input" required name="grado">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">TIPO</label>
                <input type="number"  class="form-control " id="input" required name="tipo">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">ORDEN</label>
                <input type="number"  class="form-control " id="input" required name="orden">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">RESALT</label>
                <input type="number"  class="form-control " id="input" required name="resalt">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">OBPRMA</label>
                <input type="number"  class="form-control " id="input" required name="obprma">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">COCOMA</label>
                <input type="text"  class="form-control " id="input" required name="cocoma">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">NUMACO</label>
                <input type="number"  class="form-control " id="input" required name="numaco">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">OCULTA</label>
                <input type="number"  class="form-control " id="input" required name="oculta">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">AREID</label>
                <input type="number"  class="form-control " id="input" required name="areid">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">AREAC</label>
                <input type="text"  class="form-control " id="input" required name="areac">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label for="validationServer01">AMBITO</label>
                <input type="number"  class="form-control " id="input" required name="ambito">
                <div class="valid-feedback">
                  Excelente!
                </div>
            </div>
             
                <div class="modal-footer">
                    <button data-bs-toggle="modal" data-bs-target="#mostrar_fallo" class="btn col-md-12" id="btn" type="submit">Guardar</button>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>
