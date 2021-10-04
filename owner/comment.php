<html>
<title>จัดการหอพัก</title>
<head>
<?php session_start();
include('header.php');
$menu = "comment";
?> 
<head>
  <body>
  <div class="col-md-12">
            <?php 
            error_reporting( error_reporting() & ~E_NOTICE );
            include('comment_list.php');
            ?>
        </div>
  <?php include('footer.php'); ?> 