<meta charset="UTF-8">
<?php 

include('../backend/condb.php');
  
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit(); 


$pro_id = mysqli_real_escape_string($con,$_POST['pro_id']);
$pro_name = mysqli_real_escape_string($con,$_POST['pro_name']);
$pro_detail = mysqli_real_escape_string($con,$_POST['pro_detail']);
$price = mysqli_real_escape_string($con,$_POST['price']);
$pro_price = mysqli_real_escape_string($con,$_POST['pro_price']);
$startdate = mysqli_real_escape_string($con,$_POST['startdate']);
$enddate = mysqli_real_escape_string($con,$_POST['enddate']);
$detail_contac = mysqli_real_escape_string($con,$_POST['detail_contac']);
$detail_Facilities = mysqli_real_escape_string($con,$_POST['detail_Facilities']);
$proimg2 = mysqli_real_escape_string($con,$_POST['proimg2']);

	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$proimg = (isset($_REQUEST['proimg']) ? $_REQUEST['proimg'] : '');
	$upload=$_FILES['proimg']['name'];
	if($upload !='') { 

		$path="../backend/pro_img/";
		$type = strrchr($_FILES['proimg']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../backend/pro_img/".$newname;
		move_uploaded_file($_FILES['proimg']['tmp_name'],$path_copy);  
	}else{
		$newname=$proimg2;
	}



	$sql = "UPDATE tbl_pro_dormitory SET 
	pro_name='$pro_name',
	pro_detail='$pro_detail',
	price='$price',
	pro_price='$pro_price',
	startdate='$startdate',
    detail_contac='$detail_contac',
    detail_Facilities='$detail_Facilities',
    proimg='$newname'
	WHERE pro_id=$pro_id" ;

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
				title: "แก้ไข",
				text: "แก้ไขโปรโมชั่นสำเร็จ",
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
            title: "แก้ไข",
            text: "แก้ไขโปรโมชั่นไม่สำเร็จ!!!!!!",
            type: "warning"
        }, function() {
            window.location = "promotion.php";
        });
    }, 100);
</script>
';
}
?>