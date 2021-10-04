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
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | ระบบค้นหาแนะนำหอพัก</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


 <link rel="stylesheet" href="../backend/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck for checkboxes and radio inputs -->

  <link rel="stylesheet" href="../backend/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- DataTables -->

  <link rel="stylesheet" href="../backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../backend/assets/dist/css/adminlte.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../backend/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../backend/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<style>
body{
  font-family: 'Kanit', sans-serif;
    }
</style>


