<?php

$menu = "member";

?>
<title>จัดการสมาชิก</title>
<?php include('header.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<br>
      <br>
            <?php
                  $act = (isset($_GET['act'])? $_GET['act'] : '');
                  if($act == 'add'){
                        include('member_form_add.php');
                  }elseif ($act == 'edit') {
                        include('member_form_edit.php');
                  }
                  else {
                  include('member_list.php');
                  }
            ?>
       
