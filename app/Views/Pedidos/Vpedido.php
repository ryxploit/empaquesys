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
                                    <a class="btn btn-warning"
                                        href="<?php echo base_url('Pedidos/Eliminar/'.$key->id_pedidos); ?>"
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