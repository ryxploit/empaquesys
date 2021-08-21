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
                                <label for="helpInputTop">Codigo de embarque</label>
                                <input type="text" name="codigo_embarque" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="helpInputTop">Sello del cliente</label>
                                <input type="text" name="sello_cliente" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="helpInputTop">Aeropuerto destino</label>
                                <input type="text" name="aeropuerto_destino" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="helpInputTop">Ejecutivo</label>
                                <input type="text" name="ejecutivo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="helpInputTop">Variedad</label>
                                <input type="text" name="variedad" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="helpInputTop">Marca</label>
                                <input type="text" name="marca" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="helpInputTop">Etiqueta</label>
                                <input type="text" name="etiqueta" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="helpInputTop">Tipo de caja</label>
                                <input type="text" name="tipo_caja" class="form-control">
                            </div>
                            <div class="form-group">
                                <h6>Capuchon</h6>
                                <fieldset class="form-group">
                                    <select name="capuchon" class="form-select" id="basicSelect">
                                        <option value="">seleccionar...</option>
                                        <option value="negro">negro</option>
                                        <option value="blanco">blanco</option>
                                        <option value="rosa">rosa</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <h6>Fondo</h6>
                                <fieldset class="form-group">
                                    <select name="fondo" class="form-select" id="basicSelect">
                                        <option value="">seleccionar...</option>
                                        <option value="negro">negro</option>
                                        <option value="blanco">blanco</option>
                                        <option value="convinado">convinado</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <h6>Termografo</h6>
                                <fieldset class="form-group">
                                    <select name="termografo" class="form-select" id="basicSelect">
                                        <option value="">seleccionar...</option>
                                        <option value="si">si</option>
                                        <option value="no">no</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label for="helpInputTop">Funda</label>
                                <input type="text" name="funda" class="form-control" id="helpInputTop">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section </div>