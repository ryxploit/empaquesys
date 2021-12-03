<div class="page-content">
  <section class="section ">
    <div class="card  text-white  " style="background-color:#2AE28D;">

      <div class="card-body">
        <form class="" action="<?php echo base_url('Rastreo/Actualizarhrastreo'); ?>" method="post">
          <div class="row">
            <input type="hidden" name="id_rastreo" value="<?php echo $dato[0]['id_rastreo'];?>">
            <div class="col-md-6">
              <div class="form-group">
                <label class="text-white">Fecha</label>
                <input type="date" value="<?php echo $dato[0]['fecha'];?>" name="fecha" class="form-control">
              </div>
              <div class="form-group">
                <h6 class="text-white">Codigo</h6>
                <fieldset class="form-group">
                  <select name="codigo" class="form-select">
                    <option value="<?php echo $dato[0]['codigo'];?>">
                      <?php echo $dato[0]['codigo'];?></option>
                    <?php foreach ($listarpedidos as $key): ?>
                    <option value="<?php echo $key->codigo_embarque;?>">
                      <?php echo $key->codigo_embarque;?></option>
                    <?php endforeach; ?>
                  </select>
                </fieldset>
              </div>
              <div class="form-group">
                <label class="text-white">Sello</label>
                <input type="text" value="<?php echo $dato[0]['sello'];?>" name="sello" class="form-control">
              </div>
              <div class="form-group">
                <h6 class="text-white">Capuchon</h6>
                <fieldset class="form-group">
                  <select name="capuchon" class="form-select">
                    <option value="<?php echo $dato[0]['capuchon'];?>">
                      <?php echo $dato[0]['capuchon'];?></option>
                    <option>negro</option>
                    <option>blanco</option>
                    <option>rosas</option>
                  </select>
                </fieldset>
              </div>
              <div class="form-group">
                <h6 class="text-white">Fondo</h6>
                <fieldset class="form-group">
                  <select name="fondo" class="form-select">
                    <option value="<?php echo $dato[0]['fondo'];?>"><?php echo $dato[0]['fondo'];?>
                    </option>
                    <option>negro</option>
                    <option>blanco</option>
                    <option>conbinado</option>
                  </select>
                </fieldset>
              </div>
            </div>
            <div class="col-md-6">

              <div class="form-group">
                <h6 class="text-white">Malla</h6>
                <fieldset class="form-group">
                  <select name="malla" class="form-select">
                    <option value="<?php echo $dato[0]['malla'];?>"><?php echo $dato[0]['malla'];?>
                    </option>
                    <option>si</option>
                    <option>No</option>
                    <option>base</option>
                  </select>
                </fieldset>
              </div>
              <div class="form-group">
                <h6 class="text-white">Termografo</h6>
                <fieldset class="form-group">
                  <select name="termografo" class="form-select">
                    <option value="<?php echo $dato[0]['termografo'];?>">
                      <?php echo $dato[0]['termografo'];?></option>
                    <option>si</option>
                    <option>no</option>
                  </select>
                </fieldset>
              </div>
              <div class="form-group">
                <label class="text-white">Destino</label>
                <input type="text" value="<?php echo $dato[0]['destino'];?>" name="destino" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Guardar carmbios</button>
              </div>

            </div>

          </div>
        </form>
      </div>
    </div>
  </section>


</div>
