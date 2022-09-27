 <footer class="footer">
   © 2022 <span class="d-none d-sm-inline-block"> - Developed <i class="mdi mdi-heart text-danger"></i> by TELLINK</span>.
 </footer>



 <script src="assets/js/jquery.min.js"></script>
 <script src="assets/js/bootstrap.bundle.min.js"></script>
 <script src="assets/js/metismenu.min.js"></script>
 <script src="assets/js/jquery.slimscroll.js"></script>
 <script src="assets/js/waves.min.js"></script>
 <script src="plugins/apexchart/apexcharts.min.js"></script>
 <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
 <script src="plugins/morris/morris.min.js"></script>
 <script src="plugins/raphael/raphael.min.js"></script>
 <script src="assets/pages/dashboard.init.js"></script>
 <script src="assets/pages/form-advanced.init.js"></script>
 <script src="assets/js/app.js"></script>
 <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
 <script src="plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
 <script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

 <script src="plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="assets/pages/datatables.init.js"></script>

 <script type="text/javascript">
   if ($('[data-toggle="tooltip"]')) {
     $('[data-toggle="tooltip"]').tooltip();
   }
   updateList = function() {
     var input = document.getElementById('file');
     var output = document.getElementById('fileList');

     output.innerHTML = '<ul>';
     for (var i = 0; i < input.files.length; ++i) {
       output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
     }
     output.innerHTML += '</ul>';
   }
 </script>