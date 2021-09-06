<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Agregar Lote</h4>
            </div>
            <div class="card-body">
                <form class="" action="<?php echo base_url('Lotes/Insertar'); ?> " method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fecha</label>
                                <input type="date" name="fecha" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Corredor</label>
                                <input type="text" onkeyup="mayus(this);" name="corredor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Numero de cajas</label>
                                <input type="text" onkeyup="mayus(this);" name="numero_cajas" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Productor</label>
                                <input type="text" onkeyup="mayus(this);" name="productor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Registro</label>
                                <input type="text" onkeyup="mayus(this);" name="registro" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>folio</label>
                                <input type="text" onkeyup="mayus(this);" name="folio" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nombre de huerta</label>
                                <input type="text" onkeyup="mayus(this);" name="nombre_huerta" class="form-control">
                            </div>

                            <div class="form-group">
                                <h6>Hidrotermico</h6>
                                <fieldset class="form-group">
                                    <select name="hidrotermico" class="form-select" id="basicSelect">
                                        <option>SELECCIONAR...</option>
                                        <option>SI</option>
                                        <option>NO</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Ubicacion</label>
                                <input type="text" onkeyup="mayus(this);" name="ubicacion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lote</label>
                                <input type="text" onkeyup="mayus(this);" name="lote" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Promedio</label>
                                <input type="text" onkeyup="mayus(this);" name="promedio" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Total</label>
                                <input type="text" onkeyup="mayus(this);" name="total" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Muestra</label>
                                <input type="text" onkeyup="mayus(this);" name="muestra" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Numero de cuadrilla</label>
                                <input type="text" onkeyup="mayus(this);" name="numero_cuadrilla" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?=$this->include("Footers/foot")?>

<script type="text/javascript">
function mayus(e) {
  e.value = e.value.toUpperCase();
}
</script>
