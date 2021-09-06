<div class="page-content">
    <section class="section ">
        <div class="card  text-white  " style="background-color:#2AE28D;">
            <div class="card-body">
                <form class="" action="<?php echo base_url('Rastreo/Insertarhrastreo'); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-white">Fecha</label>
                                <input type="date" name="fecha" class="form-control">
                            </div>
                            <div class="form-group">
                                <h6 class="text-white">Codigo</h6>
                                <fieldset class="form-group">
                                    <select name="codigo" class="form-select">
                                        <option>SELECCIONAR...</option>
                                        <?php foreach ($listarpedidos as $key): ?>
                                        <option value="<?php echo $key->codigo_embarque;?>">
                                            <?php echo $key->codigo_embarque;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label class="text-white">Sello</label>
                                <input type="text" onkeyup="mayus(this);" name="sello" class="form-control">
                            </div>
                            <div class="form-group">
                                <h6 class="text-white">Capuchon</h6>
                                <fieldset class="form-group">
                                    <select name="capuchon" class="form-select">
                                        <option>NEGRO</option>
                                        <option>BLANCO</option>
                                        <option>ROSA</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <h6 class="text-white">Fondo</h6>
                                <fieldset class="form-group">
                                    <select name="fondo" class="form-select">
                                        <option>NEGRO</option>
                                        <option>BLANCO</option>
                                        <option>CONBINADO</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h6 class="text-white">Malla</h6>
                                <fieldset class="form-group">
                                    <select name="malla" class="form-select">
                                        <option>SI</option>
                                        <option>NO</option>
                                        <option>BASE</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <h6 class="text-white">Termografo</h6>
                                <fieldset class="form-group">
                                    <select name="termografo" class="form-select">
                                        <option>SI</option>
                                        <option>NO</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label class="text-white">Destino</label>
                                <input type="text" onkeyup="mayus(this);" name="destino" class="form-control">
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
