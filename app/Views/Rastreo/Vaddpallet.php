<section class="section ">
    <div class="card Text-white" style="background-color:#2AE28D;">
        <div class="card-body">
            <div class="card-header text-center " style="background-color:#2AE28D;">
                <p class="h2 text-primary"> <strong
                        class="h3 text-white badge rounded-pill bg-primary ">Pedido:</strong>
                    <?php echo $dato[0]['codigo'];  ?></p>
            </div>
            <form class="addpallet" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-white">Fecha</label>
                            <input type="date" name="fecha" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Variedad</label>
                            <input type="text" name="variedad" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Marca</label>
                            <input type="text" name="marca" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-white">Pallet</label>
                            <input type="text" name="pallet" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Tamaño</label>
                            <input type="text" name="tamaño" class="form-control">
                        </div>
                        <div class="form-group">
                            <h6 class="text-white">Hidrotermico</h6>
                            <fieldset class="form-group">
                                <select name="hidrotermico" class="form-select">
                                    <option>si</option>
                                    <option>no</option>
                                </select>
                            </fieldset>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-white">Total</label>
                            <input type="text" name="total" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Folio</label>
                            <input type="text" name="folio" class="form-control">
                        </div>
                        <div class="form-group">
                            <h6 class="text-white">Rastreo</h6>
                            <fieldset class="form-group">
                                <select name="rastreo" class="form-select">
                                    <?php foreach ($listarlotes as $key): ?>
                                    <option><?php echo $key->lote;?></option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </div>
                        <input type="hidden" name="codigo_rastreo" value="<?php echo $dato[0]['codigo'];?>">

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-lg">Agregar Pallet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>



<section class="section">
    <div class="card text-white" style="background-color:#2AE28D;">
        <div class="card-header" style="background-color:#2AE28D;">
            <h3 class="text-white">Lista de Pallets en Hojas de rastreo</h3>
        </div>
        <div class="card-body text-white">
            <div class="table-responsive">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Variedad</th>
                            <th>Marca</th>
                            <th>Pallet</th>
                            <th>Tamaño</th>
                            <th>Hidrotermico</th>
                            <th>Total</th>
                            <th>Folio</th>
                            <th>Rastreo</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarpallet as $key): ?>
                        <tr>
                            <td><?php echo $key->fecha;?></td>
                            <td><?php echo $key->variedad;?></td>
                            <td><?php echo $key->marca;?></td>
                            <td><?php echo $key->pallet;?></td>
                            <td><?php echo $key->tamaño;?></td>
                            <td><?php echo $key->hidrotermico;?></td>
                            <td><?php echo $key->total;?></td>
                            <td><?php echo $key->folio;?></td>
                            <td><?php echo $key->rastreo;?></td>
                            <td>
                                <a type="button" class="btn btn-primary update" id="<?php echo $key->id_pallet; ?>"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Actualizar</a>
                                <a class="btn btn-danger delete" href="#" id="<?php echo $key->id_pallet; ?>"
                                    role="button">Borrar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<div class="modal" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modificar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="upadte_pallet">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Fecha:</label>
                                <input type="date" name="fecha" class="form-control" id="fecha">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Variedad:</label>
                                <input type="text" name="variedad" class="form-control" id="variedad">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Marca:</label>
                                <input type="text" name="marca" class="form-control" id="marca">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Pallet:</label>
                                <input type="text" name="pallet" class="form-control" id="pallet">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tamaño:</label>
                                <input type="text" name="tamaño" class="form-control" id="tamaño">
                            </div>
                            <div class="form-group">
                                <h6 class="">Hidrotermico</h6>
                                <fieldset class="form-group">
                                    <select name="hidrotermico" class="form-select">
                                        <option id="hidrotermico"></option>
                                        <option>si</option>
                                        <option>no</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Total:</label>
                                <input type="text" name="total" class="form-control" id="total">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Folio:</label>
                                <input type="text" name="folio" class="form-control" id="folio">
                            </div>
                        </div>
                        <div class="form-group">
                            <h6 class="">Rastreo</h6>
                            <fieldset class="form-group">
                                <select name="rastreo" class="form-select">
                                    <option id="rastreo"></option>
                                    <?php foreach ($listarlotes as $key): ?>
                                    <option><?php echo $key->lote;?></option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </div>
                        <input type="hidden" name="id_pallet" id="id_pallet">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar carmbios</button>
            </div>
            </form>
        </div>
    </div>
</div>