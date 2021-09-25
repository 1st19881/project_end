<meta charset="UTF-8">
<?php

include('condb.php');  

$a_id =  mysqli_real_escape_string($con,$_REQUEST["ID"]);



$sql = "DELETE FROM tbl_admin WHERE a_id='$a_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


  
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
      title: "ลบสำเร็จ",
      text: "ลบข้อมูลผู้ดูแลระบบสำเร็จ",
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
echo "alert('ลบข้อมูลผู้ดูแลระบบไม่สำเร็จ');";
echo "window.location = 'admin.php' ";
echo "</script>";
}


?>