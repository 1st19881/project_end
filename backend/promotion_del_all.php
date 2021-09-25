<meta charset="UTF-8">
<?php
include('condb.php');  

$sql = "TRUNCATE tbl_pro_dormitory";
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
				text: "ลบข้อมูลโปรโมชั่นทั้งหมดสำเร็จ",
				type: "success"
			}, function() {
				window.location = "promotion.php";
			});
		}, 1000);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('ไม่สำเร็จ ลบข้อมูลโปรโมชั่นทั้งหมดไม่สำเร็จ!!');";
echo "window.location = 'promotion.php'; ";
echo "</script>";
}
?>