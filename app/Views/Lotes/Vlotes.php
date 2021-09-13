<div class="page-content">

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3>Lista de Lotes</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Lote</th>
                            <th>Folio</th>
                            <th>Ubicacion</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarlotes as $key): ?>
                        <tr>
                            <td><?php echo $key->fecha;?></td>
                            <td><?php echo $key->lote;?></td>
                            <td><?php echo $key->folio;?></td>
                            <td><?php echo $key->ubicacion;?></td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <a class="btn btn-primary"
                                        href="<?php echo base_url('Lotes/Obtenerlote/'.$key->id_lotes); ?>"
                                        role="button">Modificar</a>
                                    <a class="btn btn-warning delete"
                                        id="<?php echo $key->id_lotes; ?>"
                                        role="button">Borrar</a>
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

          var url = "<?php echo base_url('Lotes/Eliminar/'); ?>" + '/'+ id
          window.location.href = url;

        } else if (result.isDenied) {
          Swal.fire('Cancelado', '', 'info')
        }
      })
    });
  });
</script>
