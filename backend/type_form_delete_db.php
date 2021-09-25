<meta charset="UTF-8">
<?php

include('condb.php'); 

$type_id =  mysqli_real_escape_string($con,$_REQUEST["ID"]);


$sql = "DELETE FROM tbl_type WHERE type_id='$type_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());


  
if($result){
  echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	';		
  echo '
  <script>
     setTimeout(function() {
    swal({
      title: "ลบสำเร็จ",
      text: "ลบข้อมูลประเภทหอพักสำเร็จ",
      type: "success"
    }, function() {
      window.location = "type.php";
    });
  }, 1000);
</script>
';
}else{
echo '
<script>
    setTimeout(function() {
    swal({
            title: "ลบไม่สำเร็จ!!",
            text: "ลบข้อมูลประเภทหอพักไม่สำเร็จ กรุณาลองใหม่อีกครั้ง",
            type: "warning"
        }, function() {
        window.location = "type.php";
    });
    }, 1000);
</script>
';

}
?>