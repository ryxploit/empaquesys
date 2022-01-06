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
                        <label  class="form-label">Termografo(Numero de Pallet)</label>
                        <input type="text" onkeyup="mayus(this);"   class="form-control" name="termografo">
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
                            <th>Termografo</th>
                            <th class="text-end"></th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarhembarques as $key): ?>
                        <tr>
                            <td><?php echo $key->fecha_embarque;?></td>
                            <td><?php echo $key->hora_embarque;?></td>
                            <td><?php echo $key->destinatario;?></td>
                             <td><?php echo $key->termografo;?></td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <a class="btn btn-warning"
                                        href="<?php echo base_url('Embarques/Agregarpallet/'.$key->id_embarques); ?>"
                                        role="button">Agregar Pallets</a>
                                        <a type="button" class="btn btn-primary update" id="<?php echo $key->id_embarques; ?>"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">Modificar</a>
                                    <a class="btn btn-warning delete"
                                           id="<?php echo $key->id_embarques; ?>"
                                           role="button">Borrar</a>
                                </div>
                            </td>
                            <td>
                              <?php if ($key->status_embarque == 'enviado'): ?>
                                <h4>Enviado</h4>
                              <?php else: ?>
                                <h4>No Enviado</h4>
                              <?php endif; ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="">Modificar Embarque</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="" id="upadte_embarque" method="post">
              <div class="row">
                  <div class="col">
                      <label  class="form-label">Fecha</label>
                      <input type="date" class="form-control" id="fecha_embarque" name="fecha_embarque">
                  </div>
                  <div class="col">
                      <label  class="form-label">Trailer</label>
                      <input type="text" onkeyup="mayus(this);" id="trailer"  class="form-control" name="trailer">
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <label  class="form-label">Caja</label>
                      <input type="text" onkeyup="mayus(this);" id="caja"  class="form-control" name="caja">
                  </div>
                  <div class="col">
                      <label class="form-label">Hora</label>
                      <input type="time"  class="form-control" id="hora_embarque" name="hora_embarque">
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <label  class="form-label">Chofer</label>
                      <input type="text" onkeyup="mayus(this);" id="chofer"  class="form-control" name="chofer">
                  </div>
                  <div class="col">
                        <label  class="form-label">Termografo(Numero de Pallet)</label>
                        <input type="text" onkeyup="mayus(this);"   class="form-control" name="termografo">
                    </div>
                  <div class="col">
                      <label  class="form-label">Destinatario</label>
                      <textarea class="form-control" onkeyup="mayus(this);" id="destinatario"  name="destinatario" rows="3"></textarea>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <label  class="form-label">Numero de envio</label>
                      <input type="text" onkeyup="mayus(this);"   class="form-control" id="numero_envio" name="numero_envio">
                  </div>
                  <div class="col">
                      <label  class="form-label">Observaciones</label>
                      <textarea class="form-control" onkeyup="mayus(this);" id="observaciones"  name="observaciones" rows="3"></textarea>
                  </div>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="status_embarque" value="enviado" id="enviar">
                <label class="" for="">
                  Enviar Embarque
                </label>
              </div>

              <input type="hidden" name="id_embarques" id="id_embarques" value="">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>
<?=$this->include("Footers/foot")?>

<script type="text/javascript">
function mayus(e) {
  e.value = e.value.toUpperCase();
}
</script>

<script type="text/javascript">
//obtener pallet
$(document).ready(function() {
  $('.update').click(function () {
    var id = $(this).attr('id');
    event.preventDefault();
    var datos = id;
    var urll = "<?php echo base_url('Embarques/Obtener_embarque'); ?>" + '/'+ id
    $.get(urll, function(data, status){
      var obj = JSON.parse(data);
      $('#fecha_embarque').val(obj[0].fecha_embarque);
      $('#trailer').val(obj[0].trailer);
      $('#caja').val(obj[0].caja);
      $('#hora_embarque').val(obj[0].hora_embarque);
      $('#chofer').val(obj[0].chofer);
      $('#termografo').val(obj[0].termografo);
      $('#destinatario').val(obj[0].destinatario);
        $('#destinatario').html(obj[0].destinatario)
      $('#numero_envio').val(obj[0].numero_envio);
        $('#observaciones').val(obj[0].observaciones);
      $('#observaciones').html(obj[0].observaciones);
      // $('#enviar').val(obj[0].status_embarque);
          $('#id_embarques').val(obj[0].id_embarques);
      });
    });
  });
</script>

<script type="text/javascript">
//Modificar pallet
  $("#upadte_embarque").submit(function(event) {
    event.preventDefault();
    var datos = jQuery(this).serialize();
    var site = "<?php echo base_url('Embarques/Actualizar_embarque'); ?>"
    jQuery.ajax({
      type: "POST",
      url: site,
      data: datos,
      success: function(data)
      {
        window.location.reload(); // Recargar página
      }
    });
  });
</script>

<script type="text/javascript">
// borrar pedido
    $(document).ready(function () {
        $('.delete').click(function () {
            var id = $(this).attr('id');
            Swal.fire({
                title: 'Desea borrar?',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: `Borrar`,
                denyButtonText: `Cancelar`,
            }).then((result) => {

                if (result.isConfirmed) {

                    var url = "<?php echo base_url('Embarques/Eliminar_embarque'); ?>" + '/' + id
                    window.location.href = url;

                } else if (result.isDenied) {
                    Swal.fire('Cancelado', '', 'info')
                }
            })
        });
    });
</script>
