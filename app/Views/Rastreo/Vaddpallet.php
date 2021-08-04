<section class="section ">
      <div class="card Text-white" style="background-color:#2AE28D;">
          <div class="card-body">
            <div class="card-header text-center " style="background-color:#2AE28D;" >
            <p class="h2 text-primary"> <strong class="h3 text-white badge rounded-pill bg-primary ">Pedido:</strong> <?php echo $dato[0]['codigo'];  ?></p>
          </div>
          <form class="" action="<?php echo base_url('Rastreo/Insertarpallet'); ?> " method="post">
              <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                        <label class="text-white" >Fecha</label>
                        <input type="date" name="fecha" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="text-white" >Variedad</label>
                        <input type="text" name="variedad" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label class="text-white" >Marca</label>
                        <input type="text" name="marca" class="form-control" >
                    </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-white" >Pallet</label>
                                    <input type="text" name="pallet" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label class="text-white" >Tamaño</label>
                                    <input type="text" name="tamaño" class="form-control" >
                                </div>
                                <div class="form-group">
                                  <h6 class="text-white">Hidrotermico</h6>
                                          <fieldset class="form-group">
                                              <select name="hidrotermico" class="form-select" >
                                                  <option>si</option>
                                                  <option>no</option>
                                              </select>
                                          </fieldset>
                                </div>

                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="text-white" >Total</label>
                                                <input type="text" name="total" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label class="text-white" >Folio</label>
                                                <input type="text" name="folio" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                              <h6 class="text-white">Rastreo</h6>
                                                      <fieldset class="form-group">
                                                          <select name="rastreo" class="form-select">
                                                            <?php foreach ($listarlotes as $key): ?>
                                                              <option><?php echo $key->lote;?></option>
                                                              <?php endforeach; ?>
                                                          </select>
                                                      </fieldset>
                                            </div>
                                            <input type="hidden" name="codigo_rastreo" value="<?php echo $dato[0]['codigo'];?>">
                                            <input type="hidden" name="codigo_rastreo" value="<?php echo $dato[0]['id_rastreo'];?>">
                                                      </div>

                              <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-lg">Agregar Pallet</button>
                              </div>
                          </div>
                        </form>
                      </div>
                  </div>
              </section>



  <section class="section" >
      <div class="card text-white" style="background-color:#2AE28D;">
          <div class="card-header" style="background-color:#2AE28D;">
             <h3 class="text-white">Lista de Pallets en  Hojas de rastreo</h3>
          </div>
          <div class="card-body text-white">
              <table class="table text-white" >
                  <thead>
                      <tr>
                          <th>Fecha</th>
                          <th>Destino</th>
                          <th>Accion</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>02/06/2021</td>
                          <td>C0543</td>
                          <td>
                            <a class="btn btn-warning" href="<?php echo base_url('Rastreo/Agregarpallet'); ?>" role="button">Ver</a>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </section>
