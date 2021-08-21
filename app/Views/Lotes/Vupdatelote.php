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
                        <input type="hidden" name="id_lotes" value="<?php echo $key->id_lotes;?>">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fecha</label>
                                <input type="date" name="fecha" value="<?php echo $key->fecha;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Corredor</label>
                                <input type="text" name="corredor" value="<?php echo $key->corredor;?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Numero de cajas</label>
                                <input type="text" name="numero_cajas" value="<?php echo $key->numero_cajas;?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Productor</label>
                                <input type="text" name="productor" value="<?php echo $key->productor;?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Registro</label>
                                <input type="text" name="registro" value="<?php echo $key->registro;?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>folio</label>
                                <input type="text" name="folio" value="<?php echo $key->folio;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nombre de huerta</label>
                                <input type="text" name="nombre_huerta" value="<?php echo $key->nombre_huerta;?>"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <h6>Hidrotermico</h6>
                                <fieldset class="form-group">
                                    <select name="hidrotermico" class="form-select" id="basicSelect">
                                        <option value="<?php echo $key->hidrotermico;?>">
                                            <?php echo $key->hidrotermico;?></option>
                                        <option value="si">si</option>
                                        <option value="no">no</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Ubicacion</label>
                                <input type="text" name="ubicacion" value="<?php echo $key->ubicacion;?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lote</label>
                                <input type="text" name="lote" value="<?php echo $key->lote;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Promedio</label>
                                <input type="text" name="promedio" value="<?php echo $key->promedio;?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Total</label>
                                <input type="text" name="total" value="<?php echo $key->total;?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Muestra</label>
                                <input type="text" name="muestra" value="<?php echo $key->muestra;?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Numero de cuadrilla</label>
                                <input type="text" name="numero_cuadrilla" value="<?php echo $key->numero_cuadrilla;?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Guardar carmbios</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </section>
</div>