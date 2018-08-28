<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  @section('script-footer')
  
  <!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{ asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- <script src="{{ asset('admin/dist/js/pages/dashboard.js')}}"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('admin/dist/js/demo.js')}}"></script> -->

  <script>
function validateForm() {
    var title = document.forms["postfrom-admin"]["title"].value;
    var subtitle = document.forms["postfrom-admin"]["subtitle"].value;
    var slug = document.forms["postfrom-admin"]["slug"].value;
    var image = document.forms["postfrom-admin"]["image"].value;
    if (title == "") {
      document.getElementById('validation-1').innerHTML = '<div class="alert alert-danger" role="alert">Required Ttitle</div>';
        return false;
    }

     if (subtitle == "") {
      document.getElementById('validation-2').innerHTML = '<div class="alert alert-danger" role="alert">Required Subtitle</div>';
        return false;
    }
    if (slug == "") {
      document.getElementById('validation-3').innerHTML = '<div class="alert alert-danger" role="alert">Required Slug</div>';
        return false;
    }
    if (image == "") {
      document.getElementById('validation-4').innerHTML = '<div class="alert alert-danger" role="alert">Required Image</div>';
        return false;
    }

    

    

}

function validateFormtag(){
    var name = document.forms["tag-admin"]["name"].value;
    var slug = document.forms["tag-admin"]["slug"].value;
    if (name == "") {
      document.getElementById('validation-1').innerHTML = '<div class="alert alert-danger" role="alert">Required Nmae</div>';
        return false;
    }

     if (slug == "") {
      document.getElementById('validation-2').innerHTML = '<div class="alert alert-danger" role="alert">Required Slug</div>';
        return false;
    }

}

function validateFormcategory(){
    var name = document.forms["category-admin"]["name"].value;
    var slug = document.forms["category-admin"]["slug"].value;
    if (name == "") {
      document.getElementById('validation-1').innerHTML = '<div class="alert alert-danger" role="alert">Required Nmae</div>';
        return false;
    }

     if (slug == "") {
      document.getElementById('validation-2').innerHTML = '<div class="alert alert-danger" role="alert">Required Slug</div>';
        return false;
    }

}
//function url active menu
    $(document).ready(function() {
        var url = window.location; 
        var element = $('ul.sidebar-menu a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0; }).parent().addClass('active');
        
    });

</script>

@endsection



