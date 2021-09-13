<div class="page-content">

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3>Lista de Hojas de rastreo</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Codigo</th>
                            <th>Destino</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarhrastreo as $key): ?>
                        <tr>
                            <td><?php echo $key->fecha;?></td>
                            <td><?php echo $key->codigo;?></td>
                            <td><?php echo $key->destino;?></td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <a class="btn btn-warning"
                                        href="<?php echo base_url('Rastreo/Obtenerrastreo/'.$key->id_rastreo); ?>"
                                        role="button">Agregar Pallets</a>
                                    <a class="btn btn-primary"
                                        href="<?php echo base_url('Rastreo/Obtenerhrastreo/'.$key->id_rastreo); ?>"
                                        role="button">Modificar</a>
                                    <a class="btn btn-warning delete"
                                        id="<?php echo $key->id_rastreo;?>"
                                        role="button">Borrar</a>
                                    <a class="btn btn-primary"
                                        href="<?php echo base_url('Rastreo/pdf/'.$key->id_rastreo); ?>"
                                        role="button">Inprimir Hoja</a>
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
// borrar pedido
  $(document).ready(function() {
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

          var url = "<?php echo base_url('Rastreo/Eliminarhrastreo/'); ?>" + '/'+ id
          window.location.href = url;

        } else if (result.isDenied) {
          Swal.fire('Cancelado', '', 'info')
        }
      })
    });
  });
</script>
