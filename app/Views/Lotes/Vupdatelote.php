<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Agregar Lote</h4>
            </div>
            <div class="card-body">
                <form class="" action="<?php echo base_url('Lotes/Actualizar'); ?> " method="post">
                    <?php foreach ($datos as $key): ?>
                        <div class="row">
                            <input type="hidden" name="id_lotes" value="<?php echo $key->id_lotes; ?>">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" name="fecha" value="<?php echo $key->fecha; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Corredor</label>
                                    <input type="text" onkeyup="mayus(this);" name="corredor" value="<?php echo $key->corredor; ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Numero de cajas</label>
                                    <input type="text" onkeyup="mayus(this);" name="numero_cajas" value="<?php echo $key->numero_cajas; ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Productor</label>
                                    <input type="text" onkeyup="mayus(this);" name="productor" value="<?php echo $key->productor; ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Registro</label>
                                    <input type="text" onkeyup="mayus(this);" name="registro" value="<?php echo $key->registro; ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>folio</label>
                                    <input type="text" onkeyup="mayus(this);" name="folio" value="<?php echo $key->folio; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nombre de huerta</label>
                                    <input type="text" onkeyup="mayus(this);" name="nombre_huerta" value="<?php echo $key->nombre_huerta; ?>"
                                           class="form-control">
                                </div>

                                <div class="form-group">
                                    <h6>Hidrotermico</h6>
                                    <fieldset class="form-group">
                                        <select name="hidrotermico" class="form-select" id="basicSelect">
                                            <option><?php echo $key->hidrotermico; ?></option>
                                            <option>SI</option>
                                            <option>NO</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Ubicacion</label>
                                    <input type="text" onkeyup="mayus(this);" name="ubicacion" value="<?php echo $key->ubicacion; ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Lote</label>
                                    <input type="text" onkeyup="mayus(this);" name="lote" value="<?php echo $key->lote; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Promedio</label>
                                    <input type="text" onkeyup="mayus(this);" name="promedio" value="<?php echo $key->promedio; ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Total</label>
                                    <input type="text" onkeyup="mayus(this);" name="total" value="<?php echo $key->total; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Muestra</label>
                                    <input type="text" onkeyup="mayus(this);" name="muestra" value="<?php echo $key->muestra; ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Numero de cuadrilla</label>
                                    <input type="text" onkeyup="mayus(this);" name="numero_cuadrilla" value="<?php echo $key->numero_cuadrilla; ?>"
                                           class="form-control">
                                </div>  
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary ">Guardar carmbios</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </section>
</div>

<?= $this->include("Footers/foot") ?>

<script type="text/javascript">
    function mayus(e) {
        e.value = e.value.toUpperCase();
    }
</script>

<script type="text/javascript">
    $("#printBtn").click(function () {
        // myExportPdf();
        $("#content").print({
            addGlobalStyles: true,
            stylesheet: "<?php echo base_url('assets/css/bootstrap.css'); ?>",
            rejectWindow: true,
            noPrintSelector: ".no-print",
            iframe: true,
            append: null,
            prepend: null
        });
    });
</script>
