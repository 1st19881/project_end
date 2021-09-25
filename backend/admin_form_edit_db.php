<meta charset="UTF-8">
<?php
include('condb.php');  


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;



  $a_id = mysqli_real_escape_string($con,$_POST["a_id"]);
  $a_user = mysqli_real_escape_string($con,$_POST["a_user"]);
  $a_pass  =  mysqli_real_escape_string($con,$_POST["a_pass"]);
  $a_name = mysqli_real_escape_string($con,$_POST["a_name"]);
  $a_level =  mysqli_real_escape_string($con,$_POST["a_level"]);

  
  $sql = "UPDATE tbl_admin SET  
      a_user='$a_user' , 
      a_pass='$a_pass' , 
      a_name='$a_name',
      a_level='$a_level' 
      WHERE a_id='$a_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 


  
echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
';		
if($result){
  echo '
  <script>
     setTimeout(function() {
    swal({
      title: "แก้ไขสำเร็จ",
      text: "แก้ไขข้อมูลผู้ดูแลระบบสำเร็จ",
      type: "success"
    }, function() {
      window.location = "admin.php";
    });
  }, 100);
</script>
';
}
else{
echo "<script type='text/javascript'>";
echo "alert('แก้ไขข้อมูลผู้ดูแลระบบไม่สำเร็จ');";
echo "window.location = 'admin.php?act=edit'; ";
echo "</script>";
}
?>