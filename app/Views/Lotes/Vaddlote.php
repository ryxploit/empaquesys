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
                                <input type="text" name="corredor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Numero de cajas</label>
                                <input type="text" name="numero_cajas" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Productor</label>
                                <input type="text" name="productor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Registro</label>
                                <input type="text" name="registro" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>folio</label>
                                <input type="text" name="folio" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nombre de huerta</label>
                                <input type="text" name="nombre_huerta" class="form-control">
                            </div>

                            <div class="form-group">
                                <h6>Hidrotermico</h6>
                                <fieldset class="form-group">
                                    <select name="hidrotermico" class="form-select" id="basicSelect">
                                        <option value="">seleccionar...</option>
                                        <option value="si">si</option>
                                        <option value="no">no</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Ubicacion</label>
                                <input type="text" name="ubicacion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Lote</label>
                                <input type="text" name="lote" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Promedio</label>
                                <input type="text" name="promedio" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Total</label>
                                <input type="text" name="total" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Muestra</label>
                                <input type="text" name="muestra" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Numero de cuadrilla</label>
                                <input type="text" name="numero_cuadrilla" class="form-control">
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