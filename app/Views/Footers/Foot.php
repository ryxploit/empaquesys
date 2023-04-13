<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>
                <script type="text/javascript">
                    document.write(new Date().getFullYear())
                </script> &copy; RODEO - Frutas y Legumbres El Rodeo S.P.R de R.I
            </p>
        </div>
    </div>
</footer>
</div>
</div>
<script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/dataTables.buttons.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/buttons.print.min.js'); ?>" type="text/javascript"></script>


<script src="<?php echo base_url('assets/js/pages/dashboard.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendors/simple-datatables/simple-datatables.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>
<?php echo session()->getFlashdata('mensaje'); ?>


<script type="text/javascript">
//$(document).ready(function() {
//  $('#table1').DataTable( {
//      dom: 'Bfrtip',
//      buttons: [
//          'print'
//      ]
//  } );
//} );


                    // Simple Datatable
                    let table1 = document.querySelector('#table1');
                    let dataTable = new simpleDatatables.DataTable(table1);

</script>



<script src="<?php echo base_url('assets/js/printThis.js'); ?>"></script>


<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>
