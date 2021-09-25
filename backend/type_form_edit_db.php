<meta charset="UTF-8">
<?php
// เชื่อมต่อ database: 
include('condb.php'); 


  $type_id =  mysqli_real_escape_string($con,$_POST["type_id"]);
  $type_name =  mysqli_real_escape_string($con,$_POST["type_name"]);


	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	// exit;
  
  
  $sql = "UPDATE tbl_type SET  
      type_name='$type_name' 
      WHERE type_id='$type_id' ";

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
				text: "แก้ไขข้อมูลประเภทหอพักสำเร็จ",
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
          title: "แก้ไขไม่สำเร็จ",
          text: "แก้ไขประเภทหอพักไม่สำเร็จ!!!!!!",
          type: "warning"
      }, function() {
          window.location = "type.php";
      });
  }, 1000);
</script>
';
}

?>