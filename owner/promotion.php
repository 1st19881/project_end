<html>
<title>จัดการโปรโมชั่น</title>
<head>
<?php session_start();
include('header.php');
$menu = "promotion";
?> 
<head>
  <body>
  <div class="col-md-12">
            <?php 
            error_reporting( error_reporting() & ~E_NOTICE );
            $act = (isset($_GET['act'])) ? $_GET['act'] : '';
                if($act == 'add'){
                include('form_promotion_add.php');
                }elseif ($act == 'edit') {
                include('form_promotion_edit.php');
                }else {
                include('promotion_list.php');
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