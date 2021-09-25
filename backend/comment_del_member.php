<meta charset="UTF-8">
<?php
include('condb.php'); 

$c_id =  mysqli_real_escape_string($con,$_REQUEST["ID"]);


// echo '<pre>';
// 	print_r($_REQUEST);
// 	echo '</pre>';
// 	exit();


$sql = "DELETE FROM tbl_comment WHERE c_id='$c_id'";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

// echo $sql;
// exit;

  
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
      text: "ลบข้อมูลความคิดเห็นสำเร็จ",
      type: "success"
    }, function() {
      window.location = "comment.php";
    });
  }, 100);
</script>
';
}
else{
echo "<script type='text/javascript'>";
echo "alert('ลบข้อมูลความคิดเห็นไม่สำเร็จ');";
echo "window.location = 'comment.php' ";
echo "</script>";
}

?>