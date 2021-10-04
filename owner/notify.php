<html>
<title>จัดการโปรโมชั่น</title>
<head>
<?php session_start();
include('header.php');
$menu = "notify";
?> 
<head>
  <body>
  <div class="col-md-12">
            <?php 
            error_reporting( error_reporting() & ~E_NOTICE );
            include('notify_list.php');
            ?>
        </div>
  <?php include('footer.php'); ?> 