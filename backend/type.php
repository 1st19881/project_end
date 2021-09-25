<?php $menu = "type";
?>
<title>จัดการประเภทหอพัก</title>
<?php include('header.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<br> 
      <br>
            <?php
                 $act = (isset($_GET['act'])? $_GET['act'] : '');
                  if($act == 'add'){
                  include('type_form_add.php');
                  }elseif ($act == 'edit') {
                  include('type_form_edit.php');
                  }
                  else {
                  include('type_list.php');
                  }
            ?>