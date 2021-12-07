
<div class="modal fade" id="modal-paralelo-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar paralelo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../../code/php/paralelo_add.php" method="POST">
            <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationServer01">Paralelo</label>
                <input type="text"  class="form-control " id="input" required name="paralelo-nombre">
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
