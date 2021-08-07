<footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p><script type="text/javascript">
                          document.write(new Date().getFullYear())
                        </script> &copy; RODEO - Frutas y Legumbres El Rodeo S.P.R de R.I</p>
                    </div>

                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js');?>"></script>

    <script src="<?php echo base_url('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>


    <script src="<?php echo base_url('assets/js/pages/dashboard.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/simple-datatables/simple-datatables.js');?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.all.min.js');?>"></script>
    <?php  echo session()->getFlashdata('mensaje'); ?>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>


    <script type="text/javascript">
    //inseta pallet
      $(".addpallet").submit(function(event) {
        event.preventDefault();
        var datos = jQuery(this).serialize();
        var urll = "<?php echo base_url('Rastreo/Insertarpallet'); ?>"
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
    // borra pallet
      $(document).ready(function() {
        $('.delete').click(function () {
          var id = $(this).attr('id');
          Swal.fire({
            title: 'Do you want to save the changes?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: `Borrar`,
            denyButtonText: `No Borrar`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              event.preventDefault();
              var datos = id;
              var urll = "<?php echo base_url('Rastreo/EliminarPallet'); ?>" + '/'+ id
              $.get(urll, function(data, status){
                window.location.reload(); // Recargar página
              });
            } else if (result.isDenied) {
              Swal.fire('Siempre no se borro', '', 'info')
            }
          })
        });
      });
    </script>


    <script type="text/javascript">
    //obtener pallet
    $(document).ready(function() {
      $('.update').click(function () {
        var id = $(this).attr('id');
        event.preventDefault();
        var datos = id;
        var urll = "<?php echo base_url('Rastreo/Obtenerpallet'); ?>" + '/'+ id
        $.get(urll, function(data, status){
          var obj = JSON.parse(data);
          $('#fecha').val(obj[0].fecha);
          $('#variedad').val(obj[0].variedad);
          $('#marca').val(obj[0].marca);
          $('#pallet').val(obj[0].pallet);
          $('#tamaño').val(obj[0].tamaño);
          $('#hidrotermico').val(obj[0].hidrotermico);
          $('#hidrotermico').html(obj[0].hidrotermico);
          $('#total').val(obj[0].total);
          $('#folio').val(obj[0].folio);
          $('#rastreo').val(obj[0].rastreo);
            $('#rastreo').html(obj[0].rastreo);
            $('#id_pallet').val(obj[0].id_pallet);
          });
        });
      });
    </script>


        <script type="text/javascript">
        //Modificar pallet
          $("#upadte_pallet").submit(function(event) {
            event.preventDefault();
            var datos = jQuery(this).serialize();
            var urll = "<?php echo base_url('Rastreo/Actualizarpallet'); ?>"
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


    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
</body>

</html>
