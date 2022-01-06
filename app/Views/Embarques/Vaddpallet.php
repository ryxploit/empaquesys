<section class="section ">
    <div class="card " style="background-color:#435ebe;">
        <div class="card-body ">
            <div class="card-header text-center " style="background-color:#435ebe;">
                <p class="h2 text-warning">
                    <strong class="h3 text-white badge rounded-pill bg-warning ">Embarque:</strong>
                    <?php echo $datos[0]['numero_envio']; ?>
                </p>
            </div>
            <form class="addpallet" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <h6 class="text-white">Pedido</h6>
                            <fieldset class="form-group">
                                <select name="pedido" class="form-select">
                                    <?php foreach ($listarpedidos as $key): ?>
                                        <option><?php echo $key->codigo_embarque; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <label class="text-white">Numero Pallet</label>
                            <input type="text" onkeyup="mayus(this);" name="numero_pallet" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Peso pallet</label>
                            <input type="text" onkeyup="mayus(this);" name="peso_pallet" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-white">Marca caja</label>
                            <input type="text" onkeyup="mayus(this);" name="marca_caja" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Cantidad</label>
                            <input type="text" onkeyup="mayus(this);" name="cantidad" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Calibre</label>
                            <input type="text" onkeyup="mayus(this);" name="calibre" class="form-control">
                        </div>
                        <div class="form-group">
                            <h6 class="text-white">Hidrotermico</h6>
                            <fieldset class="form-group">
                                <select name="hidrotermico" class="form-select">
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-dark bg-warning  ">
                            <div class="card-body">
                                <h5 class="card-title">Numero de Pallet <p class="text-center"><strong>Pedido</strong></p>
                                </h5>
                                <p class="text-start">Peso Pallet.</p>
                                <p class="text-center">Calibre - Cantidad.</p>
                                <p class="text-end">Marca de Caja.</p>
                                <p class="text-start">Hidrotermico.</p>
                                <p class="text-end">Termografo.</p>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="embarque_id" value="<?php echo $datos[0]['id_embarques']; ?>">
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-lg">Agregar Pallet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="section">
    <div class="card ">
        <div class="card-header">
            <h3 class="">Lista de Pallets en Hoja de embarque</h3>
        </div>
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Pedido</th>
                            <th>Numero de pallet</th>
                            <th>Peso pallet</th>
                            <th>Marca de caja</th>
                            <th>Cantidad </th>
                            <th>Calibre</th>
                            <th>Hidrotermicol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listartotalpallet as $key): ?>
                            <tr>
                                <td><?php echo $key->pedido; ?></td>
                                <td><?php echo $key->numero_pallet; ?></td>
                                <td><?php echo $key->peso_pallet; ?></td>
                                <td><?php echo $key->marca_caja; ?></td>
                                <td><?php echo $key->cantidad; ?></td>
                                <td><?php echo $key->calibre; ?></td>
                                <td><?php echo $key->hidrotermico; ?></td>
                                <td>
                                    <a type="button" class="btn btn-primary update" id="<?php echo $key->id_embarques_pallet; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Actualizar</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<div id="content">


    <section class="section">
        <div class="card border-primary  ">
            <div class="card-header"></div>
            <div class="card-body">
                <div class="card-header">
                    <h2 class="text-center">Hoja de embarque</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h4>
                            Fecha:
                            <small class="text-muted"> <?php echo $datos[0]['fecha_embarque']; ?></small>
                            </h3>
                            <h4>
                                Trailer:
                                <small class="text-muted"> <?php echo $datos[0]['trailer']; ?></small>
                            </h4>
                            <h4>
                                Caja:
                                <small class="text-muted"> <?php echo $datos[0]['caja']; ?></small>
                            </h4>
                    </div>
                    <div class="col-md-4">
                        <h4>
                            Hora:
                            <small class="text-muted"> <?php echo $datos[0]['hora_embarque']; ?></small>
                        </h4>
                        <h4>
                            Chofer:
                            <small class="text-muted"> <?php echo $datos[0]['chofer']; ?></small>
                        </h4>
                        <h4>
                            Destinatario:
                            <small class="text-muted"> <?php echo $datos[0]['destinatario']; ?></small>
                        </h4>
                    </div>
                    <div class="col-4 ">
                        <h4>
                            Numero de envio:
                            <small class="text-muted"> <?php echo $datos[0]['numero_envio']; ?></small>
                        </h4>
                        <label class="form-label h4">Observaciones:</label>
                        <textarea class="form-control " rows="3">  <?php echo $datos[0]['observaciones']; ?></textarea>
                    </div>



                </div>
                <div class="row p-3">
                    <?php foreach ($listarpallet as $key): ?>
                        <div class="card text-dark bg-warning  col-5 mx-3 " style="width: 14rem;height:12rem;">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $key->numero_pallet; ?>&nbsp;&nbsp;&nbsp;<?php echo $key->termografo_pallet; ?><p class="text-center"><strong><?php echo $key->pedido; ?></strong></p>
                                </h6>
                                <p class="text-center"><?php echo $key->todos; ?> </p>
                                <p class=""><?php echo $key->marca_caja;  ?> &nbsp;&nbsp;&nbsp;<?php echo $key->hidrotermico; ?>&nbsp;&nbsp;&nbsp;<?php echo $key->peso_pallet; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <?php foreach ($sumaTotal as $key): ?>
                        <div class="card text-white bg-primary mx-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-warning">Total Pedido: <?php echo $key->pedido; ?></h5>
                                <p class="card-text"><strong><?php echo $key->todoss; ?></strong></p>
                                <hr>
                                <p class="card-text "><strong>Total: <?php echo $key->total; ?></strong></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>



