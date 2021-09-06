<div class="page-content">

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3>Lista de Pedidos</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Codigo de embarque</th>
                            <th>sello de Cliente</th>
                            <th>Aeropuerto destino</th>
                            <th>Ejecutivo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listarpedidos as $key): ?>
                        <tr>
                            <td><?php echo $key->codigo_embarque;?></td>
                            <td><?php echo $key->sello_cliente;?></td>
                            <td><?php echo $key->aeropuerto_destino;?></td>
                            <td><?php echo $key->ejecutivo;?></td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <a class="btn btn-primary"
                                        href="<?php echo base_url('Pedidos/Obtenerpedido/'.$key->id_pedidos); ?>"
                                        role="button">Modificar</a>
                                    <a class="btn btn-warning delete"
                                        role="button" id="<?php echo $key->id_pedidos; ?>">Borrar</a>
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
        title: 'De verdad desea borrar?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: `Borrar`,
        denyButtonText: `No Borrar`,
      }).then((result) => {

        if (result.isConfirmed) {

          var url = "<?php echo base_url('Pedidos/Eliminar/'); ?>" + '/'+ id
          window.location.href = url;

        } else if (result.isDenied) {
          Swal.fire('Siempre no se borro', '', 'info')
        }
      })
    });
  });
</script>
