 <!-- Main Footer -->
 <footer class="main-footer">
   <div>
     <span class="copyright">
       <center>
         © <script>
           document.write(new Date().getFullYear())
         </script>, Dinas PUPR Kab. Oku
     </span>
     </center>
   </div>
 </footer>
 </div>
 <!-- ./wrapper -->

 <!-- REQUIRED SCRIPTS -->

 <!-- Bootstrap -->
 <script src="<?php echo base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="<?php echo base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url('assets/') ?>dist/js/adminlte.js"></script>

 <!-- PAGE PLUGINS -->
 <!-- jQuery Mapael -->
 <script src="<?php echo base_url('assets/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/raphael/raphael.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
 <!-- ChartJS -->
 <script src="<?php echo base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>


 <!-- Bootstrap 4 -->
 <script src="<?php echo base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="<?php echo base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/jszip/jszip.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/pdfmake/pdfmake.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/pdfmake/vfs_fonts.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="<?php echo base_url('assets/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

 <!-- ini sep yang aku tambah line 55 56 62-66 -->
 <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>

 <!-- AdminLTE App -->
 <script src="<?php echo base_url('assets/') ?>dist/js/adminlte.min.js"></script>

 <!-- alert -->
 <script src="<?= base_url('assets/'); ?>dist/sweetalert2.all.min.js"></script>
 <script src="<?= base_url('assets/'); ?>dist/alert.js"></script>

 <!--  autocomplete-->
 <script src="<?= base_url('autocomplete/'); ?>js/jquery-ui.js"></script>

 <script type="text/javascript">
   //manggil data absensi di data pegawai
   $(document).ready(function() {
     $("#title").autocomplete({
       source: "<?php echo site_url('dataabsensi/get_autocomplete') ?>",
       select: function(event, ui) {
         $('[name="nm_pegawai"]').val(ui.item.label);
         $('[name="nip"]').val(ui.item.nip);
         $('[name="jenis_kelamin"]').val(ui.item.jenis_kelamin);
         $('[name="jabatan"]').val(ui.item.jabatan);
         $('[name="jenis_golongan"]').val(ui.item.jenis_golongan);
         $('[name="id_data_pegawai"]').val(ui.item.id_data_pegawai);
       }
     });
   });

   $(document).ready(function() {
     $('#example').DataTable();
   });

   
 </script>
 </body>

 </html>
