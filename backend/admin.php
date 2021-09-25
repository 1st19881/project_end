<?php
$menu = "admin";
?>
<title>จัดการผู้ดูแลระบบ</title>
<?php include('header.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<br>
      <br>
            <?php
                  $act = (isset($_GET['act'])? $_GET['act'] : '');
                  if($act == 'add'){
                  include('admin_form_add.php');
                  }elseif ($act == 'edit') {
                  include('admin_form_edit.php');
                  }
                  elseif ($act == 'rwd') {
                  include('admin_form_rwd.php');
                  }
                  else {
                  include('admin_list.php');
                  }
                  ?>
        