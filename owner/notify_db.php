<meta charset="UTF-8">
<?php 

include('../backend/condb.php');
  
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
// exit(); 


$id = $_GET['id'];

$sql = "UPDATE tbl_comment_report SET 
	c_status=2
	WHERE id=$id" ;

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con). "<br>$sql");
	mysqli_close($con);
	

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
				title: "สำเร็จ",
				type: "success"
			}, function() {
				window.location = "notify.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('ไม่สำเร็จ');";
echo "window.location = 'notify.php'; ";
echo "</script>";
}
?>