<div class="page-heading" id="content">
    <section>
        <div class="card  col-12 ">

            <div class="card-body ">
              <form class="" action="<?php echo base_url('/Embarques/insertarhembarque'); ?>" method="post">
                <div class="row">
                    <div class="col">
                        <label  class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha_embarque">
                    </div>
                    <div class="col">
                        <label  class="form-label">Trailer</label>
                        <input type="text" onkeyup="mayus(this);"   class="form-control" name="trailer">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label  class="form-label">Caja</label>
                        <input type="text" onkeyup="mayus(this);"   class="form-control" name="caja">
                    </div>
                    <div class="col">
                        <label class="form-label">Hora</label>
                        <input type="time"  class="form-control" name="hora_embarque">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label  class="form-label">Chofer</label>
                        <input type="text" onkeyup="mayus(this);"   class="form-control" name="chofer">
                    </div>
                    <div class="col">
                        <label  class="form-label">Destinatario</label>
                        <textarea class="form-control" onkeyup="mayus(this);"   name="destinatario" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label  class="form-label">Numero de envio</label>
                        <input type="text" onkeyup="mayus(this);"   class="form-control" name="numero_envio">
                    </div>
                    <div class="col">
                        <label  class="form-label">Observaciones</label>
                        <textarea class="form-control" onkeyup="mayus(this);"   name="observaciones" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit"  class="btn btn-primary btn-lg ">Guardar</button>
                </div>
                  </form>
            </div>

        </div>

    </section>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3>Lista de Embarques</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Destino</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarhembarques as $key): ?>
                        <tr>
                            <td><?php echo $key->fecha_embarque;?></td>
                            <td><?php echo $key->hora_embarque;?></td>
                            <td><?php echo $key->destinatario;?></td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <a class="btn btn-warning"
                                        href="<?php echo base_url('Embarques/Agregarpallet/'.$key->id_embarques); ?>"
                                        role="button">Agregar Pallets</a>
                                    <a class="btn btn-primary disabled"
                                        href="<?php echo base_url('Rastreo/Obtenerhrastreo/'); ?>"
                                        role="button" aria-disabled="true">Modificar</a>
                                    <a class="btn btn-warning disabled"
                                        href="<?php echo base_url('Rastreo/Eliminarhrastreo/'); ?>"
                                        role="button" aria-disabled="true">Borrar</a>
                                    <a class="btn btn-primary disabled"
                                        href="<?php echo base_url('Rastreo/pdf/'); ?>"
                                        role="button" aria-disabled="true">Inprimir Hoja</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
