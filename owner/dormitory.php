<html>
<link rel="stylesheet" href="../backend/assets/dist/css/adminlte.min.css">
<title>จัดการหอพัก</title>
<head>
<?php 
session_start();
include('h.php');
$menu = "dormitory";
?> 
<head>
  <body>
  <?php include('navbar.php');?>
    <div class="container-fluid">
  <p></p>
    <br><br><br>
    <div class="row">
      <div class="col-md-2 "><br>
        <!-- Left side column. contains the logo and sidebar -->
        <?php include('menu.php');?>
        <!-- Content Wrapper. Contains page content -->
      </div>
      <div class="col-md-10">
        <br>
                  <?php 
                  error_reporting( error_reporting() & ~E_NOTICE );
                  $act = (isset($_GET['act'])) ? $_GET['act'] : '';
                      if($act == 'add'){
                      include('form_add_dormitory.php');
                      }elseif ($act == 'edit') {
                      include('form_edit_dormitory.php');
                      }else {
                      include('dormitory_list.php');
                      }
                  ?>

              <br>
              <br>
              <br>
              <br>

        </div>
      </div>
  </div>
  <footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ระบบแนะนำค้นหาหอพัก 2021 devCS</p>
    </div>
    <!-- /.container -->
</footer>

<script src="../ckeditor/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'detail' );
</script>
<script>
      CKEDITOR.replace( 'detail1' );
</script>
<script>
      CKEDITOR.replace( 'detail2' );
</script>
<script>
      CKEDITOR.replace( 'detail3' );
</script>