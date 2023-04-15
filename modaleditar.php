<div class="modal" id="#staticBackdrop<?php echo $filas['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Actualizar Datos</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="editar.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $filas['id']; ?>">

                <div class="modal-body" id="cont_modal">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Pieza</label>
                        <input type="text" name="pieza" class="form-control" value="<?php echo $filas['pieza']; ?>"
                            required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">colada</label>
                        <input type="text" name="colada" class="form-control" value="<?php echo $filas['colada']; ?>"
                            required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Pieza</label>
                        <input type="text" name="pieza" class="form-control" value="<?php echo $filas['pieza']; ?>"
                            required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Dueno</label>
                        <input type="text" name="dueno" class="form-control" value="<?php echo $filas['dueno']; ?>"
                            required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Almas</label>
                        <input type="text" name="almas" class="form-control" value="<?php echo $filas['almas']; ?>"
                            required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">moldeo</label>
                        <input type="text" name="moldeo" class="form-control" value="<?php echo $filas['moldeo']; ?>"
                            required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">fusion</label>
                        <input type="text" name="fusion" class="form-control" value="<?php echo $filas['fusion']; ?>"
                            required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Floggy</label>
                        <input type="text" name="floggy" class="form-control" value="<?php echo $filas['floggy']; ?>"
                            required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">TT</label>
                        <input type="text" name="tratamientos" class="form-control"
                            value="<?php echo $filas['tratamientos']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">inspeccion</label>
                        <input type="text" name="inspeccion" class="form-control"
                            value="<?php echo $filas['inspeccion']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">finishing</label>
                        <input type="text" name="finishing" class="form-control"
                            value="<?php echo $filas['finishing']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">cmm</label>
                        <input type="text" name="cmm" class="form-control" value="<?php echo $filas['cmm']; ?>"
                            required="true">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>