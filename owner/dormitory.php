<html>
<title>จัดการหอพัก</title>
<head>
<?php session_start();
include('header.php');
$menu = "dormitory";
?> 
<head>
  <body>
  <div class="col-md-12">
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
        </div>
  <?php include('footer.php'); ?> 


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