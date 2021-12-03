<section class="section ">
  <div class="card " style="background-color:#435ebe;">
    <div class="card-body ">
      <div class="card-header text-center " style="background-color:#435ebe;">
        <p class="h2 text-warning">
          <strong class="h3 text-white badge rounded-pill bg-warning ">Agregar usuario</strong>
        </p>
      </div>
      <form action="<?php echo base_url('Usuarios/Actualizar'); ?>" method="post">
        <?php foreach ($datos as $key): ?>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <input type="hidden" name="id_usuario" value="<?php echo $key->id_usuario;?>">
              <h6 class="text-white">Rol</h6>
              <fieldset class="form-group">
                <select name="type" class="form-select">
                  <option><?php echo $key->type;?></option>
                  <option>LOTES</option>
                  <option>RASTREO</option>
                  <option>EMBARQUES</option>
                  <option>PAKING LIST</option>
                </select>
              </fieldset>
            </div>
            <div class="form-group">
              <label class="text-white">Usuario</label>
              <input type="text" onkeyup="mayus(this);" value="<?php echo $key->usuario;?>" name="usuario" class="form-control">
            </div>
            <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">Cambiar contraseña</button>
          </div>

          <div class="col-4">
            <div class="card text-dark bg-warning  ">
              <div class="card-body">
                <h5 class="card-title">
                  <p class="text-center"><strong>Roles</strong></p>
                </h5>
                <p class="text-center">Área de lotes: lotes</p>
                <p class="text-center">Área de rastreo: pedidos, rastreo</p>
                <p class="text-center">Embarques: embarques </p>
                <p class="text-center">Packing list: embarque y packing list </p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-warning btn-lg">Guardar cambios</button>
          </div>
        </div>
        <?php endforeach; ?>
      </form>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambio de contraseña</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Usuarios/Actualizar_contraseña'); ?>" method="post">
          <?php foreach ($datos as $key): ?>
          <input type="hidden" name="id_usuario" value="<?php echo $key->id_usuario;?>">
          <div class="form-group">
            <label class="text-warning">Cambiar contraseña</label>
            <input type="text" name="password" class="form-control border-warning">
          </div>
          <?php endforeach; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-warning">Guardar cambios</button>
      </div>
    </div>
    </form>
  </div>
</div>




<?=$this->include("Footers/foot")?>



<script type="text/javascript">
  function mayus(e) {
    e.value = e.value.toUpperCase();
  }
</script>
