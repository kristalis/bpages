<!-- Footer -->
   
    <footer class="footer text-center py-5 bg-black">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#">
              <i class="icon-social-instagram"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; belovedPages 2018</p>
      </div>
    </footer>
  <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
    <script src="js/belovedpages.js"></script>
    <script type="text/javascript">
    function display(div,inputfile,divfilename,hiddeninput ) {
        var id = $(div).attr('id');
       //$(div).click(function() {
        $(inputfile).trigger('click');
        $(inputfile).change(function() {
        var filename = $(inputfile).val();
        if (filename.substring(3,11) == 'fakepath') {
            filename = filename.substring(12);
        } // Remove c:\fake at beginning from localhost chrome
       $(divfilename).html(filename);
          $(hiddeninput).val(filename);
  // });
});

    }

</script>
    <!-- bootstrap time picker -->
<script src="js/bootstrap-timepicker.js"></script>
  <!-- bootstrap date picker -->
<script src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>

<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

<script type="text/javascript">
  
     //Timepicker
    $('.timepicker').timepicker({
   
    format: 'yyyy-mm-dd HH:mm:ss',
      showSeconds: true,
      showMeridian: false,   
      showInputs: false
         })



 /*
   autoclose: true,
    beforeShowDay: $.noop,
    calendarWeeks: false,
    clearBtn: false,
    daysOfWeekDisabled: [],
    endDate: Infinity,
    forceParse: true,
    format: 'mm/dd/yyyy',
    keyboardNavigation: true,
    language: 'en',
    minViewMode: 0,
    orientation: "auto",
    rtl: false,
    startDate: -Infinity,
    startView: 2,
    todayBtn: false,
    todayHighlight: false,
    weekStart: 0
 */

    //Date picker
    $('#datepicker').datepicker({

    format: 'yyyy-mm-dd',
    //viewMode: 'months',
       autoclose: true,
       todayHighlight: true,
       orientation: "bottom"
    })     
  </script>
  <script type="text/javascript">
     $('.form_datetime').datetimepicker({
      format: 'yyyy-mm-dd hh:ii',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });
</script>   
  </body>

</html>
