<?php 
$menu = "dormitory";
?>
<title>จัดการหอพัก</title>
<?php include('header.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<br>
      <br>
            <?php
                  $act = (isset($_GET['act'])? $_GET['act'] : '');
                  if($act == 'add'){
                  include('dormitory_form_add.php');
                  }elseif ($act == 'edit') {
                  include('dormitory_form_edit.php');
                  }
                  else {
                  include('dormitory_list.php');
                  }
            ?>


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