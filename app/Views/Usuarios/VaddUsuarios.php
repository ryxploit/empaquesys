<section class="section ">
    <div class="card " style="background-color:#435ebe;">
        <div class="card-body ">
            <div class="card-header text-center " style="background-color:#435ebe;">
                <p class="h2 text-warning">
                    <strong class="h3 text-white badge rounded-pill bg-warning ">Agregar usuario</strong>
                </p>
            </div>
            <form action="<?php echo base_url('Usuarios/Insertar'); ?>" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <h6 class="text-white">Rol</h6>
                            <fieldset class="form-group">
                                <select name="type" class="form-select">
                                    <option>LOTES</option>
                                    <option>RASTREO</option>
                                    <option>EMBARQUES</option>
                                    <option>PAKING LIST</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label class="text-white">Usuario</label>
                            <input type="text" onkeyup="mayus(this);" name="usuario" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Contraseña</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card text-dark bg-warning  ">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <p class="text-center"><strong>Roles</strong></p>
                                </h5>
                                <p class="text-center">Área de lotes: lotes</p>
                                <p class="text-center">Área de rastreo: pedidos, rastreo</p>
                                <p class="text-center">Embarques: embarques </p>
                                <p class="text-center">Packing list: embarque y packing list </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-lg">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>






<?=$this->include("Footers/foot")?>



<script type="text/javascript">
function mayus(e) {
    e.value = e.value.toUpperCase();
}
</script>