<html>
<link rel="stylesheet" href="../backend/assets/dist/css/adminlte.min.css">
<head>
<?php 
session_start();
include('h.php');
$menu = "promotion";
?>

    <head>

    <body>
        <div class="container-fluact">
            <?php include('navbar.php');?>
            <p></p>
            <br><br><br>
            <div class="row">
                <div class="col-md-2 "><br>
                    <!-- Left side column. contains the logo and sidebar -->
                    <?php include('menu.php');?>
                    <!-- Content Wrapper. Contains page content -->
                </div>
                <div class="col-md-10 ">
                    <br>
                    <?php 
                      error_reporting( error_reporting() & ~E_NOTICE );
                      $act = (isset($_GET['act'])) ? $_GET['act'] : '';
                          if($act == 'add'){
                          include('form_promotion_add.php');
                          }else if ($act == 'edit') {
                          include('form_promotion_edit.php');
                          }else {
                          include('promotion_list.php');
                          }
                        ?>
                    <br><br><br><br>
                </div>
            </div>
        </div>
        <br>
        <br>
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

    </body>

</html>