<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Agregar Pedido</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('Pedidos/Insertar'); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Codigo de embarque</label>
                                <input type="text" onkeyup="mayus(this);" name="codigo_embarque" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Sello del cliente</label>
                                <input type="text" onkeyup="mayus(this);" name="sello_cliente" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Aeropuerto destino</label>
                                <input type="text" onkeyup="mayus(this);" name="aeropuerto_destino" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ejecutivo</label>
                                <input type="text" onkeyup="mayus(this);" name="ejecutivo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Variedad</label>
                                <input type="text" onkeyup="mayus(this);" name="variedad" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Marca</label>
                                <input type="text" onkeyup="mayus(this);" name="marca" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Etiqueta</label>
                                <input type="text" onkeyup="mayus(this);" name="etiqueta" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tipo de caja</label>
                                <input type="text" onkeyup="mayus(this);" name="tipo_caja" class="form-control">
                            </div>
                            <div class="form-group">
                                <h6>Capuchon</h6>
                                <fieldset class="form-group">
                                    <select name="capuchon" class="form-select" id="basicSelect">
                                        <option>SELECCIONAR...</option>
                                        <option>NEGRO</option>
                                        <option>BLANCO</option>
                                        <option>ROSA</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <h6>Fondo</h6>
                                <fieldset class="form-group">
                                    <select name="fondo" class="form-select" id="basicSelect">
                                        <option>SELECCIONAR...</option>
                                        <option>NEGRO</option>
                                        <option>BLANCO</option>
                                        <option>CONBINADO</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <h6>Termografo</h6>
                                <fieldset class="form-group">
                                    <select name="termografo" class="form-select" id="basicSelect">
                                        <option>SELECCIONAR...</option>
                                        <option>SI</option>
                                        <option>NO</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label>Malla</label>
                                <input type="text" onkeyup="mayus(this);" name="malla" class="form-control" id="helpInputTop">
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
