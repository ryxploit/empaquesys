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
                                        <option>seleccionar...</option>
                                        <?php foreach ($listarpedidos as $key): ?>
                                        <option value="<?php echo $key->codigo_embarque;?>">
                                            <?php echo $key->codigo_embarque;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label class="text-white">Sello</label>
                                <input type="text" name="sello" class="form-control">
                            </div>
                            <div class="form-group">
                                <h6 class="text-white">Capuchon</h6>
                                <fieldset class="form-group">
                                    <select name="capuchon" class="form-select">
                                        <option>negro</option>
                                        <option>blanco</option>
                                        <option>rosas</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <h6 class="text-white">Fondo</h6>
                                <fieldset class="form-group">
                                    <select name="fondo" class="form-select">
                                        <option>negro</option>
                                        <option>blanco</option>
                                        <option>conbinado</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <h6 class="text-white">Malla</h6>
                                <fieldset class="form-group">
                                    <select name="malla" class="form-select">
                                        <option>si</option>
                                        <option>No</option>
                                        <option>base</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <h6 class="text-white">Termografo</h6>
                                <fieldset class="form-group">
                                    <select name="termografo" class="form-select">
                                        <option>si</option>
                                        <option>no</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label class="text-white">Destino</label>
                                <input type="text" name="destino" class="form-control">
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