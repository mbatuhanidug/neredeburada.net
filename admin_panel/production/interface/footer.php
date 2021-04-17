       <!-- footer content -->
       <footer>
           <div class="pull-right">
               Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
           </div>
           <div class="clearfix"></div>
       </footer>
       <!-- /footer content -->
       </div>
       </div>


       <script src="../template/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
       <script src="../template/vendors/jquery/dist/jquery.min.js"></script>
       <script src="../template/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
       <script src="../template/vendors/fastclick/lib/fastclick.js"></script>
       <script src="../template/vendors/nprogress/nprogress.js"></script>
       <script src="../template/vendors/Chart.js/dist/Chart.min.js"></script>
       <script src="../template/vendors/gauge.js/dist/gauge.min.js"></script>
       <script src="../template/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
       <script src="../template/vendors/iCheck/icheck.min.js"></script>
       <script src="../template/vendors/skycons/skycons.js"></script>
       <script src="../template/vendors/Flot/jquery.flot.js"></script>
       <script src="../template/vendors/Flot/jquery.flot.pie.js"></script>
       <script src="../template/vendors/Flot/jquery.flot.time.js"></script>
       <script src="../template/vendors/Flot/jquery.flot.stack.js"></script>
       <script src="../template/vendors/Flot/jquery.flot.resize.js"></script>
       <script src="../template/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
       <script src="../template/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
       <script src="../template/vendors/flot.curvedlines/curvedLines.js"></script>
       <script src="../template/vendors/DateJS/build/date.js"></script>
       <script src="../template/vendors/jqvmap/dist/jquery.vmap.js"></script>
       <script src="../template/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
       <script src="../template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
       <script src="../template/vendors/moment/min/moment.min.js"></script>
       <script src="../template/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
       <script src="../template/build/js/custom.min.js"></script>
       <script src="../Controller/admin.js"></script>
       <script src="../Controller/ajax.js"></script>
       </body>

       </html>
       <script type="text/javascript">
           $.getJSON("../inc/il-bolge.json", function(sonuc) {
               $("#il").append("<option value='0'>İl Seçin</option>");
               $.each(sonuc, function(index, value) {
                   var row = "";
                   row += '<option value="' + value.il + '">' + value.il + '</option>';
                   $("#il").append(row);
               })
           });
           $("#il").on("change", function() {
               var il = $(this).val();
               $("#ilce").attr("disabled", false).html("<option value='0'>İlçe Seçin</option>");
               $.getJSON("../inc/il-ilce.json", function(sonuc) {
                   $.each(sonuc, function(index, value) {
                       var row = "";
                       if (value.il == il) {
                           row += '<option value="' + value.ilce + '">' + value.ilce + '</option>';
                           $("#ilce").append(row);
                       }
                   });
               });
           });
       </script>

       <script>
           $.getJSON("../inc/il-bolge.json", function(sonuc) {
               $("#il").append("<option value='0'>Seçiniz..</option>");
               var il = '<?= $ayar['il'] ?>';
               $.each(sonuc, function(index, value) {
                   var row = "";
                   row += '<option value="' + value.il + '"' + (il == value.il ? 'selected' : '') + ' >' + value.il + '</option>';
                   $("#il").append(row);
               })
           });

           $.getJSON("../inc/il-ilce.json", function(sonuc) {
               var il = '<?= $ayar['il'] ?>';
               var ilcee = '<?= $ayar['ilce'] ?>';
               $("#ilce").attr("disabled", false).html("<option value='0'>Seçiniz..</option>");
               $.each(sonuc, function(index, value) {
                   var row = "";
                   if (value.il == il) {
                       row += '<option value="' + value.ilce + '"' + (ilcee == value.ilce ? 'selected' : '') + ' >' + value.ilce + '</option>';
                       $("#ilce").append(row);
                   }
               });
           });

           $("#il").on("change", function() {
               var il = $(this).val();
               $("#ilce").attr("disabled", false).html("<option value='0'>Seçiniz..</option>");
               $.getJSON("../inc/il-ilce.json", function(sonuc) {
                   $.each(sonuc, function(index, value) {
                       var row = "";
                       if (value.il == il) {
                           row += '<option value="' + value.ilce + '">' + value.ilce + '</option>';
                           $("#ilce").append(row);
                       }
                   });
               });
           });
       </script>