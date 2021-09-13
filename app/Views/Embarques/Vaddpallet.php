<section class="section ">
    <div class="card " style="background-color:#435ebe;">
        <div class="card-body " >
            <div class="card-header text-center " style="background-color:#435ebe;" >
              <p class="h2 text-warning">
                  <strong class="h3 text-white badge rounded-pill bg-warning ">Embarque:</strong>
                  <?php echo $datos[0]['numero_envio'];  ?>
              </p>
            </div>
            <form class="addpallet" method="post">
                <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                          <h6 class="text-white">Pedido</h6>
                          <fieldset class="form-group">
                              <select name="pedido" class="form-select">
                                <?php foreach ($listarpedidos as $key): ?>
                                <option><?php echo $key->codigo_embarque;?></option>
                                <?php endforeach; ?>
                              </select>
                          </fieldset>
                      </div>
                        <div class="form-group">
                            <label class="text-white" >Numero Pallet</label>
                            <input type="text"  onkeyup="mayus(this);"  name="numero_pallet" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">peso pallet</label>
                            <input type="text"  onkeyup="mayus(this);"  name="peso_pallet" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="text-white">Marca caja</label>
                            <input type="text"  onkeyup="mayus(this);"  name="marca_caja" class="form-control">
                        </div>
                        <div class="form-group">
                            <label  class="text-white" >Cantidad</label>
                            <input type="text"  onkeyup="mayus(this);"  name="cantidad" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Calibre</label>
                            <input type="text"  onkeyup="mayus(this);"  name="calibre" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                      <div class="card text-dark bg-warning  " >
                        <div class="card-body">
                          <h5 class="card-title">Numero de Pallet</h5>
                          <p class="text-start">Peso Pallet.</p>
                          <p class="text-center">Calibre - Cantidad.</p>
                          <p class="text-end">Marca de Caja.</p>
                        </div>
                      </div>
                    </div>

                    <input type="hidden" name="embarque_id" value="<?php echo $datos[0]['id_embarques'];  ?>">
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-lg">Agregar Pallet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>



<section class="section">

  <div class="card border-primary  " >
  <div class="card-header"></div>
  <div class="card-body">

    <div class="row">
      <?php foreach ($listarpallet as $key): ?>
      <div class="card text-dark bg-warning  col-5 mx-3" >
        <div class="card-body">
          <h5 class="card-title"><?php echo $key->numero_pallet;?></h5>
          <p class="text-start"><?php echo $key->peso_pallet;?></p>
          <p class="text-center"><?php echo $key->todos;?> </p>
          <p class="text-end"><?php echo $key->marca_caja;?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</div>

</section>

<?=$this->include("Footers/foot")?>

<script type="text/javascript">
//inseta pallet
  $(".addpallet").submit(function(event) {
    event.preventDefault();
    var datos = jQuery(this).serialize();
    var urll = "<?php echo base_url('Embarques/Insertarpallet'); ?>"
    jQuery.ajax({
      type: "POST",
      url: urll,
      data: datos,
      success: function(data)
      {
        window.location.reload(); // Recargar página
      }
    });
  });
</script>

<script type="text/javascript">
function mayus(e) {
  e.value = e.value.toUpperCase();
}
</script>
