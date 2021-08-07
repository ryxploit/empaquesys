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
                            <th class="text-center">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($listarhrastreo as $key): ?>
                        <tr>
                            <td><?php echo $key->fecha;?></td>
                            <td><?php echo $key->codigo;?></td>
                            <td><?php echo $key->destino;?></td>
                            <td class="text-center">
                              <a class="btn btn-warning" href="<?php echo base_url('Rastreo/Obtenerrastreo/'.$key->id_rastreo); ?>" role="button">Ver</a>
                              <a class="btn btn-warning" href="<?php echo base_url('Rastreo/Obtenerhrastreo/'.$key->id_rastreo); ?>" role="button">Modificar</a>
                              <a class="btn btn-danger" href="<?php echo base_url('Rastreo/Eliminarhrastreo/'.$key->id_rastreo); ?>" role="button">Borrar</a>
                            </td>
                        </tr>
                          <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
