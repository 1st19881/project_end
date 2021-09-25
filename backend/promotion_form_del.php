<meta charset="UTF-8">
<?php

include('condb.php'); 

$pro_id =  $_REQUEST["pro_id"];



$sql = "DELETE FROM tbl_pro_dormitory WHERE pro_id='$pro_id' ";
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
      title: "ลบสำเร็จ !!",
      text: "ลบข้อมูลโปรโมชั่นสำเร็จ",
      type: "success"
    }, function() {
      window.location = "promotion.php";
    });
  }, 100);
</script>
';
}
else{
  echo '
  <script>
     setTimeout(function() {
      swal({
          title: "ลบไม่สำเร็จ",
          text: "ลบข้อมูลโปรโมชั่นไม่สำเร็จ!!!!!!",
          type: "warning"
      }, function() {
          window.location = "promotion.php";
      });
  }, 100);
</script>
';
}
?>