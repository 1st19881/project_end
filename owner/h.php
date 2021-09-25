<?php 

$member_id = $_SESSION['member_id'];
$m_name = $_SESSION['m_name'];
$level_m = $_SESSION['user_level'];

if($level_m!='เจ้าของหอพัก'){
 Header("Location: ../form_login_user.php");    
 
}?>

<?php 
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit;

include('../backend/condb.php');

// สร้างตัวแปร session ไว้ใช้งาน

$member_id = $_SESSION['member_id'];
$m_name= $_SESSION['m_name'];
$user_level= $_SESSION['user_level'];


$s="น.";
$d="วันที่";
$t="เวลา";

// echo $member_id;
// echo '<br>';
// echo $m_name;
// echo '<br>';
// echo $user_level;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


 
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <!-- Google Font: Source Sans Pro -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">




<style>
body{
  font-family: 'Kanit', sans-serif;
  background-color:#f8f9fa;
  background-size: auto;
    }
    .bg-dark {
    background-color: #060606!important;
}
</style>

  </head>
<body >

  