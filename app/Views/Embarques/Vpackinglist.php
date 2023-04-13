<div class="page-content">

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3>PACKING LIST</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Pedido</th>
                            <th>Numero de envio</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listar_packing as $key): ?>
                            <tr>
                                <td><?php echo $key->fecha_embarque; ?></td>
                                <td><?php echo $key->hora_embarque; ?></td>
                                <td><?php echo $key->pedido; ?></td>
                                <td><?php echo $key->numero_envio; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Embarques/Packing/' . $key->pedido); ?>" class="btn btn-primary"> ver</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
