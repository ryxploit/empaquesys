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
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($listarlotes as $key): ?>
                        <tr>
                            <td><?php echo $key->fecha;?></td>
                            <td><?php echo $key->lote;?></td>
                            <td><?php echo $key->folio;?></td>
                            <td><?php echo $key->ubicacion;?></td>
                            <td>
                              <a class="btn btn-warning" href="<?php echo base_url('Lotes/Obtenerlote/'.$key->id_lotes); ?>" role="button">Ver</a>
                              <a class="btn btn-danger" href="<?php echo base_url('Lotes/Eliminar/'.$key->id_lotes); ?>" role="button">Borrar</a>
                            </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