</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Modificar pallet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="" id="upadte_pallet" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h6 class="">Pedido</h6>
                                <fieldset class="form-group">
                                    <select name="pedido" class="form-select">
                                        <option id="pedido" selected></option>
                                        <?php foreach ($listarpedidos as $key): ?>
                                            <option><?php echo $key->codigo_embarque; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label class="">Numero Pallet</label>
                                <input type="text" onkeyup="mayus(this);" id="numero_pallet" name="numero_pallet" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="">Peso pallet</label>
                                <input type="text" onkeyup="mayus(this);" id="peso_pallet" name="peso_pallet" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="">Marca caja</label>
                                <input type="text" onkeyup="mayus(this);" id="marca_caja" name="marca_caja" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="">Cantidad</label>
                                <input type="text" onkeyup="mayus(this);" id="cantidad" name="cantidad" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="">Calibre</label>
                                <input type="text" onkeyup="mayus(this);" id="calibre" name="calibre" class="form-control">
                            </div>
                            <div class="form-group">
                                <h6 class="">Hidrotermico</h6>
                                <fieldset class="form-group">
                                    <select name="hidrotermico" id="hidrotermico" class="form-select">
                                        <option>SI</option>
                                        <option>NO</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <h6 class="">termografo</h6>
                                <fieldset class="form-group">
                                    <select name="termografo_pallet" id="termografo_pallet" class="form-select">
                                        <option>SI</option>
                                        <option>NO</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>

                        <input type="hidden" name="id_embarques_pallet" id="id_embarques_pallet" value="">

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>


<section class="section">
    <div class="card">
        <button type="button" class="btn btn-primary btn-lg" name="button" id="printBtn">Imprimir</button>
    </div>
</section>


<?= $this->include("Footers/foot") ?>

<script type="text/javascript">
    //inseta pallet
    $(".addpallet").submit(function (event) {
        event.preventDefault();
        var datos = jQuery(this).serialize();
        var urll = "<?php echo base_url('Embarques/Insertarpallet'); ?>"
        jQuery.ajax({
            type: "POST",
            url: urll,
            data: datos,
            success: function (data) {
                window.location.reload(); // Recargar página
            }
        });
    });
</script>

<script type="text/javascript">
    function mayus(e) {
        e.value = e.value.toUpperCase();
    }
</script>

<script type="text/javascript">
    //obtener pallet
    $(document).ready(function () {
        $('.update').click(function () {
            var id = $(this).attr('id');
            event.preventDefault();
            var datos = id;
            var urll = "<?php echo base_url('Embarques/Obtener_embarque_pallet'); ?>" + '/' + id
            $.get(urll, function (data, status) {
                var obj = JSON.parse(data);
                $('#pedido').val(obj[0].pedido);
                $('#pedido').html(obj[0].pedido);
                $('#numero_pallet').val(obj[0].numero_pallet);
                $('#peso_pallet').val(obj[0].peso_pallet);
                $('#marca_caja').val(obj[0].marca_caja);
                $('#cantidad').val(obj[0].cantidad);
                $('#calibre').val(obj[0].calibre);
                $('#hidrotermico').val(obj[0].hidrotermico);
                //$('#hidrotermico').html(obj[0].hidrotermico);
                $('#termografo_pallet').val(obj[0].termografo_pallet);
                //$('#termografo').html(obj[0].termografo);
                $('#id_embarques_pallet').val(obj[0].id_embarques_pallet);
            });
        });
    });
</script>

<script type="text/javascript">
    //Modificar pallet
    $("#upadte_pallet").submit(function (event) {
        event.preventDefault();
        var datos = jQuery(this).serialize();
        var site = "<?php echo base_url('Embarques/Actualizar_embarque_pallet'); ?>"
        jQuery.ajax({
            type: "POST",
            url: site,
            data: datos,
            success: function (data) {
                window.location.reload(); // Recargar página
            }
        });
    });
</script>

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
